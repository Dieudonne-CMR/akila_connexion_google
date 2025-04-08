<?php
session_start();
var_dump($_SESSION['verification_email']);
var_dump($_SESSION['verification_action']);
// Vérifier si l'email est présent en session
/* if (!isset($_SESSION['verification_email'])) {
    header('Location: page-login.php');
    exit;
} */
if(isset($_SESSION["shl"])){
    header('Location: index.php');
    exit;
}

$email = $_SESSION['verification_email'];
$action = $_SESSION['verification_action'] ?? 'login';
$title = ($action == 'register') ? "Confirmation d'inscription" : "Connexion sécurisée";
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard, Akila manager" />
    <meta name="author" content="Akila Blog Factory" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Akila blog : Platefome de creation des sites de blog professionnels et des pages de ventes " />
    <meta property="og:title" content="Akila blog : akila blog tableau de bord Admin " />
    <meta property="og:description" content="Akila blog :  Platefome de creation des sites de blog professionnels et des pages de ventes " />
    <meta name="format-detection" content="telephone=no">
    <title>Akila blog - <?php echo $title; ?></title>
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
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- Loader css -->
    <link rel="stylesheet" type="text/css" href="assets/css/loader.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12 p-0">    
          <div class="login-card login-dark">
            <div>
              <div class="login-main"> 
                <div>
                  <a class="logo" href="javascript:void(0)"><img class="img-fluid for-light" src="assets/images/logo/logo_light1.png" alt="looginpage"><img class="img-fluid for-dark" src="assets/images/logo/logo_dark.png" alt="looginpage"></a>
                </div>
                <div class="text-center">
                 
                  <h3><?php echo $title; ?></h3>
                  <p class="mt-4">Un lien de vérification vient d'être envoyé à l'adresse:</p>
                  <p class="email-display p-3 my-3" style="background-color: #f8f9fa; border-radius: 8px; font-weight: 500;"><?php echo htmlspecialchars($email); ?></p>
                  <p>Veuillez consulter votre boîte de réception et cliquer sur le lien pour <?php echo ($action == 'register') ? 'finaliser votre inscription' : 'vous connecter'; ?>.</p>
                  <p class="text-muted mt-4"><small>Le lien est valable pendant 24 heures.</small></p>
                  
                  <div class="mt-4 mb-3">
                    <p class="mb-0">Vous n'avez pas reçu l'email?</p>
                    <a  class="btn btn-primary btn-sm mt-3" id="resendLink">Renvoyer le lien</a>
                  </div>
                  
                  <div class="divider my-4">
                    <span class="or-text">ou</span>
                  </div>
                  
                  <p class="mt-4 mb-0">Retournez à la 
                    <?php if ($action == 'register'): ?>
                      <a class="ms-2" href="login-up.php">page d'inscription</a>
                    <?php else: ?>
                      <a class="ms-2" href="page-login.php">page de connexion</a>
                    <?php endif; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Loader HTML -->
      <div class="loader-overlay" id="loader">
        <div class="loader">
          <div class="loader-spinner"></div>
          <div class="loader-text">Envoi en cours...</div>
        </div>
      </div>

      <style>
        .divider {
          position: relative;
          text-align: center;
        }
        .divider:before {
          content: '';
          position: absolute;
          top: 50%;
          left: 0;
          right: 0;
          height: 1px;
          background-color: #e0e0e0;
        }
        .or-text {
          position: relative;
          display: inline-block;
          padding: 0 10px;
          background-color: #fff;
          color: #999;
        }
      </style>
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
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="assets/js/script.js"></script>
      
      
         <!-- Bootstrap js-->
         <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
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

          $('#resendLink').click(function(e) {
            e.preventDefault();
            
            // Afficher le loader avant l'envoi de la requête
            showLoader();
            
            $.ajax({
              url: 'processings/resend-verification.php',
              type: 'POST',
              dataType: 'json',
              success: function(response) {
                // Cacher le loader une fois la réponse reçue
                hideLoader();
                
                if (response.success) {
                    alert('Un nouveau lien a été envoyé à votre adresse email');
                      
                } else {
                  Swal.fire({
                      icon: 'error',
                      title: 'Erreur',
                      text: response.message || "Une erreur est survenue lors de l'envoi du lien.",
                  });
                }
              },
              error: function(response) {
                // Cacher le loader en cas d'erreur
                hideLoader();
                
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: "Une erreur est survenue lors de l'envoi du lien.",
                });
              }
            });
          });
        });
      </script>
    </div>
  </body>
</html> 