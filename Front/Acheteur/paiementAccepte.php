
<?php
    $title="Page maison";
    require "head.php";

    include("../../Bdd/cnx.php");
    $email_user = $_SESSION['email'];
    // $queryCountItems = mysqli_query($con, "select count(id_item) as total from item, seller where seller.id_seller=item.id_seller and seller.email='$seller_email'"); 

    $queryinfoPerso_acheteur = mysqli_query($con, "select lastname,firstname,phone,email,passworde,adress1,adress2,city,zip_code,country,carde,code,num_card,expiration,nom from buyer, payment where buyer.id_buyer=payment.id_buyer and (email='$email_user' or lastname='$email_user')");

    $queryTotalBasket= mysqli_query($con, "SELECT email, sum(price*quantity) as total_basket FROM basket, buyer WHERE buyer.id_buyer=basket.id_buyer and (email='$email_user' or lastname='$email_user')");

    // total des produit dans le panier d'un acheteur
    $queryTotalProductsInBasket= mysqli_query($con, "SELECT Count(DISTINCT(`id_item`)) as totalProduitBasket, email FROM basket, buyer WHERE basket.id_buyer=buyer.id_buyer and (email='$email_user' or lastname='$email_user')");

    // Listage des produits dans le panier d'un acheteur
    $queryProductsInBasket= mysqli_query($con, "SELECT buyer.email as email , item.name as name, item.price as price , item.subcategory as sub, item.description, basket.quantity as qqt_product, item.photo as photo FROM basket, buyer ,item WHERE buyer.id_buyer=basket.id_buyer and item.id_item=basket.id_item and (email='$email_user' or lastname='$email_user')"); 

    $queryCardUser = mysqli_query($con, "SELECT buyer.email, `carde`, `code`,`num_card`,`expiration`,`nom` FROM payment, buyer where payment.id_buyer=buyer.id_buyer and  (email='$email_user' or lastname='$email_user')");


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
                <h1 id="heading">Accepted payment  <i class="fas fa-check-circle"></i> <br></h1><br>
                <!--<p>Fill all form field to go to next step</p> #}-->
                <div id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Cart Total</strong></li>
                        <li class="active" id="personal"><strong>My command</strong></li>
                        <li class="active" id="payment"><strong>Payment</strong></li>
                        <li class="active" id="confirm"><strong>  Finish </strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated  bg_blue1" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <!-- Animation of the payment -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row h-75" id="paiementAccepte">
                                <div class="col-6"> <img class=" w-100" src="../../Image/youpiiii.gif" alt="accepted"/>  <!-- <h2 class="fs-title">Finish:</h2> -->
                                </div>
                                <div class="col-6">
                                <img src="../../Image/youpiiii.gif"  class="h-75 w-100" alt="accepted"/>
                                </div>
                            </div>
                            <div class="row justify-content-center pt-2">
                                <div class="col-7 text-center">
                                    <p>Thank you for your order. We will keep you informed by email when the items for your order have been dispatched.</p>
                                    <a class="purple-text text-center h5 text-decoration-none" href="index.php">Back Home</a>
                               
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