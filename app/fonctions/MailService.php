<?php
include_once '../../@ressouce/class.db.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "../../vendor/autoload.php";
/* require __DIR__ . '/../vendor/autoload.php'; */


class EmailService {
    private $mailer;
    private $defaultFromEmail;
    private $defaultFromName;
    private $conn;

    /**
     * Initialise le service d'email avec les paramètres SMTP
     */
    public function __construct() {
        $database = new DB();
        $this->conn = $database->db;
        $this->mailer = new PHPMailer(true);     
        $this->defaultFromEmail = "akilawebfactory2025@gmail.com ";
        $this->defaultFromName = "AKILA BLOG FACTORY";

        try {
            // Configuration du serveur SMTP
            $this->mailer->isSMTP();
            $this->mailer->Host = 'smtp.gmail.com';
            $this->mailer->SMTPAuth = true;
            $this->mailer->Username = $this->defaultFromEmail;
            $this->mailer->Password = "nxmw mxaj wcct kgni";
            $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $this->mailer->Port = "587";            
            
            // Paramètres par défaut
            $this->mailer->setFrom($this->defaultFromEmail, $this->defaultFromName);
            $this->mailer->isHTML(true);
            $this->mailer->CharSet = 'UTF-8';
        } catch (Exception $e) {
            die("Erreur SMTP : " . $e->getMessage());
        }
    }

    /**
     * Envoie un email standard
     * 
     * @param string $email Adresse email du destinataire
     * @param string $sujet Sujet de l'email
     * @param string $contenu Contenu de l'email
     * @param bool $isHtml Définit si le contenu est au format HTML
     * @return string Message de succès ou erreur
     */
    public function sendMail($email, $sujet, $contenu, $isHtml = true) {
        try {
            $this->mailer->clearAddresses(); // Nettoyer les destinataires précédents
            $this->mailer->addAddress($email);
            $this->mailer->Subject = $sujet;
            
            // Contenu
            $this->mailer->isHTML($isHtml);
            $this->mailer->Body = $contenu;
            if ($isHtml) {
                $this->mailer->AltBody = strip_tags($contenu);
            }
            
            // Ajout des destinataires en BCC
        /*     $this->mailer->addBCC('email.notifications@1pub.net');
            $this->mailer->addBCC('1pubagency@gmail.com');
            $this->mailer->addBCC('cabroleleungang@gmail.com');
 */
            $this->mailer->send();
            return "Email envoyé avec succès à $email";
        } catch (Exception $e) {
            return "Erreur lors de l'envoi de l'email : " . $this->mailer->ErrorInfo;
        }
    }

    /**
     * Génère un token sécurisé unique pour l'authentification par lien magique
     * 
     * @param string $email Email de l'utilisateur
     * @param PDO $bdd Connexion à la base de données
     * @return string Le token généré
     */
    private function generateSecureToken($email) {
        // Supprimer les tokens expirés pour cet utilisateur
        $stmt = $this->conn->prepare("DELETE FROM verification_token WHERE identifier = ? AND expires < NOW()");
        $stmt->execute([$email]);
        
        // Générer un nouveau token
        $token = bin2hex(random_bytes(32));
        
        // Calculer la date d'expiration (24 heures)
        $expires = date('Y-m-d H:i:s', strtotime('+24 hours'));
        
        // Enregistrer le token dans la base de données
        $stmt = $this->conn->prepare("INSERT INTO verification_token (identifier, token, expires) VALUES (?, ?, ?)");
        $stmt->execute([$email, $token, $expires]);
        
        return $token;
    }

    /**
     * Envoie un email avec un lien magique pour l'authentification
     * 
     * @param string $email Adresse email du destinataire
     * @param string $firstName Prénom de l'utilisateur
     * @param string $lastName Nom de l'utilisateur (optionnel)
     * @param string $action Type d'action ('register' ou 'login')
     * @param array $userData Données utilisateur pour l'inscription
     * @param PDO $bdd Connexion à la base de données
     * @return string Message de succès ou erreur
     */
    public function sendMagicLink($email, $firstName, $action,$userData = [], $lastName = '') {
        // Générer le token sécurisé
        $token = $this->generateSecureToken($email);
        
        // Construire l'URL sécurisée
        $baseUrl = in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1']) ? $_ENV['GOOGLE_REDIRECT_URI'] : $_ENV['GOOGLE_REDIRECT_URI_SERVER'];
        $verifyUrl = "$baseUrl/verify.php?token=$token&email=" . urlencode($email) . "&action=$action";
        
        // Stocker les données d'utilisateur en session si c'est une inscription
        if ($action === 'register' && !empty($userData)) {
            // Sérialiser et encoder les données pour les stocker temporairement
             // Démarrer la session si elle n'est pas déjà démarrée
            if (session_status() === PHP_SESSION_NONE) {
                session_start();    
            }
            $_SESSION['pending_registration_' . md5($email)] = $userData;
        }
        
        // Déterminer le sujet et le contenu selon l'action
        if ($action === 'register') {
            $subject = "🌟 Bienvenue sur Akila Web Factory - Confirmez votre inscription";
            $headerTitle = "Bienvenue chez Akila Web Factory !";
            $messageContent = "
                <p>Merci de vous être inscrit sur notre plateforme de santé et bien-être. Pour finaliser votre inscription et accéder à nos services, veuillez cliquer sur le bouton ci-dessous :</p>
                <div class='btn-container'>
                    <a href='$verifyUrl' class='btn'>✅ Confirmer mon inscription</a>
                </div>
                <p class='info'>Ce lien est valable pendant 24 heures. Si vous n'avez pas demandé à créer un compte, veuillez ignorer cet email.</p>";
            $buttonText = "Confirmer mon inscription";
        } else {
            $subject = "🔐 Connexion à AKILA WEB FACTORY";
            $headerTitle = "Connexion sécurisée";
            $messageContent = "
                <p>Vous avez demandé à vous connecter à votre compte YEMAK WELLNESS. Cliquez sur le bouton ci-dessous pour vous connecter en toute sécurité :</p>
                <div class='btn-container'>
                    <a href='$verifyUrl' class='btn'>🔓 Me connecter maintenant</a>
                </div>
                <p class='info'>Ce lien est valable pendant 24 heures et ne peut être utilisé qu'une seule fois. Si vous n'avez pas demandé à vous connecter, veuillez ignorer cet email et vérifier la sécurité de votre compte.</p>";
            $buttonText = "Me connecter";
        }
        
        // Créer le template HTML complet
        $content = "
        <html>
        <head>
            <meta charset='UTF-8'>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&display=swap');
                
                body { 
                    font-family: 'Plus Jakarta Sans', Arial, sans-serif; 
                    line-height: 1.6; 
                    color: #333;
                    background-color: #f5f6fa;
                    margin: 0;
                    padding: 0;
                }
                .container { 
                    max-width: 600px; 
                    margin: 20px auto; 
                    padding: 0;
                    border-radius: 12px;
                    overflow: hidden;
                    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                    background-color: #ffffff;
                }
                .header { 
                    background-color: #f59e0b; 
                    background-image: linear-gradient(135deg, #f59e0b, #1e7e34);
                    color: white; 
                    padding: 30px 20px; 
                    text-align: center;
                }
                .header h1 {
                    margin: 0;
                    font-weight: 700;
                    font-size: 28px;
                    letter-spacing: -0.5px;
                }
                .content { 
                    padding: 35px; 
                }
                .welcome-text {
                    font-size: 18px;
                    margin-bottom: 25px;
                    color: #4b5563;
                }
                .name {
                    font-weight: 700;
                    color: #111827;
                }
                .info {
                    margin: 25px 0;
                    font-size: 15px;
                    color: #6b7280;
                    padding: 15px;
                    background-color: #f8fafc;
                    border-radius: 8px;
                    border-left: 4px solid #f59e0b;
                }
                .btn-container {
                    text-align: center;
                    margin: 35px 0;
                }
                .btn {
                    display: inline-block;
                    background-color: #f59e0b;
                    background-image: linear-gradient(135deg, #f59e0b, #1e7e34);
                    color: white;
                    padding: 14px 30px;
                    text-decoration: none;
                    border-radius: 8px;
                    font-weight: 600;
                    font-size: 16px;
                    box-shadow: 0 3px 8px rgba(40, 167, 69, 0.3);
                    transition: all 0.2s ease;
                }
                .btn:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 5px 12px rgba(40, 167, 69, 0.4);
                }
                .footer { 
                    text-align: center; 
                    padding: 25px;
                    background-color: #f8fafc;
                    border-top: 1px solid #e5e7eb;
                    font-size: 14px;
                    color: #6b7280;
                }
                .footer p {
                    margin: 5px 0;
                }
                .logo {
                    margin-bottom: 15px;
                }
                .logo img {
                    width: 120px;
                    height: auto;
                }
                .divider {
                    height: 1px;
                    background-color: #e5e7eb;
                    margin: 25px 0;
                }
                .social-links {
                    margin: 20px 0;
                }
                .social-links a {
                    display: inline-block;
                    margin: 0 8px;
                    color: #6b7280;
                    text-decoration: none;
                }
                .social-links a:hover {
                    color: #f59e0b;
                }
                .highlight {
                    color: #f59e0b;
                    font-weight: 600;
                }
                .expiry-notice {
                    font-size: 13px;
                    color: #6b7280;
                    font-style: italic;
                    text-align: center;
                    margin-top: 15px;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <div class='logo'>
                        <img src='https://yemak-wellness.com/assets/images/ye.png' alt='AKILA BLOG FACTORY'>
                    </div>
                    <h1>$headerTitle</h1>
                </div>
                <div class='content'>
                    <p class='welcome-text'>Bonjour <span class='name'>$firstName $lastName</span> 👋,</p>
                    
                    $messageContent
                    
                    <div class='divider'></div>
                    
                    <p>Chez <span class='highlight'>AKILA BLOG FACTORY</span>, nous sommes dédiés à vous offrir les meilleurs services de santé et bien-être. 🌿</p>
                    
                    <p class='expiry-notice'>Ce lien expirera dans 24 heures pour des raisons de sécurité.</p>
                </div>
                <div class='footer'>
                    <p>Si vous avez des questions, n'hésitez pas à nous contacter.</p>
                    <div class='social-links'>
                        <a href='https://www.facebook.com/yemaksantebeaute/' target='_blank'>Facebook</a> •
                        <a href='https://www.instagram.com/yemaksantebeaute/' target='_blank'>Instagram</a> •
                        <a href='https://yemak-wellness.com/contact' target='_blank'>Contact</a>
                    </div>
                    <p>&copy; " . date('Y') . " AKILA BLOG FACTORY. Tous droits réservés.</p>
                </div>
            </div>
        </body>
        </html>
        ";
        
        return $this->sendMail($email, $subject, $content, true);
    }

    /**
     * Envoie un email avec les identifiants de connexion à un nouveau membre
     * 
     * @param string $email Adresse email du destinataire
     * @param string $firstName Prénom du membre
     * @param string $lastName Nom du membre
     * @param string $username Nom d'utilisateur généré
     * @param string $password Mot de passe généré
     * @return string Message de succès ou erreur
     */
    
}
