<?php session_start();
// session_destroy();
// var_dump($_SESSION['skl']['nom'], $_SESSION['skl']['supadmin'] );
   if(!isset($_SESSION['skl']['nom']) & empty($_SESSION['skl']['nom']) AND !isset($_SESSION['skl']['supadmin']) & empty($_SESSION['skl']['supadmin'])){
       header('location: ../../page-login.php');
    }else{
       
       include "../@ressouce/class.db.php";
       include "../@ressouce/class.register.php";
       $chemin1="https://akila.blog/@ressouce/mg_etablissement/";
       $chemin2="https://akila.blog/@ressouce/couverture_banniere/"; 
       $chemin3="https://akila.blog/@ressouce/img_event/";
       $profile="https://akila.blog/@ressouce/profile/";
      //  $img_page="https://akila.blog/@ressouce/img_page/";
      
       $DB=new DB();
       $DB=$DB->db;
       $Register=new Register($DB);
     
       $matricule_ad=$_SESSION['skl']['matricule_admin'];
      //  $permission= $_SESSION['skl']['permission'];
      //  $supadmin= $_SESSION['skl']['supadmin'];
      // var_dump($_SESSION['matricule_entrepris']);

      if (isset($matricule_ad)): // recuuper toutes les informations de l'utilisateurs
         $profile=$Register->query("SELECT * FROM admin WHERE
         matricule_admin=:matricule LIMIT 1", array("matricule" => $matricule_ad));
         $profile_nom=$profile[0]->nom;
         $profile_prenom=$profile[0]->prenom;
         $profile_telephone=$profile[0]->telephone;
         $profile_whatsapp=$profile[0]->tel_whatwapp;
         $profile_ville=$profile[0]->ville;
         $profile_pays=$profile[0]->pays;
         $profile_email=$profile[0]->email;
         $profile_region=$profile[0]->region;
         $profile_profile=$profile[0]->profile;

         $permission=$profile[0]->permission;
         $supadmin=$profile[0]->sup_admin;
         $active=$profile[0]->active;
        
         // var_dump($profile);permission  active
       endif;
        // var_dump($profile[0]->matricule_admin);
      if($permission==2):
         $matricule_akila_blog = "1011121121"; //$_SESSION['skl']['matricule_akila_blog']; 
        else:
           if($active ==2){
            // var_dump($matricule_ad); recuper les matricule des entreprise que gerer un gerant
              $data = $Register->query("SELECT * FROM admin_entreprise WHERE
               matricule_admin=:matricule LIMIT 1", array("matricule" => $matricule_ad)); // recupere toutes les entreprises que gere un administrateurs
            
               $matricule_entretrise_gerant = explode('#',@$data[0]->matricule_entreprise); // les mettre dans un tableau

            //============= 17/01/2025 recupere les imformations de la premiere entreprise
            $data1 = $Register->query("SELECT matricule_entreprise FROM website WHERE
               matricule_admin=:matricule ", array("matricule" => $matricule_ad)); // recupere toutes les entreprises que gere un administrateurs
            //======= fonction qui permet les information de l'entreprise du gerant et l'entreprise du proprietaire ensemble    
              // les matricules des entreprises que suit un gerant
              $data = ajouterElements($matricule_entretrise_gerant, $data1); // les matricules des entreprises que suit un gerant
              //========== fin de 01/07/2024 
              // var_dump(@$data);
            function ajouterElements($data, $data1) {
               foreach ($data1 as $element) {
                  // var_dump($element->matricule_entreprise);
                   array_push($data, $element->matricule_entreprise);
               }
               return $data;
           }
         }
          
        
      endif;
      // var_dump($data);

      if (!empty(@$data)):
         //  var_dump($data[0]);
            if(!empty($data[0])):
               $matricule_akila_blog=$data[0]; // recupere le premier matricule de l'entreprise
            else:
               $matricule_akila_blog=$data[1]; // recupere le premier matricule de l'entreprise
            endif;
         //  var_dump( $matricule_akila_blog);


            if(isset($_SESSION['matricule_entreprise_gere_admin'])){ // le matricule pour le changement de l'entreprise
               $matricule_akila_blog=$_SESSION['matricule_entreprise_gere_admin'];
               
            }
         $matricule_entreprise = $matricule_akila_blog; // lorsque le matricule de $_SESSION['matricule_entreprise_gere_admin'] est supprimé
         
         $rucup_website=$Register->recupe_info_table($matricule_entreprise,"website"); // recupere toutes les information de cette entreprise    
         
          //============ nouvo
          if(!empty($rucup_website[0]->id_core)): // === 28/06/2024
            $id_core=$rucup_website[0]->id_core;
            $rucup_info_etablissement=$Register->recupe_info_table($matricule_entreprise,"core$id_core"); // recupere toutes les information de cette entreprise    
         endif; //=== fin 28/06/2024
         $permalien=@$rucup_website[0]->permalien; // de entreprise

      else:

         if(isset($_SESSION['matricule_entrepris']) AND !empty($_SESSION['matricule_entrepris'])): //le variable: $_SESSION['permalien_site'] vient du fichier modifi_info_etablissement.php
            $matricule_entreprise=$_SESSION['matricule_entrepris'];
            // var_dump($_SESSION['matricule_entrepris']);
            $rucup_website=$Register->recupe_info_table($matricule_entreprise,"website"); // recupere toutes les information de cette entreprise    
            
            //============nouveu
            if(!empty($rucup_website[0]->id_core)): // === 28/06/2024
               
               $id_core=$rucup_website[0]->id_core;
               $rucup_info_etablissement=$Register->recupe_info_table($matricule_entreprise,"core$id_core"); // recupere toutes les information de cette entreprise
               // var_dump($permalien);
            endif; //=== fin 28/06/2024
            $permalien=$rucup_website[0]->permalien; // de entreprise

         else:
            $matricule_entreprise= @$matricule_akila_blog;
            
         endif;
         
       endif;

     
        // var_dump($matricule_entreprise, $permalien);
      
       if (isset($rucup_website[0]->nom_entreprise)) { // recupere le nom de l'entreprise connecter
         $nom_entreprise=$rucup_website[0]->nom_entreprise;
       }else{
         $nom_entreprise= "Akila Blog Factory";
       }
 

       if(!empty($permalien)): 
         @$id_core=$rucup_website[0]->id_core;
         @$permalien=$rucup_website[0]->permalien;
         @$cours_nom=$rucup_website[0]->cours_nom;
         @$ville=$rucup_website[0]->ville;
         @$quartier=$rucup_website[0]->quartier;
         @$telephone=$rucup_website[0]->telephone;
         @$id_pays=$rucup_website[0]->pays;
         @$region=$rucup_website[0]->region;
         @$nom_pays=$Register->query("SELECT * FROM pays WHERE id_pays=:id", array("id" =>$id_pays));
        @$nom_pays=$nom_pays[0]->nom_fr;
         @$email_entreprise=$rucup_website[0]->email;

         @$facebook=$rucup_website[0]->lien_fb;
         @$linkedin=$rucup_website[0]->lien_linkedin;
         @$twitter=$rucup_website[0]->twitter;
         @$youtube=$rucup_website[0]->youtube;
         @$whatsapp=$rucup_website[0]->whatsapp;
         @$instagramm=$rucup_website[0]->instagram;
         @$google_map=$rucup_website[0]->google_map;
         @$petite_description_entreprise=$rucup_website[0]->decription;
         
         @$titre_service=$rucup_website[0]->titre_service;
         @$titre_blog=$rucup_website[0]->titre_blog;
         @$titre_member=$rucup_website[0]->titre_member; //--ajouter
         
         @$logo=$rucup_website[0]->logo;
         $couleur1=$rucup_website[0]->color1;
         $couleur2=$rucup_website[0]->color2;
         $couleur2=$rucup_website[0]->color2;
         $pixel_bf=$rucup_website[0]->pixel_fb;

         $page1=$rucup_website[0]->page1;
         $page2=$rucup_website[0]->page2;
         $page3=$rucup_website[0]->page3;
         $page4=$rucup_website[0]->page4; 

         $page404=$rucup_website[0]->page404; //-------page 404
         $b_whatsapp=$rucup_website[0]->bouton_whatsapp; //------bouton_whatsapp

         // var_dump($rucup_website);  is_tunnel
         @$nom_domaine=$rucup_website[0]->nom_domaine; 
         @$num_banniere=$rucup_website[0]->banniere; 
	      @$onsite=$rucup_website[0]->onsite; 
	      @$page_vente=$rucup_website[0]->page_vente; 

	      @$is_tunnel=$rucup_website[0]->is_tunnel;  // nouvo 26/07/2024
         
	      @$video_tunnel=$rucup_website[0]->video_tunnel;  // nouvo 26/07/2024
	      @$video_position=$rucup_website[0]->video_position;  // nouvo 26/07/2024
         
         
         //11/10/2023
         $dispo_artcle=$rucup_website[0]->articles; //-------page 11/10/2023-------------------
         // $page404=$rucup_website[0]->page404; //-------page 10/10/2023-----------------
         
	      @$is_shop=$rucup_website[0]->is_shop;  // nouvo 10/02/2025-
	      @$mat_shop=$rucup_website[0]->mat_shop;  // nouvo 10/02/2025-
         
          //--------------------------------12/19/2023
         @$mention_des=$rucup_website[0]->mention_des;
         @$mention_titre=$rucup_website[0]->mention_titre;
         @$mention1=$rucup_website[0]->mention1;
         @$mention_titre1=$rucup_website[0]->mention_titre1;
         @$mention2=$rucup_website[0]->mention2;
         @$mention_titre2=$rucup_website[0]->mention_titre2;
         @$mention3=$rucup_website[0]->mention3;
         @$mention_titre3=$rucup_website[0]->mention_titre3;
         @$mention4=$rucup_website[0]->mention4;
         @$mention_titre4=$rucup_website[0]->mention_titre4;
         //-----------------------------------------------fin


         //======================16/07/2024
            @$textbouton=$rucup_website[0]->textbouton;
            @$lienbouton=$rucup_website[0]->lienbouton;
            $_SESSION['mat_entreprise']= $matricule_entreprise; // aide pour les requet qui itulise le js 16/07/2024
         //================fin

         @$mat_admin_site=$rucup_website[0]->matricule_admin; // admin 25/07/2024

         //===19/07/2024
         $code_iso=$rucup_website[0]->code_iso; 
         $prix_tunnel_vente=$rucup_website[0]->prix_tunnel_vente;
         $lien_de_telechargement=$rucup_website[0]->lien_de_telechargement;
         $paiement_tunnel=$rucup_website[0]->paiement_tunnel;


    
         // $titre_banniere_blog=$rucup_info_etablissement[0]->titre_banniere_blog;
         @$titre_banniere_service	=$rucup_info_etablissement[0]->titre_banniere_service;
         @$titre_banniere_blog=$rucup_info_etablissement[0]->titre_banniere_blog;
         @$titre_banniere_member=$rucup_info_etablissement[0]->titre_banniere_member; //--ajouter
         
         @$titre_banniere_accueil1=$rucup_info_etablissement[0]->t_baniere1;
         @$description_banniere1=$rucup_info_etablissement[0]->d_baniere1;

         @$titre_banniere_accueil2=$rucup_info_etablissement[0]->t_baniere2;
         @$description_banniere2=$rucup_info_etablissement[0]->d_baniere2;

         @$titre_banniere_accueil3=$rucup_info_etablissement[0]->t_baniere3;
         @$description_banniere3=$rucup_info_etablissement[0]->d_baniere3;
         @$apropos=$rucup_info_etablissement[0]->propos;
         

         // $couleur3=$rucup_info_etablissement[0]->color2; 

         @$banniere=$rucup_info_etablissement[0]-> about_image1;
         @$banniere2=$rucup_info_etablissement[0]->	banniere_image2;
         @$banniere3=$rucup_info_etablissement[0]->	banniere_image3;

         @$img_apropo=$rucup_info_etablissement[0]->banniere_site1;
         @$img_apropo=$rucup_info_etablissement[0]->banniere_site1;

         // var_dump( $banniere2, $banniere3);
         
        //-------------------------------------- 23/11/2024

         @$titre_s=$rucup_info_etablissement[0]->titre_s;
         @$titre_s1=$rucup_info_etablissement[0]->titre_s1;
         @$titre_s2=$rucup_info_etablissement[0]->titre_s2;
         @$titre_s3=$rucup_info_etablissement[0]->titre_s3;
         @$discription_s1=$rucup_info_etablissement[0]->discription_s1;
         @$discription_s2=$rucup_info_etablissement[0]->description_s2;
         @$discription_s3=$rucup_info_etablissement[0]->description_s3;
         
        //  @$mention_des=$rucup_info_etablissement[0]->mention_des;
        //  @$mention_titre=$rucup_info_etablissement[0]->mention_titre;
        //  @$mention1=$rucup_info_etablissement[0]->mention1;
        //  @$mention_titre1=$rucup_info_etablissement[0]->mention_titre1;
        //  @$mention2=$rucup_info_etablissement[0]->mention2;
        //  @$mention_titre2=$rucup_info_etablissement[0]->mention_titre2;
        //  @$mention3=$rucup_info_etablissement[0]->mention3;
        //  @$mention_titre3=$rucup_info_etablissement[0]->mention_titre3;
        //  @$mention4=$rucup_info_etablissement[0]->mention4;
        //  @$mention_titre4=$rucup_info_etablissement[0]->mention_titre4;

         @$motivation_titre=$rucup_info_etablissement[0]->motivation_titre;
         @$motivation_desription=$rucup_info_etablissement[0]->motivation_desription;
         @$motivation_img=$rucup_info_etablissement[0]->motivation_img;
         @$offre_titre=$rucup_info_etablissement[0]->offre_titre;
         @$offre_descripr=$rucup_info_etablissement[0]->offre_descripr;
         @$offre_img=$rucup_info_etablissement[0]->offre_img;
       endif;

       $akila_text= "
       <h3 class='text-black'>Pourquoi avoir un blog pour votre entreprise</h3>
      <p>	Avoir un blog pour votre entreprise peut être bénéfique pour plusieurs raisons. Tout d'abord, cela peut augmenter votre visibilité en ligne et attirer davantage de trafic vers votre site web. </p>
         <p> En outre, cela peut aider à établir votre expertise dans votre domaine d'activité et à renforcer la confiance des clients envers votre entreprise. </p>
         <p> Enfin, un blog peut également servir de plateforme pour communiquer avec votre public cible et pour promouvoir des produits ou des services spécifiques.</p>
       ";

    }


?>