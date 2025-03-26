<?php 
//=== nouveaux 02/07/202
if($permission != 2): 
    require("pages/home2.php");
endif;
//=== nouveaux 02/07/2024

?>

<html lang="en">

<head>
    <?php $nom_de_page = "Donnez du site d'actualité"; ?>
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
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/datatables.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body class="light">

    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-up">
            <polyline points="17 11 12 6 7 11"></polyline>
            <polyline points="17 18 12 13 7 18"></polyline>
        </svg></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper null compact-wrapper" id="pageWrapper">
        <div class="page-header row">
            <div class="header-logo-wrapper col-auto">
                <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="assets/images/logo/logo_light.png" alt=""></a></div>
            </div>
            <div class="col-4 col-xl-4 page-title">
                <h4 class="f-w-700">  <?= $nom_entreprise ?></h4>
                <nav>
                    <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg></a></li>
                        <li class="breadcrumb-item f-w-400">Home</li>
                        <li class="breadcrumb-item f-w-400 active"><?= $nom_de_page ?></li>
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
                                <div class="card-header card-no-border pb-0">
                                    <h4>Les données de magazine</h4><span>retrouvez toutes les informations d'akila actu</span>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6 box-col-6 ">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Visiteurs du jour</span>
                                                            <h3 class="total-num counter"><?= !empty($recup_visite_magasin) ? $recup_visite_magasin : '0' ?> </h3>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="text-end">
                                                            <i class="fa fa-spin fa-refresh"></i>
                                                            <?php /*
                                                                <ul>
                                                                    <li>Profit<span class="product-stts txt-success ms-2">8989<i class="icon-angle-up f-12 ms-1"></i></span></li>
                                                                    <li>Loss<span class="product-stts txt-danger ms-2">2560<i class="icon-angle-down f-12 ms-1"></i></span></li>
                                                                </ul>
                                                                */?>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    <div class="progress-showcase mt-4">
                                                        <div class="progress sm-progress-bar">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-4 col-sm-6 box-col-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Visiteurs global</span>
                                                            <h3 class="total-num counter"><?= $recup_visite_magasin_all ?></h3>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="text-end">
                                                            <i class="fa fa-spin fa-spinner"></i>
                                                            <?php /*
                                                                <ul>
                                                                    <li>Profit<span class="product-stts txt-success ms-2">8989<i class="icon-angle-up f-12 ms-1"></i></span></li>
                                                                    <li>Loss<span class="product-stts txt-danger ms-2">2560<i class="icon-angle-down f-12 ms-1"></i></span></li>
                                                                </ul>
                                                                */?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-showcase mt-4">
                                                        <div class="progress sm-progress-bar">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-sm-6 box-col-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Nombre d'entreprise </span>
                                                            <h3 class="total-num counter"><?= sizeof($entreprises) ?></h3>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="text-end">
                                                            <i class="fa fa-spin fa-circle-o-notch"></i>
                                                                <?php /*
                                                                <ul>
                                                                    <li>Profit<span class="product-stts txt-success ms-2">8989<i class="icon-angle-up f-12 ms-1"></i></span></li>
                                                                    <li>Loss<span class="product-stts txt-danger ms-2">2560<i class="icon-angle-down f-12 ms-1"></i></span></li>
                                                                </ul>
                                                                */?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-showcase mt-4">
                                                        <div class="progress sm-progress-bar">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-sm-6 box-col-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Articles disponibles</span>
                                                            <h3 class="total-num counter"><?= sizeof($all_blog) ?></h3>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="text-end">
                                                            <i class="fa fa-spin fa-spinner"></i>
                                                                <?php /*
                                                                <ul>
                                                                    <li>Profit<span class="product-stts txt-success ms-2">8989<i class="icon-angle-up f-12 ms-1"></i></span></li>
                                                                    <li>Loss<span class="product-stts txt-danger ms-2">2560<i class="icon-angle-down f-12 ms-1"></i></span></li>
                                                                </ul>
                                                                */?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-showcase mt-4">
                                                        <div class="progress sm-progress-bar">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-sm-6 box-col-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Services disponibles</span>
                                                            <h3 class="total-num counter"><?= sizeof($service) ?></h3>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="text-end">
                                                                <ul>
                                                                <i class="fa fa-cube" width="50"></i>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-showcase mt-4">
                                                        <div class="progress sm-progress-bar">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-sm-6 box-col-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Nombre de reservations</span>
                                                            <h3 class="total-num counter"><?= sizeof($reservation_service) ?></h3>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="text-end">
                                                               <img src="https://cdn-icons-png.flaticon.com/128/16492/16492405.png" width="50" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-showcase mt-4">
                                                        <div class="progress sm-progress-bar">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-sm-6 box-col-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Membres</span>
                                                            <h3 class="total-num counter"><?= sizeof($admin) ?></h3>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="text-end">
                                                            <i class="fa fa-users"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-showcase mt-4">
                                                        <div class="progress sm-progress-bar">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-sm-6 box-col-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Annonces</span>
                                                            <h3 class="total-num counter"><?= sizeof($annonces) ?></h3>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="text-end">
                                                                <ul>
                                                                <i class="fa fa-spin fa-refresh"></i>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-showcase mt-4">
                                                        <div class="progress sm-progress-bar">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive theme-scrollbar">
                                        <div id="basic-6_wrapper" class="dataTables_wrapper">
                                           <?php /* <div class="dataTables_length" id="basic-6_length"><label>Show <select name="basic-6_length" aria-controls="basic-6" class="">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                                </select> entries</label>
                                            </div> <div id="basic-6_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="basic-6"></label></div> */?>
                                            
                                            <table class="display dataTable" id="basic-6" role="grid" aria-describedby="basic-6_info" style="width: 905px;">
                                                <thead>
                                                    <tr role="row">
                                                        <th rowspan="2" class="sorting_asc" tabindex="0" aria-controls="basic-6" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 133px;">Entreprise</th>
                                                        <th colspan="2" rowspan="1"><a href="active/<?= $matricule_akila_blog ?>" class="btn btn-success">Vue global</a></th>
                                                        <?php /*<th colspan="4" rowspan="1">Contact</th> */?>
                                                    </tr>
                                                    <tr role="row">
                                                        <th class="sorting" tabindex="0" aria-controls="basic-6" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 46px;">Domaine</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-6" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 66px;">Date_de_création</th>

                                                         <th class="sorting" tabindex="0" aria-controls="basic-6" rowspan="1" colspan="1" aria-label="Skill: activate to sort column ascending" style="width: 32px;">Se_connecter</th>
                                                        
                                                         <th class="sorting" tabindex="0" aria-controls="basic-6" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 37px;">Magazine</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-6" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending" style="width: 165px;">Page_404</th>  
                                                        <th class="sorting" tabindex="0" aria-controls="basic-6" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending" style="width: 165px;">Site_Web</th>  
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach($entreprises as $value):  ?>
                                                        <tr role="row" class="odd">

                                                            <td class="sorting_1">
                                                                <div class="d-flex"><img class="rounded-circle img-30 me-3" src="<?= $chin_logo_a . $value->logo ?>" style="width: 5rem; border-radius: 50%;"alt="Generic placeholder image">
                                                                    <div class="flex-grow-1 align-self-center">
                                                                        <div><?= $value->nom_entreprise ?></div>
                                                                    </div>
                                                                </div>
                                                            </td>

                                            

                                                            <td><?= !empty($value->nom_domaine)?$value->nom_domaine: 'Null' ?></td>
                                                            <td> <?= $value->date_at ?></td>
                                                            <td> <a href="active/<?= $value->matricule_entreprise ?>" class="btn btn-success">Entrer</a></td>

                                                            <?php 
                                                                if($value->page404 =='non'):
                                                                    $class='btn-success';
                                                                    $val='oui';
                                                                    $bouton='Non';
                                                                else:
                                                                    $class='btn-danger';
                                                                    $bouton='Oui';
                                                                    $val='non';
                                                                endif;

                                                                if($value->site_actu =='1'):
                                                                    $classM='btn-success';
                                                                    $valM='0';
                                                                    $boutonM='Oui';
                                                                else:
                                                                    $classM='btn-danger';
                                                                    $valM='1';
                                                                    $boutonM='Non';
                                                                endif;
                                                            ?>
                                                            
                                                            <td>
                                                            <form action="option_global" method="post"> 
                                                                <input type="hidden" name="mat_entreprise" value='<?= $value->matricule_entreprise ?>' > 
                                                                <input type="hidden" name="site_actu" value='<?= $valM?>' > 
                                                                <button type="submit" name="submt_global" value="submit" class="btn <?= $classM?>"><?= $boutonM?></button>
                                                            </form>

                                                            <td> <form action="option_global" method="post"> 
                                                                <input type="hidden" name="mat_entreprise" value='<?= $value->matricule_entreprise ?>' > 
                                                                <input type="hidden" name="page404" value='<?= $val?>' > 
                                                                <button type="submit" name="submt_global" value="submit" class="btn <?= $class?>"><?= $bouton?></button>
                                                            </form></td>
                                                            <?php 
                                                                if($value->onsite==1):
                                                                    $classO='btn-success';
                                                                    $valO='0';
                                                                    $boutonO='Oui';
                                                                else:
                                                                    $classO='btn-danger';
                                                                    $boutonO='Nom';
                                                                    $valO='1';
                                                                endif;
                                                            ?>

                                                            <td> <form action="option_global" method="post"> 
                                                                <input type="hidden" name="mat_entreprise" value='<?= $value->matricule_entreprise ?>' > 
                                                                <input type="hidden" name="onsite" value='<?= $valO?>' > 
                                                                <button type="submit" name="submt_global" value="submit" class="btn <?= $classO?>"><?= $boutonO?></button>
                                                            </form></td>
                                                            
                                                            <?php /*<td>a.satou@datatables.net</td> */?>
                                                        </tr>
                                                    <?php endforeach ?>
                                                    
                                                    <?php /*
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">
                                                            <div class="d-flex"><img class="rounded-circle img-30 me-3" src="assets/images/user/3.png" alt="Generic placeholder image">
                                                                <div class="flex-grow-1 align-self-center">
                                                                    <div>Ashton Cox</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Junior Technical Author</td>
                                                        <td>$86,000</td>
                                                        <td>San Francisco</td>
                                                        <td>
                                                            <div class="progress-showcase">
                                                                <div class="progress sm-progress-bar">
                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>1562</td>
                                                        <td>a.cox@datatables.net</td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">
                                                            <div class="d-flex"><img class="rounded-circle img-30 me-3" src="assets/images/user/7.jpg" alt="Generic placeholder image">
                                                                <div class="flex-grow-1 align-self-center">
                                                                    <div>Bradley Greer</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Software Engineer</td>
                                                        <td>$132,000</td>
                                                        <td>London</td>
                                                        <td>
                                                            <div class="progress-showcase">
                                                                <div class="progress sm-progress-bar">
                                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>2558</td>
                                                        <td>b.greer@datatables.net</td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">
                                                            <div class="d-flex"><img class="rounded-circle img-30 me-3" src="assets/images/user/6.jpg" alt="Generic placeholder image">
                                                                <div class="flex-grow-1 align-self-center">
                                                                    <div>Brielle Williamson</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Integration Specialist</td>
                                                        <td>$372,000</td>
                                                        <td>New York</td>
                                                        <td>
                                                            <div class="progress-showcase">
                                                                <div class="progress sm-progress-bar">
                                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 55%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>4804</td>
                                                        <td>b.williamson@datatables.net</td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">
                                                            <div class="d-flex"><img class="rounded-circle img-30 me-3" src="assets/images/user/11.png" alt="Generic placeholder image">
                                                                <div class="flex-grow-1 align-self-center">
                                                                    <div>Caesar Vance</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Pre-Sales Support</td>
                                                        <td>$106,450</td>
                                                        <td>New York</td>
                                                        <td>
                                                            <div class="progress-showcase">
                                                                <div class="progress sm-progress-bar">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>8330</td>
                                                        <td>c.vance@datatables.net</td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">
                                                            <div class="d-flex"><img class="rounded-circle img-30 me-3" src="assets/images/user/4.jpg" alt="Generic placeholder image">
                                                                <div class="flex-grow-1 align-self-center">
                                                                    <div>Cedric Kelly</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$433,060</td>
                                                        <td>Edinburgh</td>
                                                        <td>
                                                            <div class="progress-showcase">
                                                                <div class="progress sm-progress-bar">
                                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>6224</td>
                                                        <td>c.kelly@datatables.net</td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">
                                                            <div class="d-flex"><img class="rounded-circle img-30 me-3" src="assets/images/user/1.jpg" alt="Generic placeholder image">
                                                                <div class="flex-grow-1 align-self-center">
                                                                    <div>Charde Marshall</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Regional Director</td>
                                                        <td>$470,600</td>
                                                        <td>San Francisco</td>
                                                        <td>
                                                            <div class="progress-showcase">
                                                                <div class="progress sm-progress-bar">
                                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>6741</td>
                                                        <td>c.marshall@datatables.net</td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">
                                                            <div class="d-flex"><img class="rounded-circle img-30 me-3" src="assets/images/user/9.jpg" alt="Generic placeholder image">
                                                                <div class="flex-grow-1 align-self-center">
                                                                    <div>Colleen Hurst</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Javascript Developer</td>
                                                        <td>$205,500</td>
                                                        <td>San Francisco</td>
                                                        <td>
                                                            <div class="progress-showcase">
                                                                <div class="progress sm-progress-bar">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 24%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>2360</td>
                                                        <td>c.hurst@datatables.net</td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">
                                                            <div class="d-flex"><img class="rounded-circle img-30 me-3" src="assets/images/user/8.jpg" alt="Generic placeholder image">
                                                                <div class="flex-grow-1 align-self-center">
                                                                    <div>Dai Rios</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Personnel Lead</td>
                                                        <td>$217,500</td>
                                                        <td>Edinburgh</td>
                                                        <td>
                                                            <div class="progress-showcase">
                                                                <div class="progress sm-progress-bar">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>2290</td>
                                                        <td>d.rios@datatables.net</td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">
                                                            <div class="d-flex"><img class="rounded-circle img-30 me-3" src="assets/images/user/2.png" alt="Generic placeholder image">
                                                                <div class="flex-grow-1 align-self-center">
                                                                    <div>Garrett Winters</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Accountant</td>
                                                        <td>$170,750</td>
                                                        <td>Tokyo</td>
                                                        <td>
                                                            <div class="progress-showcase">
                                                                <div class="progress sm-progress-bar">
                                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 40%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>8422</td>
                                                        <td>g.winters@datatables.net</td>
                                                    </tr> */?>

                                                </tbody>

                                                <tfoot>
                                                <?php /* <tr>
                                                        <th rowspan="1" colspan="1">Name</th>
                                                        <th rowspan="1" colspan="1">Position</th>
                                                        <th rowspan="1" colspan="1">Salary</th>
                                                        <th rowspan="1" colspan="1">Office</th>
                                                        <th rowspan="1" colspan="1">Skill</th>
                                                        <th rowspan="1" colspan="1">Extn.</th>
                                                        <th rowspan="1" colspan="1">E-mail</th>
                                                    </tr> */?>
                                                </tfoot>
                                            </table>

                                            <?php /*<div class="dataTables_info" id="basic-6_info" role="status" aria-live="polite">Showing 1 to 10 of 23 entries</div> 
                                            <div class="dataTables_paginate paging_simple_numbers" id="basic-6_paginate"><a class="paginate_button previous disabled" aria-controls="basic-6" data-dt-idx="0" tabindex="0" id="basic-6_previous">Previous</a><span><a class="paginate_button current" aria-controls="basic-6" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="basic-6" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="basic-6" data-dt-idx="3" tabindex="0">3</a></span><a class="paginate_button next" aria-controls="basic-6" data-dt-idx="4" tabindex="0" id="basic-6_next">Next</a></div> */?>
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
    <script src="assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="assets/js/counter/jquery.counterup.min.js"></script>
    <script src="assets/js/counter/counter-custom.js"></script>
    <!-- calendar js-->
    <script src="assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/support-ticket-custom.js"></script>
    <script src="assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <div class="customizer-links">
        <div class="nav flex-column nac-pills" id="c-pills-tab" role="tablist" aria-orientation="vertical"><a class="nav-link" id="c-pills-layouts-tab" data-bs-toggle="pill" href="#c-pills-layouts" role="tab" aria-controls="c-pills-layouts" aria-selected="true" data-original-title=""><span>Check layouts</span></a> <a class="nav-link" id="c-pills-home-tab" data-bs-toggle="pill" href="#c-pills-home" role="tab" aria-controls="c-pills-home" aria-selected="true" data-original-title="">
                <div class="settings"><img src="assets/images/customizer/color.png" alt=""></div><span>Quick option</span>
            </a> <a class="nav-link" target="_blank" href="https://support.pixelstrap.com/" data-original-title="">
                <div><img src="assets/images/customizer/support.png" alt=""></div><span>Support</span>
            </a> <a class="nav-link" target="_blank" href="https://docs.pixelstrap.net/mofi/document/" data-original-title="">
                <div><img src="assets/images/customizer/setting.png" alt=""></div><span>Document</span>
            </a> <a class="nav-link" target="_blank" href="landing-page.html" data-original-title="">
                <div><img src="assets/images/customizer/features.png" alt=""></div><span>Check features</span>
            </a> <a class="nav-link" target="_blank" href="https://themeforest.net/user/pixelstrap/portfolio" data-original-title="">
                <div><img src="assets/images/customizer/document.png" alt=""></div><span>Buy now</span>
            </a></div>
    </div>
    <div class="customizer-contain">
        <div class="tab-content" id="c-pills-tabContent">
            <div class="customizer-header"><i class="icofont-close icon-close"></i>
                <h5 class="f-w-700">Preview Settings</h5>
                <p class="mb-0">Try It Real Time <i class="fa fa-thumbs-o-up txt-primary"></i></p>
            </div>
            <div class="customizer-body custom-scrollbar">
                <div class="tab-pane fade show active" id="c-pills-home" role="tabpanel" aria-labelledby="c-pills-home-tab">
                    <h5>Layout Type</h5>
                    <ul class="main-layout layout-grid">
                        <li data-attr="ltr" class="active">
                            <div class="header bg-light">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="bg-light sidebar"></li>
                                    <li class="bg-light body"><span class="badge badge-primary">LTR</span></li>
                                </ul>
                            </div>
                        </li>
                        <li data-attr="rtl">
                            <div class="header bg-light">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="bg-light body me-1"><span class="badge badge-primary">RTL</span></li>
                                    <li class="bg-light sidebar"></li>
                                </ul>
                            </div>
                        </li>
                        <li data-attr="ltr" class="box-layout px-3">
                            <div class="header bg-light">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="bg-light sidebar"></li>
                                    <li class="bg-light body"><span class="badge badge-primary">Box</span></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <h5>Sidebar Type</h5>
                    <ul class="sidebar-type layout-grid">
                        <li data-attr="normal-sidebar">
                            <div class="header bg-light">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="bg-dark sidebar"></li>
                                    <li class="bg-light body"></li>
                                </ul>
                            </div>
                        </li>
                        <li data-attr="compact-sidebar">
                            <div class="header bg-light">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="bg-dark sidebar compact"></li>
                                    <li class="bg-light body"></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <h5>Sidebar Icon</h5>
                    <ul class="sidebar-setting layout-grid">
                        <li class="active" data-attr="stroke-svg">
                            <div class="header bg-light">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body bg-light"><span class="badge badge-primary">Stroke</span></div>
                        </li>
                        <li data-attr="fill-svg">
                            <div class="header bg-light">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body bg-light"><span class="badge badge-primary">Fill</span></div>
                        </li>
                    </ul>
                    <h5>Unlimited Color</h5>
                    <ul class="layout-grid unlimited-color-layout"><input id="ColorPicker1" type="color" value="#7A70BA" name="Background"><input id="ColorPicker2" type="color" value="#48A3D7" name="Background"><button type="button" class="color-apply-btn btn btn-primary color-apply-btn">Apply</button></ul>
                    <h5>Light layout</h5>
                    <ul class="layout-grid customizer-color">
                        <li class="color-layout" data-attr="color-1" data-primary="#7A70BA" data-secondary="#48A3D7">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-2" data-primary="#88967e" data-secondary="#29353a">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-3" data-primary="#c6164f" data-secondary="#372363">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-4" data-primary="#4b232d" data-secondary="#8e6343">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-5" data-primary="#007a91" data-secondary="#534686">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-6" data-primary="#56409f" data-secondary="#21637f">
                            <div></div>
                        </li>
                    </ul>
                    <h5>Dark Layout</h5>
                    <ul class="layout-grid customizer-color dark">
                        <li class="color-layout" data-attr="color-1" data-primary="#7A70BA" data-secondary="#48A3D7">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-2" data-primary="#88967e" data-secondary="#29353a">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-3" data-primary="#c6164f" data-secondary="#372363">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-4" data-primary="#4b232d" data-secondary="#8e6343">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-5" data-primary="#007a91" data-secondary="#534686">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-6" data-primary="#56409f" data-secondary="#21637f">
                            <div></div>
                        </li>
                    </ul>
                    <h5>Mix Layout</h5>
                    <ul class="layout-grid customizer-mix">
                        <li class="color-layout" data-attr="dark-sidebar">
                            <div class="header bg-light">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="bg-dark sidebar"></li>
                                    <li class="bg-light body"></li>
                                </ul>
                            </div>
                        </li>
                        <li class="color-layout" data-attr="dark-only">
                            <div class="header bg-dark">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="bg-dark sidebar"></li>
                                    <li class="bg-dark body"></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="c-pills-layouts" role="tabpanel" aria-labelledby="c-pills-layouts-tab"></div>
            </div>
        </div>
    </div>
    <!-- Plugin used-->

</body>

</html>