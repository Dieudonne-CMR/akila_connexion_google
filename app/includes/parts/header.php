<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="header-wrapper col m-0">
    <div class="row">
        <form class="form-inline search-full col" action="#" method="get">
        <div class="form-group w-100">
            <div class="Typeahead Typeahead--twitterUsers">
            <div class="u-posRelative">
                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Mofi .." name="q" title="" autofocus>
                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
            </div>
            <div class="Typeahead-menu"></div>
            </div>
        </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="assets/images/logo/logo.png" alt=""></a></div>
        <div class="toggle-sidebar">
            <svg class="stroke-icon sidebar-toggle status_toggle middle">
            <use href="assets/svg/icon-sprite.svg#toggle-icon"></use>
            </svg>
        </div>
        </div>
        <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
        <ul class="nav-menus">
            <li>                         <span class="header-search">
                <svg>
                <use href="assets/svg/icon-sprite.svg#search"></use>
                </svg></span></li>
            <li>
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative d-flex align-items-center">
                    <svg class="search-bg svg-color"> 
                    <use href="assets/svg/icon-sprite.svg#search"></use>
                    </svg>
                    <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Boho .." name="q" title="">
                </div>
                </div>
            </div>
            </li>
            <?php 
            if(!empty($notif)):
            foreach($notif as $keys=>$value) :?>
                    <?php 
                       
                        $date = new DateTime($value->date);
                        $aujourdhui = new DateTime($now);
                        $interval = $aujourdhui->diff($date);
                        if ($interval->days == 0) {
                            $i =$keys+1; 
                        };
                        ?>
            <?php endforeach ;
            endif;
            
            ?>

            <li class="onhover-dropdown">
            <div class="notification-box">
                <svg>
                <use href="assets/svg/icon-sprite.svg#notification"></use>
                </svg><span class="badge rounded-pill badge-primary"><?= @$i ?> </span>
            </div>
            <div class="onhover-show-div notification-dropdown">
                <h5 class="f-18 f-w-600 mb-0 dropdown-title">Notifications                            </h5>
                <ul class="notification-box">
                
                <?php  
                    if(!empty($notif)):
                    foreach($notif as $keys=>$value) :?>
                        <?php if($keys<=2): ?>
                        <?php 
                            $mat_ad=$value->matricule_admin ;
                            $nom_user= @info_admin($mat_ad)[0]->nom.' '.@info_admin($mat_ad)[0]->prenom;
                            $date = new DateTime($value->date);
                            $aujourdhui = new DateTime($now);
                            $interval = $aujourdhui->diff($date);
                       
                    ?>
                <li class="d-flex"> 
                    <div class="flex-shrink-0 bg-light-primary"><img src="assets/images/dashboard/icon/wallet.png" alt="Wallet"></div>
                    <div class="flex-grow-1"> 
                         
                        <h6><?= nubre_de_jour($interval) ?></h6>
                    <p><?= $value->message ?> par <b><?= $nom_user ?></b></p>
                    </div>
                </li>
                <?php
                else:
                    break;
                endif;
                ?>

                <?php endforeach;  endif; ?>
                <?php /*
                <li class="d-flex"> 
                    <div class="flex-shrink-0 bg-light-info"><img src="assets/images/dashboard/icon/shield-dne.png" alt="Shield-dne"></div>
                    <div class="flex-grow-1"> <a href="private-chat.html">
                        <h6>Product Evaluation</h6></a>
                    <p>Changed to a new workflow</p>
                    </div>
                </li>
                <li class="d-flex"> 
                    <div class="flex-shrink-0 bg-light-warning"><img src="assets/images/dashboard/icon/graph.png" alt="Graph"></div>
                    <div class="flex-grow-1"> <a href="private-chat.html">
                        <h6>Return of a Product</h6></a>
                    <p>452 items were returned</p>
                    </div>
                </li>
                <li class="d-flex"> 
                    <div class="flex-shrink-0 bg-light-tertiary"><img src="assets/images/dashboard/icon/ticket-star.png" alt="Ticket-star"></div>
                    <div class="flex-grow-1"> <a href="private-chat.html">
                        <h6>Recently Paid</h6></a>
                    <p>Mastercard payment of $343</p>
                    </div>
                </li>
                */?>

               <?php /* <li><a class="f-w-700" href="private-chat.html">Check all     </a></li> */?>
                </ul>
            </div>
            </li>
            <li class="onhover-dropdown">
            <svg>
                <use href="assets/svg/icon-sprite.svg#header-bookmark"></use>
            </svg>
            <div class="onhover-show-div bookmark-flip">
                <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="front">
                    <h5 class="f-18 f-w-600 mb-0 dropdown-title">Options</h5>
                    <ul class="bookmark-dropdown">
                        <li>
                        <div class="row">
                            <div class="col-4 text-center">
                            <?php if (isset($permalien) and $onsite != 0) : ?>
                                <?php 
                                    if (isset($nom_domaine) and @$nom_domaine == 'NULL' or @$nom_domaine == '') :
                                        $url = "https://akila.blog/$permalien-b";
                                    // 	$url="http://localhost/akila.blog/$permalien-b";
                                    else :
                                        $url = $nom_domaine;
                                    endif; 
                                    ?>
                                <div class="bookmark-content">
                                    <a href="<?=$url ?>" target="_blank"> <div class="bookmark-icon bg-light-primary"><i class="stroke-primary" data-feather="file-text"></i></div> <span class="font-primary">Voir le site</span>
                                    </a>
                                </div>
                            <?php endif ?>
                            </div>
                            <div class="col-4 text-center">
                            <div class="bookmark-content">
                                <a href="@reglage">
                                    <?php /*<div class="bookmark-icon bg-light-secondary"><i class="stroke-secondary" data-feather="user"></i></div><span class="font-secondary">Profile</span> */?>
                                    <div class="bookmark-icon bg-light-secondary"><i data-feather="settings" data-feather="user" class="stroke-secondary"></i></div><span class="font-secondary">Géglage</span>
                                </a>
                            </div>
                            </div>
                            <?php if ($supadmin == "oui") : ?>
                                <?php if ($permission == 2): ?>
                                <div class="col-4 text-center">
                                    <div class="bookmark-content">
                                        <a href="entreprises">
                                            <div class="bookmark-icon bg-light-warning"><i class="stroke-warning" data-feather="server"></i></div><span class="font-warning">(<?= sizeof($entreprises) ?>) Sites</span>
                                        </a>
                                    </div>
                                </div>
                            <?php else: ?>
                            <div class="col-4 text-center">
                                <div class="bookmark-content">
                                <a href="entreprises">
                                    <div class="bookmark-icon bg-light-warning"><i class="stroke-warning" data-feather="server"></i></div><span class="font-warning">(<?= sizeof($entreprises) + sizeof($data1) ?>) Sites</span>
                                </a>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php endif; ?>

                        </div>
                        </li>
                        <?php /*<li class="text-center"><a class="flip-btn f-w-700" id="flip-btn" href="javascript:void(0)">Add New Bookmark</a></li> */?>
                    </ul>
                    </div>
                    <div class="back">
                    <ul>
                        <li>
                        <div class="bookmark-dropdown flip-back-content">
                            <input type="text" placeholder="search...">
                        </div>
                        </li>
                        <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            </li>
            <li>
            <div class="mode">
                <svg>
                <use href="assets/svg/icon-sprite.svg#moon"></use>
                </svg>
            </div>
            </li>
            <?php /*
            <li class="onhover-dropdown">
            <div class="notification-box">
                <svg>
                <use href="assets/svg/icon-sprite.svg#header-message"></use>
                </svg><span class="badge rounded-pill badge-info">3 </span>
            </div>
            <div class="onhover-show-div notification-dropdown">
                <h5 class="f-18 f-w-600 mb-0 dropdown-title">Messages             </h5>
                <ul class="messages">
                <li class="d-flex b-light1-primary gap-2"> 
                    <div class="flex-shrink-0"><img src="assets/images/dashboard-2/user/1.png" alt="Graph"></div>
                    <div class="flex-grow-1"> <a href="private-chat.html">
                        <h6 class="font-primary f-w-600">Hackett Yessenia</h6></a>
                    <p>Hello Miss...&#128522;</p>
                    </div><span>10 min.</span>
                </li>
                <li class="d-flex b-light1-secondary gap-2"> 
                    <div class="flex-shrink-0"><img src="assets/images/dashboard-2/user/2.png" alt="Graph"></div>
                    <div class="flex-grow-1"> <a href="private-chat.html">
                        <h6 class="font-secondary f-w-600">schneider Adan</h6></a>
                    <p>Wishing You a Happy Birthday Dear..  🥳&#127882;</p>
                    </div><span>25 min.</span>
                </li>
                <li class="d-flex b-light1-success gap-2"> 
                    <div class="flex-shrink-0"><img src="assets/images/dashboard-2/user/3.png" alt="Graph"></div>
                    <div class="flex-grow-1"> <a href="private-chat.html">
                        <h6 class="font-success f-w-600">Mahdi Gholizadeh</h6></a>
                    <p>Hello Dear!! This Theme Is Very beautiful</p>
                    </div><span>1 hours</span>
                </li>
                <li><a class="f-w-700" href="email-application.html">Check all</a></li>
                </ul>
            </div>
        </li>
        */?>
        <?php /*
            <li class="cart-nav onhover-dropdown">
            <div class="cart-box">
                <svg>
                <use href="assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                </svg>
            </div>
            <div class="cart-dropdown onhover-show-div">
                <h5 class="f-18 f-w-600 mb-0 dropdown-title">Cart</h5>
                <ul>
                <li>
                    <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60" src="assets/images/other-images/cart-img.jpg" alt="">
                    <div class="flex-grow-1"><span class="f-w-600">Furniture Chair for Home</span>
                        <div class="qty-box">
                        <div class="input-group"><span class="input-group-prepend">
                            <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">-</button></span>
                            <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                            <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                        </div>
                        </div>
                        <h6 class="font-primary">$500</h6>
                    </div>
                    <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                    </div>
                </li>
                <li>
                    <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60" src="assets/images/other-images/table-img.jpg" alt="">
                    <div class="flex-grow-1"><span class="f-w-600">Furniture Table for Office</span>
                        <div class="qty-box">
                        <div class="input-group"><span class="input-group-prepend">
                            <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">-</button></span>
                            <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                            <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                        </div>
                        </div>
                        <h6 class="font-primary">$500.00</h6>
                    </div>
                    <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                    </div>
                </li>
                <li class="total">
                    <h6 class="mb-0">Order Total : <span class="f-w-600 f-right">$1000.00</span></h6>
                </li>
                <li class="text-center"><a class="d-block mb-3 view-cart f-w-700" href="cart.html">Go to your cart</a><a class="btn btn-primary view-checkout" href="checkout.html">Checkout</a></li>
                </ul>
            </div>
        </li>
            */?>
            <li class="profile-nav onhover-dropdown px-0 py-0">
            <div class="d-flex profile-media align-items-center"><img class="img-30" style="border-radius: 50%;" src=" <?php if (!empty($profile_profile)) {
								echo $chemin_profile . $profile_profile;
							} else {
								echo "assets/images/dashboard/profile.png";
							} ?>" alt="">
                <div class="flex-grow-1"><span><?= $profile_nom.' '.$profile_prenom ?></span>
               <?php /* <p class="mb-0 font-outfit">Admin<i class="fa fa-angle-down"></i></p> */?>
                </div>
            </div>
            <ul class="profile-dropdown onhover-show-div">
                <li><a href="javacript:void(0)"><i data-feather="user"></i><span>Compte </span></a></li>
                <?php /*<li><a href="letter-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li> */?>
                <?php if ($supadmin == "oui") : ?>
                    <?php if (!isset($permalien)) : ?>
                    <li><a href="@reglage"><i data-feather="settings"></i><span>Réglage</span></a></li>
                    <?php endif; ?>
                <?php endif; ?>
                <li><a href="deconnexion/a"><i data-feather="log-in"> </i><span>Sortir </span></a></li>
            </ul>
            </li>
        </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
        <div class="ProfileCard u-cf">                        
        <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
        <div class="ProfileCard-details">
        <div class="ProfileCard-realName">{{name}}</div>
        </div>
        </div>
        </script>
        <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
    </div>
</div>