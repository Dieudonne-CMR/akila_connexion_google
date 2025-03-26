<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <title>Mofi - Premium Admin Template</title>
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
        <div class="logo-wrapper"><a href="javascript:void(0)"><img class="img-fluid for-light" src="assets/images/logo/logo.png" alt="" /><img class="img-fluid for-dark" src="assets/images/logo/logo_light.png" alt="" /></a></div>
      </div>
      <div class="col-4 col-xl-4 page-title">
        <h4 class="f-w-700"><?=$nom_entreprise ?></h4>
        <nav>
          <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
            <li class="breadcrumb-item"><a href="javascript:void(0)"> <i data-feather="home"> </i></a></li>
            <!-- <li class="breadcrumb-item f-w-400">Ui Kits</li> -->
            <li class="breadcrumb-item f-w-400 active">Les entreprises</li>
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
        <?php if ($_SESSION['skl']['supadmin'] == 'oui') : ?>  
          <?php if (isset($permalien)) : ?>
          <div class="card">
            <div class="card-header">
              <h4>Revenir à la vue GLobale</h4>
              <span>Revenir à la vue GLobale</span>
            </div>
            <div class="card-body common-flex">
              <a href="active/<?= $matricule_akila_blog ?> ">
                <button class="btn btn-pill btn-success btn-air-success btn-lg" type="button" title="btn btn-pill btn-primary btn-air-primary">Revenir à la vue GLobale</button>
              </a>
              
            </div>
          </div>  
          <?php endif ?>
          <?php if (sizeof($entreprises_user_api) > 0) :?>
            <div class="page">
              <!-- Container-fluid starts-->
              <div class="container-fluid dashboard-2">
                <div class="row">
                  <div class="col-xl-4 col-xl-12 col-md-4 proorder-md-1">
                    <div class="card">
                      <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                          <h4> Vous avez ajouté (<?= sizeof($entreprises_user_api) ?>) entreprises qui utilisent API</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body project-status-col">
                        <div class="row">
                        <?Php foreach ($entreprises_user_api as $value) : ?>
                          <div class="col-4 ">
                          <a href="active/<?= $value->matricule_entreprise ?>">
                            <div class="btn-light1-primary b-r-10">
                              <div class="upcoming-box">
                                <div class="upcoming-icon bg-primary"> <img src="<?= $chin_logo_a . $value->logo ?>" style="width: 5rem; border-radius: 50%;" alt=""></div>
                                <h6><?= $value->nom_entreprise ?></h6>
                                <?php /*<p>Vues: <?= nbr_visiteurs($value->matricule_entreprise) ?></p> */?>
                              </div>
                            </div>
                          </a>
                          </div>
                        <?php endforeach ?>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>

          <?php if (sizeof($tous_entreprise) > 0) :?>
            <div class="page">
              <!-- Container-fluid starts-->
              <div class="container-fluid dashboard-2">
                <div class="row">
                  <div class="col-xl-4 col-xl-12 col-md-4 proorder-md-1">
                    <div class="card">
                      <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                          <h4> Vous avez ajouté (<?= sizeof($tous_entreprise) ?>) entreprise</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body project-status-col">
                        <div class="row">
                        <?Php foreach ($tous_entreprise as $value) : ?>
                          <div class="col-4 ">
                          <a href="active/<?= $value->matricule_entreprise ?>">
                            <div class="btn-light1-primary b-r-10">
                              <div class="upcoming-box">
                                <div class="upcoming-icon bg-primary"> <img src="<?= $chin_logo_a . $value->logo ?>" style="width: 5rem; border-radius: 50%;" alt=""></div>
                                <h6><?= $value->nom_entreprise ?></h6>
                                <p>Vues: <?= nbr_visiteurs($value->matricule_entreprise) ?></p>
                              </div>
                            </div>
                          </a>
                          </div>
                        <?php endforeach ?>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>

          <?php if (sizeof($entreprises_user_page ) > 0) :?>
            <div class="page">
              <!-- Container-fluid starts-->
              <div class="container-fluid dashboard-2">
                <div class="row">
                  <div class="col-xl-4 col-xl-12 col-md-4 proorder-md-1">
                    <div class="card">
                      <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                          <h4> (<?= sizeof($entreprises_user_page ) ?>) Nouvelles  entreprises utilisant les pages de vente</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body project-status-col">
                        <div class="row">
                        <?Php foreach ($entreprises_user_page  as $value) : ?>
                          <div class="col-4 ">
                          <a href="active/<?= $value->matricule_entreprise ?>">
                            <div class="btn-light1-primary b-r-10">
                              <div class="upcoming-box">
                                <div class="upcoming-icon bg-primary"> <img src="<?= $chin_logo_a . $value->logo ?>" style="width: 5rem; border-radius: 50%;" alt=""></div>
                                <h6><?= $value->nom_entreprise ?></h6>
                                <p>Vues: <?= nbr_visiteurs($value->matricule_entreprise) ?></p>
                              </div>
                            </div>
                          </a>
                          </div>
                        <?php endforeach ?>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>

          <?php if ($permission != 2) : ?>
            <div class="page">
              <!-- Container-fluid starts-->
              <div class="container-fluid dashboard-2">
                <div class="row">
                  <div class="col-xl-4 col-xl-12 col-md-4 proorder-md-1">
                    <div class="card">
                      <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                          <h4> (<?= sizeof($entreprises_user_page ) ?>) Nouvelles  entreprises utilisant les pages de vente</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body project-status-col">
                        <div class="row">
                        <?Php foreach ($entreprises_user_page  as $value) : ?>
                          <div class="col-4 ">
                          <a href="active/<?= $value->matricule_entreprise ?>">
                            <div class="btn-light1-primary b-r-10">
                              <div class="upcoming-box">
                                <div class="upcoming-icon bg-primary"> <img src="<?= $chin_logo_a . $value->logo ?>" style="width: 5rem; border-radius: 50%;" alt=""></div>
                                <h6><?= $value->nom_entreprise ?></h6>
                                <p>Vues: <?= nbr_visiteurs($value->matricule_entreprise) ?></p>
                              </div>
                            </div>
                          </a>
                          </div>
                        <?php endforeach ?>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>

        <?php endif ?>
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
  <script src="assets/js/tooltip-init.js"></script>
  <script src="assets/js/modalpage/validation-modal.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/theme-customizer/customizer.js"></script>
  <!-- Plugin used-->
</body>

</html>