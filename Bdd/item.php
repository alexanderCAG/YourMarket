
<?php
    include("cnx.php");



        if (isset($_POST['submit_ajoutArticle'])){
   
        $nom_produit=$_POST['nomProduit_ajoutArticle'];
        $description=$_POST['description_ajoutArticle'];
        $prix_ajoutArticle=$_POST['prix_ajoutArticle'];
        $quantite=$_POST['quatite_ajoutArticle'];

        $achat_direct=$_POST['achat_direct_ajoutArticle'];
        $achat_negot=$_POST['achat_nego_ajoutArticle'];
        $achat_bidding=$_POST['achat_enchere_ajoutArticle'];

        $bool_achat_direct="0";
        $bool_achat_nego="0";
        $bool_achat_bidding="0";

        if($achat_direct=="direct"){
                 $bool_achat_direct = "1";   
        }
        if($achat_negot=="nego"){
                 $bool_achat_nego = "1";   
        }
        if($achat_bidding=="bidding"){
                 $bool_achat_bidding = "1";   
        }


        if($_POST['choixCategorie_ajoutArticle']=="HOUSE"){
                 $category = $_POST['sousCategorie_ajoutArticle_maison'];  
        }
        else {
                 $category = $_POST['sousCategorie_ajoutArticle_vetement'];
        }


        $sql = "INSERT INTO item (price,name,quantity,category,description,is_bidding,is_negotiated,is_buying) VALUES ('$prix_ajoutArticle','$nom_produit','$quantite','$category','$description','$bool_achat_bidding','$bool_achat_nego','$bool_achat_direct')";
        //$sql = "INSERT INTO item VALUES ('2','2','123','bobby','20','cap','this is a description','photo','0','1','1')";
       
        

        if($con->query($sql)===true){
        $last_id = mysqli_insert_id($conn);
            echo("");
        }else{
            echo "Error: " . $sql . "<br>" . $con->error;
        }

    include("../Front/confirm_register.php"); }
    else { 
        // echo "<script type='text/javascript'> alert('User Name Or Password Invalid!')</script>";
        // echo "<script language='javascript' type='text/javascript'> location.href='../Front/connexion.php' </script>";
        echo "ERREUR DE CONNEXION";
    }
?>