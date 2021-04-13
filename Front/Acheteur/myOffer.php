<?php
    $title="Accueil";
    require "head.php";
    include("../../Bdd/cnx.php");
    // session_start();
    $email_user = $_SESSION['email'];
    $idoffer=$_GET['idoffer'];
    $_SESSION['id_offer']=$idoffer;
    // $_SESSION['id_offer']=$idoffer;

    $queryOffer = mysqli_query($con, "SELECT id_offer,id_item, id_seller, id_buyer, price_offered, quantity, nb_nego, status FROM offer WHERE id_offer='$idoffer'");

?>

<?php
        if($rowAllItemyOffer = mysqli_fetch_assoc($queryOffer)){
            $id_offer = $rowAllItemyOffer['id_offer'];
            $id_item = $rowAllItemyOffer['id_item'];
            $id_seller = $rowAllItemyOffer['id_seller'];
            $id_buyer = $rowAllItemyOffer['id_buyer'];
            $price_offered = $rowAllItemyOffer['price_offered'];
            $quantity = $rowAllItemyOffer['quantity'];
            $nb_nego = $rowAllItemyOffer['nb_nego'];
            $status = $rowAllItemyOffer['status'];
            
            ?>

<!-- row to see the seller answer -->
<div class="messarie_detail_total">
    <img class="fond_discussion position-relative" src="../../Image/ecran_fondBlanc.png" alt="ecran_fondBlanc">
    <div id="messages" class="info_msg_haut">
    </div>

    <?php if($status !="Validate"){?>
    <div class="info_msg_bas">
        <div class="message_comptenu">
            <form action="" method="POST">
                <input type="text" id="quantite_nego" name="quantite_nego_message" class="quantite_nego_message" placeholder="Quantity" value="<?php echo $quantity ?>">
                <input type="text" id="prix_nego" name="prix_nego_message" class="prix_nego_message" value="<?php echo $price_offered ?>"><span style="font-size: 40px;">€</span>
                <button type="submit" name="submit_msg_acheteur" class="btn_submit_msg_acheteur f_right">Send</button>
                <input type="hidden" name="nb_nego" value="<?php echo $nb_nego ?>">
                <input type="hidden" name="id_offer" value="<?php echo $id_offer ?>">
            </form>
        </div>
    </div>
    <?php } elseif($status =="Validate"){

        $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE (email='$email_user' or lastname='$email_user')");

        if($row = mysqli_fetch_assoc($queryBuyer)){
            $id_buyer = $row['id_buyer'];
            $queryMoney = mysqli_query($con, "SELECT money FROM payment WHERE id_buyer='$id_buyer'");

            if($rowMoney = mysqli_fetch_assoc($queryMoney)){
                $money = $rowMoney['money'];
                $quantity=(int)$quantity;
                $myNewMoney = $money-($quantity*$price_offered);

                $queryMoney = mysqli_query($con, "UPDATE payment SET money='$myNewMoney' WHERE id_buyer='$id_buyer'");
                $queryDeleteOffer = mysqli_query($con, "DELETE FROM offer WHERE id_offer='$idoffer'");
            
            }
        }

    } ?>
    
</div>


<!-- repup et envoie dans msg v2 a essayer -->
<?php
        
include("../../Bdd/cnx.php");

if(isset($_POST['submit_msg_acheteur'])){
    $quantite_nego_message = htmlspecialchars($_POST['quantite_nego_message']);
    $prix_nego_message = nl2br(htmlspecialchars($_POST['prix_nego_message']));
    $nb_nego=$nb_nego+1;

    
    // echo "<script language='javascript' type='text/javascript'> alert('$idoffer'); </script>";
    if($nb_nego<=5){
        $query = mysqli_query($con, "UPDATE offer SET price_offered='$prix_nego_message',quantity='$quantite_nego_message',nb_nego='$nb_nego',status='in progress' WHERE id_offer='$idoffer'");
    }
    
    echo "<script language='javascript' type='text/javascript'> location.href='messagerie.php' </script>";
}

?>

<script>
    setInterval('load_message()',500);

    function load_message(){
        $('#messages').load('../../Bdd/msg.php');
    }
</script>



<?php 
    }

include("footer.php"); ?>