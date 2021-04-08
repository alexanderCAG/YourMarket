

<?php
    $title="Accueil";
    require "head.php";
?>


<?php
// $now = date('Y-m-d H:i:s');

//         // echo $now;
//         // $now = new DateTime('2021-04-09 22:25:14');
//         // $now = $now->format('Y-m-d H:i:s');
//         // echo date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $now)));

// $next = new DateTime('2021-04-08 18:07:00');
// $next = $next->format('Y-m-d H:i:s');

// if(checkdate($next)){
//     echo"ca marche ?";
// }


// if( $next < $now ){
//     echo "Pas encore passée";
// } 
//         // elseif( $next > $now ) {
//         //     echo "Date passée";
//         // }
// elseif( $next == $now  || $next > $now){
//     echo "Date passée";
// }

$now = new DateTime();
$dtA = new DateTime('2021-04-08 14:30:14');
// $dtB = new DateTime('2021-04-09 22:25:14');

if ( $dtA > $now ) {
  echo 'SUP';
}
else {
  echo 'NOP';
}


?>


<br><a href="index.php">ICI</a>
<?php
    include("footer.php");
?>