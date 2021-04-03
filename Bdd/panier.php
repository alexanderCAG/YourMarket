
<?php

include("cnx.php");
session_start();
$email_user = $_SESSION['email'];



if(isset($_GET['iditem'])){
    $iditem=$_GET['iditem'];
    $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE email='$email_user'");
    $querySeller = mysqli_query($con, "SELECT id_seller,name,price,description,photo,category,subcategory FROM item WHERE id_item='$iditem'");


    if($row = mysqli_fetch_assoc($queryBuyer)){
        $id_buyer = $row['id_buyer'];
        if($row2 = mysqli_fetch_assoc($querySeller)){
            $id_seller = $row2['id_seller'];
            $name = $row2['name'];
            $price = $row2['price'];
            $description = $row2['description'];
            $photo = $row2['photo'];
            $category = $row2['category'];
            $subcategory = $row2['subcategory'];
            $queryAddBasket = mysqli_query($con, "INSERT INTO basket(id_buyer, id_item, id_seller, name, price, quantity, description, photo, category, subcategory) 
                            VALUES ('$id_buyer','$iditem','$id_seller','$name','$price','1','$description','$photo','$category','$subcategory') ");
            echo "<script language='javascript' type='text/javascript'> location.href='../Front/Acheteur/index.php' </script>";
        }
    }else{
        echo 'erreur';
        echo $email_user;
        echo $iditem;
    }
}

if(isset($_POST['btn_submit_paiement'])){

    $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE email='$email_user'");
    if($row4 = mysqli_fetch_assoc($queryBuyer)){
        $id_buyer = $row4['id_buyer'];
        $name_nameCard=$_POST['name_nameCard'];
        $name_cardNumber=$_POST['name_cardNumber'];
        $name_ExpiryDate=$_POST['name_ExpiryDate'];
        $name_SecurityCode=$_POST['name_SecurityCode'];
        $queryCardUser = mysqli_query($con, "SELECT buyer.email, `carde`, `code`,`num_card`,`expiration`,`nom` FROM payment, buyer where payment.id_buyer=buyer.id_buyer and  email='$email_user'");

        if($row5 = mysqli_fetch_assoc($queryCardUser)){
            $name_nameCard2 = $row5['nom'];
            $name_cardNumber2 = $row5['num_card'];
            $name_ExpiryDate2 = $row5['expiration'];
            $name_SecurityCode2 = $row5['code'];
            if(($name_nameCard != $name_nameCard2 ) || ($name_cardNumber != $name_cardNumber2 ) || ($name_ExpiryDate != $name_ExpiryDate2 ) || ($name_SecurityCode != $name_SecurityCode2 )) {
                echo "<script language='javascript' type='text/javascript'> location.href='../Front/Acheteur/paiement.php' </script>";
            }
            else{
                echo "<script language='javascript' type='text/javascript'> location.href='../Front/Acheteur/paiementAccepte.php' </script>";

                $queryTotalProductsInBasket= mysqli_query($con, "SELECT Count(DISTINCT(`id_item`)) as totalProduitBasket, email FROM basket, buyer WHERE basket.id_buyer=buyer.id_buyer and email ='$email_user'");


                if($row_product_in_basket = mysqli_fetch_assoc($queryTotalProductsInBasket)){
                    $total = $row_product_in_basket['totalProduitBasket'];
                    for ($i=0; $i<$total;$i++){
                    // Dans le for
                    $querySelectBasket = mysqli_query($con, "SELECT basket.id_buyer AS idB,`id_item`,`id_seller`,`name`,`price`,`quantity`,`description`,`photo`,`category`,`subcategory` FROM basket, buyer WHERE basket.id_buyer=buyer.id_buyer and email='$email_user'");

                        if($row7 = mysqli_fetch_assoc($querySelectBasket)){
                            $id_buyer_row7 = $row7['idB'];
                            $id_item_row7 = $row7['id_item'];
                            $id_seller_row7 = $row7['id_seller'];
                            $name_row7 = $row7['name'];
                            $price_row7 = $row7['price'];
                            $quantity_row7 = $row7['quantity'];
                            $description_row7 = $row7['description'];
                            $photo_row7 = $row7['photo'];
                            $category_row7 = $row7['category'];
                            $subcategory_row7 = $row7['subcategory'];
                            
                            $queryBuyer3 = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE email='$email_user'");

                            if($row = mysqli_fetch_assoc($queryBuyer3)){
                                $id_buyer = $row['id_buyer'];

                                $queryInsertHistory = mysqli_query($con, "INSERT INTO `history` (`id_history`, `id_buyer`, `id_item`, `id_seller`, `name`, `price`, `quantity`, `description`, `photo`, `category`, `subcategory`) VALUES (NULL, '$id_buyer_row7', '$id_item_row7', '$id_seller_row7', '$name_row7', '$price_row7', '$quantity_row7', '$description_row7', ' $photo_row7', '$category_row7', '$subcategory_row7');");

                                $queryDeleteHistory = mysqli_query($con, "DELETE FROM basket where id_buyer='$id_buyer'");
                            }
                        
                        }
                    }
                }

                // fin for
            }
        }
       
    }
}        
        
if(isset($_POST['btn_submit_nego'])){

    $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE email='$email_user'");

    if($row = mysqli_fetch_assoc($queryBuyer)){
        $id_buyer = $row['id_buyer'];
        $quantite_nego=$_POST['quantite_nego'];
        $prix_nego=$_POST['prix_nego'];
        $id_item_nego=$_POST['id_item_nego'];

        $querySeller = mysqli_query($con, "SELECT id_seller FROM item WHERE id_item='$id_item_nego'");

        if($row2 = mysqli_fetch_assoc($querySeller)){
            $id_seller = $row2['id_seller'];
            $queryBuyer = mysqli_query($con, "INSERT INTO offer(id_item, id_buyer, id_seller, price_offered, quantity, nb_nego, status) VALUES ('$id_item_nego','$id_buyer','$id_seller','$prix_nego','$quantite_nego','1','en cours')");
            echo "<script language='javascript' type='text/javascript'> location.href='../Front/Acheteur/index.php' </script>";
        }
    
        
    }
}

if(isset($_POST['btn_envoyer_enchere_prix'])){

    $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE email='$email_user'");

    if($row = mysqli_fetch_assoc($queryBuyer)){
        $id_buyer = $row['id_buyer'];
        $proposition_prix=$_POST['proposition_prix'];
        $idItem=$_POST['idItem'];

        $querySeller = mysqli_query($con, "SELECT id_seller FROM item WHERE id_item='$idItem'");

        if($row2 = mysqli_fetch_assoc($querySeller)){
            $id_seller = $row2['id_seller'];
            $query = mysqli_query($con, "INSERT INTO bid (id_item, id_buyer, id_seller, state, price_user) VALUES ('$idItem','$id_buyer','$id_seller','en cours','$proposition_prix')");
            echo "<script language='javascript' type='text/javascript'> location.href='../Front/Acheteur/index.php' </script>";
        }
    
        
    }
}
    

?>