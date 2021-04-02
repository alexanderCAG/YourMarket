
<?php

include("cnx.php");
session_start();
$email_user = $_SESSION['email'];

        $iditem=$_GET['iditem'];
        $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE email='$email_user'");
        $querySeller = mysqli_query($con, "SELECT id_seller FROM item WHERE id_item='$iditem'");
        

        if($row = mysqli_fetch_assoc($queryBuyer)){
            $id_buyer = $row['id_buyer'];
            if($row2 = mysqli_fetch_assoc($querySeller)){
                $id_seller = $row2['id_seller'];
                $queryAddBasket = mysqli_query($con, "INSERT INTO basket(id_buyer, id_item, id_seller, quantity) VALUES ('$id_buyer','$iditem','$id_seller','1') ");
                echo "<script language='javascript' type='text/javascript'> location.href='../Front/Acheteur/index.php' </script>";
            }
        }else{
            echo 'erreur';
            echo $email_user;
            echo $iditem;
        }
        
        
    

?>