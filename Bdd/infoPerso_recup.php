
<?php
    include("cnx.php");
    
    if (isset($_POST['submit_valider_infoPaiement_acheteur'])){
        session_start();
	    $infoPerso_carte_bancaire=$_POST['infoPerso_carte_bancaire'];
	    $infoPerso_numeroCarte_acheteur=$_POST['infoPerso_numeroCarte_acheteur'];
	    $infoPerso_nomCarte_acheteur=$_POST['infoPerso_nomCarte_acheteur'];
	    $infoPerso_dateExpiration_acheteur=$_POST['infoPerso_dateExpiration_acheteur'];
	    $infoPerso_codeSecret_acheteur=$_POST['infoPerso_codeSecret_acheteur'];
		
		include("../Front/confirm_infoPerso_acheteur.php");
    }
	if (isset($_POST['submit_valider_infoPersoL_acheteur'])){
        session_start();
        $infoPerso_nom_acheteur=$_POST['infoPerso_nom_acheteur'];
	    $infoPerso_prenom_acheteur=$_POST['infoPerso_prenom_acheteur'];
	    $infoPerso_telephone_acheteur=$_POST['infoPerso_telephone_acheteur'];
	    $infoPerso_mail_acheteur=$_POST['infoPerso_mail_acheteur'];
	    $infoPerso_mdp_acheteur=$_POST['infoPerso_mdp_acheteur'];
	    $infoPerso_mdp2_acheteur=$_POST['infoPerso_mdp2_acheteur'];
	    $infoPerso_adresse1_acheteur=$_POST['infoPerso_adresse1_acheteur'];
	    $infoPerso_adresse2_acheteur=$_POST['infoPerso_adresse2_acheteur'];
	    $infoPerso_pays_acheteur=$_POST['infoPerso_pays_acheteur'];
	    $infoPerso_ville_acheteur=$_POST['infoPerso_ville_acheteur'];
		
		include("../Front/confirm_infoPerso_acheteur.php");
    }
	if (isset($_POST['submit_valider_infoPerso_vendeur'])){
        session_start();
		$infoPerso_nomMarque_vendeur=$_POST['infoPerso_nomMarque_vendeur'];
	    $infoPerso_telephone_vendeur=$_POST['infoPerso_telephone_vendeur'];
	    $infoPerso_mail_vendeur=$_POST['infoPerso_mail_vendeur'];
	    $infoPerso_mdp_vendeur=$_POST['infoPerso_mdp_vendeur'];
	    $infoPerso_mdp2_vendeur=$_POST['infoPerso_mdp2_vendeur'];

		$infoPerso_photo=$_POST['infoPerso_img'];

		include("../Front/confirm_infoPerso_vendeur.php");
    }
	if (isset($_POST['submit_valider_infoPerso_admin'])){
        session_start();
		$infoPerso_nom_admin=$_POST['infoPerso_nom_admin'];
	    $infoPerso_prenom_admin=$_POST['infoPerso_prenom_admin'];
	    $infoPerso_telephone_admin=$_POST['infoPerso_telephone_admin'];
	    $infoPerso_mail_admin=$_POST['infoPerso_mail_admin'];
	    $infoPerso_mdp_admin=$_POST['infoPerso_mdp_admin'];
	    $infoPerso_mdp2_admin=$_POST['infoPerso_mdp2_admin'];
	    $infoPerso_adresse1_admin=$_POST['infoPerso_adresse1_admin'];
	    $infoPerso_adresse2_admin=$_POST['infoPerso_adresse2_admin'];
	    $infoPerso_pays_admin=$_POST['infoPerso_pays_admin'];
	    $infoPerso_ville_admin=$_POST['infoPerso_ville_admin'];

		include("../Front/confirm_infoPerso_admin.php");
    }

    // include("../Front/confirm_infoPerso.php");
?>