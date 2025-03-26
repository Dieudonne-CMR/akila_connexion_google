<div class="card-body badge-spacing">
    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalgetbootstrap" data-whatever="@getbootstrap">+ Ajouter une nouvelle Catégorie</button>
    <div class="modal fade" id="exampleModalgetbootstrap" tabindex="-1" role="dialog" aria-labelledby="exampleModalgetbootstrap" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
                    <h4 class="modal-header justify-content-center border-0 text-dark">Ajouter une nouvelle Categorie</h4>
                    <div class="modal-body">
                        <form action="ajoute_categorie" method="post">
                            <div class="mb-3 row">
                                <div class="col-12">
                                    <label for="validationCustom01">Ajouter une Nouvelle Catégorie :</label>
                                    <?= isset($_SESSION["repose"]) ? $_SESSION["repose"] : '';
                                    unset($_SESSION["repose"]) ?>
                                    <input class="form-control mb-2 col-3" id="validationCustom01" name="nom" type="text" placeholder="Ajouter une Categorie">
                                    <input class="btn btn-primary" id="validationCustom01" name="submit" type="submit" value="ajouter">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>