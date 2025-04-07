<?php 
session_start();

$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
?>
<!doctype html>
<html class="no-js " lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Vérifiez votre email pour compléter votre inscription à Yemak Wellness">

    <title>:: Yemak Wellness :: Vérifiez votre email</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/authentication.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
    <style>
        .check-email-container {
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
            padding: 40px 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
        }
        .email-icon {
            font-size: 64px;
            color: #28a745;
            margin-bottom: 20px;
        }
        .email-address {
            font-weight: 600;
            color: #28a745;
        }
        .info-text {
            color: #555;
            margin: 25px 0;
            font-size: 16px;
            line-height: 1.6;
        }
        .progress-container {
            margin: 25px auto;
            max-width: 300px;
        }
        .action-buttons {
            margin-top: 30px;
        }
        .action-buttons a {
            margin: 0 5px;
        }
    </style>
</head>

<body class="theme-cyan authentication sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <div class="container">        
        <div class="navbar-translate n_logo">
            <a class="navbar-brand" href="javascript:void(0);" title="" target="_blank">Yemak Wellness</a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://yemak-wellness.com/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://yemak-wellness.com/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Twitter" href="javascript:void(0);" target="_blank">
                        <i class="zmdi zmdi-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Like us on Facebook" href="https://www.facebook.com/yemaksantebeaute/" target="_blank">
                        <i class="zmdi zmdi-facebook"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Instagram" href="https://www.instagram.com/yemaksantebeaute/" target="_blank">                        
                        <i class="zmdi zmdi-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link btn btn-white btn-round" href="login.php">Connexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url(../assets/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="check-email-container">
                <div class="email-icon">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <h2>Vérifiez votre email</h2>
                <?php if (!empty($email)): ?>
                    <p>Un lien de confirmation a été envoyé à <br><span class="email-address"><?php echo $email; ?></span></p>
                <?php else: ?>
                    <p>Un lien de confirmation a été envoyé à votre adresse email.</p>
                <?php endif; ?>
                
                <p class="info-text">
                    Pour finaliser votre inscription, veuillez cliquer sur le lien que nous venons de vous envoyer par email.
                    <br>Si vous ne trouvez pas l'email, vérifiez votre dossier spam.
                </p>
                
                <div class="progress-container">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                
                <div class="action-buttons">
                    <a href="login.php" class="btn btn-round btn-default">Retour à la connexion</a>
                    <a href="register.php" class="btn btn-round btn-success">Nouvel essai</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="https://yemak-wellness.com/contact" target="_blank">Contactez-nous</a></li>
                    <li><a href="https://yemak-wellness.com/" target="_blank">À Propos de nous</a></li>
                    <li><a href="javascript:void(0);">FAQ</a></li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
                <span>Tous droits reservé par <a href="https://goldenrock.io"  style="color :rgb(255, 174, 34)" target="_blank">GOLDEN ROCK SARL</a></span>
            </div>
        </div>
    </footer>
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script>
   $(".navbar-toggler").on('click',function() {
    $("html").toggleClass("nav-open");
});
</script>
</body>
</html> 