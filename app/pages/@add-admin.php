<?php if( $supadmin=='oui'){
}else{
  header('location:home');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <?php $nom_de_page = "Ajouter un Utilisateur"; ?>
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
          <h4 class="f-w-700">Edit Profile</h4>
          <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
              <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">Users</li>
              <li class="breadcrumb-item f-w-400 active">Edit Profile</li>
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
            <div class="edit-profile">
              <div class="row" style="display: flex; justify-content:center">
                <?php /* coment
                <div class="col-xl-4">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title mb-0">My Profile</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row mb-2">
                          <div class="profile-title">
                            <div class="d-flex">                        <img class="img-70 rounded-circle" alt="" src="assets/images/user/7.jpg">
                              <div class="flex-grow-1">
                                <h4 class="mb-1">MARK JECNO</h4>
                                <p>DESIGNER</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <h6 class="form-label">Bio</h6>
                          <textarea class="form-control" rows="5">On the other hand, we denounce with righteous indignation</textarea>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Email-Address</label>
                          <input class="form-control" placeholder="your-email@domain.com">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input class="form-control" type="password" value="password">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Website</label>
                          <input class="form-control" placeholder="http://Uplor .com">
                        </div>
                        <div class="form-footer">
                          <button class="btn btn-primary btn-block">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                */?>

                <div class="col-xl-8">
                  <form class="card" action="ajoute_admin" method="post">
                    <div class="card-header">
                      <h4 class="card-title mb-0">Ajoutez un utilisateur</h4>
                      <h4 class="card-title mb-0"><?= isset($_SESSION['erreur'])? $_SESSION['erreur']:'';?> <?php unset($_SESSION['erreur']); ?></h4>

                      <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Nom</label>
                            <input class="form-control" type="text" name="nom" value="<?= isset($_SESSION['a']['nom'])? $_SESSION['a']['nom']:''; ?>" placeholder="Entrez le nom">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Prenom</label>
                            <input class="form-control" type="text" name="prenom" value="<?= isset($_SESSION['a']['prenom']) ? $_SESSION['a']['prenom']:'';?>" placeholder="Entrez le prenom">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input class="form-control" name="email" value="<?= isset($_SESSION['a']['email'])? $_SESSION['a']['email'] :''; ?>" type="email" placeholder="Entrez Email">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Téléphone</label>
                            <input class="form-control" type="tel" name="tel" value="<?= isset($_SESSION['a']['telephone']) ? $_SESSION['a']['telephone']:"";?>" placeholder="237 699 99 99 99">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Numero WhatSapp</label>
                            <input class="form-control" name="tel_whatwapp" type="tel" placeholder="2376999999">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Ville</label>
                            <input class="form-control" type="text" name="ville" value="<?= isset($_SESSION['a']['ville']) ? $_SESSION['a']['ville']:'';?>" placeholder="Ville">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Lien Fecebook</label>
                            <input class="form-control" name="lien_fb" type="url" placeholder="Entrer le lien Facebook">
                          </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <label class="form-label"> Lien LinkedIn </label>
                            <input class="form-control" name="lien_lin" type="url" placeholder="">
                          </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <label class="form-label"> Lien X </label>
                            <input class="form-control" name="lien_x" type="url" placeholder="">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Pays</label>
                            <select class="form-control btn-square">
                            <option value="">--Choisisez Votre Pays--</option>
                              <?php foreach ($pays as $pays): ?>
                                <option value="<?= $pays->id_pays ?>"><?= $pays->nom_fr ?></option>
                              <?php endforeach ?>
                            </select>
                          </div>
                        </div>

                        <div class="col-sm-6 col-md-12">
                          <div class="mb-3">
                            <label class="form-label"> Mot de passe </label>
                            <input class="form-control" name="password" type="password" placeholder="">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div>
                            <label class="form-label">A propos </label>
                            <textarea class="form-control" rows="4" name="apropos" placeholder="Entrer une description"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button class="btn btn-primary" name="submit" type="submit">Sauvegarder</button>
                    </div>
                  </form>
                </div>
                
                <?php /*
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title mb-0">Add projects And Upload</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="table-responsive add-project">
                      <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                          <tr>
                            <th>Project Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a class="text-inherit" href="#">Untrammelled prevents </a></td>
                            <td>28 May 2018</td>
                            <td><span class="status-icon bg-success"></span> Completed</td>
                            <td>$56,908</td>
                            <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                          </tr>
                          <tr>
                            <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                            <td>12 June 2018</td>
                            <td><span class="status-icon bg-danger"></span> On going</td>
                            <td>$45,087</td>
                            <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                          </tr>
                          <tr>
                            <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                            <td>12 July 2018</td>
                            <td><span class="status-icon bg-warning"></span> Pending</td>
                            <td>$60,123</td>
                            <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                          </tr>
                          <tr>
                            <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                            <td>14 June 2018</td>
                            <td><span class="status-icon bg-warning"></span> Pending</td>
                            <td>$70,435</td>
                            <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                          </tr>
                          <tr>
                            <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                            <td>25 June 2018</td>
                            <td><span class="status-icon bg-success"></span> Completed</td>
                            <td>$15,987</td>
                            <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                      */?>

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