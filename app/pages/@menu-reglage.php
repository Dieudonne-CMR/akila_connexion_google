<!DOCTYPE html>
<html lang="en">

<head>
    <?php $nom_de_page = "tous les reglages "; ?>
    <?php include('includes/parts/meta.php'); ?>
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
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
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
    <?php include('includes/parts/loader.php'); ?>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <div class="page-header row">
            <div class="header-logo-wrapper col-auto">
                <div class="logo-wrapper"><a href="home"><img class="img-fluid for-light" src="assets/images/logo/logo.png" alt="" /><img class="img-fluid for-dark" src="assets/images/logo/logo_light.png" alt="" /></a></div>
            </div>
            <div class="col-4 col-xl-4 page-title">
                <h4 class="f-w-700"><?= $nom_entreprise ?></h4>
                <nav>
                    <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                        <li class="breadcrumb-item"><a href="home"> <i data-feather="home"> </i></a></li>
                        <li class="breadcrumb-item f-w-400">Accueil</li>
                        <li class="breadcrumb-item f-w-400 active">Menu reglage </li>
                    </ol>
                </nav>
            </div>
            <!-- Page Header Start-->
            <?php include('includes/parts/header.php'); ?>
            <!-- Page Header Ends                              -->
        </div>
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include('includes/parts/sidebar.php'); ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-xl-12">
                            <div class="card">
                                <?php /*<div class="card-header">
                                    <h4>les reglages de votre site </h4>
                                    <!-- <p class="f-m-light mt-1">Another override is the option to pop up a modal that covers the user viewport, available via modifier classes that are placed on a<code> .modal-dialog</code>. </p> -->
                                </div> */?>
                                <div class="card-body badge-spacing" style="justify-content: center;">
                                    <!-- <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfullscreen">Fullscreen modal</button> -->
                                    <!-- Full Screen Modal-->

                                  <?php /*  <button class="btn btn-info" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfullscreensm"><a href="@reglage" class="text-white">
                                            <?= !empty($id_core) ? "Informations sur l'entreprise" : 'Ajouter une entreprise' ?></a> </button>
                                    <!-- Full screen below sm-->

                                    <?php if (isset($id_core)) : ?>
                                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfullscreen-md"><a href="@reglagePlus" class="text-white">Blocks supplementaire </a> </button>
                                        <!-- Full screen below md-->

                                        <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfullscreen-lg"><a href="@all-reglage" class="text-white">Reglages avancés</a> </button>
                                        <!-- Full screen below lg-->

                                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfullscreen-xxl"> <a href="@partenaire" class="text-white"> Partenaire </a></button>
                                    <?php endif; ?>

                                    <?php if ($permission == 2) : ?>

                                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfullscreen-xl"><a href="paiement" class="text-white">Reception de paiements</a></button>
                                        
                                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfullscreen-xl"><a href="paiement" class="text-white">Annonce pub</a></button>
                                        <!-- Full screen below xl-->
                                    <?php endif ?>

                                    */?>


                                    <div class="col-xl-8 col-md-7">
                                        <div class="">
                                        <section class="main-upgrade">
                                            <div> <?php /*<i class="fa fa-rocket"></i> */?>
                                            <h5 class="mb-2">les reglages</h5>
                                            </div>
                                            <div class="variation-box">

                                                <?php if($permission == 2) :?>
                                                    <!-- facture -->
                                                    <?php if($matricule_entreprise==$matricule_akila_blog): ?>
                                                        
                                                        <div class="selection-box">
                                                            <a href="@createcompany">
                                                            <!-- <input id="feature1" type="checkbox"> -->
                                                                <div class="custom--mega-checkbox">
                                                                    <ul class="m-2">
                                                                    <li>Création une <br> entreprise</li>
                                                                    <li class="txt-primary"></li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    <?php else: ?>
                                                        
                                                        <div class="selection-box">
                                                            <a href="@reglage">
                                                            <!-- <input id="feature1" type="checkbox">  $supadmin == "oui"-->
                                                                <div class="custom--mega-checkbox">
                                                                    <ul class="m-2">
                                                                    <li>Informations sur <br> l'entreprise</li>
                                                                    <li class="txt-primary"></li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        
                                                        
                                                    <?php endif ?>
                                                <?php else: ?>
                                                    <div class="selection-box">
                                                        <a href="@reglage">
                                                            <!-- <input id="feature1" type="checkbox"> -->
                                                            <div class="custom--mega-checkbox">
                                                                <ul class="m-2">
                                                                <li><?= !empty($matricule_entreprise) ? "Informations sur <br> l'entreprise" : 'Ajouter une <br> entreprise' ?></li>
                                                                <li class="txt-primary"></li>
                                                                </ul>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <?php if (isset($id_core)) : ?>
                                                        <div class="selection-box">
                                                            <a href="@reglagePlus">
                                                            <!-- <input id="feature1" type="checkbox"> -->
                                                                <div class="custom--mega-checkbox ">
                                                                    <ul class="m-2">
                                                                    <li> Blocks supplementaire</li>
                                                                    <li class="txt-primary"></li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>
                                                
                                                <?php endif; ?>


                                                <?php if (isset($id_core)) : ?>
                                                    <?php if($permission == 2 || @$is_tunnel=='0'): ?>
                                                        <?php /*<div class="selection-box">
                                                            <a href="@reglagePlus">
                                                            <!-- <input id="feature1" type="checkbox"> -->
                                                                <div class="custom--mega-checkbox">
                                                                    <ul class="d-flex flex-column">
                                                                    <li> Blocks supplementaire</li>
                                                                    <li class="txt-primary"></li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div> */?>

                                                   
                                                    
                                                        <?php if (@$id_core!=8) : ?>
                                                            <div class="selection-box">
                                                                <a href="@partenaire">
                                                                <!-- <input id="feature1" type="checkbox"> -->
                                                                    <div class="custom--mega-checkbox">
                                                                        <ul class="m-2">
                                                                        <li> Partenaire</li>
                                                                        <li class="txt-primary"></li>
                                                                        </ul>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        <?php endif  ?>
                                                    <?php endif ?>
                                                    
                                                    <div class="selection-box">
                                                        <a href="@all-reglage">
                                                        <!-- <input id="feature1" type="checkbox"> -->
                                                            <div class="custom--mega-checkbox">
                                                                <ul class="m-2">
                                                                <li> Reglages avancés</li>
                                                                <li class="txt-primary"></li>
                                                                </ul>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php endif ?>
                                                
                                                    
                                                    <!-- Full screen below xl-->
                                                <?php if ($permission == 2) : ?>
                                                    <div class="selection-box">
                                                        <a href="@annonces">
                                                        <!-- <input id="feature1" type="checkbox"> -->
                                                            <div class="custom--mega-checkbox">
                                                                <ul class="m-2">
                                                                <li> Annonces <br> publicitaire </li>
                                                                <li class="txt-primary"></li>
                                                                </ul>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php endif ?>

                                            </div>
                                        </section>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <?php include('includes/parts/footer.php'); ?>
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
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/sidebar-pin.js"></script>
    <script src="assets/js/slick/slick.min.js"></script>
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/header-slick.js"></script>
    <!-- calendar js-->
    <script src="assets/js/height-equal.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
</body>

</html>