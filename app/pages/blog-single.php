<!DOCTYPE html>
<html lang="en">
  <head>
  <?php $nom_de_page = "detail du post"; ?>
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
          <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="assets/images/logo/logo.png" alt=""/><img class="img-fluid for-dark" src="assets/images/logo/logo_light.png" alt=""/></a></div>
        </div>
        <div class="col-4 col-xl-4 page-title">
          <h4 class="f-w-700"><?= $nom_entreprise ?></h4>
          <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
              <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">Blog</li>
              <li class="breadcrumb-item f-w-400 active">Blog detail</li>
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
              <div class="col-sm-12">
                <div class="card">  
                  <div class="card-body"> 
                    <div class="blog-single">
                      <div class="blog-box blog-details"><img class="img-fluid w-100" src="<?= !empty(@$detail_blog[0]->photo) ? $chem_blog .  @$detail_blog[0]->photo : 'assets/images/blog/blog-single.jpg' ?>" alt="blog-main">
                        <div class="blog-details">
                          <ul class="blog-social">
                            <li><?= @$detail_blog[0]->date ?></li>
                            <li><i class="icofont icofont-user"></i><?= @$info_redateur[0]->nom ?> <span> <?= @$info_redateur[0]->prenom?> </span></li>
                            <li><i class="fa fa-eye"></i><?= (empty(@$nombre_vu[0]->nbre) ? 0 : @$nombre_vu[0]->nbre) ?><span>Vues</span></li>
                            <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                          </ul>
                          <h4 class="pt-3"><?= @$detail_blog[0]->titre ?></h4>
                          <div class="single-blog-content-top">
                            <p class="mt-0"><?=  @$detail_blog[0]->content; ?></p>
                          </div>
                        </div>
                      </div>
                      <?php /*
                      <section class="comment-box">
                        <h4>Comment</h4>
                        <hr>
                        <ul>
                          <li>
                            <div class="d-flex align-self-center"><img class="align-self-center" src="assets/images/blog/comment.jpg" alt="Generic placeholder image">
                              <div class="flex-grow-1">
                                <div class="row">
                                  <div class="col-md-4">
                                    <h6 class="mt-0">Jolio Mark<span> ( Designer )</span></h6>
                                  </div>
                                  <div class="col-md-8">
                                    <ul class="comment-social float-start float-md-end">
                                      <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                      <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                    </ul>
                                  </div>
                                </div>
                                <p>The best thing is location and drive through the forest. The resort is 35km from Ramnagar. The gardens are well kept and maintained. Its a good place for relaxation away from the city noise. The staff is very friendly and overall we had a really good & fun time, thanks to staff member - Bhairav, Rajat, Gunanand, Lokesh & everyone else. And also we went for an adventurous night safari and saw barking deers, tuskar elephant.</p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <ul>
                              <li>
                                <div class="d-flex"><img class="align-self-center" src="assets/images/blog/9.jpg" alt="Generic placeholder image">
                                  <div class="flex-grow-1">
                                    <div class="row">
                                      <div class="col-xl-12">
                                        <h6 class="mt-0">Mark Jolio <span> ( Designer )</span></h6>
                                      </div>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <div class="d-flex"><img class="align-self-center" src="assets/images/blog/4.jpg" alt="Generic placeholder image">
                              <div class="flex-grow-1">
                                <div class="row">
                                  <div class="col-md-4">
                                    <h6 class="mt-0">Jhon Deo<span> ( Designer )</span></h6>
                                  </div>
                                  <div class="col-md-8">
                                    <ul class="comment-social float-start float-md-end">
                                      <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                      <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                    </ul>
                                  </div>
                                </div>
                                <p>From the east coast to the west, each river has its own beauty and character. Each river has its own story. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="d-flex"><img class="align-self-center" src="assets/images/blog/12.png" alt="Generic placeholder image">
                              <div class="flex-grow-1">
                                <div class="row">
                                  <div class="col-md-4">
                                    <h6 class="mt-0">Mark Ateer<span> ( Designer )</span></h6>
                                  </div>
                                  <div class="col-md-8">
                                    <ul class="comment-social float-start float-md-end">
                                      <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                      <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                    </ul>
                                  </div>
                                </div>
                                <p>Clean resort with maintained garden but rooms are average Lack of communication between the staff members. Receptionsit full of attitude. Arrogant staff. Except good view there is nothing great in this property.Resort is 35 kms away from Ramnagar Town.</p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="d-flex"><img class="align-self-center" src="assets/images/blog/14.png" alt="Generic placeholder image">
                              <div class="flex-grow-1">
                                <div class="row">
                                  <div class="col-md-4">
                                    <h6 class="mt-0">Greg Arias<span> ( Designer )</span></h6>
                                  </div>
                                  <div class="col-md-8">
                                    <ul class="comment-social float-start float-md-end">
                                      <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                      <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                    </ul>
                                  </div>
                                </div>
                                <p>Harpeth rises in the westernmost part of Rutherford County, just to the east of the community of College Grove in eastern Williamson County.but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </section> */?>
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
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>
</html>