<?php
/* 

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['skl']) || empty($_SESSION['skl'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: ../../page-login.php");
    exit;
}

// Récupérer les informations de l'utilisateur connecté
$id = $_SESSION['skl']['id'] ?? null;
$nom = $_SESSION['skl']['nom'] ?? '';
$prenom = $_SESSION['skl']['prenom'] ?? '';
$email = $_SESSION['skl']['email'] ?? '';
$supadmin = $_SESSION['skl']['supadmin'] ?? 0;
$telephone = $_SESSION['skl']['telephone'] ?? '';
$ville = $_SESSION['skl']['ville'] ?? '';
$active = $_SESSION['skl']['active'] ?? 0;
$matricule_admin = $_SESSION['skl']['matricule_admin'] ?? '';
$matricule_akila_blog = $_SESSION['skl']['matricule_akila_blog'] ?? '';
$permission = $_SESSION['skl']['permission'] ?? 0;
$inscrit = $_SESSION['skl']['inscrit'] ?? '';

// Vérifier si le compte est actif
if ($active != 1) {
    // Déconnecter l'utilisateur si son compte n'est pas actif
    session_unset();
    session_destroy();
    
    // Rediriger avec un message d'erreur
    $_SESSION['error_message'] = "Votre compte n'est pas actif. Veuillez contacter l'administrateur.";
    header("Location: page-login.php");
    exit;
}

// Autres vérifications ou initialisations peuvent être ajoutées ici
$is_shop = 0; // Valeur par défaut pour $is_shop
 */
require("includes/main_header/main_header.php");
require("fonctions/fonction.php");
require("fonctions/email_noticication.php");
include("fonctions/#redirection.php");
include("fonctions/insere_photo.php"); 
include("fonctions/information_user.php");

// $img_page="https://akila.blog/@ressouce/img_page/";

//////// Repertoire pour a ficher le image lorque nous sommes en ligne $chin_service_a photo_membrer

$chemin2="../@ressouce/couverture_banniere/";
$chin_logo_a="../@ressouce/logo_site/";
$chin_service="../@ressouce/img_service/";

$chem_blog='../@ressouce/mg_etablissement/';
$chemin_profile='../@ressouce/profile/';
$file_document='../@ressouce/document/';
$img_page="../@ressouce/img_page/";
$photo_membrer="../@ressouce/photo_membrer/"; //--ajouter_old
$logo_club="../@ressouce/logo_club/"; //--ajouter
//==nouvo
$chemin_banniere_annonce="../@ressouce/banniere_annonce/";

//////// fin Repertoire pour inserer le imsge lorque nous sommes en ligne $chin_service_a

//////// Repertoire pour a ficher le image lorque nous sommes en ligne $chin_service_a

// $chemin2="https://akila.blog/@ressouce/couverture_banniere/";
// $chin_logo_a="https://akila.blog/@ressouce/logo_site/";
// $chin_service="https://akila.blog/@ressouce/img_service/";
// $chem_blog='https://akila.blog/@ressouce/mg_etablissement/';
// $chemin_profile='https://akila.blog/@ressouce/profile/';
// $file_document='https://akila.blog/@ressouce/document/';
// $img_page="https://akila.blog/@ressouce/img_page/";
// $photo_membrer="https://akila.blog/@ressouce/photo_membrer/"; //--ajouter
// $logo_club="https://akila.blog/@ressouce/logo_club/"; //--ajouter
// $chemin_banniere_annonce ="https://akila.blog/@ressouce/banniere_annonceb/"; //--ajouter



//////// fin Repertoire pour inserer le imsge lorque nous sommes en ligne $chin_service_a

//////// Repertoire pour inserer le image lorque nous sommes en ligne
$chemin2a="../@ressouce/couverture_banniere/";
$chin_logo="../@ressouce/logo_site/";
$chin_service_a="../@ressouce/img_service/";
$chem_blog_a='../@ressouce/mg_etablissement/';
$chemin_profile_a='../@ressouce/profile/';
$file_document_a='../@ressouce/document/';
$img_page_a="../@ressouce/img_page/";
$photo_membrer_a="../@ressouce/photo_membrer/";
//==nouvo
$chemin_banniere_annonce="../@ressouce/banniere_annonce/";
//////// fin Repertoire pour inserer le imsge lorque nous sommes en ligne

//--------------------------------------------les requets
$date_jour = date('Y-m-d');
$now= Date('Y-m-d');
// recupe toutes les entreprises

//--------- recupere toutes les information du chef de l'etablissement
function info_admin($matricule_ad){
    global $Register;
    $data= $Register->query("SELECT * FROM admin WHERE matricule_admin=:matricule_admin", array("matricule_admin" => $matricule_ad));
    return $data;
} 
//-----------------recuper les vues sur les posts
function nombre_vu($matricule_post){
    global $Register;
    $nombre_vu  = $Register->query("SELECT nbre FROM visiteurs_blog WHERE id_blog =:matricule ", array("matricule" => $matricule_post));

    return $nombre_vu;
  }


//---------------------- calcule le nombre de jour
  function nubre_de_jour($interval){
    if($interval->days==0):
       $date = "Aujourd'hui";
    else:
        $date = "Il y'a $interval->days Jours";
    endif;

    return $date;
}

//----------------------------------------calcule le nombre de de jour
function numbre_de_jour($date_post){
    $now= Date('Y-m-d');
    $date = new DateTime($date_post);
    $aujourdhui = new DateTime($now);
    $interval = $aujourdhui->diff($date);
    
    if($interval->days==0):
       $data = "Aujourd'hui";
    elseif($interval->days > 30):
        $var=$interval->days/30;
        $data = "Il y'a ". round($var, 0)."Mois";
    elseif($interval->days >=7):
        $var= $interval->days/7;
        $data = "Il y'a ".round($var, 0) ." Semaines";
    endif;

    return @$data;
}

// var_dump($reservation_service); 66d03bfa5f7b8  66d03bfa5f7b8
function info_service_id($id_service){ //------ recuper les infos d'un service grace à son Id
    global $Register;
    $data='';
    $data = $Register->query("SELECT * FROM service WHERE id=:mat_ser || matricule_service=:mat_ser ORDER BY id DESC ", array("mat_ser"=>$id_service));
    if(empty($data)){
        $data = $Register->query("SELECT * FROM page WHERE matricule_page=:mat_ser  ORDER BY id DESC ", array("mat_ser"=>$id_service));

    }
    return $data;
}


//---------------- recuper les info de website matricule_admin
function info_website($mat_entreprise){ //------ recuper les infos d'un service grace à son Id
    global $Register;
    $data = $Register->query("SELECT * FROM website WHERE matricule_entreprise=:mat_en ORDER BY id DESC ", array("mat_en"=>$mat_entreprise));
    
    return $data[0];
};


$devise=$entreprises=$entreprises_no_user_api=$entreprises_creer_admin=$entreprises_user_api=$entreprises_user_page=$entreprises_user_api_creer_admin=$category=$page_site=$blogs=$all_blog=$categorie_magasine=$recup_visite_magasin_all=$visite_jour=$partenaire=$notif=$reservation_service='';
//---------------------------------------------- devise 
$devise= $Register->query("SELECT code_iso,label_fr FROM devises WHERE active=1");

//---------------- recuper les entreprises
if (@$supadmin == "oui") :
    if (@$permission == 2):
        //--------------recupertion des entreprise
        $entreprises= recup_toute_table($Register,'website'); //--------------recupertion des entreprise
    else:
        //======== recuper les entreprise d'un admin
        $entreprises= select_table_where('website', 'matricule_admin', $matricule_ad);

    endif;
endif;

$entreprises_no_user_api = $Register->query("SELECT * FROM website WHERE onsite =:onsite ORDER BY id desc", array( "onsite"=>1)); //--------------recupertion des entreprise qui n'utilise pas Api

$entreprises_creer_admin = $Register->query("SELECT * FROM website WHERE matricule_admin =:matricule_admin AND onsite =:onsite ORDER BY id desc", array("matricule_admin"=>$matricule_ad, "onsite"=>0)); //--------------recupertion toutes les entreprise creer par un admin

$entreprises_user_api = $Register->query("SELECT * FROM website WHERE onsite =:onsite AND articles=1", array("onsite"=>0)); //--------------recupertion les entreprise qui utilise Api

$entreprises_user_page = $Register->query("SELECT * FROM website WHERE onsite =:onsite AND articles=0", array("onsite"=>0));  //--------------recupertion les entreprise qui utilise les page de ventes

$entreprises_user_api_creer_admin = $Register->query("SELECT * FROM website WHERE onsite =:onsite AND matricule_admin =:matricule_admin", array("onsite"=>0,"matricule_admin"=>$matricule_ad));

$category =$Register->query("SELECT * FROM categorie_article WHERE matricule_entreprise =:matricule ",array("matricule"=>$matricule_entreprise)); //---------------------------------Reuper les categorie d'un blog d'une entreprise

$page_site =$Register->query("SELECT * FROM page WHERE matricule_entreprise =:matricule ",array("matricule"=>$matricule_entreprise));

$blogs = $Register->query("SELECT * FROM blog WHERE matricule_entreprise =:matricule ORDER BY ID DESC",array("matricule"=>$matricule_entreprise)); 

$all_blog = $Register->query("SELECT * FROM blog ORDER BY ID DESC"); 
// recuper les categories du magasine
$categorie_magasine=$Register->query("SELECT * FROM categorie_1");

//--------------------------------------------------------------------------------------------------------visiteurs
$recup_visite_magasin_all = $Register->query("SELECT SUM(nbre) as nbres FROM visiteurs_journaliers WHERE matricule_entreprise=:matricule_entreprise ORDER BY id DESC ", array
("matricule_entreprise"=>'19305033'));
$recup_visite_magasin_all=$recup_visite_magasin_all[0]->nbres;

// var_dump($recup_visite_magasin_all);

$recup_visite_magasin = $Register->query("SELECT SUM(nbre) as nbres FROM visiteurs_journaliers WHERE matricule_entreprise=:matricule_entreprise AND date_visite='$now' ORDER BY id DESC ", array("matricule_entreprise"=>'19305033'));
$recup_visite_magasin=$recup_visite_magasin[0]->nbres;

$visite_jour = $Register->query("SELECT SUM(nbre) as nbres FROM visiteurs_journaliers WHERE matricule_entreprise=:matricule_entreprise AND date_visite=:date_visi", array("matricule_entreprise"=>$matricule_entreprise,"date_visi"=>$date_jour));
// $visite_jour=$visite_jour[0]->nbres;
//------- recupaire partenaire
$partenaire=$Register->query("SELECT * FROM partenaire_entreprise WHERE matricule_entreprise ='$matricule_entreprise'");

$visiteurs_mayennes=$Register->query("SELECT SUM(nbre) as nbres FROM visiteurs_journaliers WHERE matricule_entreprise=:id_etablissement", array("id_etablissement" => $matricule_entreprise));
// $visiteurs_mayennes=$visiteurs_mayennes[0]->nbres;
// var_dump($recup_visite_magasin);

$visiteurs_tous_les_sites=$Register->query("SELECT SUM(nbre) as nbres FROM visiteurs_journaliers ");

$visite_jour_sur_site = $Register->query("SELECT SUM(nbre) as nbres FROM visiteurs_journaliers WHERE date_visite=:date_visi", array("date_visi"=>$date_jour));
//--------------------------------------------------------------------------------------------------------------------------------fin


//---------------------recuper les services d'une entreprise
$formation1 = $Register->query("SELECT * FROM service WHERE matricule_entreprise=:matricule AND formation=1",array("matricule"=>$matricule_entreprise));
$formation2 = $Register->query("SELECT * FROM service WHERE matricule_entreprise=:matricule AND formation=2",array("matricule"=>$matricule_entreprise));
$formation3 = $Register->query("SELECT * FROM service WHERE matricule_entreprise=:matricule AND formation=3",array("matricule"=>$matricule_entreprise));
$formation4 = $Register->query("SELECT * FROM service WHERE matricule_entreprise=:matricule AND formation=4",array("matricule"=>$matricule_entreprise));
$formation5 = $Register->query("SELECT * FROM service WHERE matricule_entreprise=:matricule AND formation=5",array("matricule"=>$matricule_entreprise));
$formation6 = $Register->query("SELECT * FROM service WHERE matricule_entreprise=:matricule AND formation=6",array("matricule"=>$matricule_entreprise));

// $service_entreprise = $Register->query("SELECT * FROM service WHERE matricule_entreprise=:matricule ORDER BY id desc", array("matricule" => $matricule_entreprise));


// $service = $Register->query("SELECT * FROM service  ORDER BY id desc");
if($permission == 2):
    $admin = $Register->query("SELECT * FROM admin ORDER BY id DESC");
    ele:
    $admin = $Register->query("SELECT * FROM admin WHERE  matricule_admin_ajout_admin='$matricule_ad' ORDER BY id DESC");
endif;

//============ var_dump($visite_jour);
// var_dump($permalien);

if(isset($permalien)):
    //======30/06/2024 ==== nouvo
    $blogs= $blogs;
    $service_entreprise = $Register->query("SELECT * FROM service WHERE matricule_entreprise=:matricule ORDER BY id desc", array("matricule" => $matricule_entreprise));
    $service=$service_entreprise;
    //====fin


    $notif= $Register->query("SELECT * FROM notifications WHERE matricule_entreprise=:matricule ORDER BY id desc",array('matricule'=>$matricule_entreprise));
    //------------------- recuper les articles d'une entreprise
    
    $reservation_service = $Register->query("SELECT * FROM pospect_services WHERE matricule_entreprise=:matricule_entreprise ORDER BY id DESC ", array("matricule_entreprise"=>$matricule_entreprise));
    
    $page_site =$Register->query("SELECT * FROM page WHERE matricule_entreprise =:matricule ORDER BY id DESC ",array("matricule"=>$matricule_entreprise));
    
else:
    if ($permission==2):
        //======30/06/2024 ==== nouvo
        $blogs= $all_blog;
        $service = $Register->query("SELECT * FROM service  ORDER BY id desc");

        //=========fin
        

        $reservation_service = $Register->query("SELECT * FROM pospect_services ORDER BY id DESC ");
        
        $notif= $Register->query("SELECT * FROM notifications ORDER BY id desc");
        
        $page_site =$Register->query("SELECT * FROM page ORDER BY id DESC");
    endif;
endif;


$pays=$Register->query("SELECT * FROM pays");


if ($permission==2) { // permet d'afficher les entreprise d'une personnes à creer
    $paiement_data=$Register->query("SELECT * FROM paiement  ORDER BY id desc ");
    $tous_entreprise=@$entreprises_no_user_api;
    $entreprises_user_api= @$entreprises_user_api;
// var_dump($tous_les_visiteurs);    

}else{
        $tous_entreprise= @$entreprises_creer_admin;
        $entreprises_user_api= @$entreprises_user_api_creer_admin;
        $paiement_data=$Register->query("SELECT * FROM paiement WHERE page_pay='$matricule_entreprise' ORDER BY id desc ");
}    

//---------------------fin

// $now='2023-10-31';


// $january = new DateTime($now);
// $february = new DateTime($tomorrow);
// $interval = $february->diff($january);

// var_dump($interval->days);



//  var_dump($notif[0]->date .' '. Date('Y-m-d'));
// $date1 = new DateTime("now");
// $date2 = new DateTime("tomorrow");

// var_dump($date1 == $date2);
// var_dump($date1 < $date2);
// var_dump($date1 > $date2);


$annonces =$Register->query("SELECT * FROM annonce ORDER BY id DESC ");
// var_dump($annonces);

function click_annonce($mat_annonce){
    global $Register;
    $clik = $Register->query("SELECT clik FROM clik_annonce WHERE matricule_annonce =:matricule ORDER BY id DESC ",array("matricule"=>$mat_annonce));
    return @$clik[0]->clik;
}
//====== 10/02/2025 si la boutique est activé.
if(@$is_shop==1):
    $commandes = select_table_where('commandes', 'mat_entreprise', $matricule_entreprise);
elseif($permission == 2):
    $commandes = $Register->query ("SELECT * FROM commandes ORDER BY id DESC ");
endif;