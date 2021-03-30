
<?php
    $title="Liste Article";
    require "head.php";
        include("../../Bdd/cnx.php");
        // session_start();
        $seller_email = $_SESSION['email'];
        //total des produits du vendeur connecté ( pour faire la boucle for)
        $queryCountItems = mysqli_query($con, "select count(id_item) as total from item, seller where seller.id_seller=item.id_seller and seller.email='$seller_email'"); 

        //liste de tous les produits du vendeur connecté 
        $queryAllItemSeller = mysqli_query($con, "select id_item, email , name, price , brand, quantity, description,photo, is_negotiated, is_buying, is_bidding from item,seller where seller.id_seller=item.id_seller and email='$seller_email'");// Tableau liste

        
?>


<?php

if($row = mysqli_fetch_assoc($queryCountItems)){
            $total = $row['total'];
?>

<div class="genale_listeArticle position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_listeArticle text-uppercase">
            Liste des articles 
        </p>
        <p class="info_general_listeArticle centrer detail_style">
            Vous avez <?php echo $total ?> articles
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
            
            $queryDeleteItem = mysqli_query($con, "delete id_item from item WHERE id_item='$idItem'");
?>

        <div class="listeArticle_liste_total row m-0 p-3">
            <div class="col-2"></div>

            <div class="col-8 listeArticle_liste_un_par_un">
                <div class="row">
                    <div class="col-5">
                        <img class="img_listeArticle" src="../../Image/chaussure.png" alt="chaussure"><br>
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
                                    <span class="badge  badge-pill rounded-pill bg-warning f_right mr-3"> <i class="fas fa-gavel"></i> Is biding </span>
                                <?php } ?>
                                <?php if($is_negotiated == 1){ ?>
                                    
                                    <span class="badge  badge-pill rounded-pill bg-success f_right mr-3">  <i class="far fa-handshake"></i> Is negociated </span> 
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
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control w-100" value="<?php echo $qttItemSeller ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn text-light bg_blue1 w-100" data-bs-toggle="modal" data-bs-target="#nego_total_modal">SEE OFFER <i class="fas fa-handshake"></i></button>
                            </div>
                            
                            <div class="col-md-1">
                                <button type="button" class="btn btn-outline-danger f_right" data-bs-toggle="modal" data-bs-target="#confirmDeleteItem" name="deleteItem"><i class="fas fa-times"></i></button>
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
<!-- fin article -->
<div class="listeArticle_liste_total bg_blue2 row mt-5">
    <div class="col-2"></div>
    <div class="col-8 ">
        <div class="row">
            <div class="col-md-6">
                <a href="ajoutArticle.php" type="button" class="btn btn-lg bg_blue1 text-light w-100"> <i class="fas fa-plus"></i> Ajouter un article</a>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-lg bg_blue1 text-light w-100"> <i class="fas fa-pen"></i> Mettre à jours un article</button>
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

<!-- Modal to confirm Delete Item-->
<div class="modal fade" id="confirmDeleteItem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                    <button type="submit" name="btn_submit_supprimer" class="btn btn-danger" data-bs-dismiss="modal">Supprimer</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="deleteme(<?php echo $idItem; ?>)">Supprimer</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                <script language="javascript">
                function deleteme(delid) 
                {
                        window.location.href='delete.php?del_id='+delid+'';
                        return true;
                }
                </script> -->
            </div>
        </form>
    </div>
</div>

<?php
    include("footer.php");
?>