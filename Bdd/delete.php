<?php

    include("cnx.php");
    session_start();
    $email_user = $_SESSION['email'];

    if (isset($_GET['id'])){
        $delete=$_GET['id'];

        $queryDeleteItem = mysqli_query($con, "delete from item WHERE id_item='$delete'");
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/Vendeur/listeArticle.php' </script>";
    }

    if (isset($_GET['ida'])){
        $delete=$_GET['ida'];

        $queryDeleteItem = mysqli_query($con, "delete from item WHERE id_item='$delete'");
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/Admin/listeArticle.php' </script>";
    }

    if (isset($_GET['ids'])){
        $delete=$_GET['ids'];

        $queryDeleteItem = mysqli_query($con, "delete from seller WHERE id_seller='$delete'");
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/Admin/listeVendeur.php' </script>";
    }

    if (isset($_GET['idpanier'])){
        $delete=$_GET['idpanier'];

        $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE email='$email_user'");
        if($row = mysqli_fetch_assoc($queryBuyer)){
            $id_buyer = $row['id_buyer'];
            $queryDeleteItem = mysqli_query($con, "delete from basket WHERE id_item='$delete' and id_buyer='$id_buyer'");
            echo "<script language='javascript' type='text/javascript'> location.href='../Front/Acheteur/panier.php' </script>";
        }
    }

    if (isset($_GET['idoffer'])){
        $delete=$_GET['idoffer'];

        $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE email='$email_user'");
        if($row = mysqli_fetch_assoc($queryBuyer)){
            $id_buyer = $row['id_buyer'];
            $queryDeleteItem = mysqli_query($con, "delete from offer WHERE id_item='$delete' and id_buyer='$id_buyer'");
            echo "<script language='javascript' type='text/javascript'> location.href='../Front/Acheteur/messagerie.php' </script>";
        }
    }
?>
