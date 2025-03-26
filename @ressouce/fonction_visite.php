<?php  
  function getIp(){
      if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
      }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      }else{
        $ip = $_SERVER['REMOTE_ADDR'];
      }
      return $ip;
  }

  //verification de l'existence du visiteur actuel
  $ip = getIp();
  $date_jour = date('Y-m-d');
  $heure_visite = date("H:i:s");
  $info = $ip."*".$heure_visite;
  // var_dump( $date_jour, $heure_visite,  $info);

  $get_visit = $DB->db->query("SELECT * FROM `visiteurs_journaliers` WHERE date_visite = '$date_jour' AND matricule_entreprise = '$matricule_entreprise'");
  
  // var_dump($get_visit, $matricule_entreprise); 

  if ($get_visit->rowCount()<1) {

    # insertion d'un nouveau visiteur
    
    // echo $ip;
    // $cook = $bdd_home -> prepare("INSERT INTO visiteurs (ip_visiteur) VALUES ('$ip')");
    // $cook->execute(array($ip));
    $DB->db->query("INSERT INTO visiteurs_journaliers (matricule_entreprise, date_visite, heure_visite, visiteurs, nbre) VALUES ('$matricule_entreprise', '$date_jour', '$heure_visite', '$info', '1')");
              // var_dump('ok');    
    }
    else{
      while ($data_visit = $get_visit->fetch()) {
          $get_info = $data_visit['visiteurs'];
          $info2 = explode("|", $get_info);
          $find = false;
          $nbre_visiteur = 0;
          // var_dump($info2);

          $new_info = "";
          foreach ($info2 as $key => $value) {
            //si la valeur n'est pas vide
            if ($value!="") {
              $info3 = explode("*", $value);

              //si la valeur n'est pas vide
              $new_valer = "";
              foreach ($info3 as $key1 => $value1) {
                if ($value1!="") {
                  if ($value1==$ip) {
                    $find = true;
                    $bon = $key1;
                    $info3[$key1+1] = $heure_visite;
                  }
                }
                if ($new_valer!="") {
                  $new_valer .= "*".$info3[$key1];
                }
                else{
                  $new_valer = $info3[$key1];
                }
              }

              $info2[$key] = $new_valer;
              if ($find) {
                $info3[1] = "sajor";
              }
              $nbre_visiteur++;
            }

            //recupération de l'information finale et modifié
            if ($new_info!="") {
              $new_info .= "|".$info2[$key];
            }
            else{
              $new_info = $info2[$key];
            }
          }

          // var_dump($info2);

          //si on ne trouve pas le visiteur dans la liste, on l'ajoute à nouveau
          if (!$find) {
            //echo "non trouvé";
            //si la valeur est vide
            if ($new_info=="") {
              $new_info = $info;
            }
            else{
              $new_info .= "|".$info; 
            }
            $nbre_visiteur++;
          }
          // var_dump($nbre_visiteur);
          //mise à jour des info dans la bd
          $DB->db->query("UPDATE visiteurs_journaliers SET visiteurs='$new_info', nbre='$nbre_visiteur', heure_visite='$heure_visite' WHERE date_visite = '$date_jour' AND matricule_entreprise = '$matricule_entreprise'");
          // echo$new_info;
      }
    }
?>