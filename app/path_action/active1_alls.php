<?php
    //  $id = $_GET['id'];
    // $a=$_GET['a'];


    
    if(!empty($id_etabl) AND !empty($matri)){
        unset($_SESSION['skl']['id_etablissement']);
        unset($_SESSION['skl']['matricule_admin']);
        unset($_SESSION['skl']['supadmin']);
        $_SESSION['skl']['id_etablissement']=$id_etabl;
        $_SESSION['skl']['matricule_admin']=$matri;
        $_SESSION['skl']['supadmin']=$sup_admin;

        header("location: ../../../home");



    } else{
        $_SESSION['skl']['id_etablissement'] = $_SESSION['skl']['id_etablissement1'];
        $_SESSION['skl']['matricule_admin'] = $_SESSION['skl']['matricule_admin1'];
        $_SESSION['skl']['supadmin']= $_SESSION['skl']['supadmin1'];

        header("location: ../home");

    }
    

?>
