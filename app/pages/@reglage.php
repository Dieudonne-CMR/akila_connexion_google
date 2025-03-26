<!DOCTYPE html>
<html lang="en">

<head>
  <?php $nom_de_page = "Reglage de l'entreprise"; ?>
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
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/quill.snow.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/select2.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/intltelinput.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/tagify.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/flatpickr/flatpickr.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/dropzone.css">
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
            <li class="breadcrumb-item f-w-400">Réglage</li>
            <!-- <li class="breadcrumb-item f-w-400 active">Add Product</li> -->
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
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h5>Product Form</h5>
                </div>
                <div class="card-body">
                  <div class="row g-xl-5 g-3">
                    <div class="col-xxl-3 col-xl-4 box-col-4e sidebar-left-wrapper">
                      <ul class="sidebar-left-icons nav nav-pills" id="add-product-pills-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" id="detail-product-tab" data-bs-toggle="pill" href="#detail-product" role="tab" aria-controls="detail-product" aria-selected="false">
                            <div class="nav-rounded">
                              <div class="product-icons">
                                <svg class="stroke-icon">
                                  <use href="assets/svg/icon-sprite.svg#product-detail"></use>
                                </svg>
                              </div>
                            </div>
                            <div class="product-tab-content">
                              <h5>Réglage Principal</h5>
                              <p>information de l'entreprise</p>
                            </div>
                          </a>
                        </li>

                        <?php if (!empty($permalien)) : ?>
                          <?php if (@$onsite == 1) : ?>
                            <?php if (!empty(@$id_core) and ($id_core != 2)) : ?>

                              <li class="nav-item"> <a class="nav-link" id="gallery-product-tab" data-bs-toggle="pill" href="#gallery-product" role="tab" aria-controls="gallery-product" aria-selected="false">
                                  <div class="nav-rounded">
                                    <div class="product-icons">
                                      <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#product-gallery"></use>
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="product-tab-content">
                                    <h5>Bannière</h5>
                                    <p>Information sur la bannière</p>
                                  </div>
                                </a>
                              </li>

                              <li class="nav-item"> <a class="nav-link" id="category-product-tab" data-bs-toggle="pill" href="#category-product" role="tab" aria-controls="category-product" aria-selected="false">
                                  <div class="nav-rounded">
                                    <div class="product-icons">
                                      <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#product-category"></use>
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="product-tab-content">
                                    <h5>A-propos de L'entreprise</h5>
                                    <p>Information a-propros de l'entreprise</p>
                                  </div>
                                </a>
                              </li>
                            <?php endif ?>
                          <?php endif; ?>
                        

                          <li class="nav-item"><a class="nav-link" id="pricings-tab" data-bs-toggle="pill" href="#pricings" role="tab" aria-controls="pricings" aria-selected="false">
                              <div class="nav-rounded">
                                <div class="product-icons">
                                  <svg class="stroke-icon">
                                    <use href="assets/svg/icon-sprite.svg#pricing"> </use>
                                  </svg>
                                </div>
                              </div>
                              <div class="product-tab-content">
                                <h5>Les réseaux sociaux</h5>
                                <p>Entrer les réseaux sociaux de l'entreprise</p>
                              </div>
                            </a>
                          </li>

                          <li class="nav-item"><a class="nav-link" id="advance-product-tab" data-bs-toggle="pill" href="#advance-product" role="tab" aria-controls="advance-product" aria-selected="false">
                              <div class="nav-rounded">
                                <div class="product-icons">
                                  <svg class="stroke-icon">
                                    <use href="assets/svg/icon-sprite.svg#advance"> </use>
                                  </svg>
                                </div>
                              </div>
                              <div class="product-tab-content">
                                <h5>Logo et image a-propro</h5>
                                <p>Ajouter le logo et a-propro</p>
                              </div>
                            </a>
                          </li>

                          <li class="nav-item"><a class="nav-link" id="advance-product-tab" data-bs-toggle="pill" href="#advance-map" role="tab" aria-controls="advance-product" aria-selected="false">
                              <div class="nav-rounded">
                                <div class="product-icons">
                                  <svg class="stroke-icon">
                                    <use href="assets/svg/icon-sprite.svg#advance"> </use>
                                  </svg>
                                </div>
                              </div>
                              <div class="product-tab-content">
                                <h5>Localisation Google Map</h5>
                                <p>Ajouter une Google Map</p>
                              </div>
                            </a>
                          </li>
                        <?php endif; ?>
                      </ul>
                    </div>
                    
                    <div class="col-xxl-9 col-xl-8 box-col-8 position-relative">
                      <div class="tab-content" id="add-product-pills-tabContent">

                        <div class="tab-pane fade show active" id="detail-product" role="tabpanel" aria-labelledby="detail-product-tab">
                          <div class="sidebar-body">
                            <form class="price-wrapper" method="post" action="add_reglage_general">
                              <div class="row g-3 custom-input">
                                <div class="col-sm-6">
                                  <label class="form-label" for="exampleFormControlInput1">Nom de l'entreprise<span class="txt-danger">*</span></label>
                                  <input class="form-control" id="exampleFormControlInput1" name="nom_entreprise" value="<?= @$nom_entreprise ?>" required placeholder="Nom de l'entreprise" type="text">
                                </div>
                                <div class="col-sm-6">
                                  <label class="form-label">Cours Nom (Max 9 Caractère)</label>
                                  <input type="text" name="cours_nom" value="<?= @$cours_nom ?>" class="form-control" required placeholder="Cours Nom">
                                </div>
                                <?php if (!isset($permalien)) : ?>
                                  <div class="col-sm-6">
                                    <label class="form-label" for="validationServer01">Choisir'administrateurs</label>
                                    <select name='matricule_admin' required class="form-control">
                                      <?php foreach ($admin as $value) : ?>
                                        <option value="<?= $value->matricule_admin ?>"><?= $value->nom . ' ' . $value->prenom ?></option>
                                      <?php endforeach; ?>
                                    </select>
                                  </div>
                                  <div class="col-sm-6">
                                    <label for="manufacturername">Entrer le permalien</label>
                                    <input id="manufacturername" required name="permalien" type="text" value="<?= @$rucup_info_etablissement[0]->permalien ?>" class="form-control" placeholder="Ex: SouKouLou">
                                  </div>
                                <?php endif; ?>

                                <div class="col-sm-6">
                                  <label class="form-label">Ville</label>
                                  <input type="text" required value="<?= @$ville ?>" name="ville" class="form-control" placeholder="ville">
                                </div>
                                <div class="col-sm-6">
                                  <label>Quartier</label>
                                  <input type="text" name="quartier" value="<?= @$quartier ?>" placeholder="Quartier" required class="form-control">
                                </div>

                                <div class="col-sm-6">
                                  <label class="form-label">Pays</label>
                                  <select name="pays" required class="default-select form-control ">
                                    <option value="" selected>Choisir le pays...</option>
                                    <?php foreach ($pays as $value) : ?>
                                      <option value="<?= @$value->id_pays ?>" <?php if ($value->id_pays == @$id_pays) {
                                                                                echo "selected";
                                                                              } ?>><?= @$value->nom_fr ?></option>

                                    <?php endforeach; ?>

                                  </select>
                                </div>
                                <div class="col-sm-6">
                                  <label class="form-label">Téléphone</label>
                                  <input type="tel" name="telephone" required value="<?= @$telephone ?>" placeholder="Entrer numero de l'entreprise" class="form-control">
                                </div>

                                <div class="col-sm-6">
                                  <label class="form-label">Email</label>
                                  <input type="email" name="email" required value="<?= @$email_entreprise ?>" class="form-control" placeholder="Mail de l'entreprise">
                                </div>
                                <div class="col-sm-6">
                                  <label class="form-label">Région</label>
                                  <input type="text" required name="region" value="<?= @$region ?>" class="form-control" placeholder="Entrer une Region">
                                </div>

                                <?php if ($supadmin == "oui") : ?>
                                  <div class=" col-sm-4">
                                    <p>Choisir un Etat pour le Site </p>
                                  </div>
                                  <div class="col-sm-4">
                                    <input class="form-check-input" id="dashed4" type="radio" name="onsite" value="1" <?= @$onsite == 1 ?"checked":''?>>
                                    <label class="form-check-label" for="dashed4">Activer le Blog </label>
                                  </div>

                                  <div class="col-sm-4">
                                    <input class="form-check-input" id="dashed3" type="radio" name="onsite" value="0"  <?= @$onsite == 0 ?"checked":''?>>
                                    <label class="form-check-label" for="dashed3">Désactiver le Blog </label>
                                  </div>
                                <?php endif; ?>

                                <?php if (!isset($permalien) and empty($id_core)) : ?>
                                  <div class="row">
                                    <div class="card-header col-12">
                                      <h5 class="card-title">Choix du template</h5>
                                    </div>

                                    <div class="col-xl-4 col-xxl-4 col-4">
                                      <div class="form-check custom-radio mb-3">
                                        <input type="radio" name="id_core" value="1" class="form-check-input" checked id="customradio1" required>
                                        <label class="form-check-label" for="customradio1">Core
                                          1</label>
                                      </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-4 col-4">
                                      <div class="form-check custom-radio mb-3 radio-info">
                                        <input type="radio" name="id_core" value="2" class="form-check-input" id="customradio2" <?php if (@$id_core == 2) {
                                                                                                                                  echo "checked";
                                                                                                                                } ?> required>
                                        <label class="form-check-label" for="customradio2">Core
                                          2</label>
                                      </div>
                                    </div>
                                    
                                    <div class="col-xl-4 col-xxl-4 col-4">
                                      <div class="form-check custom-radio mb-3 radio-success">
                                        <input type="radio" name="id_core" value="3" class="form-check-input" id="customradio3" <?php if (@$id_core == 3) {
                                                                                                                                  echo "checked";
                                                                                                                                } ?> required>
                                        <label class="form-check-label" for="customradio3">Core
                                          3</label>
                                      </div>
                                    </div>
                                    <?php /*
                                    <div class="col-xl-4 col-xxl-4 col-4">
                                      <div class="form-check custom-radio mb-3 radio-warning">
                                        <input type="radio" name="id_core" value="4" class="form-check-input" id="customradio4" <?php if (@$id_core == 4) {
                                                                                                                                  echo "checked";
                                                                                                                                } ?> required>
                                        <label class="form-check-label" for="customradio4">Core
                                          4</label>
                                      </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-4 col-4">
                                      <div class="form-check custom-radio mb-3 radio-danger">
                                        <input type="radio" name="id_core" value="5" class="form-check-input" id="customradio5" <?php if (@$id_core == 5) {
                                                                                                                                  echo "checked";
                                                                                                                                } ?> required>
                                        <label class="form-check-label" for="customradio5">Core
                                          5</label>
                                      </div>
                                    </div>
                                    
                                    */?>

                                    <div class="col-xl-4 col-xxl-4 col-4">
                                      <div class="form-check custom-radio mb-3 radio-danger">
                                        <input type="radio" name="id_core" value="6" class="form-check-input" id="customradio6" <?php if (@$id_core == 6) {
                                                                                                                                  echo "checked";
                                                                                                                                } ?> required>
                                        <label class="form-check-label" for="customradio5">Core
                                          6</label>
                                      </div>
                                    </div>
                                    <?php /*
                                        <div class="col-xl-4 col-xxl-4 col-4">
                                          <div class="form-check custom-radio mb-3 radio-danger">
                                            <input type="radio" value="7" class="form-check-input" id="customradio7" <?php if (@$id_core == 7) {
                                                                                                                        echo "checked";
                                                                                                                      } ?> required>
                                            <label class="form-check-label" for="customradio5">Core
                                              7</label>
                                          </div>
                                        </div>
                                     */?>
                                    
                                    <div class="col-xl-4 col-xxl-4 col-4">
                                      <div class="form-check custom-radio mb-3 radio-danger">
                                        <input type="radio" value="8"  name="id_core" class="form-check-input" id="customradio8" <?php if (@$id_core == 8) {
                                                                                                                    echo "checked";
                                                                                                                  } ?> required>
                                        <label class="form-check-label" for="customradio5">Core
                                          8</label>
                                      </div>
                                    </div>
                                  <!-- nouveau 16/07/2024 -->
                                    <div class="col-xl-4 col-xxl-4 col-4">
                                      <div class="form-check custom-radio mb-3 radio-danger">
                                        <input type="radio" value="10"  name="id_core" class="form-check-input" id="customradio8" <?php if (@$id_core == 10) {
                                                                                                                    echo "checked";
                                                                                                                  } ?> required>
                                        <label class="form-check-label" for="customradio5">Tunnel de vente
                                          10</label>
                                      </div>
                                    </div>
                                  </div>
                                <?php endif; ?>

                                <?php /*
                                <div class="col-12">
                                  <label class="form-label" for="exampleFormControlInput1">Types of product discount<i class="icon-help-alt ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Choose the kind of discount that will be used on that particular item."></i></label>
                                  <ul class="radio-wrapper">
                                    <li>
                                      <input class="form-check-input" id="radio-icon" type="radio" name="radio5" value="option5">
                                      <label class="form-check-label" for="radio-icon"><span>Fixed Price</span></label>
                                    </li>
                                    <li>
                                      <input class="form-check-input" id="radio-icon4" type="radio" name="radio5" value="option5" checked="">
                                      <label class="form-check-label" for="radio-icon4"><span>BOGO(Buy one, Get one)</span></label>
                                    </li>
                                    <li>
                                      <input class="form-check-input" id="radio-icon5" type="radio" name="radio5" value="option5">
                                      <label class="form-check-label" for="radio-icon5"><span>Seasonal or holiday discount</span></label>
                                    </li>
                                    <li>
                                      <input class="form-check-input" id="radio-icon6" type="radio" name="radio5" value="option5">
                                      <label class="form-check-label" for="radio-icon6"><span>Percentage-based discount(%)</span></label>
                                    </li>
                                    <li>
                                      <input class="form-check-input" id="radio-icon7" type="radio" name="radio5" value="option5">
                                      <label class="form-check-label" for="radio-icon7"><span>Volume or bulk discount</span></label>
                                    </li>
                                  </ul>
                                </div> */ ?>

                              </div>
                              <button class="btn btn-primary mt-4" name="valide_f1" value="valide_f1"> Entregistrer</button>

                              <?php /* <div class="product-buttons">

                                <button class="btn" name="valide_f1" value="valide_f1">
                                  <div class="d-flex align-items-center gap-sm-2 gap-1">Entregistrer
                                    <svg>
                                      <!-- <use href="assets/svg/icon-sprite.svg#front-arrow"> </use> -->
                                    </svg>
                                  </div>
                                  </button>
                              </div> */ ?>
                            </form>

                          </div>
                        </div>

                        <?php if (!empty($permalien)) : ?>
                          <?php if (@$onsite == 1) : ?>
                            <?php if (!empty(@$id_core) and ($id_core != 2)) : ?>

                              <div class="tab-pane fade" id="gallery-product" role="tabpanel" aria-labelledby="gallery-product-tab">
                                <div class="sidebar-body">

                                  <form class="price-wrapper mb-4" method="post" action="add_reglage_banniere">
                                    <div class="row g-3 custom-input">
                                      <div class="col-sm-4">
                                        <label class="form-label" for="exampleFormControlInput1">Accueil Slide 1<span class="txt-danger">*</span></label>
                                        <input class="form-control" id="exampleFormControlInput1" name="titre_banniere1" value="<?= isset($titre_banniere_accueil1) ? @$titre_banniere_accueil1 : 'Nos formations professionnelle' ?>" required placeholder="Enter le titre 1" type="text">
                                        <label class="form-label" for="exampleFormControlInput1">Description<span class="txt-danger">*</span></label>
                                        <textarea class="form-control" id="" cols="30" name="description_banniere1" rows="5"><?= $description_banniere1 ?></textarea>
                                      </div>

                                      <div class="col-sm-4">
                                        <label class="form-label" for="exampleFormControlInput1">Accueil Slide 2<span class="txt-danger">*</span></label>
                                        <input class="form-control" id="exampleFormControlInput1" name="titre_banniere2" value="<?= isset($titre_banniere_accueil2) ? $titre_banniere_accueil2 : 'Acquérez les compétences' ?>" required placeholder="Entrer le titre 2" type="text">
                                        <label class="form-label" for="exampleFormControlInput1">Description<span class="txt-danger">*</span></label>
                                        <textarea class="form-control" id="" cols="30" name="description_banniere2" rows="5"><?= $description_banniere2 ?></textarea>
                                      </div>

                                      <div class="col-sm-4">
                                        <label class="form-label" for="exampleFormControlInput1">Accueil Slide 3<span class="txt-danger">*</span></label>
                                        <input class="form-control" id="exampleFormControlInput1" name="titre_banniere3" value="<?= isset($titre_banniere_accueil3) ? $titre_banniere_accueil3 : "Centre de formation professionnelle" ?>" placeholder="Entrer le titre 3" type="text">
                                        <label class="form-label" for="exampleFormControlInput1"> Description <span class="txt-danger">*</span></label>
                                        <textarea id="" class="form-control" name="description_banniere3" cols="30" rows="5"><?= $description_banniere3 ?></textarea>
                                      </div>

                                      <button class="btn btn-primary" type="submit" name="entregistre2" value="Enregistré"> Enregistrer </button>

                                    </div>
                                  </form>
                                  <hr>
                                  <?php if (@$onsite != 0) : ?>
                                    <form action="img_accueil_apropos" method="post" enctype="multipart/form-data">
                                      <div class="row g-3 custom-input">
                                          <!------------------------->
                                        <div class="col-sm-4">
                                          <label class="form-label" for="exampleFormControlInput1">Bannière 1<span class="txt-danger">*</span></label>
                                          <div style="height: 10rem;">
                                            <img class="card-img-bottom img-fluid rounded-0" style="height:  10rem;" src="<?= affichage_img($chemin2, $banniere) ?>" alt="Card image cap">
                                          </div>
                                          <div>
                                            <label class="form-label" for="exampleFormControlInput1">Entrer une image<span class="txt-danger">*</span></label>
                                            <input class="form-control form-control-lg" name="image_banniere" accept=".png, .jpg, .jpeg, .webp, .gif" id="formFileLg" type="file">
                                            
                                             <label class="form-label" for="exampleFormControlInput1">Ou le lien de l'image<span class="txt-danger">*</span></label>
                                            <input class="form-control form-control-lg" name="image_banniere" value="<?= @value_img($banniere) ?>" placeholder='Ex:https://lien-de-image' id="formFileLg" type="url">
                                          </div>
                                        </div>
                                        <!----------------->
                                        <div class="col-sm-4">
                                          <label class="form-label" for="exampleFormControlInput1">Bannière 2<span class="txt-danger">*</span></label>
                                          <div style="height: 10rem;">
                                            <img class="card-img-bottom img-fluid rounded-0"  style="5rem;" src="<?= @affichage_img($chemin2, $banniere2) ?>" alt="Card image cap">
                                          </div>
                                          <div>
                                            <label class="form-label" for="exampleFormControlInput1">Entrer une image<span class="txt-danger">*</span></label>
                                            <input class="form-control form-control-lg" name="image_banniere2" accept=".png, .jpg, .jpeg, .webp, .gif" id="formFileLg" type="file">
                                            
                                            <label class="form-label" for="exampleFormControlInput1">Ou le lien de l'image<span class="txt-danger">*</span></label>
                                            <input class="form-control form-control-lg" name="image_banniere2" value="<?= value_img($banniere2)?>" placeholder='Ex:https://lien-de-image'  id="formFileLg" type="url">
                                          </div>
                                        </div>
                                        <!---------------->
                                        <?php if ($id_core != 3) :?>
                                          <div class="col-sm-4">
                                            <label class="form-label" for="exampleFormControlInput1">Bannière 3<span class="txt-danger">*</span></label>
                                            <div style="height: 10rem;">
                                              <img class="card-img-bottom img-fluid rounded-0" style="5rem;" src="<?= @affichage_img($chemin2, $banniere3) ?>"  alt="Card image cap">
                                            </div>
                                            <div>
                                              <label class="form-label" for="exampleFormControlInput1">Entrer une image<span class="txt-danger">*</span></label>
                                              <input class="form-control form-control-lg" name="image_banniere3" accept=".png, .jpg, .jpeg" id="formFileLg" type="file">
                                              
                                              <label class="form-label" for="exampleFormControlInput1">Ou le lien de l'image<span class="txt-danger">*</span></label>
                                              <input class="form-control form-control-lg" name="image_banniere3" value="<?= value_img( $banniere3) ?>" placeholder='Ex:https://lien-de-image'  type="url">
                                            </div>
                                          </div>
                                        <?php endif; ?>
                                        <!------------------------>
                                        <button class="btn btn-primary" type="submit" name="submit_banniere" value=""> Enregistrer </button>
                                      </div>
                                    </form>
                                  <?php endif ?>
                                </div>
                              </div>

                              <div class="tab-pane fade" id="category-product" role="tabpanel" aria-labelledby="category-product-tab">
                                <div class="sidebar-body">
                                  <form class="price-wrapper mb-4" method="post" action="add_reglage_banniere">

                                    <div class="row g-3 custom-input">
                                      <div class="col-sm-12">
                                        <div class="mb-3">
                                          <label>A propos de l'entreprise</label>
                                          <textarea id="text-box" class="form-control ckeditor" name="apropos" cols="30" rows="10"><?= str_replace('&', '&amp;', @$apropos); ?></textarea>
                                          <!-- <textarea name="" id="text-box" cols="30" rows="10"></textarea> -->
                                          <!-- <textarea id="text-box" name="text-box" cols="10" rows="2"></textarea> -->
                                        </div>
                                      </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit" name="submit_apropo" value="Enregistré"> Enregistrer </button>
                                  </form>
                                </div>
                              </div>
                            <?php else : ?>
                              <div class="col-xl-6 col-lg-6">
                                <div class="card">
                                  <div class="card-header">
                                    <h4 class="card-title text-danger">Ce Core N'est pas encore totalement près </h4>
                                  </div>

                                </div>

                              </div>
                            <?php endif ?>
                          <?php endif; ?>
                        
                        <div class="tab-pane fade" id="pricings" role="tabpanel" aria-labelledby="pricings-tab">
                          <div class="sidebar-body">
                            <form class="price-wrapper" method="post" action="form_reglage_social">
                              <div class="row g-3 custom-input">
                                <div class="col-sm-6">
                                  <label class="form-label" for="exampleFormControlInput1">Entrez le lien de Facebook <span class="txt-danger">*</span></label>
                                  <input class="form-control form-control-lg" type="text" name="facebook" value="<?= $facebook ?>" placeholder="Entrez le lien de Facebook">
                                </div>

                                <div class="col-sm-6">
                                  <label for="">Entrez le lien de Linkedin </label>
                                  <input class="form-control form-control-lg" type="text" name="linkedin" value="<?= $linkedin ?>" placeholder="Entrez le lien de Linkedin">
                                </div>

                                <div class="col-sm-6">
                                  <label for="">Entrez le lien de Twitter </label>
                                  <input class="form-control form-control-lg" type="text" name="twitter" value="<?= $twitter ?>" placeholder="Twitter">
                                </div>

                                <div class="col-sm-6">
                                  <label for="">Entrez le lien de Youtube </label>
                                  <input class="form-control form-control-lg" type="text" name="youtube" value="<?= $youtube ?>" placeholder="Entrez le lien de Youtube ">
                                </div>
                                <div class="col-sm-6">
                                  <label for="">Entrez le numero Whatsapp </label>
                                  <input class="form-control form-control-lg" type="text" name="whatsapp" value="<?= $whatsapp ?>" placeholder="Entrez le numero Whatsapp">
                                </div>

                                <div class="col-sm-6">
                                  <label for="">Entrez le lien de instagram </label>
                                  <input class="form-control form-control-lg" type="text" name="instagramm" value="<?= $instagramm ?>" placeholder="Entrez le lien de instagram">
                                </div>


                                <button type="submit" name="social_sudmit" value="socialSubmit" class="btn btn-primary ">Enregistrer</button>
                              </div>

                            </form>
                          </div>

                          <!-- zone du bouton d'achet et du call to action  -->
                          <div class="sidebar-body pt-5">
                            <form class="price-wrapper" method="post" id='callaction'>

                              <div class="row g-3 custom-input">
                                <div class="col-sm-6">
                                  <label class="form-label" for="exampleFormControlInput1">Call to action () <span class="txt-danger">*</span></label>
                                  <input class="form-control form-control-lg" type="text" name="textbouton" value="<?= @$textbouton ?>" placeholder="Entrez le text sur le bouton">
                                </div>

                                <div class="col-sm-6">
                                  <label class="form-label" for="exampleFormControlInput1">Lien dans le bouton <span class="txt-danger">*</span></label>
                                  <input class="form-control form-control-lg" type="url" name="lienbouton" value="<?= @$lienbouton ?>" placeholder="Entrez le lien de paiement">
                                </div>
                                <button type="submit" name="callaction" value="socialSubmit" class="btn btn-primary">Enregistrer</button>
                              </div>

                            </form>
                          </div>
                          
                        </div>
                        
                       
                        <div class="tab-pane fade" id="advance-product" role="tabpanel" aria-labelledby="pricings-tab">
                          <div class="sidebar-body advance-options">

                            <div class="tab-content" id="advance-option-tabContent">
                              <div class="tab-pane fade show active" id="manifest-option" role="tabpanel" aria-labelledby="manifest-option-tab">
                                <div class="meta-body">
                                  <form action="reglage_logo" method="post" enctype="multipart/form-data">
                                    <div class="row g-3 custom-input">
                                      <div class="col-sm-3">
                                        <div>
                                            <img class="card-img-bottom img-fluid rounded-0" style="height:  100%;" src="<?php if (isset($logo)) { echo $chin_logo_a . $logo; } else {echo "images/noimage.jpg";} ?>" alt="Card image cap">
                                        </div>
                                        <div >
                                          <label for="imageUpload" class="dlab-upload ms-0">Choisisez le logo</label>
                                          <input type='file' name="logo" class="form-control" id="imageUpload" accept=".png, .jpg, .jpeg">
															          </div>
                                      </div>
                                      <div class="col-sm-9">
                                        <label for="">Couleur principale</label>
                                        <div class="mb-3">
                                          <input type="color" value="<?= $couleur1 ?>" name="color1" class="form-control input-default " placeholder="input-default">
                                        </div>
                                        <label for="">Couleur Secondaire</label>
                                        <div class="mb-3">
                                          <input type="color" value="<?= $couleur2 ?>" name="color2" class="form-control input-rounded" placeholder="input-rounded">
                                        </div>
                                      </div>
                                      <button type="submit" name="submit_logo" value="logo" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                  </form>
                                    <br>
                                    <?php if(@$onsite!=0): ?> 
                                      <form action="img_accueil_apropos" method="post" enctype="multipart/form-data">
                                        <div class="row g-3 custom-input">
                                          <div class="">
                                            <?php if(!empty($img_apropo)): ?>
                                            <?php 
                                                                                    
                                            	if (!filter_var($img_apropo, FILTER_VALIDATE_URL) === false) {
                                            		$img=$img_apropo;
                                            	} else {
                                            		$img=$chemin2 . $img_apropo;
                                                 }
                                            ?>
                                              <div style="height: 20rem; justify-content: center; display: flex;">
                                                <img class="card-img-bottom img-fluid rounded-0" src="<?= $img ?>" style="height: 20rem; width: auto;" alt="Card image cap">
                                              </div>
                                              <?php endif; ?>
                                            <div class="row">
                                                <div class='col-6'>
                                                    <label for="formFileLg" class="form-label">Choisir une photo</label>
                                                    <input class="form-control form-control-lg" name="image_about" accept=".png, .jpg, .jpeg" id="formFileLg" type="file">
                                                </div>
                                                <div class='col-6'>
                                                    <label for="formFileLg" class="form-label">Ou Lien de l'image</label>
                                                    <input class="form-control form-control-lg" name="image_about" value="<?= @value_img($img_apropo) ?>" id="formFileLg" type="url" placeholder='EX: https://le-lien-de-image.png'>
                                                </div>
                                              
                                            </div>
                                          </div>
                        
                                          <button type="submit" name="submit_about" value="logo" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                      </form>
                                  <?php endif ?>
                                  </div>
                              </div>
                            </div>
                            
                          </div>
                        </div>
                                  


                        <div class="tab-pane fade" id="advance-map" role="tabpanel" aria-labelledby="advance-product-tab">
                          <div class="sidebar-body">
                            <form class="price-wrapper" method="post" action="form_reglage_social">
                              <div class="row g-3 custom-input">
                                <div class="col-sm-6">
                                  <label class="form-label" for="exampleFormControlInput1">Localisation Google Map<span><a href="https://www.google.com/maps/@7.3581086,7.7983274,6z" target="_blank" rel="noopener noreferrer"><i class="fa fa-fw fa-eye"></i></a></span></label>
                                  <textarea class="form-control" name="map" rows="8" id="comment"><?= $google_map ?></textarea>
                                </div>
    
                                <div class="col-sm-6">
                                  <label for="">Descriptions Brève de lentreprise (160 mots max) </label>
                                  <textarea class="form-control" name="petite_description" rows="8" id="comment"><?= $petite_description_entreprise ?></textarea>
                                </div>
    
                                <button type="submit" name="submit_map" value="submit_map" class="btn btn-primary ">Enregistrer</button>
                              </div>
    
                            </form>
                          </div>
                        </div>
                        <?php endif; ?>
                      </div>
                    </div>


                  </div>
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
  <script src="assets/js/editor/ckeditor/ckeditor.js"></script>
  <script src="assets/js/editor/ckeditor/adapters/jquery.js"></script>
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
  <script src="assets/js/flat-pickr/flatpickr.js"></script>
  <script src="assets/js/flat-pickr/custom-flatpickr.js"></script>
  <script src="assets/js/dropzone/dropzone.js"></script>
  <script src="assets/js/dropzone/dropzone-script.js"></script>
  <script src="assets/js/select2/select2.full.min.js"></script>
  <script src="assets/js/select2/tagify.js"></script>
  <script src="assets/js/select2/tagify.polyfills.min.js"></script>
  <script src="assets/js/select2/intltelinput.min.js"></script>
  <script src="assets/js/add-product/select4-custom.js"></script>
  <script src="assets/js/editors/quill.js"></script>
  <script src="assets/js/custom-add-product.js"></script>
  <script src="assets/js/form-validation-custom.js"></script>
  <script src="assets/js/height-equal.js"></script>
  <script src="assets/js/tooltip-init.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/theme-customizer/customizer.js"></script>
  <!-- Plugin used-->

  <script>
        $(document).ready(function() {
          $('#callaction').submit(function(e) {
              e.preventDefault(); // Empêche le rechargement de la page

              var $form = $(this);
              var data = $form.serialize(); // Sérialise les données du formulaire 
              // var url = 'processings/connection.php'; // URL du script PHP
              var url = 'call_action'; // URL du script PHP

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
                          text: 'Les informations ont bien été bien ajouté !',
                      }).then(() => {
                          window.location.href = '@reglage';
                      });
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
</body>

</html>