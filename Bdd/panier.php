<?php

    include("cnx.php");
    $email_user = $_SESSION['email'];

    if (isset($_GET['idItem'])){
        $id_item=$_GET['idItem'];
        $queryAllItems = mysqli_query($con, "select name, price , brand,subcategory,category, quantity, description,photo, is_negotiated, is_buying, is_bidding from item,seller where seller.id_seller=item.id_seller and category='House' and (is_buying =1 or is_negotiated=1)");
        $resultat = $con->query($queryAllItems);
        $idItemT = mysqli_fetch_assoc($resultat);
    
        $query = mysqli_query($con, "INSERT INTO basket(id_buyer, id_item, quantity) VALUES ('$email_user','$id_item','5')");
    }
	else{
        echo "ERREUR";
    }



?>