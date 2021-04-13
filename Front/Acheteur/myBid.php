<?php
    $title="Accueil";
    require "head.php";
    include("../../Bdd/cnx.php");
    $email_user = $_SESSION['email'];
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

<!-- row to see the success or not -->
<div class="container">
    <div class="row" style="margin-top:120px">
        <div class="col-12 centrer">
            <?php if($state == "in progress"){?>
                <h4 class="info_msg_bid texte_style">Wait until the end</h4>
                <img class="rounded-circle shadow-lg" src="../../Image/past_bid.gif" alt="past_bid">
            <?php } elseif($state == "Winner"){?>
                <h4 class="info_msg_bid texte_style" id="win_bid">You Win</h4>
                <img class="rounded-circle shadow-lg" src="../../Image/win_bid.gif" alt="past_bid">
            <?php 

                $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE (email='$email_user' or lastname='$email_user')");

                if($row = mysqli_fetch_assoc($queryBuyer)){
                    $id_buyer = $row['id_buyer'];
                    $queryMoney = mysqli_query($con, "SELECT money FROM payment WHERE id_buyer='$id_buyer'");

                    if($rowMoney = mysqli_fetch_assoc($queryMoney)){
                        $money = $rowMoney['money'];
                        $myNewMoney = $money-$price_user;

                        $queryMoney = mysqli_query($con, "UPDATE payment SET money='$myNewMoney' WHERE id_buyer='$id_buyer'");                    
                    }
                }

            } elseif($state == "Loser"){?>
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