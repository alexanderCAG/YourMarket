/********************************
            GENERAL
*********************************/
jQuery(document).ready(function(){
/********************************
            ADMIN
*********************************/
document.getElementById('infoPerso_nom_admin').disabled=true;
document.getElementById('infoPerso_prenom_admin').disabled=true;
document.getElementById('infoPerso_telephone_admin').disabled=true;
document.getElementById('infoPerso_mail_admin').disabled=true;
document.getElementById('infoPerso_mdp_admin').disabled=true;
document.getElementById('infoPerso_mdp2_admin').disabled=true;
document.getElementById('infoPerso_adresse1_admin').disabled=true;
document.getElementById('infoPerso_adresse2_admin').disabled=true;
document.getElementById('infoPerso_pays_admin').disabled=true;
document.getElementById('infoPerso_ville_admin').disabled=true;
document.getElementById('infoPerso_codepostal_admin').disabled=true;

});

/********************************
            ADMIN
*********************************/
document.getElementById('submit_valider_infoPerso_admin').addEventListener('click',infoPerso_admin)
function infoPerso_admin(event){
        // input
    let infoPerso_nom_admin= document.getElementById('infoPerso_nom_admin');
    let infoPerso_prenom_admin= document.getElementById('infoPerso_prenom_admin');
    let infoPerso_telephone_admin= document.getElementById('infoPerso_telephone_admin');
    let infoPerso_mail_admin= document.getElementById('infoPerso_mail_admin');
    let infoPerso_mdp_admin= document.getElementById('infoPerso_mdp_admin');
    let infoPerso_mdp2_admin= document.getElementById('infoPerso_mdp2_admin');
    let infoPerso_adresse1_admin= document.getElementById('infoPerso_adresse1_admin');
    let infoPerso_adresse2_admin= document.getElementById('infoPerso_adresse2_admin');
    let infoPerso_pays_admin= document.getElementById('infoPerso_pays_admin');
    let infoPerso_ville_admin= document.getElementById('infoPerso_ville_admin');
    let infoPerso_codepostal_admin= document.getElementById('infoPerso_codepostal_admin');

        // span
    let infoPerso_nomErreur_admin= document.getElementById('infoPerso_nomErreur_admin');
    let infoPerso_prenomErreur_admin= document.getElementById('infoPerso_prenomErreur_admin');
    let infoPerso_telephoneErreur_admin= document.getElementById('infoPerso_telephoneErreur_admin');
    let infoPerso_mailErreur_admin= document.getElementById('infoPerso_mailErreur_admin');
    let infoPerso_mdpErreur_admin= document.getElementById('infoPerso_mdpErreur_admin');
    let infoPerso_mdp2Erreur_admin= document.getElementById('infoPerso_mdp2Erreur_admin');
    let infoPerso_adresse1Erreur_admin= document.getElementById('infoPerso_adresse1Erreur_admin');
    let infoPerso_adresse2Erreur_admin= document.getElementById('infoPerso_adresse2Erreur_admin');
    let infoPerso_paysErreur_admin= document.getElementById('infoPerso_paysErreur_admin');
    let infoPerso_villeErreur_admin= document.getElementById('infoPerso_villeErreur_admin');
    let infoPerso_codepostalErreur_admin= document.getElementById('infoPerso_codepostalErreur_admin');

    // reset
    infoPerso_nomErreur_admin.innerHTML="";
    infoPerso_prenomErreur_admin.innerHTML="";
    infoPerso_telephoneErreur_admin.innerHTML="";
    infoPerso_mailErreur_admin.innerHTML="";
    infoPerso_mdpErreur_admin.innerHTML="";
    infoPerso_mdp2Erreur_admin.innerHTML="";
    infoPerso_adresse1Erreur_admin.innerHTML="";
    infoPerso_adresse2Erreur_admin.innerHTML="";
    infoPerso_paysErreur_admin.innerHTML="";
    infoPerso_villeErreur_admin.innerHTML="";
    infoPerso_codepostalErreur_admin.innerHTML="";

    var verif_infoPerso_admin=true;

    // nom verif
    if(infoPerso_nom_admin.value.trim()==""){
        infoPerso_nomErreur_admin.innerHTML = "Compléter ce champs";
        verif_infoPerso_admin=false;
    }else if(regex_lettre.test(infoPerso_nom_admin.value)==false){
        infoPerso_nomErreur_admin.innerHTML = "Les chiffres ne sont pas pris en compte";
        verif_infoPerso_admin=false;
    }else if(infoPerso_nom_admin.value.length >= 20){
        infoPerso_nomErreur_admin.innerHTML = "Trop long";
        verif_infoPerso_admin=false;
    }else{
        infoPerso_nomErreur_admin.innerHTML = "";
    }

    // prenom verif
    if(infoPerso_prenom_admin.value.trim()==""){
        infoPerso_prenomErreur_admin.innerHTML = "Compléter ce champs";
        verif_infoPerso_admin=false;
    }else if(regex_lettre.test(infoPerso_prenom_admin.value)==false){
        infoPerso_prenomErreur_admin.innerHTML = "Les chiffres ne sont pas pris en compte";
        verif_infoPerso_admin=false;
    }else if(infoPerso_prenom_admin.value.length >= 20){
        infoPerso_prenomErreur_admin.innerHTML = "Trop long";
        verif_infoPerso_admin=false;
    }else{
        infoPerso_prenomErreur_admin.innerHTML = "";
    }

    // Téléphone verif
    if(infoPerso_telephone_admin.value.trim()==""){
        infoPerso_telephoneErreur_admin.innerHTML = "Compléter ce champs";
        verif_infoPerso_admin=false;
    }else if(regex_chiffre.test(infoPerso_telephone_admin.value)==false){
        infoPerso_telephoneErreur_admin.innerHTML = "Les lettres ne sont pas pris en compte";
        verif_infoPerso_admin=false;
    }else if(infoPerso_telephone_admin.value.length >= 10){
        infoPerso_telephoneErreur_admin.innerHTML = "N'existe pas, trop long";
        verif_infoPerso_admin=false;
    }else{
        infoPerso_telephoneErreur_admin.innerHTML = "";
    }

    // mail verif
    if(infoPerso_mail_admin.value.trim()==""){
        infoPerso_mailErreur_admin.innerHTML = "Compléter ce champs";
        verif_infoPerso_admin=false;
    }else if(regex_mail.test(infoPerso_mail_admin.value)==false){
        infoPerso_mailErreur_admin.innerHTML = "Le mail n'est pas correct";
        verif_infoPerso_admin=false;
    }else if(infoPerso_mail_admin.value.length >= 25){
        infoPerso_mailErreur_admin.innerHTML = "Trop long";
        verif_infoPerso_admin=false;
    }else{
        infoPerso_mailErreur_admin.innerHTML = "";
    }

    // mdp verif
    if(infoPerso_mdp_admin.value.trim()==""){
        infoPerso_mdpErreur_admin.innerHTML = "Compléter ce champs";
        infoPerso_mdpErreur_admin.setAttribute("style","color:red");
        verif_infoPerso_admin=false;
    }else if(!/[a-z]/.test(infoPerso_mdp_admin.value)){
        infoPerso_mdpErreur_admin.innerHTML = "minuscule obligatoire";
        verif_infoPerso_admin=false;
        infoPerso_mdpErreur_admin.setAttribute("style","color:red");
    }else if(!/[A-Z]/.test(infoPerso_mdp_admin.value)){
        infoPerso_mdpErreur_admin.innerHTML = "majuscule obligatoire";
        verif_infoPerso_admin=false;
        infoPerso_mdpErreur_admin.setAttribute("style","color:red");
    }else if(!/[1-9]/.test(infoPerso_mdp_admin.value)){
        infoPerso_mdpErreur_admin.innerHTML = "chiffre obligatoire";
        verif_infoPerso_admin=false;
        infoPerso_mdpErreur_admin.setAttribute("style","color:red");
    }else if(/[1-9]/.test(infoPerso_mdp_admin.value) && regex_mdp.test(infoPerso_mdp_admin.value)==false){
        infoPerso_mdpErreur_admin.innerHTML = "Moyen";
        verif_infoPerso_admin=true;
        infoPerso_mdpErreur_admin.setAttribute("style","color:green");
    }else if(regex_mdp.test(infoPerso_mdp_admin.value)){
        infoPerso_mdpErreur_admin.innerHTML = "Fort";
        verif_infoPerso_admin=true;
        infoPerso_mdpErreur_admin.setAttribute("style","color:green");
    }else{
        infoPerso_mdpErreur_admin.innerHTML = "";
    }

    if(infoPerso_mdp2_admin.value.trim()==""){
        infoPerso_mdp2Erreur_admin.innerHTML = "Compléter ce champs";
        infoPerso_mdp2Erreur_admin.setAttribute("style","color:red");
        verif_infoPerso_admin=false;
    }else if(infoPerso_mdp_admin.value.trim() != infoPerso_mdp2_admin.value.trim()){
        infoPerso_mdp2Erreur_admin.innerHTML = "Mot de passe différent";
        infoPerso_mdp2Erreur_admin.setAttribute("style","color:red");
        verif_infoPerso_admin=false;
    }else if(infoPerso_mdp_admin.value.trim() == infoPerso_mdp2_admin.value.trim()){
        infoPerso_mdp2Erreur_admin.innerHTML = "Correct";
        infoPerso_mdp2Erreur_admin.setAttribute("style","color:green");
        verif_infoPerso_admin=true;
    }else if(regex_mdp.test(infoPerso_mdp_admin.value) != regex_mdp.test(infoPerso_mdp2_admin.value)){
        infoPerso_mdp2Erreur_admin.innerHTML = "Mot de passe pas sécurisé";
        infoPerso_mdp2Erreur_admin.setAttribute("style","color:red");
        verif_infoPerso_admin=false;
    }else if(/[1-9]/.test(infoPerso_mdp_admin.value) && regex_mdp.test(infoPerso_mdp_admin.value)==false != /[1-9]/.test(infoPerso_mdp2_admin.value) && regex_mdp.test(mdp2_admin.value)==false){
        infoPerso_mdp2Erreur_admin.innerHTML = "Mot de passe pas sécurisé";
        infoPerso_mdp2Erreur_admin.setAttribute("style","color:red");
        verif_infoPerso_admin=false;
    }else{
        infoPerso_mdp2Erreur_admin.innerHTML = "";
    }

    // adresse verif
    if(infoPerso_adresse1_admin.value.trim()==""){
        infoPerso_adresse1Erreur_admin.innerHTML = "Compléter ce champs";
        verif_infoPerso_admin=false;
    }else if(regex_tot.test(infoPerso_adresse1_admin.value)==false){
        infoPerso_adresse1Erreur_admin.innerHTML = "Les caractères spéciaux ne sont pas pris en compte";
        verif_infoPerso_admin=false;
    }else if(infoPerso_adresse1_admin.value.length >= 50){
        infoPerso_adresse1Erreur_admin.innerHTML = "Trop long";
        verif_infoPerso_admin=false;
    }else{
        infoPerso_adresse1Erreur_admin.innerHTML = "";
    }

    if(infoPerso_adresse2_admin.value.trim()==""){
        infoPerso_adresse2Erreur_admin.innerHTML = "Compléter ce champs";
        verif_infoPerso_admin=false;
    }else if(regex_tot.test(infoPerso_adresse2_admin.value)==false){
        infoPerso_adresse2Erreur_admin.innerHTML = "Les caractères spéciaux ne sont pas pris en compte";
        verif_infoPerso_admin=false;
    }else if(infoPerso_adresse2_admin.value.length >= 50){
        infoPerso_adresse2Erreur_admin.innerHTML = "Trop long";
        verif_infoPerso_admin=false;
    }else{
        infoPerso_adresse2Erreur_admin.innerHTML = "";
    }

    // Pays verif
    if(infoPerso_pays_admin.value.trim()==""){
        infoPerso_paysErreur_admin.innerHTML = "Compléter ce champs";
        verif_infoPerso_admin=false;
    }else if(regex_lettre.test(infoPerso_pays_admin.value)==false){
        infoPerso_paysErreur_admin.innerHTML = "Les chiffres ne sont pas pris en compte";
        verif_infoPerso_admin=false;
    }else if(infoPerso_pays_admin.value.length >= 15){
        infoPerso_paysErreur_admin.innerHTML = "Trop long";
        verif_infoPerso_admin=false;
    }else{
        infoPerso_paysErreur_admin.innerHTML = "";
    }

    // Ville verif
    if(infoPerso_ville_admin.value.trim()==""){
        infoPerso_villeErreur_admin.innerHTML = "Compléter ce champs";
        verif_infoPerso_admin=false;
    }else if(regex_lettre.test(infoPerso_ville_admin.value)==false){
        infoPerso_villeErreur_admin.innerHTML = "Les chiffres ne sont pas pris en compte";
        verif_infoPerso_admin=false;
    }else if(infoPerso_ville_admin.value.length >= 15){
        infoPerso_villeErreur_admin.innerHTML = "Trop long";
        verif_infoPerso_admin=false;
    }else{
        infoPerso_villeErreur_admin.innerHTML = "";
    }

    // Code Postal verif
    if(infoPerso_codepostal_admin.value.trim()==""){
        infoPerso_codepostalErreur_admin.innerHTML = "Compléter ce champs";
        verif_infoPerso_admin=false;
    }else if(regex_chiffre.test(infoPerso_codepostal_admin.value)==false){
        infoPerso_codepostalErreur_admin.innerHTML = "Les lettres ne sont pas pris en compte";
        verif_infoPerso_admin=false;
    }else if(infoPerso_codepostal_admin.value.length >= 5){
        infoPerso_codepostalErreur_admin.innerHTML = "N'existe pas, trop long";
        verif_infoPerso_admin=false;
    }else{
        infoPerso_codepostalErreur_admin.innerHTML = "";
    }

    if(verif_infoPerso_admin == false){
        event.preventDefault();
    }
}

function modif_infoPersoAdmin(){
    document.getElementById('infoPerso_nom_admin').disabled=false;
    document.getElementById('infoPerso_prenom_admin').disabled=false;
    document.getElementById('infoPerso_telephone_admin').disabled=false;
    document.getElementById('infoPerso_mail_admin').disabled=false;
    document.getElementById('infoPerso_mdp_admin').disabled=false;
    document.getElementById('infoPerso_mdp2_admin').disabled=false;
    document.getElementById('infoPerso_adresse1_admin').disabled=false;
    document.getElementById('infoPerso_adresse2_admin').disabled=false;
    document.getElementById('infoPerso_pays_admin').disabled=false;
    document.getElementById('infoPerso_ville_admin').disabled=false;
    document.getElementById('infoPerso_codepostal_admin').disabled=false;
}

function annulModif_infoPersoAdmin(){
    document.getElementById('infoPerso_nom_admin').disabled=true;
    document.getElementById('infoPerso_prenom_admin').disabled=true;
    document.getElementById('infoPerso_telephone_admin').disabled=true;
    document.getElementById('infoPerso_mail_admin').disabled=true;
    document.getElementById('infoPerso_mdp_admin').disabled=true;
    document.getElementById('infoPerso_mdp2_admin').disabled=true;
    document.getElementById('infoPerso_adresse1_admin').disabled=true;
    document.getElementById('infoPerso_adresse2_admin').disabled=true;
    document.getElementById('infoPerso_pays_admin').disabled=true;
    document.getElementById('infoPerso_ville_admin').disabled=true;
    document.getElementById('infoPerso_codepostal_admin').disabled=true;
}

function reset_infoPersoAdmin(){
    $(".infoPerso_contenu_details_admin").val("");

    infoPerso_nomErreur_admin.innerHTML="";
    infoPerso_prenomErreur_admin.innerHTML="";
    infoPerso_telephoneErreur_admin.innerHTML="";
    infoPerso_mailErreur_admin.innerHTML="";
    infoPerso_mdpErreur_admin.innerHTML="";
    infoPerso_mdp2Erreur_admin.innerHTML="";
    infoPerso_adresse1Erreur_admin.innerHTML="";
    infoPerso_adresse2Erreur_admin.innerHTML="";
    infoPerso_paysErreur_admin.innerHTML="";
    infoPerso_villeErreur_admin.innerHTML="";
    infoPerso_codepostalErreur_admin.innerHTML="";
}