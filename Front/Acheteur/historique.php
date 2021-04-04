<?php
    $title="Accueil";
    require "head.php";
    include("../../Bdd/cnx.php");
    $email_user = $_SESSION['email'];
    
    $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE (email='$email_user' or lastname='$email_user')");
    if($row = mysqli_fetch_assoc($queryBuyer)){
        $id_buyer = $row['id_buyer'];
        
        $queryCount = mysqli_query($con, "select count(id_history) as total from history where id_buyer='$id_buyer'");
        $queryHistory = mysqli_query($con, "SELECT id_buyer, id_item, id_seller, name, price , quantity, description, photo, category, subcategory from history where id_buyer='$id_buyer'");

?>


<?php

if($row = mysqli_fetch_assoc($queryCount)){
            $total = $row['total'];
?>
<div class="genale_page_enchere position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_enchere text-uppercase">
            Historique
        </p>
        <p class="info_general_listeArticle centrer detail_style">
            Vous avez acheté <?php echo $total ?> articles
        </p>
    </div>

    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<?php
    for ($i=0; $i<=$total;$i++){
        if($rowMyItems = mysqli_fetch_assoc($queryHistory)){
            $id_item = $rowMyItems['id_item'];
            $id_buyer = $rowMyItems['id_buyer'];
            $id_seller = $rowMyItems['id_seller'];
            $nameItems = $rowMyItems['name'];
            $prixItems = $rowMyItems['price'];
            $quantityCadre = $rowMyItems['quantity'];
            $descriptionItems = $rowMyItems['description'];
            $photo = $rowMyItems['photo'];
            $category = $rowMyItems['category'];
            $subcategoryItems = $rowMyItems['subcategory'];
            
?>
<div class="row" style="margin-top:120px">

    <div class="col-2"></div>

    <div class="col-3">
        <img class="img_enchere" src="<?php echo $photo ?>" alt="chaussure">
    </div>

    <div class="col-5 enchere_liste_details position-relative">
        <div class="enchere_info_titre texte_style text-uppercase"><?php echo $nameItems ?></div>
        <div class="enchere_info_marque detail_style text-uppercase"><?php echo $category ?> - <?php echo $subcategoryItems ?></div>
        <br>
        <div class="info_description_inde"><?php echo $descriptionItems ?></div>
        <hr>
        <div class="row">
            <div class="col-md-2">
                <h4 class="texte_style text-uppercase"><?php echo $prixItems ?> €</h4>
            </div>

            <div class="col-md-3">
                <div class="input-group mb-3">
                    <input type="number" class="form-control w-100" value="<?php echo $quantityCadre ?>" style="pointer-events: none; ">
                </div>
            </div>
            <div class="col-7 ">
                <button id="rate_article" onclick="myRate()">Give a rate :
                <form action="../../Bdd/panier.php" method="POST">
                    <button type="submit" name="note_1" class="fas fa-star" value="1"></button>
                    <button type="submit" name="note_2" class="fas fa-star" value="2"></button>
                    <button type="submit" name="note_3" class="fas fa-star" value="3"></button>
                    <button type="submit" name="note_4" class="fas fa-star" value="4"></button>
                    <button type="submit" name="note_5" class="fas fa-star" value="5"></button>
                    <input type="hidden" name="idItem" value="<?php echo $id_item ?>">
                </form>
                </button>
            </div>
        </div>
    
        <div class="col-1"></div>
    </div>

    <div class="col-2"></div>
</div>

<?php
            }
        }
    }
}
    include("footer.php");
?>