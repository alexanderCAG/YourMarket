
<?php
    $title="Accueil";
    require "head.php";
?>
<script>
    const minutes=60;
    const hours=60*minutes;
    const days=24*hours;

    function compteur(){
        const countdown = document.querySelector('#countdown');
        const launchDate = Date.parse(countdown.dataset.time)/1000;
        const difference = launchDate - Date.now() / 1000;

        const diff = {
            days: Math.floor(difference/days),
            hours: Math.floor(difference%days/hours),
            minutes: Math.floor(difference%hours/minutes),
            seconddes: Math.floor(difference%minutes),
        }

        document.getElementById('jour').innerText=diff.days;
        document.getElementById('heure').innerText=diff.hours;
        document.getElementById('minute').innerText=diff.minutes;
        document.getElementById('seconde').innerText=diff.seconddes;

        window.setTimeout(()=>{
            window.requestAnimationFrame(compteur);
        });
    }
    
</script>
<div class="enchere_liste_total row">
    <!-- Ligne 1 -->
    <div class="col-1"></div>

    <div class="col-7 enchere_liste_un_par_un">
        <div class="row">
            <div class="col-5">
                <img class="img_enchere" src="../Image/chaussure.png" alt="chaussure">
            </div>

            <div class="col-6 enchere_liste_details position-relative">
                <div class="enchere_info_titre texte_style text-uppercase">titre produit</div>
                <div class="enchere_info_marque detail_style text-uppercase">marque</div>
                <br>
                <div class="enchere_info_description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum similique sequi, beatae voluptatum consectetur quidem consequatur. Quisquam similique minima dolorum ad, vel tempora vero optio corrupti perspiciatis veritatis iure explicabo.</div>
                <img class="img_enchere_separation_info" src="../Image/enchere_separation_info.png" alt="enchere_separation_info">
                <div class="enchere_compteur_total centrer row">
                    <div class="col-2 div_timeur_compteur ">
                        <img class="img_timeur_compteur" src="../Image/timeur_compteur.png" alt="timeur_compteur">
                    </div>
                    <div class="col-9">
                        <div class="row" id="countdown" data-time="2021-04-12T16:21:22+0000">
                            <div class="enchere_compteur col-3" >
                                <font size=6><strong id="jour"></strong></font>
                                <em>Jours</em>
                            </div>
                            <div class="enchere_compteur col-3" >
                                <font size=6><strong id="heure"></strong></font>
                                <em>Houres</em>
                            </div>
                            <div class="enchere_compteur col-3" >
                                <font size=6><strong id="minute"></strong></font>
                                <em>Minutes</em>
                            </div>
                            <div class="enchere_compteur col-3" >
                                <font size=6><strong id="seconde"></strong></font>
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
        <input class="enchere_propose_prix centrer" placeholder="Proposition (€)">
        <button class="btn_envoyer_propose_prix text-uppercase">Envoyer</button>
        <div class="enchere_nombre_participant detail_style position-absolute bottom-0 end-0">135 participants</div>
    </div>

    <div class="col-1"></div>

</div>




<br><a href="index.php">ICI</a>
<?php
    include("footer.php");
?>




