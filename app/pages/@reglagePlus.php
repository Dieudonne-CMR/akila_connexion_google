<!DOCTYPE html>
<html lang="en">
  <head>
  <?php $nom_de_page = "Plus de reglage "; ?>
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


 <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/simple-mde.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->


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
              <li class="breadcrumb-item"><a href="javascript:void(0)"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">Accueil</li>
              <li class="breadcrumb-item f-w-400 active">Plus de réglage</li>
            </ol>
          </nav>
        </div>
        <!-- Page Header Start-->
        <?php include('includes/parts/header.php'); ?>
        <!-- Page Header Ends                                -->
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
            <?php  if (isset($id_core)):?>

              <div class="col-12">
                <form action="addreglagePlus" method="post">
                    <div class="card">
                      <div class="card-header">
                        <h4>Autre services</h4>
                        <p class="f-m-light mt-1"></p>
                        <div class="col-sm-6 col-xl-12">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                                <label class="form-check-label" for="flexCheckDefault">Tire de la section</label>
                                <input class="form-control" id="flexCheckDefault" name="titre" type="text" value="<?= $titre_s?>">
                            </div>
                        
                        </div>
                      </div>
                      <div class="card-body">
                        
                        <div class="row g-3">
                          <div class="col-sm-6 col-xl-4">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckDefault">Titre du service</label>
                                <input class="form-control" id="flexCheckDefault" name="titre1" type="text" value="<?= $titre_s1?>">
                              </div>
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckChecked">description</label>
                                <textarea name="description1" id="" class="form-control" > <?=$discription_s1 ?></textarea>
                              </div>
                            </div>
                          </div>
    
                          <div class="col-sm-6 col-xl-4">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckDefault">Titre du service</label>
                                <input class="form-control" id="flexCheckDefault" name="titre2" type="text" value="<?= $titre_s2 ?>">
                              </div>
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckChecked">description</label>
                                <textarea name="description2" id="" class="form-control" cols="30" rows="2"> <?=$discription_s2 ?></textarea>
                              </div>
                            </div>
                          </div>
    
                          <div class="col-sm-6 col-xl-4">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckDefault">Titre du service</label>
                                <input class="form-control" name="titre3" id="flexCheckDefault" type="text" value="<?= $titre_s3?>">
                              </div>
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckChecked">description</label>
                                <textarea name="description3" id="" class="form-control" cols="30" rows="2"><?=$discription_s3 ?></textarea>
                              </div>
                            </div>
                          </div>
    
                          <div class="col-xl-12 col-sm-6">
                           <button type="submit" name="saves" class="btn btn-primary">Enregistrer</button>
                          </div>
    
                        </div>
                      </div>
                    </div>
                </form>
              </div>

              <div class="col-12">
                <form action="addreglagePlus" method="post">
                    <div class="card">
                      <div class="card-header">
                        <h4>Les Montiens de l'entreprise</h4>
                        <p class="f-m-light mt-1"></p>
                        <div class="row">
                            <div class="col-sm-4 col-xl-4">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <label class="form-check-label" for="flexCheckDefault">Titre de la section</label>
                                    <input class="form-control" id="flexCheckDefault" name="mention_titre" type="text" value="<?= $mention_titre ?>">
                                </div>
                            
                            </div>
                            <div class="col-sm-4 col-xl-8">
                                <div class="card-wrapper border rounded-3 checkbox-checked">
                                    <label class="form-check-label" for="flexCheckDefault">Description</label>
                                    <input class="form-control" id="flexCheckDefault" name="mention_des" type="text" value="<?= $mention_des ?>">
                                </div>
                            
                            </div>

                        </div>
                      </div>
                      <div class="card-body">
                        
                        <div class="row g-3">
                          <div class="col-sm-6 col-xl-3">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckDefault">Titre du service</label>
                                <input class="form-control" id="flexCheckDefault" name="mention1" type="text" value="<?= $mention1?>">
                              </div>
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckChecked">description</label>
                                <textarea name="mention_titre1" id="" class="form-control" cols="30" rows="2"> <?=$mention_titre1 ?></textarea>
                              </div>
                            </div>
                          </div>
    
                          <div class="col-sm-6 col-xl-3">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckDefault">Titre du service</label>
                                <input class="form-control" id="flexCheckDefault" name="mention2" type="text" value="<?= $mention2 ?>">
                              </div>
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckChecked">description</label>
                                <textarea name="mention_titre2" id="" class="form-control" cols="30" rows="2"> <?= $mention_titre2 ?></textarea>
                              </div>
                            </div>
                          </div>
    
                          <div class="col-sm-6 col-xl-3">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckDefault">Titre du service</label>
                                <input class="form-control" name="mention3" id="flexCheckDefault" type="text" value="<?= $mention3 ?>">
                              </div> 
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckChecked">description</label>
                                <textarea name="mention_titre3" id="" class="form-control" cols="30" rows="2"><?=$mention_titre3 ?></textarea>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-6 col-xl-3">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckDefault">Titre du service</label>
                                <input class="form-control" name="mention4" id="flexCheckDefault" type="text" value="<?= $mention4 ?>">
                              </div>
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckChecked">description</label>
                                <textarea name="mention_titre4" id="" class="form-control" cols="30" rows="2"><?=$mention_titre4 ?></textarea>
                              </div>
                            </div>
                          </div>
    
                          <div class="col-xl-12 col-sm-6">
                           <button type="submit" name="montiens_saves" class="btn btn-primary">Enregistrer</button>
                          </div>
    
                        </div>
                      </div>
                    </div>
                </form>
              </div>

              <div class="col-12">
                <form action="addreglagePlus" method="post">
                    <div class="card">

                      <div class="card-body">
                        
                        <div class="row g-3">
                          <div class="col-sm-6 col-xl-6">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckDefault">Titre sur Motivation</label>
                                <input class="form-control" id="flexCheckDefault" name="motivation_titre" type="text" value="<?= $motivation_titre?>">
                              </div>
                              <br>
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckDefault">Entrer le lien D'un image</label>
                                <input class="form-control" id="flexCheckDefault" name="motivation_img" type="url" value="<?= $motivation_img?>">
                              </div>
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckChecked">description</label>
                                <textarea id="text-box"  name="motivation_desription" cols="30" rows="10"> <?= str_replace('&', '&amp;', @$motivation_desription); ?></textarea>
                              </div>
                            </div>
                          </div>
    
                          <div class="col-sm-6 col-xl-6">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckDefault">Titre du block offre</label>
                                <input class="form-control" id="flexCheckDefault" name="offre_titre" type="text" value="<?=  $offre_titre ?>">
                              </div>
                              <br>
                              <div class="form-check">
                                <label class="form-check-label" for="flexCheckDefault">Entrer le lien D'un image</label>
                                <input class="form-control" id="flexCheckDefault" name="offre_img" type="url" value="<?= $offre_img ?>">
                              </div>
                              <div class="form-check">
                              <div id="editor_container">
                                <label class="form-check-label" for="flexCheckChecked">description</label>
                                <textarea id="editable" name="offre_descripr" class="text-box" cols="30" rows="10"><?= $offre_descripr ?></textarea>
                              </div>
                              </div>
                            </div>
                          </div>
    
                          <div class="col-xl-12 col-sm-6">
                           <button type="submit" name="motivation_saves" class="btn btn-primary">Enregistrer</button>
                          </div>
    
                        </div>
                      </div>
                    </div>
                </form>
              </div>
             <?php endif; ?>

            <?php /*
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Custom checkbox</h4>
                    <p class="f-m-light mt-1">
                       Use the <code>.form-check-input </code>and <code>.form-check-label </code>for checkbox. And filled checkbox used <code>.checkbox-dashed-*</code> and bordered checkbox used <code>.checkbox-*</code>.</p>
                  </div>
                  <div class="card-body">
                    <div class="row g-3">
                      <div class="col-xl-4 col-sm-6">
                        <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                          <h6 class="sub-title">Bordered Checkbox </h6>
                          <div class="form-check checkbox checkbox-primary mb-0">
                            <input class="form-check-input" id="checkbox-primary-1" type="checkbox" checked="">
                            <label class="form-check-label" for="checkbox-primary-1">Primary - checkbox-primary</label>
                          </div>
                          <div class="form-check checkbox checkbox-secondary mb-0">
                            <input class="form-check-input" id="checkbox-secondary" type="checkbox">
                            <label class="form-check-label" for="checkbox-secondary">Secondary - checkbox-secondary </label>
                          </div>
                          <div class="form-check checkbox checkbox-success mb-0">
                            <input class="form-check-input" id="checkbox-primary" type="checkbox">
                            <label class="form-check-label" for="checkbox-primary">Success - checkbox-success</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-sm-12 order-xl-0 order-sm-1">
                        <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                          <h6 class="sub-title">Icon Checkbox </h6>
                          <div class="form-check checkbox checkbox-primary ps-0 main-icon-checkbox">
                            <ul class="checkbox-wrapper">
                              <li> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon" type="checkbox">
                                <label class="form-check-label" for="checkbox-icon"><i class="fa fa-sliders"></i><span>Sliders</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon1" type="checkbox" checked="">
                                <label class="form-check-label" for="checkbox-icon1"><i class="fa fa-user"> </i><span>User </span></label>
                              </li>
                              <li> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon2" type="checkbox">
                                <label class="form-check-label" for="checkbox-icon2"><i class="fa fa-tags"> </i><span>Tags</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon3" type="checkbox">
                                <label class="form-check-label" for="checkbox-icon3"><i class="fa fa-android"></i><span>Android </span></label>
                              </li>
                              <li> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon4" type="checkbox">
                                <label class="form-check-label" for="checkbox-icon4"><i class="fa fa-eye-slash"></i><span>Hidden</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon5" type="checkbox">
                                <label class="form-check-label" for="checkbox-icon5"><i class="fa fa-folder-open"></i><span>Folder</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon6" type="checkbox">
                                <label class="form-check-label" for="checkbox-icon6"><i class="fa fa-paper-plane"></i><span>Send</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon7" type="checkbox">
                                <label class="form-check-label" for="checkbox-icon7"><i class="fa fa-cloud-upload"></i><span>Upload</span></label>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-sm-6">
                        <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                          <h6 class="sub-title">Filled Checkbox </h6>
                          <div class="form-check checkbox checkbox-dashed-warning">
                            <input class="form-check-input" id="dashed4" type="checkbox" checked="">
                            <label class="form-check-label" for="dashed4">Warning - checkbox-dashed-warning </label>
                          </div>
                          <div class="form-check checkbox checkbox-dashed-danger">
                            <input class="form-check-input" id="dashed5" type="checkbox">
                            <label class="form-check-label" for="dashed5">Danger - checkbox-dashed-danger </label>
                          </div>
                          <div class="form-check checkbox checkbox-dashed-info">
                            <input class="form-check-input" id="dashed6" type="checkbox">
                            <label class="form-check-label" for="dashed6">Info - checkbox-dashed-info </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Default radio</h4>
                    <p class="f-m-light mt-1">
                       Use the <code>.form-check-input </code>and <code>.form-check-label </code>for radios.</p>
                  </div>
                  <div class="card-body">
                    <div class="row g-3">
                      <div class="col-sm-6 col-xl-4">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                          <h6 class="sub-title">Custom Radios </h6>
                          <div class="form-check">
                            <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault">
                            <label class="form-check-label" for="flexRadioDefault1">Default radio</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault" checked="">
                            <label class="form-check-label" for="flexRadioDefault2">Default checked radio</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-xl-4">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                          <h6 class="sub-title">Disabled Radios </h6>
                          <div class="form-check">
                            <input class="form-check-input" id="flexRadioDisabled" type="radio" name="flexRadioDisabled" disabled="">
                            <label class="form-check-label" for="flexRadioDisabled">Disabled radio</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="flexRadioCheckedDisabled" type="radio" name="flexRadioDisabled" checked="" disabled="">
                            <label class="form-check-label" for="flexRadioCheckedDisabled">Disabled checked radio</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-xl-4">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                          <h6 class="sub-title">Right Radios </h6>
                          <div class="form-check form-check-reverse">
                            <input class="form-check-input" id="flexRadioDefault3" type="radio" name="flexRadioDefault">
                            <label class="form-check-label" for="flexRadioDefault3">Default radio</label>
                          </div>
                          <div class="form-check form-check-reverse">
                            <input class="form-check-input" id="flexRadioCheckedDisabled1" type="radio" name="flexRadioDisabled" checked="" disabled="">
                            <label class="form-check-label" for="flexRadioCheckedDisabled1">Disabled checked radio</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Images with checkbox</h4>
                    <p class="f-m-light mt-1">
                       Use the <code>.form-check-input </code>and <code>.form-check-label </code>for image checkbox.</p>
                  </div>
                  <div class="card-body">
                    <div class="main-img-checkbox">
                      <div class="row g-3">
                        <div class="col-xxl-3 col-sm-6">
                          <div class="card-wrapper border rounded-3 checkbox-checked">
                            <h6 class="sub-title">Custom</h6>
                            <div class="img-checkbox">
                              <input class="main-img-cover form-check-input" id="img-check-1" type="checkbox">
                              <label class="form-check-label mb-0" for="img-check-1"> <img src="assets/images/switch/1.jpg" alt="coffee-beans"></label>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-sm-6">
                          <div class="card-wrapper border rounded-3 checkbox-checked">
                            <h6 class="sub-title">Checked Image</h6>
                            <div class="img-checkbox">
                              <input class="main-img-cover form-check-input" id="img-check-2" type="checkbox" checked="">
                              <label class="form-check-label mb-0" for="img-check-2"> <img src="assets/images/switch/2.jpg" alt="tree"></label>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-sm-6">
                          <div class="card-wrapper border rounded-3 checkbox-checked">
                            <h6 class="sub-title">Disable Image</h6>
                            <div class="img-checkbox">
                              <input class="main-img-cover form-check-input" id="img-check-3" type="checkbox" disabled="">
                              <label class="form-check-label mb-0" for="img-check-3"> <img src="assets/images/switch/3.jpg" alt="flowers"></label>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-sm-6">
                          <div class="card-wrapper border rounded-3 checkbox-checked">
                            <h6 class="sub-title">Disable Checked Image</h6>
                            <div class="img-checkbox">
                              <input class="main-img-cover form-check-input" id="img-check-4" type="checkbox" disabled="" checked="">
                              <label class="form-check-label mb-0" for="img-check-4"> <img src="assets/images/switch/4.jpg" alt="rose-tea"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Images with radio</h4>
                    <p class="f-m-light mt-1">
                       Use the <code>.form-check-input </code>and <code>.form-check-label </code>for image radio.</p>
                  </div>
                  <div class="card-body">
                    <div class="main-img-checkbox">
                      <div class="row g-3">
                        <div class="col-xxl-3 col-sm-6">
                          <div class="card-wrapper border rounded-3 checkbox-checked">
                            <h6 class="sub-title">Custom</h6>
                            <div class="img-checkbox">
                              <input class="main-img-cover form-check-input" id="img-radio-1" type="radio" name="radio6">
                              <label class="form-check-label mb-0" for="img-radio-1"> <img src="assets/images/switch/5.jpg" alt="coffee-beans"></label>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-sm-6">
                          <div class="card-wrapper border rounded-3 checkbox-checked">
                            <h6 class="sub-title">Checked Image</h6>
                            <div class="img-checkbox">
                              <input class="main-img-cover form-check-input" id="img-radio-2" type="radio" name="radio6" checked="">
                              <label class="form-check-label mb-0" for="img-radio-2"> <img src="assets/images/switch/6.jpg" alt="tree"></label>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-sm-6">
                          <div class="card-wrapper border rounded-3 checkbox-checked">
                            <h6 class="sub-title">Disable Image</h6>
                            <div class="img-checkbox">
                              <input class="main-img-cover form-check-input" id="img-radio-3" type="radio" name="radio6" disabled="">
                              <label class="form-check-label mb-0" for="img-radio-3"> <img src="assets/images/switch/7.jpg" alt="flowers"></label>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-sm-6">
                          <div class="card-wrapper border rounded-3 checkbox-checked">
                            <h6 class="sub-title">Disable Checked Image</h6>
                            <div class="img-checkbox">
                              <input class="main-img-cover form-check-input" id="img-radio-4" type="radio" name="radio6" disabled="" checked="">
                              <label class="form-check-label mb-0" for="img-radio-4"> <img src="assets/images/switch/8.jpg" alt="rose-tea"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Custom radio </h4>
                    <p class="f-m-light mt-1">
                       Use the <code>.form-check-input </code>and <code>.form-check-label </code>for radios.</p>
                  </div>
                  <div class="card-body">
                    <div class="row g-3">
                      <div class="col-xl-4 col-sm-6">
                        <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                          <h6 class="sub-title">Bordered Radio</h6>
                          <div class="form-check radio radio-secondary">
                            <input class="form-check-input" id="radio22" type="radio" name="radio1" value="option1" checked="">
                            <label class="form-check-label" for="radio22">Koho Theme </label>
                          </div>
                          <div class="form-check radio radio-success">
                            <input class="form-check-input" id="radio55" type="radio" name="radio1" value="option1">
                            <label class="form-check-label" for="radio55">Roxo Theme </label>
                          </div>
                          <div class="form-check radio radio-warning">
                            <input class="form-check-input" id="radio33" type="radio" name="radio1" value="option1">
                            <label class="form-check-label" for="radio33">Voxo Theme </label>
                          </div>
                          <div class="form-check radio radio-info">
                            <input class="form-check-input" id="radio66" type="radio" name="radio1" value="option1">
                            <label class="form-check-label" for="radio66">Zeta Theme</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-sm-12 order-xl-0 order-sm-1">
                        <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                          <h6 class="sub-title">Icons Radio</h6>
                          <div class="form-check radio radio-primary ps-0">
                            <ul class="radio-wrapper">
                              <li> 
                                <input class="form-check-input" id="radio-icon" type="radio" name="radio2" value="option2">
                                <label class="form-check-label" for="radio-icon"><i class="fa fa-sliders"></i><span>Sliders</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input" id="radio-icon4" type="radio" name="radio2" value="option2" checked="">
                                <label class="form-check-label" for="radio-icon4"><i class="fa fa-eye-slash"></i><span>Hidden</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input" id="radio-icon5" type="radio" name="radio2" value="option2">
                                <label class="form-check-label" for="radio-icon5"><i class="fa fa-folder-open"></i><span>Folder</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input" id="radio-icon7" type="radio" name="radio2" value="option2">
                                <label class="form-check-label" for="radio-icon7"><i class="fa fa-paper-plane"></i><span>Send</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input" id="radio-icon8" type="radio" name="radio2" value="option2">
                                <label class="form-check-label" for="radio-icon8"><i class="fa fa-user"></i><span>Users</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input" id="radio-icon9" type="radio" name="radio2" value="option2">
                                <label class="form-check-label" for="radio-icon9"><i class="fa fa-trash-o"></i><span>Trash</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input" id="radio-icon10" type="radio" name="radio2" value="option2">
                                <label class="form-check-label" for="radio-icon10"><i class="fa fa-github"></i><span>github</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input" id="radio-icon11" type="radio" name="radio2" value="option2">
                                <label class="form-check-label" for="radio-icon11"><i class="fa fa-play-circle"></i><span>Play</span></label>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-sm-6">
                        <div class="card-wrapper border rounded-3 fill-radios h-100 checkbox-checked">
                          <h6 class="sub-title">Filled Radio</h6>
                          <div class="form-check radio radio-primary">
                            <input class="form-check-input" id="radio111" type="radio" name="radio3" value="option1" checked="">
                            <label class="form-check-label" for="radio111">Product</label>
                          </div>
                          <div class="form-check radio radio-warning">
                            <input class="form-check-input" id="radio333" type="radio" name="radio3" value="option3">
                            <label class="form-check-label" for="radio333">Order history </label>
                          </div>
                          <div class="form-check radio radio-danger">
                            <input class="form-check-input" id="radio444" type="radio" name="radio3" value="option3">
                            <label class="form-check-label" for="radio444">Invoice </label>
                          </div>
                          <div class="form-check radio radio-info">
                            <input class="form-check-input" id="radio666" type="radio" name="radio3" value="option3">
                            <label class="form-check-label" for="radio666">Wishlist</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Default switches</h4>
                    <p class="f-m-light mt-1">
                       Use the <code>.form-switch</code> and <code>.form-check-label </code>for switches.</p>
                  </div>
                  <div class="card-body">
                    <div class="row g-3">
                      <div class="col-md-6 col-xl-4">
                        <div class="card-wrapper border rounded-3 rtl-input checkbox-checked">
                          <h6 class="sub-title">Custom Switches </h6>
                          <div class="form-check form-switch">
                            <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox" role="switch">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                          </div>
                          <div class="form-check form-switch">
                            <input class="form-check-input" id="flexSwitchCheckChecked" type="checkbox" role="switch" checked="">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl-4">
                        <div class="card-wrapper border rounded-3 rtl-input checkbox-checked">
                          <h6 class="sub-title">Disabled Switches</h6>
                          <div class="form-check form-switch">
                            <input class="form-check-input" id="flexSwitchCheckDisabled" type="checkbox" role="switch" disabled="">
                            <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                          </div>
                          <div class="form-check form-switch">
                            <input class="form-check-input" id="flexSwitchCheckCheckedDisabled" type="checkbox" role="switch" checked="" disabled="">
                            <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-xl-4">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                          <h6 class="sub-title">Right Switches </h6>
                          <div class="form-check form-switch form-check-reverse">
                            <input class="form-check-input ms-2" id="flexSwitchCheckReverse" type="checkbox">
                            <label class="form-check-label" for="flexSwitchCheckReverse">Reverse switch checkbox input</label>
                          </div>
                          <div class="form-check form-switch form-check-reverse">
                            <input class="form-check-input ms-2" id="flexSwitchCheckDisabled1" type="checkbox" role="switch" disabled="">
                            <label class="form-check-label" for="flexSwitchCheckDisabled1">Disabled switch checkbox input</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Inline input-types</h4>
                    <p class="f-m-light mt-1">
                       Group checkboxes or radios on the same horizontal row by adding <code>.form-check-inline </code>to any<code>.form-check</code>.</p>
                  </div>
                  <div class="card-body">
                    <div class="row g-3">
                      <div class="col-md-6 col-xl-4">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                          <h6 class="sub-title">Inline Checkbox</h6>
                          <div class="form-check-size rtl-input">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input me-2" id="inlineCheckbox1" type="checkbox" value="option1" checked="">
                              <label class="form-check-label" for="inlineCheckbox1">I</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input me-2" id="inlineCheckbox2" type="checkbox" value="option2">
                              <label class="form-check-label" for="inlineCheckbox2">II</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input me-2" id="inlineCheckbox3" type="checkbox" value="option3" disabled="">
                              <label class="form-check-label" for="inlineCheckbox3">III (disabled)</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl-4">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                          <h6 class="sub-title">Inline Radios</h6>
                          <div class="form-check-size rtl-input">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input me-2" id="inlineRadio1" type="radio" name="inlineRadioOptions" value="option1" checked="">
                              <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input me-2" id="inlineRadio2" type="radio" name="inlineRadioOptions" value="option2">
                              <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input me-2" id="inlineRadio3" type="radio" name="inlineRadioOptions" value="option3" disabled="">
                              <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-xl-4">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                          <h6 class="sub-title">Inline Switches</h6>
                          <div class="form-check-size">
                            <div class="form-check form-switch form-check-inline">
                              <input class="form-check-input check-size" id="flexSwitchCheckDefault2" type="checkbox" role="switch" checked="">
                            </div>
                            <div class="form-check form-switch form-check-inline">
                              <input class="form-check-input check-size" id="flexSwitchCheckDefault3" type="checkbox" role="switch">
                            </div>
                            <div class="form-check form-switch form-check-inline">
                              <input class="form-check-input check-size" id="flexSwitchCheckDisabled3" type="checkbox" role="switch" disabled="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-6">
                <div class="card height-equal">
                  <div class="card-header">
                    <h4>Animated buttons</h4>
                    <p class="f-m-light mt-1">
                       Use the <code>.radio_animated </code>through animated checkbox and radios.</p>
                  </div>
                  <div class="card-body">
                    <div class="row g-3">
                      <div class="col-sm-6">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                          <h6 class="sub-title">Select your payment method</h6>
                          <label class="d-block" for="edo-ani"></label>
                          <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani">Visa
                          <label class="d-block" for="edo-ani1"></label>
                          <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">MasterCard
                          <label class="d-block" for="edo-ani2"></label>
                          <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="">Paypal
                          <label class="d-block" for="edo-ani13"></label>
                          <input class="radio_animated" id="edo-ani13" type="radio" name="rdo-ani">G-pay 
                          <label class="d-block" for="edo-ani6"></label>
                          <input class="radio_animated" id="edo-ani6" type="radio" name="rdo-ani">Bitpay
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                          <h6 class="sub-title">What is your favorite social media? </h6>
                          <label class="d-block" for="chk-ani"></label>
                          <input class="checkbox_animated" id="chk-ani" type="checkbox">Instagram
                          <label class="d-block" for="chk-ani1"></label>
                          <input class="checkbox_animated" id="chk-ani1" type="checkbox">Facebook
                          <label class="d-block" for="chk-ani2"></label>
                          <input class="checkbox_animated" id="chk-ani2" type="checkbox" checked="">Whatsapp
                          <label class="d-block" for="chk-ani4"></label>
                          <input class="checkbox_animated" id="chk-ani4" type="checkbox">Twitter  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-6">
                <div class="card height-equal">
                  <div class="card-header">
                    <h4>Basic radio and checkbox</h4>
                    <p class="f-m-light mt-1">
                       Use the <code>.form-check-inline </code>through display inline.</p>
                  </div>
                  <div class="card-body">
                    <div class="row g-3">
                      <div class="col-md-12">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                          <h6 class="sub-title">Simple Checkbox</h6>
                          <div class="form-check-size">
                            <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
                              <input class="form-check-input" id="inline-1" type="checkbox">
                              <label class="form-check-label" for="inline-1">Blog</label>
                            </div>
                            <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
                              <input class="form-check-input" id="inline-2" type="checkbox" checked="">
                              <label class="form-check-label" for="inline-2">Gallery</label>
                            </div>
                            <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
                              <input class="form-check-input" id="inline-3" type="checkbox">
                              <label class="form-check-label" for="inline-3">Faq</label>
                            </div>
                            <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
                              <input class="form-check-input" id="inline-4" type="checkbox">
                              <label class="form-check-label" for="inline-4">Email</label>
                            </div>
                            <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
                              <input class="form-check-input" id="inline-5" type="checkbox">
                              <label class="form-check-label" for="inline-5">Icons</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                          <h6 class="sub-title">Simple Radios</h6>
                          <div class="form-check-size">
                            <div class="form-check form-check-inline radio radio-primary">
                              <input class="form-check-input" id="radioinline1" type="radio" name="radio5" value="option5" checked="">
                              <label class="form-check-label mb-0" for="radioinline1">Maps</label>
                            </div>
                            <div class="form-check form-check-inline radio radio-primary">
                              <input class="form-check-input" id="radioinline2" type="radio" name="radio5" value="option5">
                              <label class="form-check-label mb-0" for="radioinline2">Tasks</label>
                            </div>
                            <div class="form-check form-check-inline radio radio-primary">
                              <input class="form-check-input" id="radioinline3" type="radio" name="radio5" value="option5">
                              <label class="form-check-label mb-0" for="radioinline3">To-do</label>
                            </div>
                            <div class="form-check form-check-inline radio radio-primary">
                              <input class="form-check-input" id="radioinline4" type="radio" name="radio5" value="option5">
                              <label class="form-check-label mb-0" for="radioinline4">Forms</label>
                            </div>
                            <div class="form-check form-check-inline radio radio-primary">
                              <input class="form-check-input" id="radioinline5" type="radio" name="radio5" value="option5">
                              <label class="form-check-label mb-0" for="radioinline5">Login</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Radio toggle buttons</h4>
                    <p class="f-m-light mt-1">
                       The choice between these two approaches will depend on the type of toggle you are creating, and whether or not the toggle will make sense to users when announced as a checkbox or as an actual button. <code>[any one selected]</code>.</p>
                  </div>
                  <div class="card-body common-flex main-radio-toggle">
                    <input class="btn-check radio-light-secondary" id="option1" type="radio" name="options" checked="">
                    <label class="btn list-light-secondary" for="option1">Checked</label>
                    <input class="btn-check radio-light-secondary" id="option2" type="radio" name="options">
                    <label class="btn list-light-secondary" for="option2">Radio</label>
                    <input class="btn-check radio-light-secondary" id="option3" type="radio" name="options" disabled="">
                    <label class="btn list-light-secondary" for="option3">Disabled</label>
                    <input class="btn-check radio-light-secondary" id="option4" type="radio" name="options">
                    <label class="btn list-light-secondary" for="option4">Radio</label>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Outlined checkbox styles</h4>
                    <p class="f-m-light mt-1">
                       The choice between these two approaches will depend on the type of toggle you are creating, and whether or not the toggle will make sense to users when announced as a checkbox or as an actual button. <code>[multiple selected]</code>.</p>
                  </div>
                  <div class="card-body common-flex main-checkbox-toggle">
                    <input class="btn-check" id="btn-check-outlined" type="checkbox">
                    <label class="btn btn-outline-info" for="btn-check-outlined">Single toggle</label>
                    <input class="btn-check" id="btn-check-2-outlined" type="checkbox" checked="">
                    <label class="btn btn-outline-danger" for="btn-check-2-outlined">Checked</label>
                    <input class="btn-check" id="success-outlined" type="radio" name="options-outlined" checked="">
                    <label class="btn btn-outline-success" for="success-outlined">Checked success radio</label>
                    <input class="btn-check" id="danger-outlined" type="radio" name="options-outlined">
                    <label class="btn btn-outline-dark" for="danger-outlined">Dark radio</label>
                  </div>
                </div>
              </div>
              */?>
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

  <!-- Plugins JS start-->

  <script src="assets/js/editor/ckeditor/ckeditor.js"></script>
  <script src="assets/js/editor/ckeditor/adapters/jquery.js"></script>
  
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



    <script src="assets/js/editor/simple-mde/simplemde.min.js"></script>
    <script src="assets/js/editor/simple-mde/simplemde.custom.js"></script>
    <script src="assets/js/tooltip-init.js"></script>


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

  <!-- calendar js-->
  <script src="assets/js/dropzone/dropzone.js"></script>
  <script src="assets/js/dropzone/dropzone-script.js"></script>
  <script src="assets/js/select2/select2.full.min.js"></script>
  <script src="assets/js/select2/select2-custom.js"></script>
  <script src="assets/js/email-app.js"></script>
  <script src="assets/js/form-validation-custom.js"></script>
  <!-- Plugins JS Ends-->
  </body>
</html>