<?php

/* Cette fonction prend en IP en param et retour un array(), comme valeur: Ville, Pays, Continent;
exemple:
  $info_user = info_user($ip);
  <p>le pays est: <?= $info_user['pays'] ?></p>
  <p>le vile est: <?= $info_user['ville'] ?></p>
  <p>le Continent: <?= $info_user['continent'] ?></p>

*/

function info_user($ip)
{

    $data = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $ip));
    
    // $donne=explode('/',$data['geoplugin_timezone']);
    
    $data = [
      'pays' => $data['geoplugin_countryName'],
      'ville'=>$data['geoplugin_city'],
      'continent'=> $data['geoplugin_continentName'],
      'ip'=> $data['geoplugin_request'],
      'symbol'=>$data['geoplugin_currencySymbol'],
      'region'=>$data['geoplugin_regionName'],
      
    ];
    return $data;
}
  
  ?>
