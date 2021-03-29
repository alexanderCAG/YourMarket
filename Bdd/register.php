
<?php
    include("cnx.php");
    
    if (isset($_POST['submit_inscription_acheteur'])){
        session_start();
	    $nom_acheteur=$_POST['nom_acheteur'];
	    $prenom_acheteur=$_POST['prenom_acheteur'];
	    $telephone_acheteur=$_POST['telephone_acheteur'];
	    $mail_acheteur=$_POST['mail_acheteur'];
	    $mdp_acheteur=$_POST['mdp_acheteur'];
	    // $mdp2_acheteur=$_POST['mdp2_acheteur'];
	    $adresse1_acheteur=$_POST['adresse1_acheteur'];
	    $adresse2_acheteur=$_POST['adresse2_acheteur'];
	    $pays_acheteur=$_POST['pays_acheteur'];
	    $ville_acheteur=$_POST['ville_acheteur'];
	    $codepostal_acheteur=$_POST['codepostal_acheteur'];

	    $carte_bancaire=$_POST['carte_bancaire'];
	    $numeroCarte_acheteur=$_POST['numeroCarte_acheteur'];
	    $nomCarte_acheteur=$_POST['nomCarte_acheteur'];
	    $dateExpiration_acheteur=$_POST['dateExpiration_acheteur'];
	    $codeSecret_acheteur=$_POST['codeSecret_acheteur'];

        $sql1 = "INSERT INTO buyer (lastname,firstname,phone,email,passworde,adress1,adress2,city,zip_code,country) 
				VALUES ('$nom_acheteur','$prenom_acheteur','$telephone_acheteur','$mail_acheteur','$mdp_acheteur','$adresse1_acheteur','$adresse2_acheteur','$ville_acheteur','$codepostal_acheteur','$pays_acheteur')";

		$sql2 = "INSERT INTO payment (carde,code,num_card,expiration,nom) 
				VALUES ('$carte_bancaire','$codeSecret_acheteur','$numeroCarte_acheteur','$dateExpiration_acheteur','$nomCarte_acheteur')";

        if(($con->query($sql1)===true) && ($con->query($sql2)===true)){
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

		$photo=$_POST['img'];

		$sql = "INSERT INTO seller (brand,profil_picture,background,phone,email,passworde) VALUES ('$nomMarque_vendeur','$photo','white','$telephone_vendeur','$mail_vendeur','$mdp_vendeur')";

        if($con->query($sql)===true){
            echo("");
        }else{
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

    include("../Front/Base/confirm_register.php");
?>