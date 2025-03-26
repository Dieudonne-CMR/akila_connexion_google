<?php
class DB{
    private $host= "localhost";
    private $dbname="akila_bd";
    private $password= "";
    private $name="root";
    public $db;

    public function __construct($host=null,$database=null,$password=null,$name=null)
    {
       if($host!=null){
        $this->host=$host;
        $this->dbname=$database;
        $this->password=$password;
        $this->name=$name;
       }

        try{
            $this->db =new PDO('mysql:host='.$this->host.'; dbname='.$this->dbname,$this->name,$this->password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8', PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
            // die('ok');
        }catch(PDOException $e){
            die("<h1 class='text-danger'>desole nous avons pas pu trouver la base de donnee</h1>");
        }
    }
    public function prenPage(){
    
    //On recupère le nom de la page dans laquelle nous sommes
    $url = $_SERVER['PHP_SELF'];//ceci renvoit le chemin de la page depuis la racine du site ex: /manaschool/index.php

    $reg = '#^(.+[\\\/])*([^\\\/]+)$#';
    $nom_page = preg_replace($reg, '$2', $url);//ceci renvoit uniquement le nom du fichier ex index.php

    return $nom_page;
    }
    public function query($ql, $data = array())
    {
        $rep = $this->db->prepare($ql);
        $rep->execute($data);

        return $rep->fetchAll(PDO::FETCH_OBJ);
    }
}; 
?>