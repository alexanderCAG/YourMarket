
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