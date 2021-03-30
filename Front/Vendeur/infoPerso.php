
<?php
    $title="Informations personnelles";
    require "head.php";
        include("../../Bdd/cnx.php");
        $email_user = $_SESSION['email'];
        // $queryCountItems = mysqli_query($con, "select count(id_item) as total from item, seller where seller.id_seller=item.id_seller and seller.email='$seller_email'"); 

        $queryinfoPerso_vendeur = mysqli_query($con, "SELECT brand,profil_picture,phone,email,passworde FROM seller WHERE email='$email_user'");

    if($rowinfoPerso_vendeur = mysqli_fetch_assoc($queryinfoPerso_vendeur)){
        $brand_vendeur = $rowinfoPerso_vendeur['brand'];
        $profil_picture_vendeur = $rowinfoPerso_vendeur['profil_picture'];
        $phone_vendeur = $rowinfoPerso_vendeur['phone'];
        $email_vendeur = $rowinfoPerso_vendeur['email'];
        $passworde_vendeur = $rowinfoPerso_vendeur['passworde'];

?>


<div class="genale_page_infoPerso position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle general_infoPerso_div">
        <p class="titre_general_infoPerso text-uppercase centrer">
            Informations personnelles
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<!-- Vendeur -->
<div class="contenu_general_infoPerso_vendeur row">
    <div class="col-2"></div>

    <div class="col-8 infoPerso_vendeur">

        <form action="../../Bdd/infoPerso_recup.php" method="POST" enctype="multipart/form-data">
            <div class="row inscription_contenu_vendeur">
                <div class="col-1"></div>

                <div class="col-5">
                    <h3 class="infoPerso_detail_titre1_vendeur text-uppercase detail_style">information générale</h3>
                    
                    <input id="infoPerso_nomMarque_vendeur" name="infoPerso_nomMarque_vendeur" class="infoPerso_contenu_details_vendeur" value="<?php echo $brand_vendeur ?>" placeholder="Nom de la marque">
                    <br>
                    <span id="infoPerso_nomMarqueErreur_vendeur"></span>
                    <br>
                    <input id="infoPerso_telephone_vendeur" name="infoPerso_telephone_vendeur" class="infoPerso_contenu_details_vendeur" value="<?php echo $phone_vendeur ?>" placeholder="Téléphone">
                    <br>
                    <span id="infoPerso_telephoneErreur_vendeur"></span>
                    <br>
                    <input id="infoPerso_mail_vendeur" name="infoPerso_mail_vendeur" class="infoPerso_contenu_details_vendeur" value="<?php echo $email_vendeur ?>" placeholder="Email">
                    <br>
                    <span id="infoPerso_mailErreur_vendeur"></span>
                    <br>
                    <input id="infoPerso_mdp_vendeur" name="infoPerso_mdp_vendeur" type="password" class="infoPerso_contenu_details_vendeur" value="<?php echo $passworde_vendeur ?>" placeholder="Mot de passe">
                    <br>
                    <span id="infoPerso_mdpErreur_vendeur"></span>
                    <br>
                    <input id="infoPerso_mdp2_vendeur" name="infoPerso_mdp2_vendeur" type="password" class="infoPerso_contenu_details_vendeur" value="<?php echo $passworde_vendeur ?>" placeholder="Confirmation mot de passe">
                    <br>
                    <span id="infoPerso_mdp2Erreur_vendeur"></span>
                    <br>
                </div>

                <div class="col-5" style="margin-left:50px!important;">
                    <img id="infoPerso_img_inscription_choix_vendeur">
                    <div class="infoPerso_img_inscription_general">
                        <span class="infoPerso_file_inscription_img">
                            <span onclick="choix_image_vendeur()" class="btn btn-default infoPerso_btn_choix_img_vendeur_inscription">
                                Browse <input type="file" id="infoPerso_file_interrieur_inscription_img">
                            </span>
                        </span>
                        <input type="text" name="infoPerso_img" class="form-control" readonly>
                    </div>
                    <br><br>
                </div>

                <div class="col-1"></div>

            </div>

            <div class="row">
                <div class="col-1"></div>

                <div class="col-10">
                    <button onclick="modif_infoPersoVendeur()" type="button" id="modif_infoPersoL_vendeur" class="btn_infoPerso_final_vendeur text-uppercase detail_style">Modifier</button>
                    <button onclick="annulModif_infoPersoVendeur()" type="button" id="annulModif_infoPersoL_vendeur" class="btn_infoPerso_final_vendeur text-uppercase detail_style">Annuler Modif</button>
                    <button onclick="reset_infoPersoVendeur()" type="button" id="reset_infoPersoL_vendeur" class="btn_infoPerso_final_vendeur text-uppercase detail_style">Reset</button>
                    <button type="submit" id="submit_valider_infoPerso_vendeur" name="submit_valider_infoPerso_vendeur" class="btn_infoPerso_final_vendeur text-uppercase detail_style">Valider</button>
                </div>

                <div class="col-1"></div>
            </div>
        </form>

    </div>

    <div class="col-2"></div>
</div>

<?php
}
    include("footer.php");
?>
