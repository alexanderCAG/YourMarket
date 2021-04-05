

<!-- <?php
        
    include("cnx.php");
    session_start();
    $idOffre = $_SESSION['id_offer'];
    if(isset($_POST['submit_msg_acheteur'])){
        $quantite_nego_message = htmlspecialchars($_POST['quantite_nego_message']);
        $prix_nego_message = nl2br(htmlspecialchars($_POST['prix_nego_message']));
        $nb_nego = $_POST['nb_nego'];
        $id_offer = $_POST['id_offer'];
        $nb_nego=$nb_nego+1;
    
        if($nb_nego<=5){
            // $query = mysqli_query($con, "UPDATE offer SET price_offered='$prix_nego_message',quantity='$quantite_nego_message',nb_nego='$nb_nego',status='en cours' WHERE id_offer='$id_offer'");
        }
        echo $idOffre;
        // echo "<script language='javascript' type='text/javascript'> location.href='../Front/Acheteur/messagerie.php' </script>";
    }
        
?> -->


<!-- loading function for intant message -->
<?php

    include("cnx.php");
    session_start();
    $idOffre = $_SESSION['id_offer'];

    $sql = mysqli_query($con, "SELECT price_offered, quantity, status FROM offer WHERE id_offer='$idOffre'");
    
    
    if($row = mysqli_fetch_assoc($sql)){

        ?>

        <div class="message">
            <h4 id="msg_h4"><?= $row['status']; ?></h4>
        </div>

        <div class="message2">
            <p id="msh_p">J'aimerais acheté <?= $row['quantity']; ?> de votre produit(s)</p>
            <h4 id="msg_h4">Je vous les propose pour <?= $row['price_offered']; ?> €</h4>
        </div>
    
<?php
}
?>

<style>
    .message{
        float: left;
        position: absolute;
        top : 30px;
        left : 60px;
        text-align:center;
    }
    .message2{
        float: right;
        margin-bottom : 50px;
        position: absolute;
        bottom : 0px;
        left : 180px;
        width: 600px;
        text-align:center;
        /* background-color: white; */
    }
    #msg_h4{
        font-size: 40px;
    }
    #msh_p{
        font-size: 30px;
    }
</style>

