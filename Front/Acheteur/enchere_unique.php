
<?php
    $title="Accueil";
    require "head.php";
    include("../../Bdd/cnx.php");
    $iditem=$_GET['iditem'];

    $queryItem = mysqli_query($con, "SELECT price,name,category,subcategory,quantity,description,photo FROM item WHERE id_item='$iditem'");
    $queryEnchere = mysqli_query($con, "SELECT id_bid, id_item, id_buyer, id_seller, end_enchere, state, price_user FROM bid WHERE id_item='$iditem'");
?>

<?php
if($rowItem = mysqli_fetch_assoc($queryItem)){
                $nameCadre = $rowItem['name'];
                $prixCadre = $rowItem['price'];
                $categoryCadre = $rowItem['category'];
                $quantityCadre = $rowItem['quantity'];
                $descriptionCadre = $rowItem['description'];
                $subcategory = $rowItem['subcategory'];
                $photo = $rowItem['photo'];
                
                if($rowEnchere = mysqli_fetch_assoc($queryEnchere)){
                    $id_bid = $rowEnchere['id_bid'];
                    $id_item = $rowEnchere['id_item'];
                    $id_buyer = $rowEnchere['id_buyer'];
                    $id_seller = $rowEnchere['id_seller'];
                    $end_enchere = $rowEnchere['end_enchere'];
                    $state = $rowEnchere['state'];
                    $price_user = $rowEnchere['price_user'];
                            ?>

<div class="enchere_liste_total row">
    <div class="col-1"></div>

    <div class="col-7 enchere_liste_un_par_un">
        <div class="row">
            <div class="col-5">
                <img class="img_enchere" src="<?php echo $photo ?>" alt="chaussure">
            </div>

            <div class="col-7 enchere_liste_details position-relative">
            <div class="enchere_info_titre texte_style text-uppercase"><?php echo $nameCadre ?></div>
                <div class="enchere_info_marque detail_style text-uppercase"><?php echo $categoryCadre ?> - <?php echo $subcategory ?></div>
                <br>
                <div class="info_description_inde"><?php echo $descriptionCadre ?></div>
                <hr>
                <script>
                    const minutes=60;
                    const hours=60*minutes;
                    const days=24*hours;

                    function compteur(){
                        

                        const countdown = document.querySelector('#countdown');
                        const launchDate = Date.parse(countdown.dataset.time)/1000;
                        const difference = launchDate - Date.now() / 1000;
                        // date2 = date2 /1000;
                        // alert(date2);
                        // const difference = date2 - Date.now() / 1000;

                        const diff = {
                            days: Math.floor(difference/days),
                            hours: Math.floor(difference%days/hours),
                            minutes: Math.floor(difference%hours/minutes),
                            seconddes: Math.floor(difference%minutes),
                        }

                        document.getElementById('jours').innerText=diff.days;
                        document.getElementById('heures').innerText=diff.hours;
                        document.getElementById('minutes').innerText=diff.minutes;
                        document.getElementById('secondes').innerText=diff.seconddes;

                        window.setTimeout(()=>{
                            window.requestAnimationFrame(compteur);
                        });
                    }
                </script>
                <div class="enchere_compteur_total centrer row">
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
                </div>
            </div>

            <div class="col-1"></div>
        </div>

    </div>

    <div class="col-3 enchere_liste_payer centrer position-relative">
        <div class="enchere_payer_titre texte_style text-uppercase mt-4">faire une offre</div>
        <input class="enchere_propose_prix centrer" name="proposition_prix" placeholder="Proposition (€)">
        <button class="btn_envoyer_propose_prix text-uppercase">Envoyer</button>
        <div class="enchere_nombre_participant detail_style position-absolute bottom-0 end-0">135 participants</div>
    </div>

    <div class="col-1"></div>

</div>

<?php
    }
}
?>




<?php
    include("footer.php");
?>