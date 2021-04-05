
<?php
    $title="Page enchère";
    require "head.php";
        include("../../Bdd/cnx.php");
        $queryIdItem = mysqli_query($con, "select id_item from item where is_bidding=1"); 
        $queryCountEnchere = mysqli_query($con, "select count(id_item) as total  from item where is_bidding=1"); 
        $queryAllEnchere = mysqli_query($con, "select name, end_enchere, price ,subcategory, quantity, description,photo, is_bidding from item where is_bidding=1");
?>
 <?php
 if($row = mysqli_fetch_assoc($queryCountEnchere)){
        $totalEnchere = $row['total'];
?>

<div class="genale_page_enchere position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_enchere text-uppercase">
            Bid
        </p>
        <p class="info_general_enchere centrer detail_style">
        <?php echo $totalEnchere ?> ongoing bid
        </p>
    </div>

    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<?php
for ($i=0; $i<=$totalEnchere;$i++){
                if($rowAllEnchere = mysqli_fetch_assoc($queryAllEnchere)){
                    $nameEnchere = $rowAllEnchere['name'];
                    $prixEnchere = $rowAllEnchere['price'];
                    $quantityEnchere = $rowAllEnchere['quantity'];
                    $descriptionEnchere = $rowAllEnchere['description'];
                    $photo = $rowAllEnchere['photo'];

                    if($rowItem = mysqli_fetch_assoc($queryIdItem)){
                        $id_item = $rowItem['id_item'];
                    ?>
                    
<div class="enchere_liste_total row">
    <!-- Ligne 1 -->
    <div class="col-1"></div>

    <!-- row to see my bid -->
    <div class="col-7 enchere_liste_un_par_un">
        <div class="row">
            <div class="col-5">
                <img class="img_enchere" src="<?php echo $photo ?>" alt="chaussure">
            </div>

            <div class="col-6 enchere_liste_details position-relative">
                <div class="enchere_info_titre texte_style text-uppercase"><?php echo $nameEnchere ?></div>
                <br>
                <div class="enchere_info_description"><?php echo $descriptionEnchere ?></div>

            <div class="col-1"></div>
        </div>

            <div class="col-1"></div>
        </div>

    </div>

    <div class="col-3 enchere_liste_payer centrer position-relative">
        <div class="enchere_payer_titre texte_style text-uppercase ">interested ?</div>
        <a type="button" href="enchere_unique.php?iditem=<?= $id_item?>" class="btn_envoyer_propose_prix text-uppercase">View more</a>
    </div>

    <div class="col-1"></div>

</div>

<?php
                    }
                }
            }
        }
        ?>
<?php
    include("footer.php");
?>