<?php
    $title="Accueil";
    require "head.php";
    // $email_user = $_SESSION['email'];
    include("../../Bdd/cnx.php");
    $idoffer=$_GET['idoffer'];

    $_SESSION['id_offer']=$idoffer;

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

<div class="messarie_detail_total">
    <img class="fond_discussion position-relative" src="../../Image/ecran_fondBlanc.png" alt="ecran_fondBlanc">
    <div id="messages" class="info_msg_haut">
        <p class="satut_nego_msg texte_style"><?php echo $status ?></p>
    </div>

    <div class="info_msg_bas">
        <div class="message_comptenu">
            <form action="../../Bdd/msg.php" method="POST">
                <input type="text" id="quantite_nego" name="quantite_nego_message" class="quantite_nego_message" placeholder="Quantité" value="<?php echo $quantity ?>">
                <input type="text" id="prix_nego" name="prix_nego_message" class="prix_nego_message" value="<?php echo $price_offered ?>"><span style="font-size: 40px;">€</span>
                <button type="submit" name="submit_msg_acheteur" class="btn_submit_msg_acheteur f_right">Send</button>
                <input type="hidden" name="nb_nego" value="<?php echo $nb_nego ?>">
                <input type="hidden" name="id_offer" value="<?php echo $id_offer ?>">
            </form>
        </div>
    </div>
    
    
</div>


<!-- repup et envoie dans msg v2 a essayer -->
<!-- <?php
        
include("../../Bdd/cnx.php");

if(isset($_POST[submit_msg_acheteur])){
    $quantite_nego_message = htmlspecialchars($_POST['quantite_nego_message']);
    $prix_nego_message = nl2br(htmlspecialchars($_POST['prix_nego_message']));
    $nb_nego=$nb_nego+1;

    if($nb_nego<=5){
        $query = mysqli_query($con, "UPDATE offer SET price_offered='$prix_nego_message',quantity='$quantite_nego_message',nb_nego='$nb_nego',status='en cours' WHERE id_offer='$idoffer'");
    }
    
    echo "<script language='javascript' type='text/javascript'> location.href='messagerie.php' </script>";
}

?> -->



<?php 
    }

include("footer.php"); ?>