<?php
    $title="Création d'Article";
    require "head.php";
?>


<div class="genale_newArticle position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_newArticle text-uppercase">
            Ajouter un article
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<div class="row ajoutAricle_contenu_general pb-4">
    <div class="col-2"></div>

    <div class="col-9 mt-3">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row ajout_article_div_body">
                <div class="col-1"></div>

                <div class="col-5">
                    <h3 class="ajout_article_titre text-uppercase detail_style">information générale</h3>
                    
                    <input id="nomProduit_ajoutArticle" name="nomProduit_ajoutArticle_Admin" class="contenu_details_Ajoutarticle" placeholder="Nom du produit">
                    <br>
                    <span id="nomProduitErreur_ajoutArticle"></span>
                    <br>
                    <textarea id="description_ajoutArticle" name="description_ajoutArticle_Admin" placeholder="Entrer une description" cols="45" rows="6" style="background-color: #f2f2f2;"></textarea>
                    <br>
                    <span id="descriptionErreur_ajoutArticle"></span>
                    <br>
                    <input id="prix_ajoutArticle" name="prix_ajoutArticle_Admin" class="contenu_details_Ajoutarticle contenu_details_Ajoutarticle_double_div" placeholder="Prix en euro (€)"><span id="prixErreur_ajoutArticle"></span>
                    <br>
                    <input id="quatite_ajoutArticle" name="quatite_ajoutArticle_Admin" class="contenu_details_Ajoutarticle contenu_details_Ajoutarticle_double_div" placeholder="Quatité"><span id="quantiteErreur_ajoutArticle"></span>
                    <br>
                </div>

                <div class="col-5">
                    <img id="img_inscription_choix_vendeur">
                    <div class="img_inscription_general">
                        <span class="file_inscription_img">
                            <span onclick="choix_image_vendeur()" class="btn btn-default btn_choix_img_vendeur_inscription">
                                Browse <input type="file" name="img_ajoutArticle_Admin" id="file_interrieur_inscription_img">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                        <span id="imageErreur_ajoutArticle_Admin"></span>
                    </div>
                </div>

                <div class="col-1"></div>
            </div>

            <br>

            <div class="row ajout_article_div_body">
                <div class="col-1"></div>

                <div class="col-5">
                    <select onchange="choixCategorie()" name="choixCategorie_ajoutArticle_Admin" id="choixCategorie_ajoutArticle" class="contenu_details_Ajoutarticle">
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
                        <select name="sousCategorie_ajoutArticle_maison_Admin" id="sousCategorie_ajoutArticle_maison" class="contenu_details_Ajoutarticle">
                            <option value="sous_categorieMaison">--Please choose an category--</option>
                            <option value="sheet">SHEETS</option>
                            <option value="pillow">PILLOW</option>
                            <option value="decoration">DECORATION</option>
                        </select>
                    </div>
                    <div class="choixSousCategorie_ajoutArticle_vetement">
                        <select name="sousCategorie_ajoutArticle_vetement_Admin" id="sousCategorie_ajoutArticle_vetement" class="contenu_details_Ajoutarticle">
                            <option value="sous_categorie_vetement">--Please choose an category--</option>
                            <option value="tshirt">T-SHIRT</option>
                            <option value="sweat_shirt">PULL</option>
                            <option value="shoes">CAP</option>
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
                    <input type="checkbox" name="achat_direct_ajoutArticle_Admin" id="achat_direct_ajoutArticle" value="Achat Direct">Achat Direct
                    <input type="checkbox" name="achat_nego_ajoutArticle_Admin" id="achat_nego_ajoutArticle" class="inputAchat_ajoutArticle" value="Négociation">Négociation
                    <input type="checkbox" name="achat_enchere_ajoutArticle_Admin" id="achat_enchere_ajoutArticle" class="inputAchat_ajoutArticle" value="Enchère">Enchère
                    <br>
                    <span id="typeAchatErreur_ajoutArticle"></span>
                    <br>
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

        $nomProduit_ajoutArticle=$_POST['nomProduit_ajoutArticle_Admin'];
        $description_ajoutArticle=$_POST['description_ajoutArticle_Admin'];
        $prix_ajoutArticle=$_POST['prix_ajoutArticle_Admin'];
        $quatite_ajoutArticle=$_POST['quatite_ajoutArticle_Admin'];
        $target_path="../../Image/";
        $target_path=$target_path.basename($_FILES['img_ajoutArticle_Admin']['name']);
        $choixCategorie_ajoutArticle=$_POST['choixCategorie_ajoutArticle_Admin'];
        $sousCategorie_ajoutArticle_maison=$_POST['sousCategorie_ajoutArticle_maison_Admin'];
        $sousCategorie_ajoutArticle_vetement=$_POST['sousCategorie_ajoutArticle_vetement_Admin'];
        $val1='0';
        $val2='0';
        $val3='0';

        $queryCountSeller = mysqli_query($con, "select count(id_seller) as totalVendeurs from seller");
        $row = mysqli_fetch_assoc($queryCountSeller);
        $total = $row['totalVendeurs'];
        $total = $total-1;
        $result=rand(1,$total);
        // $seller_email = $_SESSION['email'];
        // $id="SELECT id_seller FROM seller where email='$seller_email'";
        // $id_result=$con->query($id);
        // $row = mysqli_fetch_array($id_result);
        // $result = $row['id_seller'];

        if(move_uploaded_file($_FILES['img_ajoutArticle_Admin']['tmp_name'], $target_path)){
            if($choixCategorie_ajoutArticle=='choix_categorie_null'){
                
                return false;
            }elseif($choixCategorie_ajoutArticle=='Maison'){

                if($sousCategorie_ajoutArticle_maison=='sous_categorieMaison'){
                    echo'Sous Categorie Maison pb';
                    return false;
                }elseif($sousCategorie_ajoutArticle_maison=='sheet'){
                    
                    if(isset($_POST['achat_direct_ajoutArticle_Admin'])){
                        $Achat1 = $_POST['achat_direct_ajoutArticle_Admin'];
                        $val1='1';
                    }
                    if(isset($_POST['achat_nego_ajoutArticle_Admin'])){
                        $Achat2 = $_POST['achat_nego_ajoutArticle_Admin'];
                        $val2='1';
                    }
                    if(isset($_POST['achat_enchere_ajoutArticle_Admin'])){
                        $Achat3 = $_POST['achat_enchere_ajoutArticle_Admin'];
                        $val3='1';
                    }

                    $sql= mysqli_query($con,"INSERT INTO item(id_seller, price, name, category, subcategory, quantity, description, photo, is_bidding, is_negotiated, is_buying) 
                        VALUES ('$result','$prix_ajoutArticle','$nomProduit_ajoutArticle','Maison','sheet','$quatite_ajoutArticle','$description_ajoutArticle','$target_path','$val3','$val2','$val1')");

                }elseif($sousCategorie_ajoutArticle_maison=='pillow'){
                    
                    if(isset($_POST['achat_direct_ajoutArticle_Admin'])){
                        $Achat1 = $_POST['achat_direct_ajoutArticle_Admin'];
                        $val1='1';
                    }
                    if(isset($_POST['achat_nego_ajoutArticle_Admin'])){
                        $Achat2 = $_POST['achat_nego_ajoutArticle_Admin'];
                        $val2='1';
                    }
                    if(isset($_POST['achat_enchere_ajoutArticle_Admin'])){
                        $Achat3 = $_POST['achat_enchere_ajoutArticle_Admin'];
                        $val3='1';
                    }

                    $sql= mysqli_query($con,"INSERT INTO item(id_seller, price, name, category, subcategory, quantity, description, photo, is_bidding, is_negotiated, is_buying) 
                        VALUES ('$result','$prix_ajoutArticle','$nomProduit_ajoutArticle','Maison','pillow','$quatite_ajoutArticle','$description_ajoutArticle','$target_path','$val3','$val2','$val1')");

                }elseif($sousCategorie_ajoutArticle_maison=='decoration'){
                    
                    if(isset($_POST['achat_direct_ajoutArticle_Admin'])){
                        $Achat1 = $_POST['achat_direct_ajoutArticle_Admin'];
                        $val1='1';
                    }
                    if(isset($_POST['achat_nego_ajoutArticle_Admin'])){
                        $Achat2 = $_POST['achat_nego_ajoutArticle_Admin'];
                        $val2='1';
                    }
                    if(isset($_POST['achat_enchere_ajoutArticle_Admin'])){
                        $Achat3 = $_POST['achat_enchere_ajoutArticle_Admin'];
                        $val3='1';
                    }

                    $sql= mysqli_query($con,"INSERT INTO item(id_seller, price, name, category, subcategory, quantity, description, photo, is_bidding, is_negotiated, is_buying) 
                        VALUES ('$result','$prix_ajoutArticle','$nomProduit_ajoutArticle','Maison','decoration','$quatite_ajoutArticle','$description_ajoutArticle','$target_path','$val3','$val2','$val1')");

                }

            }elseif($choixCategorie_ajoutArticle=='Vetement'){
                
                if($sousCategorie_ajoutArticle_vetement=='sous_categorie_vetement'){
                    echo'Sous Categorie Vetement pb';
                    return false;
                }elseif($sousCategorie_ajoutArticle_vetement=='tshirt'){
                    
                    if(isset($_POST['achat_direct_ajoutArticle_Admin'])){
                        $Achat1 = $_POST['achat_direct_ajoutArticle_Admin'];
                        $val1='1';
                    }
                    if(isset($_POST['achat_nego_ajoutArticle_Admin'])){
                        $Achat2 = $_POST['achat_nego_ajoutArticle_Admin'];
                        $val2='1';
                    }
                    if(isset($_POST['achat_enchere_ajoutArticle_Admin'])){
                        $Achat3 = $_POST['achat_enchere_ajoutArticle_Admin'];
                        $val3='1';
                    }

                    $sql= mysqli_query($con,"INSERT INTO item(id_seller, price, name, category, subcategory, quantity, description, photo, is_bidding, is_negotiated, is_buying) 
                        VALUES ('$result','$prix_ajoutArticle','$nomProduit_ajoutArticle','Vetement','tshirt','$quatite_ajoutArticle','$description_ajoutArticle','$target_path','$val3','$val2','$val1')");

                }elseif($sousCategorie_ajoutArticle_vetement=='sweat_shirt'){
                    
                    if(isset($_POST['achat_direct_ajoutArticle_Admin'])){
                        $Achat1 = $_POST['achat_direct_ajoutArticle_Admin'];
                        $val1='1';
                    }
                    if(isset($_POST['achat_nego_ajoutArticle_Admin'])){
                        $Achat2 = $_POST['achat_nego_ajoutArticle_Admin'];
                        $val2='1';
                    }
                    if(isset($_POST['achat_enchere_ajoutArticle_Admin'])){
                        $Achat3 = $_POST['achat_enchere_ajoutArticle_Admin'];
                        $val3='1';
                    }

                    $sql= mysqli_query($con,"INSERT INTO item(id_seller, price, name, category, subcategory, quantity, description, photo, is_bidding, is_negotiated, is_buying) 
                        VALUES ('$result','$prix_ajoutArticle','$nomProduit_ajoutArticle','Vetement','sweet_shirt','$quatite_ajoutArticle','$description_ajoutArticle','$target_path','$val3','$val2','$val1')");

                }elseif($sousCategorie_ajoutArticle_vetement=='shoes'){
                    
                    if(isset($_POST['achat_direct_ajoutArticle_Admin'])){
                        $Achat1 = $_POST['achat_direct_ajoutArticle_Admin'];
                        $val1='1';
                    }
                    if(isset($_POST['achat_nego_ajoutArticle_Admin'])){
                        $Achat2 = $_POST['achat_nego_ajoutArticle_Admin'];
                        $val2='1';
                    }
                    if(isset($_POST['achat_enchere_ajoutArticle_Admin'])){
                        $Achat3 = $_POST['achat_enchere_ajoutArticle_Admin'];
                        $val3='1';
                    }

                    $sql= mysqli_query($con,"INSERT INTO item(id_seller, price, name, category, subcategory, quantity, description, photo, is_bidding, is_negotiated, is_buying) 
                        VALUES ('$result','$prix_ajoutArticle','$nomProduit_ajoutArticle','Vetement','shoes','$quatite_ajoutArticle','$description_ajoutArticle','$target_path','$val3','$val2','$val1')");

                }
            }
        }
    }

?>

<?php
    include("footer.php");
?>

