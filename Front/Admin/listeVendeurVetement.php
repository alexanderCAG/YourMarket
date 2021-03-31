<?php
    $title="Liste Vendeurs";
    require "head.php";
        include("../../Bdd/cnx.php");
        $seller_email = $_SESSION['email'];

        $queryCountMaisonBrand = mysqli_query($con, "select count(DISTINCT brand) as totalBrandMaison from seller, item where seller.id_seller=item.id_seller and category='Clothes'"); 

        $queryAllMaisonBrand = mysqli_query($con, "select DISTINCT(brand), phone,profil_picture, email from seller, item where seller.id_seller=item.id_seller and category='Clothes'");//
        
        if($row = mysqli_fetch_assoc($queryCountMaisonBrand)){
                    $total = $row['totalBrandMaison'];
        ?>
        <div class="genale_listeVendeur position-relative">
            <div class="texte_style position-absolute top-50 start-50 translate-middle">
                <p class="titre_general_listeVendeur text-uppercase">
                Liste des vendeurs
                </p>
                <!-- <p class="info_general_listeVendeur centrer detail_style">
                    Il y a <=?php echo $total ; ?> vendeur(s)
                </p> -->
            </div>
            
            <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
        </div>

        <div class="listeVendeur_details">
            <div class="navbar_listeVendeur">
                <ul class="navbar_listeVendeur_details detail_style centrer">
                    <li><a href="listeVendeur.php" class="text-uppercase">Toutes nos marques </a> </li>
                    <li><a href="listeVendeurMaison.php" class="text-uppercase">Marque de mobilier</a></li>
                    <li><a href="listeVendeurVetement.php" class="badge text-uppercase bg_blue1 text-light">marques de vêtements <span class="badge bg-light text-dark"><?php echo $total ; ?></span></a> </li>
                </ul>
            </div>
        </div>

        <div class="ajouter_vendeur">
            <button class="btn_ajout_vendeur_par_admin text-uppercase" data-bs-toggle="modal" data-bs-target="#ajout_vendeur_par_admin">+ Ajouter</button>
        </div>

        <div class="listeVendeur_total row">
            <!-- Premiere ligne -->
            <div class="col-1"></div>
            <div class="col-10">
                <div class="row">
                <?php
                    for ($i=0; $i<=$total;$i++){
                        if($rowAllBrandMaison = mysqli_fetch_assoc($queryAllMaisonBrand)){
                            $brandMaisonName = $rowAllBrandMaison['brand'];
                            $profil_picture_brand_Maison = $rowAllBrandMaison['profil_picture'];
                            $phoneBrandMaison = $rowAllBrandMaison['phone'];
                            $emailBrandMaison = $rowAllBrandMaison['email'];
                ?>
                    <div class="listeVendeur_un_par_un col-3 mb-5">
                        <div class="card" style="width: 18rem;">
                        <img class="img_listeVendeur_logo card-img-top" src="../../Image/chaussure.png" alt="oreiller">
        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="card-title"> <i class="fas fa-hand-holding-usd"></i> <?php echo $brandMaisonName ?></h5>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" class="btn btn-danger f_right"><i class="far fa-trash-alt"></i></a>
                                </div>
                            </div>
                            <hr>
                            <small class="card-title"> <i class="fas fa-phone-square-alt"></i> <?php echo $phoneBrandMaison ?></small><br>
                            <small class="card-title"> <i class="fas fa-envelope-square"></i> <?php echo $emailBrandMaison ?></small>
                            
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



<!-- Modal XXL-->
<div class="modal fade" id="ajout_vendeur_par_admin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen taille_modal_ajout_vendeur">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title titre_modal_ajout_vendeur texte_style text-uppercase" id="staticBackdropLabel">Add seller</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body mt-2">
                    <div class="row ajout_vendeur_div_body">
                        <div class="col-1"></div>

                        <div class="col-5">
                            <h3 class="ajout_vendeur_titre text-uppercase detail_style">information générale</h3>
                            
                            <input id="nomMarque_Ajoutvendeur" name="nomMarque_Ajoutvendeur" class="contenu_details_Ajoutvendeur" placeholder="Nom de la marque">
                            <br>
                            <span id="nomMarqueErreur_Ajoutvendeur"></span>
                            <br>
                            <input id="telephone_Ajoutvendeur" name="telephone_Ajoutvendeur" class="contenu_details_Ajoutvendeur" placeholder="Téléphone">
                            <br>
                            <span id="telephoneErreur_Ajoutvendeur"></span>
                            <br>
                            <input id="mail_Ajoutvendeur" name="mail_Ajoutvendeur" class="contenu_details_Ajoutvendeur" placeholder="Email">
                            <br>
                            <span id="mailErreur_Ajoutvendeur"></span>
                            <br>
                            <input id="mdp_Ajoutvendeur" name="mdp_Ajoutvendeur" type="password" class="contenu_details_Ajoutvendeur" placeholder="Mot de passe">
                            <br>
                            <span id="mdpErreur_Ajoutvendeur"></span>
                            <br>
                            <input id="mdp2_Ajoutvendeur" name="mdp2_Ajoutvendeur" type="password" class="contenu_details_Ajoutvendeur" placeholder="Confirmation mot de passe">
                            <br>
                            <span id="mdp2Erreur_Ajoutvendeur"></span>
                            <br>
                            <button type="button" onclick="reset_Ajoutvendeur()" class="btn_reset_Ajoutvendeur text-uppercase detail_style">Reset</button>
                            <button type="submit" id="submit_Ajoutvendeur" name="submit_Ajoutvendeur" class="btn_final_Ajoutvendeur text-uppercase detail_style">Add</button>
                        </div>

                        <div class="col-5" style="margin-left:50px!important;">
                            <img id="img_Ajoutvendeur">
                            <div class="img_Ajoutvendeur_general">
                                <span class="file_Ajoutvendeur_img">
                                    <span onclick="choix_image_vendeur()" class="btn btn-default btn_choix_img_Ajoutvendeur">
                                        Browse <input type="file" id="file_interrieur_Ajoutvendeur_img">
                                    </span>
                                </span>
                                <input type="text" name="img" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="col-1"></div>
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