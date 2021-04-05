<?php
    $title="Accueil";
    require "head.php";

    $email_user = $_SESSION['email'];
    
    $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE (email='$email_user' or lastname='$email_user')");
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
        Messaging
        </p>
        <p class="info_general_listeArticle centrer detail_style">
            You have <?php echo $total ?> message
        </p>
    </div>

    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x" id="here"></div>
</div>

<div class="vetement_details" id="">
    <div class="navbar_vetement">
            <ul class="navbar_listeVendeur_details detail_style centrer">
                <li><a href="messagerie_offer.php#here" class="badge text-uppercase bg_blue1 text-light">Offer</a> </li>
                <li><a href="messagerie_bid.php#here" class="text-uppercase">Bid</a></li>
            </ul>
    </div>
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

<!-- row to see my offer -->
<div class="row" style="margin-top:120px">

    <div class="col-2"></div>

    <div class="col-3">
        <img class="img_enchere" src="<?php echo $photo ?>" alt="chaussure">
    </div>

    <div class="col-5 enchere_liste_details position-relative">
        <div class="enchere_info_titre texte_style text-uppercase"><?php echo $name ?></div>
        <div class="enchere_info_marque detail_style text-uppercase"><?php echo $category ?> - <?php echo $subcategory ?></div>
        <br>
        <div class="info_description_inde"><?php echo $description ?></div>
        <hr>
        <div class="row">
            <div class="col-md-2">
                <h4 class="texte_style text-uppercase"><?php echo $price_offered ?> €</h4>
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
                <a type="button" href="../../Bdd/delete.php?iditemoffer=<?= $id_item; ?>" class="btn btn-outline-danger f_right" name="deleteItem"><i class="fas fa-times"></i></a>
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