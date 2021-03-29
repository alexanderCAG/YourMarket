<?php
include("../../Bdd/cnx.php");

$queryDeleteItem = mysqli_query($con, "delete id_item from item WHERE id_item='".$_GET['del_id']."'");
// $select="delete id_item from item WHERE id_item='$idItem'";
// $query=mysqli_query($select) or die($select);

// .$_GET['del_id'].

if (mysqli_num_rows($queryDeleteItem) != 0){
    include("listeArticle.php");
}
else{
    // echo "<script language='javascript' type='text/javascript'> location.href='../Front/Base/connexion.php' </script>";
    // echo "<script type='text/javascript'> alert('User Name Or Password Invalid!')</script>";
    // echo "<script language='javascript' type='text/javascript'> location.href='../Front/connexion.php' </script>";
    echo "ERREUR DE CONNEXION";
}
?>