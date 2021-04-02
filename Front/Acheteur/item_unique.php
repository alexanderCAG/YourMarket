<?php
    $title="Accueil";
    require "head.php";
    include("../../Bdd/cnx.php");
    $iditem=$_GET['iditem'];

    $queryItem = mysqli_query($con, "SELECT price,name,category,subcategory,quantity,description,photo,is_negotiated, is_buying FROM item WHERE id_item='$iditem'");

?>

<div class="row" style="margin-top:120px">
<?php

    if($rowItem = mysqli_fetch_assoc($queryItem)){
        $nameCadre = $rowItem['name'];
        $prixCadre = $rowItem['price'];
        $categoryCadre = $rowItem['category'];
        $quantityCadre = $rowItem['quantity'];
        $descriptionCadre = $rowItem['description'];
        $subcategory = $rowItem['subcategory'];
        $photo = $rowItem['photo'];
        $is_negotiated = $rowItem['is_negotiated'];
        $is_buying = $rowItem['is_buying'];
                    ?>
    
    <div class="col-2"></div>
    <div class="col-3">
        <img class="img_enchere" src="../../Image/chaussure.png" alt="chaussure">
    </div>

    <div class="col-5 enchere_liste_details position-relative">
        <div class="enchere_info_titre texte_style text-uppercase"><?php echo $nameCadre ?></div>
        <div class="enchere_info_marque detail_style text-uppercase"><?php echo $categoryCadre ?> - <?php echo $subcategory ?></div>
        <br>
        <div class="info_description_inde"><?php echo $descriptionCadre ?></div>
        <hr>
        <div class="row">
            <div class="col-3"></div>

            <div class="col-6">
                <?php if($is_negotiated == 1 && $quantityCadre != 0 ){ ?>
                    <button type="button" class="btn btn-outline-success"> <i class="far fa-handshake"></i><small> Negociate</small></button>
                <?php } ?>

                <?php if($is_buying == 1 && $quantityCadre != 0 ){ ?>
                    <a href="../../Bdd/panier.php?iditem=<?php echo $iditem ?>" type="button" class="btn btn-dark f_right"> <i class="fas fa-shopping-cart"></i>&nbsp;<small>Add to cart </small></a>
                <?php } ?>

                <?php  if($quantityCadre == 0 ){?>
                    <div class="bg-danger text-light w-100 text-center">Indisponible</div>
                <?php }?>
                
            </div>

            <div class="col-3"></div>

        </div>
    
        <div class="col-1"></div>
    </div>

    <div class="col-2"></div>
</div>



<?php
    }
    include("footer.php");
?>