/********************************
            GENERAL
*********************************/
jQuery(document).ready(function(){
/********************************
            VENDEUR
*********************************/
document.getElementById('infoPerso_nomMarque_vendeur').disabled=true;
document.getElementById('infoPerso_telephone_vendeur').disabled=true;
document.getElementById('infoPerso_mail_vendeur').disabled=true;
document.getElementById('infoPerso_mdp_vendeur').disabled=true;
document.getElementById('infoPerso_mdp2_vendeur').disabled=true;

$("#btn_Browse").hide();
$("#submit_valider_infoPerso_vendeur").hide();

});

document.getElementById('submit_valider_infoPerso_vendeur').addEventListener('click',infoPerso_vendeur)
function infoPerso_vendeur(event){
            // input
    let infoPerso_nomMarque_vendeur= document.getElementById('infoPerso_nomMarque_vendeur');
    let infoPerso_telephone_vendeur= document.getElementById('infoPerso_telephone_vendeur');
    let infoPerso_mail_vendeur= document.getElementById('infoPerso_mail_vendeur');
    let infoPerso_mdp_vendeur= document.getElementById('infoPerso_mdp_vendeur');
    let infoPerso_mdp2_vendeur= document.getElementById('infoPerso_mdp2_vendeur');
    let file_interrieur_inscription_img= document.getElementById('file_interrieur_inscription_img');

            // span
    let infoPerso_nomMarqueErreur_vendeur= document.getElementById('infoPerso_nomMarqueErreur_vendeur');
    let infoPerso_telephoneErreur_vendeur= document.getElementById('infoPerso_telephoneErreur_vendeur');
    let infoPerso_mailErreur_vendeur= document.getElementById('infoPerso_mailErreur_vendeur');
    let infoPerso_mdpErreur_vendeur= document.getElementById('infoPerso_mdpErreur_vendeur');
    let infoPerso_mdp2Erreur_vendeur= document.getElementById('infoPerso_mdp2Erreur_vendeur');
    let imageErreur_infoPersovendeur= document.getElementById('imageErreur_infoPersovendeur');

            // reset span
    infoPerso_nomMarqueErreur_vendeur.innerHTML="";
    infoPerso_telephoneErreur_vendeur.innerHTML="";
    infoPerso_mailErreur_vendeur.innerHTML="";
    infoPerso_mdpErreur_vendeur.innerHTML="";
    infoPerso_mdp2Erreur_vendeur.innerHTML="";
    imageErreur_infoPersovendeur.innerHTML="";
    
    var verif_infoPerso_vendeur=true;

    // image verif
    if(file_interrieur_inscription_img.value.length==""){
        imageErreur_infoPersovendeur.innerHTML = "Compléter ce champs";
        verif_infoPerso_vendeur=false;
    }else{
        imageErreur_infoPersovendeur.innerHTML = "";
    }

    // nom marque verif
    if(infoPerso_nomMarque_vendeur.value.trim()==""){
        infoPerso_nomMarqueErreur_vendeur.innerHTML = "Compléter ce champs";
        verif_infoPerso_vendeur=false;
    }else if(regex_mixte.test(infoPerso_nomMarque_vendeur.value)==false){
        infoPerso_nomMarqueErreur_vendeur.innerHTML = "Les caractères spéciaux ne sont pas pris en compte";
        verif_infoPerso_vendeur=false;
    }else if(infoPerso_nomMarque_vendeur.value.length >= 15){
        infoPerso_nomMarqueErreur_vendeur.innerHTML = "Trop long";
        verif_infoPerso_vendeur=false;
    }else{
        infoPerso_nomMarqueErreur_vendeur.innerHTML = "";
    }

    // telephone verif
    if(infoPerso_telephone_vendeur.value.trim()==""){
        infoPerso_telephoneErreur_vendeur.innerHTML = "Compléter ce champs";
        verif_infoPerso_vendeur=false;
    }else if(regex_chiffre.test(infoPerso_telephone_vendeur.value)==false){
        infoPerso_telephoneErreur_vendeur.innerHTML = "Les lettres ne sont pas pris en compte";
        verif_infoPerso_vendeur=false;
    }else if(infoPerso_telephone_vendeur.value.length >= 10){
        infoPerso_telephoneErreur_vendeur.innerHTML = "N'existe pas, trop long";
        verif_infoPerso_vendeur=false;
    }else{
        infoPerso_telephoneErreur_vendeur.innerHTML = "";
    }

    // mdp verif
    if(infoPerso_mdp_vendeur.value.trim()==""){
        infoPerso_mdpErreur_vendeur.innerHTML = "Compléter ce champs";
        infoPerso_mdpErreur_vendeur.setAttribute("style","color:red");
        verif_infoPerso_vendeur=false;
    }else if(!/[a-z]/.test(infoPerso_mdp_vendeur.value)){
        infoPerso_mdpErreur_vendeur.innerHTML = "minuscule obligatoire";
        verif_infoPerso_vendeur=false;
        infoPerso_mdpErreur_vendeur.setAttribute("style","color:red");
    }else if(!/[A-Z]/.test(infoPerso_mdp_vendeur.value)){
        infoPerso_mdpErreur_vendeur.innerHTML = "majuscule obligatoire";
        verif_infoPerso_vendeur=false;
        infoPerso_mdpErreur_vendeur.setAttribute("style","color:red");
    }else if(!/[1-9]/.test(infoPerso_mdp_vendeur.value)){
        infoPerso_mdpErreur_vendeur.innerHTML = "chiffre obligatoire";
        verif_infoPerso_vendeur=false;
        infoPerso_mdpErreur_vendeur.setAttribute("style","color:red");
    }else if(/[1-9]/.test(infoPerso_mdp_vendeur.value) && regex_mdp.test(infoPerso_mdp_vendeur.value)==false){
        infoPerso_mdpErreur_vendeur.innerHTML = "Moyen";
        // verif_infoPerso_vendeur=true;
        infoPerso_mdpErreur_vendeur.setAttribute("style","color:green");
    }else if(regex_mdp.test(infoPerso_mdp_vendeur.value)){
        infoPerso_mdpErreur_vendeur.innerHTML = "Fort";
        // verif_infoPerso_vendeur=true;
        infoPerso_mdpErreur_vendeur.setAttribute("style","color:green");
    }else{
        infoPerso_mdpErreur_vendeur.innerHTML = "";
    }

    if(infoPerso_mdp2_vendeur.value.trim()==""){
        infoPerso_mdp2Erreur_vendeur.innerHTML = "Compléter ce champs";
        infoPerso_mdp2Erreur_vendeur.setAttribute("style","color:red");
        verif_infoPerso_vendeur=false;
    }else if(infoPerso_mdp_vendeur.value.trim() != infoPerso_mdp2_vendeur.value.trim()){
        infoPerso_mdp2Erreur_vendeur.innerHTML = "Mot de passe différent";
        infoPerso_mdp2Erreur_vendeur.setAttribute("style","color:red");
        verif_infoPerso_vendeur=false;
    }else if(infoPerso_mdp_vendeur.value.trim() == infoPerso_mdp2_vendeur.value.trim()){
        infoPerso_mdp2Erreur_vendeur.innerHTML = "Correct";
        infoPerso_mdp2Erreur_vendeur.setAttribute("style","color:green");
        // verif_infoPerso_vendeur=true;
    }else if(regex_mdp.test(infoPerso_mdp_vendeur.value) != regex_mdp.test(infoPerso_mdp2_vendeur.value)){
        infoPerso_mdp2Erreur_vendeur.innerHTML = "Mot de passe pas sécurisé";
        infoPerso_mdp2Erreur_vendeur.setAttribute("style","color:red");
        verif_infoPerso_vendeur=false;
    }else if(/[1-9]/.test(infoPerso_mdp_vendeur.value) && regex_mdp.test(infoPerso_mdp_vendeur.value)==false != /[1-9]/.test(infoPerso_mdp2_vendeur.value) && regex_mdp.test(infoPerso_mdp2_vendeur.value)==false){
        infoPerso_mdp2Erreur_vendeur.innerHTML = "Mot de passe pas sécurisé";
        infoPerso_mdp2Erreur_vendeur.setAttribute("style","color:red");
        verif_infoPerso_vendeur=false;
    }else{
        infoPerso_mdp2Erreur_vendeur.innerHTML = "";
    }

    // mail verif
    if(infoPerso_mail_vendeur.value.trim()==""){
        infoPerso_mailErreur_vendeur.innerHTML = "Compléter ce champs";
        verif_infoPerso_vendeur=false;
    }else if(regex_mail.test(infoPerso_mail_vendeur.value)==false){
        infoPerso_mailErreur_vendeur.innerHTML = "Le mail n'est pas correct";
        verif_infoPerso_vendeur=false;
    }else if(infoPerso_mail_vendeur.value.length >= 25){
        infoPerso_mailErreur_vendeur.innerHTML = "Trop long";
        verif_infoPerso_vendeur=false;
    }else{
        infoPerso_mailErreur_vendeur.innerHTML = "";
    }

    if(verif_infoPerso_vendeur == false){
        event.preventDefault();
    }
    
}

function modif_infoPersoVendeur(){
    document.getElementById('infoPerso_nomMarque_vendeur').disabled=false;
    document.getElementById('infoPerso_telephone_vendeur').disabled=false;
    document.getElementById('infoPerso_mail_vendeur').disabled=false;
    document.getElementById('infoPerso_mdp_vendeur').disabled=false;
    document.getElementById('infoPerso_mdp2_vendeur').disabled=false;

    $("#submit_valider_infoPerso_vendeur").show();
    $("#btn_Browse").show();
}

function annulModif_infoPersoVendeur(){
    document.getElementById('infoPerso_nomMarque_vendeur').disabled=true;
    document.getElementById('infoPerso_telephone_vendeur').disabled=true;
    document.getElementById('infoPerso_mail_vendeur').disabled=true;
    document.getElementById('infoPerso_mdp_vendeur').disabled=true;
    document.getElementById('infoPerso_mdp2_vendeur').disabled=true;

    $("#submit_valider_infoPerso_vendeur").hide();
    $("#btn_Browse").hide();
}

function reset_infoPersoVendeur(){
    $(".infoPerso_contenu_details_vendeur").val("");

    infoPerso_nomMarqueErreur_vendeur.innerHTML="";
    infoPerso_telephoneErreur_vendeur.innerHTML="";
    infoPerso_mailErreur_vendeur.innerHTML="";
    infoPerso_mdpErreur_vendeur.innerHTML="";
    infoPerso_mdp2Erreur_vendeur.innerHTML="";
    imageErreur_infoPersovendeur.innerHTML="";
}
