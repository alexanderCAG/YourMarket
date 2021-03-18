<?php
    $title="Accueil";
    require "head.php";
?>
<!-- Mon code -->

<img id="img_test">

<?php
include("../Bdd/cnx.php");
session_start();
$photo="chaussure.png";

// $recup_photo = "SELECT prenom from inscription where prenom= '$photo'";

// if($con->query($recup_photo)===true){
//     echo ("Hello '$recup_photo'  Bien");
// }else{
//     echo "Error: " . $recup_photo . "<br>" . $con->error;
// }

$recup_photo = mysqli_query($con, "select prenom from inscription where prenom='$photo'");

if (mysqli_num_rows($recup_photo) != 0){
    echo ("Hello '$recup_photo'  Bien");
}



// echo ("<script language='javascript' type='text/javascript'> 
// function readURL(mon_img) {
//     if (mon_img.files && mon_img.files[0]) {
//         let read = new FileReader();
//         alert('ok');
//         read.onload = function (e) {
//             $('#img_test').attr('src', e.target.result);
//         }
        
//         read.readAsDataURL(mon_img.files[0]);
//     }
// }
// window.onload = readURL($recup_photo); </script>");   

?>

<!-- <script>
function readURL(mon_img) {
    if (mon_img.files && mon_img.files[0]) {
        let read = new FileReader();
        alert('ok');
        read.onload = function (e) {
            $('#img_test').attr('src', e.target.result);
        }
        
        read.readAsDataURL(mon_img.files[0]);
    }
}
alert('ok1');
window.onload = readURL($recup_photo);
alert('ok2');
</script> -->


<br><a href="index.php">ICI</a>
<?php
    include("footer.php");
?>




