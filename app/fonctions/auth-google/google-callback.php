<?php
// Initialiser la session
session_start();
include ("../../helpers/Session.php");
include ("../../../@ressouce/class.admin.php");
include ('google-client.php');
include ('GoogleAuth.php');




// Vérifier s'il y a un code d'autorisation dans l'URL
if (!isset($_GET['code'])) {
    // Rediriger vers la page d'inscription si aucun code n'est présent
    header('Location: ../../login-up.php');
    exit;
}

// Récupérer le code d'autorisation
$authCode = $_GET['code'];

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
    $admin = new admin();
    $user = $admin->createOrUpdateFromGoogle($userInfo);
    if (!$user) {
        throw new Exception("Impossible d'authentifier l'utilisateur à travers Google");
    }
 
   
  
    // L'utilisateur existe déjà, le connecter directement
   
               $_SESSION['skl']=[
                    'id'=>$user["id"],
                   'nom'=>$user["nom"],
                   'prenom'=>$user["prenom"],
                   'email'=>$user["email"],
                   'supadmin'=>$user["sup_admin"],
                   'telephone'=>$user["telephone"],
                   'ville'=>$user["ville"],
                   'password'=>$user["password"],
                   'active'=>$user["active"],
                   'matricule_admin'=>$user["matricule_admin"],
                   'matricule_akila_blog'=>$user["matricule_akila_blog"],
                   'permission'=>$user["permission"],
                   'inscrit'=>$user["inscrit"]                   

               ];
              /*  var_dump(isset($_SESSION['skl'])); */
    //login($user);
    
    
    header('Location: ../../index.php');
    exit;
   
   
} catch (Exception $e) {
    // Rediriger vers la page d'erreur avec le message
    $errorMessage = urlencode($e->getMessage());
    echo $e->getMessage();
   /*  header("Location: ../error.php?error=$errorMessage"); */
    exit;
} 