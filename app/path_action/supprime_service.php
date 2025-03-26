
<?php
// var_dump($_POST);

if(isset($_POST['id_ser']) and !empty($_POST['id_ser'])):
    $id= strip_tags($_POST['id_ser']);

    //=== supprimer image du service
    $recu_img=$Register->query("SELECT image FROM service WHERE id='$id' LIMIT 1 ");
    //   var_dump($recu_img[0]->image);
        if(!empty($recu_img[0]->image)){
        unlink($chin_service_a. $recu_img[0]->image); //----permet de supprimer limage dans le dossier des $chin_service_a
        }
    //=== supprimer le service.
    supprimer_data('service','id',$id);

    header("location: services");
    else:
        header("location: home");
endif;