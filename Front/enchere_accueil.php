
<?php
    $title="Enchere";
    require "head.php";
?>

<?php require "../Bdd/navbar.php"; ?>


<div class="genale_page_enchere position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_enchere text-uppercase">
            enchères
        </p>
        <p class="info_general_enchere centrer detail_style">
            15 enchères en cours
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

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
    include("footer.php");
?>