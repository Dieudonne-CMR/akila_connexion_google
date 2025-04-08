<?php
include_once '../../@ressouce/class.db.php';
include_once "auth-google/google-client.php";
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
        $baseUrl = BASE_URL;
        $verifyUrl = "$baseUrl/app/processings/verify.php?token=$token&email=" . urlencode($email) . "&action=$action";
        
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
            $subject = "🌟 Bienvenue sur Akila Blog Factory - Votre aventure commence ici";
            $headerTitle = "Bienvenue dans la communauté Akila Blog Factory";
            $messageContent = "
                <p>Nous sommes ravis de vous accueillir dans notre communauté de créateurs de contenu ! Pour commencer votre voyage avec nous, veuillez confirmer votre inscription en cliquant sur le bouton ci-dessous :</p>
                <div class='btn-container'>
                    <a href='$verifyUrl' class='btn'>🚀 Démarrer mon aventure</a>
                </div>
                <p class='info'>Ce lien est valable pendant 24 heures. Si vous n'avez pas demandé à créer un compte, veuillez ignorer cet email.</p>";
            $buttonText = "Démarrer mon aventure";
        } else {
            $subject = "🔐 Connexion à votre espace Akila Blog Factory";
            $headerTitle = "Connexion sécurisée à votre espace";
            $messageContent = "
                <p>Vous avez demandé à accéder à votre espace créateur sur Akila Blog Factory. Cliquez sur le bouton ci-dessous pour vous connecter en toute sécurité :</p>
                <div class='btn-container'>
                    <a href='$verifyUrl' class='btn'>🔓 Accéder à mon espace</a>
                </div>
                <p class='info'>Ce lien est valable pendant 24 heures et ne peut être utilisé qu'une seule fois. Si vous n'avez pas demandé à vous connecter, veuillez ignorer cet email et vérifier la sécurité de votre compte.</p>";
            $buttonText = "Accéder à mon espace";
        }
        
        // Créer le template HTML complet
        $content = "
        <html>
        <head>
            <meta charset='UTF-8'>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&display=swap');
                
                body { 
                    font-family: 'Plus Jakarta Sans', Arial, sans-serif !important; 
                    line-height: 1.6; 
                    color: #2d3748 !important;
                    background-color: #f7fafc;
                    margin: 0;
                    padding: 0;
                }
                .container { 
                    max-width: 600px; 
                    margin: 20px auto; 
                    padding: 0;
                    border-radius: 16px;
                    overflow: hidden;
                    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
                    background-color: #ffffff;
                }
                .header { 
                    background: linear-gradient(135deg, #4f46e5, #7c3aed);
                    color: white; 
                    padding: 40px 20px; 
                    text-align: center;
                }
                .header h1 {
                    margin: 0;
                    font-weight: 800;
                    font-size: 32px;
                    letter-spacing: -0.5px;
                }
                .content { 
                    padding: 40px; 
                }
                .welcome-text {
                    font-size: 18px;
                    margin-bottom: 30px;
                    color: #4a5568 !important;
                }
                .name {
                    font-weight: 700;
                    color: #2d3748;
                }
                .info {
                    margin: 30px 0;
                    font-size: 15px;
                    color: #4a5568 !important;
                    padding: 20px;
                    background-color: #f8fafc;
                    border-radius: 12px;
                    border-left: 4px solid #4f46e5;
                }
                .btn-container {
                    text-align: center;
                    margin: 40px 0;
                }
                .btn {
                    display: inline-block;
                    background: linear-gradient(135deg, #4f46e5, #7c3aed);
                    color: #fff !important;
                    padding: 16px 32px;
                    text-decoration: none;
                    border-radius: 12px;
                    font-weight: 600;
                    font-size: 16px;
                    box-shadow: 0 4px 12px rgba(79, 70, 229, 0.2);
                    transition: all 0.3s ease;
                }
                .btn:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 6px 15px rgba(79, 70, 229, 0.3);
                }
                .footer { 
                    text-align: center; 
                    padding: 30px;
                    background-color: #f8fafc;
                    border-top: 1px solid #e2e8f0;
                    font-size: 14px;
                    color: #4a5568 !important;
                }
                p{
                    color:#000 !important;    
                }
                .footer p {
                    margin: 8px 0;
                }
                .logo {
                    margin-bottom: 20px;
                }
                .logo img {
                    width: 150px;
                    height: auto;
                }
                .divider {
                    height: 1px;
                    background-color: #e2e8f0;
                    margin: 30px 0;
                }
                .social-links {
                    margin: 25px 0;
                }
                .social-links a {
                    display: inline-block;
                    margin: 0 10px;
                    color: #4f46e5;
                    text-decoration: none;
                    font-weight: 500;
                    transition: color 0.3s ease;
                }
                .social-links a:hover {
                    color: #7c3aed;
                }
                .highlight {
                    color: #4f46e5;
                    font-weight: 600;
                }
                .expiry-notice {
                    font-size: 14px;
                    color: #718096 !important;
                    font-style: italic;
                    text-align: center;
                    margin-top: 20px;
                }
             /*    .features {
                    margin: 30px 0;
                    display: grid !important;
                    grid-template-columns: repeat(2, 1fr) !important;
                    gap: 20px !important;
                } */
                .feature-item {
                    background: #f8fafc;
                    padding: 15px;
                    border-radius: 8px;
                    text-align: center;
                }
                .feature-icon {
                    font-size: 24px;
                    margin-bottom: 10px;
                    color: #4f46e5;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <div class='logo'>
                        <img src='https://akila-blog-factory.com/assets/images/logo.png' alt='AKILA BLOG FACTORY'>
                    </div>
                    <h1>$headerTitle</h1>
                </div>
                <div class='content'>
                    <p class='welcome-text'>Bonjour <span class='name'>$firstName $lastName</span> 👋,</p>
                    
                    $messageContent
                    
                    <div style='margin:30px 0; display:grid !important; grid-template-columns: repeat(2, 1fr) !important; gap:20px !important;'>
                        <div class='feature-item'>
                            <div class='feature-icon'>📝</div>
                            <p>Créez des blogs professionnels</p>
                        </div>
                        <div class='feature-item'>
                            <div class='feature-icon'>🚀</div>
                            <p>Optimisez votre visibilité</p>
                        </div>
                    </div>
                    
                    <div class='divider'></div>
                    
                    <p>Chez <span class='highlight'>AKILA BLOG FACTORY</span>, nous vous accompagnons dans la création de votre présence en ligne professionnelle. 🌟</p>
                    
                    <p class='expiry-notice'>Ce lien expirera dans 24 heures pour des raisons de sécurité.</p>
                </div>
                <div class='footer'>
                    <p>Besoin d'aide ? Notre équipe est là pour vous accompagner.</p>
                    <div class='social-links'>
                        <a href='https://www.facebook.com/akilablogfactory' target='_blank'>Facebook</a> •
                        <a href='https://www.instagram.com/akilablogfactory' target='_blank'>Instagram</a> •
                        <a href='https://akila-blog-factory.com/contact' target='_blank'>Contact</a>
                    </div>
                    <p>&copy; " . date('Y') . " AKILA BLOG FACTORY. Tous droits réservés.</p>
                </div>
            </div>
        </body>
        </html>
        ";
        
        return $this->sendMail($email, $subject, $content, true);
    }


}
