<?php 
session_start();
// session_destroy();

include "../@ressouce/class.db.php";
include "../@ressouce/class.register.php";
require "fonctions/fonction.php";
$DB=new DB();
$db=$DB->db;
$Register=new Register($db);
// include "processings/form_modifie_password.php";
$email_error=$password_error=$rror=''; 
$email=$password=$data="";

include "processings/connection.php";

// var_dump($_POST['login']['password']);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="keywords" content="admin, dashboard, Akila manager, s" />
	<meta name="author" content="Akila Blog Factory" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Akila blog : Platefome de creation des sites de blog professionnels et des pages de ventes " />
	<meta property="og:title" content="Akila blog : akila blog tableau de bord Admin " />
	<meta property="og:description" content="Akila blog :  Platefome de creation des sites de blog professionnels et des pages de ventes " />
	<meta property="og:image" content="social-image.png" />
	<meta name="format-detection" content="telephone=no">
    <title>Akila blog Manager la page de connexion  sur dans la platforme</title>
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
    </style>
    <!-- login page start-->
    <div class="container-fluid p-0"> 
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card login-dark">
            <div>
              <div class="login-main"> 
                <div>
                  <a class="logo" href="javascript:void(0)"><img class="img-fluid for-light" src="assets/images/logo/logo_light1.png" alt="looginpage"><img class="img-fluid for-dark" src="assets/images/logo/logo_dark.png" alt="looginpage"></a>
                </div>
                <form class="theme-form" action="" method="post">
                  <h4>Créez votre compte</h4>  
                  <p>Entrez Nos information pour la création de votre compte</p>
                  <p><?= erreur($data) ?></p>
                  
                  <div class="form-group">
                    <div class="row g-2">
                      <div class="col-6">
                        <label class="col-form-label pt-0" for="nom">Votre nom</label>
                        <input class="form-control" type="text" id="nom" name="nom" value="<?= @$_POST['nom'] ?>" required="" placeholder="Entrez votre nom">
                      </div>
                      <div class="col-6">
                      <label class="col-form-label pt-0" for="nom">Votre prenom</label>
                        <input class="form-control" type="text" id="dnom" name="prenom" value="<?= @$_POST['prenom'] ?>" required="" placeholder="Entrez Prénom">
                      </div> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="telephone">Votre numero de téléphone Whatsapp</label>
                    <input class="form-control" name="telephone" type="number" value="<?= @$_POST['telephone'] ?>" id="telephone" placeholder="2376999999">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="email">Votre adresse Email</label>
                    <input class="form-control" name="email" type="email" value="<?= @$_POST['email'] ?>" id="email" placeholder="Test@gmail.com">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="pw">Mot de passe </label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" id="pw" value="<?= @$_POST['login']['password'] ?>" name="login[password]" required="" placeholder="*********">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="pw">Comfirmer le mot de passe</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" id="pw" name="loginCom[passconfirm]"required="" placeholder="">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox" required name="check2">
                      <label class="text-muted" for="checkbox1">J'accepte les<a class="ms-2" href="#">Conditions d'utilisation</a></label>
                    </div>
                    <button class="btn btn-primary btn-block w-100"  name="enregistre" type="submit">Créez votre compte</button>
                  </div>
                  <?php /*
                  <h6 class="text-muted mt-4 or">Inscrire avec </h6>
                  <div class="social mt-4">
                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                  </div> */?>
                  <p class="mt-4 mb-0">Vous avez un compte ?<a class="ms-2" href="page-login.php">Se connecter</a></p>
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
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="assets/js/script.js"></script>
      <!-- Plugin used-->
      <Script>
		$(document).ready(function(){
			$("#register").submit(function(e){
				e.preventDefault();
				var $form= $(this);
				dat= $form.serialize();
				$url=("processings/connection.php");
				// console.log(dat);
				$.post($url, dat, function (da) {
					// console.log(da); 
					alert(da);
					
					if(da == '1') {
						location.href = 'home'; 
					}
					if (da == '2') {
						$(".classcoment").empty().append("<spans class='text-white bg-danger p-2'>Veuillez remplir tous les champs.</span>");
					}
					if (da == '3') {
						$(".classcoment").empty().append("<spans class='text-white bg-danger p-2'>les mots de passe ne sont pas identiques.</span>");
					}
					if (da == '0') {
						$(".classcoment").empty().append("<spans class='text-white bg-danger p-2'>Cet utilisateur existe déjà .</span>");
					}
        //   $(".form-control").val('');

        })
			})
		})
	</Script>
    </div>
  </body>
</html>