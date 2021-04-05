
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
        payment
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<!-- Payment information verify -->
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-9 text-center m-5 mt-3 mb-2 shadow-lg ">
            <div class="card px-0 pt-4 pb-0 m-5 border-0">
                <h1 id="heading">Finalization of my order </h1><br>
                <!--<p>Fill all form field to go to next step</p> #}-->
                <div id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Cart Total</strong></li>
                        <li id="personal"><strong>My command</strong></li>
                        <li id="payment"><strong>Payment</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated  bg_blue1" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> 

                    <!-- See first page to see total of the card -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <!--<h2 class="fs-title">Account Information:</h2>-->
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1 - 4</h2><br><br>
                                </div>
                            </div>
                            <div class="row alert alert-secondary mt-5" role="alert">
                                <div class="col-6">
                                    <h2 class="text-uppercase float-left">Total à régler TTC </h2>
                                </div>
                                <?php if($row4 = mysqli_fetch_assoc($queryTotalBasket)){
                                        $totalBasket = $row4['total_basket'];
                                ?>
                            <div class="col-6 t">
                                    <h1 class="text-uppercase float-right" style="float:right!important;"> <?php echo $totalBasket ?>  €</h1>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div> 
                
                        <button type="button" name="next" class="btn next action-button bg_blue1"> Next <i class="fas fa-chevron-right"></i></button> 
                        <button type="button" name="next" class="btn action-button bg-dark"> <i class="fas fa-chevron-left"></i> Basket </button>
                    </fieldset>

                    <!-- See the second page to see all the product the buyer will buy -->
                    <fieldset>
                        <div class="form-card ">
                            <div class="row">
                                <div class="col-7">
                                    <!-- <h2 class="fs-title">Récapitualtif de ma commande</h2> -->
                                    <BR><BR><BR>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 4</h2>
                                </div>
                            </div> 
                           
                              <table class="table border shadow mb-5" style="background-color:#f1f1f1">
                              <thead class="bg_blue1 text-light" >
                                    <tr>
                                        <th colspan="6"> <h2 class="fs-title text-center text-light">Summary of my order</h2> </th>

                                    </tr>
                                    </thead>
                                    <thead class="bg_blue1 text-light" >
                                    <tr>
                                        <th>Picture</th>
                                        <th>Product</th>
                                        <th>Category</th>
                                        <!-- <th>Description</th> -->
                                        <th>Quantity</th>
                                        <th>Price </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    if($row_product_in_basket = mysqli_fetch_assoc($queryTotalProductsInBasket)){
                                    $total = $row_product_in_basket['totalProduitBasket'];
                                    for ($i=0; $i<$total;$i++){
                                    if($rowAllProductsInBasket = mysqli_fetch_assoc($queryProductsInBasket)){
                                           
                                            $prixItem= $rowAllProductsInBasket['price']; 
                                            $nameItem= $rowAllProductsInBasket['name']; 
                                            // $brandItem= $rowAllProductsInBasket['name']; 
                                            $catItem= $rowAllProductsInBasket['name']; 
                                            $subItem= $rowAllProductsInBasket['sub']; 
                                            $descItem= $rowAllProductsInBasket['description']; 
                                            $photoItem= $rowAllProductsInBasket['photo']; 

                                            $qttItem= $rowAllProductsInBasket['qqt_product']; }
                                    ?>
                                    <tr>
                                        <td><img src="<?php echo $photoItem ?>" class="rounded" alt="..." style="width:100px;height:100px;important">
                                        </td>
                                        <td><?php echo $nameItem ?></td>
                                        <td><?php echo $subItem ?></td>

                                        <td><?php echo $qttItem ?></td>
                                        <td><?php echo $prixItem ?> €</td>
                                    </tr> 
                                    <?php
                                        }
                                    ?>
                                   

                                    <?php 
                                }
                                ?>
                                    </tbody>
                                </table>

                           
                        </div>

                         <button type="button" name="next" class="btn next action-button bg_blue1"> Payment  <i class="fas fa-chevron-right"></i></button> 
                        <button type="button" name="next" class="btn previous action-button-previous bg-dark"> <i class="fas fa-chevron-left"></i> Total </button>
                    </fieldset>


                    <!-- See the third page to enter my information card -->
                    <fieldset>
                        <div class="form-card mb-5">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Online payment</h2><br><br><br>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 - 4</h2>
                                </div>
                            </div>
                            <div class="card shadow p-5">
                                <div class="card-body">
                                   
                                        <?php if($rowCardUser = mysqli_fetch_assoc($queryCardUser)){
                                                    $cardEmail = $rowCardUser['email'];
                                                    $cardType = $rowCardUser['carde'];
                                                    $cardcode = $rowCardUser['code'];
                                                    $num_card = $rowCardUser['num_card'];
                                                    $cardexpiration = $rowCardUser['expiration'];
                                                    $cardNameBuyer = $rowCardUser['nom'];
                                        ?>
                                               

                                        <div class="row">
                                            <div class="col-md-12">   
                                                <?php if($cardType == "carte_payement_amex"){?>
                                                    <i class="fab fa-3x fa-cc-amex color_blue1"></i>
                                                <?php } else{?>
                                                    <i class="fab fa-3x fa-cc-amex"></i>
                                                <?php } ?>

                                                <?php if($cardType == "carte_payement_visa"){?>
                                                    <i class="fab  fa-3x fa-cc-visa color_blue1"></i>
                                                <?php } else{?>
                                                    <i class="fab  fa-3x fa-cc-visa"></i>
                                                <?php } ?>

                                                <?php if($cardType == "carte_payement_mastercard"){?>
                                                    <i class="fab  fa-3x fa-cc-mastercard color_blue1"></i>    
                                                <?php }else{?>
                                                    <i class="fab  fa-3x fa-cc-mastercard"></i>    
                                                <?php } ?>

                                                <?php if($cardType == "carte_payement_cb"){?>
                                                    <i class="far  fa-3x fa-credit-card color_blue1"></i>
                                                <?php }else{?>
                                                    <i class="far  fa-3x fa-credit-card"></i>
                                              
                                                <?php } ?>
                                            </div>
                                        </div>
                                    
                                        
                                    <hr><br>
                                    <form action="../../Bdd/panier.php" method="POST">
                                
                                            <div class="mb-5">
                                                <label for="exampleInputEmail1" class="form-label">Name </label>
                                                <input type="text" class="form-control" name="name_nameCard">
                                            </div>
                                            <div class="mb-5">
                                                <label for="exampleInputPassword1" class="form-label">Card number  </label>
                                                <input type="text" class="form-control" name="name_cardNumber" >
                                            </div> 
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-5">
                                                        <label for="exampleInputPassword1" class="form-label">Expiry date   </label>
                                                        <input type="date" class="form-control" name="name_ExpiryDate">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="mb-5">
                                                        <label for="exampleInputPassword1" class="form-label">Security code  </label>
                                                        <input type="text" class="form-control" name="name_SecurityCode">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="input_nameCard" value="<?= $cardNameBuyer ?> ">       
                                            <input type="hidden" name="input_cardNumber" value="<?= $num_card ?> ">       
                                            <input type="hidden" name="input_ExpiryDate" value="<?= $cardexpiration ?> ">       
                                            <input type="hidden" name="input_SecurityCode" value="<?= $cardcode ?> "> 
                                            
                                          
                                            <button type="submit" name="btn_submit_paiement" class="btn next action-button bg_blue1"> Pay  <i class="fas fa-chevron-right"></i></button> 

                                            <button type="button" name="next" class="btn previous action-button-previous bg-dark"> <i class="fas fa-chevron-left"></i> List </button>
                                    </form>
                                        <?php }  ?>
                                </div>
                            </div>
                         
                            
                        </div>
                        
                     </fieldset>

                     <!-- Past this one -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row" id="paiementAccepte">
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