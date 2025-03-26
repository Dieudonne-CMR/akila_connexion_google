<?php 
$var=2;
 function Redirection1(){
  if($_SESSION['skl']['active']!=2) :
    return header("location: auth-login.php");
  endif;
 }
?>