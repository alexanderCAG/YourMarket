
<?php
    include("cnx.php");
    
    if (isset($_POST['submit_valider_infoPaiement_acheteur'])){
        session_start();
		echo("<br>alex<br><br>alex<br><br>alex<br><br>alex<br><br>alex<br><br>alex<br>");
	    // $nom_acheteur=$_POST['nom_acheteur'];
	    // $prenom_acheteur=$_POST['prenom_acheteur'];
	    // $telephone_acheteur=$_POST['telephone_acheteur'];
	    // $mail_acheteur=$_POST['mail_acheteur'];
	    // $mdp_acheteur=$_POST['mdp_acheteur'];
	    // $mdp2_acheteur=$_POST['mdp2_acheteur'];
	    // $adresse1_acheteur=$_POST['adresse1_acheteur'];
	    // $adresse2_acheteur=$_POST['adresse2_acheteur'];
	    // $pays_acheteur=$_POST['pays_acheteur'];
	    // $ville_acheteur=$_POST['ville_acheteur'];
	    // $carte_bancaire=$_POST['carte_bancaire'];
	    // $numeroCarte_acheteur=$_POST['numeroCarte_acheteur'];
	    // $nomCarte_acheteur=$_POST['nomCarte_acheteur'];
	    // $dateExpiration_acheteur=$_POST['dateExpiration_acheteur'];
	    // $codeSecret_acheteur=$_POST['codeSecret_acheteur'];

        // $sql = "INSERT INTO inscription (nom,prenom) VALUES ('$nom_acheteur','$carte_bancaire')";

        // if($con->query($sql)===true){
        //     echo("");
        // }else{
        //     echo "Error: " . $sql . "<br>" . $con->error;
        // }
    }
	if (isset($_POST['submit_valider_infoPersoL_acheteur'])){
        session_start();
		echo("<br>alex<br><br>alex<br><br>alex<br><br>alex<br><br>alex<br><br>alex<br>");
	    // $nom_acheteur=$_POST['nom_acheteur'];
	    // $prenom_acheteur=$_POST['prenom_acheteur'];
	    // $telephone_acheteur=$_POST['telephone_acheteur'];
	    // $mail_acheteur=$_POST['mail_acheteur'];
	    // $mdp_acheteur=$_POST['mdp_acheteur'];
	    // $mdp2_acheteur=$_POST['mdp2_acheteur'];
	    // $adresse1_acheteur=$_POST['adresse1_acheteur'];
	    // $adresse2_acheteur=$_POST['adresse2_acheteur'];
	    // $pays_acheteur=$_POST['pays_acheteur'];
	    // $ville_acheteur=$_POST['ville_acheteur'];
	    // $carte_bancaire=$_POST['carte_bancaire'];
	    // $numeroCarte_acheteur=$_POST['numeroCarte_acheteur'];
	    // $nomCarte_acheteur=$_POST['nomCarte_acheteur'];
	    // $dateExpiration_acheteur=$_POST['dateExpiration_acheteur'];
	    // $codeSecret_acheteur=$_POST['codeSecret_acheteur'];

        // $sql = "INSERT INTO inscription (nom,prenom) VALUES ('$nom_acheteur','$carte_bancaire')";

        // if($con->query($sql)===true){
        //     echo("");
        // }else{
        //     echo "Error: " . $sql . "<br>" . $con->error;
        // }
    }

    include("../Front/confirm_register.php");
?>