
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
                    // $brandEnchere = $rowAllEnchere['brand'];
                    $quantityEnchere = $rowAllEnchere['quantity'];
                    // $end_enchere = $rowAllEnchere['end_enchere'];
                    $descriptionEnchere = $rowAllEnchere['description'];
                    $photo = $rowAllEnchere['photo'];

                    if($rowItem = mysqli_fetch_assoc($queryIdItem)){
                        $id_item = $rowItem['id_item'];
                    ?>
                    
<div class="enchere_liste_total row">
    <!-- Ligne 1 -->
    <div class="col-1"></div>

    <div class="col-7 enchere_liste_un_par_un">
        <div class="row">
            <div class="col-5">
                <img class="img_enchere" src="<?php echo $photo ?>" alt="chaussure">
            </div>

            <div class="col-6 enchere_liste_details position-relative">
                <div class="enchere_info_titre texte_style text-uppercase"><?php echo $nameEnchere ?></div>
                <!-- <div class="enchere_info_marque detail_style text-uppercase"><?php echo $brandEnchere ?></div> -->
                <br>
                <div class="enchere_info_description"><?php echo $descriptionEnchere ?></div>
                <!-- <div><?php echo $end_enchere ?></div> -->
                <!-- <script type="text/javascript">
                        

                        alert(monthEndBid2);
                        var date2 =  dateBDD;//year, month, day, hour, minute, second, and millisecond
                        var date2 = new Date(yearEndBid, monthEndBid, dayEndBid, hourEndBid, minuteEndBid, secondEndBid, millisecondEndBid);//year, month, day, hour, minute, second, and millisecond
                        var dateBDD ='<?php echo $end_enchere ?>'

                        var yearEndBid = dateBDD[0]+dateBDD[1]+dateBDD[2]+dateBDD[3]; 
                        var monthEndBid = dateBDD[5]+dateBDD[6]; 
                        var dayEndBid = dateBDD[8]+dateBDD[9]; 
                        var hourEndBid = dateBDD[11]+dateBDD[12]; 
                        var minuteEndBid = dateBDD[14]+dateBDD[15]; 
                        var secondEndBid = dateBDD[17]+dateBDD[18]; 
                        var millisecondEndBid = 0; 

                        var date2 = new Date(yearEndBid, monthEndBid, dayEndBid, hourEndBid, minuteEndBid, secondEndBid, millisecondEndBid);
    
                        
                </script> -->
                <!-- <div class="enchere_compteur_total centrer row">
                    <div class="col-2 div_timeur_compteur ">
                        <img class="img_timeur_compteur" src="../../Image/timeur_compteur.png" alt="timeur_compteur">
                    </div>
                    <div class="col-9">
                        <div class="row" id="countdown" data-time="<?php echo $end_enchere ?>">
                            <div class="enchere_compteur col-3" >
                                <font size=6><strong id="jours"></strong></font>
                                <em>Jours</em>
                            </div>
                            <div class="enchere_compteur col-3" >
                                <font size=6><strong id="heures"></strong></font>
                                <em>Houres</em>
                            </div>
                            <div class="enchere_compteur col-3" >
                                <font size=6><strong id="minutes"></strong></font>
                                <em>Minutes</em>
                            </div>
                            <div class="enchere_compteur col-3" >
                                <font size=6><strong id="secondes"></strong></font>
                                <em>Secondes</em>
                            </div>
                            <div class="col-3"></div>
                        </div>
                        
                    </div>
                </div> -->
            
            <div class="col-1"></div>
        </div>

            <div class="col-1"></div>
        </div>

    </div>

    <!-- <div class="col-3 enchere_liste_payer centrer position-relative">
        <div class="enchere_payer_titre texte_style text-uppercase mt-4">faire une offre</div>
        <input class="enchere_propose_prix centrer" placeholder="Proposition (€)">
        <button class="btn_envoyer_propose_prix text-uppercase">Envoyer</button>
        <div class="enchere_nombre_participant detail_style position-absolute bottom-0 end-0">135 participants</div>
    </div> -->

    <div class="col-3 enchere_liste_payer centrer position-relative">
        <div class="enchere_payer_titre texte_style text-uppercase ">interested ?</div>
        <!-- <input class="enchere_propose_prix centrer" placeholder="Proposition (€)"> -->
        <a type="button" href="enchere_unique.php?iditem=<?= $id_item?>" class="btn_envoyer_propose_prix text-uppercase">View more</a>
        <!-- <div class="enchere_nombre_participant detail_style position-absolute bottom-0 end-0">135 participants</div> -->
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