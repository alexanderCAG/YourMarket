


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

