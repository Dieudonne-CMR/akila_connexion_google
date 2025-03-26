<?php 
    session_start();

    // if(!isset($_SESSION['mat_member_dps'])):
    //     header("location:login");
    //     exit();
    // endif;

   

    include('includes/connexion_bdd.php');
    include('functions/functions_argent.php');
    include('functions/functions_academy.php');

    check_deconnexion_active($_SESSION['mat_member_dps'], $bdd);

    $annee = '2023-2024';
?>