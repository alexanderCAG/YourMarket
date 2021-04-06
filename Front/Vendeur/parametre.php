<?php
    $title="Informations personnelles";
    require "head.php";
        include("../../Bdd/cnx.php");
        $email_user = $_SESSION['email'];
        // $queryCountItems = mysqli_query($con, "select count(id_item) as total from item, seller where seller.id_seller=item.id_seller and seller.email='$seller_email'"); 

        $queryinfoPerso_vendeur = mysqli_query($con, "SELECT brand,profil_picture,background, phone,email,passworde FROM seller WHERE (seller.email='$email_user' or seller.brand='$email_user')");

    if($rowinfoPerso_vendeur = mysqli_fetch_assoc($queryinfoPerso_vendeur)){
        $bg = $rowinfoPerso_vendeur['background'];



    // <!-- affichage du background de l'utilisateur, sinon bleu par defaut -->

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

    <div class="col-8 infoPerso_vendeur shadow-lg">

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
}</style>

        <form action="../../Bdd/infoPerso_recup.php" method="POST" enctype="multipart/form-data">
            <div class="row inscription_contenu_vendeur">
                <div class="col-12">
                    <!-- <h3 class="infoPerso_detail_titre1_vendeur text-uppercase detail_style"> Color in Hexadecimal</h3> -->
                    
                    <label>
                    <h3 class="infoPerso_detail_titre1_vendeur text-uppercase detail_style"> Color in Hexadecimal</h3>
                    <br />
                    <input class="color" name="background_seller" placeholder="Color" data-value="#xxxxxx" value="<?php echo $bg ?>"/>
                    </label>                    
                    <!-- <input id="background_seller" name="background_seller" class="infoPerso_contenu_details_vendeur" value="<?php echo $bg ?>" placeholder="Color"> -->
                    <br>

                    <span id="infoPerso_mdp2Erreur_vendeur"></span>
                    <br>
                </div>

            </div>

            <div class="row">
                <div class="col-10">
                    <button type="submit" id="submit_valider_background" name="submit_valider_background" class="btn_infoPerso_final_vendeur text-uppercase detail_style">Validate</button>
            
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