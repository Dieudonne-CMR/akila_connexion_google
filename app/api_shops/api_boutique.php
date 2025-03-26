<?php

// $id_website= '7220708820';

//------------- Permet de recuperer les informations d'une boutique
function info_boutique(){ 
  global $id_website;

    $url_akila= "https://akila.store/info_boutique";
    
    $data = array( 
               'id_website' => $id_website
               );
    
    // utilisez 'http' même si vous envoyez la requête sur https:// ...
    $options = array(
     'http' => array(
       'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
       'method'  => 'POST',
       'content' => http_build_query($data)
     )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url_akila, false, $context);
    $info_boutique = json_decode($result);
    if ($info_boutique  === FALSE) { /* Handle error */ }
    // var_dump($vues);
    return $info_boutique ;
  }
/*
  [id] => 207 
  [id_website] => 7220708820 
  [nom_website] => Bi Muss
  [is_site_ecom] => 0 
  [nom_lien] => bi-musso 
  [nom_domaine] => https://www.bimusso.com/ 
  [id_template] => 1 
  [active] => 1 
  [is_google_translate] => 0 
  [logo] => logo-space-bimousso-487.jpg 
  [banner] => banner-space-bimousso-148.avif 
 
  [image_vedette] => 
  [image_accueil] => 
  [image_discovery] => 
  [text_accroche] => 
  [mat_proprietaire] => 6572332513 
  [mat_managers] => 
  [mat_com] => 7856235489 
  [description] => 
  [secteur_activite] => Ventes de produits Made in Mali 
  [call_to_action] => 
  [numero_whatsapp_aide] => 22375510161 
  [numero_whatsapp_aide_format] => +223 75 51 01 61 
  [email_officiel] => contact@bimusso.com 
  [lien_twitter] => 
  [lien_facebook] => https://web.facebook.com/profile.php?id=100059189716946 
  [lien_instagram] => 
  [lien_youtube] => 
  [map] =>  
  [rue] => Kalaban coura sur la route du 30m dans la station Baraka entre le feu de garantibougou et la protection civile 
  [quartier] => Kalaban Coura 
  [ville] => Bamako 
  [pays] => ML 
  [is_certified] => 0 
  [is_prix] => 1 
  [is_prix_fictif] => 0 
  [is_commande_whatsapp] => 1 
  [type_livraison] => 1 
  [prix_livraison] => 0 
  [code_iso_devise] => XAF 
  [is_panier] => 0 
  [is_bouton_acheter] => 0 
  [is_bubble_whatsapp] => 0 
  [is_scrollbar_shine] => 0 
  [is_clignotant_whatsapp] => 0 
  [is_share_whatsapp] => 0 
  [is_share_facebook] => 0 
  [is_share_linkedin] => 0 
  [is_share_twitter] => 0 
  [plugin_messenger] => 
  [pixel_facebook] => 
  [date_creation] => 2024-10-01 
  [heure_creation] => 13:21:49 
  [is_space_exist] => 1 
  [is_space_completed] => 1 
  [is_space_certified] => 0 ) )

    */