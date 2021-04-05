<?php
    $title="Informations personnelles";
    require "head.php";
        include("../../Bdd/cnx.php");
        $email_user = $_SESSION['email'];
        // $queryCountItems = mysqli_query($con, "select count(id_item) as total from item, seller where seller.id_seller=item.id_seller and seller.email='$seller_email'"); 

        $queryinfoPerso_acheteur = mysqli_query($con, "select lastname,firstname,phone,email,passworde,adress1,adress2,city,zip_code,country,carde,code,num_card,expiration,nom from buyer, payment where buyer.id_buyer=payment.id_buyer and (email='$email_user' or lastname='$email_user')");

    if($rowinfoPerso_acheteur = mysqli_fetch_assoc($queryinfoPerso_acheteur)){
        $lastname_acheteur = $rowinfoPerso_acheteur['lastname'];
        $firstname_acheteur = $rowinfoPerso_acheteur['firstname'];
        $phone_acheteur = $rowinfoPerso_acheteur['phone'];
        $email_acheteur = $rowinfoPerso_acheteur['email'];
        $passworde_acheteur = $rowinfoPerso_acheteur['passworde'];
        $adress1_acheteur = $rowinfoPerso_acheteur['adress1'];
        $adress2_acheteur = $rowinfoPerso_acheteur['adress2'];
        $city_acheteur = $rowinfoPerso_acheteur['city'];
        $zip_code_acheteur = $rowinfoPerso_acheteur['zip_code'];
        $country_acheteur = $rowinfoPerso_acheteur['country'];
        $carde_acheteur = $rowinfoPerso_acheteur['carde'];
        $code_acheteur = $rowinfoPerso_acheteur['code'];
        $num_card_acheteur = $rowinfoPerso_acheteur['num_card'];
        $expiration_acheteur = $rowinfoPerso_acheteur['expiration'];
        $nom_acheteur = $rowinfoPerso_acheteur['nom'];

?>


<div class="genale_page_infoPerso position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle general_infoPerso_div">
        <p class="titre_general_infoPerso text-uppercase centrer">
        Personal informations
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<!-- Acheteur -->
<div class="contenu_general_infoPerso_acheteur row">
    <div class="col-1"></div>

    <div class="col-3 infoPerso_paiement">
        <!-- payment information -->
        <form action="../../Bdd/infoPerso_recup.php" method="POST">
            <div>
                <h3 class="infoPerso_detail_titre1_acheteur text-uppercase centrer detail_style" style="margin-bottom:50px!important">Payment information</h3>

                <div class="row">

                    <div class="col-1"></div>

                    <div class="col-10">
                        <input id="infoPerso_typeCarte_acheteur" name="infoPerso_typeCarte_acheteur" type="text" class="infoPaiement_contenu_details_acheteur centrer" placeholder="Type de carte">
                        <br>
                        <span id="infoPerso_typeCarteErreur_acheteur"></span>
                        <br>

                        <div class="row">
                            <div class="col-6">
                                <!-- define the type of the card -->
                                <?php if($carde_acheteur == "carte_payement_amex"){ 
                                echo'<input type="radio" name="infoPerso_carte_bancaire" id="infoPerso_carte_payement_amex" value="carte_payement_amex" checked>';
                                }
                                else{
                                    echo'<input type="radio" name="infoPerso_carte_bancaire" id="infoPerso_carte_payement_amex" value="carte_payement_amex">';
                                } ?>
                                <img class="image_infoPayment" src="../../Image/carte_payement_amex.png" alt="carte_payement_amex">
                            </div>

                            <div class="col-6">
                            <?php if($carde_acheteur == "carte_payement_cb"){ 
                                echo'
                                <input type="radio" name="infoPerso_carte_bancaire" id="infoPerso_carte_payement_cb" value="carte_payement_cb" checked>';
                                }
                                else{
                                    echo'<input type="radio" name="infoPerso_carte_bancaire" id="infoPerso_carte_payement_cb" value="carte_payement_cb">';
                                }?>
                                <img class="image_infoPayment" src="../../Image/carte_payement_cb.png" alt="carte_payement_cb">
                            </div>
                        </div>
                        <div class="row" style="margin-bottom:20px!important">
                            <div class="col-6">
                            <?php if($carde_acheteur == "carte_payement_mastercard"){ 
                                echo' <input type="radio" name="infoPerso_carte_bancaire" id="infoPerso_carte_payement_mastercard" value="carte_payement_mastercard" checked>';
                                }
                                else{
                                echo' <input type="radio" name="infoPerso_carte_bancaire" id="infoPerso_carte_payement_mastercard" value="carte_payement_mastercard">';
                            }?>
                                <img class="image_infoPayment" src="../../Image/carte_payement_mastercard.png" alt="carte_payement_mastercard">
                            </div>

                            <div class="col-6">
                            <?php if($carde_acheteur == "carte_payement_visa"){ 
                                echo'
                                <input type="radio" name="infoPerso_carte_bancaire" id="infoPerso_carte_payement_visa" value="carte_payement_visa" checked>';
                                }
                                else{
                                    echo'
                                    <input type="radio" name="infoPerso_carte_bancaire" id="infoPerso_carte_payement_visa" value="carte_payement_visa">';
                                }?>
                                <img class="image_infoPayment" src="../../Image/carte_payement_visa.png" alt="carte_payement_visa">
                            </div>
                        </div>

                        <input id="infoPerso_numeroCarte_acheteur" name="infoPerso_numeroCarte_acheteur" type="text" class="infoPaiement_contenu_details_acheteur" placeholder="Numero de carte" value="<?php echo $num_card_acheteur ?>">
                        <br>
                        <span id="infoPerso_numeroCarteErreur_acheteur"></span>
                        <br>
                        <input id="infoPerso_nomCarte_acheteur" name="infoPerso_nomCarte_acheteur" type="text" class="infoPaiement_contenu_details_acheteur" placeholder="Nom" value="<?php echo $nom_acheteur ?>">
                        <br>
                        <span id="infoPerso_nomCarteErreur_acheteur"></span>
                        <br>
                        <label style="color:#888888;">Expiration date</label><br>
                        <input id="infoPerso_dateExpiration_acheteur" name="infoPerso_dateExpiration_acheteur" type="date" class="infoPaiement_contenu_details_acheteur" placeholder="Date d'expiration" value="<?php echo $expiration_acheteur ?>">
                        <br>
                        <span id="infoPerso_dateExpirationErreur_acheteur"></span>
                        <br>
                        <input id="infoPerso_codeSecret_acheteur" name="infoPerso_codeSecret_acheteur" type="text" class="infoPaiement_contenu_details_acheteur" placeholder="Code secret" value="<?php echo $code_acheteur ?>">
                        <br>
                        <span id="infoPerso_codeSecretErreur_acheteur"></span>
                        <br><br>

                        <button onclick="modif_infoPerso_paiement()" type="button" id="modif_infoPaiement_acheteur" class="btn_infoPaiement_final_acheteur text-uppercase detail_style">Modifier</button>
                        <button onclick="annulModif_infoPerso_paiement()" type="button" id="annulModif_infoPaiement_acheteur" class="btn_infoPaiement_final_acheteur text-uppercase detail_style">Annuler Modif</button>
                        <button onclick="reset_infoPerso_paiement()" type="button" id="reset_infoPaiement_acheteur" class="btn_infoPaiement_final_acheteur text-uppercase detail_style">Reset</button>
                        <button type="submit" id="submit_valider_infoPaiement_acheteur" name="submit_valider_infoPaiement_acheteur" class="btn_infoPaiement_final_acheteur text-uppercase detail_style">Valider</button>
                    </div>

                    <div class="col-1"></div>
                    
                </div>

            </div>
            
        </form>
        
    </div>
    
    <div class="col-1"></div>

    <div class="col-6 infoPerso_livraison">
        <!-- personal information -->
        <form action="../../Bdd/infoPerso_recup.php" method="POST">
            <div class="row">
                <div class="col-1"></div>

                <div class="col-5">
                    <h3 class="infoPerso_detail_titre2_acheteur text-uppercase detail_style" style="margin-bottom:50px!important;">personal information</h3>
                    
                    <input id="infoPerso_nom_acheteur" name="infoPerso_nom_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Nom" value="<?php echo $lastname_acheteur ?>">
                    <br>
                    <span id="infoPerso_nomErreur_acheteur"></span>
                    <br>
                    <input id="infoPerso_prenom_acheteur" name="infoPerso_prenom_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Prénom" value="<?php echo $firstname_acheteur ?>">
                    <br>
                    <span id="infoPerso_prenomErreur_acheteur"></span>
                    <br>
                    <input id="infoPerso_telephone_acheteur" name="infoPerso_telephone_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Téléphone" value="<?php echo $phone_acheteur ?>">
                    <br>
                    <span id="infoPerso_telephoneErreur_acheteur"></span>
                    <br>
                    <input id="infoPerso_mail_acheteur" name="infoPerso_mail_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Email" value="<?php echo $email_acheteur ?>">
                    <br>
                    <span id="infoPerso_mailErreur_acheteur"></span>
                    <br>
                    <input id="infoPerso_mdp_acheteur" name="infoPerso_mdp_acheteur" type="password" class="infoPersoL_contenu_details_acheteur" placeholder="Mot de passe" value="<?php echo $passworde_acheteur ?>">
                    <br>
                    <span id="infoPerso_mdpErreur_acheteur"></span>
                    <br>
                    <input id="infoPerso_mdp2_acheteur" name="infoPerso_mdp2_acheteur" type="password" class="infoPersoL_contenu_details_acheteur" placeholder="Confirmation mot de passe" value="<?php echo $passworde_acheteur ?>">
                    <br>
                    <span id="infoPerso_mdp2Erreur_acheteur"></span>
                    <br>
                </div>

                <div class="col-5" style="margin-left:50px!important;" >
                    <h3 class="infoPerso_detail_titre3_acheteur text-uppercase detail_style" style="margin-bottom:50px!important">delivery information</h3>
                    
                    <input id="infoPerso_adresse1_acheteur" name="infoPerso_adresse1_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Adresse 1" value="<?php echo $adress1_acheteur ?>">
                    <br>
                    <span id="infoPerso_adresse1Erreur_acheteur"></span>
                    <br>
                    <input id="infoPerso_adresse2_acheteur" name="infoPerso_adresse2_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Adresse 2" value="<?php echo $adress2_acheteur ?>">
                    <br>
                    <span id="infoPerso_adresse2Erreur_acheteur"></span>
                    <br>
                    <input id="infoPerso_pays_acheteur" name="infoPerso_pays_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Pays" value="<?php echo $country_acheteur ?>">
                    <br>
                    <span id="infoPerso_paysErreur_acheteur"></span>
                    <br>
                    <input id="infoPerso_ville_acheteur" name="infoPerso_ville_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Ville" value="<?php echo $city_acheteur ?>">
                    <br>
                    <span id="infoPerso_villeErreur_acheteur"></span>
                    <br>
                    <input id="infoPerso_codepostal_acheteur" name="infoPerso_codepostal_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Code Postal" value="<?php echo $zip_code_acheteur ?>">
                    <br>
                    <span id="infoPerso_codepostalErreur_acheteur"></span>
                    <br>
                </div>

                <div class="col-1"></div>
            </div>
            
            <div class="row">
                <div class="col-1"></div>

                <div class="col-10" style="margin-top:50px!important">
                    <button onclick="modif_infoPersoL_livraison()" type="button" id="modif_infoPersoL_acheteur" class="btn_infoPersoL_final_acheteur text-uppercase detail_style">Edit</button>
                    <button onclick="annulModif_infoPersoL_livraison()" type="button" id="annulModif_infoPersoL_acheteur" class="btn_infoPersoL_final_acheteur text-uppercase detail_style">Cancel Edit</button>
                    <button onclick="reset_infoPersoL_livraison()" type="button" id="reset_infoPersoL_acheteur" class="btn_infoPersoL_final_acheteur text-uppercase detail_style">Reset</button>
                    <button type="submit" id="submit_valider_infoPersoL_acheteur" name="submit_valider_infoPersoL_acheteur" class="btn_infoPersoL_final_acheteur text-uppercase detail_style">Validate</button>
                </div>

                <div class="col-1"></div>
            </div>
        </form>

    </div>

    <div class="col-1"></div>

</div>

<?php
}
    include("footer.php");
?>
