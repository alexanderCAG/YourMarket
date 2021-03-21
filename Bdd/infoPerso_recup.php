
<?php
    include("cnx.php");
    
    if (isset($_POST['submit_valider_infoPaiement_acheteur'])){
        session_start();
		
    }
	if (isset($_POST['submit_valider_infoPersoL_acheteur'])){
        session_start();
		
    }
	if (isset($_POST['submit_valider_infoPerso_vendeur'])){
        session_start();
		
    }
	if (isset($_POST['submit_valider_infoPerso_admin'])){
        session_start();
		
    }

    include("../Front/confirm_register.php");
?>