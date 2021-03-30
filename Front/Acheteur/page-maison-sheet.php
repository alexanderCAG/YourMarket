
<?php
    $title="Page maison";
    require "head.php";
        include("../../Bdd/cnx.php");
        
        $queryCountCadre = mysqli_query($con, "select count(id_item) as total  from item where category='maison' and subcategory='drap'"); 
        $queryAllCadre = mysqli_query($con, "select name, price ,subcategory, brand, quantity, description,photo, is_negotiated, is_bidding from item,seller where seller.id_seller=item.id_seller and category='maison' and subcategory='drap'");
?>

<div class="vetement_general">
    <img class="image_vetement_general position-relative" src="../../Image/maison-general.png" alt="vetement-general">
    <div class="deco_marque_general position-absolute position-absolute top-0 end-0">
        <img class="img_icon_sale position-absolute top-50 start-0 translate-middle-y" src="../../Image/icon_sale.png" alt="icon_sale">
        <p class="texte_deco_marque_general texte_style text-uppercase position-absolute top-50 start-50 translate-middle">maison</p> 
    </div>
    <div class="class_separation" id="menuCatMaison"></div>
</div>

<div class="vetement_details" >
    <div class="navbar_vetement">
            <ul class="navbar_listeVendeur_details detail_style centrer">
                    <li><a href="page-maison.php#menuCatMaison" class="text-uppercase" >All product</a> </li>
                    <li><a href="page-maison-sheet.php#menuCatMaison" class="badge text-uppercase bg_blue1 text-light">SHEET</a></li>
                    <li><a href="page-maison-pillow.php#menuCatMaison" class="text-uppercase">PILLOW</a></li>
                    <li><a href="page-maison-decoration.php#menuCatMaison" class="text-uppercase">DECORATION</a></li>
                </ul>
    </div>
</div>
<div class="maison_liste_total row">
    <!-- Premiere ligne -->
    <div class="col-1"></div>

    <div class="col-10">
        <div class="row">
        <?php
        // Total items
        if($row = mysqli_fetch_assoc($queryCountCadre)){
            $total = $row['total'];
            for ($i=0; $i<=$total;$i++){
                if($rowAllCadre = mysqli_fetch_assoc($queryAllCadre)){
                    $nameCadre = $rowAllCadre['name'];
                    $prixCadre = $rowAllCadre['price'];
                    $brandCadre = $rowAllCadre['brand'];
                    $quantityCadre = $rowAllCadre['quantity'];
                    $descriptionCadre = $rowAllCadre['description'];
                    $is_negotiated = $rowAllCadre['is_negotiated'];
                    ?>
                    <div class="listeVendeur_un_par_un col-3 mb-5">
                        <div class="card shadow cardProduct" style="width: 18rem;" >
                            <img class="img_listeVendeur_logo card-img-top" src="../../Image/chaussure.png" alt="oreiller">
            
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-9">
                                    <div class="detail_style_titre detail_style"><small><?php echo $nameCadre ?></small></div> 
                                <div class="detail_style_marque detail_style"><small><?php echo $brandCadre ?></small></div> 
                                    </div>
                                    <div class="col-md-3">
                                        <p href="#" class="detail_style_prix texte_style f_right"><small><?php echo $prixCadre ?> €</small> </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6 p-1 m-0">
                                        <?php if($is_negotiated == 1){ ?>
                                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#nego_prix_maison"> <i class="far fa-handshake"></i><small> Negociate</small></button>
                                        <?php } ?>
                                        
                                    </div>

                                    <div class="col-6  p-1 m-0">
                                        <button type="button" class="btn btn-dark f_right"> <i class="fas fa-shopping-cart"></i>    <small>Add to cart</small></button>
                                    </div>
                            </div>
                            <?php  if($quantityCadre == 0 ){?>
                                    <div class="card-badge bg-danger  pl-5"> &nbsp; <i class="fas fa-exclamation-circle"></i> Ce produit n'est plus disponible &nbsp;</div>
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