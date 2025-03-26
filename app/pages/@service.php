<!DOCTYPE html>
<html lang="en">

<head>
  <?php $nom_de_page = "Modifier le service"; ?>
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
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="assets/images/logo/logo.png" alt="" /><img class="img-fluid for-dark" src="assets/images/logo/logo_light.png" alt="" /></a></div>
      </div>
      <div class="col-4 col-xl-4 page-title">
        <h4 class="f-w-700"><?= $nom_entreprise ?></h4>
        <nav>
          <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
            <li class="breadcrumb-item f-w-400">Service</li>
            <li class="breadcrumb-item f-w-400 active"><?= isset($id) ? 'Modification du services' : 'Entrer un service' ?></li>
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
        <div class="container-fluid ">
          <div class=" row align-items-center" style="display: flex;
              justify-content: center;">

            <div class="col-xl-8">
              <div class="card height-equal">
                <div class="card-header">
                  <h4><?= isset($id) ? 'Modification les informations du service' : 'Entrer un nouveau service' ?></h4>
                  <?php if (isset($id)) : ?>
                    <img src="<?= $chin_service . $services[0]->image ?>" alt="" class="img-fluid rounded f-m-light mt-2">
                  <?php endif; ?>
                  <?php /*<p class="f-m-light mt-1">
                       Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? Depending on your browser and OS,While these feedback styles cannot be styled with CSS, you can still customize the feedback text through JavaScript.</p> */ ?>
                </div>
                <div class="card-body custom-input">
                  <form class="row g-3" action="ajoute_service" method="post" enctype="multipart/form-data">
                    <div class="col-12">
                      <label class="form-label" for="first-name">Titre</label>
                      <input class="form-control" id="first-name" name="titre" value="<?= @$services[0]->nom ?>" type="text" placeholder="Entrer le titre " aria-label="Entrer le titre" required>
                    </div>
                    <div class="col-6">
                      <label class="form-label" for="formFile">Choisir une image </label>
                      <input class="form-control"  name="image" id="formFile" type="file" accept=".png, .jpg, .jpeg, .gif" >
                    </div>
                    <div class="col-6">
                      <label class="form-label" for="formFile">Ou le lien d'une image</label>
                      <input class="form-control"  name="image" value="<?= @value_img ($services[0]->image) ?>" id="formFile" placeholder="EX: https://lien-de-lien-image" type="url">
                    </div>
                    <?php if ($id_core==7):?>
                      <div class="col-12"> 
                        <label class="form-label" for="validationDefault04">Choix du servive</label>
                        <select class="form-select"  name="formation" id="validationDefault04" required="">
                          <!-- <option selected ="" disabled="" value="">Choose...</option> -->
                        <optgroup label="Nos activités">
                            <option  value="1" <?= @$services[0]->formation== 1 ?"selected":''; ?>>Formations continues </option>
                            <option  value="2" <?= @$services[0]->formation== 2 ?:"selected=''" ?>>Formations métiers</option>
                            <option  value="3" <?= @$services[0]->formation== 3 ?:"selected=''" ?>>Accompagnement</option>
                            <option  value="4" <?= @$services[0]->formation== 4 ?:"selected=''" ?>>Etudes/Audits   </option>
                          </optgroup>
                          
                          <optgroup label="Ressources">
                            <option  value="5" <?= @$services[0]->formation== 5 ?:"selected=''" ?>>Lois et règlementation  </option>
                            <option  value="6" <?= @$services[0]->formation== 6 ?:"selected=''" ?>>Documentation technique </option>
                          </optgroup>
                        </select>
                      </div>
                       <?php endif ?>

                       <?php /*<div class="d-flex col-md-12">
                        <label class="col-form-label m-l-10  m-2">Formations continues</label>
                        <div class="text-end">
                          <label class="switch mb-0  m-2">
                            <input type="checkbox" name="formation" value="2" <?= @$services[0]->formation== 1 ?:"checked=''" ?>><span class="switch-state bg-primary"> </span>
                          </label>
                       </div>
                      <label class="col-form-label m-l-10  m-2">Formations professionnelles</label>
                      </div> */?>

                    <div class="col-12">
                      <label class="form-label" for="exampleFormControlTextarea1">Description</label>
                      <textarea class="form-control ckeditor" id="exampleFormControlTextarea1  text-box" name="description" rows="3"> <?= str_replace('&', '&amp;', @$services[0]->description); ?></textarea>
                    </div>
                    

                    <?php if (isset($id)) : ?>
                      <input type='hidden' name='id' value="<?= @$services[0]->id ?>" <?php endif; ?> 
                      <div class="col-12">
                      <button class="btn btn-primary"  name="<?= (isset($id))? 'submit_modifie' :'submit_service' ?>"  value="service" type="submit"><?= (isset($id))? 'Modifier' :'Ajouter' ?></button>
                  </div>
                </form>
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
  <script src="assets/js/editor/ckeditor/ckeditor.js"></script>
  <script src="assets/js/editor/ckeditor/adapters/jquery.js"></script>
  <script src="assets/js/sidebar-menu.js"></script>
  <script src="assets/js/sidebar-pin.js"></script>
  <script src="assets/js/slick/slick.min.js"></script>
  <script src="assets/js/slick/slick.js"></script>
  <script src="assets/js/header-slick.js"></script>
  <!-- calendar js-->
  <script src="assets/js/form-validation-custom.js"></script>
  <script src="assets/js/height-equal.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/theme-customizer/customizer.js"></script>
  <!-- Plugin used-->
</body>

</html>