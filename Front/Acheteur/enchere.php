
<?php
    $title="Page enchère";
    require "head.php";
        include("../../Bdd/cnx.php");
        
        $queryCountEnchere = mysqli_query($con, "select count(id_item) as total  from item where is_bidding=1"); 
        $queryAllEnchere = mysqli_query($con, "select name, end_enchere, price ,subcategory, brand, quantity, description,photo is_negotiated, is_bidding 
        from item,bid,seller
        where bid.id_item=item.id_item
        and bid.id_seller=seller.id_seller
        and is_bidding=1
        ");
?>
 <?php
 if($row = mysqli_fetch_assoc($queryCountEnchere)){
        $totalEnchere = $row['total'];
?>

    <div class="genale_page_enchere position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_enchere text-uppercase">
            enchères
        </p>
        <p class="info_general_enchere centrer detail_style">
        <?php echo $totalEnchere ?> enchères en cours
        </p>
    </div>

    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>
<?php
for ($i=0; $i<=$totalEnchere;$i++){
                if($rowAllEnchere = mysqli_fetch_assoc($queryAllEnchere)){
                    $nameEnchere = $rowAllEnchere['name'];
                    $prixEnchere = $rowAllEnchere['price'];
                    $brandEnchere = $rowAllEnchere['brand'];
                    $quantityEnchere = $rowAllEnchere['quantity'];
                    $end_enchere = $rowAllEnchere['end_enchere'];
                    $descriptionEnchere = $rowAllEnchere['description'];
                    $is_negotiated = $rowAllEnchere['is_negotiated'];
                    ?>
<div class="enchere_liste_total row">
    <!-- Ligne 1 -->
    <div class="col-1"></div>

    <div class="col-7 enchere_liste_un_par_un">
        <div class="row">
            <div class="col-5">
                <img class="img_enchere" src="../../Image/chaussure.png" alt="chaussure">
            </div>

            <div class="col-6 enchere_liste_details position-relative">
                <div class="enchere_info_titre texte_style text-uppercase"><?php echo $nameEnchere ?></div>
                <div class="enchere_info_marque detail_style text-uppercase"><?php echo $brandEnchere ?></div>
                <br>
                <div class="enchere_info_description"><?php echo $descriptionEnchere ?></div>
                <div class="enchere_info_description"><?php echo $end_enchere ?></div>
                
                <div class="enchere_compteur_total centrer row">
                    <div class="col-2 div_timeur_compteur ">
                        <img class="img_timeur_compteur" src="../../Image/timeur_compteur.png" alt="timeur_compteur">
                    </div>
                    <div class="enchere_compteur col-2" id="jours"></div>
                    <div class="enchere_compteur col-2" id="heures"></div>
                    <div class="enchere_compteur col-2" id="minutes"></div>
                    <div class="enchere_compteur col-2" id="secondes"></div>
                    <div class="col-2"></div>
                </div>
            </div>

            <div class="col-1"></div>
        </div>

    </div>

    <div class="col-3 enchere_liste_payer centrer position-relative">
        <div class="enchere_payer_titre texte_style text-uppercase mt-4">faire une offre</div>
        <input class="enchere_propose_prix centrer" placeholder="Proposition (€)">
        <button class="btn_envoyer_propose_prix text-uppercase">Envoyer</button>
        <div class="enchere_nombre_participant detail_style position-absolute bottom-0 end-0">135 participants</div>
    </div>

    <div class="col-1"></div>

</div>
<?php
                }
            }
        }
        ?>
<?php
    include("footer.php");
?>