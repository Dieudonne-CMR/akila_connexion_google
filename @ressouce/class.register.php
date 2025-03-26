<?php
class Register
{
    public $db;
   

    public function __construct($db)
    {
        $this->db = $db;
        // $this ->matricule_entreprise=$_SESSION['skl']['matricule_entreprise'];
    }

    // fonction qui permet inserrer  les utilisateurs
    public function register($var)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            switch ($var) {
                case 'chef':
                    $nomc = $prenomc = $tel = $mailc = $ecolec = $postec = $passw = '';

                    extract($_POST);
                    if (isset($inscrire)) {
                        $erreur = '';
                        // $id='chef';
                        $nomc = $this->input($nom);
                        $prenomc = $this->input($prenom);
                        $tel = $this->input($telephone);
                        $mailc = $this->input($mail);
                        $ecolec = $this->input($ecole);
                        $postec = $this->input($poste);
                        $passw = $this->input($password);
                        $mat = $this->rand();

                        if ($this->virifie_user('responsable_etat', $nomc, $mailc) < 1) {

                            $this->query(
                                'INSERT INTO responsable_etat(
                                    nom,prenom,telephone,email,etablissement,poste,password,matricule) VALUE 
                            (:nom,:prenom,:telephone,:email,:etabli,:poste,:pass,:matricule)',
                                array(

                                    "nom" => $nomc,
                                    "prenom" => $prenomc,
                                    "telephone" => $tel,
                                    "email" => $mailc,
                                    "etabli" => $ecolec,
                                    "poste" => $postec,
                                    "pass" => $passw,
                                    "matricule" => $mat,
                                )
                            );
                            $_SESSION['user']=[];
                                $_SESSION['user']=[
                                    "verie"=>"chef",
                                    "nom" => $nomc,
                                    "prenom" => $prenomc,
                                    "telephone" => $tel,
                                    "email" => $mailc,
                                ];

                            $erreur = 'ok';
                        } else {
                            $erreur = "<h3 class='text-danger'>Cette personne existe deja </h3>";
                        }
                    }

                    break;

                case 'parent':
                    $nomc = $prenomc = $tel = $mailc = $nb_enfant = $nb_eleve = $passw = '';

                    extract($_POST);
                    if (isset($inscrire)) {
                        // $id='parent';
                        $nomc = $this->input($nom);
                        $prenomc = $this->input($prenom);
                        $tel = $this->input($telephone);
                        $mailc = $this->input($mail);
                        $nb_enfant = $this->input($num_a);
                        $nb_eleve = $this->input($num_e);
                        $passw = $this->input($password);
                        $mat = $this->rand();

                        if ($this->virifie_user('parent', $nomc, $mailc) < 1) {
                            $this->query(
                                'INSERT INTO parent(nom,prenom,telephone,email,nb_enfants,nb_eleve,password,matricule) VALUE 
                            (:nom,:prenom,:telephone,:email,:enfant,:eleve,:pass,:matricule)',
                                array(

                                    "nom" => $nomc,
                                    "prenom" => $prenomc,
                                    "telephone" => $tel,
                                    "email" => $mailc,
                                    "enfant" => $nb_enfant,
                                    "eleve" => $nb_eleve,
                                    "pass" => $passw,
                                    "matricule" => $mat,
                                )
                            );

                                
                                $_SESSION['user']=[];
                                $_SESSION['user']=[
                                    "verie"=>"eleve",
                                    "nom" => $nomc,
                                    "prenom" => $prenomc,
                                    "telephone" => $tel,
                                   
                                ];
                            $erreur = 'ok';
                        } else {
                            $erreur = "<h3 class='text-danger'>Cette personne existe deja </h3>";
                        }
                    }

                    break;

                case 'eleve':
                    $nomc = $prenomc = $tel = $mailc = $ecolec = $classec = $passw = '';

                    extract($_POST);
                    if (isset($inscrire)) {
                        // $id='eleve';
                        $nomc = $this->input($nom);
                        $prenomc = $this->input($prenom);
                        $tel = $this->input($telephone);
                        $mailc = $this->input($mail);
                        $ecolec = $this->input($ecole);
                        $classec = $this->input($classe);
                        $passw = $this->input($password);
                        $mat = $this->rand();

                        if ($this->virifie_user('eleves', $nomc, $mailc) < 1) {
                            $this->query(
                                'INSERT INTO eleves(nom,prenom,telephone,etablissement,classe,password,matricule) VALUE 
                                (:nom,:prenom,:telephone,:etablis,:classe,:pass,:matricule)',
                                array(

                                    "nom" => $nomc,
                                    "prenom" => $prenomc,
                                    "telephone" => $tel,
                                    // "email" => $mailc,
                                    "etablis" => $ecolec,
                                    "classe" => $classec,
                                    "pass" => $passw,
                                    "matricule" => $mat,
                                )
                            );
                            $_SESSION['user']=[];
                                $_SESSION['user']=[
                                    "verie"=>"eleve",
                                    "nom" => $nomc,
                                    "prenom" => $prenomc,
                                    "telephone" => $tel,
                                   
                                ];
                            $erreur = 'ok';
                        } else {
                            $erreur = "<h3 class ='text-danger'>Cette personne existe deja </h3>";
                        }
                    }

                    break;


                default:
                    # code...
                    break;
            }

            return $erreur;
        }
    }


    // fonction pour faire les requete dans la base de donnee
    public function query($ql, $data = array())
    {
        $rep = $this->db->prepare($ql);
        $rep->execute($data);

        return $rep->fetchAll(PDO::FETCH_OBJ);
    }
    // fonction pour virivier le données entrer dans les formulaires
    public function input($data)
    {
        $data = nl2br($data);
        $data = htmlspecialchars($data);
        $data = trim($data);
        return $data;
    }

    //fonction fontion pour vrifier si un utilisateur exist dans la base de donne ($non_table= nom de latable, $parr_2=nom, $parr_3 = mail)
    public function virifie_user($non_table, $nom, $mail)
    {
        $verifi = $this->query("SELECT * FROM $non_table WHERE nom =:nomv AND email=:email", array("nomv" => $nom, "email" => $mail));
        return  count($verifi);
    }

    public function rand()
    {
        $mat = rand(1, 100000) . date('ymd');
        return $mat;
    }

    //verifier les information d'utlisater dans la base de donne
    public function virifieLogin($non_table, $tele_mail, $passwo)
    {
        $rep = $this->query("SELECT * FROM $non_table WHERE telephone=:tele_mail || email=:tele_mail AND password=:pass LIMIT 1", array( "tele_mail" => $tele_mail, "pass" => $passwo));
        return $rep;
    }

    public function enregister_abonne()
    {
        // extract($_POST);
        $nom = $this->input($_POST['nom']);
        $tel = $this->input($_POST['telephone']);
        // var_dump($_POST);
        $erreur = "";
        $nom = $tel = "";
        if (isset($_POST['nom']) & !empty($_POST['nom'])) {
            if (isset($_POST['telephone']) & !empty($_POST['telephone'])) {
                $nom =  trim(htmlspecialchars(strip_tags($_POST["nom"])));
                $tel = trim($_POST['telephone']);
                $matricule_entreprise = trim(htmlspecialchars(strip_tags($_POST['matricule_entreprise'])));

                $verifi = $this->query("SELECT * FROM abonnement WHERE telephone=:tel", array("tel" => $tel));
                if (count($verifi) < 1) {
                    $this->query("INSERT INTO abonnement(nom,telephone,matricule_entreprise) VALUE (:nom,:telephone,:matricule_entreprise)", array("nom" => $nom, "telephone" => $tel, "matricule_entreprise" => $matricule_entreprise));
                    $erreur = "ok";
                } else {
                    $erreur = "v";
                }
            } else {
                $erreur = "t";
            }
        } else {
            $erreur = "n";
        }
        return $erreur;
    }

    public function enregister_comment()
    {
        $erreur = "";
        if (!empty($_POST['id_blog']) & !empty($_POST['comment']) & !empty($_POST['matricule_entreprise'])) {
            $coment = strip_tags(htmlspecialchars($_POST['comment']));
            $id = $_POST['id_blog'];
            $matricule_entreprise = $_POST['matricule_entreprise'];
            if (isset($_SESSION['user']['nom']) & !empty($_SESSION['user']['nom'])) {
                $nom = $_SESSION['user']['nom'];
                // var_dump($_POST);
                $this->query(
                    "INSERT INTO commentaire_blog(nom,content,id_blog,matricule_entreprise)
                VALUE(:nom,:content,:id_blog,:matricule_entreprise)",
                    array('nom' => $nom, 'content' => $coment, 'id_blog' => $id, 'matricule_entreprise' => $matricule_entreprise)
                );

                $erreur = "ok";
            } else {
                $erreur = "v";
            }
        } else {
            $erreur = "c";
        }
        // $recup = $this->query("SELECT * FROM commentaire_blog WHERE id_blog=:id AND matricule_entreprise:matricule_entreprise",array("id"=>$id,"matricule_entreprise"=>$matricule_entreprise));
        return $erreur;
    }
    //fonction pour inserer les admin venant du site
    public function enroll()
    {
        $errer = "";
        if(isset($_POST['submit1'])){
        if (isset($_POST['nom']) & !empty($_POST['nom'])) {
            extract($_POST);

            $nom = trim(strip_tags(ucfirst($this->input($nom))));
            $prenom = trim(strip_tags(ucfirst($this->input($prenom))));
            $email = trim(strip_tags($this->input($email)));
            $ville = trim(strip_tags($this->input($ville)));
            // $etablissement = trim(strip_tags(ucfirst($this->input($etablissement))));
            $password = trim(strip_tags($this->input($password)));
            $post = trim(strip_tags($this->input($post)));
            $pays = trim(strip_tags($this->input($pays)));
            $telephone = trim(strip_tags($this->input($tel)));
            $matricule_admin= $this->rand();

            $matricule_entreprise='';
            $etablissement = explode('/',$etablissement);
            // var_dump($etablissement);

            // $matricule = $this->rand();
            $matricule = $etablissement[0];
            if(isset($etablissement[1])){
                $matricule_entreprise = $etablissement[1];
            }
            // var_dump($matricule, $matricule_entreprise);
            if(!empty($matricule_entreprise)){
                if (!empty($prenom)) {
                    if (!empty($email)) {
                        if (!empty($ville)) {
                            if (!empty($etablissement)) {
                                if (!empty($post)) {
                                    if (!empty($telephone)) {
                                        if (!empty($password)) {
                                            if (!empty($pays)) {
                                                // $verifi_ecole=$this->recupe_info_table($matricule_entreprise, 'admin');
                                                // var_dump( $verifi_ecole);
                                                // if(count($verifi_ecole)==0){
                                                    $revifi = $this->query("SELECT * FROM admin WHERE email=:email AND password=:password ", array("email" => $email, "password" => $password));
                                                    if (count($revifi) == 0) {
                                                        $this->query("INSERT INTO admin (nom, prenom,telephone,email,matricule,ville, pays, poste,password,matricule_entreprise,matricule_admin)
                                                        VALUE (:nom,:prenom,:telephone,:email,:matricule,:ville,:pays, :post,:password,:matricule_entreprise,:matricule_admin)", array(
                                                            "nom" => $nom, "prenom" => $prenom,"telephone" => $telephone, "email" => $email,"matricule" => $matricule,"ville" => $ville, "pays" => $pays,
                                                            "post" => $post, "password" => $password, "matricule_entreprise" => $matricule_entreprise, "matricule_admin"=>$matricule_admin
                                                        ));
                                                        
                                                        // $errer = "<h4 class='text-success'> l'inscription a reuici</h4> ";
                                                        $errer = 'ok';
                                                        
                                                    } else {
                                                        $errer = "<h4 class='text-danger'>Cette utilisateur existe déjà </h4> ";
                                                    }
                                                // }else{
                                                //     $errer = "<h4 class='text-danger'>Cette Etablissement existe déjà </h4> ";
                                                // }

                                            } else {
                                                $errer = "<h4 class='text-danger'>Veillez entrer le pays</h4> ";
                                            }
                                        } else {
                                            $errer = "<h4 class='text-danger'>Veillez entrer mot de passe</h4> ";
                                        }
                                    } else {
                                        $errer = "<h4 class='text-danger'>Veillez entrer votre telephone</h4> ";
                                    }
                                } else {
                                    $errer = "<h4 class='text-danger'>Veillez entrer votre post</h4> ";
                                }
                            } else {
                                $errer = "<h4 class='text-danger'>Veillez entrer votre Etablissemne</h4> ";
                            }
                        } else {
                            $errer = "<h4 class='text-danger'>Veillez entrer votre ville </h4> ";
                        }
                    } else {
                        $errer = "<h4 class='text-danger'>Veillez entrer votre Email</h4> ";
                    }
                } else {
                    $errer = "<h4 class='text-danger'>Veillez entrer votre prenom</h4> ";
                }
            }else{
                $errer = "<h4 class='text-danger'>Veillez entrer le nom de votre ecole</h4> ";
            }
        } else {
            $errer = "<h4 class='text-danger'>Veillez entrer votre nom</h4> ";
        }
    }
        return $errer;
    }



    //le parties pour gerer le tableau de bord


    public function ajouter_ecole()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $rrornom = "";
            $nom = $mat = "";
            if (isset($_POST['sub_ecole'])) {
                extract($_POST);
                $nom = ucfirst($this->input($ecole));
                $mat = $this->rand();
                if (isset($nom) && !empty($nom)) {

                    $this->query("INSERT INTO etablissement(nom, matricule) VALUES (:nom, :mat)", array('nom' => $nom, 'mat' => $mat));
                    'ok';
                } else {
                }
            }
        }
    }

    public function ajouter_chef_etablissemnt()
    {
        $rrer = [];
        $erronom = $erronom = $erroemail = $errotel = $erroecole = $erroville = $erropost = $erropass = "";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nomc = $prenomc = $emailc = $telc = $ecolec = $villec = $postc = $passc = "";
            extract($_POST);
            $nomc = $this->input($nom);
            $prenomc = $this->input($prenom);
            $emailc = $this->input($email);
            $telc = $this->input($tel);
            $ecolec = $this->input($ecole);
            $villec =  $this->input($ville);
            $postc = $this->input($post);
            $passc = $this->input($password);
            if (isset($submit)) :
                if (isset($nomc) && !empty($nomc)) {
                    if (isset($prenomc) && !empty($prenomc)) {
                        if (isset($emailc) && !empty($emailc)) {
                            if (isset($telc) && !empty($telc)) {
                                if (isset($villec) && !empty($villec)) {
                                    if (isset($postc) && !empty($postc)) {
                                        if (isset($passc) && !empty($passc)) {
                                            if (isset($ecolec) && !empty($ecolec)) {
                                                $verifi = $this->query("SELECT * FROM admin WHERE email=:mail LIMIT 1", array("mail" => $emailc));
                                                if (count($verifi) == 0) {
                                                    $this->query(
                                                        "INSERT INTO admin(nom, prenom, telephone, email, matricule, ville, poste,password) VALUES
                                                                                        (:nom, :prenom, :tel,:mail,:mat,:ville,:poste,:pass )",
                                                        array(
                                                            'nom' => $nomc,
                                                            'prenom' => $prenomc,
                                                            'tel' => $telc,
                                                            'mail' => $emailc,
                                                            'mat' => $ecolec,
                                                            'ville' => $villec,
                                                            'poste' => $postc,
                                                            'pass' => $passc
                                                        )
                                                    );
                                                    unset($nomc, $prenomc, $telc, $emailc, $ecolec, $villec, $postc, $passc);
                                                    return $erreur = ['ok' => 'les Informations du responsable ont bien été en register'];
                                                } else {
                                                    $erroecole = "<span class= 'text-danger'>Cette Admin existe déjà</span>";
                                                    return $erreur = ['ok' => $erroecole];
                                                }
                                            } else {

                                                $erroecole = "Choisir l'école";
                                                return $erreur = ['ecole' => $erroecole];
                                            }
                                        } else {
                                            $erropass = "Entrer le mot de passe ";
                                            return $erreur = ['pass' => $erropass];
                                        }
                                    } else {
                                        $erropost = "le poste Occupé ne doit pas être vide ne doit pas être vide";
                                        return $erreur = ['post' => $erropost];
                                    }
                                } else {
                                    $erroville = "le ville ne doit pas être vide";
                                    return $erreur = ['ville' => $erroville];
                                }
                            } else {
                                $errotel = "le tel ne doit pas être vide";
                                return $erreur = ['tel' => $errotel];
                            }
                        } else {
                            $erroemail = "le email ne doit pas être vide";
                            return $erreur = ['email' => $erroecole];
                        }
                    } else {
                        $erroprenom = "le prenom ne doit pas être vide";

                        return $erreur = ['prenom' => $erroprenom];
                    }
                } else {
                    $erronom = "le nom ne doit pas être vide";
                    return $erreur = ['nom' => $erronom];
                }

            endif;
        }
    }
    public function modifi_chef_etablissement()
    {
        extract($_POST);
        if (isset($sudmifi)) {
            $nom = $this->input($nom);
            $prenom = $this->input($prenom);
            $tel = $this->input($tel);
            $email = $this->input($email);
            $ville = $this->input($ville);
            $post = $this->input($post);
            if (!empty($nom)) {
                if (!empty($prenom)) {
                    if (!empty($tel)) {
                        if (!empty($email)) {
                            if (!empty($ville)) {
                                if (!empty($post)) {
                                    $this->query("UPDATE admin SET nom=:nom,prenom=:prenom,telephone=:tel,email=:mail,ville=:ville,poste=:poste WHERE matricule= $matricule limit 1", array(
                                        'nom' => $nom,
                                        "prenom" => $prenom,
                                        "tel" => $tel,
                                        "mail" => $email,
                                        "ville" => $ville,
                                        "poste" => $post
                                    ));
                                    echo "<h4 class='text-success'>Les modifications ont été effectuer </h4>";
                                } else {
                                    echo "<h4 class='text-danger'>Veiller entrer votre post</h4>";
                                }
                            } else {
                                echo "<h4 class='text-danger'>Veiller entrer votre ville </h4>";
                            }
                        } else {
                            echo "<h4 class='text-danger'>Veiller entrer votre adress email</h4>";
                        }
                    } else {
                        echo "<h4 class='text-danger'>Veiller entrer votre telephone</h4>";
                    }
                } else {
                    echo "<h4 class='text-danger'>Veiller entrer votre prenom</h4>";
                }
            } else {
                echo "<h4 class='text-danger'>Veiller entrer votre nom</h4>";
            }
        }
    }

    public function modifier_photo_profile($profile)
    {
        $matricule_admin = $_SESSION['skl']['matricule_admin'];
        if (isset($_POST['subfile'])) {
            // var_dump($_FILES);
            $nom_file = $_FILES['file']['name'];
            $tmp_file = $_FILES['file']['tmp_name'];
            $tail_file = $_FILES['file']['size'];
        
            $this->inser_image1($nom_file, $tmp_file, $tail_file, $matricule_admin, $profile, 'profile');
        }
        $rep = $this->query("SELECT profile FROM admin WHERE matricule_admin=:matricule", array('matricule' => $matricule_admin));
        return $rep;
    }

    //recuper toutes les informations d'une table
    public function recupe_info_table($matricule_entreprise, $nom_table)
    {

        $nom_e = $this->query("SELECT * FROM  $nom_table  WHERE matricule_entreprise=:mat ORDER BY ID DESC", array('mat' => $matricule_entreprise));
        return $nom_e;
    }
    //recuper toutes les informations d'une table
    public function recupe_info_table_where_id($id, $nom_table)
    {

        $nom_e = $this->query("SELECT * FROM  $nom_table  WHERE id=:id ORDER BY ID DESC", array('id' => $id));
        return $nom_e;
    }

    ////recuper toutes les informations d'une table
    public function recupe_info_table_limite($matricule_entreprise, $nom_table, $nombre)
    {

        $nom_e = $this->query("SELECT * FROM  $nom_table  WHERE matricule_entreprise=:mat ORDER BY ID DESC LIMIT $nombre", array('mat' => $matricule_entreprise));
        return $nom_e;
    }

    public function ajoute_map()
    {
        $errer = '';
        $matricule = $_SESSION['skl']['mat_ecole'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['submap'])) {
                $map = $_POST['map'];
                // var_dump($map);
                if (isset($map)) {
                    $this->query("UPDATE info_etablissement SET map='$map' WHERE matricule=$matricule");
                    $errer = "<h4 class='text-success'>La localisation as été modifié</h4>";
                } else {
                    $errer = "<h4 class='text-danger'>La localisation n'as pas peut être modifié</h4>";
                }
            }
        }
        return $errer;
    }

       
    // fonction pour inserer les images dans le base de donn'
    public function inser_image1($nom_file, $chemin_tempo_file, $taille_file, $matricule_admin, $_chemin_uplaud_fille, $nom_champ)
    {
        $erreur = '';
        $extension = strtolower(pathinfo($nom_file, PATHINFO_EXTENSION));

        $extensions = array("png", "jpg", "jpeg", "gif");

        if (isset($nom_file)) {
            if (in_array($extension, $extensions)) {
                if ($taille_file < 10000000) {
                    if (move_uploaded_file($chemin_tempo_file, $_chemin_uplaud_fille . $nom_file)) {
                        // var_dump($matricule_entreprise);
                        $this->query(
                            "UPDATE admin SET $nom_champ=:ban WHERE matricule_admin = :matricule",
                            array(
                                "ban" => $nom_file,
                                "matricule"=>$matricule_admin,
                            )
                        );
                        $erreur = "L'Etablissement a été modifier";
                    } else {
                        $erreur = " desolé l'image n'a pas été en voyer";
                    }
                } else {
                    $erreur = "le chifier est trop grand";
                }
            } else {
                $erreur = "l'extension du fichier doit être du type png, jpg, jpeg ,gif";
            }
        }

        return $erreur;
    }


    // fonction pour inserer les evenement

    public function substr($str)
    {
        if (strlen($str) < 150) {
            return $str;
        } else {
            $str1 = substr($str, 0, 150) . ' ...';
        }
    }

    public function substrf(string $str, int $nbr)
    {
        $stre = "";
        if (strlen($str) <= $nbr) {
            $stre = $str;
        } else {
            $stre = substr($str, 0, $nbr) . ' ...';
        }
        return $stre;
    }
}