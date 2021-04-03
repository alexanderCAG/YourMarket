
<?php
    $title="Page maison";
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
}
?>



<div class="genale_panier position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_panier text-uppercase">
           paiement 
        </p>
        <p class="info_general_panier centrer detail_style">

        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>


<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-9 text-center m-5 mt-3 mb-2 shadow-lg ">
            <div class="card px-0 pt-4 pb-0 m-5 border-0">
                <h1 id="heading">Finalisation de ma commande </h1><br>
                <!--<p>Fill all form field to go to next step</p> #}-->
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Total du panier</strong></li>
                        <li id="personal"><strong>Infomation personnelle</strong></li>
                        <li id="payment"><strong>Paiement</strong></li>
                        <li id="confirm"><strong>Terminé</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> 
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <!--<h2 class="fs-title">Account Information:</h2>-->
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Etape 1 - 4</h2><br><br>
                                </div>
                            </div>
                            <div class="row alert alert-secondary mt-5" role="alert">
                                <div class="col-6">
                                    <h2 class="text-uppercase float-left">Total à régler TTC </h2>
                                </div>
                               <div class="col-6 t">
                                    <h1 class="text-uppercase float-right" style="float:right!important;"> 290 €</h1>
                                </div>

                            </div>
                        </div> 
                       
                        <button type="button" name="next" class="btn next action-button bg_blue1"> Suivant <i class="fas fa-chevron-right"></i></button> 
                        <button type="button" name="next" class="btn action-button bg-dark"> <i class="fas fa-chevron-left"></i> Panier </button>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Personal Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">First Name: *</label> <input type="text" name="fname" placeholder="First Name" /> <label class="fieldlabels">Last Name: *</label> <input type="text" name="lname" placeholder="Last Name" /> <label class="fieldlabels">Contact No.: *</label> <input type="text" name="phno" placeholder="Contact No." /> <label class="fieldlabels">Alternate Contact No.: *</label> <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Image Upload:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Upload Your Photo:</label> <input type="file" name="pic" accept="image/*"> <label class="fieldlabels">Upload Signature Photo:</label> <input type="file" name="pic" accept="image/*">
                        </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 - 4</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    include("footer.php");
?>