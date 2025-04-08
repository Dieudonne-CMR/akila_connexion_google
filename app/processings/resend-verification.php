<?php
session_start();
include "../../@ressouce/class.db.php";
include "../../@ressouce/class.register.php";
include "../fonctions/fonction.php";
include "../fonctions/MailService.php";

header('Content-Type: application/json');

// Vérifier si l'email est présent en session
if (!isset($_SESSION['verification_email'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Aucun email de vérification trouvé en session.'
    ]);
    exit;
}

$email = $_SESSION['verification_email'];
$action = $_SESSION['verification_action'] ?? 'login';
$userData = $_SESSION['verification_user_data'] ?? [];

$emailService = new EmailService();

try {
    // Envoyer un nouveau magic link
    if ($action == 'register') {
        $nom = $userData['nom'] ?? '';
        $prenom = $userData['prenom'] ?? '';
        $result = $emailService->sendMagicLink($email, $nom, $prenom, 'register', $userData);
    } else {
        // Récupérer les infos de l'utilisateur pour le login
        $DB = new DB();
        $db = $DB->db;
        $Register = new Register($db);
        $user = $Register->query("SELECT * FROM admin WHERE email=:email LIMIT 1", array("email" => $email));
        
        if (count($user) > 0) {
            $nom = $user[0]->nom;
            $prenom = $user[0]->prenom;
            $result = $emailService->sendMagicLink($email, $nom, $prenom, 'login');
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Utilisateur non trouvé.'
            ]);
            exit;
        }
    }
    
    echo json_encode([
        'success' => true,
        'message' => 'Un nouveau lien a été envoyé à votre adresse email.'
    ]);
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'error' => 'Erreur lors de l\'envoi du lien: ' . $e->getMessage()
    ]);
} 