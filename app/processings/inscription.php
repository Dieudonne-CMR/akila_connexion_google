<?php
 // Démarrer la session si elle n'est pas déjà démarrée
 if (session_status() === PHP_SESSION_NONE) {
    session_start();    
}

include "../../@ressouce/class.db.php";
include "../../@ressouce/class.register.php";
require "../fonctions/fonction.php";
include "../fonctions/MailService.php";
$DB=new DB();
$db=$DB->db;
$Register=new Register($db);  
/* 
 var_dump($_POST); */


 if(isset($_POST['check2'])) {
    $nom=$prenom=$tel=$ville=$pays=$email=$passconfirm='';
    // extract($_POST);
    // var_dump($_POST);
    $nom=test_input($_POST['nom']); 
    $prenom= test_input($_POST['prenom']);
    $tel=test_input($_POST['telephone']);
    // $ville=$_SESSION['visiteur']['ville'];
    // $pays= $_SESSION['visiteur']['pays'];
    $email=test_input($_POST['email']);
    $password=test_input($_POST['password']);
    $passconfirm=test_input($_POST['passconfirm']);
    $inscrit="oui";

    if($password == $passconfirm){
        // var_dump($prenom.' ;'. $nom.';'.$tel.';'.$email.';');
        if(!empty($nom) AND !empty($prenom) AND !empty($tel) AND !empty($email)){
            $veri= $Register->query("SELECT email FROM admin WHERE email=:em LIMIT 1",array("em"=>$email));
            if (sizeof($veri)<1) {
                // Au lieu d'insérer directement l'utilisateur, nous allons envoyer un email avec un lien magique
                
                // Stocker les données de l'utilisateur pour une utilisation ultérieure
                $userData = [
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'telephone' => $tel,
                    'email' => $email,
                    'ville' => $ville,
                    'pays' => $pays,
                    'password' => md5($password) // Stocker le mot de passe hashé
                ];
                
               
                // Stocker l'email et l'action pour la page de vérification
                $_SESSION['verification_email'] = $userData['email'];
                $_SESSION['verification_action'] = 'register';
                $_SESSION['verification_user_data'] = $userData;
                
                // Envoyer l'email avec le lien magique
                $emailService = new EmailService();
                $emailService->sendMagicLink($email, $nom, 'register', $userData, $prenom);
                
                echo 'ok';
                exit;
            } else {
                echo '1'; //------- Ce compte existe déjà
                exit;
            }
        } else {
            echo '2'; //------- Veuillez remplir tous les champs
            exit;
        }
    } else {
        echo '3'; //------- les mots de passes ne sont pas identiques
        exit;
    }
}
 else {
    echo '2'; // Veuillez accepter les conditions d'utilisation
    exit;
} 