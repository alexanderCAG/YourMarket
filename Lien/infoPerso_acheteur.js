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

    $("#submit_valider_infoPaiement_acheteur").hide();
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

        $("#submit_valider_infoPaiement_acheteur").show();
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

        $("#submit_valider_infoPaiement_acheteur").hide();
    }

    function reset_infoPerso_paiement(){
        $(".infoPaiement_contenu_details_acheteur").val("");

        infoPerso_typeCarteErreur_acheteur.innerHTML="";
        infoPerso_numeroCarteErreur_acheteur.innerHTML="";
        infoPerso_nomCarteErreur_acheteur.innerHTML="";
        infoPerso_dateExpirationErreur_acheteur.innerHTML="";
        infoPerso_codeSecretErreur_acheteur.innerHTML="";
    }