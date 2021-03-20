/********************************
            GENERAL
*********************************/
jQuery(document).ready(function(){

    /********************************
        INFO PAIEMENT ACHETEUR
    *********************************/
    document.getElementById('infoPerso_typeCarte_acheteur').disabled=true;
    document.getElementById('infoPerso_carte_payement_amex').disabled=true;
    document.getElementById('infoPerso_carte_payement_cb').disabled=true;
    document.getElementById('infoPerso_carte_payement_mastercard').disabled=true;
    document.getElementById('infoPerso_carte_payement_visa').disabled=true;
    document.getElementById('infoPerso_numeroCarte_acheteur').disabled=true;
    document.getElementById('infoPerso_nomCarte_acheteur').disabled=true;
    document.getElementById('infoPerso_dateExpiration_acheteur').disabled=true;
    document.getElementById('infoPerso_codeSecret_acheteur').disabled=true;

    /********************************
        INFO LIVRAISON ACHETEUR
    *********************************/
    document.getElementById('infoPerso_nom_acheteur').disabled=true;
    document.getElementById('infoPerso_prenom_acheteur').disabled=true;
    document.getElementById('infoPerso_telephone_acheteur').disabled=true;
    document.getElementById('infoPerso_mail_acheteur').disabled=true;
    document.getElementById('infoPerso_mdp_acheteur').disabled=true;
    document.getElementById('infoPerso_mdp2_acheteur').disabled=true;
    document.getElementById('infoPerso_adresse1_acheteur').disabled=true;
    document.getElementById('infoPerso_adresse2_acheteur').disabled=true;
    document.getElementById('infoPerso_pays_acheteur').disabled=true;
    document.getElementById('infoPerso_ville_acheteur').disabled=true;
    document.getElementById('infoPerso_codepostal_acheteur').disabled=true;

});

/********************************
    INFO PAIEMENT ACHETEUR
*********************************/
document.getElementById('submit_valider_infoPaiement_acheteur').addEventListener('click',infoPerso_paiement)
function infoPerso_paiement(event){
    // input
    let infoPerso_carte_payement_amex= document.getElementById('infoPerso_carte_payement_amex');
    let infoPerso_carte_payement_cb= document.getElementById('infoPerso_carte_payement_cb');
    let infoPerso_carte_payement_mastercard= document.getElementById('infoPerso_carte_payement_mastercard');
    let infoPerso_carte_payement_visa= document.getElementById('infoPerso_carte_payement_visa');
    let infoPerso_numeroCarte_acheteur= document.getElementById('infoPerso_numeroCarte_acheteur');
    let infoPerso_nomCarte_acheteur= document.getElementById('infoPerso_nomCarte_acheteur');
    let infoPerso_dateExpiration_acheteur= document.getElementById('infoPerso_dateExpiration_acheteur');
    let infoPerso_codeSecret_acheteur= document.getElementById('infoPerso_codeSecret_acheteur');

        // span
    let infoPerso_typeCarteErreur_acheteur= document.getElementById('infoPerso_typeCarteErreur_acheteur');
    let infoPerso_numeroCarteErreur_acheteur= document.getElementById('infoPerso_numeroCarteErreur_acheteur');
    let infoPerso_nomCarteErreur_acheteur= document.getElementById('infoPerso_nomCarteErreur_acheteur');
    let infoPerso_dateExpirationErreur_acheteur= document.getElementById('infoPerso_dateExpirationErreur_acheteur');
    let infoPerso_codeSecretErreur_acheteur= document.getElementById('infoPerso_codeSecretErreur_acheteur');

        // reset
    infoPerso_typeCarteErreur_acheteur.innerHTML="";
    infoPerso_numeroCarteErreur_acheteur.innerHTML="";
    infoPerso_nomCarteErreur_acheteur.innerHTML="";
    infoPerso_dateExpirationErreur_acheteur.innerHTML="";
    infoPerso_codeSecretErreur_acheteur.innerHTML="";

    var verif_infoPaiement_acheteur=true;

    // Choix carte verif
    if(infoPerso_carte_payement_amex.checked==false && infoPerso_carte_payement_cb.checked==false
    && infoPerso_carte_payement_mastercard.checked==false && infoPerso_carte_payement_visa.checked==false){
        infoPerso_typeCarteErreur_acheteur.innerHTML="Choisissez une carte";
        verif_infoPaiement_acheteur=false;
    }else{
        verif_infoPaiement_acheteur.innerHTML="";
    }

    // Numéro de carte verif
    if(infoPerso_numeroCarte_acheteur.value.trim()==""){
        infoPerso_numeroCarteErreur_acheteur.innerHTML="Compléter ce champs";
        verif_infoPaiement_acheteur=false;
    }else if(regex_chiffre.test(infoPerso_numeroCarte_acheteur.value)==false){
        infoPerso_numeroCarteErreur_acheteur.innerHTML = "Les lettres ne sont pas pris en compte";
        verif_infoPaiement_acheteur=false;
    }else if(infoPerso_numeroCarte_acheteur.value.length >= 20){
        infoPerso_numeroCarteErreur_acheteur.innerHTML = "Trop long";
        verif_infoPaiement_acheteur=false;
    }else if(infoPerso_numeroCarte_acheteur.value.length < 5){
        infoPerso_numeroCarteErreur_acheteur.innerHTML = "Trop court";
        verif_infoPaiement_acheteur=false;
    }else{
        infoPerso_numeroCarteErreur_acheteur.innerHTML = "";
    }

    // Nom de carte verif
    if(infoPerso_nomCarte_acheteur.value.trim()==""){
        infoPerso_nomCarteErreur_acheteur.innerHTML = "Compléter ce champs";
        verif_infoPaiement_acheteur=false;
    }else if(regex_lettre.test(infoPerso_nomCarte_acheteur.value)==false){
        infoPerso_nomCarteErreur_acheteur.innerHTML = "Les chiffres ne sont pas pris en compte";
        verif_infoPaiement_acheteur=false;
    }else if(infoPerso_nomCarte_acheteur.value.length >= 20){
        infoPerso_nomCarteErreur_acheteur.innerHTML = "Trop long";
        verif_infoPaiement_acheteur=false;
    }else{
        infoPerso_nomCarteErreur_acheteur.innerHTML = "";
    }

    // Date d'expiration verif
    if(infoPerso_dateExpiration_acheteur.value.trim()==""){
        infoPerso_dateExpirationErreur_acheteur.innerHTML = "Compléter ce champs";
        verif_infoPaiement_acheteur=false;
    }else{
        infoPerso_dateExpirationErreur_acheteur.innerHTML="";
    }

    // Code secret verif
    if(infoPerso_codeSecret_acheteur.value.trim()==""){
        infoPerso_codeSecretErreur_acheteur.innerHTML = "Compléter ce champs";
        verif_infoPaiement_acheteur=false;
    }else if(infoPerso_codeSecret_acheteur.value.length != 4){
        infoPerso_codeSecretErreur_acheteur.innerHTML = "N'existe pas";
        verif_infoPaiement_acheteur=false;
    }else if(regex_chiffre.test(infoPerso_codeSecret_acheteur.value)==false){
        infoPerso_codeSecretErreur_acheteur.innerHTML = "Les lettres ne sont pas pris en compte";
        verif_infoPaiement_acheteur=false;
    }else{
        infoPerso_codeSecretErreur_acheteur.innerHTML="";
    }

    if(verif_infoPaiement_acheteur == false){
        event.preventDefault();
    }
}

function modif_infoPerso_paiement(){
    document.getElementById('infoPerso_carte_payement_amex').disabled=false;
    document.getElementById('infoPerso_carte_payement_cb').disabled=false;
    document.getElementById('infoPerso_carte_payement_mastercard').disabled=false;
    document.getElementById('infoPerso_carte_payement_visa').disabled=false;
    document.getElementById('infoPerso_numeroCarte_acheteur').disabled=false;
    document.getElementById('infoPerso_nomCarte_acheteur').disabled=false;
    document.getElementById('infoPerso_dateExpiration_acheteur').disabled=false;
    document.getElementById('infoPerso_codeSecret_acheteur').disabled=false;
}

function annulModif_infoPerso_paiement(){
    document.getElementById('infoPerso_carte_payement_amex').disabled=true;
    document.getElementById('infoPerso_carte_payement_cb').disabled=true;
    document.getElementById('infoPerso_carte_payement_mastercard').disabled=true;
    document.getElementById('infoPerso_carte_payement_visa').disabled=true;
    document.getElementById('infoPerso_numeroCarte_acheteur').disabled=true;
    document.getElementById('infoPerso_nomCarte_acheteur').disabled=true;
    document.getElementById('infoPerso_dateExpiration_acheteur').disabled=true;
    document.getElementById('infoPerso_codeSecret_acheteur').disabled=true;
}

function reset_infoPerso_paiement(){
    $(".infoPaiement_contenu_details_acheteur").val("");

    infoPerso_typeCarteErreur_acheteur.innerHTML="";
    infoPerso_numeroCarteErreur_acheteur.innerHTML="";
    infoPerso_nomCarteErreur_acheteur.innerHTML="";
    infoPerso_dateExpirationErreur_acheteur.innerHTML="";
    infoPerso_codeSecretErreur_acheteur.innerHTML="";
}

/********************************
    INFO LIVRAISON ACHETEUR
*********************************/
document.getElementById('submit_valider_infoPersoL_acheteur').addEventListener('click',infoPerso_livraison)
function infoPerso_livraison(event){
        // input
    let infoPerso_nom_acheteur= document.getElementById('infoPerso_nom_acheteur');
    let infoPerso_prenom_acheteur= document.getElementById('infoPerso_prenom_acheteur');
    let infoPerso_telephone_acheteur= document.getElementById('infoPerso_telephone_acheteur');
    let infoPerso_mail_acheteur= document.getElementById('infoPerso_mail_acheteur');
    let infoPerso_mdp_acheteur= document.getElementById('infoPerso_mdp_acheteur');
    let infoPerso_mdp2_acheteur= document.getElementById('infoPerso_mdp2_acheteur');
    let infoPerso_adresse1_acheteur= document.getElementById('infoPerso_adresse1_acheteur');
    let infoPerso_adresse2_acheteur= document.getElementById('infoPerso_adresse2_acheteur');
    let infoPerso_pays_acheteur= document.getElementById('infoPerso_pays_acheteur');
    let infoPerso_ville_acheteur= document.getElementById('infoPerso_ville_acheteur');
    let infoPerso_codepostal_acheteur= document.getElementById('infoPerso_codepostal_acheteur');

        // span
    let infoPerso_nomErreur_acheteur= document.getElementById('infoPerso_nomErreur_acheteur');
    let infoPerso_prenomErreur_acheteur= document.getElementById('infoPerso_prenomErreur_acheteur');
    let infoPerso_telephoneErreur_acheteur= document.getElementById('infoPerso_telephoneErreur_acheteur');
    let infoPerso_mailErreur_acheteur= document.getElementById('infoPerso_mailErreur_acheteur');
    let infoPerso_mdpErreur_acheteur= document.getElementById('infoPerso_mdpErreur_acheteur');
    let infoPerso_mdp2Erreur_acheteur= document.getElementById('infoPerso_mdp2Erreur_acheteur');
    let infoPerso_adresse1Erreur_acheteur= document.getElementById('infoPerso_adresse1Erreur_acheteur');
    let infoPerso_adresse2Erreur_acheteur= document.getElementById('infoPerso_adresse2Erreur_acheteur');
    let infoPerso_paysErreur_acheteur= document.getElementById('infoPerso_paysErreur_acheteur');
    let infoPerso_villeErreur_acheteur= document.getElementById('infoPerso_villeErreur_acheteur');
    let infoPerso_codepostalErreur_acheteur= document.getElementById('infoPerso_codepostalErreur_acheteur');

    // reset
    infoPerso_nomErreur_acheteur.innerHTML="";
    infoPerso_prenomErreur_acheteur.innerHTML="";
    infoPerso_telephoneErreur_acheteur.innerHTML="";
    infoPerso_mailErreur_acheteur.innerHTML="";
    infoPerso_mdpErreur_acheteur.innerHTML="";
    infoPerso_mdp2Erreur_acheteur.innerHTML="";
    infoPerso_adresse1Erreur_acheteur.innerHTML="";
    infoPerso_adresse2Erreur_acheteur.innerHTML="";
    infoPerso_paysErreur_acheteur.innerHTML="";
    infoPerso_villeErreur_acheteur.innerHTML="";
    infoPerso_codepostalErreur_acheteur.innerHTML="";

    var verif_infoPersoL_acheteur=true;

    // nom verif
    if(infoPerso_nom_acheteur.value.trim()==""){
        infoPerso_nomErreur_acheteur.innerHTML = "Compléter ce champs";
        verification_inscription_acheteur=false;
    }else if(regex_lettre.test(infoPerso_nom_acheteur.value)==false){
        infoPerso_nomErreur_acheteur.innerHTML = "Les chiffres ne sont pas pris en compte";
        verification_inscription_acheteur=false;
    }else if(infoPerso_nom_acheteur.value.length >= 20){
        infoPerso_nomErreur_acheteur.innerHTML = "Trop long";
        verification_inscription_acheteur=false;
    }else{
        infoPerso_nomErreur_acheteur.innerHTML = "";
    }

    // prenom verif
    if(infoPerso_prenom_acheteur.value.trim()==""){
        infoPerso_prenomErreur_acheteur.innerHTML = "Compléter ce champs";
        verification_inscription_acheteur=false;
    }else if(regex_lettre.test(infoPerso_prenom_acheteur.value)==false){
        infoPerso_prenomErreur_acheteur.innerHTML = "Les chiffres ne sont pas pris en compte";
        verification_inscription_acheteur=false;
    }else if(infoPerso_prenom_acheteur.value.length >= 20){
        infoPerso_prenomErreur_acheteur.innerHTML = "Trop long";
        verification_inscription_acheteur=false;
    }else{
        infoPerso_prenomErreur_acheteur.innerHTML = "";
    }

    // Téléphone verif
    if(infoPerso_telephone_acheteur.value.trim()==""){
        infoPerso_telephoneErreur_acheteur.innerHTML = "Compléter ce champs";
        verification_inscription_acheteur=false;
    }else if(regex_chiffre.test(infoPerso_telephone_acheteur.value)==false){
        infoPerso_telephoneErreur_acheteur.innerHTML = "Les lettres ne sont pas pris en compte";
        verification_inscription_acheteur=false;
    }else if(infoPerso_telephone_acheteur.value.length >= 10){
        infoPerso_telephoneErreur_acheteur.innerHTML = "N'existe pas, trop long";
        verification_inscription_acheteur=false;
    }else{
        infoPerso_telephoneErreur_acheteur.innerHTML = "";
    }

    // mail verif
    if(infoPerso_mail_acheteur.value.trim()==""){
        infoPerso_mailErreur_acheteur.innerHTML = "Compléter ce champs";
        verification_inscription_acheteur=false;
    }else if(regex_mail.test(infoPerso_mail_acheteur.value)==false){
        infoPerso_mailErreur_acheteur.innerHTML = "Le mail n'est pas correct";
        verification_inscription_acheteur=false;
    }else if(infoPerso_mail_acheteur.value.length >= 25){
        infoPerso_mailErreur_acheteur.innerHTML = "Trop long";
        verification_inscription_acheteur=false;
    }else{
        infoPerso_mailErreur_acheteur.innerHTML = "";
    }

    // mdp verif
    if(infoPerso_mdp_acheteur.value.trim()==""){
        infoPerso_mdpErreur_acheteur.innerHTML = "Compléter ce champs";
        infoPerso_mdpErreur_acheteur.setAttribute("style","color:red");
        verification_inscription_acheteur=false;
    }else if(!/[a-z]/.test(infoPerso_mdp_acheteur.value)){
        infoPerso_mdpErreur_acheteur.innerHTML = "minuscule obligatoire";
        verification_inscription_acheteur=false;
        infoPerso_mdpErreur_acheteur.setAttribute("style","color:red");
    }else if(!/[A-Z]/.test(infoPerso_mdp_acheteur.value)){
        infoPerso_mdpErreur_acheteur.innerHTML = "majuscule obligatoire";
        verification_inscription_acheteur=false;
        infoPerso_mdpErreur_acheteur.setAttribute("style","color:red");
    }else if(!/[1-9]/.test(infoPerso_mdp_acheteur.value)){
        infoPerso_mdpErreur_acheteur.innerHTML = "chiffre obligatoire";
        verification_inscription_acheteur=false;
        infoPerso_mdpErreur_acheteur.setAttribute("style","color:red");
    }else if(/[1-9]/.test(infoPerso_mdp_acheteur.value) && regex_mdp.test(infoPerso_mdp_acheteur.value)==false){
        infoPerso_mdpErreur_acheteur.innerHTML = "Moyen";
        verification_inscription_acheteur=true;
        infoPerso_mdpErreur_acheteur.setAttribute("style","color:green");
    }else if(regex_mdp.test(infoPerso_mdp_acheteur.value)){
        infoPerso_mdpErreur_acheteur.innerHTML = "Fort";
        verification_inscription_acheteur=true;
        infoPerso_mdpErreur_acheteur.setAttribute("style","color:green");
    }else{
        infoPerso_mdpErreur_acheteur.innerHTML = "";
    }

    if(infoPerso_mdp2_acheteur.value.trim()==""){
        infoPerso_mdp2Erreur_acheteur.innerHTML = "Compléter ce champs";
        infoPerso_mdp2Erreur_acheteur.setAttribute("style","color:red");
        verification_inscription_acheteur=false;
    }else if(infoPerso_mdp_acheteur.value.trim() != infoPerso_mdp2_acheteur.value.trim()){
        infoPerso_mdp2Erreur_acheteur.innerHTML = "Mot de passe différent";
        infoPerso_mdp2Erreur_acheteur.setAttribute("style","color:red");
        verification_inscription_acheteur=false;
    }else if(infoPerso_mdp_acheteur.value.trim() == infoPerso_mdp2_acheteur.value.trim()){
        infoPerso_mdp2Erreur_acheteur.innerHTML = "Correct";
        infoPerso_mdp2Erreur_acheteur.setAttribute("style","color:green");
        verification_inscription_acheteur=true;
    }else if(regex_mdp.test(infoPerso_mdp_acheteur.value) != regex_mdp.test(infoPerso_mdp2_acheteur.value)){
        infoPerso_mdp2Erreur_acheteur.innerHTML = "Mot de passe pas sécurisé";
        infoPerso_mdp2Erreur_acheteur.setAttribute("style","color:red");
        verification_inscription_acheteur=false;
    }else if(/[1-9]/.test(infoPerso_mdp_acheteur.value) && regex_mdp.test(infoPerso_mdp_acheteur.value)==false != /[1-9]/.test(infoPerso_mdp2_acheteur.value) && regex_mdp.test(mdp2_acheteur.value)==false){
        infoPerso_mdp2Erreur_acheteur.innerHTML = "Mot de passe pas sécurisé";
        infoPerso_mdp2Erreur_acheteur.setAttribute("style","color:red");
        verification_inscription_acheteur=false;
    }else{
        infoPerso_mdp2Erreur_acheteur.innerHTML = "";
    }

    // adresse verif
    if(infoPerso_adresse1_acheteur.value.trim()==""){
        infoPerso_adresse1Erreur_acheteur.innerHTML = "Compléter ce champs";
        verification_inscription_acheteur=false;
    }else if(regex_mixte.test(infoPerso_adresse1_acheteur.value)==false){
        infoPerso_adresse1Erreur_acheteur.innerHTML = "Les caractères spéciaux ne sont pas pris en compte";
        verification_inscription_acheteur=false;
    }else if(infoPerso_adresse1_acheteur.value.length >= 50){
        infoPerso_adresse1Erreur_acheteur.innerHTML = "Trop long";
        verification_inscription_acheteur=false;
    }else{
        infoPerso_adresse1Erreur_acheteur.innerHTML = "";
    }

    if(infoPerso_adresse2_acheteur.value.trim()==""){
        infoPerso_adresse2Erreur_acheteur.innerHTML = "Compléter ce champs";
        verification_inscription_acheteur=false;
    }else if(regex_mixte.test(infoPerso_adresse2_acheteur.value)==false){
        infoPerso_adresse2Erreur_acheteur.innerHTML = "Les caractères spéciaux ne sont pas pris en compte";
        verification_inscription_acheteur=false;
    }else if(infoPerso_adresse2_acheteur.value.length >= 50){
        infoPerso_adresse2Erreur_acheteur.innerHTML = "Trop long";
        verification_inscription_acheteur=false;
    }else{
        infoPerso_adresse2Erreur_acheteur.innerHTML = "";
    }

    // Pays verif
    if(infoPerso_pays_acheteur.value.trim()==""){
        infoPerso_paysErreur_acheteur.innerHTML = "Compléter ce champs";
        verification_inscription_acheteur=false;
    }else if(regex_lettre.test(infoPerso_pays_acheteur.value)==false){
        infoPerso_paysErreur_acheteur.innerHTML = "Les chiffres ne sont pas pris en compte";
        verification_inscription_acheteur=false;
    }else if(infoPerso_pays_acheteur.value.length >= 15){
        infoPerso_paysErreur_acheteur.innerHTML = "Trop long";
        verification_inscription_acheteur=false;
    }else{
        infoPerso_paysErreur_acheteur.innerHTML = "";
    }

    // Ville verif
    if(infoPerso_ville_acheteur.value.trim()==""){
        infoPerso_villeErreur_acheteur.innerHTML = "Compléter ce champs";
        verification_inscription_acheteur=false;
    }else if(regex_lettre.test(infoPerso_ville_acheteur.value)==false){
        infoPerso_villeErreur_acheteur.innerHTML = "Les chiffres ne sont pas pris en compte";
        verification_inscription_acheteur=false;
    }else if(infoPerso_ville_acheteur.value.length >= 15){
        infoPerso_villeErreur_acheteur.innerHTML = "Trop long";
        verification_inscription_acheteur=false;
    }else{
        infoPerso_villeErreur_acheteur.innerHTML = "";
    }

    // Code Postal verif
    if(infoPerso_codepostal_acheteur.value.trim()==""){
        infoPerso_codepostalErreur_acheteur.innerHTML = "Compléter ce champs";
        verification_inscription_acheteur=false;
    }else if(regex_chiffre.test(infoPerso_codepostal_acheteur.value)==false){
        infoPerso_codepostalErreur_acheteur.innerHTML = "Les lettres ne sont pas pris en compte";
        verification_inscription_acheteur=false;
    }else if(infoPerso_codepostal_acheteur.value.length >= 5){
        infoPerso_codepostalErreur_acheteur.innerHTML = "N'existe pas, trop long";
        verification_inscription_acheteur=false;
    }else{
        infoPerso_codepostalErreur_acheteur.innerHTML = "";
    }

    if(verif_infoPersoL_acheteur == false){
        event.preventDefault();
    }
}

function modif_infoPersoL_paiement(){
    document.getElementById('infoPerso_nom_acheteur').disabled=false;
    document.getElementById('infoPerso_prenom_acheteur').disabled=false;
    document.getElementById('infoPerso_telephone_acheteur').disabled=false;
    document.getElementById('infoPerso_mail_acheteur').disabled=false;
    document.getElementById('infoPerso_mdp_acheteur').disabled=false;
    document.getElementById('infoPerso_mdp2_acheteur').disabled=false;
    document.getElementById('infoPerso_adresse1_acheteur').disabled=false;
    document.getElementById('infoPerso_adresse2_acheteur').disabled=false;
    document.getElementById('infoPerso_pays_acheteur').disabled=false;
    document.getElementById('infoPerso_ville_acheteur').disabled=false;
    document.getElementById('infoPerso_codepostal_acheteur').disabled=false;
}

function annulModif_infoPersoL_paiement(){
    document.getElementById('infoPerso_nom_acheteur').disabled=true;
    document.getElementById('infoPerso_prenom_acheteur').disabled=true;
    document.getElementById('infoPerso_telephone_acheteur').disabled=true;
    document.getElementById('infoPerso_mail_acheteur').disabled=true;
    document.getElementById('infoPerso_mdp_acheteur').disabled=true;
    document.getElementById('infoPerso_mdp2_acheteur').disabled=true;
    document.getElementById('infoPerso_adresse1_acheteur').disabled=true;
    document.getElementById('infoPerso_adresse2_acheteur').disabled=true;
    document.getElementById('infoPerso_pays_acheteur').disabled=true;
    document.getElementById('infoPerso_ville_acheteur').disabled=true;
    document.getElementById('infoPerso_codepostal_acheteur').disabled=true;
}

function reset_infoPersoL_paiement(){
    $(".infoPersoL_contenu_details_acheteur").val("");

    infoPerso_nomErreur_acheteur.innerHTML="";
    infoPerso_prenomErreur_acheteur.innerHTML="";
    infoPerso_telephoneErreur_acheteur.innerHTML="";
    infoPerso_mailErreur_acheteur.innerHTML="";
    infoPerso_mdpErreur_acheteur.innerHTML="";
    infoPerso_mdp2Erreur_acheteur.innerHTML="";
    infoPerso_adresse1Erreur_acheteur.innerHTML="";
    infoPerso_adresse2Erreur_acheteur.innerHTML="";
    infoPerso_paysErreur_acheteur.innerHTML="";
    infoPerso_villeErreur_acheteur.innerHTML="";
    infoPerso_codepostalErreur_acheteur.innerHTML="";
}
