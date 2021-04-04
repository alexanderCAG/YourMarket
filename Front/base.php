
<?php
    $title="Accueil";
    require "head.php";
?>

<form action="" method="POST">
    <textarea type="text" name="message" id="message" placeholder="message"></textarea>
    <input type="text" name="prenom" id="prenom" placeholder="prenom">
    <button type="submit" name="submit" style="width:200px; height:40px;">OK</button>
</form>

<div id="messages"></div>

<?php

include("../Bdd/cnx.php");
// $email_user = $_SESSION['email'];

if(isset($_POST['submit'])){
    $message = htmlspecialchars($_POST['message']);
    $prenom = nl2br(htmlspecialchars($_POST['prenom']));

    $query = mysqli_query($con, "INSERT INTO messagerie(message, user) VALUES ('$message','$prenom')");

    // echo "<script language='javascript' type='text/javascript'> location.href='../Front/base.php' </script>";
}

?>

<script>
    setInterval('load_message()',500);

    function load_message(){
        $('#messages').load('load.php');
    }
</script>


<!-- Mon code -->
<br><a href="index.php">ICI</a>
<?php
    include("footer.php");
?>