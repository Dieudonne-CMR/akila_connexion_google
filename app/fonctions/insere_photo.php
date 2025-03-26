<?php 
  function inser_image($nom_file, $chemin_tempo_file, $taille_file, $_chemin_uplaud_fille, $nom_champ, $id_etablissement,$Register)
  {
      $erreur = '';
      $extension = strtolower(pathinfo($nom_file, PATHINFO_EXTENSION));

      $extensions = array("png", "jpg", "jpeg", "gif");

      if (isset($nom_file)) {
          if (in_array($extension, $extensions)) {
              if ($taille_file < 10000000) {
                  if (move_uploaded_file($chemin_tempo_file, $_chemin_uplaud_fille . $nom_file)) {

                      $recup = $Register->recupe_info_table($id_etablissement, "photo");
                      if (count($recup) < 1) {
                          $Register->query(
                              "INSERT INTO photo($nom_champ,id_etablissement) VALUES(:ban,:id_etablissement)",
                              array(
                                  // "matri" => $matricule,
                                  "ban" => $nom_file,
                                  "id_etablissement"=>$id_etablissement,
                              )
                          );
                          $erreur = "les donnees ont bien été enregister";
                      } else {
                          $Register->query(
                              "UPDATE photo SET $nom_champ=:ban WHERE id_etablissement=$id_etablissement",
                              array(
                                  "ban" => $nom_file
                              )
                          );
                          $erreur = "L'Etablissement a été modifier";
                      }
                  } else {
                      $erreur = " desolé l'image n'a pas été en voyer";
                  }
              } else {
                  $erreur = "le chifier est trop grand";
              }
          } else {
              $erreur = "l'extension du fichier doit être du type png, jpg, jpeg ,gif";
          }
      }

      return $erreur;
  }