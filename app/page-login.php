<?php 
// session_start();
// // session_destroy();

// include "../@ressouce/class.db.php";
// include "../@ressouce/class.register.php";
// require "fonctions/fonction.php";
// $DB=new DB();
// $db=$DB->db;
// $Register=new Register($db);
// include "processings/form_modifie_password.php";
// $email_error=$password_error=$rror=''; 
// $email=$password="";

// include "processings/connection.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard, Akila Blog Factory, creation des page de ventes, creation des sites de blogs" />
	<meta name="author" content="Akila Blog Factory" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Akila blog : Platefome de creation des sites de blog professionnels et des pages de ventes " />
	<meta property="og:title" content="Akila blog : akila blog tableau de bord Admin " />
	<meta property="og:description" content="Akila blog :  Platefome de creation des sites de blog professionnels et des pages de ventes " />
	<!--<meta property="og:image" content="social-image.png" />-->
	<meta name="format-detection" content="telephone=no">
    <title>Akila blog Manager page de connexion </title>
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


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <style>
      .img-fluid {
    max-width: 50%;
    height: auto;
}
    </style>
  <body>
    <!-- login page start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-5"><img class="bg-img-cover bg-center" src="assets/images/3.gif" alt="looginpage"></div>
        <div class="col-xl-7 p-0">    
          <div class="login-card login-dark">
            <div>
             
              <div class="login-main"> 
                <form class="theme-form" id="connexion" method="post">
                     <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="assets/images/logo/logo_light1.png" alt="looginpage"><img class="img-fluid for-dark" src="assets/images/logo/logo_dark.png" alt="looginpage"></a></div> 
                  <h4>Informations personnelle</h4>
                  <p>Entrer votre adresse email et votre mot de passe</p>
                  <p><?= ''// erreur(@$_SESSION['a']); unset($_SESSION['a']) ?></p>
                  <?php /* if(!empty($rror)):?>
                    <div class="alert alert-light-danger" role="alert">
                      <p class="txt-danger">  <a class="alert-link txt-danger" href="javascript:void(0)"><?=@$rror; unset($rror); ?></a> </p>
                    </div>
                  <?php endif */?>
                  <div class="form-group">
                    <label class="col-form-label">Addresse Email</label>
                    <input class="form-control" name="email" type="email" required="" placeholder="Test@gmail.com">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Mot des passe</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                      <div class="show-hide"><span class="show">                         </span></div>
                    </div>
                  </div>
                  inpu
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Rappelle-toi de moi</label>
                    </div>
                    <button class="btn btn-primary btn-block w-100" name="connexion" type="submit">Connexion</button>
                  </div>
                  <?php /*
                  <h6 class="text-muted mt-4 or">Connecter avec</h6>
                  <div class="social mt-4">
                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                  </div>
                  */?>
                  <p class="mt-4 mb-0 text-center">Je n'ai pas de compte<a class="ms-2" href="login-up.php">Créer votre compte</a></p>
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

      <script>
        $(document).ready(function() {
          $('#connexion').submit(function(e) {
              e.preventDefault(); // Empêche le rechargement de la page

              var $form = $(this);
              var data = $form.serialize(); // Sérialise les données du formulaire
              var url = 'processings/connection.php'; // URL du script PHP

              // Vérification des champs non vides
              var isValid = true;
              $form.find('input, textarea, select').each(function() {
                  var $this = $(this);
                  if ($(this).val() === null || $(this).val().trim() === '') {
                      isValid = false;
                      $this.css('border', '1px solid red'); // Mettre une bordure rouge pour indiquer l'erreur
                  } else {
                      $this.css('border', ''); // Réinitialiser la bordure si le champ est valide
                  }
              });

              if (!isValid) {
                  Swal.fire({
                      icon: 'error',
                      title: 'Erreur',
                      text: 'Veuillez remplir tous les champs.',
                  });
                  return; // Empêche l'envoi de la requête AJAX si des champs sont vides
              }

              // Envoie une requête POST avec les données du formulaire
              $.post(url, data, function(response) {
                  console.log(response); // Affiche la réponse dans la console
                  if (response === 'ok') {
                      Swal.fire({
                          icon: 'success',
                          title: 'Succès',
                          text: 'Connexion réussie !',
                      }).then(() => {
                          window.location.href = 'home';
                      });
                  } 

                  if (response === '2') {
                      Swal.fire({
                        icon: 'error',
                        title: 'Erreur',
                        text: 'Vos informations sont incorrect.',
                      })
                  } 
                 
              }).fail(function(jqXHR, textStatus, errorThrown){
                  // Gère les erreurs
                  console.error('Erreur lors de la requête AJAX:', textStatus, errorThrown);
                  Swal.fire({
                      icon: 'error',
                      title: 'Erreur',
                      text: 'Une erreur est survenue. Veuillez réessayer.',
                  });
              });
          });
      });

	    </script>
    </div>
  </body>
</html>