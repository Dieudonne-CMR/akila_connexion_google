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
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-picker.css">
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
    <div class="page-wrapper default-wrapper" id="pageWrapper">
      <div class="page-header row">
        <div class="header-logo-wrapper col-auto">
          <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="assets/images/logo/logo.png" alt=""/><img class="img-fluid for-dark" src="assets/images/logo/logo_light.png" alt=""/></a></div>
        </div>
        <div class="col-4 col-xl-4 page-title">
          <h4 class="f-w-700">Project Create</h4>
          <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
              <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">Apps</li>
              <li class="breadcrumb-item f-w-400 active">Project Create</li>
            </ol>
          </nav>
        </div>
        <!-- Page Header Start-->
        <?php include('includes/parts/header.php'); ?>
        <!-- Page Header Ends                              -->
      </div>
      <!-- Page Body Start-->
      <div class="page-body-wrapper default-menu default-menu">
        <!-- Page Sidebar Start-->
        <?php include('includes/parts/sidebar.php'); ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          <div class="container-fluid">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
               
                <div class="tab-content" id="top-tabContent">
                  <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                    <div class="row">
                      <?php /*
                      <div class="col-xxl-4 col-lg-4 col-md-6">
                        <div class="project-box b-light1-primary"><span class="badge badge-primary">Doing</span>
                          <h5 class="f-w-500">Endless admin Design</h5>
                          <div class="d-flex"><img class="img-20 me-1 rounded-circle" src="assets/images/user/3.jpg" alt="" data-original-title="" title="">
                            <div class="flex-grow-1">
                              <p>Themeforest, australia</p>
                            </div>
                          </div>
                          <p>Endless Admin is a full featured, multipurpose, premium bootstrap admin template.</p>
                         
                          <div class="project-status mt-4">
                            <div class="d-flex mb-0">
                              <p>70% </p>
                              <div class="flex-grow-1 text-end"><span>Done</span></div>
                            </div>
                            <div class="progress" style="height: 5px">
                              <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-xxl-4 col-lg-4 col-md-6">
                        <div class="project-box b-light1-secondary"><span class="badge badge-success">Done</span>
                          <h5 class="f-w-500">Universal admin Design</h5>
                          <div class="d-flex"><img class="img-20 me-1 rounded-circle" src="assets/images/user/3.jpg" alt="" data-original-title="" title="">
                            <div class="flex-grow-1">
                              <p>Envato, australia</p>
                            </div>
                          </div>
                          <p>Universal Admin is a full featured, multipurpose, premium bootstrap admin template.</p>
                         
                          <div class="project-status mt-4">
                            <div class="d-flex mb-0">
                              <p>100% </p>
                              <div class="flex-grow-1 text-end"><span>Done</span></div>
                            </div>
                            <div class="progress" style="height: 5px">
                              <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-xxl-4 col-lg-4 col-md-6">
                        <div class="project-box b-light1-success"><span class="badge badge-success">Done</span>
                          <h5 class="f-w-500">Poco admin Design</h5>
                          <div class="d-flex"><img class="img-20 me-1 rounded-circle" src="assets/images/user/3.jpg" alt="" data-original-title="" title="">
                            <div class="flex-grow-1">
                              <p>Envato, australia</p>
                            </div>
                          </div>
                          <p>Poco Admin is a full featured, multipurpose, premium bootstrap admin template.</p>
                          
                          <div class="project-status mt-4">
                            <div class="d-flex mb-0">
                              <p>100% </p>
                              <div class="flex-grow-1 text-end"><span>Done</span></div>
                            </div>
                            <div class="progress" style="height: 5px">
                              <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                        */?>
                    </div>
                  </div>
                </div> 

                <div class="card">
                  <div class="card-header">
                    <h4>Créez votre entreprises</h4>
                  </div>
                  <div class="card-body">
                    <div class="horizontal-wizard-wrapper vertical-options">
                      <div class="row g-3">
                        <div class="col-md-3 main-horizontal-header">
                          <div class="nav nav-pills horizontal-options" id="vertical-wizard-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="wizard-v-info-tab" data-bs-toggle="pill" href="#wizard-v-info" role="tab" aria-controls="wizard-v-info" aria-selected="true"> 
                              <div class="horizontal-wizard">
                                <div class="stroke-icon-wizard"><i class="fa fa-modx"></i></div>
                                <div class="horizontal-wizard-content"> 
                                  <h6>Informations</h6>
                                </div>
                              </div>
                            </a>

                           <?php /* <a class="nav-link" id="bank-v-wizard-tab" data-bs-toggle="pill" href="#bank-v-wizard" role="tab" aria-controls="bank-v-wizard" aria-selected="false" tabindex="-1"> 
                              <div class="horizontal-wizard">
                                <div class="stroke-icon-wizard"><i class="fa fa-chain-broken"></i></div>
                                <div class="horizontal-wizard-content"> 
                                  <h6>Connect bank account</h6>
                                </div>
                              </div>
                            </a>

                            <a class="nav-link" id="inquiry-v-wizard-tab" data-bs-toggle="pill" href="#inquiry-v-wizard" role="tab" aria-controls="inquiry-v-wizard" aria-selected="false" tabindex="-1">  
                              <div class="horizontal-wizard">
                                <div class="stroke-icon-wizard"><i class="fa fa-group"></i></div>
                                <div class="horizontal-wizard-content"> 
                                  <h6>Inquiries</h6>
                                </div>
                              </div>
                            </a>

                            <a class="nav-link" id="successful-v-wizard-tab" data-bs-toggle="pill" href="#successful-v-wizard" role="tab" aria-controls="successful-v-wizard" aria-selected="false" tabindex="-1"> 
                              <div class="horizontal-wizard">
                                <div class="stroke-icon-wizard"><i class="fa fa-group"></i></div>
                                <div class="horizontal-wizard-content"> 
                                  <h6>Completed </h6>
                                </div>
                              </div>
                            </a> */?>

                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="tab-content dark-field" id="vertical-wizard-tabContent">
                            <div class="tab-pane fade show active" id="wizard-v-info" role="tabpanel" aria-labelledby="wizard-v-info-tab">
                              <form class="row g-3 needs-validation" id="ajout_company"  novalidate="">
                                <div class="col-xxl-4 col-sm-6">
                                  <label class="form-label" for="validation-firstname-wizard">Nom de l'entreprise<span class="txt-danger">*</span></label>
                                  <input class="form-control" id="validation-firstname-wizard" type="text" name="nom_entreprise" placeholder="Enter first name" required="">
                                  
                                </div>
                                <input type="hidden" name='matricule_admin' value="<?= $matricule_ad ?>">
                                <div class="col-xxl-4 col-md-6">
                                  <label class="form-label" for="validation-email-wizard">Email de l'entreprise<span class="txt-danger">*</span></label>
                                  <input class="form-control" id="validation-email-wizard" type="email" name="email" required="" placeholder="cuba@example.com">
                              
                                </div>
                                <?php /*
                               

                                <div class="col-xxl-3 col-md-6">
                                  <label class="form-label" for="wizard-zipcode">Zip Code</label>
                                  <input class="form-control" id="wizard-zipcode" type="text" required="">
                                  <div class="invalid-feedback">Please provide a valid zip.</div>
                                </div>

                                */?>

                                <div class="col-xxl-4 col-md-6">
                                  <label class="form-label" for="contact-wizard">Numero de téléphone</label>
                                  <input class="form-control" id="contact-wizard" name="telephone" type="number" placeholder="Enter number" required="">
                                  
                                </div>

                                <div class="col-xxl-5 col-md-6">
                                  <label class="form-label" for="validation-states">Pays</label>
                                  <select class="form-select" name="pays" id="validation-states" required="">
                                    <option selected="" disabled="" value="">Choisir...</option>
                                    <?php foreach ($pays as $value) : ?>
                                      <option value="<?= @$value->id_pays ?>"><?= @$value->nom_fr ?></option>
                                    <?php endforeach; ?>
                                  
                                  </select>

                                </div> 

                                <div class="col-xxl-4 col-md-12">
                                  <label class="form-label" for="contact-wizard">Ville (Localisation)</label>
                                  <input class="form-control" id="contact-wizard" name="ville" type="text" placeholder="Enter number" required="">
                                  
                                </div>
                                <?php if($permission==2): ?>
                                  <div class="col-xxl-4 col-md-12">
                                    <label class="form-label" for="validation-states">Choisir un core</label>
                                      <select class="form-select" name="id_core" id="validation-states" required="">
                                        <option selected="" disabled="" value="">Choisir...</option>
                                        
                                          <option value="1" <?= (@$id_core == 1)? 'selected' :'' ?> >Core 1 </option>
                                          <option value="2" <?= (@$id_core == 2)? 'selected' :'' ?> >Core 2 </option>
                                          <option value="3" <?= (@$id_core == 3)? 'selected' :'' ?> >Core 3 </option>
                                          <?php /*<option value="4" <?= (@$id_core == 4)? 'selected' :'' ?> >Core 4 </option>
                                          <option value="5" <?= (@$id_core == 5)? 'selected' :'' ?> >Core 5 </option> */?>
                                          <option value="6" <?= (@$id_core == 6)? 'selected' :'' ?> >Core 6 </option>
                                         <?php /* <option value="7" <?= (@$id_core == 7)? 'selected' :'' ?> >Core 7 </option> */?>
                                          <option value="8" <?= (@$id_core == 8)? 'selected' :'' ?> >Core 8 </option>
                                          <?php /*<option value="9" <?= (@$id_core == 9)? 'selected' :'' ?> >Core 9 </option> */?>
                                          <option value="10" <?= (@$id_core == 10)? 'selected' :'' ?> >Core 10 </option>
                                          <option value="12" <?= (@$id_core == 12)? 'selected' :'' ?> >Core 12 (E-Commerce) </option>
                                          
                                      </select>
                                  </div>
                                <?php endif ?>

                                <?php /*<div class="col-12">
                                  <div class="form-check">
                                    <input class="form-check-input" id="validation-check-wizard" type="checkbox" value="" required="">
                                    <label class="form-check-label mb-0 d-block" for="validation-check-wizard">Agree to terms and conditions</label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                  </div>
                                </div> */?>
                                <div class="col-12 text-end">
                                  <button class="btn btn-primary">Continue</button>
                                </div>
                              </form>
                            </div>

                            <div class="tab-pane fade" id="bank-v-wizard" role="tabpanel" aria-labelledby="bank-v-wizard-tab">
                              <form class="row g-3 needs-validation" novalidate="">
                                <div class="col-md-6 bank-search">
                                  <label class="form-label" for="aadhar-number-wizard1">Aadhaar Number<span class="txt-danger">*</span></label>
                                  <input class="form-control" id="aadhar-number-wizard1" type="Search" placeholder="xxxx xxxx xxxx xxxx" required="">
                                  <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-6 bank-search">
                                  <label class="form-label" for="pan-wizard-1">PAN<span class="txt-danger">*</span></label>
                                  <input class="form-control" id="pan-wizard-1" type="Search" placeholder="xxxxxxxxxx" required="">
                                  <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-12"> 
                                  <h6>Choose from these popular banks</h6>
                                  <div class="bank-selection">
                                    <div class="form-check radio radio-primary ps-0">
                                      <ul class="radio-wrapper">
                                        <li> 
                                          <input class="form-check-input" id="abc-bank" type="radio" name="radio2" value="option2">
                                          <label class="form-check-label" for="abc-bank"><img src="assets/images/forms/hdfc.png" alt="HDFC"><span>ABC BANK</span></label>
                                        </li>
                                        <li> 
                                          <input class="form-check-input" id="xyz-bank" type="radio" name="radio2" value="option2" checked="">
                                          <label class="form-check-label" for="xyz-bank"><img src="assets/images/forms/Bank-of-Baroda.png" alt="Bank-of-Baroda"><span>XYZ BANK</span></label>
                                        </li>
                                        <li> 
                                          <input class="form-check-input" id="pqr-bank" type="radio" name="radio2" value="option2">
                                          <label class="form-check-label" for="pqr-bank"><img src="assets/images/forms/idbi.png" alt="IDBI"><span>PQR BANK</span></label>
                                        </li>
                                        <li> 
                                          <input class="form-check-input" id="def-bank" type="radio" name="radio2" value="option2">
                                          <label class="form-check-label" for="def-bank"><img src="assets/images/forms/rbl.png" alt="RBL"><span>DEF BANK</span></label>
                                        </li>
                                        <li> 
                                          <input class="form-check-input" id="mno-bank" type="radio" name="radio2" value="option2">
                                          <label class="form-check-label" for="mno-bank"><img src="assets/images/forms/us-bank.png" alt="US"><span>MNO BANK</span></label>
                                        </li>
                                        <li> 
                                          <input class="form-check-input" id="wxy-bank" type="radio" name="radio2" value="option2">
                                          <label class="form-check-label" for="wxy-bank"><img src="assets/images/forms/axis.png" alt="Axis"><span>WXY BANK</span></label>
                                        </li>
                                        <li> 
                                          <input class="form-check-input" id="std-bank" type="radio" name="radio2" value="option2">
                                          <label class="form-check-label" for="std-bank"><img src="assets/images/forms/SCB.png" alt="SCB"><span>STD BANK</span></label>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 text-end"> 
                                  <button class="btn btn-primary">Previous</button>
                                  <button class="btn btn-primary">Continue</button>
                                </div>
                              </form>
                            </div>

                            <div class="tab-pane fade" id="inquiry-v-wizard" role="tabpanel" aria-labelledby="inquiry-v-wizard-tab">
                              <form class="row g-3 needs-validation" novalidate="">
                                <div class="col-12 inquiries-form">
                                  <div class="row"> 
                                    <div class="col-md-6">
                                      <p class="f-w-500">Select the option how you want to receive important notifications.</p>
                                      <div class="choose-option">
                                        <div class="form-check radio radio-primary">
                                          <input class="form-check-input me-2" id="radioSelect1" type="radio" name="inlineRadioOptions" value="option1">
                                          <label class="form-check-label" for="radioSelect1">Featured Items</label>
                                        </div>
                                        <div class="form-check radio radio-primary">
                                          <input class="form-check-input me-2" id="radioSelect2" type="radio" name="inlineRadioOptions" value="option2">
                                          <label class="form-check-label" for="radioSelect2">Newsletters</label>
                                        </div>
                                        <div class="form-check radio radio-primary">
                                          <input class="form-check-input me-2" id="radioSelect3" type="radio" name="inlineRadioOptions" value="option3">
                                          <label class="form-check-label" for="radioSelect3">Notifications</label>
                                        </div>
                                        <div class="form-check radio radio-primary">
                                          <input class="form-check-input me-2" id="radioSelect4" type="radio" name="inlineRadioOptions" value="option3">
                                          <label class="form-check-label" for="radioSelect4">Blogs</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6"> 
                                      <div class="row g-3"> 
                                        <div class="col-12">
                                          <label class="form-label">Email<span class="txt-danger">*</span></label>
                                          <input class="form-control" type="text" placeholder="org@support.com" required="required">
                                        </div>
                                        <div class="col-12">
                                          <label class="form-label" for="customContact">Contact Number</label>
                                          <input class="form-control" id="customContact" type="number" placeholder="Enter number" required="">
                                          <div class="valid-feedback">Looks good!</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12"> 
                                  <label class="form-label f-w-500" for="formControlTextareaWizard">If no, could you please describe?</label>
                                  <textarea class="form-control" id="formControlTextareaWizard" rows="3"></textarea>
                                </div>
                                <div class="col-12 text-end"> 
                                  <button class="btn btn-primary">Previous</button>
                                  <button class="btn btn-primary">Continue </button>
                                </div>
                              </form>
                            </div>

                            <div class="tab-pane fade" id="successful-v-wizard" role="tabpanel" aria-labelledby="successful-v-wizard-tab">
                              <div class="form-completed"><img src="assets/images/gif/dashboard-8/successful.gif" alt="successful">
                                <h6>Successfully Completed </h6>
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
    <script src="assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="assets/js/dropzone/dropzone.js"></script>
    <script src="assets/js/dropzone/dropzone-script.js"></script>
    <script src="assets/js/typeahead/handlebars.js"></script>
    <script src="assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="assets/js/typeahead/typeahead.custom.js"></script>
    <script src="assets/js/typeahead-search/handlebars.js"></script>
    <script src="assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->


  <script>

$(document).ready(function() {
    $('#ajout_company').submit(function(e) {
        e.preventDefault(); // Empêche le rechargement de la page

        var $form = $(this);
        var data = $form.serialize(); // Sérialise les données du formulaire
        var url = 'processings/ajout_company.php'; // URL du script PHP

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
                    text: 'Inscription réussie !',
                }).then(() => {
                    window.location.href = '@add-post';
                });
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
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