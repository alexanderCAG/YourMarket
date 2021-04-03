<?php
    $title="Accueil";
    require "head.php";
    // $email_user = $_SESSION['email'];
    include("../../Bdd/cnx.php");
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

<div class="messarie_detail_total">
    <img class="fond_discussion position-relative" src="../../Image/ecran_fondBlanc.png" alt="ecran_fondBlanc">
    <div id="messages" class="info_msg_haut">
        <!-- <p class="satut_nego_msg texte_style"><?php echo $status ?></p> -->
    </div>

    <div class="info_msg_bas2">
        <div class="message_comptenu">
            <form action="" method="POST">
                <input type="submit" name="selectionValider" class="btn text-uppercase btn_msg_vendeur" id="btn_msg_vendeur_valider" value="Valider">
                <input type="submit" name="selectionRefuser" class="btn text-uppercase btn_msg_vendeur" id="btn_msg_vendeur_refuser" value="Refuser">
                <input type="hidden" name="id_offer" value="<?php echo $id_offer ?>">
            </form>
        </div>
    </div>
    
    
</div>


<!-- repup et envoie dans msg v2 a essayer -->
<?php
        
include("../../Bdd/cnx.php");

if(isset($_POST['selectionValider'])){
    $selectionValider = $_POST['selectionValider'];


    $query = mysqli_query($con, "UPDATE offer SET status='$selectionValider' WHERE id_offer='$idoffer'");

    
    echo "<script language='javascript' type='text/javascript'> location.href='messagerie.php' </script>";
}

if(isset($_POST['selectionRefuser'])){
    $selectionRefuser = $_POST['selectionRefuser'];


    $query = mysqli_query($con, "UPDATE offer SET status='$selectionRefuser' WHERE id_offer='$idoffer'");

    
    echo "<script language='javascript' type='text/javascript'> location.href='messagerie.php' </script>";
}

?>

<script>
    setInterval('load_message2()',500);

    function load_message2(){
        $('#messages').load('../../Bdd/msg2.php');
    }
</script>



<?php 
    }

include("footer.php"); ?>