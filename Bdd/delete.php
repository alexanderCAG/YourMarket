<?php

    include("cnx.php");
    session_start();
    $email_user = $_SESSION['email'];

    // delete item by seller
    if (isset($_GET['id'])){
        $delete=$_GET['id'];

        $queryDeleteItem = mysqli_query($con, "delete from item WHERE id_item='$delete'");
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/Vendeur/listeArticle.php' </script>";
    }

    // delete item by admin
    if (isset($_GET['ida'])){
        $delete=$_GET['ida'];

        $queryDeleteItem = mysqli_query($con, "delete from item WHERE id_item='$delete'");
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/Admin/listeArticle.php' </script>";
    }

    // delete seller by admin
    if (isset($_GET['ids'])){
        $delete=$_GET['ids'];

        $queryDeleteOffer = mysqli_query($con, "delete from offer WHERE id_seller='$delete'");
        $queryDeleteBid = mysqli_query($con, "delete from bid WHERE id_seller='$delete'");
        $queryDeleteItem = mysqli_query($con, "delete from item WHERE id_seller='$delete'");
        $queryDeleteSeller = mysqli_query($con, "delete from seller WHERE id_seller='$delete'");
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/Admin/listeVendeur.php' </script>";
    }

    // delete item from basket by buyer
    if (isset($_GET['idpanier'])){
        $delete=$_GET['idpanier'];

        $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE (email='$email_user' or lastname='$email_user')");
        if($row = mysqli_fetch_assoc($queryBuyer)){
            $id_buyer = $row['id_buyer'];
            $queryDeleteItem = mysqli_query($con, "delete from basket WHERE id_item='$delete' and id_buyer='$id_buyer'");
            echo "<script language='javascript' type='text/javascript'> location.href='../Front/Acheteur/panier.php' </script>";
        }
    }

    // delete offer by buyer
    if (isset($_GET['iditemoffer'])){
        $delete=$_GET['iditemoffer'];

        $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE (email='$email_user' or lastname='$email_user')");
        if($row = mysqli_fetch_assoc($queryBuyer)){
            $id_buyer = $row['id_buyer'];
            $queryDeleteItem = mysqli_query($con, "delete from offer WHERE id_item='$delete' and id_buyer='$id_buyer'");
            echo "<script language='javascript' type='text/javascript'> location.href='../Front/Acheteur/messagerie.php' </script>";
        }
    }

    // delete bid by buyer
    if (isset($_GET['iditembid'])){
        $delete=$_GET['iditembid'];

        $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE (email='$email_user' or lastname='$email_user')");
        if($row = mysqli_fetch_assoc($queryBuyer)){
            $id_buyer = $row['id_buyer'];
            $queryDeleteItem = mysqli_query($con, "delete from bid WHERE id_item='$delete' and id_buyer='$id_buyer'");
            echo "<script language='javascript' type='text/javascript'> location.href='../Front/Acheteur/messagerie.php' </script>";
        }
    }

    // delete offer by seller
    if (isset($_GET['iditempaniner_vendeur'])){
        $delete=$_GET['iditempaniner_vendeur'];

        $querySeller = mysqli_query($con, "SELECT id_seller FROM seller WHERE (email='$email_user' or brand='$email_user')");
        if($row = mysqli_fetch_assoc($querySeller)){
            $id_seller = $row['id_seller'];
            $queryDeleteItem = mysqli_query($con, "delete from offer WHERE id_item='$delete' and id_seller='$id_seller'");
            echo "<script language='javascript' type='text/javascript'> location.href='../Front/Vendeur/messagerie.php' </script>";
        }
    }
?>
