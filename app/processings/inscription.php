<?php

include "../../@ressouce/class.db.php";
include "../../@ressouce/class.register.php";
require "../fonctions/fonction.php";
$DB=new DB();
$db=$DB->db;
$Register=new Register($db);  


// var_dump($_POST);

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
    $matricule_admin= $Register->rand();
    $password=md5(test_input($_POST['login']['password']));
    $passconfirm=md5(test_input($_POST['loginCom']['passconfirm']));
    $inscrit="oui";


    if($password == $passconfirm){
        // var_dump($prenom.' ;'. $nom.';'.$tel.';'.$email.';');
        if(!empty($nom) AND !empty($prenom) AND !empty($tel) AND !empty($email)){
            $veri= $Register->query("SELECT email FROM admin WHERE email=:em LIMIT 1",array("em"=>$email));
            if (sizeof($veri)<1) {
                $Register->query("INSERT INTO admin(nom, prenom, telephone, email, ville, active,pays ,password,matricule_admin,inscrit) 
                VALUES(:nom, :prenom, :tel,:mail,:ville, :active, :pays,:pass,:matricule_admin, :inscrit )",
                        array('nom'=>$nom,
                            'prenom'=>$prenom,
                            'tel'=>$tel,
                            'mail'=>$email,
                            'ville'=>$ville,
                            "active"=>'2',
                            'pays'=>$pays,
                            'pass'=>$password,
                            'matricule_admin'=>$matricule_admin,
                            'inscrit'=>$inscrit,
                    )); 
                    $rep = $Register->query("SELECT * FROM admin WHERE email=:em LIMIT 1",array("em"=>$email));
                    // var_dump($rep);
                    $_SESSION['skl']=[];

                   /* permet de se connecter une fois apres l'inscription

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

                    ];*/

                    $sujet = utf8_decode("Inscription de la plateform de Akila Blog Factory");
        
        
                    $message_img = "<br><a href='https://akila.blog' target='_blank'><img  style='height: 70px' src='https://akila.blog/images/logo-dark.png'></a>";
                
                    // $message1 = "Hello <span style='color:green'>$first_name $last_name</span>, <br> You have successfully registered to the <span style='color:green'>AABD Submission Portal</span> !<br><br> Please Remember your identifiers : <br> Email : <span style='color:green'>$email</span> <br> Password : <span style='color:green'>$password</span>";
                
                    $message1 = "Salut <span style='color:green;font-weight:bold'>$nom</span>, <br>Votre message à été transmis avec succès à l'équipe de support.<br><br> Voici les détails de votre message:<br> Votre Nom : <span style='color:green;font-weight:bold'>$nom</span> <br>Votre Email : <span style='color:green;font-weight:bold'>$email</span> <br>Votre Numéro Téléphone : <span style='color:green;font-weight:bold'>$tel</span> ";
                
                    $message2 = '<br><br>Date '.date('l jS \of F Y h:i:s A').' (GMT) <br><br>Bien venue dans la platform !'; 
                    
                    $destination = $email;
                    
                    ob_start();
                
                    
                        echo $message1;
                        
                        echo $message2; 
                        
                        echo $message_img;
                
                        $message =  ob_get_contents();
                        
                        $message = utf8_decode($message);
                    
                    ob_end_clean();
                
                    $email_sender = 'info@akila.blog';
                
                    $name_sender = 'Akila Actualité';
                
                    $cc = '';
                    
                    $bcc = 'email.notifications@1pub.net,1pubagency@gmail.com,info@akila.blog';
                
                    // sender_email($name_sender, $email_sender, $sujet, $message, $destination, $cc, $bcc);
                    $data='ok';
                    $_SESSION['a'] ='a'; //------- les infos ont ete enregistrer
                 
                    // header("location: login-login.php");
            }else{
                $data=1; //------- Veuillez remplir tous les champs
            }

        }else{
            $data=2; //------- Veuillez remplir tous les champs
        }
    }else{
        $data=3; //------- les mots de passes ne sont pas identiques
    }
    echo $data; 
}