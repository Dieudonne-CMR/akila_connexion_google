<?php
// var_dump($matricule_admin, $active );
function sup_admin($nvr){
    if($nvr=='non'):
        return $nvr='oui';
    elseif($nvr=='oui'):
        return $nvr='non';
    endif;
}
    $active = sup_admin($permition_admin);

$Register->query("UPDATE admin SET sup_admin=:active WHERE matricule_admin=:mat_admin",array("active"=>$active,"mat_admin"=>$matricule_admin));
// header("location: admin_pre_inscript");
echo "<script>  window.history.back(); </script>";