
<?php
    include("cnx.php");
	session_start();
	$email_user = $_SESSION['email'];
    
    if (isset($_POST['submit_valider_infoPaiement_acheteur'])){
	    $infoPerso_carte_bancaire=$_POST['infoPerso_carte_bancaire'];
	    $infoPerso_numeroCarte_acheteur=$_POST['infoPerso_numeroCarte_acheteur'];
	    $infoPerso_nomCarte_acheteur=$_POST['infoPerso_nomCarte_acheteur'];
	    $infoPerso_dateExpiration_acheteur=$_POST['infoPerso_dateExpiration_acheteur'];
	    $infoPerso_codeSecret_acheteur=$_POST['infoPerso_codeSecret_acheteur'];
		
		$id="SELECT id_buyer FROM buyer WHERE email='$email_user'";

		$id_result=$con->query($id);
		$row = mysqli_fetch_array($id_result);
		$result = $row['id_buyer'];

		$queryinfoPerso_acheteur1 = mysqli_query($con, "UPDATE payment SET carde='$infoPerso_carte_bancaire',code='$infoPerso_codeSecret_acheteur',num_card='$infoPerso_numeroCarte_acheteur',expiration='$infoPerso_dateExpiration_acheteur',nom='$infoPerso_nomCarte_acheteur' WHERE  id_buyer='$result'");
		
		include("../Front/confirm_infoPerso_acheteur.php");
    }
	if (isset($_POST['submit_valider_infoPersoL_acheteur'])){
        $infoPerso_nom_acheteur=$_POST['infoPerso_nom_acheteur'];
	    $infoPerso_prenom_acheteur=$_POST['infoPerso_prenom_acheteur'];
	    $infoPerso_telephone_acheteur=$_POST['infoPerso_telephone_acheteur'];
	    $infoPerso_mail_acheteur=$_POST['infoPerso_mail_acheteur'];
	    $infoPerso_mdp_acheteur=$_POST['infoPerso_mdp_acheteur'];
	    // $infoPerso_mdp2_acheteur=$_POST['infoPerso_mdp2_acheteur'];
	    $infoPerso_adresse1_acheteur=$_POST['infoPerso_adresse1_acheteur'];
	    $infoPerso_adresse2_acheteur=$_POST['infoPerso_adresse2_acheteur'];
	    $infoPerso_pays_acheteur=$_POST['infoPerso_pays_acheteur'];
	    $infoPerso_ville_acheteur=$_POST['infoPerso_ville_acheteur'];
	    $infoPerso_codepostal_acheteur=$_POST['infoPerso_codepostal_acheteur'];

		$queryinfoPerso_acheteur2 = mysqli_query($con, "UPDATE buyer SET lastname='$infoPerso_nom_acheteur',firstname='$infoPerso_prenom_acheteur',phone='$infoPerso_telephone_acheteur',email='$infoPerso_mail_acheteur',passworde='$infoPerso_mdp_acheteur',adress1='$infoPerso_adresse1_acheteur',adress2='$infoPerso_adresse2_acheteur',city='$infoPerso_ville_acheteur',zip_code='$infoPerso_codepostal_acheteur', country='$infoPerso_pays_acheteur' WHERE email='$email_user'");

		include("../Front/confirm_infoPerso_acheteur.php");
    }
	if (isset($_POST['submit_valider_infoPerso_vendeur'])){
		$infoPerso_nomMarque_vendeur=$_POST['infoPerso_nomMarque_vendeur'];
	    $infoPerso_telephone_vendeur=$_POST['infoPerso_telephone_vendeur'];
	    $infoPerso_mail_vendeur=$_POST['infoPerso_mail_vendeur'];
	    $infoPerso_mdp_vendeur=$_POST['infoPerso_mdp_vendeur'];
	    // $infoPerso_mdp2_vendeur=$_POST['infoPerso_mdp2_vendeur'];

		$infoPerso_photo="../../Image/";
        $infoPerso_photo=$infoPerso_photo.basename($_FILES['infoPerso_img']['name']);

		$queryinfoPerso_vendeur = mysqli_query($con, "UPDATE seller SET brand='$infoPerso_nomMarque_vendeur',profil_picture='$infoPerso_photo', phone='$infoPerso_telephone_vendeur',email='$infoPerso_mail_vendeur',passworde='$infoPerso_mdp_vendeur' WHERE email='$email_user'");
		

		include("../Front/confirm_infoPerso_vendeur.php");
    }
	if (isset($_POST['submit_valider_infoPerso_admin'])){
		$infoPerso_nom_admin=$_POST['infoPerso_nom_admin'];
	    $infoPerso_prenom_admin=$_POST['infoPerso_prenom_admin'];
	    $infoPerso_telephone_admin=$_POST['infoPerso_telephone_admin'];
	    $infoPerso_mail_admin=$_POST['infoPerso_mail_admin'];
	    $infoPerso_mdp_admin=$_POST['infoPerso_mdp_admin'];
	    // $infoPerso_mdp2_admin=$_POST['infoPerso_mdp2_admin'];
	    $infoPerso_adresse1_admin=$_POST['infoPerso_adresse1_admin'];
	    $infoPerso_adresse2_admin=$_POST['infoPerso_adresse2_admin'];
	    $infoPerso_pays_admin=$_POST['infoPerso_pays_admin'];
	    $infoPerso_ville_admin=$_POST['infoPerso_ville_admin'];
	    $infoPerso_codepostal_admin=$_POST['infoPerso_codepostal_admin'];

        $queryinfoPerso_admin = mysqli_query($con, "UPDATE admin SET lastname='$infoPerso_nom_admin',firstname='$infoPerso_prenom_admin',phone='$infoPerso_telephone_admin',email='$infoPerso_mail_admin',password='$infoPerso_mdp_admin',adress1='$infoPerso_adresse1_admin',adress2='$infoPerso_adresse2_admin',country='$infoPerso_pays_admin',city='$infoPerso_ville_admin',zipcode='$infoPerso_codepostal_admin' WHERE email='$email_user'");


		include("../Front/confirm_infoPerso_admin.php");
    }
	if (isset($_POST['submit_btn_change_qte'])){
		$qttItemSeller=$_POST['qttItemSeller'];
	    $idItem=$_POST['idItem'];

		$id="SELECT id_seller FROM item WHERE id_item='$idItem'";

		$id_result=$con->query($id);
		$row = mysqli_fetch_array($id_result);
		$result = $row['id_seller'];

        $queryQuantiteItem = mysqli_query($con, "UPDATE item SET quantity='$qttItemSeller' WHERE id_item='$idItem' and id_seller='$result'");


		include("../Front/confirm_infoPerso_vendeur.php");
    }
	if (isset($_POST['submit_btn_change_qte_admin'])){
		$qttItemSeller=$_POST['qttItemSeller'];
	    $idItem=$_POST['idItem'];

		$id="SELECT id_seller FROM item WHERE id_item='$idItem'";

		$id_result=$con->query($id);
		$row = mysqli_fetch_array($id_result);
		$result = $row['id_seller'];

        $queryQuantiteItem = mysqli_query($con, "UPDATE item SET quantity='$qttItemSeller' WHERE id_item='$idItem' and id_seller='$result'");


		include("../Front/confirm_infoPerso_admin.php");
    }
	if (isset($_POST['submit_valider_background'])){
		$background_seller=$_POST['background_seller'];
        $queryBackground_seller = mysqli_query($con, "UPDATE seller SET background='$background_seller' WHERE email='$email_user'");

		include("../Front/confirm_infoPerso_vendeur.php");
    }
	// else{
    //     echo "ERREUR";
    // }

    // include("../Front/confirm_infoPerso.php");
?>