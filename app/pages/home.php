<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $nom_de_page = "Page d'acceuil"; ?>
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
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-picker.css">
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
          <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="assets/images/logo/logo.png" alt=""/><img class="img-fluid for-dark" src="assets/images/logo/logo_light.png" alt=""/></a></div>
        </div>
        <div class="col-4 col-xl-4 page-title">
          <h4 class="f-w-700"> <?= $nom_entreprise ?></h4>
          <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
              <li class="breadcrumb-item"><a href="home"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">General</li>
              <li class="breadcrumb-item f-w-400 active">Accueil</li>
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
          <style>
              .center-top-absolute{
                position:absolute; 
                right:5%; 
                top:50%; 
                transform:translate(0,-50%);
                width:50px;
              }
            </style>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-3 box-col-30">
                <div class="md-sidebar job-sidebar"><a class="btn btn-primary        md-sidebar-toggle" href="javascript:void(0)">Menu</a>
                  <div class="md-sidebar-aside custom-scrollbar">
                    <div class="file-sidebar">
                      <div class="card">
                        <div class="card-body">
                        <?php if (@$active == 2) :?>
                          <ul>
                            <li>   
                              <a href="home">
                                <div class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Accueil </div>
                              </a> 
                            </li>
                            <?php  if($permission == 2 ): ?>
                            <li>   
                              <a href="home2">
                                <div class="btn btn-primary"><i class="fa fa-modx"></i> Accueil Actu </div>
                              </a> 
                            </li>
                            <?php endif ?>

                            <?php if(is_bool(@$dispo_artcle)=='true'): ?>
                            <li>
                              <a href="@add-post">
                                <div class="btn btn-light"><i data-feather="edit-3"></i>Ecrire un article   </div>
                              </a>
                            </li>
                            <li>
                              <a href="posts">
                                <div class="btn btn-light"><i data-feather="check-square"></i>Liste des articles </div>
                              </a>
                            </li>
                            <?php endif ?>
                            <?php /*
                            <li>
                              <a href="">
                                <div class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>Ajouter categorie    </div>
                              </a>
                            </li> */?>
                            <li>
                              <a href="@service">
                                <div class="btn btn-light"><i data-feather="edit"></i> Ajouter un service</div>
                              </a>
                            </li>

                            <li>
                              <a href="services">
                                <div class="btn btn-light"><i data-feather="file-text"></i>Liste de services </div>
                              </a>
                            </li>
                            <?php if(is_bool(@$is_tunnel)=='true' || @$page_vente=='oui' || @$permission == 2 ): ?>
                            <li>
                              <a href="@ajoute-page"></a>
                              <div class="btn btn-light"><i data-feather="file-plus"></i>Ajouter une offre </div>
                            </li>
                            <li>
                              <a href="page-vente"></a>
                              <div class="btn btn-light"><i data-feather="file-minus"></i>Liste des offres </div>
                            </li>
                            <li>
                              <a href="reservation">
                                <div class="btn btn-light"><i data-feather="paperclip"></i>Reservations </div>

                              </a>
                            </li>
                            <?php endif ?>
                           
                            <li>
                              <a href="@menu-reglage">
                                <div class="btn btn-light"><i class="fa fa-spin fa-gear"></i> Reglages</div>
                              </a>
                            </li>
                          </ul>
                        <?php endif; ?>
                          <?php /*
                          <hr>
                          <ul>
                            <li>
                              <div class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>Storage   </div>
                              <div class="m-t-15">
                                <div class="progress sm-progress-bar mb-3">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="f-w-500">25 GB of 100 GB used</h6> 
                              </div>
                            </li>
                          </ul>
                          <hr>
                          <ul>
                            <li>
                              <div class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>Pricing plan</div>
                            </li>
                            <li> </li>
                            <div class="pricing-plan">
                              <h6>Trial Version </h6>
                              <h5>FREE</h5>
                              <p>100 GB Space</p>
                              <div class="btn btn-outline-primary btn-xs">Selected</div><img class="bg-img" src="assets/images/dashboard/folder.png" alt="">
                            </div>
                          </ul> */?>
                        
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-9 col-md-12 box-col-70">
                <div class="file-content">
                  <div class="">

                    <div class="card-body file-manager">
                      <div class="row">
                          <!-- Blck pour les visiteurs dans jour dans le site -->
                          <?php if(isset($id_core) AND !empty($id_core)) :?>
                          <div class="col-xl-6 col-sm-6"> 
                            <div class="card social-widget bg-warning">
                              <div class="card-body ">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-2">
                                    <div class="social-icons"><i class="fa fa-arrow-up text-success"></i></div><span class="f-w-600">Visiteurs du jour (site web) </span>
                                  </div><span class="font-success f-12 d-xxl-block d-xl-none"></span>
                                </div>
                                <div class="social-content">
                                  <div> 
                                    <h5 class="mb-1 text-white">
                                      <?=  empty($visite_jour[0]->nbres) ? 0 : $visite_jour[0]->nbres; ?> Visiteurs
                                    </h5>
                                    <img class="center-top-absolute" src="https://cdn-icons-png.flaticon.com/128/5425/5425833.png" alt="">
                                  </div>
                                  
                                </div> 
                              </div>
                            </div>
                          </div>

                          <div class="col-xl-6 col-sm-6"> 
                            <div class="card social-widget bg-warning">
                              <div class="card-body ">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-2">
                                    <div class="social-icons"><i class="fa fa-arrow-up text-success"></i></div><span class="f-w-600">Visiteurs au Total (site web) </span>
                                  </div><span class="font-success f-12 d-xxl-block d-xl-none"></span>
                                </div>
                                <div class="social-content">
                                  <div> 
                                    <h5 class="mb-1 text-white">
                                    <?= empty($visiteurs_mayennes[0]->nbres)? 0 :$visiteurs_mayennes[0]->nbres ?> Visiteurs
                                    </h5>
                                    <img class="center-top-absolute" src="https://cdn-icons-png.flaticon.com/128/5425/5425833.png" alt="">
                                  </div>
                                  
                                </div> 
                              </div>
                            </div>
                          </div>

                          <?php endif; ?>
                          <!-- fin du block  -->

                          <?php if(@$dispo_artcle==1): ?>
                            <?php if(@$permission == 2): ?>
                              <!-- Blck pour les visiteurs dans jour dans Magazine -->
                              <div class="col-xl-6 col-sm-6"> 
                                <div class="card social-widget">
                                  <div class="card-body ">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center gap-2">
                                        <div class="social-icons"><i class="fa fa-arrow-up text-success"></i></div><span class="f-w-600">Visiteurs Aujourd'hui (Magazine)</span>
                                      </div><span class="font-success f-12 d-xxl-block d-xl-none"> +27.4%</span>
                                    </div>
                                    <div class="social-content">
                                      <div> 
                                        <h5 class="mb-1">
                                        <?= !empty($recup_visite_magasin) ? $recup_visite_magasin : '0' ?></h5> <span>Visiteurs</span>
                                        <i class="fa fa-spin fa-spinner center-top-absolute"></i>
                                      </div>
                                      
                                    </div> 
                                  </div>
                                </div>
                              </div>

                              <!-- Blck pour Visiteurs au Total dans Magazine -->
                              <div class="col-xl-6 col-sm-6"> 
                                <div class="card social-widget">
                                  <div class="card-body ">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center gap-2">
                                        <div class="social-icons"><i class="icofont icofont-people text-success"></i></div><span class="f-w-600 ">Visiteurs au Total (Magazine)</span>
                                      </div>
                                      <span class="font-success f-12 d-xxl-block d-xl-none"> +227.4%</span>
                                    </div>
                                    <div class="social-content">
                                      <div> 
                                        <h5 class="mb-1"><?= $recup_visite_magasin_all ?></h5><span>Visiteurs</span>
                                        <i class="fa fa-spin fa-circle-o-notch center-top-absolute"></i>
                                      </div>
                                      
                                  
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <?php endif ?>

                            <div class="col-xl-6 col-sm-6"> 
                              <div class="card">
                                <div class="card-body bg-secondary rounded">
                                  <div class="d-flex gap-2 align-items-end"> 
                                    <div class="flex-grow-1">
                                      <h2 class="text-white">  <?=sizeof($blogs) ?></h2>
                                      <h4 class="mt-1 f-w-600 text-white">Nombre d'articles </h4>
                                      <!-- <div class="d-flex student-arrow text-truncate">
                                        <p class="mb-0 up-arrow bg-light-success"><i class="icon-arrow-up font-success"></i></p><span class="f-w-500 font-success">+ 12.01%</span>than last 8 Month
                                      </div> -->
                                    </div>
                                    <div class="flex-shrink-0" style="">
                                      <img class="center-top-absolute" src="https://cdn-icons-png.flaticon.com/128/5425/5425833.png" alt="">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-xl-6 col-sm-6"> 
                              <div class="card">
                                <div class="card-body bg-primary rounded">
                                  <div class="d-flex gap-2 align-items-end"> 
                                    <div class="flex-grow-1">
                                      <h2 class="text-white"><?= sizeof($service) ?></h2>
                                      <h4 class="mt-1 f-w-600 text-white">Nombre de Services </h4>
                                      <!-- <div class="d-flex student-arrow text-truncate">
                                        <p class="mb-0 up-arrow bg-light-success"><i class="icon-arrow-up font-success"></i></p><span class="f-w-500 font-success">+ 12.01%</span>than last 8 Month
                                      </div> -->
                                    </div>
                                    <div class="flex-shrink-0">
                                      <img class="center-top-absolute" src="https://cdn-icons-png.flaticon.com/128/8782/8782873.png" alt="">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                          <?php endif; ?>


                          <?php /*
                          <!-- clientail debut -->
                          <div class="col-xl-6 col-sm-6"> 
                            <div class="card social-widget bg-success">
                              <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-2">
                                    <div class="social-icons"><i class="fa fa-book text-success"></i></div><span class="f-w-600">Nombre d'articles</span>
                                  </div><span class="font-success f-12 d-xxl-block d-xl-none">+27.4%</span>
                                </div>
                                <div class="social-content">
                                  <div> 
                                    <h5 class="mb-1 text-white">0</h5><span class="f-w-600 ">Articles</span>
                                  </div>
                                 
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-xl-6 col-sm-6"> 
                            <div class="card social-widget bg-secondary">
                              <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-2">
                                    <div class="social-icons"><i class="fa fa-support text-success"></i></div><span class="f-w-600">Pages de ventes</span>
                                  </div><span class="font-success f-12 d-xxl-block d-xl-none">+22.9%</span>
                                </div>
                                <div class="social-content">
                                  <div> 
                                    <h5 class="mb-1  text-white">0</h5><span class="f-light text-white">Pages</span>
                                  </div>
                               
                                </div>
                              </div>
                            </div>
                          </div> 
                        <!-- clientail --> 

                        */?>
                        
                     
                          
                      <?php if (@$page_vente == 'oui' || $permission == 2) : ?>
                        <div class="col-xl-6 col-sm-6"> 
                          <div class="card">
                            <div class="card-body bg-success rounded">
                              <div class="d-flex gap-2 align-items-end"> 
                                <div class="flex-grow-1">
                                  <h2 class="text-white"> <?= sizeof($page_site) ?></h2>
                                  <h4 class="mt-1 f-w-600 text-white">Pages d'offres</h4>
                                  <!-- <div class="d-flex student-arrow text-truncate">
                                    <p class="mb-0 up-arrow bg-light-success"><i class="icon-arrow-up font-success"></i></p><span class="f-w-500 font-success">+ 12.01%</span>than last 8 Month
                                  </div> -->
                                </div>
                                <div class="flex-shrink-0">
                                  <img class="center-top-absolute" src="https://cdn-icons-png.flaticon.com/128/1379/1379505.png" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php endif; ?>

                        <?php if (@$is_tunnel=='1' || @$page_vente == 'oui' || $permission == 2) : ?>
                        
                          <div class="col-xl-6 col-sm-6"> 
                          <div class="card">
                            <a href="reservation">
                              <div class="card-body bg-danger rounded">
                                <div class="d-flex gap-2 align-items-end"> 
                                  <div class="flex-grow-1">
                                    <h2 class="text-white"> <?= sizeof($reservation_service) ;  ?></h2>
                                    <h4 class="mt-1 f-w-600 text-white">Les reservations</h4>
                                    <!-- <div class="d-flex student-arrow text-truncate">
                                      <p class="mb-0 up-arrow bg-light-success"><i class="icon-arrow-up font-success"></i></p><span class="f-w-500 font-success">+ 12.01%</span>than last 8 Month
                                    </div> -->
                                  </div>
                                  <div class="flex-shrink-0">
                                    <img class="center-top-absolute" src="https://cdn-icons-png.flaticon.com/128/1379/1379505.png" alt="">
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="col-xl-6 col-sm-6"> 
                          <div class="card">
                            <a href="paiement">
                              <div class="card-body bg-warning rounded">
                                <div class="d-flex gap-2 align-items-end"> 
                                  <div class="flex-grow-1">
                                    <h2 class="text-white"> <?= sizeof($paiement_data) ;  ?></h2>
                                    <h4 class="mt-1 f-w-600 text-white">  Initialisation du paiement </h4>
                                    <!-- <div class="d-flex student-arrow text-truncate">
                                      <p class="mb-0 up-arrow bg-light-success"><i class="icon-arrow-up font-success"></i></p><span class="f-w-500 font-success">+ 12.01%</span>than last 8 Month
                                    </div> -->
                                  </div>
                                  <div class="flex-shrink-0">
                                    <img class="center-top-absolute" src="https://cdn-icons-png.flaticon.com/128/4108/4108042.png" alt="">
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                        
                      <?php endif ?>
                        <!-- <hr> -->
                        
                          
                          <!-- blog b -->

                          <?php /*<div class="col-xl-12 col-md-12 proorder-md-1">  
                            <div class="row"> 

                              <div class="col-xl-6 col-sm-6"> 
                                <div class="card">
                                  <div class="card-body student">
                                    <div class="d-flex gap-2 align-items-end"> 
                                      <div class="flex-grow-1">
                                        <h2> <?=sizeof($blogs) ?></h2>
                                        <p class="mb-0 text-truncate"> Nombre d'articles</p>
                                        <div class="d-flex student-arrow text-truncate">
                                          <p class="mb-0 up-arrow bg-light-danger"><i class="icon-arrow-down font-danger"></i></p><span class="f-w-500 font-danger"></span> <?php /* Sur tous les sites 
                                        </div>
                                      </div>
                                      <div class="flex-shrink-0"><!-- https://feathericons.dev/?search=twitch&iconset=feather -->
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M21 2H3v16h5v4l4-4h5l4-4V2zm-10 9V7m5 4V7" />
                                      </svg>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-xl-6 col-sm-6"> 
                                  <div class="card">
                                    <div class="card-body student-2">
                                      <div class="d-flex gap-2 align-items-end"> 
                                        <div class="flex-grow-1">
                                        <h2><?= sizeof($service) ?></h2>
                                        <p class="mb-0 text-truncate">Nombre de Services </p>
                                        <div class="d-flex student-arrow text-truncate">
                                          <p class="mb-0 up-arrow bg-light-success"><i class="icon-arrow-up font-success"></i></p><span class="f-w-500 font-success"></span>  Sur tous les sites 
                                        </div>
                                      </div>
                                      <div class="flex-shrink-0"><img src="assets/images/dashboard-4/icon/teacher.png" alt=""></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            
                              <div class="col-xl-6 col-sm-6"> 
                                <div class="card">
                                  <div class="card-body student-3">
                                    <div class="d-flex gap-2 align-items-end"> 
                                      <div class="flex-grow-1">
                                        <h2>123</h2>
                                        <p class="mb-0 text-truncate">Services</p>
                                        <div class="d-flex student-arrow text-truncate">
                                          <p class="mb-0 up-arrow bg-light-success"><i class="icon-arrow-up font-success"></i></p><span class="f-w-500 font-success">+ 12.01%</span>than last 8 Month
                                        </div>
                                      </div>
                                      <div class="flex-shrink-0"><img src="assets/images/dashboard-4/icon/calendar.png" alt=""></div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-xl-6 col-sm-6"> 
                                <div class="card">
                                  <div class="card-body student-4">
                                    <div class="d-flex gap-2 align-items-end"> 
                                      <div class="flex-grow-1">
                                        <h2>36</h2>
                                        <p class="mb-0 text-truncate"> Reservation</p>
                                        <div class="d-flex student-arrow text-truncate">
                                          <p class="mb-0 up-arrow bg-light-danger"><i class="icon-arrow-down font-danger"></i></p><span class="f-w-500 font-danger">- 15.02%</span>than last 5 Month
                                        </div>
                                      </div>
                                      <a href="reservation">
                                        <div class="flex-shrink-0"><img src="assets/images/dashboard-4/icon/invoice.png" alt=""></div>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div> */?>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            
          </div>
        </div>
          <!-- Container-fluid Ends-->
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
    <script src="assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="assets/js/chart/apex-chart/stock-prices.js"></script>
    <!-- calendar js-->
    <script src="assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="assets/js/general-widget.js"></script>
    <script src="assets/js/height-equal.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>
</html>