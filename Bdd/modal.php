<?php

include("cnx.php");
    $idItem = $_POST['idItem'];
    // $idItem = (int)$idItem;
    // echo($idItem);

    
    // $queryAllItemSellerModal = mysqli_query($con,"select id_item, email ,background, name, price , brand, quantity, description,photo, is_negotiated, is_buying, is_bidding from item,seller where id_item='$idItem' and seller.id_seller=item.id_seller");
    
    // if($rowAllItemSeller = mysqli_fetch_assoc($queryAllItemSellerModal)){
    //     $nameItemSeller = $rowAllItemSeller['name'];
    //     $idItem = $rowAllItemSeller['id_item'];
    //     $PriceItemSeller = $rowAllItemSeller['price'];
    //     $qttItemSeller = $rowAllItemSeller['quantity'];
    //     $brandItemSeller = $rowAllItemSeller['brand'];
    //     $isBidding = $rowAllItemSeller['is_bidding'];
    //     $is_negotiated = $rowAllItemSeller['is_negotiated'];
    //     $is_buying = $rowAllItemSeller['is_buying'];
    //     $DescriptionItemSeller = $rowAllItemSeller['description'];

    // $queryAllItemSellerModal = "select id_item, email ,background, name, price , brand, quantity, description,photo, is_negotiated, is_buying, is_bidding from item,seller where id_item='$idItem' and seller.id_seller=item.id_seller";
    $queryAllItemSellerModal = "select * from item where id_item='$idItem'";
    $result = $con->query($queryAllItemSellerModal);
    $product = mysqli_fetch_assoc($result);
    echo $product['id_item'];
?>

<!-- Modal to confirm Delete Item-->
<?php ob_start();?>
<div class="modal fade" id="confirmDeleteItem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titre_modal_prix_nego texte_style" id="staticBackdropLabel">Suppression du produit: <?php echo $product['name']; ?> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2">
                    <p>Confirmation de la suppression : <?php echo $product['name']; ?> - <?php echo $product['quantity']; ?> - <?php echo $product['price']; ?> €</p>
                    <div class="alert alert-danger" role="alert">
                    <i class="fas fa-exclamation-triangle"></i> La suppression sera définitive.
                    </div>
                </div><?php echo $product['id_item']; ?>
                <div class="modal-footer">
                    <button type="submit" name="btn_submit_supprimer" class="btn btn-danger" data-bs-dismiss="modal">Supprimer</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php 
    
echo ob_get_clean();
// }
?>