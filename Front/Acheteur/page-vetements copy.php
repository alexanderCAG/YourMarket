
<?php
    $title="Page Vetement";
    require "head.php";
?>

<div class="vetement_general">
    <img class="image_vetement_general position-relative" src="../../Image/vetement-general.png" alt="vetement-general">
    <div class="deco_marque_general position-absolute position-absolute top-0 end-0">
        <img class="img_icon_sale position-absolute top-50 start-0 translate-middle-y" src="../../Image/icon_sale.png" alt="icon_sale">
        <p class="texte_deco_marque_general texte_style text-uppercase position-absolute top-50 start-50 translate-middle">vêtements</p> 
    </div>
    <div class="class_separation"></div>
</div>

<div class="vetement_details">
    <div class="navbar_vetement">
        <ul class="navbar_vetement_details detail_style centrer">
                <li><a href="#">T-SHIRT</a></li>
                <li><a href="#">SWEAT-SHIRT</a></li>
                <li><a href="#">PULL</a></li>
                <li><a href="#">CAP</a></li>
                <li><a href="#">MEN</a></li>
                <li><a href="#">WOMMEN</a></li>
        </ul>
    </div>
</div>

<div class="vetement_liste_total row">
    <!-- Premiere ligne -->
    <div class="col-1"></div>

    <div class="col-10">
        <div class="row">
            <div class=" vetement_liste_un_par_un col-3">
                <div class="img_vetement_presentation">
                    <img class="img_vetement_sale" src="../../Image/chaussure.png" alt="chaussure">
                    <div class="class_separation2"></div>
                </div>

                <div class="vetement_liste_details mt-2 position-relative">
                    <div class="vetement_liste_details_gauche">
                        <div class="detail_style_titre detail_style">TITRE ARTICLE</div> 
                        <div class="detail_style_marque detail_style">Marque article</div> 
                    </div>
                    <div class="vetement_liste_details_droite">
                        <p class="detail_style_prix texte_style">20€</p>
                    </div>
                    <center><button class="btn_ajouter_article position-absolute bottom-0 start-50 translate-middle-x">ADD TO CART</button></center>
                </div>
            </div>

            <div class=" vetement_liste_un_par_un col-3">
                <div class="img_vetement_presentation">
                    <img class="img_vetement_sale" src="../../Image/chaussure.png" alt="chaussure">
                    <div class="class_separation2"></div>
                </div>

                <div class="vetement_liste_details mt-2 position-relative">
                    <div class="vetement_liste_details_gauche">
                        <div class="detail_style_titre detail_style">TITRE ARTICLE</div> 
                        <div class="detail_style_marque detail_style">Marque article</div> 
                    </div>
                    <div class="vetement_liste_details_droite">
                        <p class="detail_style_prix texte_style">20€</p>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <center><button class="btn_ajouter_article position-absolute bottom-0 start-0">ADD TO CART</button></center>
                        </div>

                        <div class="col-6">
                            <center><button class="btn_ajouter_article position-absolute bottom-0 end-0">NEGOCIATE</button></center>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class=" vetement_liste_un_par_un col-3">
                <div class="img_vetement_presentation">
                    <img class="img_vetement_sale" src="../../Image/chaussure.png" alt="chaussure">
                    <div class="class_separation2"></div>
                </div>

                <div class="vetement_liste_details mt-2 position-relative">
                    <div class="vetement_liste_details_gauche">
                        <div class="detail_style_titre detail_style">TITRE ARTICLE</div> 
                        <div class="detail_style_marque detail_style">Marque article</div> 
                    </div>
                    <div class="vetement_liste_details_droite">
                        <p class="detail_style_prix texte_style">20€</p>
                    </div>
                    <center><button class="btn_ajouter_article position-absolute bottom-0 start-50 translate-middle-x">ADD TO CART</button></center>
                </div>
            </div>

            <div class=" vetement_liste_un_par_un col-3">
                <div class="img_vetement_presentation">
                    <img class="img_vetement_sale" src="../../Image/chaussure.png" alt="chaussure">
                    <div class="class_separation2"></div>
                </div>

                <div class="vetement_liste_details mt-2 position-relative">
                    <div class="vetement_liste_details_gauche">
                        <div class="detail_style_titre detail_style">TITRE ARTICLE</div> 
                        <div class="detail_style_marque detail_style">Marque article</div> 
                    </div>
                    <div class="vetement_liste_details_droite">
                        <p class="detail_style_prix texte_style">20€</p>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <center><button class="btn_ajouter_article position-absolute bottom-0 start-0">ADD TO CART</button></center>
                        </div>

                        <div class="col-6">
                            <center><button class="btn_ajouter_article position-absolute bottom-0 end-0" data-bs-toggle="modal" data-bs-target="#nego_prix_vetement">NEGOCIATE</button></center>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="col-1"></div>

</div>

<!-- Modal negociation-->
<div class="modal fade" id="nego_prix_vetement" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titre_modal_prix_nego texte_style text-uppercase" id="staticBackdropLabel">Choose a price</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2">
                    <input type="text" name="quantite_nego_vetement" class="quantite_nego_vetement" placeholder="Quantité">
                    <input type="text" name="prix_nego_vetement" class="prix_nego_vetement">€
                    <br><br>
                    <span class="condition_prix_nego">If you offer a price and this price is accepted by the seller, you will be automatically charged.</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="subit_btn_nego_prix_vetement" class="btn btn-primary">Send</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
    include("footer.php");
?>