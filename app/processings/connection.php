<?php 

session_start();
include_once "../../@ressouce/class.db.php";
include_once "../../@ressouce/class.register.php";
include "../fonctions/MailService.php";
require "../fonctions/fonction.php";
$DB=new DB();
$db=$DB->db; // connexion a la base de donnee 
$Register=new Register($db);  //instance de la classe Register

if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }else{
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  // $ip= $_SERVER['REMOTE_ADDR']; //recuper l'addre ip du viteur
  $ip=$ip;
  $today = date("F j, Y");  

//   var_dump($_POST);
//----------------------------verification pour la connexion
if($_SERVER["REQUEST_METHOD"]=="POST"){
    extract($_POST);
    
    $email = test_input($email);
    
    if(empty($email)){
        echo "1"; // Email vide
        exit;
    }
    
    // Vérifier si l'utilisateur existe dans la base de données
    $rep = $Register->query("SELECT * FROM admin WHERE email=:mail", array("mail" => $email));
    
    if(count($rep) == 0) {
        echo "2"; // Utilisateur non trouvé
        exit;
    }
    
    // Au lieu de vérifier le mot de passe, nous allons envoyer un lien magique par email
    // Stocker l'email et l'action pour la page de vérification
    $_SESSION['verification_email'] = $email;
    $_SESSION['verification_action'] = 'login';
    
    // Envoyer l'email avec le lien magique
    try {
        $emailService = new EmailService();
        $emailService->sendMagicLink($email, $rep[0]->nom, $rep[0]->prenom, 'login');
        
        echo "ok"; // Le lien a été envoyé
    } catch (Exception $e) {
        echo "3"; // Erreur lors de l'envoi du mail
    }
    
    exit;
}
