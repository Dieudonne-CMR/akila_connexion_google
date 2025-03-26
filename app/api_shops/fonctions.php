<?php
function court_text($text,$nombre_caracteres){
    $text= strip_tags($text);
    if(strlen($text)>22){ 
        
        $text = substr($text,0,$nombre_caracteres)." ...";
    } 
    return $text;
}

function url(){
    $url='';

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on'):
        $url = "https"; 
        else:
        $url = "http"; 
        endif;
        
        // var_dump( $url);

        // Ajoutez // à l'URL.
        $url .= "://"; 

        // Ajoutez l'hôte (nom de domaine, ip) à l'URL.
        $url .= $_SERVER['HTTP_HOST']; 

        // Ajouter l'emplacement de la ressource demandée à l'URL
        $url .= $_SERVER['REQUEST_URI']; 
                
        // Afficher l'URL
        // echo $url; 

        return $url;
    
}