<?php 
session_start();
include('../@ressouce/class.db.php');
include('fonctions/auth-google/google-client.php');
include('fonctions/auth-google/GoogleAuth.php') ;

// // session_destroy();

// include "../@ressouce/class.db.php";
// include "../@ressouce/class.register.php";
// require "fonctions/fonction.php";
// $DB=new DB();
// $db=$DB->db;
// $Register=new Register($db);
// // include "processings/form_modifie_password.php";
// $email_error=$password_error=$rror=''; 
// $email=$password=$data="";

// include "processings/connection.php";

// // var_dump($_POST['login']['password']);
// Définir la source d'authentification comme étant la page de register
$_SESSION['auth_source'] = 'register';

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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                <form class="theme-form needs-validation" action="post" id="incription">
                  <h4>Créez votre compte</h4>  
                  <p>Entrez Nos information pour la création de votre compte</p>
                  <p><?= ''//erreur($data) ?></p>
                  
                  <div class="form-group">
                    <div class="row g-2">
                      <div class="col-6">
                        <label class="col-form-label pt-0" for="nom">Votre nom</label>
                        <input class="form-control" type="text" id="nom" name="nom" placeholder="Entrez votre nom">
                      </div>
                      <div class="col-6">
                      <label class="col-form-label pt-0" for="nom">Votre prenom<label>
                        <input class="form-control" type="text" id="dnom" name="prenom" placeholder="Entrez Prénom">
                      </div> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="telephone">Votre numero de téléphone Whatsapp</label>
                    <input class="form-control" name="telephone" type="number" id="telephone" placeholder="2376999999">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="email">Votre adresse Email</label>
                    <input  class="form-control" name="email" type="email" id="email" placeholder="Test@gmail.com">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="pw">Mot de passe </label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" id="pw" name="password" placeholder="*********">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="pw">Comfirmer le mot de passe</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" id="pw" name="passconfirm" placeholder="">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>
                  <div class="mt-3 text-center">
                            <small class="text-muted">Un lien d'activation sera envoyé à votre adresse email</small>
                        </div>       
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox" required name="check2">
                      <label class="text-muted" for="checkbox1">J'accepte les<a class="ms-2" href="#">Conditions d'utilisation</a></label>
                    </div>
                
                   
                  </div>
                  <?php /*
                  <h6 class="text-muted mt-4 or">Inscrire avec </h6>
                  <div class="social mt-4">
                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                  </div> */?>
                   <button id="inscription" class="btn btn-primary btn-block w-100"  type="submit">Créez votre compte</button>
                </form>
              
                <p class="mt-4 mb-0">Vous avez un compte ?<a class="ms-2" href="page-login.php">Se connecter</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
         <!-- Loader HTML -->
         <div class="loader-overlay" id="loader">
        <div class="loader">
          <div class="loader-spinner"></div>
          <div class="loader-text">Chargement en cours...</div>
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
            // Fonction pour afficher/cacher le loader
            function showLoader() {
            $('#loader').addClass('active');
          }
          
          function hideLoader() {
            $('#loader').removeClass('active');
          }
          $('#incription').submit(function(e) {
            
              e.preventDefault(); // Empêche le rechargement de la page

              var $form = $(this);
              console.log($form)	
              var data = $form.serialize(); // Sérialise les données du formulaire
              var url = 'processings/inscription.php'; // URL du script PHP

              // Vérification des champs non vides
              var isValid = true;
              $form.find('input').each(function() {
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
                // Afficher le loader avant l'envoi de la requête
                showLoader();

              // Envoie une requête POST avec les données du formulaire
              $.post(url, data, function(response) {
                console.log(response)
                 // Cacher le loader une fois la réponse reçue
                 hideLoader();

           
                  if (response === 'ok') {
                  
                      Swal.fire({
                          icon: 'success',
                          title: 'Succès',
                          text: 'Un email de confirmation vous a été envoyé.',
                      }).then(() => {
                          window.location.href = 'verification-email.php';
                          return;
                      });
                  } 
                  if(response === '3'){
                    
                    Swal.fire({
                          icon: 'error',
                          title: 'Une erreur',
                          text: 'Les mots de pass ne sont pas identique !',
                      }).then(() => {
                          // window.location.href = '@add-post';
                      });
                  }

                  if(response === '1'){
                    
                    Swal.fire({
                          icon: 'error',
                          title: 'Ce compte existe',
                          text: 'Veuillez Vous connecter !',
                      }).then(() => {
                          window.location.href = 'page-login.php';
                      });
                  }
                  if(response === '2'){
                  
                    Swal.fire({
                          icon: 'error',
                          title: 'Une erreur',
                          text: 'Veuillez remplir tous les champs!',
                      }).then(() => {
                          // window.location.href = '@add-post';
                      });
                  }
                  if(response === '4'){
                    
                    Swal.fire({
                          icon: 'error',
                          title: 'Une erreur',
                          text: 'Une erreur est survenue lors de l\'envoi du lien.',
                      }).then(() => {
                          // window.location.href = '@add-post';
                      });
                  }
              }).fail(function(jqXHR, textStatus, errorThrown){
                   // Cacher le loader en cas d'erreur
                   hideLoader();
                    /* jqXHR.responseJSON.errors.forEach(function(error) {
                    console.log(error.message);
                    }); */
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