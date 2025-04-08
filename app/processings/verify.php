<?php
session_start();
include_once "../../@ressouce/class.db.php";
include "../../@ressouce/class.register.php";
include "../../@ressouce/class.verification.token.php";
include "../fonctions/fonction.php";
include "../fonctions/MailService.php";

// Initialisation des classes
$DB = new DB();
$db = $DB->db;
$Register = new Register($db);
$VerificationToken = new VerificationToken();

// Récupération des paramètres
$token = isset($_GET['token']) ? $_GET['token'] : null;
$email = isset($_GET['email']) ? $_GET['email'] : null;
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

// Redirection par défaut en cas d'erreur
$errorRedirect = '../page-login.php';
$successRedirect = '../index.php';

// Vérification de la présence des paramètres nécessaires
if (empty($token) || empty($email)) {
    $_SESSION['error_message'] = "Paramètres manquants pour la vérification.";
    header("Location: $errorRedirect");
    exit;
}

// Vérifier la validité du token
if (!$VerificationToken->verifyToken($email, $token)) {
    $_SESSION['error_message'] = "Le lien de vérification est invalide ou a expiré.";
    header("Location: $errorRedirect");
    exit;
}

// Action dépendant du type de demande (inscription ou connexion)
if ($action === 'register') {
    // Récupération des données d'inscription en attente
    $userData = $VerificationToken->getPendingRegistrationData($email);
    
    if (!$userData) {
        $_SESSION['error_message'] = "Les données d'inscription sont introuvables ou ont expiré.";
        header("Location: $errorRedirect");
        exit;
    }
    
    // Vérifier si l'utilisateur existe déjà
    $existingUser = $Register->query("SELECT * FROM admin WHERE email=:email LIMIT 1", array("email" => $email));
    
    if (count($existingUser) > 0) {
        $VerificationToken->deleteTokenExpiresFromUser($email);
        // L'utilisateur existe déjà, nous pouvons simplement le connecter
        $_SESSION['skl'] = [
            'id' => $existingUser[0]->id,
            'nom' => $existingUser[0]->nom,
            'prenom' => $existingUser[0]->prenom,
            'email' => $existingUser[0]->email,
            'supadmin' => $existingUser[0]->sup_admin,
            'telephone' => $existingUser[0]->telephone,
            'ville' => $existingUser[0]->ville,
            'password' => $existingUser[0]->password,
            'active' => $existingUser[0]->active,
            'matricule_admin' => $existingUser[0]->matricule_admin,
            'matricule_akila_blog' => $existingUser[0]->matricule_akila_blog,
            'permission' => $existingUser[0]->permission,
            'inscrit' => $existingUser[0]->inscrit
        ];
        
        header("Location: $successRedirect");
        exit;
    }
    
    // Créer un nouveau compte utilisateur
    $matricule_admin = $Register->rand();
    $password = md5(uniqid()); // Génère un mot de passe aléatoire (l'utilisateur pourra le changer plus tard)
    
    $Register->query(
        "INSERT INTO admin(nom, prenom, telephone, email, ville, active, password, matricule_admin, inscrit) 
        VALUES(:nom, :prenom, :tel, :mail, :ville, :active, :pass, :matricule_admin, :inscrit)",
        array(
            'nom' => $userData['nom'] ?? '',
            'prenom' => $userData['prenom'] ?? '',
            'tel' => $userData['telephone'] ?? '',
            'mail' => $email,
            'ville' => $userData['ville'] ?? '',
            'active' => '1', // Compte activé
            'pass' => $password,
            'matricule_admin' => $matricule_admin,
            'inscrit' => 'oui'
        )
    );
    
    // Récupérer l'utilisateur nouvellement créé
    $newUser = $Register->query("SELECT * FROM admin WHERE email=:email LIMIT 1", array("email" => $email));
    
    if (count($newUser) > 0) {
        $VerificationToken->deleteTokenExpiresFromUser($email);
        // Créer la session utilisateur
        $_SESSION['skl'] = [
            'id' => $newUser[0]->id,
            'nom' => $newUser[0]->nom,
            'prenom' => $newUser[0]->prenom,
            'email' => $newUser[0]->email,
            'supadmin' => $newUser[0]->sup_admin,
            'telephone' => $newUser[0]->telephone,
            'ville' => $newUser[0]->ville,
            'password' => $newUser[0]->password,
            'active' => $newUser[0]->active,
            'matricule_admin' => $newUser[0]->matricule_admin,
            'matricule_akila_blog' => $newUser[0]->matricule_akila_blog,
            'permission' => $newUser[0]->permission,
            'inscrit' => $newUser[0]->inscrit
        ];
        
        $_SESSION['success_message'] = "Votre compte a été créé avec succès !";
        header("Location: $successRedirect");
        exit;
    } else {
        $_SESSION['error_message'] = "Une erreur est survenue lors de la création de votre compte.";
        header("Location: $errorRedirect");
        exit;
    }
} else {
    // Connexion d'un utilisateur existant
    $user = $Register->query("SELECT * FROM admin WHERE email=:email LIMIT 1", array("email" => $email));
    
    if (count($user) > 0) {
        $VerificationToken->deleteTokenExpiresFromUser($email);
        // Créer la session utilisateur
        $_SESSION['skl'] = [
            'id' => $user[0]->id,
            'nom' => $user[0]->nom,
            'prenom' => $user[0]->prenom,
            'email' => $user[0]->email,
            'supadmin' => $user[0]->sup_admin,
            'telephone' => $user[0]->telephone,
            'ville' => $user[0]->ville,
            'password' => $user[0]->password,
            'active' => $user[0]->active,
            'matricule_admin' => $user[0]->matricule_admin,
            'matricule_akila_blog' => $user[0]->matricule_akila_blog,
            'permission' => $user[0]->permission,
            'inscrit' => $user[0]->inscrit
        ];
        
        header("Location: $successRedirect");
        exit;
    } else {
        $_SESSION['error_message'] = "Utilisateur introuvable.";
        header("Location: $errorRedirect");
        exit;
    }
}
