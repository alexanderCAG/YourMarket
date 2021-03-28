
<?php
    if (isset($_POST['submit'])){

        include("cnx.php");
        session_start();
        $usermail=$_POST['mail'];
        $password=$_POST['mdp'];
        // $queryacheteur = mysqli_query($con, "select * from users where username='$usermail' and password='$password' AND type = 'acheteur'");
        // $queryvendeur = mysqli_query($con, "select * from users where username='$usermail' and password='$password' AND type = 'vendeur'");
        // $queryadmin = mysqli_query($con, "select * from users where username='$usermail' and password='$password' AND type = 'admin'");

        // $queryacheteur = mysqli_query($con, "select * from buyer where email='$usermail' and password='$password'");

        // $queryvendeur = mysqli_query($con, "select * from seller where email='$usermail' and password='$password'");

        $queryadmin = mysqli_query($con, "select * from admin where email='$usermail' and password='$password'");



    if (mysqli_num_rows($queryadmin) != 0){
        $_SESSION['email']=$usermail;
        echo "<script language='javascript' type='text/javascript'> location.href='../Front/enchere.php' </script>";
    }
    // elseif (mysqli_num_rows($queryvendeur) != 0){
    //     // $_SESSION['mail_user']=$usermail;
    //     echo "<script language='javascript' type='text/javascript'> location.href='../Front/page-maison.php' </script>";
    // }
    // elseif (mysqli_num_rows($queryadmin) != 0){
    //     // $_SESSION['mail_user']=$usermail;
    //     echo "<script language='javascript' type='text/javascript'> location.href='../Front/enchere.php' </script>";
    // }
    else{ 
        // echo "<script type='text/javascript'> alert('User Name Or Password Invalid!')</script>";
        // echo "<script language='javascript' type='text/javascript'> location.href='../Front/connexion.php' </script>";
        echo "ERREUR DE CONNEXION";
    }
}
?>