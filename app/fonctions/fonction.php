<?php
   function infoEntreprise($mat_entreprise){ //=========== Recuper les informations d'une categorie
    global $DB;
    $data= $DB->query("SELECT * FROM website WHERE matricule_entreprise='$mat_entreprise' LIMIT 1");
    return $data[0];
}

function affichage_img($chemin,$image){
    if(!empty($image)){
     if (!filter_var($image, FILTER_VALIDATE_URL) === false) {
        $img=$image;
      } else {
        $img=$chemin . $image;
          }
    return $img;
    }
}

function value_img($image){
    $img='';
    if(!empty($image)){
     if (!filter_var($image, FILTER_VALIDATE_URL) === false) {
        $img=$image;
      } ;
        
    }
    return $img;
}
// fonction qui verifie si le un etablissement a été crée is oui ouvre la page si non renvoi à la page info_etablissement
function idenfify($matricule_entreprise, $index)
{
    $var = "";
    if (!empty($matricule_entreprise)):
        // if():
        $var = $index;
    else:

        $var = "page/info_etablissement.php";

    endif;
    return $var;
}
function notify($message, $mat_entreprise, $mat_admin){
    global $Register;
    $inser= $Register->query("INSERT INTO notifications (matricule_entreprise,message,matricule_admin) VALUE(:mat_en,:message,:mat_adm)",
    array('mat_en'=>$mat_entreprise,"message"=>$message,"mat_adm"=>$mat_admin));
}
function titre($b){
    
    $nom=explode(' ',$b);
    $nom=implode('-',$nom);
    $nom=strtolower(str_replace('?','!',$nom));
    $nom=strtolower(str_replace('/','-',$nom));
    return $nom;
}

function verifi_permalien($permalien){
    if (!isset($permalien)):
      return header("location: home");
    endif;
}
function verifi_admin($supadmin){
    if ($supadmin!="oui"):
      return header("location: home");
    endif;
}
function input($value)
{
    $value = htmlspecialchars($value);
    $value = trim($value);
    $value = ucfirst(trim($value));
    return $value;
}

// fonction pour changer les noms des image
function nam_file($nom_file, $permalien, $extension)
{
    $nom_file = explode(".", $nom_file);
    // var_dump($nom_file[0], $nom_file[1]);
    $nom_file = explode(' ', $nom_file[0]);
    $nom_file = explode('-', $nom_file[0]);

    date('s');
    $nom_file = $nom_file[0] . date('s') . $permalien . '.' . $extension;
    return $nom_file;
}

// fonction recupe vite 
function recup_viste($Register, $matricule_entreprise, $colone)
{
    $Recup_visite = $Register->query("SELECT SUM($colone) as total FROM visite_etablissement WHERE matricule_entreprise=:matricule_entreprise 
    ORDER BY id desc ", array("matricule_entreprise" => $matricule_entreprise));
    return $Recup_visite[0]->total;
}

function nbre_vues_service($id) // Calcule le nombre de vues sur les services
{
    global $Register;
    // global $Register;
    $visiteur_service= $Register->query("SELECT * FROM visiteurs_service  WHERE  mat_service=:id ",array('id'=>$id));
    return  @$visiteur_service[0]->nbre;

}

// fonction recupe vite des blog
function recup_visite_blog($Register, $colone, $id)
{
    $Recup_visite = $Register->query("SELECT SUM($colone) as total FROM visite_etablissement WHERE matricule_entreprise=:matricule_entreprise and id_blog=:id ORDER BY id desc ", array("matricule_entreprise" => $matricule_entreprise, "id" => $id));
    return $Recup_visite[0]->total;
}

function recup_toute_table($Register, $nom_table)
{
    $recup = $Register->query("SELECT * FROM $nom_table");
    return $recup;
}
/* 
recuper les informations d'une table elle prendre 4 parametre
@param nom_de_la_table, nom_du_champ , valeur , base de donnes
*/
function recupe_info_table1($nom_table, $nom_champ, $val, $bdd)
{
    $recup = $bdd->query("SELECT * FROM $nom_table WHERE $nom_champ = :var", array("var" => $val));
    return $recup;
}
// fonction qui permet de traiter les photos 
function traiter_image($chemin, $FILES)
{
    $name_file = $FILES['name'];
    $file_size = $FILES['size'];
    $chemin_temp = $FILES['tmp_name'];
    $list_extension = ['png', 'jpg', 'jpeg', 'gif','pdf','doc'];
    $extension_file = strtolower(pathinfo($name_file, PATHINFO_EXTENSION));
    $size_max = 10000000;


    $name_file = substr($name_file, 0, 5);
    $name_file = date('y-m-d-s') . 'akila_blog' . random_int(0,945). '.' . $extension_file;

    if (isset($name_file)):
        if ($file_size < $size_max):
            if (in_array($extension_file, $list_extension)):
                if (move_uploaded_file($chemin_temp, $chemin . $name_file)):
                    $results = $name_file;
                else:
                    $results = 0;
                endif;
            else:
                $results = 0;
            endif;
        else:
            $results = 0;
        endif;
    else:
        $results = 0;
    endif;

    return $results;
}

function traiter_pdf($perma,$chemin, $FILES)
{
    $name_file = $FILES['name'];
    $file_size = $FILES['size'];
    $chemin_temp = $FILES['tmp_name'];
    $list_extension = ['pdf',];
    $extension_file = strtolower(pathinfo($name_file, PATHINFO_EXTENSION));
    $size_max = 10000000;

    $name_file = substr($name_file, 0, 5);
    $name_file = $perma . 'akila_blog' . '.' . $extension_file;

    if (isset($name_file)):
        if ($file_size < $size_max):
            if (in_array($extension_file, $list_extension)):
                if (move_uploaded_file($chemin_temp, $chemin . $name_file)):
                    $results = $name_file;
                else:
                    $results = 0;
                endif;
            else:
                $results = 0;
            endif;
        else:
            $results = 0;
        endif;
    else:
        $results = 0;
    endif;

    return $results;
}
// elle permet  de supprimer les image dans 
function delect_file($pash, $name_file)
{
    $file = $pash . $name_file;
    unlink($file);
    return 'ok';
}

function rand_number()
{
    // $mat = rand(1, 100000) . date('ymd');
    $mat= uniqid();
    return $mat;
}
function encryptPassword( $password ) {  // fonction pour crypter les mots de passe
    $encrypted = "";
    for( $i = strlen($password) - 1; $i >= 0 ; $i-- ) {
        $encrypted .= chr(ord($password[$i]) + 1);
    }
    return $encrypted;
}

function decryptPassword( $password ) {  // fonction pour decrypter les mots de passe
    $decrypted = "";
    for( $i = strlen($password) - 1; $i >= 0 ; $i-- ) {
        $decrypted .= chr(ord($password[$i]) - 1);
    }
    return $decrypted;
}
function nbr_visiteurs($matricule_entreprise){ // recupe le nombre de visiteurs
    global $Register;
    $visiteurs_mayennes = $Register->query("SELECT SUM(nbre) as nbres FROM visiteurs_journaliers WHERE matricule_entreprise=:id_etablissement", array("id_etablissement" => $matricule_entreprise));
    return @$visiteurs_mayennes[0]->nbres;
}

function recup_info_website($matricule_entreprise){ // recuper tous les info de de l'entreprise dans la table website
    global $Register;
    $recup_info = $Register->query("SELECT * FROM website WHERE matricule_entreprise =:matricule_entreprise", array("matricule_entreprise"=>$matricule_entreprise));

    return $recup_info;
}

function sender_mail($name_sender, $email_sender, $sujet, $message, $destination, $cc='', $bcc='')
{
    //envoie du mail 
    // $sujet = "Reinitialisation du mot de passe";
  
    
    $header = "From:\"$name_sender\"<$email_sender>\n";

    $header .= "Content-Type:Text/html; charset=\"iso-8859-1\"";
    
    $header .= "Reply-To:$email_sender\n";
    
    $header .= "Cc: $cc\n";
    
    $header .= "Bcc: $bcc\n";
  
    //envoi en question

    
    if (mail($destination, $sujet, $message, $header)) {
    //   echo "email envoyé";
    } else {
      echo "email non envoyé";
    }
    
}

function erreur($errur) {
    $rep='';
    if($errur==3):
        $rep ="<span class='text-danger'>les mots de passes ne sont pas identiques</span>";
    elseif($errur==2):
        $rep="<span class='text-danger'>Veuillez remplir tous les champs</span>";
    elseif($errur==1):
        $rep="<span class='text-danger'>Vous avez déjà un compte veuillez vous connecter ! </span>";
    elseif($errur=='a'):
        $rep="<span class='text-success'>Votre compte vient D'être créé, veuillez vous connecter ! </span>";
    endif;
  
    return $rep;
}

// function envoy_mail($nom,$prenom,$password,$email)
// {
//     // $to = "somebody@example.com";
//     // $txt = "Hello world!";
//     // $headers = "From: webmaster@example.com" . "\r\n" .
//     //     "CC: somebodyelse@example.com";


//     // $to = "somebody@example.com, somebodyelse@example.com";
//     $to=$email;

//     $subject = "Vos identifiants de connexion sur votre blog";

//     $message = "
// <html>
// <head>
// <title>$subject</title>
// </head>
// <body>
// <p>Cette Email contient les informations de connexion dans Akila Factory blog</p>
// <table>
// <tr>
// <th>Nom</th>
// <th>Prenom</th>
// <th>Email</th>
// <th>Mot de passe</th>
// </tr>
// <tr>
// <td>$nom</td>
// <td>$prenom</td>
// <td>$email</td>
// <td>$password</td>
// </h3><a href='https://platform.akila.blog/' target='_blank' rel='noopener noreferrer'>Cliquez Ici pour vous connecter !😊😊😊</a> </h3>

// </tr>
// </table>
// </body>
// </html>
// ";

//     // Always set content-type when sending HTML email
//     $headers = "MIME-Version: 1.0" . "\r\n";
//     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

//     // More headers
//     $headers .= 'From: <info@akila.blog>' . "\r\n";
//     $headers .= 'Cc: donalbayiha@gmail.com' . "\r\n";
//     // $headers .= 'Cc: info@akila.blog' . "\r\n";

// mail($to,$subject,$message,$headers);
// }
function envoy_mail($nom,$prenom,$password,$email)
{
    // $to = "somebody@example.com";
    // $txt = "Hello world!";
    // $headers = "From: webmaster@example.com" . "\r\n" .
    //     "CC: somebodyelse@example.com";


    // $to = "somebody@example.com, somebodyelse@example.com";
    
    $to=$email;

    $subject = "Vos identifiants de connexion sur votre blog";

    $message = "
    
    <!DOCTYPE html>
    <html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' lang='en'>
    
    <head>
        <title>$subject</title>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'><!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]--><!--[if !mso]><!-->
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'><!--<![endif]-->
        <style>
            * {
                box-sizing: border-box;
            }
    
            body {
                margin: 0;
                padding: 0;
            }
    
            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: inherit !important;
            }
    
            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
            }
    
            p {
                line-height: inherit
            }
    
            .desktop_hide,
            .desktop_hide table {
                mso-hide: all;
                display: none;
                max-height: 0px;
                overflow: hidden;
            }
    
            .image_block img+div {
                display: none;
            }
    
            .menu_block.desktop_hide .menu-links span {
                mso-hide: all;
            }
    
            @media (max-width:660px) {
    
                .desktop_hide table.icons-inner,
                .social_block.desktop_hide .social-table {
                    display: inline-block !important;
                }
    
                .icons-inner {
                    text-align: center;
                }
    
                .icons-inner td {
                    margin: 0 auto;
                }
    
                .image_block img.big,
                .row-content {
                    width: 100% !important;
                }
    
                .menu-checkbox[type=checkbox]~.menu-links {
                    display: none !important;
                    padding: 5px 0;
                }
    
                .menu-checkbox[type=checkbox]:checked~.menu-trigger .menu-open,
                .menu-checkbox[type=checkbox]~.menu-links span.sep {
                    display: none !important;
                }
    
                .menu-checkbox[type=checkbox]:checked~.menu-links,
                .menu-checkbox[type=checkbox]~.menu-trigger {
                    display: block !important;
                    max-width: none !important;
                    max-height: none !important;
                    font-size: inherit !important;
                }
    
                .menu-checkbox[type=checkbox]~.menu-links>a,
                .menu-checkbox[type=checkbox]~.menu-links>span.label {
                    display: block !important;
                    text-align: center;
                }
    
                .menu-checkbox[type=checkbox]:checked~.menu-trigger .menu-close {
                    display: block !important;
                }
    
                .mobile_hide {
                    display: none;
                }
    
                .stack .column {
                    width: 100%;
                    display: block;
                }
    
                .mobile_hide {
                    min-height: 0;
                    max-height: 0;
                    max-width: 0;
                    overflow: hidden;
                    font-size: 0px;
                }
    
                .desktop_hide,
                .desktop_hide table {
                    display: table !important;
                    max-height: none !important;
                }
            }
    
            #memu-r0c0m1:checked~.menu-links {
                background-color: transparent !important;
            }
    
            #memu-r0c0m1:checked~.menu-links a,
            #memu-r0c0m1:checked~.menu-links span {
                color: #001e3e !important;
            }
        </style>
    </head>
    
    <body style='background-color: #fffaf2; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;'>
        <table class='nl-container' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fffaf2; background-image: none; background-position: top left; background-size: auto; background-repeat: no-repeat;'>
            <tbody>
                <tr>
                    <td>
                        <table class='row row-1' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                            <tbody>
                                <tr>
                                    <td>
                                        <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 640px;' width='640'>
                                            <tbody>
                                                <tr>
                                                    <td class='column column-1' width='100%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 30px; padding-top: 20px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
                                                        <table class='image_block block-1' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                                                            <tr>
                                                                <td class='pad' style='width:100%;padding-right:0px;padding-left:0px;'>
                                                                    <div class='alignment' align='center' style='line-height:10px'><a href='javascript:void(0)' target='_blank' style='outline:none' tabindex='-1'><img src='https://platform.akila.blog/images/logo.png' style='display: block; height: auto; border: 0; width: 126px; max-width: 100%;' width='126' alt='your-logo' title='your-logo'></a></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class='row row-2' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                            <tbody>
                                <tr>
                                    <td>
                                        <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9ecdc; color: #000000; width: 640px;' width='640'>
                                            <tbody>
                                                <tr>
                                                    <td class='column column-1' width='100%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 15px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
                                                        <table class='image_block block-1' width='100%' border='0' cellpadding='15' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                                                            <tr>
                                                                <td class='pad'>
                                                                    <div class='alignment' align='center' style='line-height:10px'><a href='javascript:void(0)' target='_blank' style='outline:none' tabindex='-1'><img src='https://d1oco4z2z1fhwp.cloudfront.net/templates/default/7131/stars.png' style='display: block; height: auto; border: 0; width: 160px; max-width: 100%;' width='160' alt='stars icon' title='stars icon'></a></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class='row row-3' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                            <tbody>
                                <tr>
                                    <td>
                                        <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9ecdc; color: #000000; background-position: center top; width: 640px;' width='640'>
                                            <tbody>
                                                <tr>
                                                    <td class='column column-1' width='100%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-top: 15px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
                                                        <table class='text_block block-1' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'>
                                                            <tr>
                                                                <td class='pad' style='padding-top:15px;'>
                                                                    <div style='font-family: sans-serif'>
                                                                        <div class style='font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; font-size: 12px; mso-line-height-alt: 18px; color: #2b2d49; line-height: 1.5;'>
                                                                            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 45px; letter-spacing: 2px;'><span style='font-size:30px;caret-color:#152a6d;'><strong>Akila Blog </strong></span><span style='font-size:30px;caret-color:#152a6d;'><strong>Factory</strong></span></p>
                                                                            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 33px; letter-spacing: 2px;'><span style='font-size:22px;'><em><span style='caret-color:#152a6d;'>Votre communication</span></em></span></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table class='image_block block-2' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                                                            <tr>
                                                                <td class='pad' style='width:100%;padding-right:0px;padding-left:0px;'>
                                                                    <div class='alignment' align='center' style='line-height:10px'><a href='javascript:void(0)' target='_blank' style='outline:none' tabindex='-1'><img class='big' src='https://img.freepik.com/photos-gratuite/photo-plein-air-etudiante-heureuse-regarde-webinaire-video-tutorat-via-tablette-numerique-porte-vetements-soignes-pose-table-bois-dans-lieu-urbain-collation-gens-qui-etudient-concept-style-vie_273609-59954.jpg?w=826&t=st=1683885979~exp=1683886579~hmac=f427c48f0672fbbc46650b8fa8989a30d4aa6972ab718d132e0fac4b965828be' style='display: block; height: auto; border: 0; width: 576px; max-width: 100%;' width='576' alt='Independence Day Banner Image' title='Independence Day Banner Image'></a></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class='row row-4' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                            <tbody>
                                <tr>
                                    <td>
                                        <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9ecdc; color: #000000; width: 640px;' width='640'>
                                            <tbody>
                                                <tr>
                                                    <td class='column column-1' width='100%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 10px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
                                                        <table class='text_block block-1' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'>
                                                            <tr>
                                                                <td class='pad'>
                                                                    <div style='font-family: sans-serif'>
                                                                        <div class style='font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; font-size: 12px; mso-line-height-alt: 18px; color: #2b2d49; line-height: 1.5;'>
                                                                            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 45px;'><span style='font-size:30px;caret-color:#152a6d;'><strong>CREATION DU BLOG</strong></span></p>
                                                                            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 21px;'><span style='color:#152a6d;'><span style='caret-color:#152a6d;font-size:30px;'><span style='color:#a31731;'><strong><span style='color:#a31731;'>72</span> h</strong></span></span></span></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <div class='spacer_block block-2' style='height:20px;line-height:20px;font-size:1px;'>&#8202;</div>
                                                        <table class='text_block block-3' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'>
                                                            <tr>
                                                                <td class='pad' style='padding-left:30px;padding-right:30px;'>
                                                                    <div style='font-family: sans-serif'>
                                                                        <div class style='font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #2b2d49; line-height: 1.2;'>
                                                                            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;'><span style='font-size:16px;color:#2b2d49;'>La communication est la base pour la réussite de toute entreprise. Augmentez votre chiffre d'affaire avec un blog professinnel.&nbsp;</span></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <div class='spacer_block block-4' style='height:40px;line-height:40px;font-size:1px;'>&#8202;</div>
                                                        <table class='text_block block-5' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'>
                                                            <tr>
                                                                <td class='pad'>
                                                                    <div style='font-family: sans-serif'>
                                                                        <div class style='font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #2b2d49; line-height: 1.2;'>
                                                                            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;'><span style='font-size:30px;caret-color:#152a6d;'><strong>Vos identifiants</strong></span></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <div class='spacer_block block-6' style='height:20px;line-height:20px;font-size:1px;'>&#8202;</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- info -->
                        <table class='row row-5' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                            <tbody>
                                <tr>
                                    <td>
                                        <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9ecdc; color: #000000; width: 640px;' width='640'>
                                            <tbody>
                                                <tr>
                                                    <td class='column column-1' width='33.333333333333336%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
                                                        <table class='text_block block-1' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'>
                                                            <tr>
                                                                <td class='pad'>
                                                                    <div style='font-family: sans-serif'>
                                                                        <div class style='font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; font-size: 12px; mso-line-height-alt: 18px; color: #2b2d49; line-height: 1.5;'>
                                                                            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 51px;'><span style='font-size:34px;caret-color:#152a6d;'><strong>Nom</strong></span></p>
                                                                            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 22.5px;'><span style='font-size:15px;caret-color:#152a6d;'><strong>$nom.' '. $prenom</strong></span></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                          
                                                        </table>
                                                    </td>
                                                    <td class='column column-2' width='33.333333333333336%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
                                                        <table class='text_block block-1' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'>
                                                            <tr>
                                                                <td class='pad'>
                                                                    <div style='font-family: sans-serif'>
                                                                        <div class style='font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; font-size: 12px; mso-line-height-alt: 18px; color: #2b2d49; line-height: 1.5;'>
                                                                            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 51px;'><span style='font-size:34px;caret-color:#152a6d;'><strong>Email</strong></span></p>
                                                                            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 22.5px;'><span style='font-size:15px;caret-color:#152a6d;'><strong>$email</strong></span></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class='column column-3' width='33.333333333333336%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
                                                        <table class='text_block block-1' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'>
                                                            <tr>
                                                                <td class='pad'>
                                                                    <div style='font-family: sans-serif'>
                                                                        <div class style='font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; font-size: 12px; mso-line-height-alt: 18px; color: #2b2d49; line-height: 1.5;'>
                                                                            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 51px;'><span style='font-size:34px;caret-color:#152a6d;'><strong>Password</strong></span></p>
                                                                            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 22.5px;'><span style='font-size:15px;caret-color:#152a6d;'><strong>$password</strong></span></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- info -->
                        <table class='row row-6' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                            <tbody>
                                <tr>
                                    <td>
                                        <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9ecdc; color: #000000; width: 640px;' width='640'>
                                            <tbody>
                                                <tr>
                                                    <td class='column column-1' width='100%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
                                                        <div class='spacer_block block-1' style='height:35px;line-height:35px;font-size:1px;'>&#8202;</div>
                                                        <table class='button_block block-2' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                                                            <tr>
                                                                <td class='pad' style='text-align:center;'>
                                                                    <div class='alignment' align='center'><!--[if mso]><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='https://www.example.com' style='height:44px;width:208px;v-text-anchor:middle;' arcsize='21%' strokeweight='0.75pt' strokecolor='#2B2D49' fillcolor='#2b2d49'><w:anchorlock/><v:textbox inset='0px,0px,0px,0px'><center style='color:#ffffff; font-family:Tahoma, sans-serif; font-size:16px'><![endif]--><a href='https://platform.akila.blog/' target='_blank' style='text-decoration:none;display:inline-block;color:#ffffff;background-color:#2b2d49;border-radius:9px;width:auto;border-top:1px solid #2B2D49;font-weight:400;border-right:1px solid #2B2D49;border-bottom:1px solid #2B2D49;border-left:1px solid #2B2D49;padding-top:5px;padding-bottom:5px;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;font-size:16px;text-align:center;mso-border-alt:none;word-break:keep-all;'><span style='padding-left:20px;padding-right:20px;font-size:16px;display:inline-block;letter-spacing:2px;'><span style='word-break: break-word; line-height: 32px;'>Cliquez ici Pour vous Connecter </span></span></a><!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <div class='spacer_block block-3' style='height:50px;line-height:50px;font-size:1px;'>&#8202;</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <table class='row row-7' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                            <tbody>
                                <tr>
                                    <td>
                                        <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 640px;' width='640'>
                                            <tbody>
                                                <tr>
                                                    <td class='column column-1' width='100%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
                                                        <div class='spacer_block block-1' style='height:40px;line-height:40px;font-size:1px;'>&#8202;</div>
                                                        <table class='image_block block-2' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                                                            <tr>
                                                                <td class='pad' style='width:100%;padding-right:0px;padding-left:0px;'>
                                                                    <div class='alignment' align='center' style='line-height:10px'><a href='javascript:void(0)' style='outline:none' tabindex='-1'><img src='https://platform.akila.blog/images/logo.png' style='display: block; height: auto; border: 0; width: 144px; max-width: 100%;' width='144' alt='your-logo' title='your-logo'></a></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <div class='spacer_block block-3' style='height:20px;line-height:20px;font-size:1px;'>&#8202;</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <table class='row row-8' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                            <tbody>
                                <tr>
                                    <td>
                                        <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 640px;' width='640'>
                                            <tbody>
                                                <tr>
                                                    <td class='column column-1' width='100%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 10px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
                                                        <table class='social_block block-1' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                                                            <tr>
                                                                <td class='pad' style='padding-left:20px;padding-right:20px;text-align:center;'>
                                                                    <div class='alignment' align='center'>
                                                                        <table class='social-table' width='168px' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block;'>
                                                                            <tr>
                                                                                <td style='padding:0 5px 0 5px;'><a href='https://www.facebook.com/akilablogfactory' target='_blank'><img src='https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-dark-gray/facebook@2x.png' width='32' height='32' alt='Facebook' title='Facebook' style='display: block; height: auto; border: 0;'></a></td>
                                                                                <!-- <td style='padding:0 5px 0 5px;'><a href='https://www.example.com' target='_blank'><img src='https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-dark-gray/twitter@2x.png' width='32' height='32' alt='Twitter' title='Twitter' style='display: block; height: auto; border: 0;'></a></td> -->
                                                                                <!-- <td style='padding:0 5px 0 5px;'><a href='https://www.example.com' target='_blank'><img src='https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-dark-gray/instagram@2x.png' width='32' height='32' alt='Instagram' title='Instagram' style='display: block; height: auto; border: 0;'></a></td> -->
                                                                                <td style='padding:0 5px 0 5px;'><a href='https://www.linkedin.com/company/blog-akila/' target='_blank'><img src='https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-dark-gray/linkedin@2x.png' width='32' height='32' alt='LinkedIn' title='LinkedIn' style='display: block; height: auto; border: 0;'></a></td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <table class='row row-9' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                            <tbody>
                                <tr>
                                    <td>
                                        <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 640px;' width='640'>
                                            <tbody>
                                                <tr>
                                                    <td class='column column-1' width='100%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
                                                        <table class='text_block block-1' width='100%' border='0' cellpadding='10' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'>
                                                            <tr>
                                                                <td class='pad'>
                                                                    <div style='font-family: sans-serif'>
                                                                        <div class style='font-size: 14px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 16.8px; color: #4a4a4a; line-height: 1.2;'>
                                                                            <p style='margin: 0; text-align: center; mso-line-height-alt: 16.8px;'>Douala, Littotal Cameroun</p>
                                                                            <p style='margin: 0; text-align: center; mso-line-height-alt: 16.8px;'>info@akila.blog</p>
                                                                            <p style='margin: 0; text-align: center; mso-line-height-alt: 16.8px;'>(+237) 690 38 65 39</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                
                        <table class='row row-11' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                            <tbody>
                                <tr>
                                    <td>
                                        <table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 640px;' width='640'>
                                            <tbody>
                                                <tr>
                                                    <td class='column column-1' width='100%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
                                                        <table class='icons_block block-1' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                                                            <tr>
                                                                <td class='pad' style='vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;'>
                                                                    <table width='100%' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
                                                                        <tr>
                                                                            <td class='alignment' style='vertical-align: middle; text-align: center;'><!--[if vml]><table align='left' cellpadding='0' cellspacing='0' role='presentation' style='display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;'><![endif]-->
                                                                                <!--[if !vml]><!-->
                                                                                <table class='icons-inner' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;' cellpadding='0' cellspacing='0' role='presentation'><!--<![endif]-->
                                                                                    <tr>
                                                                                        <td style='vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 6px;'><a href='javascript:void(0)' style='text-decoration: none;'><img class='icon' alt='Designed with BEE' src='https://d1oco4z2z1fhwp.cloudfront.net/assets/bee.png' height='32' width='34' align='center' style='display: block; height: auto; margin: 0 auto; border: 0;'></a></td>
                                                                                        <td style='font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; font-size: 15px; color: #9d9d9d; vertical-align: middle; letter-spacing: undefined; text-align: center;'><a href='javascript:void(0)' style='color: #9d9d9d; text-decoration: none;'>Akila blog Factory</a></td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table><!-- End -->
    </body>
    
    </html>

";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    // $headers .= 'From: <digitalx237@gmail.com>' . "\r\n";
    $headers .= 'From: info@akila.blog' . "\r\n";
    $headers .= 'Cci: donalbayiha@gmail.com' . "\r\n";
    $headers .= 'Cci: info@akila.blog' . "\r\n";

mail($to,$subject,$message,$headers);
}


function strTextLent($text,$nbr){
    $txt='';
    if(strlen($text)>$nbr):
        $txt= substr($text,0,$nbr).' ...';
    else:
        $txt=$text;
    endif;
    return $txt;
}

function clean_file_name($file)
{
  // nettoyage du nom de fichier
  $file = strtr($file,'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ','AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
  $file = strtolower($file);
  $file = preg_replace('/([^.a-z0-9]+)/i', '-', $file);
  return $file;
} 

function template_email($email,$nom,$prenom, $sujet=null)  {
    // global sender_mail();
    if($sujet==null){
        $sujet = utf8_decode("Inscription de la plateform de Akila Blog Factory");
    }else{
        $sujet=$sujet;
    }
			
			
    $message_img = "<br><a href='https://akila.blog' target='_blank'><img  style='height: 70px' src='https://akila.blog/images/logo-dark.png'></a>";

    // $message1 = "Hello <span style='color:green'>$first_name $last_name</span>, <br> You have successfully registered to the <span style='color:green'>AABD Submission Portal</span> !<br><br> Please Remember your identifiers : <br> Email : <span style='color:green'>$email</span> <br> Password : <span style='color:green'>$password</span>";

    $message1 = "Salut <span style='color:green;font-weight:bold'>$nom</span>, <br>Votre message à été transmis avec succès à l'équipe de support.<br><br> Voici les détails de votre message:<br> Votre Nom : <span style='color:green;font-weight:bold'>$nom</span> <br> Votre Prenom : <span style='color:green;font-weight:bold'>$prenom</span> <br>Votre Email : <span style='color:green;font-weight:bold'>$email</span> <br>Votre Numéro Téléphone : <span style='color:green;font-weight:bold'>$tel</span> ";

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

    sender_email($name_sender, $email_sender, $sujet, $message, $destination, $cc, $bcc);
}

function notifications($message) {
    global $Register;
    global $matricule_ad;
    global $matricule_entreprise;

    $Register->query("INSERT INTO notifications (matricule_entreprise, message, matricule_admin) VALUES (:mat,:message,:matricule_ad)",array(
        'mat'=>$matricule_entreprise,
        'message'=>$message,
        'matricule_ad'=>$matricule_ad,
    )); 
}

//================

//------------------- fonction
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function info_visiteur($A_ip){
    $data = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='. $A_ip));

    // $donne=explode('/',$data['geoplugin_timezone']);

    $data = [
        'pays' => $data['geoplugin_countryName'],
        'ville'=>$data['geoplugin_city'],
        'continent'=> $data['geoplugin_continentName'],
        'ses'=>'ok',

    ];
    return $data;
}

//==========fonction de suppression
function supprimer_data($Nom_table, $Nom_champ,$value){
    // global $DB;
    global $Register;
    $data = $Register->query("DELETE FROM $Nom_table WHERE $Nom_champ ='$value' LIMIT 1");
    return $data;
}

//======= recuper les donner d'une table lorsque $nom_champ== $val
function select_table_where($nom_table, $nom_champ, $val)
{
    global $Register;

    $recup = $Register->query("SELECT * FROM $nom_table WHERE $nom_champ = :var", array("var" => $val));
    return $recup;
}