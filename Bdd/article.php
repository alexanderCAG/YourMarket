
<?php
    include("cnx.php");
	session_start();
	$email_user = $_SESSION['email'];
    
   
	if (isset($_GET['id']) && isset($_GET['qty'])){
        $id_item=$_GET['id'];
        $quantity_update=$_GET['qty'];
		echo($quantity_update);
        $queryquantity_update = mysqli_query($con, "UPDATE item SET quantity='$quantity_update' where id_item='$id_item'");

		// include("../Front/confirm_infoPerso_vendeur.php");
    }
	else{
        echo "ERREUR";
    }

    // include("../Front/confirm_infoPerso.php");
?>