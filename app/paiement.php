<?php
session_start();
// session_destroy();

//--------------------------------blocs

    $url = "https"; 
      // Ajoutez // à l'URL.
      $url .= "://"; 

      // Ajoutez l'hôte (nom de domaine, ip) à l'URL.
      $url .= $_SERVER['HTTP_HOST']; 

      // Ajouter l'emplacement de la ressource demandée à l'URL
      $url .= $_SERVER['REQUEST_URI']; 
              
      // Afficher l'URL
      $url; 

$logo="https://platform.akila.blog/assets/images/logo/logo_light1.png";
$entreprise="Akila Web Factory";

//----------------------------------------fin

include "../@ressouce/class.db.php";
include "../@ressouce/class.register.php";
require "fonctions/fonction.php";
$DB = new DB();
$db = $DB->db;
$Register = new Register($db);
// include "processings/form_modifie_password.php";
// $email_error=$password_error=$rror=''; 
// $email=$password="";
include "processings/paiement.php";

include "processings/connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="page de paiement, Akila Blog Factory, creation des page de ventes, creation des sites de blogs" />
  <meta name="author" content="Akila Blog Factory" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Akila blog : Platefome de creation des sites de blog professionnels et des pages de ventes " />
  <meta property="og:title" content="Akila blog : akila blog tableau de bord Admin " />
  <meta property="og:description" content="Akila blog :  Platefome de creation des sites de blog professionnels et des pages de ventes " />
  <!--<meta name="format-detection" content="telephone=no">-->
 <link rel="icon" href="<?= $logo ?>" type="image/x-icon">
  <title> Page de paiement Akila manager</title>
  <base href="https://akila.blog/platform/paiement.php">
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/sweetalert2.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>
  <style>
    .img-fluid {
      max-width: 50%;
      height: auto;
    }

    span {
      color: red;
    }
      .fermer{
      display: <?= isset($tatu) ? 'none' :'block'?> ;
    
    }
  </style>
  <!-- login page start-->
  <div class="container-fluid fermer">
    <div class="row">
      <div class="col-12 p-0">
        <div class="login-card login-dark">
          <div style="display: flex;">
            <div class="login-main" style="width: 200% !important">
              <div>
                <div><a class="logo text-start" href="javascript:void(0)"><img class="img-fluid for-light" src="assets/images/logo/logo_light1.png" alt="looginpage"><img class="img-fluid for-dark" src="assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
              </div>
              <form class="theme-form m-5" target="_blank" action="" id='paiement' method="post">
                <h4>Suivez la procedure pour Effectuer votre Paiement </h4>
                <p>Remplicez le formulaire le formulaire </p>
                <div class="row my-3 ">
                  <div class="col-lg-6">
                    <label class="col-form-label">Veuillez Entrer votre nom</label>
                    <input class="form-control" type="text" name="nom" required="" placeholder="Akila">
                    <?= $eror_nom ?>
                  </div>
                  <div class="col-lg-6">
                    <label class="col-form-label">Numero de téléphone</label>
                    <input class="form-control" type="text" name="telephone" required="" placeholder="+237 999 999 999">
                    <?= $eror_telephone ?>
                  </div>
                </div>
                <div class="">
                  <label class="col-form-label">Entrer votre E-mail</label>
                  <input class="form-control" type="email" name="email" required="" placeholder="Ex: akila@gmail.com">
                  <?= $eror_email ?>
                </div>
                <div class="row my-3 ">
                  <div class="col-lg-6">
                    <label class="col-form-label">Choisissez la devise</label>
                    <select name="devise" class="form-select" size="1">
                      <?php foreach ($devise as $value) : ?>
                        <option value="<?= $value->code_iso ?>"><?= $value->code_iso.' - '. $value->label_fr ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>

                  <div class=" col-lg-6">
                    <label class="col-form-label">Montant à payer</label>
                    <input class="form-control" type="number" name="montant" required="" placeholder="100000 $">
                    <span><?= $eror_montant ?></span>
                  </div>
                </div>

                <div class="form-group mb-0">
                  <button class="btn btn-primary btn-block w-100 mb-2 " target="_blank" name="suit_paye" type="submit">Payer maintenant</button>
                  <p>Un souci lors du paiement ? <a href="https://kloo.me/paiement-akila" target="_blank" rel="noopener noreferrer">Veuillez nous contacter !</a></p>
                </div>
            </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- latest jquery-->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap js-->
  <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  <script src="assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- scrollbar js-->
  <!-- Sidebar jquery-->
  <script src="assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <!-- calendar js-->
  <script src="assets/js/sweet-alert/sweetalert.min.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="assets/js/script.js"></script>
  <!-- Plugin used-->
  <script>
    $(document).on('click', '#error', function(e) {
      if ($('.email').val() == '' || $('.pwd').val() == '') {
        swal(
          "Error!", "Sorry, looks like some data are not filled, please try again !", "error"
        )
      }
    });

    // $(document).ready(function(){
    // $("#paiement").submit(function(e){
    //   e.preventDefault();
    //   var form= $(this);
    //   var url=('processings/paiement.php')
    //   data= $form.serialize();
    //   $.post($url, data, function (da) {
    // 	// console.log(da); 
    // 	  alert(da);
    //   })

    // })
    // })
  </script>
  </div>
</body>

</html>