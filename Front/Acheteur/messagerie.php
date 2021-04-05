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
    </div>

    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<!-- choose what kind of message to see -->
<div class="container">
    <div class="redirection_messagerie w-100">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <a type="button" href="messagerie_offer.php#here" class="texte_style centrer text-uppercase btn_redirection_messagerie bg_blue1">Offer</a>
            </div>
            <div class="col-4"></div>
        </div>
        
        <div class="row mt-5">
            <div class="col-4"></div>
            <div class="col-4">
            <a type="button" href="messagerie_bid.php#here" class="texte_style centrer text-uppercase btn_redirection_messagerie bg_blue1">Bid</a>
            </div>
            <div class="col-4"></div>
        </div>
        
    </div>
</div>


<?php
    }
}
    include("footer.php");
?>