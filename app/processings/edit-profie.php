<?php

    $_SESSION['message'] = true;
    $error='';
    // extract($_POST);
    if(isset($_POST['submit_profile'])){
        // var_dump($_POST, $_FILES);   
        $noM = $Register->input( $_POST['nom']);
        $prenoM= $Register->input($_POST['prenom']);
        $teL= $Register->input($_POST['telephone']);
        $emaiL= $Register->input($_POST['email']);
        $payS= $Register->input($_POST['pays']);
        $villE= $Register->input($_POST['ville']);
        $regioN= $Register->input($_POST['region']);
        $tel_whatsapP= $Register->input($_POST['tel_whatsapp']);
        // $post= $Register->input($post);

        $nom_fil= $_FILES['photo_profil'];

        $nom_file= traiter_image($chemin_profile_a, $nom_fil);

        if (!is_numeric($nom_file)):
            $Register->query("UPDATE admin SET
                profile=:img1 WHERE matricule_admin='$matricule_ad' LIMIT 1
                ", array("img1" => $nom_file));
        endif;

        if(!empty($noM)){
            if(!empty($prenoM)){
                if(!empty($teL)){  
                    if(!empty($emaiL)){
                        if(!empty($villE)){
                            if(!empty($payS)){
                                var_dump($_POST);
                                $Register->query("UPDATE admin SET nom=:nom,prenom=:prenom,telephone=:tel,email=:mail,ville=:ville,pays=:pays, region=:region,tel_whatwapp=:what WHERE matricule_admin= '$matricule_ad' limit 1",array(
                                    'nom'=>$noM,
                                    "prenom"=>$prenoM,
                                    "tel"=>$teL,
                                    "mail"=>$emaiL,
                                    "ville"=>$villE,
                                    "pays"=>$payS,
                                    "region"=>$regioN,
                                    "what"=>$tel_whatsapP
                                ));
                                
                                $error= "<h4 class='text-success'>Les modifications ont été effectuées </h4>";
                                $_SESSION['message']=['message'=>$error];
                                header("location: mon-profile");


                            }else{
                                $error= "<h4 class='text-danger'>Veiller entrer votre post</h4>";
                            }
                        }else{
                            $error= "<h4 class='text-danger'>Veiller entrer votre ville </h4>";
                        }
                    }else{
                        $error= "<h4 class='text-danger'>Veiller entrer votre adress email</h4>";
                    }
                }else{
                    $error= "<h4 class='text-danger'>Veiller entrer votre telephone</h4>";
                }
            }else{
                $error= "<h4 class='text-danger'>Veiller entrer votre prenom</h4>";
            }
        }else{
            $error="<h4 class='text-danger'>Veiller entrer votre nom</h4>";
        }

        
        $_SESSION['message']=$error;
        // var_dump( $_SESSION['message']);
        header("location: mon-profile");

    }
    
    else{

        var_dump($_SESSION['message']);
        header("location: mon-profile");
    }

?>