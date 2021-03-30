
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

		$id_last="SELECT id_buyer FROM buyer ORDER BY id_buyer DESC LIMIT 1";

		if($con->query($sql1)===true){
            echo("");
			$id_last_result=$con->query($id_last);
			$row = mysqli_fetch_array($id_last_result);
			$result = $row['id_buyer'];
        }else{
            echo "Error: " . $sql1 . "<br>" . $con->error;
        }

		$sql2 = "INSERT INTO payment (id_buyer,carde,code,num_card,expiration,nom) 
				VALUES ('$result','$carte_bancaire','$codeSecret_acheteur','$numeroCarte_acheteur','$dateExpiration_acheteur','$nomCarte_acheteur')";

        if($con->query($sql2)===true){
            echo("");
        }else{
            echo "Error: " . $sql2 . "<br>" . $con->error;
        }
    }
    if(isset($_POST['submit_inscription_vendeur'])){
        session_start();
	    $nomMarque_vendeur=$_POST['nomMarque_vendeur'];
	    $telephone_vendeur=$_POST['telephone_vendeur'];
	    $mail_vendeur=$_POST['mail_vendeur'];
	    $mdp_vendeur=$_POST['mdp_vendeur'];
	    $mdp2_vendeur=$_POST['mdp2_vendeur'];

		$target_path="../../Image/";
        $target_path=$target_path.basename($_FILES['uploadedfile']['name']);

		if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){
			// enregistrer dans sql
			$sql = "INSERT INTO seller (brand,profil_picture,background,phone,email,passworde) VALUES ('$nomMarque_vendeur','$target_path','white','$telephone_vendeur','$mail_vendeur','$mdp_vendeur')";
			// $sql="insert into upload_image (path,nom) values ('$target_path','$nom')";
			if($con->query($sql)==true){
				echo"<br><br>";
			}else{
				echo "Error:".$sql.$con->error;
			}
		}else{
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

    include("../Front/confirm_register.php");
?>