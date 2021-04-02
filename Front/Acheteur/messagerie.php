<?php
    $title="Accueil";
    require "head.php";

    $email_user = $_SESSION['email'];
    
    $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE email='$email_user'");
    if($row = mysqli_fetch_assoc($queryBuyer)){
        $id_buyer = $row['id_buyer'];
        $queryOffer = mysqli_query($con, "SELECT id_offer,id_item, id_seller, id_buyer, price_offered, quantity, nb_nego, status FROM offer WHERE id_buyer='$id_buyer'");
        $queryCountItems = mysqli_query($con, "select count(id_offer) as total from offer where id_buyer='$id_buyer'");
        $queryItem = mysqli_query($con, "SELECT name,price,description,photo,category,subcategory FROM item,offer WHERE item.id_item=offer.id_item AND id_buyer = '$id_buyer'");

?>


<?php

if($row = mysqli_fetch_assoc($queryCountItems)){
            $total = $row['total'];
?>
<div class="genale_page_enchere position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_enchere text-uppercase">
            Messagerie
        </p>
        <p class="info_general_listeArticle centrer detail_style">
            Vous avez <?php echo $total ?> articles
        </p>
    </div>

    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<?php
    for ($i=0; $i<=$total;$i++){
        if($rowAllItemyOffer = mysqli_fetch_assoc($queryOffer)){
            $id_offer = $rowAllItemyOffer['id_offer'];
            $id_item = $rowAllItemyOffer['id_item'];
            $id_seller = $rowAllItemyOffer['id_seller'];
            $id_buyer = $rowAllItemyOffer['id_buyer'];
            $price_offered = $rowAllItemyOffer['price_offered'];
            $quantity = $rowAllItemyOffer['quantity'];
            $nb_nego = $rowAllItemyOffer['nb_nego'];
            $status = $rowAllItemyOffer['status'];
                if($row2 = mysqli_fetch_assoc($queryItem)){
                    $name = $row2['name'];
                    $price = $row2['price'];
                    $description = $row2['description'];
                    $photo = $row2['photo'];
                    $category = $row2['category'];
                    $subcategory = $row2['subcategory'];
            
?>
<div class="row" style="margin-top:120px">

    <div class="col-2"></div>

    <div class="col-3">
        <img class="img_enchere" src="../../Image/chaussure.png" alt="chaussure">
    </div>

    <div class="col-5 enchere_liste_details position-relative">
        <div class="enchere_info_titre texte_style text-uppercase"><?php echo $name ?></div>
        <div class="enchere_info_marque detail_style text-uppercase"><?php echo $category ?> - <?php echo $subcategory ?></div>
        <br>
        <div class="info_description_inde"><?php echo $description ?></div>
        <hr>
        <div class="row">
            <div class="col-md-2">
                <h4 class="texte_style text-uppercase"><?php echo $price ?> €</h4>
            </div>

            <div class="col-md-3">
                <div class="input-group mb-3">
                    <input type="number" class="form-control w-100" value="<?php echo $quantity ?>" style="pointer-events: none;">
                </div>
            </div>

            <div class="col-md-6">
                <a type="button" href="myOffer.php?idoffer=<?= $id_offer ?>" class="btn text-light bg_blue1 w-100">MY OFFER <i class="fas fa-handshake"></i></a>
            </div>
            
            <div class="col-md-1">
                <a type="button" href="../../Bdd/delete.php?idoffer=<?= $id_item; ?>" class="btn btn-outline-danger f_right" name="deleteItem"><i class="fas fa-times"></i></a>
            </div>

        </div>
    
        <div class="col-1"></div>
    </div>

    <div class="col-2"></div>
</div>

<?php
                }
            }
        }
    }
}
    include("footer.php");
?>