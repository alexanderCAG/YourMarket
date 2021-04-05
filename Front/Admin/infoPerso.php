
<?php
    $title="Informations personnelles";
    require "head.php";
        include("../../Bdd/cnx.php");
        $email_user = $_SESSION['email'];
        // $queryCountItems = mysqli_query($con, "select count(id_item) as total from item, seller where seller.id_seller=item.id_seller and seller.email='$seller_email'"); 

        $queryinfoPerso_admin = mysqli_query($con, "SELECT `lastname`,`firstname`,`phone`,`email`,`password`,`adress1`,`adress2`,`country`,`city`,`zipcode` FROM `admin` WHERE (email='$email_user' or lastname='$email_user')");

    if($rowinfoPerso_admin = mysqli_fetch_assoc($queryinfoPerso_admin)){
        $lastname_admin = $rowinfoPerso_admin['lastname'];
        $firstname_admin = $rowinfoPerso_admin['firstname'];
        $phone_admin = $rowinfoPerso_admin['phone'];
        $email_admin = $rowinfoPerso_admin['email'];
        $passworde_admin = $rowinfoPerso_admin['password'];
        $adress1_admin = $rowinfoPerso_admin['adress1'];
        $adress2_admin = $rowinfoPerso_admin['adress2'];
        $country_admin = $rowinfoPerso_admin['country'];
        $city_admin = $rowinfoPerso_admin['city'];
        $zip_code_admin = $rowinfoPerso_admin['zipcode'];
?>


<div class="genale_page_infoPerso position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle general_infoPerso_div">
        <p class="titre_general_infoPerso text-uppercase centrer">
        Personal informations
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<!-- Admin personnal information -->
<div class="contenu_general_infoPerso_admin row">
    <div class="col-2"></div>

    <div class="col-8 infoPerso_livraison">

        <form action="../../Bdd/infoPerso_recup.php" method="POST">
            <div class="row">
                <div class="col-4">
                    <h3 class="infoPerso_detail_titre1_admin centrer text-uppercase detail_style" style="margin-bottom:50px!important;">personal information</h3>
                    
                    <input id="infoPerso_nom_admin" name="infoPerso_nom_admin" type="text" class="infoPerso_contenu_details_admin" value="<?php echo $lastname_admin ?>" placeholder="Lastname">
                    <br>
                    <span id="infoPerso_nomErreur_admin"></span>
                    <br>
                    <input id="infoPerso_prenom_admin" name="infoPerso_prenom_admin" type="text" class="infoPerso_contenu_details_admin" value="<?php echo $firstname_admin ?>" placeholder="Firstname">
                    <br>
                    <span id="infoPerso_prenomErreur_admin"></span>
                    <br>
                    <input id="infoPerso_telephone_admin" name="infoPerso_telephone_admin" type="text" class="infoPerso_contenu_details_admin" value="<?php echo $phone_admin ?>" placeholder="Phone">
                    <br>
                    <span id="infoPerso_telephoneErreur_admin"></span>
                    <br>
                    <input id="infoPerso_mail_admin" name="infoPerso_mail_admin" type="text" class="infoPerso_contenu_details_admin" value="<?php echo $email_admin ?>" placeholder="Email">
                    <br>
                    <span id="infoPerso_mailErreur_admin"></span>
                    <br>
                    <input id="infoPerso_mdp_admin" name="infoPerso_mdp_admin" type="password" class="infoPerso_contenu_details_admin" value="<?php echo $passworde_admin ?>" placeholder="Password">
                    <br>
                    <span id="infoPerso_mdpErreur_admin"></span>
                    <br>
                    <input id="infoPerso_mdp2_admin" name="infoPerso_mdp2_admin" type="password" class="infoPerso_contenu_details_admin" value="<?php echo $passworde_admin ?>" placeholder="Confirm password">
                    <br>
                    <span id="infoPerso_mdp2Erreur_admin"></span>
                    <br>
                </div>

                <div class="col-4" >
                    <h3 class="infoPerso_detail_titre2_admin centrer text-uppercase detail_style" style="margin-bottom:50px!important">delivery information</h3>
                    
                    <input id="infoPerso_adresse1_admin" name="infoPerso_adresse1_admin" type="text" class="infoPerso_contenu_details_admin" value="<?php echo $adress1_admin ?>" placeholder="Adresse 1">
                    <br>
                    <span id="infoPerso_adresse1Erreur_admin"></span>
                    <br>
                    <input id="infoPerso_adresse2_admin" name="infoPerso_adresse2_admin" type="text" class="infoPerso_contenu_details_admin" value="<?php echo $adress2_admin ?>" placeholder="Adresse 2">
                    <br>
                    <span id="infoPerso_adresse2Erreur_admin"></span>
                    <br>
                    <input id="infoPerso_pays_admin" name="infoPerso_pays_admin" type="text" class="infoPerso_contenu_details_admin" value="<?php echo $country_admin ?>" placeholder="Country">
                    <br>
                    <span id="infoPerso_paysErreur_admin"></span>
                    <br>
                    <input id="infoPerso_ville_admin" name="infoPerso_ville_admin" type="text" class="infoPerso_contenu_details_admin" value="<?php echo $city_admin ?>" placeholder="City">
                    <br>
                    <span id="infoPerso_villeErreur_admin"></span>
                    <br>
                    <input id="infoPerso_codepostal_admin" name="infoPerso_codepostal_admin" type="text" class="infoPerso_contenu_details_admin" value="<?php echo $zip_code_admin ?>" placeholder="Zip Code">
                    <br>
                    <span id="infoPerso_codepostalErreur_admin"></span>
                    <br>
                </div>

                <div class="col-4 centrer">
                    <button onclick="modif_infoPersoAdmin()" type="button" id="modif_infoPerso_admin" class="btn_infoPerso_final_admin text-uppercase detail_style">Edit</button>
                    <button onclick="annulModif_infoPersoAdmin()" type="button" id="annulModif_infoPerso_admin" class="btn_infoPerso_final_admin text-uppercase detail_style">Cancel Edit</button>
                    <button onclick="reset_infoPersoAdmin()" type="button" id="reset_infoPerso_admin" class="btn_infoPerso_final_admin text-uppercase detail_style">Reset</button>
                    <button type="submit" id="submit_valider_infoPerso_admin" name="submit_valider_infoPerso_admin" class="btn_infoPerso_final_admin text-uppercase detail_style">Validate</button>
                </div>
            </div>
        </form>

    </div>

    <div class="col-2"></div>

</div>

<?php
}
    include("footer.php");
?>
