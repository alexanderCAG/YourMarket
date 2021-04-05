
<?php
    $title="Tous nos produits";
    require "head.php";
        include("../../Bdd/cnx.php");
        
        $queryCountItems = mysqli_query($con, "select count(id_item) as total from item"); 
        
        $queryAllItems = mysqli_query($con, "select id_item,name, price , sold, brand,subcategory,category, quantity, description,photo, is_negotiated, is_buying from item,seller where seller.id_seller=item.id_seller and is_buying =1 and sold >0");
?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img_carousel position-relative" src="../../Image/T-SHIRT2.gif" class="d-block w-100"
                alt="acceuil_achat">
        </div>
        <div class="carousel-item">
            <img class="img_carousel" src="../../Image/T-SHIRT-men.gif" class="d-block w-100" alt="accueil_enchere">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

    </div>




<div class="maison_liste_total row pt-5 mt-5">
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
                    $photo = $rowAllItems['photo'];
                    $id_item = $rowAllItems['id_item'];
                    $sold = $rowAllItems['sold'];
                    
                    ?>
                    <div class="listeVendeur_un_par_un col-3 mb-5">
                        <div class="card shadow cardProduct" style="width: 18rem;" >
                            <img class="img_listeVendeur_logo card-img-top" src="<?php echo $photo ?>" alt="oreiller">
                            <?php  if($quantityCadre == 0 ){?>
                                <div class="bg-danger text-light w-100 text-center">Indisponible</div>
                                <?php }else{?>
                                    <div class="bg-white text-light w-100 text-center">-</div>
                            <?php }?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                    <div class="detail_style_titre detail_style"><small><?php echo $nameItems ?></small></div> 
                                <div class="detail_style_marque detail_style"><small><?php echo $brandItems ?></small></div> 
                                    </div>
                                    <div class="col-md-4">
                                        <p href="#" class="detail_style_prix texte_style f_right"><strike style="color:red;"><small>&nbsp;
                                             <?php echo $prixItems ?> €  &nbsp;</strike></small><br>

                                             <?php
                                        
                                              $prixItems = (int)$prixItems;
                                              $result = $prixItems-(($prixItems * $sold) / 100);
                                              
                                              echo $result; ?> €
                                        </p>
                                    </div>
                                </div>
                                <hr>
                           
                                <div class="card-badge rounded-circle p-3" style="background-color:#E74C3C">-&nbsp;<small><?php echo $sold ?> %</small></div>


                                <?php  if($subcategoryItems == 'sheet' ){?>
                                    <a class="btn btn-warning f_right rounded-0" style="fond-weight:bold!important;" >Sheets</small></a>
                                <?php }?>
                                <?php  if($subcategoryItems == 'pillow' ){?>
                                    <a class="btn btn-warning f_right rounded-0" style="fond-weight:bold!important;" >Pillows</small></a>
                                <?php }?>
                                <?php  if($subcategoryItems == 'decoration' ){?>
                                    <a class="btn btn-warning f_right rounded-0" style="fond-weight:bold!important;" >Decoration</small></a>
                                <?php }?>
                                <?php  if($subcategoryItems == 'tshirt' ){?>
                                    <a class="btn btn-warning f_right rounded-0" style="fond-weight:bold!important;" >T-shirt</small></a>
                                    <?php }?>
                                <?php  if($subcategoryItems == 'sweat_shirt' ){?>
                                    <a class="btn btn-warning f_right rounded-0" style="fond-weight:bold!important;" >Sweat-Shirt</small></a>
                                    <!-- <div class="card-badge bg_blue2  pl-5"> &nbsp;<i class="fas fa-bed"></i>  &nbsp;</div> -->
                                <?php }?>
                                <?php  if($subcategoryItems == 'shoes' ){?>
                                    <a class="btn btn-warning f_right rounded-0" style="fond-weight:bold!important;" >Shoes</small></a>
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
                    <input type="text" name="quantite_nego_maison" class="quantite_nego_maison" placeholder="Quantity">
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