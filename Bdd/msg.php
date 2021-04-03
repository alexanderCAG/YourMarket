

<?php
        
    include("cnx.php");
    
    if(isset($_POST['submit_msg_acheteur'])){
        $quantite_nego_message = htmlspecialchars($_POST['quantite_nego_message']);
        $prix_nego_message = nl2br(htmlspecialchars($_POST['prix_nego_message']));
        $nb_nego = $_POST['nb_nego'];
        $id_offer = $_POST['id_offer'];
        $nb_nego=$nb_nego+1;
    
        if($nb_nego<=5){
            $query = mysqli_query($con, "UPDATE offer SET price_offered='$prix_nego_message',quantity='$quantite_nego_message',nb_nego='$nb_nego',status='en cours' WHERE id_offer='$id_offer'");
        }
        
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/Acheteur/messagerie.php' </script>";
    }
        
?>


<!-- <?php

    include("cnx.php");
    // $idoffer = $_SESSION['id_offer'];
    $sql=mysqli_query($con, "SELECT * FROM messagerie Where id='35'");
?>

<?php
if($row = mysqli_fetch_assoc($sql)){
    ?>

    <div class="message">
        <h4 id="msg_h4"><?= $row['user']; ?></h4>
        <p id="msh_p"><?= $row['message']; ?></p>
    </div>

    <div class="message2">
        <h4 id="msg_h4"><?= $row['user']; ?></h4>
        <p id="msh_p"><?= $row['message']; ?></p>
    </div>
    
<?php
}
?>

<style>
    .message{
        float: left;
        position: absolute;
        top : 30px;
        left : 40px;
        text-align:center;
    }
    .message2{
        float: right;
        margin-bottom : 50px;
        position: absolute;
        bottom : 0px;
        right : 40px;
        text-align:center;
    }
    #msg_h4{
        font-size: 50px;
    }
    #msh_p{
        font-size: 35px;
    }
</style> -->

<!-- <?php
while($row = mysqli_fetch_assoc($sql)){
    ?>

    <div class="message">
        <h4 id="msg_h4"><?= $row['user']; ?></h4>
        <p id="msh_p"><?= $row['message']; ?></p>
    </div>

    <div class="message2">
        <h4 id="msg_h4"><?= $row['user']; ?></h4>
        <p id="msh_p"><?= $row['message']; ?></p>
    </div>
    
<?php
}
?> -->
