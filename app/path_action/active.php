<?php
    
    // permet de permuter d'une entreprise à une autre et de revenir à la vue globale
    if(!empty($matri_entreprise) AND $matri_entreprise!=$matricule_akila_blog){
        unset($_SESSION['matricule_entrepris']);
        unset($_SESSION['matricule_entreprise_gere_admin']);
        $_SESSION['matricule_entrepris']=$matri_entreprise;
        $_SESSION['matricule_entreprise_gere_admin']=$matri_entreprise;
        
        header("location: ../home");
        
    } else{
        unset($_SESSION['matricule_entrepris']);
        unset($_SESSION['matricule_entreprise_gere_admin']);
        
        header("location: ../home");

    }
    

?>
