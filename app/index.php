<?php 
require_once("includes/main_header/requets.php");

$url="";
if(isset($_GET['url'])):
    $url=explode('/',$_GET['url']);
endif;

//-- 10/02/2025

    if(@$is_shop==1 || $permission==2):
        // if(isset($mat_shop) && ($is_shop==1 || $permission==2)):
        require_once("api_shops/cle_api_shop.php");
    endif;

require "includes/main_header/route.php";