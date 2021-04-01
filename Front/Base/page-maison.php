
<?php
    $title="Page maison";
    require "head.php";
        include("../../Bdd/cnx.php");
        
        $queryCountItems = mysqli_query($con, "select count(id_item) as total from item where category='House'"); 
        $queryAllItems = mysqli_query($con, "select name, price , brand,subcategory,category, quantity, description,photo, is_negotiated, is_buying, is_bidding from item,seller where seller.id_seller=item.id_seller and category='House' and (is_buying =1 or is_negotiated=1)");
?>

<div class="vetement_general">
    <img class="image_vetement_general position-relative" src="../../Image/maison-general.png" alt="vetement-general">
    <div class="deco_marque_general position-absolute position-absolute top-0 end-0">
        <img class="img_icon_sale position-absolute top-50 start-0 translate-middle-y" src="../../Image/icon_sale.png" alt="icon_sale">
        <p class="texte_deco_marque_general texte_style text-uppercase position-absolute top-50 start-50 translate-middle">maison</p> 
    </div>
    <div class="class_separation" id="menuCatMaison"></div>
</div>

<div class="vetement_details" id="">
    <div class="navbar_vetement">
            <ul class="navbar_listeVendeur_details detail_style centrer">
                <li><a href="page-maison.php#menuCatMaison" class="badge text-uppercase bg_blue1 text-light">All product</a> </li>
                <li><a href="page-maison-sheet.php#menuCatMaison" class="text-uppercase">SHEETS</a></li>
                <li><a href="page-maison-pillow.php#menuCatMaison" class="text-uppercase">PILLOWS</a></li>
                <li><a href="page-maison-decoration.php#menuCatMaison" class="text-uppercase">DECORATIONS</a></li>
            </ul>
    </div>
</div>

<div class="maison_liste_total row">
    <!-- Premiere ligne -->
    <div class="col-1"></div>

    <div class="col-10">
        <div class="row">
        <?php
        // Tota items
        if($row = mysqli_fetch_assoc($queryCountItems)){
            $total = $row['total'];
            for ($i=0; $i<=$total;$i++){
                if($rowAllItems = mysqli_fetch_assoc($queryAllItems)){
                    $nameItems = $rowAllItems['name'];
                    $prixItems = $rowAllItems['price'];
                    $brandItems = $rowAllItems['brand'];
                    $quantityCadre = $rowAllItems['quantity'];
                    $descriptionItems = $rowAllItems['description'];
                    $subcategoryItems = $rowAllItems['subcategory'];
                    $is_negotiated = $rowAllItems['is_negotiated'];
                    $is_buying = $rowAllItems['is_buying'];
                    
                    ?>
                    <div class="listeVendeur_un_par_un col-3 mb-5">
                        <div class="card shadow cardProduct" style="width: 18rem;" >
                            <img class="img_listeVendeur_logo card-img-top" src="../../Image/chaussure.png" alt="oreiller">
                            <?php  if($quantityCadre == 0 ){?>
                                <div class="bg-danger text-light w-100 text-center">Indisponible</div>
                                <?php }?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-9">
                                    <div class="detail_style_titre detail_style"><small><?php echo $nameItems ?></small></div> 
                                <div class="detail_style_marque detail_style"><small><?php echo $brandItems ?></small></div> 
                                    </div>
                                    <div class="col-md-3">
                                        <p href="#" class="detail_style_prix texte_style f_right"><small><?php echo $prixItems ?> €</small> </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6 p-1 m-0">
                                        <?php if($is_negotiated == 1){ ?>
                                            <a href="connexion.php" type="button" class="btn btn-outline-success"> <i class="far fa-handshake"></i><small> Negociate</small></a>
                                        <?php } ?>
                                        
                                    </div>

                                    <div class="col-6  p-1 m-0">
                                        <?php if($is_buying == 1){ ?>
                                            <a href="connexion.php" type="button" class="btn btn-dark f_right"> <i class="fas fa-shopping-cart"></i>    <small>Add to cart </small></a>
                                        <?php } ?>
                                    </div>
                            </div>
                                <?php  if($subcategoryItems == 'sheet' ){?>
                                    <div class="card-badge bg_blue2  pl-5"> &nbsp;<i class="fas fa-bed"></i> Sheet &nbsp;</div>
                                <?php }?>
                                <?php  if($subcategoryItems == 'pillow' ){?>
                                    <div class="card-badge bg_blue2  pl-5"> &nbsp;<i class="fas fa-bed"></i> Pillow &nbsp;</div>
                                <?php }?>
                                <?php  if($subcategoryItems == 'decoration' ){?>
                                    <div class="card-badge bg_blue2  pl-5"> &nbsp;<i class="fas fa-bed"></i> Decoration &nbsp;</div>
                                <?php }?>
                            </div>
                            <div class="class_separation2 w-100"></div>
                            </div>
                        </div>
            <?php
                }
            }

        }
        ?>
        </div>
        
    </div>
    
    <div class="col-1"></div>

</div>

<!-- Modal negociation-->
<div class="modal fade" id="nego_prix_maison" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titre_modal_prix_nego texte_style text-uppercase" id="staticBackdropLabel">Choose a price</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2">
                    <input type="text" name="quantite_nego_maison" class="quantite_nego_maison" placeholder="Quantité">
                    <input type="text" name="prix_nego_maison" class="prix_nego_maison">€
                    <br><br>
                    <span class="condition_prix_nego">If you offer a price and this price is accepted by the seller, you will be automatically charged.</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="subit_btn_nego_prix_maison" class="btn btn-primary">Send</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
    include("footer.php");
?>