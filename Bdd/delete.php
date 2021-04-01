<?php

    include("cnx.php");

    if (isset($_GET['id'])){
        $delete=$_GET['id'];

        $queryDeleteItem = mysqli_query($con, "delete from item WHERE id_item='$delete'");
    }

    // include("../../Bdd/cnx.php");
    // echo "<script language='javascript' type='text/javascript'>alert('ok');</script>";
    // if (isset($_POST['btn_submit_supprimer'])){

        // $queryDeleteItem = mysqli_query($con, "delete id_item from item WHERE id_item='$idItem'");
        // echo "<script language='javascript' type='text/javascript'>alert('ok1');</script>";
        // if (mysqli_num_rows($queryDeleteItem) != 0){
        //     // include("listeArticle.php");
        //     echo "<script language='javascript' type='text/javascript'>alert('ok2');</script>";
        // }
        // else{
        //     echo "ERREUR DE CONNEXION";
        // }
    // }

// include("../../Bdd/cnx.php");

// $queryDeleteItem = mysqli_query($con, "delete id_item from item WHERE id_item='".$_GET['del_id']."'");
// // $select="delete id_item from item WHERE id_item='$idItem'";
// // $query=mysqli_query($select) or die($select);

// // .$_GET['del_id'].

// if (mysqli_num_rows($queryDeleteItem) != 0){
//     include("listeArticle.php");
// }
// else{
//     echo "ERREUR DE CONNEXION";
// }
?>