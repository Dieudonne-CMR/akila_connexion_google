<?php
if($d=="a"){
    
    // $Register->query("INSERT INTO connexion_admin (connexion,matricule_admin,matricule_entreprise) 
    //            VALUE(:connexion,:matricule,:matricule_entreprise)",array(
               
    //             "connexion"=>0,
    //             "matricule"=> $matricule_ad,
    //             'matricule_entreprise'=>$matricule_entreprise
    //         ));

            session_destroy();
          
    header("location: ../");
    // header("location: ../auth-login.php");
}