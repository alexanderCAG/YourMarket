
<?php
    include("cnx.php");
    
    if (isset($_POST['submit_inscription_acheteur'])){
        session_start();
	    $nom_acheteur=$_POST['nom_acheteur'];
	    $prenom_acheteur=$_POST['prenom_acheteur'];
	    $telephone_acheteur=$_POST['telephone_acheteur'];
	    $mail_acheteur=$_POST['mail_acheteur'];
	    $mdp_acheteur=$_POST['mdp_acheteur'];
	    $mdp2_acheteur=$_POST['mdp2_acheteur'];
	    $adresse1_acheteur=$_POST['adresse1_acheteur'];
	    $adresse2_acheteur=$_POST['adresse2_acheteur'];
	    $pays_acheteur=$_POST['pays_acheteur'];
	    $ville_acheteur=$_POST['ville_acheteur'];
	    $codepostal_acheteur=$_POST['codepostal_acheteur'];

        $sql = "INSERT INTO inscription (nom,prenom) VALUES ('$nom_acheteur','$mdp_acheteur')";

        if($con->query($sql)===true){
            echo("");
        }else{
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    if(isset($_POST['submit_inscription_vendeur'])){
        session_start();
	    $nomMarque_vendeur=$_POST['nomMarque_vendeur'];
	    $telephone_vendeur=$_POST['telephone_vendeur'];
	    $mail_vendeur=$_POST['mail_vendeur'];
	    $mdp_vendeur=$_POST['mdp_vendeur'];
	    $mdp2_vendeur=$_POST['mdp2_vendeur'];
    }

    include("../Front/confirm_register.php");
?>