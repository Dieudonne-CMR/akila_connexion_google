<?php 

session_start();
include "../../@ressouce/class.db.php";
include "../../@ressouce/class.register.php";
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
//----------------------------verifiavttion pour la inscription
if($_SERVER["REQUEST_METHOD"]=="POST"){
    extract($_POST);
    
    // if(isset($connexion)){
        $email= test_input($email);
       $password = test_input(md5($_POST['login']['password']));
        
     
       if(empty($email)){
            $error="1";
        }elseif(empty($password)){
            $error="2";
        }else{
            $rep=$Register->query("SELECT * FROM admin WHERE email=:mail AND password=:pass", array("mail"=>$email,"pass"=>$password));
           
           if(count($rep)>0){
               $_SESSION['skl']=[];
               $_SESSION['skl']=[
                    'id'=>$rep[0]->id,
                   'nom'=>$rep[0]->nom,
                   'prenom'=>$rep[0]->prenom,
                   'email'=>$rep[0]->email,
                   'supadmin'=>$rep[0]->sup_admin,
                   'telephone'=>$rep[0]->telephone,
                   'ville'=>$rep[0]->ville,
                   'password'=>$rep[0]->password,
                   'active'=>$rep[0]->active,
                   'matricule_admin'=>$rep[0]->matricule_admin,
                   'matricule_akila_blog'=>$rep[0]->matricule_akila_blog,
                   'permission'=>$rep[0]->permission,
                   'inscrit'=>$rep[0]->inscrit

               ];

            //    notifications("Vient de se connecter"); 
               $error='ok';
            //    header("location: home");
           }else{
               $error="2";
           }
        }
        echo $error;
    // }
    
    //----------------------------------------inscrire

}
