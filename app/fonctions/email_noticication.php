<?php

function emai_notify($message, $nom_entreprise,$profile_email){
    //-----------------------------------------------------------------------------------------------------

    $sujet = utf8_decode('Akila Blog Factory: Notification ');


    $message_img = "<br><img  style='height: 70px' src='https://akila.blog/platform/images/logo.png'>";

    // $message1 = "Hello <span style='color:green'>$first_name $last_name</span>, <br> You have successfully registered to the <span style='color:green'>AABD Submission Portal</span> !<br><br> Please Remember your identifiers : <br> Email : <span style='color:green'>$email</span> <br> Password : <span style='color:green'>$password</span>";

    $message1 = "<span style='color:green;font-weight:bold'>$message</span>, dans le site de: <h2> $nom_entreprise <h2>";

    $message2 = '<br><br>Date ' . date('l jS \of F Y h:i:s A') .  ' (GMT) <br><br>';

    $destination = $profile_email;

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

    
        //envoie du mail 
        // $sujet = "Reinitialisation du mot de passe";
      
        
        $header = "From:\"$name_sender\"<$email_sender>\n";
    
        $header .= "Content-Type:Text/html; charset=\"iso-8859-1\"";
        
        $header .= "Reply-To:$email_sender\n";
        
        $header .= "Cc: $cc\n";
        
        $header .= "Bcc: $bcc\n";
      
        //envoi en question
    
        
        if (mail($destination, $sujet, $message, $header)) {
          echo "email envoyé";
        } else {
          echo "email non envoyé";
        };
        
    // sender_mail($name_sender, $email_sender, $sujet, $message, $destination, $cc, $bcc);

    //----------------------------------------------------------------------------- 
}