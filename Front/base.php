

<?php
    $title="Accueil";
    require "head.php";
?>


<!-- <?php
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
?> -->

<?php
$sold_choix = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 0, 0, 0, 0, 0, 0,  10 ,25, 45, 60);

$aleatoire = rand('0', count($sold_choix)-1);

$sold = $sold_choix[$aleatoire];

echo $sold;

?>



<br><a href="index.php">ICI</a>
<?php
    include("footer.php");
?>