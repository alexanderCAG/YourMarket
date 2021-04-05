<!-- loading function for intant message -->

<?php

    include("cnx.php");
    session_start();
    $idOffre = $_SESSION['id_offer'];

    $sql = mysqli_query($con, "SELECT price_offered, quantity, status FROM offer WHERE id_offer='$idOffre'");
    
    
    if($row = mysqli_fetch_assoc($sql)){

        ?>

        <div class="message3">
            <h4 id="msg_h4"><?= $row['status']; ?></h4>
        </div>

        <div class="message4">
            <p id="msh_p">I would like to buy <?= $row['quantity']; ?> of your product(s)</p>
            <h4 id="msg_h4">I suggest them to you for <?= $row['price_offered']; ?> €</h4>
        </div>
    
<?php
}
?>

<style>
    .message4{
        float: left;
        position: absolute;
        top : 30px;
        left : 60px;
        text-align:center;
    }
    .message3{
        float: right;
        margin-bottom : 50px;
        position: absolute;
        bottom : 0px;
        left : 380px;
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

