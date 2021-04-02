<?php

    include("cnx.php");

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

        $queryDeleteItem = mysqli_query($con, "delete from basket WHERE id_item='$delete'");
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/Acheteur/panier.php' </script>";
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
<!-- <div class="modal fade" id="confirmDeleteItem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="delete.php" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titre_modal_prix_nego texte_style" id="staticBackdropLabel">Suppression du produit: <?php echo $nameItemSeller ?> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2">
                    <p>Confirmation de la suppression : <?php echo $nameItemSeller ?> - <?php echo $brandItemSeller ?> - <?php echo $PriceItemSeller ?> €</p>
                    <div class="alert alert-danger" role="alert">
                    <i class="fas fa-exclamation-triangle"></i> La suppression sera définitive.
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="submit" name="btn_submit_supprimer" class="btn btn-danger" data-bs-dismiss="modal">Supprimer</button> -->
                    <button type="submit" class="btn btn-secondary" name="btn_submit_close" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    if (isset($_POST['btn_submit_close'])){
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/Vendeur/listeArticle.php' </script>";
    }
?> -->