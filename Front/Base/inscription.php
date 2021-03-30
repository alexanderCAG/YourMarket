<?php
    $title="Inscription";
    require "head.php";
?>


<div class="inscription_general position-relative">

    <div class="inscription_div position-absolute top-50 start-50 translate-middle shadow">
        <div class="inscription_titre row position-absolute top-0 start-50 translate-middle-x">
            <div id="inscription_titre_premier" class="col-6 position-relative">
                <button class="btn_inscription_titre_premier position-absolute top-50 start-50 translate-middle text_uppercase texte_style">Acheteur</button>
            </div>

            <div id="inscription_titre_deuxieme" class="col-6 position-relative">
                <button class="btn_inscription_titre_deuxieme position-absolute top-50 start-50 translate-middle text_uppercase texte_style">Vendeur</button>
            </div>
        </div>
        
        <div class="inscription_contenu position-absolute bottom-0 start-0">

            <form action="" method="POST">
                <div class="row inscription_contenu_acheteur">
                    <div class="col-1"></div>

                    <div class="col-5">
                        <h3 class="inscription_detail_titre1 text-uppercase detail_style">information personnelles</h3>
                        
                        <input id="nom_acheteur" name="nom_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Nom">
                        <br>
                        <span id="nomErreur_acheteur"></span>
                        <br>
                        <input id="prenom_acheteur" name="prenom_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Prénom">
                        <br>
                        <span id="prenomErreur_acheteur"></span>
                        <br>
                        <input id="telephone_acheteur" name="telephone_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Téléphone">
                        <br>
                        <span id="telephoneErreur_acheteur"></span>
                        <br>
                        <input id="mail_acheteur" name="mail_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Email">
                        <br>
                        <span id="mailErreur_acheteur"></span>
                        <br>
                        <input id="mdp_acheteur" name="mdp_acheteur" type="password" class="inscription_contenu_details_acheteur" placeholder="Mot de passe">
                        <br>
                        <span id="mdpErreur_acheteur"></span>
                        <br>
                        <input id="mdp2_acheteur" name="mdp2_acheteur" type="password" class="inscription_contenu_details_acheteur" placeholder="Confirmation mot de passe">
                        <br>
                        <span id="mdp2Erreur_acheteur"></span>
                    </div>

                    <div class="col-5" style="margin-left:50px!important;">
                        <h3 class="inscription_detail_titre2 text-uppercase detail_style">information de livraison</h3>
                        
                        <input id="adresse1_acheteur" name="adresse1_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Adresse 1">
                        <br>
                        <span id="adresse1Erreur_acheteur"></span>
                        <br>
                        <input id="adresse2_acheteur" name="adresse2_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Adresse 2">
                        <br>
                        <span id="adresse2Erreur_acheteur"></span>
                        <br>
                        <input id="pays_acheteur" name="pays_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Pays">
                        <br>
                        <span id="paysErreur_acheteur"></span>
                        <br>
                        <input id="ville_acheteur" name="ville_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Ville">
                        <br>
                        <span id="villeErreur_acheteur"></span>
                        <br>
                        <input id="codepostal_acheteur" name="codepostal_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Code Postal">
                        <br>
                        <span id="codepostalErreur_acheteur"></span>
                        
                    </div>

                    <div class="col-1"></div>

                    <div class="col-12" style="margin-top:30px!important;">
                        <h3 class="inscription_detail_titre3 text-uppercase detail_style centrer">Information de paiement</h3>

                        <div class="row">
                            <div class="col-1"></div>

                            <div class="col-5" style="margin-top:10px!important;">
                                <input id="typeCarte_acheteur" name="typeCarte_acheteur" type="text" class="inscription_contenu_details_acheteur centrer" placeholder="Type de carte">
                                <br>
                                <span id="typeCarteErreur_acheteur"></span>
                                <br>

                                <div class="row">
                                    <div class="col-6">
                                        <input type="radio" name="carte_bancaire" id="carte_payement_amex" value="carte_payement_amex">
                                        <img class="image_payment_inscription" src="../../Image/carte_payement_amex.png" alt="carte_payement_amex">
                                    </div>

                                    <div class="col-6">
                                        <input type="radio" name="carte_bancaire" id="carte_payement_cb" value="carte_payement_cb">
                                        <img class="image_payment_inscription" src="../../Image/carte_payement_cb.png" alt="carte_payement_cb">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <input type="radio" name="carte_bancaire" id="carte_payement_mastercard" value="carte_payement_mastercard">
                                        <img class="image_payment_inscription" src="../../Image/carte_payement_mastercard.png" alt="carte_payement_mastercard">
                                    </div>

                                    <div class="col-6">
                                        <input type="radio" name="carte_bancaire" id="carte_payement_visa" value="carte_payement_visa">
                                        <img class="image_payment_inscription" src="../../Image/carte_payement_visa.png" alt="carte_payement_visa">
                                    </div>
                                </div>

                                <br>
                                <input id="check_condition_inscription_acheteur" class="condition_inscription" type="checkbox">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#condition_contenu_inscription">Accepter les condition d'inscription</a>
                                <br>
                                <a class="retour_login_inscription" href="connexion.php">Login</a>
                                <button type="button" onclick="reset_acheteur()" class="btn_reset_inscription_acheteur text-uppercase detail_style">Reset</button>
                            </div>

                            <div class="col-5" style="margin-left:50px!important; margin-top:10px!important;">
                                <input id="numeroCarte_acheteur" name="numeroCarte_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Numéro de carte">
                                <br>
                                <span id="numeroCarteErreur_acheteur"></span>
                                <br>
                                
                                <input id="nomCarte_acheteur" name="nomCarte_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Nom de carte">
                                <br>
                                <span id="nomCarteErreur_acheteur"></span>
                                <br>
                                <label style="color:#888888;">Date d'expiration</label>
                                <input id="dateExpiration_acheteur" name="dateExpiration_acheteur" type="date" class="inscription_contenu_details_acheteur" placeholder="Date d'expiration">
                                <br>
                                <span id="dateExpirationErreur_acheteur"></span>
                                <br>
                                <input id="codeSecret_acheteur" name="codeSecret_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Code secret">
                                <br>
                                <span id="codeSecretErreur_acheteur"></span>
                                <br>
                            </div>

                            <div class="col-1"></div>
                        </div>

                    </div>

                    <div class="col-12">
                        <button type="submit" id="submit_inscription_acheteur" name="submit_inscription_acheteur" class="btn text-light btn_inscription_final_acheteur text-uppercase detail_style">S'inscrire</button>
                    </div>
                </div>
            </form>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row inscription_contenu_vendeur">
                    <div class="col-1"></div>

                    <div class="col-5">
                        <h3 class="inscription_detail_titre1 text-uppercase detail_style">information générale</h3>
                        
                        <input id="nomMarque_vendeur" name="nomMarque_vendeur" class="inscription_contenu_details_vendeur" placeholder="Nom de la marque">
                        <br>
                        <span id="nomMarqueErreur_vendeur"></span>
                        <br>
                        <input id="telephone_vendeur" name="telephone_vendeur" class="inscription_contenu_details_vendeur" placeholder="Téléphone">
                        <br>
                        <span id="telephoneErreur_vendeur"></span>
                        <br>
                        <input id="mail_vendeur" name="mail_vendeur" class="inscription_contenu_details_vendeur" placeholder="Email">
                        <br>
                        <span id="mailErreur_vendeur"></span>
                        <br>
                        <input id="mdp_vendeur" name="mdp_vendeur" type="password" class="inscription_contenu_details_vendeur" placeholder="Mot de passe">
                        <br>
                        <span id="mdpErreur_vendeur"></span>
                        <br>
                        <input id="mdp2_vendeur" name="mdp2_vendeur" type="password" class="inscription_contenu_details_vendeur" placeholder="Confirmation mot de passe">
                        <br>
                        <span id="mdp2Erreur_vendeur"></span>
                        <br>
                        <a class="retour_login_inscription" href="connexion.php">Login</a>
                        <button type="button" onclick="reset_vendeur()" class="btn_reset_inscription_vendeur text-uppercase detail_style">Reset</button>
                    </div>

                    <div class="col-5" style="margin-left:50px!important;">
                        <img id="img_inscription_choix_vendeur">
                        <div class="img_inscription_general">
                            <span class="file_inscription_img">
                                <span onclick="choix_image_vendeur()" class="btn btn-default btn_choix_img_vendeur_inscription">
                                    Browse <input type="file" name="uploadedfile" id="file_interrieur_inscription_img" accept="image/png, image/jpg, image/jpeg">
                                </span>
                            </span>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <br><br>
                        <input id="check_condition_inscription_vendeur" class="condition_inscription" type="checkbox">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#condition_contenu_inscription">Accepter les condition d'inscription</a>
                    </div>

                    <div class="col-1"></div>

                    <div class="col-12">
                        <button type="submit" id="submit_inscription_vendeur" name="submit_inscription_vendeur" class="btn text-light btn_inscription_final_vendeur text-uppercase detail_style position-absolute bottom-0 start-0">S'inscrire</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Modal condition -->
<div class="modal fade" id="condition_contenu_inscription" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title modal_condition_inscription_titre texte_style text-uppercase" id="staticBackdropLabel">Condition d'inscription</h5>
        </div>
        <div class="modal-body modal_condition_inscription_texte">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quasi velit eveniet, saepe harum exercitationem unde eum quisquam earum magnam vero distinctio maiores consequuntur sint itaque? Itaque nulla porro expedita.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, sunt! Deleniti odio facere illum minus non in tempora mollitia, labore architecto animi cupiditate sequi unde, facilis doloremque velit a est.
            <br>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, suscipit id, harum cupiditate deleniti obcaecati dicta voluptas fuga eligendi laboriosam reprehenderit odit aspernatur quo, architecto ipsam necessitatibus ut expedita in.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem tempora laborum eveniet accusamus voluptate doloribus ratione aut nostrum? Ut nobis praesentium in illo id consequatur, saepe eaque dolorum vero nihil?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minus reprehenderit aut earum necessitatibus? Vero ipsam dolorum deleniti voluptatem suscipit eaque, omnis animi accusantium corporis consectetur facere at autem officiis.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur, at saepe, voluptate eius incidunt est iste totam laboriosam assumenda recusandae doloremque quis delectus perspiciatis. Iste cupiditate modi accusamus culpa ducimus?
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis odio magnam provident laborum omnis tenetur ipsum recusandae. Repudiandae minima assumenda dolores porro alias quis itaque cumque! Nostrum accusamus quos impedit?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quasi velit eveniet, saepe harum exercitationem unde eum quisquam earum magnam vero distinctio maiores consequuntur sint itaque? Itaque nulla porro expedita.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, sunt! Deleniti odio facere illum minus non in tempora mollitia, labore architecto animi cupiditate sequi unde, facilis doloremque velit a est.
            <br>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, suscipit id, harum cupiditate deleniti obcaecati dicta voluptas fuga eligendi laboriosam reprehenderit odit aspernatur quo, architecto ipsam necessitatibus ut expedita in.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem tempora laborum eveniet accusamus voluptate doloribus ratione aut nostrum? Ut nobis praesentium in illo id consequatur, saepe eaque dolorum vero nihil?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minus reprehenderit aut earum necessitatibus? Vero ipsam dolorum deleniti voluptatem suscipit eaque, omnis animi accusantium corporis consectetur facere at autem officiis.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur, at saepe, voluptate eius incidunt est iste totam laboriosam assumenda recusandae doloremque quis delectus perspiciatis. Iste cupiditate modi accusamus culpa ducimus?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis odio magnam provident laborum omnis tenetur ipsum recusandae. Repudiandae minima assumenda dolores porro alias quis itaque cumque! Nostrum accusamus quos impedit?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
        </div>
        </div>
    </div>
</div>

<div id="Clouds">
    <div class="Cloud Foreground"></div>
    <div class="Cloud Background"></div>
    <div class="Cloud Foreground"></div>
    <div class="Cloud Background"></div>
    <div class="Cloud Foreground"></div>
    <div class="Cloud Background"></div>
    <div class="Cloud Background"></div>
    <div class="Cloud Foreground"></div>
    <div class="Cloud Background"></div>
    <div class="Cloud Background"></div>
</div>



<!-- register verif -->
<?php
    include("../../Bdd/cnx.php");
    
    if (isset($_POST['submit_inscription_acheteur'])){
        // session_start();
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
        // session_start();
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
		}
    }

    // include("../../Front/confirm_register.php");
?>

<?php
    include("footer.php");
?>

