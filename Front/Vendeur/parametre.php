<?php
    $title="Informations personnelles";
    require "head.php";
        include("../../Bdd/cnx.php");
        $email_user = $_SESSION['email'];
        // $queryCountItems = mysqli_query($con, "select count(id_item) as total from item, seller where seller.id_seller=item.id_seller and seller.email='$seller_email'"); 

        $queryinfoPerso_vendeur = mysqli_query($con, "SELECT brand,profil_picture,background, phone,email,passworde FROM seller WHERE (seller.email='$email_user' or seller.brand='$email_user')");

    if($rowinfoPerso_vendeur = mysqli_fetch_assoc($queryinfoPerso_vendeur)){
        $bg = $rowinfoPerso_vendeur['background'];



    // <!-- display user backer, background default: blue -->

if($bg != null){?>
    <div class="genale_listeArticle position-relative" style="background-color:<?php echo $bg ?>!important;"> <?php  
}else{?>
    <div class="genale_listeArticle position-relative" ><?php 
} ?>
    <div class="texte_style position-absolute top-50 start-50 translate-middle general_infoPerso_div">
        <p class="titre_general_infoPerso text-uppercase centrer">
            CHANGE BACKGROUND COLOR
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<!-- Seller background choosen -->
<div class="contenu_general_infoPerso_vendeur row ">
    <div class="col-2"></div>

        <style>
            label {
            font-family: sans-serif;
            width: 300px;
            display: block;
            position: relative;
            }
            input {
            padding: 5px 15px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
            }
            input[type=color] {
            padding: 0;
            border: 0;
            height: 40px;
            }
            input[type=color]:after {
            content: attr(data-value);
            position: absolute;
            bottom: 10px;
            text-align: center;
            color: #fffff5;
            display: block;
            width: 100%;
            }
            .color-icon {
            position: absolute;
            bottom: 10px;
            right: 10px;
            color: #666;
            }
        </style>

        

    <form action="../../Bdd/infoPerso_recup.php" method="POST" enctype="multipart/form-data">

        <center>
            <div class="row w-50 ">
            <div class="col-12">
            <div class="card w-100 shadow-lg">
                <div class="card-body pt-5 pb-5 w-100 " style="background-color: <?php echo $bg ?>;">
                    <h3 class="card-text text-center p-5 text-uppercase text-light">My background color</h3>
                </div>
                
               
                <ul class="list-group list-group-flush">
                    <li class="list-group-item ">
                        <div class="row mt-5">
                            <div class="col-md-4 text-center">Change your background color here</div>
                            <div class="col-md-8">
                                <label class="w-100">
                                    <input class="color form-control-file"name="background_seller" placeholder="Color" data-value="#xxxxxx" value="<?php echo $bg ?>"/>
                                </label> 
                            </div>
                        </div>
                        <br>
                        <span id="infoPerso_mdp2Erreur_vendeur"></span>
                        <br>
                    </li>
                    <li class="list-group-item pt-4 pb-4"> 
                        <button type="submit" id="submit_valider_background" name="submit_valider_background" class="btn btn-outline-dark  w-100">Validate</button>
                    </li>
                    
                </ul>
                
                </div>
                
        </div></center>
        

    </form>

    </div>

    <div class="col-2"></div>
</div>

<?php
}
    include("footer.php");
?>