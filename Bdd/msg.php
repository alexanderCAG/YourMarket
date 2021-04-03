

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

