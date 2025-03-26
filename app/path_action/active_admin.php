<?php
// var_dump($matricule_admin, $active );
function retur($nvr){
    if($nvr==2):
        return $nvr=1;
    elseif($nvr==1):
        return $nvr=2;
    endif;
}
    $active = retur($active);

$Register->query("UPDATE admin SET active=:active WHERE matricule_admin=:mat_admin",array("active"=>$active,"mat_admin"=>$matricule_admin));
// header("location: admin_pre_inscript");
echo "<script>  window.history.back(); </script>";

