
<?php
    $title="Accueil";
    require "head.php";
    include("../../Bdd/cnx.php");
    $iditem=$_GET['iditem'];

    $queryItem = mysqli_query($con, "SELECT price,name,category,subcategory,quantity,description,photo,end_enchere FROM item WHERE id_item='$iditem'");
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
                $end_enchere = $rowItem['end_enchere'];

                $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE (email='$email_user' or lastname='$email_user')");

                if($row = mysqli_fetch_assoc($queryBuyer)){
                    $id_buyer = $row['id_buyer'];
                
                $query = mysqli_query($con, "select count(DISTINCT id_buyer) as total from bid where id_item='$iditem'");
                if($rowCount = mysqli_fetch_assoc($query)){
                    $totalCandidat = $rowCount['total'];
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
                                        //Methode 1 
                    const minutes=60;
                    const hours=60*minutes;
                    const days=24*hours;

                    // function compteur(){
                        // var dateBDD ='<?php echo $end_enchere ?>'

                        // var yearEndBid = dateBDD[0]+dateBDD[1]+dateBDD[2]+dateBDD[3]; 
                        // var yearEndBid2 = parseInt(yearEndBid);

                        // var monthEndBid = dateBDD[5]+dateBDD[6]; 
                        // var monthEndBid2 =parseInt(monthEndBid);

                        // var dayEndBid = dateBDD[8]+dateBDD[9]; 
                        // var dayEndBid2 = parseInt(dayEndBid);

                        // var hourEndBid = dateBDD[11]+dateBDD[12]; 
                        // var hourEndBid2 = parseInt(hourEndBid);

                        // var minuteEndBid = dateBDD[14]+dateBDD[15]; 
                        // var minuteEndBid2 = parseInt(minuteEndBid);

                        // var secondEndBid = dateBDD[17]+dateBDD[18]; 
                        // var secondEndBid2 = parseInt(secondEndBid);
                        // var millisecondEndBid = 0; 

                        // var date2 = new Date(yearEndBid2, monthEndBid2, dayEndBid2, hourEndBid2, minuteEndBid2, secondEndBid2, millisecondEndBid);
                        // var launchDate = Date.parse(date2)/1000

                        // const countdown = document.querySelector('#countdown');
                        // const launchDate = Date.parse(countdown.dataset.time)/1000;
                    //     const difference = launchDate - Date.now() / 1000;

                    //     const diff = {
                    //         days: Math.floor(difference/days),
                    //         hours: Math.floor(difference%days/hours),
                    //         minutes: Math.floor(difference%hours/minutes),
                    //         seconddes: Math.floor(difference%minutes),
                    //     }

                    //     document.getElementById('jours').innerText=diff.days;
                    //     document.getElementById('heures').innerText=diff.hours;
                    //     document.getElementById('minutes').innerText=diff.minutes;
                    //     document.getElementById('secondes').innerText=diff.seconddes;

                    //     window.setTimeout(()=>{
                    //         window.requestAnimationFrame(compteur);
                    //     });
                    // }
                                        //Methode 2
                    function decompteur(){
                        var dateBDD ='<?php echo $end_enchere ?>'

                        var yearEndBid = dateBDD[0]+dateBDD[1]+dateBDD[2]+dateBDD[3]; 
                        var yearEndBid2 = parseInt(yearEndBid);

                        var monthEndBid = dateBDD[5]+dateBDD[6]; 
                        var monthEndBid2 =parseInt(monthEndBid);

                        var dayEndBid = dateBDD[8]+dateBDD[9]; 
                        var dayEndBid2 = parseInt(dayEndBid-30);

                        var hourEndBid = dateBDD[11]+dateBDD[12]; 
                        var hourEndBid2 = parseInt(hourEndBid);

                        var minuteEndBid = dateBDD[14]+dateBDD[15]; 
                        var minuteEndBid2 = parseInt(minuteEndBid);

                        var secondEndBid = dateBDD[17]+dateBDD[18]; 
                        var secondEndBid2 = parseInt(secondEndBid);
                        var millisecondEndBid = 0; 

                        var date2 = new Date(yearEndBid2, monthEndBid2, dayEndBid2, hourEndBid2, minuteEndBid2, secondEndBid2, millisecondEndBid);
                        
                        
                        // var date2 = new Date(2022, 11, 24, 10, 33, 30, 0);//year, month, day, hour, minute, second, and millisecond

                        var jours=$('#jours');
                        var heures=$('#heures');
                        var minutes=$('#minutes');
                        var secondes=$('#secondes');

                        // var heure1 = date1.getTime()/1000;
                        var heure2 = date2.getTime()/1000;
                        var heure1 = new Date()/1000;
                        var s=heure2-heure1;

                        var d=Math.floor(s/86400);
                        jours.html('<strong><font size="6">'+d+'</font></strong><br> Jour'+(d>1?'s':''));
                        s-=d*86400;

                        var h=Math.floor(s/3600);
                        heures.html('<strong><font size="6">'+h+'</font></strong><br> Heure'+(h>1?'s':''));
                        s-=h*3600;

                        var m=Math.floor(s/60);
                        minutes.html('<strong><font size="6">'+m+'</font></strong><br> Minute'+(m>1?'s':''));
                        s-=m*60;

                        var s=Math.floor(s);
                        secondes.html('<strong><font size="6">'+s+'</font></strong><br> Seconde'+(s>1?'s':''));

                        setTimeout(decompteur,1000);
                    }
                </script>
                <div class="enchere_compteur_total centrer row">
                    <div class="col-2 div_timeur_compteur ">
                        <img class="img_timeur_compteur" src="../../Image/timeur_compteur.png" alt="timeur_compteur">
                    </div>
                    <div class="col-9">
                        <div class="row" id="countdown" data-time="<?php echo $end_enchere ?>">
                            <!-- <div class="enchere_compteur col-3" >
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
                            <div class="col-3"></div> -->
                            <div class="enchere_compteur col-3" id="jours"></div>
                            <div class="enchere_compteur col-3" id="heures"></div>
                            <div class="enchere_compteur col-3" id="minutes"></div>
                            <div class="enchere_compteur col-3" id="secondes"></div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-1"></div>
        </div>

    </div>

    
    <div class="col-3 enchere_liste_payer centrer position-relative">
        <form action="../../Bdd/panier.php" method="POST">
            <div class="enchere_payer_titre texte_style text-uppercase mt-4">faire une offre</div>
            <input class="enchere_propose_prix centrer" name="proposition_prix" placeholder="Proposition (€)">
            <button type="submit" name="btn_envoyer_enchere_prix" class="btn_envoyer_propose_prix text-uppercase">Envoyer</button>
            <div class="enchere_nombre_participant detail_style position-absolute bottom-0 end-0"><?php echo $totalCandidat ?> participant(s)</div>
            <input type="hidden" name="idItem" value="<?php echo $iditem ?>">
        </form>
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