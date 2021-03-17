
<?php
    $title="Accueil";
    require "head.php";
?>

<input type="date" id="start" name="trip-start" min="2018-01-01" max="2024-12-31">

<div>
    <div class="jours enchere_compteur" id="jours"></div>
    <div class="heures enchere_compteur" id="heures"></div>
    <div class="minutes enchere_compteur" id="minutes"></div>
    <div class="secondes enchere_compteur" id="secondes"></div>
</div>

<a href="index.php">ICI</a>

<?php
    include("footer.php");
?>


