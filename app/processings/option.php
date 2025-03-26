<?php
if (isset($_POST['submt_op'])):
    $btn_page404=$btn_what='non';
    $artcle='0';
    $page_vente='non';
    $onsite='0';

    if(isset($_POST['b_whatsapp'])){
        $btn_what= $_POST['b_whatsapp'];
    }
    if(isset($_POST['page404'])){
        $btn_page404 = $_POST['page404'];
    }
    // var_dump($btn_what,  $btn_page404);

    if(isset($_POST['onsite'])){
        $onsite = $_POST['onsite'];
    }
    if(isset($_POST['page_vente'])){
        $page_vente = $_POST['page_vente'];
    }
    if(isset($_POST['artcle'])){
        $artcle = $_POST['artcle'];
    }
    // var_dump($_POST,'  vvv'. $artcle);
    

    $Register->query("UPDATE website 
        SET 
        bouton_whatsapp=:btn_what,
        page404=:page404,
        onsite=:onsite,
        articles=:articles,
        page_vente=:page_vente                                       
        WHERE matricule_entreprise=:id_etabli",
        array(
            "btn_what" => $btn_what,
            "page404" => $btn_page404,
            "id_etabli" => $matricule_entreprise,
            'onsite'=>$onsite,
            'articles'=>$artcle,
            'page_vente'=>$page_vente
            // "region"=>$regions,
        )
    );

    $erreur = "<h4 class='text-success'>Les infomations de l'entreprise ont été modifiées</h4>";
    $_SESSION['message'] = $erreur;
    echo "<script>
            window.history.back()
        </script>";
    // header("location: reglage");
endif;