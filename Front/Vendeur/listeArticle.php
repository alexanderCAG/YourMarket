
<?php
    $title="Liste Article";
    require "head.php";
        include("../../Bdd/cnx.php");
        // session_start();
        $seller_email = $_SESSION['email'];
        //total des produits du vendeur connecté ( pour faire la boucle for)
        $queryCountItems = mysqli_query($con, "select count(id_item) as total from item, seller where seller.id_seller=item.id_seller and (seller.email='$seller_email' or seller.brand='$seller_email')"); 

        //liste de tous les produits du vendeur connecté 
        $queryAllItemSeller = mysqli_query($con, "select id_item, email , name, price , brand, quantity, description,photo, is_negotiated, is_buying, is_bidding from item,seller where seller.id_seller=item.id_seller and (seller.email='$seller_email' or seller.brand='$seller_email')");// Tableau liste
        $Seller = mysqli_query($con, "select background from seller where email='$seller_email' or brand='$seller_email'");

?>


<?php

if($row = mysqli_fetch_assoc($queryCountItems)){
            $total = $row['total'];
?>

<?php if($row2 = mysqli_fetch_assoc($Seller)){
    $bg = $row2['background'];
    if($bg != null){?>
        <div class="genale_listeArticle position-relative" style="background-color:<?php echo $bg ?>!important;">
    <?php 
    }else{?>
        <div class="genale_listeArticle position-relative" >
<?php 
    }
}?>
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_listeArticle text-uppercase">
             List of articles
        </p>
        <p class="info_general_listeArticle centrer detail_style">
            You have <?php echo $total ?> articles
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<!-- Article 1-->
<?php
    for ($i=0; $i<=$total;$i++){
        if($rowAllItemSeller = mysqli_fetch_assoc($queryAllItemSeller)){
            $nameItemSeller = $rowAllItemSeller['name'];
            $idItem = $rowAllItemSeller['id_item'];
            $PriceItemSeller = $rowAllItemSeller['price'];
            $qttItemSeller = $rowAllItemSeller['quantity'];
            $brandItemSeller = $rowAllItemSeller['brand'];
            $isBidding = $rowAllItemSeller['is_bidding'];
            $is_negotiated = $rowAllItemSeller['is_negotiated'];
            $is_buying = $rowAllItemSeller['is_buying'];
            $DescriptionItemSeller = $rowAllItemSeller['description'];
            $photoItemSeller = $rowAllItemSeller['photo'];
            
            // $queryDeleteItem = mysqli_query($con, "delete id_item from item WHERE id_item='$idItem'");
?>

        <div class="listeArticle_liste_total row m-0 p-3">
            <div class="col-2"></div>

            <div class="col-8 listeArticle_liste_un_par_un">
                <!-- row of all is article -->
                <div class="row">
                    <div class="col-5">
                        <img class="img_listeArticle" src="<?php echo $photoItemSeller ?>" alt="chaussure"><br>
                    </div>
                    
                    <div class="col-7 listeArticle_liste_details position-relative">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="listeArticle_info_titre texte_style text-uppercase"><?php echo $nameItemSeller ?></div>
                            </div>
                            <div class="col-md-6">
                                <?php if($qttItemSeller == 0){ ?>
                                    <span class="badge  badge-pill rounded-pill bg-danger f_right mr-3"><i class="fas fa-times"></i> not availale </span>
                                <?php } ?>
                                <?php if($isBidding == 1){ ?>
                                    <span class="badge  badge-pill rounded-pill bg-warning f_right mr-3"> <i class="fas fa-gavel"></i> biding </span>
                                <?php } ?>
                                <?php if($is_negotiated == 1){ ?>
                                    
                                    <span class="badge  badge-pill rounded-pill bg-success f_right mr-3">  <i class="far fa-handshake"></i> negociated </span> 
                                <?php } ?>
                                <?php if($is_buying == 1){ ?>
                                    <span class="badge  badge-pill rounded-pill bg-secondary f_right mr-3"> <i class="far fa-money-bill-alt"></i> bying </span>
                                <?php } ?>
                            </div>
                            
                        </div>
                        <div class="listeArticle_info_marque detail_style text-uppercase"><?php echo $brandItemSeller ?></div>
                        <br>
                        <div class="listeArticle_info_description"><?php echo utf8_encode($DescriptionItemSeller)
                        
                        ?></div>
                        <br>
                        <div class="row border-bottom mb-3 pb-2">
                            <div class="col-md-2"><small class="text-uppercase ">Price</small></div>
                            <div class="col-md-10"><small class="text-uppercase">Quantity</small></div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <h4 class="texte_style text-uppercase"><?php echo $PriceItemSeller ?> €</h4>
                            </div>
                            <div class="col-md-3">
                                <form action="../../Bdd/infoPerso_recup.php" method="POST">
                                    <div class="input-group mb-3">
                                        <input type="number" style="width:50px!important;" name="qttItemSeller" class="form-control w-100" min="0" value="<?php echo $qttItemSeller ?>">
                                        <button type="submit" name="submit_btn_change_qte" class="input-group-text btn bg_blue1 rounded-0" style="border-top-right-radius: 5px!important;border-bottom-right-radius: 5px!important;"><i class="fas fa-pen text-light"></i></button>
                                        <input type="hidden" name="idItem" value="<?php echo $idItem ?>">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn text-light bg_blue1 w-100" data-bs-toggle="modal" data-bs-target="#nego_total_modal">SEE OFFER <i class="fas fa-handshake"></i></button>
                            </div>
                            
                            <!-- delete article -->
                            <div class="col-md-1">
                                <a type="button" href="../../Bdd/delete.php?id=<?= $idItem; ?>" class="btn btn-outline-danger f_right" name="deleteItem"><i class="fas fa-times"></i></a>
                            <!--  data-bs-toggle="modal" data-bs-target="#confirmDeleteItem"-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-2"></div>
        </div>
        <?php 
        } 
    }
}
?>


<!-- Modal to confirm Delete Item-->
<!-- <div class="modal fade" id="confirmDeleteItem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <?php

    $queryItemSeller = mysqli_query($con, "select name, price , brand from item,seller where seller.id_seller=item.id_seller and id_item='$idItem'");
    if($rowItemSeller = mysqli_fetch_assoc($queryItemSeller)){
        $nameItemSeller2 = $rowItemSeller['name'];
        $PriceItemSeller2 = $rowItemSeller['price'];
        $brandItemSeller2 = $rowItemSeller['brand'];
    ?>
    <div class="modal-dialog">
        <form action="" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titre_modal_prix_nego texte_style" id="staticBackdropLabel">Suppression du produit: <?php echo $nameItemSeller2 ?> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2">
                    <p>Confirmation de la suppression : <?php echo $nameItemSeller2 ?> - <?php echo $brandItemSeller2 ?> - <?php echo $PriceItemSeller2 ?> €</p>
                    <div class="alert alert-danger" role="alert">
                    <i class="fas fa-exclamation-triangle"></i> La suppression sera définitive.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="btn_submit_supprimer" class="btn btn-danger" data-bs-dismiss="modal">Supprimer</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
}
?> -->

<!-- end article -->
<div class="listeArticle_liste_total bg_blue2 row mt-5">
    <div class="col-2"></div>
    <div class="col-8 ">
        <div class="row">
            <div class="col-md-6">
                <a href="ajoutArticle.php" type="button" class="btn btn-lg bg_blue1 text-light w-100"> <i class="fas fa-plus"></i> Add item</a>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-lg bg_blue1 text-light w-100"> <i class="fas fa-pen"></i> Update an article</button>
            </div>
        </div>
    </div>
    <div class="col-2"></div>
</div>

<!-- Modal negociation-->
<div class="modal fade" id="nego_total_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titre_modal_prix_nego texte_style text-uppercase" id="staticBackdropLabel">Choose a price</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2">
                    <div class="row nego_contenu_modal_titre detail_style text-uppercase">
                        <div class="col-3">
                            Lastname
                        </div>

                        <div class="col-2">
                            Qty
                        </div>

                        <div class="col-3">
                            Price
                        </div>

                        <div class="col-2">
                            Refuse
                        </div>

                        <div class="col-2">
                            Accept
                        </div>
                    </div>
                    
                    <div class="row nego_contenu_modal detail_style text-uppercase">
                        <div class="col-3">
                            <span name="nego_modal_nom" class="marge_modal_offre">a</span>
                        </div>

                        <div class="col-2">
                            <span name="nego_modal_quantite" class="marge_modal_offre">dza</span>
                        </div>

                        <div class="col-3">
                            <span name="nego_modal_prix" class="marge_modal_offre">a</span>
                        </div>

                        <div class="col-2">
                            <button type="submit" class="btn_submit_refus_nego_modal shadow">X</button>
                        </div>

                        <div class="col-2">
                            <button type="submit" class="btn_submit_accepte_nego_modal shadow">V</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
    include("footer.php");
?>