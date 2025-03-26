<?php

// $id_website= '7220708820';

//------------- Permet d'afficher les information d'une categorie
function recup_detail_cat($mat_ca_post){ 
  global $id_website;

    $url_akila= "https://akila.store/categorie_produits";
    
    $data = array( 
               'id_website' => $id_website, 
               'mat_categorie_art'=> $mat_ca_post,
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
    $info_categorie = json_decode($result);
    if ($info_categorie  === FALSE) { /* Handle error */ }
    // var_dump($vues);
    return $info_categorie ;
  }

  // var_dump(recup_categories());
//------------- Permet d'afficher les information d'une categorie
  function recup_categories(){ 
    global $id_website;


    $url_akila= "https://akila.store/categorie_produits";
    
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
    $categorie = json_decode($result);

    if ($categorie  === FALSE) { /* Handle error */ }
    // var_dump($vues);
    return $categorie ;
  }
  
  /*

stdClass Object ( 
  [id_cate] => 512 
  [mat_categorie] => 1507 
  [id_website] => 7220708820 
  [libelle] => Agroalimentaire 
  [description] => 
  [cover] => 
  [icone] => 
  [is_active_space] => 1 
  [is_active_website] => 1 
  [is_active_market] => 1 
  [is_deleted_user] => 0 
  [is_deleted_admin] => 0 
  [date_ajout] => 2024-10-01 
  [heure_ajout] => 13:36:54 ) 
 */
