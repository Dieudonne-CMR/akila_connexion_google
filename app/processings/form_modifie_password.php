<?php
// session_start();
if (isset($_POST['submit'])) {
    var_dump($id_modify);
    if (isset($_POST['email'])) {
        $id_modify = uniqid();
        $id_modify=strtoupper(substr($id_modify, -5));
        $email = strip_tags(trim($_POST['email']));
        $recup = $DB->query("SELECT email, nom, prenom FROM admin WHERE email='$email' limit 1");
        if (sizeof($recup) == 1) {
            $nom=$recup[0]->nom;
            $prenom=$recup[0]->prenom;
            
       
            //-----------------------------------------------------------------------------------------------------

            $sujet = utf8_decode('Akila Blog Factory: Modification de votre mot de passe');


            $message_img = "<br><img  style='height: 70px' src='https://akila.blog/platform/images/logo.png'>";

            // $message1 = "Hello <span style='color:green'>$first_name $last_name</span>, <br> You have successfully registered to the <span style='color:green'>AABD Submission Portal</span> !<br><br> Please Remember your identifiers : <br> Email : <span style='color:green'>$email</span> <br> Password : <span style='color:green'>$password</span>";

            $message1 = "Bonjour <span style='color:green;font-weight:bold'>$nom $prenom</span>,  <br> Voici votre code de Verification: <br> <h2> $id_modify<h2>
            <br> Veuillez Entrer le code de modification en cliquant sur ce lien: <a href='https://platform.akila.blog/page-inter-code.php' target='_blank'>Cliquez sur ce lien pour modifier votre mot de passe</a><br>";

            $message2 = '<br><br>Date ' . date('l jS \of F Y h:i:s A') . ' (GMT) <br><br>';

            $destination = $email;

            ob_start();


            echo $message1;

            echo $message2;

            echo $message_img;

            $message =  ob_get_contents();

            $message = utf8_decode($message);

            ob_end_clean();

            $email_sender = 'info@akila.blog';

            $name_sender = "Akila Blog factory";

            $cc = '';

            $bcc = 'email.notifications@1pub.net,1pubagency@gmail.com,info@akila.blog';

            sender_mail($name_sender, $email_sender, $sujet, $message, $destination, $cc, $bcc);

            //----------------------------------------------------------------------------- 

            $DB->query("UPDATE admin SET id_modify='$id_modify' WHERE email='$email' LIMIT 1");
            
            header('location: page-inter-code.php');
        }
    }
}
//---------------------------------------------------------------------------
if(isset($_POST['submit_num'])){
    if (isset($_POST['num_code'])) {
        $num_code=$_POST['num_code'];
        $recup = $DB->query("SELECT id_modify FROM admin WHERE id_modify='$num_code' limit 1");
        if(sizeof($recup)==1){
            header("location: https://platform.akila.blog/page-modify.php?id_modif=$num_code");
        }

    }else{
        $erro="Veuillez entrer un code code";
    }
}
//------------------------------------------------------------------------------

if (isset($_POST['submit_modify'])) {
    $password = strip_tags(trim($_POST['password_m']));
    $password= md5($password);
    $id_mod=$_GET['id_modif'];

        $recup = $DB->query("SELECT email, nom, prenom, sup_admin FROM admin WHERE id_modify='$id_mod' limit 1");
        if (sizeof($recup) == 1) {
            $nom=$recup[0]->nom;
            $prenom=$recup[0]->prenom;
            $email=$recup[0]->email;
            // $matricule_ad=$_SESSION['skl']['matricule_admin']
            //-----------------------------------------------------
           
            //-----------------------------------------------------------------------------------------------------

            $sujet = utf8_decode('Akila Blog Factory: Modification du mot de passe effectué');


            $message_img = "<br><img  style='height: 70px' src='images/akila_logo.png'>";

            // $message1 = "Hello <span style='color:green'>$first_name $last_name</span>, <br> You have successfully registered to the <span style='color:green'>AABD Submission Portal</span> !<br><br> Please Remember your identifiers : <br> Email : <span style='color:green'>$email</span> <br> Password : <span style='color:green'>$password</span>";

            $message1 = "Cher <span style='color:green;font-weight:bold'>$nom $prenom</span>, <br>Votre mot de passe a été modifier .<br> cliquez sur ce lien pour vous connecter <a href='https://platform.akila.blog' target='_blank'>Connectez vous !</a><br>";

            $message2 = '<br><br>Date ' . date('l jS \of F Y h:i:s A') . ' (GMT) <br>';

            $destination = $email;

            ob_start();


            echo $message1;

            echo $message2;

            echo $message_img;

            $message =  ob_get_contents();

            $message = utf8_decode($message);

            ob_end_clean();

            $email_sender = 'info@akila.blog';

            $name_sender = "Akila Blog Factory";

            $cc = '';

            $bcc = 'email.notifications@1pub.net,1pubagency@gmail.com,info@akila.blog';

            sender_mail($name_sender, $email_sender, $sujet, $message, $destination, $cc, $bcc);

            //----------------------------------------------------------------------------- 

            $DB->query("UPDATE admin SET id_modify='',password='$password' WHERE email='$email' AND id_modify !='' LIMIT 1");
            session_destroy();
            header("location:home");
    }
}