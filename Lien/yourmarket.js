
/********************************
            AIDE
*********************************/
// redirection de page
// window.location.href = 'index.php';

/********************************
            GENERAL
*********************************/

jQuery(document).ready(function(){

    /********************************
            ENCHERE-DECOMPTE
    *********************************/
    decompteur();
    
    /********************************
            Accueil-Texte-Panier
    *********************************/
    $('.div_deco').arctext({
        radius: 100
    });

    /********************************
            INSCRIPTION
    *********************************/

        /********************************
                HIDE UNE DIV DEBUT
        *********************************/
        $(".inscription_contenu_vendeur").hide();
        $(".btn_inscription_titre_premier").css("color","#FFF");

        /********************************
            CONDITION GENERAL ACCEPTER
        *********************************/
        document.getElementById('check_condition_inscription_acheteur').checked=true;
        document.getElementById('check_condition_inscription_vendeur').checked=true;
        document.getElementById('check_condition_inscription_acheteur').disabled=true;
        document.getElementById('check_condition_inscription_vendeur').disabled=true;
});

/********************************
            INSCRIPTION
*********************************/

        /********************************
                AFFICHAGE UN PAR UN
        *********************************/
        $("#inscription_titre_premier button").click(function(){
            $(".inscription_contenu_acheteur").show();
            $(".btn_inscription_titre_deuxieme").css("color","#8795a3");
            $(".btn_inscription_titre_premier").css("color","#FFF");    
            $(".inscription_contenu_vendeur").hide();
        });

        $("#inscription_titre_deuxieme button").click(function(){
            $(".inscription_contenu_vendeur").show();
            $(".btn_inscription_titre_premier").css("color","#8795a3");
            $(".btn_inscription_titre_deuxieme").css("color","#FFF");
            $(".inscription_contenu_acheteur").hide();
        });

        /********************************
                    BTN RESET
        *********************************/
        function reset_acheteur(){
            $(".inscription_contenu_details_acheteur").val("");
            nomErreur_acheteur.innerHTML="";
            prenomErreur_acheteur.innerHTML="";
            telephoneErreur_acheteur.innerHTML="";
            mailErreur_acheteur.innerHTML="";
            mdpErreur_acheteur.innerHTML="";
            mdp2Erreur_acheteur.innerHTML="";
            adresse1Erreur_acheteur.innerHTML="";
            adresse2Erreur_acheteur.innerHTML="";
            paysErreur_acheteur.innerHTML="";
            villeErreur_acheteur.innerHTML="";
            codepostalErreur_acheteur.innerHTML="";
        }

        function reset_vendeur(){
            $(".inscription_contenu_details_vendeur").val("");
            nomMarqueErreur_vendeur.innerHTML="";
            telephoneErreur_vendeur.innerHTML="";
            mailErreur_vendeur.innerHTML="";
            mdpErreur_vendeur.innerHTML="";
            mdp2Erreur_vendeur.innerHTML="";
        }

        /********************************
                VERIF INSCRIPTION
        *********************************/
        var regex_lettre = /^[a-zA-Z]+$/;
        var regex_chiffre = /^[0-9]+$/;
        var regex_mixte = /^[a-zA-Z0-9]+$/;
        var regex_mail = /^([a-zA-Z0-9])+\@(([a-z-])+\.)+([a-z]{2,3})+$/;
        var regex_mdp = /[\s@&\.-]/;

        document.getElementById('submit_inscription_acheteur').addEventListener('click',inscription_acheteur)
        function inscription_acheteur(event){
                    // input
            let nom_acheteur= document.getElementById('nom_acheteur');
            let prenom_acheteur= document.getElementById('prenom_acheteur');
            let telephone_acheteur= document.getElementById('telephone_acheteur');
            let mail_acheteur= document.getElementById('mail_acheteur');
            let mdp_acheteur= document.getElementById('mdp_acheteur');
            let mdp2_acheteur= document.getElementById('mdp2_acheteur');
            let adresse1_acheteur= document.getElementById('adresse1_acheteur');
            let adresse2_acheteur= document.getElementById('adresse2_acheteur');
            let pays_acheteur= document.getElementById('pays_acheteur');
            let ville_acheteur= document.getElementById('ville_acheteur');
            let codepostal_acheteur= document.getElementById('codepostal_acheteur');

                    // span
            let nomErreur_acheteur= document.getElementById('nomErreur_acheteur');
            let prenomErreur_acheteur= document.getElementById('prenomErreur_acheteur');
            let telephoneErreur_acheteur= document.getElementById('telephoneErreur_acheteur');
            let mailErreur_acheteur= document.getElementById('mailErreur_acheteur');
            let mdpErreur_acheteur= document.getElementById('mdpErreur_acheteur');
            let mdp2Erreur_acheteur= document.getElementById('mdp2Erreur_acheteur');
            let adresse1Erreur_acheteur= document.getElementById('adresse1Erreur_acheteur');
            let adresse2Erreur_acheteur= document.getElementById('adresse2Erreur_acheteur');
            let paysErreur_acheteur= document.getElementById('paysErreur_acheteur');
            let villeErreur_acheteur= document.getElementById('villeErreur_acheteur');
            let codepostalErreur_acheteur= document.getElementById('codepostalErreur_acheteur');

                    // reset span
            nomErreur_acheteur.innerHTML="";
            prenomErreur_acheteur.innerHTML="";
            telephoneErreur_acheteur.innerHTML="";
            mailErreur_acheteur.innerHTML="";
            mdpErreur_acheteur.innerHTML="";
            mdp2Erreur_acheteur.innerHTML="";
            adresse1Erreur_acheteur.innerHTML="";
            adresse2Erreur_acheteur.innerHTML="";
            paysErreur_acheteur.innerHTML="";
            villeErreur_acheteur.innerHTML="";
            codepostalErreur_acheteur.innerHTML="";

            var verification_inscription_acheteur=true;

            // nom verif
            if(nom_acheteur.value.trim()==""){
                nomErreur_acheteur.innerHTML = "Compléter ce champs";
                verification_inscription_acheteur=false;
            }else if(regex_lettre.test(nom_acheteur.value)==false){
                nomErreur_acheteur.innerHTML = "Les chiffres ne sont pas pris en compte";
                verification_inscription_acheteur=false;
            }else if(nom_acheteur.value.length >= 20){
                nomErreur_acheteur.innerHTML = "Trop long";
                verification_inscription_acheteur=false;
            }else{
                nomErreur_acheteur.innerHTML = "";
            }

            // prenom verif
            if(prenom_acheteur.value.trim()==""){
                prenomErreur_acheteur.innerHTML = "Compléter ce champs";
                verification_inscription_acheteur=false;
            }else if(regex_lettre.test(prenom_acheteur.value)==false){
                prenomErreur_acheteur.innerHTML = "Les chiffres ne sont pas pris en compte";
                verification_inscription_acheteur=false;
            }else if(prenom_acheteur.value.length >= 20){
                prenomErreur_acheteur.innerHTML = "Trop long";
                verification_inscription_acheteur=false;
            }else{
                prenomErreur_acheteur.innerHTML = "";
            }

            // Téléphone verif
            if(telephone_acheteur.value.trim()==""){
                telephoneErreur_acheteur.innerHTML = "Compléter ce champs";
                verification_inscription_acheteur=false;
            }else if(regex_chiffre.test(telephone_acheteur.value)==false){
                telephoneErreur_acheteur.innerHTML = "Les lettres ne sont pas pris en compte";
                verification_inscription_acheteur=false;
            }else if(telephone_acheteur.value.length >= 10){
                telephoneErreur_acheteur.innerHTML = "N'existe pas, trop long";
                verification_inscription_acheteur=false;
            }else{
                telephoneErreur_acheteur.innerHTML = "";
            }

            // mail verif
            if(mail_acheteur.value.trim()==""){
                mailErreur_acheteur.innerHTML = "Compléter ce champs";
                verification_inscription_acheteur=false;
            }else if(regex_mail.test(mail_acheteur.value)==false){
                mailErreur_acheteur.innerHTML = "Le mail n'est pas correct";
                verification_inscription_acheteur=false;
            }else if(mail_acheteur.value.length >= 25){
                mailErreur_acheteur.innerHTML = "Trop long";
                verification_inscription_acheteur=false;
            }else{
                mailErreur_acheteur.innerHTML = "";
            }

            // mdp verif
            if(mdp_acheteur.value.trim()==""){
                mdpErreur_acheteur.innerHTML = "Compléter ce champs";
                mdpErreur_acheteur.setAttribute("style","color:red");
                verification_inscription_acheteur=false;
            }else if(!/[a-z]/.test(mdp_acheteur.value)){
                mdpErreur_acheteur.innerHTML = "minuscule obligatoire";
                verification_inscription_acheteur=false;
                mdpErreur_acheteur.setAttribute("style","color:red");
            }else if(!/[A-Z]/.test(mdp_acheteur.value)){
                mdpErreur_acheteur.innerHTML = "majuscule obligatoire";
                verification_inscription_acheteur=false;
                mdpErreur_acheteur.setAttribute("style","color:red");
            }else if(!/[1-9]/.test(mdp_acheteur.value)){
                mdpErreur_acheteur.innerHTML = "chiffre obligatoire";
                verification_inscription_acheteur=false;
                mdpErreur_acheteur.setAttribute("style","color:red");
            }else if(/[1-9]/.test(mdp_acheteur.value) && regex_mdp.test(mdp_acheteur.value)==false){
                mdpErreur_acheteur.innerHTML = "Moyen";
                verification_inscription_acheteur=true;
                mdpErreur_acheteur.setAttribute("style","color:green");
            }else if(regex_mdp.test(mdp_acheteur.value)){
                mdpErreur_acheteur.innerHTML = "Fort";
                verification_inscription_acheteur=true;
                mdpErreur_acheteur.setAttribute("style","color:green");
            }else{
                mdpErreur_acheteur.innerHTML = "";
            }

            if(mdp2_acheteur.value.trim()==""){
                mdp2Erreur_acheteur.innerHTML = "Compléter ce champs";
                mdp2Erreur_acheteur.setAttribute("style","color:red");
                verification_inscription_acheteur=false;
            }else if(mdp_acheteur.value.trim() != mdp2_acheteur.value.trim()){
                mdp2Erreur_acheteur.innerHTML = "Mot de passe différent";
                mdp2Erreur_acheteur.setAttribute("style","color:red");
                verification_inscription_acheteur=false;
            }else if(mdp_acheteur.value.trim() == mdp2_acheteur.value.trim()){
                mdp2Erreur_acheteur.innerHTML = "Correct";
                mdp2Erreur_acheteur.setAttribute("style","color:green");
                verification_inscription_acheteur=true;
            }else if(regex_mdp.test(mdp_acheteur.value) != regex_mdp.test(mdp2_acheteur.value)){
                mdp2Erreur_acheteur.innerHTML = "Mot de passe pas sécurisé";
                mdp2Erreur_acheteur.setAttribute("style","color:red");
                verification_inscription_acheteur=false;
            }else if(/[1-9]/.test(mdp_acheteur.value) && regex_mdp.test(mdp_acheteur.value)==false != /[1-9]/.test(mdp2_acheteur.value) && regex_mdp.test(mdp2_acheteur.value)==false){
                mdp2Erreur_acheteur.innerHTML = "Mot de passe pas sécurisé";
                mdp2Erreur_acheteur.setAttribute("style","color:red");
                verification_inscription_acheteur=false;
            }else{
                mdp2Erreur_acheteur.innerHTML = "";
            }

            // adresse verif
            if(adresse1_acheteur.value.trim()==""){
                adresse1Erreur_acheteur.innerHTML = "Compléter ce champs";
                verification_inscription_acheteur=false;
            }else if(regex_mixte.test(adresse1_acheteur.value)==false){
                adresse1Erreur_acheteur.innerHTML = "Les caractères spéciaux ne sont pas pris en compte";
                verification_inscription_acheteur=false;
            }else if(adresse1_acheteur.value.length >= 50){
                adresse1Erreur_acheteur.innerHTML = "Trop long";
                verification_inscription_acheteur=false;
            }else{
                adresse1Erreur_acheteur.innerHTML = "";
            }

            if(adresse2_acheteur.value.trim()==""){
                adresse2Erreur_acheteur.innerHTML = "Compléter ce champs";
                verification_inscription_acheteur=false;
            }else if(regex_mixte.test(adresse2_acheteur.value)==false){
                adresse2Erreur_acheteur.innerHTML = "Les caractères spéciaux ne sont pas pris en compte";
                verification_inscription_acheteur=false;
            }else if(adresse2_acheteur.value.length >= 50){
                adresse2Erreur_acheteur.innerHTML = "Trop long";
                verification_inscription_acheteur=false;
            }else{
                adresse2Erreur_acheteur.innerHTML = "";
            }

            // Pays verif
            if(pays_acheteur.value.trim()==""){
                paysErreur_acheteur.innerHTML = "Compléter ce champs";
                verification_inscription_acheteur=false;
            }else if(regex_lettre.test(pays_acheteur.value)==false){
                paysErreur_acheteur.innerHTML = "Les chiffres ne sont pas pris en compte";
                verification_inscription_acheteur=false;
            }else if(pays_acheteur.value.length >= 15){
                paysErreur_acheteur.innerHTML = "Trop long";
                verification_inscription_acheteur=false;
            }else{
                paysErreur_acheteur.innerHTML = "";
            }

            // Ville verif
            if(ville_acheteur.value.trim()==""){
                villeErreur_acheteur.innerHTML = "Compléter ce champs";
                verification_inscription_acheteur=false;
            }else if(regex_lettre.test(ville_acheteur.value)==false){
                villeErreur_acheteur.innerHTML = "Les chiffres ne sont pas pris en compte";
                verification_inscription_acheteur=false;
            }else if(ville_acheteur.value.length >= 15){
                villeErreur_acheteur.innerHTML = "Trop long";
                verification_inscription_acheteur=false;
            }else{
                villeErreur_acheteur.innerHTML = "";
            }

            // Code Postal verif
            if(codepostal_acheteur.value.trim()==""){
                codepostalErreur_acheteur.innerHTML = "Compléter ce champs";
                verification_inscription_acheteur=false;
            }else if(regex_chiffre.test(codepostal_acheteur.value)==false){
                codepostalErreur_acheteur.innerHTML = "Les lettres ne sont pas pris en compte";
                verification_inscription_acheteur=false;
            }else if(codepostal_acheteur.value.length >= 5){
                codepostalErreur_acheteur.innerHTML = "N'existe pas, trop long";
                verification_inscription_acheteur=false;
            }else{
                codepostalErreur_acheteur.innerHTML = "";
            }

            if(verification_inscription_acheteur == false){
                event.preventDefault();
            }

        }

        document.getElementById('submit_inscription_vendeur').addEventListener('click',inscription_vendeur)
        function inscription_vendeur(event){
                    // input
            let nomMarque_vendeur= document.getElementById('nomMarque_vendeur');
            let telephone_vendeur= document.getElementById('telephone_vendeur');
            let mail_vendeur= document.getElementById('mail_vendeur');
            let mdp_vendeur= document.getElementById('mdp_vendeur');
            let mdp2_vendeur= document.getElementById('mdp2_vendeur');

                    // span
            let nomMarqueErreur_vendeur= document.getElementById('nomMarqueErreur_vendeur');
            let telephoneErreur_vendeur= document.getElementById('telephoneErreur_vendeur');
            let mailErreur_vendeur= document.getElementById('mailErreur_vendeur');
            let mdpErreur_vendeur= document.getElementById('mdpErreur_vendeur');
            let mdp2Erreur_vendeur= document.getElementById('mdp2Erreur_vendeur');

                    // reset span
            nomMarqueErreur_vendeur.innerHTML="";
            telephoneErreur_vendeur.innerHTML="";
            mailErreur_vendeur.innerHTML="";
            mdpErreur_vendeur.innerHTML="";
            mdp2Erreur_vendeur.innerHTML="";
            
            var verification_inscription_vendeur=true;

            // nom marque verif
            if(nomMarque_vendeur.value.trim()==""){
                nomMarqueErreur_vendeur.innerHTML = "Compléter ce champs";
                verification_inscription_vendeur=false;
            }else if(regex_mixte.test(nomMarque_vendeur.value)==false){
                nomMarqueErreur_vendeur.innerHTML = "Les caractères spéciaux ne sont pas pris en compte";
                verification_inscription_vendeur=false;
            }else if(nomMarque_vendeur.value.length >= 15){
                nomMarqueErreur_vendeur.innerHTML = "Trop long";
                verification_inscription_vendeur=false;
            }else{
                nomMarqueErreur_vendeur.innerHTML = "";
            }

            // telephone verif
            if(telephone_vendeur.value.trim()==""){
                telephoneErreur_vendeur.innerHTML = "Compléter ce champs";
                verification_inscription_vendeur=false;
            }else if(regex_chiffre.test(telephone_vendeur.value)==false){
                telephoneErreur_vendeur.innerHTML = "Les lettres ne sont pas pris en compte";
                verification_inscription_vendeur=false;
            }else if(telephone_vendeur.value.length >= 10){
                telephoneErreur_vendeur.innerHTML = "N'existe pas, trop long";
                verification_inscription_vendeur=false;
            }else{
                telephoneErreur_vendeur.innerHTML = "";
            }

            // mdp verif
            if(mdp_vendeur.value.trim()==""){
                mdpErreur_vendeur.innerHTML = "Compléter ce champs";
                mdpErreur_vendeur.setAttribute("style","color:red");
                verification_inscription_vendeur=false;
            }else if(!/[a-z]/.test(mdp_vendeur.value)){
                mdpErreur_vendeur.innerHTML = "minuscule obligatoire";
                verification_inscription_vendeur=false;
                mdpErreur_vendeur.setAttribute("style","color:red");
            }else if(!/[A-Z]/.test(mdp_vendeur.value)){
                mdpErreur_vendeur.innerHTML = "majuscule obligatoire";
                verification_inscription_vendeur=false;
                mdpErreur_vendeur.setAttribute("style","color:red");
            }else if(!/[1-9]/.test(mdp_vendeur.value)){
                mdpErreur_vendeur.innerHTML = "chiffre obligatoire";
                verification_inscription_vendeur=false;
                mdpErreur_vendeur.setAttribute("style","color:red");
            }else if(/[1-9]/.test(mdp_vendeur.value) && regex_mdp.test(mdp_vendeur.value)==false){
                mdpErreur_vendeur.innerHTML = "Moyen";
                verification_inscription_vendeur=true;
                mdpErreur_vendeur.setAttribute("style","color:green");
            }else if(regex_mdp.test(mdp_vendeur.value)){
                mdpErreur_vendeur.innerHTML = "Fort";
                verification_inscription_vendeur=true;
                mdpErreur_vendeur.setAttribute("style","color:green");
            }else{
                mdpErreur_vendeur.innerHTML = "";
            }

            if(mdp2_vendeur.value.trim()==""){
                mdp2Erreur_vendeur.innerHTML = "Compléter ce champs";
                mdp2Erreur_vendeur.setAttribute("style","color:red");
                verification_inscription_vendeur=false;
            }else if(mdp_vendeur.value.trim() != mdp2_vendeur.value.trim()){
                mdp2Erreur_vendeur.innerHTML = "Mot de passe différent";
                mdp2Erreur_vendeur.setAttribute("style","color:red");
                verification_inscription_vendeur=false;
            }else if(mdp_vendeur.value.trim() == mdp2_vendeur.value.trim()){
                mdp2Erreur_vendeur.innerHTML = "Correct";
                mdp2Erreur_vendeur.setAttribute("style","color:green");
                verification_inscription_vendeur=true;
            }else if(regex_mdp.test(mdp_vendeur.value) != regex_mdp.test(mdp2_vendeur.value)){
                mdp2Erreur_vendeur.innerHTML = "Mot de passe pas sécurisé";
                mdp2Erreur_vendeur.setAttribute("style","color:red");
                verification_inscription_vendeur=false;
            }else if(/[1-9]/.test(mdp_vendeur.value) && regex_mdp.test(mdp_vendeur.value)==false != /[1-9]/.test(mdp2_vendeur.value) && regex_mdp.test(mdp2_acheteur.value)==false){
                mdp2Erreur_vendeur.innerHTML = "Mot de passe pas sécurisé";
                mdp2Erreur_vendeur.setAttribute("style","color:red");
                verification_inscription_vendeur=false;
            }else{
                mdp2Erreur_vendeur.innerHTML = "";
            }

            // mail verif
            if(mail_vendeur.value.trim()==""){
                mailErreur_vendeur.innerHTML = "Compléter ce champs";
                verification_inscription_vendeur=false;
            }else if(regex_mail.test(mail_vendeur.value)==false){
                mailErreur_vendeur.innerHTML = "Le mail n'est pas correct";
                verification_inscription_vendeur=false;
            }else if(mail_vendeur.value.length >= 25){
                mailErreur_vendeur.innerHTML = "Trop long";
                verification_inscription_vendeur=false;
            }else{
                mailErreur_vendeur.innerHTML = "";
            }

            if(verification_inscription_vendeur == false){
                event.preventDefault();
            }
            
        }

        /********************************
                CHOISIT-IMAGE-PERSO
        *********************************/
        function choix_image_vendeur(){

            $(document).on('change', '.btn_choix_img_vendeur_inscription :file', function() {
                let maVariable = $(this),
                    nvx_texte = maVariable.val().replace(/\\/g, '/').replace(/.*\//, '');
                    maVariable.trigger('fileselect', [nvx_texte]);
            });
        
            $('.btn_choix_img_vendeur_inscription :file').on('fileselect', function(event, nvx_texte) {
                
                let nom_img = $(this).parents(".img_inscription_general").find(':text'),
                    mon_texte = nvx_texte;
                
                if( nom_img.length ) {
                    nom_img.val(mon_texte);
                } else {
                    if( mon_texte ) alert(mon_texte);
                }
            
            });

            function readURL(mon_img) {
                if (mon_img.files && mon_img.files[0]) {
                    let read = new FileReader();
                    
                    read.onload = function (e) {
                        $("#img_inscription_choix_vendeur").attr('src', e.target.result);
                    }
                    
                    read.readAsDataURL(mon_img.files[0]);
                }
            }
            
            $("#file_interrieur_inscription_img").change(function(){
                readURL(this);
            });

        }

/********************************
        COMPTE A REBOURS
*********************************/

function decompteur(){

    // var date1 = new Date(document.getElementById('start').value) ;
    var date2 = new Date(2022, 11, 24, 10, 33, 30, 0);//year, month, day, hour, minute, second, and millisecond

    var jours=$('#jours');
    var heures=$('#heures');
    var minutes=$('#minutes');
    var secondes=$('#secondes');
    
    // var heure1 = date1.getTime()/1000;
    var heure2 = date2.getTime()/1000;
    var heure1 = new Date()/1000;
    var s=heure2-heure1;

    var d=Math.floor(s/86400);
    jours.html('<strong><font size="6">'+d+'</font></strong> Jour'+(d>1?'s':''));
    s-=d*86400;

    var h=Math.floor(s/3600);
    heures.html('<strong><font size="6">'+h+'</font></strong> Heure'+(h>1?'s':''));
    s-=h*3600;

    var m=Math.floor(s/60);
    minutes.html('<strong><font size="6">'+m+'</font></strong> Minute'+(m>1?'s':''));
    s-=m*60;

    var s=Math.floor(s);
    secondes.html('<strong><font size="6">'+s+'</font></strong> Seconde'+(s>1?'s':''));

    setTimeout(decompteur,1000);
}