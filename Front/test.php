
<?php
    $title="Accueil";
    require "head.php";
?>

<form action="" method="POST">
    <textarea type="text" name="message" id="message" placeholder="message"></textarea>
    <button type="text" name="prenom" id="prenom" value="valider" placeholder="prenom">ok</button>
    <!-- <input type="text" name="prenom" id="prenom" placeholder="prenom"> -->
    <button type="submit" name="submit" style="width:200px; height:40px;">OK</button>
</form>
<div id="messages"></div>

<style>
    #messages{
        width : 200px;
    }
    .glob{
        width : 100px;
        height : 70px;
        background-color: gray;
    }
    .message h4{
        color : green;
    }
    .message p{
        color : pink;
    }
</style>

<?php

include("../Bdd/cnx.php");
// $email_user = $_SESSION['email'];

if(isset($_POST['prenom'])){
    $message = htmlspecialchars($_POST['message']);
    $prenom = 'valider';

    // $query = mysqli_query($con, "INSERT INTO messagerie(message, user) VALUES ('$message','$prenom')");
    $query = mysqli_query($con, "UPDATE messagerie SET message='$message', user='$prenom'");

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