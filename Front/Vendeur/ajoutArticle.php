<?php
    $title="Création d'Article";
    require "head.php";

    include("../../Bdd/cnx.php");
    $email_user = $_SESSION['email'];
    $Seller = mysqli_query($con, "select background from seller where email='$email_user' or brand='$email_user'");

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
}?>    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_newArticle text-uppercase">
            Add item
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<div class="row ajoutAricle_contenu_general pb-4">
    <div class="col-2"></div>

    <div class="col-9 mt-3">
        <!-- form to add article -->
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row ajout_article_div_body">
                <div class="col-1"></div>

                <div class="col-5">
                    <h3 class="ajout_article_titre text-uppercase detail_style">General Information</h3>
                    
                    <input id="nomProduit_ajoutArticle" name="nomProduit_ajoutArticle" class="contenu_details_Ajoutarticle" placeholder="Nom du produit">
                    <br>
                    <span id="nomProduitErreur_ajoutArticle"></span>
                    <br>
                    <textarea id="description_ajoutArticle" name="description_ajoutArticle" placeholder="Entrer une description" cols="45" rows="6" style="background-color: #f2f2f2;"></textarea>
                    <br>
                    <span id="descriptionErreur_ajoutArticle"></span>
                    <br>
                    <input id="prix_ajoutArticle" name="prix_ajoutArticle" class="contenu_details_Ajoutarticle contenu_details_Ajoutarticle_double_div" placeholder="Prix en euro (€)"><span id="prixErreur_ajoutArticle"></span>
                    <br>
                    <input id="quatite_ajoutArticle" name="quatite_ajoutArticle" class="contenu_details_Ajoutarticle contenu_details_Ajoutarticle_double_div" placeholder="Quatité"><span id="quantiteErreur_ajoutArticle"></span>
                    <br>
                </div>

                <div class="col-5">
                    <!-- Add an image for the article -->
                    <img id="img_inscription_choix_vendeur">
                    <div class="img_inscription_general">
                        <span class="file_inscription_img">
                            <span onclick="choix_image_vendeur()" class="btn btn-default btn_choix_img_vendeur_inscription">
                                Browse <input type="file" name="img_ajoutArticle" id="file_interrieur_inscription_img">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                        <span id="imageErreur_ajoutArticle"></span>
                    </div>
                </div>

                <div class="col-1"></div>
            </div>

            <br>

            <div class="row ajout_article_div_body">
                <!-- Different information of the new article -->
                <div class="col-1"></div>

                <div class="col-5">
                    <select onchange="choixCategorie()" name="choixCategorie_ajoutArticle" id="choixCategorie_ajoutArticle" class="contenu_details_Ajoutarticle">
                        <option value="choix_categorie_null">--Please choose an category--</option>
                        <option value="Maison">HOUSE</option>
                        <option value="Vetement">CLOTHES</option>
                    </select>
                    <br>
                    <span id="choixCategorieErreur_ajoutArticle"></span>
                    <br>
                </div>
                
                <div class="col-5">
                    <div class="choixSousCategorie_ajoutArticle_maison">
                        <select name="sousCategorie_ajoutArticle_maison" id="sousCategorie_ajoutArticle_maison" class="contenu_details_Ajoutarticle">
                            <option value="sous_categorieMaison">--Please choose an category--</option>
                            <option value="sheet">SHEETS</option>
                            <option value="pillow">PILLOW</option>
                            <option value="decoration">DECORATION</option>
                        </select>
                    </div>
                    <div class="choixSousCategorie_ajoutArticle_vetement">
                        <select name="sousCategorie_ajoutArticle_vetement" id="sousCategorie_ajoutArticle_vetement" class="contenu_details_Ajoutarticle">
                            <option value="sous_categorie_vetement">--Please choose an category--</option>
                            <option value="tshirt">T-SHIRT</option>
                            <option value="sweat_shirt">PULL</option>
                            <option value="shoes">SHOES</option>
                        </select>
                    </div>
                    <br>
                    <span id="choixSousCategorieErreur_ajoutArticle_maison"></span>
                    <span id="choixSousCategorieErreur_ajoutArticle_vetement"></span>
                    <br>
                </div>

                <div class="col-1"></div>
            </div>

            <br>

            <div class="row ajout_article_div_body">
                <div class="col-1"></div>

                <div class="col-5 detail_style mt-4">
                    <input type="checkbox" name="achat_direct_ajoutArticle" id="achat_direct_ajoutArticle" value="Achat Direct">Buy now
                    <input type="checkbox" name="achat_nego_ajoutArticle" id="achat_nego_ajoutArticle" class="inputAchat_ajoutArticle" value="Négociation">Offer
                    <input type="checkbox" name="achat_enchere_ajoutArticle" id="achat_enchere_ajoutArticle" class="inputAchat_ajoutArticle" value="Enchère">Bid
                    <br>
                    <span id="typeAchatErreur_ajoutArticle"></span>
                    <br>
                    <input type="datetime-local" class="contenu_details_Ajoutarticle" name="dateAjoutarticle" id="dateAjoutarticle">
                    <br>
                    <span id="dateErreur_ajoutArticle"></span>
                </div>

                <div class="col-5">
                    <button type="button" onclick="reset_ajoutArticle()" class="btn_reset_ajoutArticle text-uppercase detail_style">Reset</button>
                    <button type="submit" id="submit_ajoutArticle" name="submit_ajoutArticle" class="btn_final_ajoutArticle text-uppercase detail_style">Add</button>
                </div>

                <div class="col-1"></div>
            </div>
        </form>
    </div>
    
    <div class="col-1"></div>
</div>

<?php

    include("../../Bdd/cnx.php");
        
    if (isset($_POST['submit_ajoutArticle'])){

        $nomProduit_ajoutArticle=$_POST['nomProduit_ajoutArticle'];
        $description_ajoutArticle=$_POST['description_ajoutArticle'];
        $prix_ajoutArticle=$_POST['prix_ajoutArticle'];
        $quatite_ajoutArticle=$_POST['quatite_ajoutArticle'];
        $target_path="../../Image/";
        $target_path=$target_path.basename($_FILES['img_ajoutArticle']['name']);
        $choixCategorie_ajoutArticle=$_POST['choixCategorie_ajoutArticle'];
        $sousCategorie_ajoutArticle_maison=$_POST['sousCategorie_ajoutArticle_maison'];
        $sousCategorie_ajoutArticle_vetement=$_POST['sousCategorie_ajoutArticle_vetement'];
        $val1='0';
        $val2='0';
        $val3='0';
        $dateAjoutarticle = "2000-04-04T15:12";
        

        $seller_email = $_SESSION['email'];
        $id="SELECT id_seller FROM seller where email='$seller_email'";
        $id_result=$con->query($id);
        $row = mysqli_fetch_array($id_result);
        $result = $row['id_seller'];

        $sold_choix = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 0, 0, 0, 0, 0, 0,  10 ,25, 45, 60);
        $aleatoire = rand('0', count($sold_choix)-1);
        $sold = $sold_choix[$aleatoire];

        $grade = 0;
        $tot_rate = 0;

        if(move_uploaded_file($_FILES['img_ajoutArticle']['tmp_name'], $target_path)){
            if($choixCategorie_ajoutArticle=='choix_categorie_null'){
                
                return false;
            }elseif($choixCategorie_ajoutArticle=='Maison'){

                if($sousCategorie_ajoutArticle_maison=='sous_categorieMaison'){
                    echo'Sous Categorie Maison pb';
                    return false;
                }elseif($sousCategorie_ajoutArticle_maison=='sheet'){
                    
                    if(isset($_POST['achat_direct_ajoutArticle'])){
                        $Achat1 = $_POST['achat_direct_ajoutArticle'];
                        $val1='1';
                    }
                    if(isset($_POST['achat_nego_ajoutArticle'])){
                        $Achat2 = $_POST['achat_nego_ajoutArticle'];
                        $val2='1';
                    }
                    if(isset($_POST['achat_enchere_ajoutArticle'])){
                        $Achat3 = $_POST['achat_enchere_ajoutArticle'];
                        $dateAjoutarticle = $_POST['dateAjoutarticle'];
                        $val3='1';
                    }

                    $sql= mysqli_query($con,"INSERT INTO item(id_seller, price, name, category, subcategory, quantity, description, photo, is_bidding, is_negotiated, is_buying, end_enchere,sold,grade,tot_rate) 
                        VALUES ('$result','$prix_ajoutArticle','$nomProduit_ajoutArticle','House','sheet','$quatite_ajoutArticle','$description_ajoutArticle','$target_path','$val3','$val2','$val1','$dateAjoutarticle','$sold','$grade','$tot_rate')");

                }elseif($sousCategorie_ajoutArticle_maison=='pillow'){
                    
                    if(isset($_POST['achat_direct_ajoutArticle'])){
                        $Achat1 = $_POST['achat_direct_ajoutArticle'];
                        $val1='1';
                    }
                    if(isset($_POST['achat_nego_ajoutArticle'])){
                        $Achat2 = $_POST['achat_nego_ajoutArticle'];
                        $val2='1';
                    }
                    if(isset($_POST['achat_enchere_ajoutArticle'])){
                        $Achat3 = $_POST['achat_enchere_ajoutArticle'];
                        $dateAjoutarticle = $_POST['dateAjoutarticle'];
                        $val3='1';
                    }

                    $sql= mysqli_query($con,"INSERT INTO item(id_seller, price, name, category, subcategory, quantity, description, photo, is_bidding, is_negotiated, is_buying, end_enchere,sold,grade,tot_rate) 
                        VALUES ('$result','$prix_ajoutArticle','$nomProduit_ajoutArticle','House','pillow','$quatite_ajoutArticle','$description_ajoutArticle','$target_path','$val3','$val2','$val1','$dateAjoutarticle','$sold','$grade','$tot_rate')");

                }elseif($sousCategorie_ajoutArticle_maison=='decoration'){
                    
                    if(isset($_POST['achat_direct_ajoutArticle'])){
                        $Achat1 = $_POST['achat_direct_ajoutArticle'];
                        $val1='1';
                    }
                    if(isset($_POST['achat_nego_ajoutArticle'])){
                        $Achat2 = $_POST['achat_nego_ajoutArticle'];
                        $val2='1';
                    }
                    if(isset($_POST['achat_enchere_ajoutArticle'])){
                        $Achat3 = $_POST['achat_enchere_ajoutArticle'];
                        $dateAjoutarticle = $_POST['dateAjoutarticle'];
                        $val3='1';
                    }

                    $sql= mysqli_query($con,"INSERT INTO item(id_seller, price, name, category, subcategory, quantity, description, photo, is_bidding, is_negotiated, is_buying, end_enchere,sold,grade,tot_rate) 
                        VALUES ('$result','$prix_ajoutArticle','$nomProduit_ajoutArticle','House','decoration','$quatite_ajoutArticle','$description_ajoutArticle','$target_path','$val3','$val2','$val1','$dateAjoutarticle','$sold','$grade','$tot_rate')");

                }

            }elseif($choixCategorie_ajoutArticle=='Vetement'){
                
                if($sousCategorie_ajoutArticle_vetement=='sous_categorie_vetement'){
                    echo'Sous Categorie Vetement pb';
                    return false;
                }elseif($sousCategorie_ajoutArticle_vetement=='tshirt'){
                    
                    if(isset($_POST['achat_direct_ajoutArticle'])){
                        $Achat1 = $_POST['achat_direct_ajoutArticle'];
                        $val1='1';
                    }
                    if(isset($_POST['achat_nego_ajoutArticle'])){
                        $Achat2 = $_POST['achat_nego_ajoutArticle'];
                        $val2='1';
                    }
                    if(isset($_POST['achat_enchere_ajoutArticle'])){
                        $Achat3 = $_POST['achat_enchere_ajoutArticle'];
                        $dateAjoutarticle = $_POST['dateAjoutarticle'];
                        $val3='1';
                    }

                    $sql= mysqli_query($con,"INSERT INTO item(id_seller, price, name, category, subcategory, quantity, description, photo, is_bidding, is_negotiated, is_buying, end_enchere,sold,grade,tot_rate) 
                        VALUES ('$result','$prix_ajoutArticle','$nomProduit_ajoutArticle','Clothes','tshirt','$quatite_ajoutArticle','$description_ajoutArticle','$target_path','$val3','$val2','$val1','$dateAjoutarticle','$sold','$grade','$tot_rate')");

                }elseif($sousCategorie_ajoutArticle_vetement=='sweat_shirt'){
                    
                    if(isset($_POST['achat_direct_ajoutArticle'])){
                        $Achat1 = $_POST['achat_direct_ajoutArticle'];
                        $val1='1';
                    }
                    if(isset($_POST['achat_nego_ajoutArticle'])){
                        $Achat2 = $_POST['achat_nego_ajoutArticle'];
                        $val2='1';
                    }
                    if(isset($_POST['achat_enchere_ajoutArticle'])){
                        $Achat3 = $_POST['achat_enchere_ajoutArticle'];
                        $dateAjoutarticle = $_POST['dateAjoutarticle'];
                        $val3='1';
                    }

                    $sql= mysqli_query($con,"INSERT INTO item(id_seller, price, name, category, subcategory, quantity, description, photo, is_bidding, is_negotiated, is_buying, end_enchere,sold,grade,tot_rate) 
                        VALUES ('$result','$prix_ajoutArticle','$nomProduit_ajoutArticle','Clothes','sweet_shirt','$quatite_ajoutArticle','$description_ajoutArticle','$target_path','$val3','$val2','$val1','$dateAjoutarticle','$sold','$grade','$tot_rate')");

                }elseif($sousCategorie_ajoutArticle_vetement=='shoes'){
                    
                    if(isset($_POST['achat_direct_ajoutArticle'])){
                        $Achat1 = $_POST['achat_direct_ajoutArticle'];
                        $val1='1';
                    }
                    if(isset($_POST['achat_nego_ajoutArticle'])){
                        $Achat2 = $_POST['achat_nego_ajoutArticle'];
                        $val2='1';
                    }
                    if(isset($_POST['achat_enchere_ajoutArticle'])){
                        $Achat3 = $_POST['achat_enchere_ajoutArticle'];
                        $dateAjoutarticle = $_POST['dateAjoutarticle'];
                        $val3='1';
                    }

                    $sql= mysqli_query($con,"INSERT INTO item(id_seller, price, name, category, subcategory, quantity, description, photo, is_bidding, is_negotiated, is_buying, end_enchere,sold,grade,tot_rate) 
                        VALUES ('$result','$prix_ajoutArticle','$nomProduit_ajoutArticle','Clothes','shoes','$quatite_ajoutArticle','$description_ajoutArticle','$target_path','$val3','$val2','$val1','$dateAjoutarticle','$sold','$grade','$tot_rate')");

                }
            }
        }
    }

?>

<?php
    include("footer.php");
?>