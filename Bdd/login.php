
<?php
    if (isset($_POST['submit'])){

        include("cnx.php");
        session_start();
        $usermail=$_POST['mail'];
        $password=$_POST['mdp'];

        $queryadmin = mysqli_query($con, "select * from admin where email='$usermail' or lastname='$usermail' and password='$password'");
		$queryvendeur = mysqli_query($con, "select * from seller where email='$usermail' or brand='$usermail' and password='$password'");
		$queryacheteur = mysqli_query($con, "select * from buyer where email='$usermail' or lastname='$usermail' and password='$password'");



    if (mysqli_num_rows($queryadmin) != 0){
        $_SESSION['email']=$usermail;
		$_SESSION['lastname']=$usermail;
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/listeArticle.php' </script>";
    }
    else if (mysqli_num_rows($queryvendeur) != 0){
        $_SESSION['email']=$usermail;
		$_SESSION['lastname']=$usermail;
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/listeArticle.php' </script>";
    }
    elseif (mysqli_num_rows($queryacheteur) != 0){
        $_SESSION['email']=$usermail;
		$_SESSION['lastname']=$usermail;
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/index.php' </script>";
    }
    else{ 
        // echo "<script type='text/javascript'> alert('User Name Or Password Invalid!')</script>";
        // echo "<script language='javascript' type='text/javascript'> location.href='../Front/connexion.php' </script>";
        echo "ERREUR DE CONNEXION";
    }
}
?>