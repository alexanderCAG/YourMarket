<?php
    $title="Accueil";
    require "head.php";
    // $email_user = $_SESSION['email'];
    include("../../Bdd/cnx.php");
    $idBid=$_GET['idBid'];
    $_SESSION['id_bid']=$idBid;
    // $_SESSION['id_offer']=$idoffer;

    $queryBid = mysqli_query($con, "SELECT id_bid, id_item, id_buyer, id_seller, state, price_user FROM bid WHERE id_bid='$idBid'");


?>

<?php
        if($rowAllItemyBid = mysqli_fetch_assoc($queryBid)){
            $id_bid = $rowAllItemyBid['id_bid'];
            $id_item = $rowAllItemyBid['id_item'];
            $id_seller = $rowAllItemyBid['id_seller'];
            $id_buyer = $rowAllItemyBid['id_buyer'];
            $state = $rowAllItemyBid['state'];
            $price_user = $rowAllItemyBid['price_user'];
            
            ?>

<div class="container">
    <div class="row" style="margin-top:120px">
        <div class="col-12 centrer">
            <?php if($state == "en cours"){?>
                <h4 class="info_msg_bid texte_style">Wait until the end</h4>
                <img class="rounded-circle shadow-lg" src="../../Image/past_bid.gif" alt="past_bid">
            <?php } elseif($state == "Winner"){?>
                <h4 class="info_msg_bid texte_style" id="win_bid">You Win</h4>
                <img class="rounded-circle shadow-lg" src="../../Image/win_bid.gif" alt="past_bid">
            <?php } elseif($state == "Loser"){?>
                <h4 class="info_msg_bid texte_style">You Lose</h4>
                <img class="rounded-circle shadow-lg" src="../../Image/lose_bid.gif" alt="past_bid">
            <?php }?>
        </div>
    </div>
</div>

<?php 
    }
include("footer.php"); 
?>