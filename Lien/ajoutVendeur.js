/********************************
            VENDEUR
*********************************/
document.getElementById('submit_Ajoutvendeur').addEventListener('click',ajoutvendeur)
function ajoutvendeur(event){
            // input
    let nomMarque_Ajoutvendeur= document.getElementById('nomMarque_Ajoutvendeur');
    let telephone_Ajoutvendeur= document.getElementById('telephone_Ajoutvendeur');
    let mail_Ajoutvendeur= document.getElementById('mail_Ajoutvendeur');
    let mdp_Ajoutvendeur= document.getElementById('mdp_Ajoutvendeur');
    let mdp2_Ajoutvendeur= document.getElementById('mdp2_Ajoutvendeur');
    let file_interrieur_inscription_img= document.getElementById('file_interrieur_inscription_img');

            // span
    let nomMarqueErreur_Ajoutvendeur= document.getElementById('nomMarqueErreur_Ajoutvendeur');
    let telephoneErreur_Ajoutvendeur= document.getElementById('telephoneErreur_Ajoutvendeur');
    let mailErreur_Ajoutvendeur= document.getElementById('mailErreur_Ajoutvendeur');
    let mdpErreur_Ajoutvendeur= document.getElementById('mdpErreur_Ajoutvendeur');
    let mdp2Erreur_Ajoutvendeur= document.getElementById('mdp2Erreur_Ajoutvendeur');
    let imageErreur_listeVendeur= document.getElementById('imageErreur_listeVendeur');

            // reset span
    nomMarqueErreur_Ajoutvendeur.innerHTML="";
    telephoneErreur_Ajoutvendeur.innerHTML="";
    mailErreur_Ajoutvendeur.innerHTML="";
    mdpErreur_Ajoutvendeur.innerHTML="";
    mdp2Erreur_Ajoutvendeur.innerHTML="";
    imageErreur_listeVendeur.innerHTML="";
    
    var verif_Ajoutvendeur=true;

    // image verif
    if(file_interrieur_inscription_img.value.length==""){
        imageErreur_listeVendeur.innerHTML = "Compléter ce champs";
        verif_Ajoutvendeur=false;
    }else{
        imageErreur_listeVendeur.innerHTML = "";
    }

    // nom marque verif
    if(nomMarque_Ajoutvendeur.value.trim()==""){
        nomMarqueErreur_Ajoutvendeur.innerHTML = "Compléter ce champs";
        verif_Ajoutvendeur=false;
    }else if(regex_mixte.test(nomMarque_Ajoutvendeur.value)==false){
        nomMarqueErreur_Ajoutvendeur.innerHTML = "Les caractères spéciaux ne sont pas pris en compte";
        verif_Ajoutvendeur=false;
    }else if(nomMarque_Ajoutvendeur.value.length >= 15){
        nomMarqueErreur_Ajoutvendeur.innerHTML = "Trop long";
        verif_Ajoutvendeur=false;
    }else{
        nomMarqueErreur_Ajoutvendeur.innerHTML = "";
    }

    // telephone verif
    if(telephone_Ajoutvendeur.value.trim()==""){
        telephoneErreur_Ajoutvendeur.innerHTML = "Compléter ce champs";
        verif_Ajoutvendeur=false;
    }else if(regex_chiffre.test(telephone_Ajoutvendeur.value)==false){
        telephoneErreur_Ajoutvendeur.innerHTML = "Les lettres ne sont pas pris en compte";
        verif_Ajoutvendeur=false;
    }else if(telephone_Ajoutvendeur.value.length >= 10){
        telephoneErreur_Ajoutvendeur.innerHTML = "N'existe pas, trop long";
        verif_Ajoutvendeur=false;
    }else{
        telephoneErreur_Ajoutvendeur.innerHTML = "";
    }

    // mdp verif
    if(mdp_Ajoutvendeur.value.trim()==""){
        mdpErreur_Ajoutvendeur.innerHTML = "Compléter ce champs";
        mdpErreur_Ajoutvendeur.setAttribute("style","color:red");
        verif_Ajoutvendeur=false;
    }else if(!/[a-z]/.test(mdp_Ajoutvendeur.value)){
        mdpErreur_Ajoutvendeur.innerHTML = "minuscule obligatoire";
        verif_Ajoutvendeur=false;
        mdpErreur_Ajoutvendeur.setAttribute("style","color:red");
    }else if(!/[A-Z]/.test(mdp_Ajoutvendeur.value)){
        mdpErreur_Ajoutvendeur.innerHTML = "majuscule obligatoire";
        verif_Ajoutvendeur=false;
        mdpErreur_Ajoutvendeur.setAttribute("style","color:red");
    }else if(!/[1-9]/.test(mdp_Ajoutvendeur.value)){
        mdpErreur_Ajoutvendeur.innerHTML = "chiffre obligatoire";
        verif_Ajoutvendeur=false;
        mdpErreur_Ajoutvendeur.setAttribute("style","color:red");
    }else if(/[1-9]/.test(mdp_Ajoutvendeur.value) && regex_mdp.test(mdp_Ajoutvendeur.value)==false){
        mdpErreur_Ajoutvendeur.innerHTML = "Moyen";
        // verif_Ajoutvendeur=true;
        mdpErreur_Ajoutvendeur.setAttribute("style","color:green");
    }else if(regex_mdp.test(mdp_Ajoutvendeur.value)){
        mdpErreur_Ajoutvendeur.innerHTML = "Fort";
        // verif_Ajoutvendeur=true;
        mdpErreur_Ajoutvendeur.setAttribute("style","color:green");
    }else{
        mdpErreur_Ajoutvendeur.innerHTML = "";
    }

    if(mdp2_Ajoutvendeur.value.trim()==""){
        mdp2Erreur_Ajoutvendeur.innerHTML = "Compléter ce champs";
        mdp2Erreur_Ajoutvendeur.setAttribute("style","color:red");
        verif_Ajoutvendeur=false;
    }else if(mdp_Ajoutvendeur.value.trim() != mdp2_Ajoutvendeur.value.trim()){
        mdp2Erreur_Ajoutvendeur.innerHTML = "Mot de passe différent";
        mdp2Erreur_Ajoutvendeur.setAttribute("style","color:red");
        verif_Ajoutvendeur=false;
    }else if(mdp_Ajoutvendeur.value.trim() == mdp2_Ajoutvendeur.value.trim()){
        mdp2Erreur_Ajoutvendeur.innerHTML = "Correct";
        mdp2Erreur_Ajoutvendeur.setAttribute("style","color:green");
        // verif_Ajoutvendeur=true;
    }else if(regex_mdp.test(mdp_Ajoutvendeur.value) != regex_mdp.test(mdp2_Ajoutvendeur.value)){
        mdp2Erreur_Ajoutvendeur.innerHTML = "Mot de passe pas sécurisé";
        mdp2Erreur_Ajoutvendeur.setAttribute("style","color:red");
        verif_Ajoutvendeur=false;
    }else if(/[1-9]/.test(mdp_Ajoutvendeur.value) && regex_mdp.test(mdp_Ajoutvendeur.value)==false != /[1-9]/.test(mdp2_Ajoutvendeur.value) && regex_mdp.test(mdp2_Ajoutvendeur.value)==false){
        mdp2Erreur_Ajoutvendeur.innerHTML = "Mot de passe pas sécurisé";
        mdp2Erreur_Ajoutvendeur.setAttribute("style","color:red");
        verif_Ajoutvendeur=false;
    }else{
        mdp2Erreur_Ajoutvendeur.innerHTML = "";
    }

    // mail verif
    if(mail_Ajoutvendeur.value.trim()==""){
        mailErreur_Ajoutvendeur.innerHTML = "Compléter ce champs";
        verif_Ajoutvendeur=false;
    }else if(regex_mail.test(mail_Ajoutvendeur.value)==false){
        mailErreur_Ajoutvendeur.innerHTML = "Le mail n'est pas correct";
        verif_Ajoutvendeur=false;
    }else if(mail_Ajoutvendeur.value.length >= 25){
        mailErreur_Ajoutvendeur.innerHTML = "Trop long";
        verif_Ajoutvendeur=false;
    }else{
        mailErreur_Ajoutvendeur.innerHTML = "";
    }

    if(verif_Ajoutvendeur == false){
        event.preventDefault();
    }
    
}

function reset_Ajoutvendeur(){
    $(".contenu_details_Ajoutvendeur").val("");

    nomMarqueErreur_Ajoutvendeur.innerHTML="";
    telephoneErreur_Ajoutvendeur.innerHTML="";
    mailErreur_Ajoutvendeur.innerHTML="";
    mdpErreur_Ajoutvendeur.innerHTML="";
    mdp2Erreur_Ajoutvendeur.innerHTML="";
    imageErreur_listeVendeur.innerHTML="";
}