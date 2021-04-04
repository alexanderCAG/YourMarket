
<?php
    $title="Accueil";
    require "head.php";
?>
<form action="" method="POST">
    <input type="datetime-local" class="contenu_details_Ajoutarticle" name="datearticle" id="">
    <br>
    <button type="submit" name="submitok">ok</button>
</form>

<?php

if(isset($_POST['submitok'])){
    $date = $_POST['datearticle'];
    echo $date;

}
?>




<!-- Mon code -->
<br><a href="index.php">ICI</a>
<?php
    include("footer.php");
?>