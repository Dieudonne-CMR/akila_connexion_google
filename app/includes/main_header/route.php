<?php
$tab_nom_page=['home','posts','entreprises','services','@add-post','page-vente','reservation','@reglage',
'@reglagePlus','@all-reglage','@menu-reglage','@partenaire','paiement','voir-admin','@add-admin','annonces','@createcompany','home_copy','home2','all_users']; //--------------Nom pour les pages

$tab_nom_page_processings=['ajoute_service', 'ajoute_post','modify_blog', 'ajoute_service','ajouter_page','add_reglage_general',
'add_reglage_banniere','img_accueil_apropos','form_reglage_social','reglage_logo',
'addreglagePlus','modifie_menu','domaine_service','text_banniere_blog_service','ajoute_categorie','option','__bouton','ajoute_admin',
'ajoute_annonces','ajout_company','option_global','call_action','confi_tunnel','active_propritaire','add_video_tunnel',]; //------------------nom pour fichier dans le processing
//------------deconnexion

if(@$url[0]=='deconnexion' AND !empty($url[1])): 
    $d=$url[1];
    require "path_action/deconnexion.php";
endif; 
// fin de


// var_dump($matricule_entreprise);

// var_dump($matricule_entreprise);
if(!empty($matricule_entreprise)): // nouveaux 28/06/2024

    if($url==""):
        //////////////////// les pages  page_ajouter post-details.php

        require("pages/home.php");

        elseif(in_array($url[0],$tab_nom_page)):
            require("pages/$url[0].php");

        //------------------------------ zone modify post
        elseif($url[0]=='@post-modify'AND !empty($url[1])):

            $matricule_blog=$url[1];
            $detail_blog=$Register->query("SELECT * FROM blog WHERE matricule=:matricule",array("matricule"=>$matricule_blog));
            if(empty( $detail_blog)):
                header("location: blog");
            endif;
            // var_dump($matricule_blog);
            echo "<base href='../'>";
            require("pages/@post-modify.php");

        //-----------------------------Modifier les services

        /* elseif($url[0]=='@service'AND !empty($url[1])):
            $matricule_blog=$url[1];
            echo "<base href='../'>";
            $services = $Register->query("SELECT * FROM service WHERE id=:id", array("id" => $id));
            require("pages/@service-modify.php");
        */

        elseif($url[0]=='@service'):
            if(isset($url[1])):
                $id=$url[1];
                $services = $Register->query("SELECT * FROM service WHERE id=:id", array("id" => $id));
                if(sizeof( $services)<1):
                    header("location: services");
                endif;
                echo "<base href='../'>";
            
            endif;
            require("pages/@service.php");

        //-------------------------ajouter la page

        //---10/02/2025--------
        elseif($url[0]=='datatable-commande'):
            if(@$is_shop==1 || $permission == 2):
                $commandes; //va
                // var_dump($commandes);
                require("pages/$url[0].php");

            endif;

        elseif($url[0]=='detail-shop'):
                $mat_produit = strip_tags($url[1]);
                $detail_pro=recup_produict_detail($mat_produit);
                if (!empty($detail_pro)) {
                   
                    // var_dump($commandes);
                    require("pages/$url[0].php");
                   
                };

        elseif($url[0]=='@ajoute-page'):
            if(isset($url[1])):
                $matricule_page=$url[1];
                $detail_page=$Register->query("SELECT * FROM page WHERE matricule_page=:matricule",array("matricule"=>$matricule_page));
                if(sizeof($detail_page)<1):
                    header("location: ../page-vente");
                endif;
                echo "<base href='../'>";
            
            endif;
            require("pages/@ajoute-page.php");


        //-------------------------ajouter la banniere d'annonce 24/05/2024

        elseif($url[0]=='@annonces'):
            if(isset($url[1])):
                $id=$url[1];
                $detail_annonce=$Register->query("SELECT * FROM annonce WHERE matricule=:matricule",array("matricule"=>$id));
                if(sizeof($detail_annonce)<1):
                    // header("location: ../annonces");
                endif;
                echo "<base href='../'>";
            
            endif;
            require("pages/@annonces.php");

        //---------------------------la zone pour le detail du post


        elseif($url[0]=='blog-single'AND !empty($url[1])): 
            echo "<base href='../'>";
            $matricule_blog=$url[1]; //-------permet de recuper l'id unique d'un post
            //----------------- permet de retrouver les information detailler d'un post
            $detail_blog=$Register->query("SELECT * FROM blog WHERE matricule=:matricule",array("matricule"=>$matricule_blog));
            $mat_redacteur= $detail_blog[0]->matricule_admin;
            $info_redateur = info_admin($mat_redacteur);
            
            $nombre_vu=nombre_vu($matricule_blog);
            require("pages/blog-single.php");

        //---------------------------- zone processings
        elseif(in_array($url[0], $tab_nom_page_processings)):

            require("processings/$url[0].php");

    //----------------------------------------la zone d'action 
            elseif($url[0] == 'active' AND !empty($url[1])):

                $matri_entreprise=$url[1];
                require "path_action/active.php";
            
            //== supperimer un service
            elseif($url[0] == 'supprime_service'):

                require "path_action/supprime_service.php";

            elseif($url[0] == 'active_admin' AND !empty($url[1]) AND !empty($url[2])):
                $matricule_admin=$url[1];
                $active=$url[2];
                require "path_action/active_admin.php";

            elseif($url[0] == 'active_super_admin' AND !empty($url[1]) AND !empty($url[2])):
                $matricule_admin=$url[1];
                $permition_admin=$url[2];
                require "path_action/active_super_admin.php";
    //----------------------------------------------- fin de la zone 

            else:
                require "pages/error-404.php";
    endif;

else:
    require("pages/@createcompany.php");
endif;