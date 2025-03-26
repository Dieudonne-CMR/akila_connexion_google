<!-- fonction  -->
<script type="text/javascript">
    // Fonction JavaScript pour afficher un avertissement de confirmation
    function confirmDelete(id) {
        if (confirm("Êtes-vous sûr de vouloir supprimer ce Service ?")) {
            // Si l'utilisateur confirme, soumettre le formulaire pour la suppression
            document.getElementById('deleteForm-' + id).submit();
        }
    }
</script>
<?php function div_service($formation){ ; $service_entreprise=$formation?>
    <?php global $chin_service; ?>
    <div class="card-body mt-3 pb-0">
    <div class="details-bookmark text-center">
        <div class="row" id="bookmarkData">
            <?php foreach ($service_entreprise as $value) : ?>
                <?php
                if (!empty($value->matricule_service)) {
                    $id_ser = $value->matricule_service;
                } else {
                    $id_ser = $value->id;
                }
                ?>
              
                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4 col-sm-6 box-col-3">
                    <div class="card card-with-border bookmark-card o-hidden">
                        <div class="details-website"><img class="img-fluid" style="height: 12rem;" src="<?= affichage_img($chin_service, $value->image) ?>" alt="">
                            <div class="favourite-icon favourite_0" onclick="setFavourite(0)"><a href="#"><i class="fa fa-star"></i></a></div>
                            <div class="desciption-data">
                                <div class="title-bookmark">
                                    <h5 class="title_0"><?= $value->nom ?></h5>
                                    <p class="weburl_0"><?= strTextLent(strip_tags($value->description), 80) ?></p>
                                    <div class="hover-block">
                                        <ul>
                                            <li><a href="@service/<?= $value->id ?>"><i data-feather="edit-2"></i></a></li>
                                            <li><a href="#"><i data-feather="link"></i></a></li>
                                            <li><a href="#"><i data-feather="share-2"></i></a></li>
                                            <li><a href="#"><i data-feather="trash-2"></i></a></li>
                                            <li class="pull-right text-end"><a href="#"><i data-feather="tag"></i></a></li>
                                            <li><a href="#"><i data-eye="trash-2"></i>(<?= nbre_vues_service($id_ser) ?>)Vues</a></li>
                                        </ul>
                                    </div>
                                    <div class="content-general">
                                        <!-- <p class="desc_0"> is beautifully crafted, clean and modern designed admin theme with 6 different demos and light - dark versions.</p><span class="collection_0">General</span> -->
                                    </div>
                                </div>
                            </div>
                            <?php /* <div class="content-general">
                                            <span class="collection_0 mb-2"> (<?= nbre_vues_service($id_ser) ?>)Vues</span> <span><a href="@service/<?= $value->id ?>" class="btn btn-success"><span>Modifier</span> </a></span>

                                          </div> */ ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php }?>
<!-- fin fonction -->

<?php if ($id_core==7):?>

    <?php if(!empty($formation1)): ?>
        <h2>Formations continues</h2>
        <?php  div_service($formation1) ?>
    <?php endif ?>

    <?php if(!empty($formation2)): ?>
        <h2>Formations métiers  </h2>
        <?php  div_service($formation2) ?>
    <?php endif ?>

    <?php if(!empty($formation3)): ?>
        <h2>Accompagnement</h2>
        <?php  div_service($formation3) ?>
    <?php endif ?>

    <?php if(!empty($formation4)): ?>
        <h2>Etudes/Audits</h2>
        <?php  div_service($formation4) ?>
    <?php endif ?>


    <?php if(!empty($formation5)): ?>
        <h2>Lois et règlementations </h2>
        <?php  div_service($formation5) ?>
    <?php endif ?>

    <?php if(!empty($formation6)): ?>
        <h2>Documentation technique </h2>
        <?php  div_service($formation6) ?>
    <?php endif ?>

<?php else: ?>
    <div class="card-body pb-0">
    <div class="details-bookmark text-center">
        <div class="row" id="bookmarkData">
            <?php foreach ($service_entreprise as $value) : ?>
                <?php
                if (!empty($value->matricule_service)) {
                    $id_ser = $value->matricule_service;
                } else {
                    $id_ser = $value->id;
                }
                ?>
                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4 col-sm-6 box-col-3">
                    <div class="card card-with-border bookmark-card o-hidden">
                        <div class="details-website"><img class="img-fluid" style="height: 12rem;" src="<?= affichage_img($chin_service, $value->image) ?>" alt="">
                            <div class="favourite-icon favourite_0" onclick="setFavourite(0)"><a href="#"><i class="fa fa-star"></i></a></div>
                            <div class="desciption-data">
                                <div class="title-bookmark">
                                    <h5 class="title_0"><?= $value->nom ?></h5>
                                    <p class="weburl_0"><?= strTextLent(strip_tags($value->description), 80) ?></p>
                                    <div class="hover-block">
                                        <ul>
                                            <li><a href="@service/<?= $value->id ?>"><i data-feather="edit-2"></i></a></li>
                                            <li><a href="#"><i data-feather="link"></i></a></li>
                                            <li><a href="#"><i data-feather="share-2"></i></a></li>
                                            <li> <form action="supprime_service" id="deleteForm-<?=$value->id?>" method="post"> <input type="hidden" name="id_ser" value="<?=$value->id?>"> <button style="border: none;" type="button" onclick="confirmDelete(<?=$value->id?>)"> Sup </button></form></li>
                                            <li class="pull-right text-end"><a href="#"><i data-feather="tag"></i></a></li>
                                            <li><a href="#"><i data-eye="trash-2"></i>(<?= nbre_vues_service($id_ser) ?>)Vues</a></li>
                                        </ul>
                                    </div>
                                    <div class="content-general">
                                        <!-- <p class="desc_0"> is beautifully crafted, clean and modern designed admin theme with 6 different demos and light - dark versions.</p><span class="collection_0">General</span> -->
                                    </div>
                                </div>
                            </div>
                            <?php /* <div class="content-general">
                                            <span class="collection_0 mb-2"> (<?= nbre_vues_service($id_ser) ?>)Vues</span> <span><a href="@service/<?= $value->id ?>" class="btn btn-success"><span>Modifier</span> </a></span>

                                          </div> */ ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif ?>