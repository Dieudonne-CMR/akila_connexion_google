<?php
// Initialiser la session
session_start();

include ('../../../@ressouce/class.db.php');
include ("../../functions/function_user.php");
include ("../../helpers/Session.php");
include ("../../../@ressouce/class.admin.php");
include ('google-client.php');
include ('GoogleAuth.php');



unset($_SESSION['google_session']);
// Vérifier s'il y a un code d'autorisation dans l'URL
if (!isset($_GET['code'])) {
    // Rediriger vers la page d'inscription si aucun code n'est présent
    header('Location: app/login-up.php');
    exit;
}

// Récupérer le code d'autorisation
$authCode = $_GET['code'];

// Vérifier si on vient de la page de login
$isFromLogin = isset($_SESSION['auth_source']) && $_SESSION['auth_source'] === 'login';

try {
    // Initialiser l'authentification Google
    // passer en parametre le client id et le client secret
    $googleAuth = new GoogleAuth(GOOGLE_CLIENT_ID, GOOGLE_CLIENT_SECRET, GOOGLE_REDIRECT_URI);
    
    // Échanger le code d'autorisation contre un jeton d'accès
    $tokenData = $googleAuth->getAccessToken($authCode);
    
    if (!$tokenData || !isset($tokenData['access_token'])) {
        throw new Exception("Impossible d'obtenir le jeton d'accès");
    }
    
    // Récupérer les informations de l'utilisateur
    $userInfo = $googleAuth->getUserInfo($tokenData['access_token']);
    
    if (!$userInfo) {
        throw new Exception("Impossible d'obtenir les informations de l'utilisateur");
    }
    
    // Vérifier si l'utilisateur existe déjà dans la base de données
    $email = $userInfo['email'] ?? null;
    
    if (!isset($email)) {
        throw new Exception("L'adresse email est manquante dans les informations Google");
    }
    ddddddddddddddd
   
} catch (Exception $e) {
    // Rediriger vers la page d'erreur avec le message
    $errorMessage = urlencode($e->getMessage());
    echo $e->getMessage();
   /*  header("Location: ../error.php?error=$errorMessage"); */
    exit;
} 