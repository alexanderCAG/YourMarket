
<?php
    if (isset($_POST['submit'])){

        include("cnx.php");
        session_start();
        $usermail=$_POST['mail'];
        $password=$_POST['mdp'];

        $queryadmin = mysqli_query($con, "select * from admin where password='$password' and (email='$usermail' or lastname='$usermail')");
		$queryvendeur = mysqli_query($con, "select * from seller where passworde='$password' and (email='$usermail' or brand='$usermail')");
		$queryacheteur = mysqli_query($con, "select * from buyer where passworde='$password' and (email='$usermail' or lastname='$usermail')");



    if (mysqli_num_rows($queryadmin) != 0){
        $_SESSION['email']=$usermail;
		// $_SESSION['lastname']=$usermail;
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/Admin/listeArticle.php' </script>";
    }
    elseif (mysqli_num_rows($queryvendeur) != 0){
        $_SESSION['email']=$usermail;
		// $_SESSION['lastname']=$usermail;
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/Vendeur/listeArticle.php' </script>";
    }
    elseif (mysqli_num_rows($queryacheteur) != 0){
        $_SESSION['email']=$usermail;
		// $_SESSION['lastname']=$usermail;
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/Acheteur/index.php' </script>";
    }
    else{
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/Base/connexion.php' </script>";
        // echo "<script type='text/javascript'> alert('User Name Or Password Invalid!')</script>";
        // echo "<script language='javascript' type='text/javascript'> location.href='../Front/connexion.php' </script>";
        // include("../Front/confirm_infoPerso_acheteur.php");
    }
}
?>