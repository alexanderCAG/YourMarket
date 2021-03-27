/********************************
            GENERAL
*********************************/
jQuery(document).ready(function(){
    $("#sousCategorie_ajoutArticle_maison").hide();
    $("#sousCategorie_ajoutArticle_vetement").hide();
});

function choixCategorie(){
    let choixCategorie_ajoutArticle= document.getElementById('choixCategorie_ajoutArticle');
    if(choixCategorie_ajoutArticle.value == "choix_categorie_null"){
        $("#sousCategorie_ajoutArticle_maison").hide();
        $("#sousCategorie_ajoutArticle_vetement").hide();
    }else if(choixCategorie_ajoutArticle.value == "house"){
        $("#sousCategorie_ajoutArticle_maison").show();
        $("#sousCategorie_ajoutArticle_vetement").hide();
    }else if(choixCategorie_ajoutArticle.value == "clothes"){
        $("#sousCategorie_ajoutArticle_maison").hide();
        $("#sousCategorie_ajoutArticle_vetement").show();
    }
    else{
        $("#sousCategorie_ajoutArticle_maison").hide();
        $("#sousCategorie_ajoutArticle_vetement").hide();
    }
}

document.getElementById('submit_ajoutArticle').addEventListener('click',ajoutArticle)
function ajoutArticle(event){
            // input
    let nomProduit_ajoutArticle= document.getElementById('nomProduit_ajoutArticle');
    let description_ajoutArticle= document.getElementById('description_ajoutArticle');
    let prix_ajoutArticle= document.getElementById('prix_ajoutArticle');
    let quatite_ajoutArticle= document.getElementById('quatite_ajoutArticle');
    let choixCategorie_ajoutArticle= document.getElementById('choixCategorie_ajoutArticle');
    let sousCategorie_ajoutArticle_maison= document.getElementById('sousCategorie_ajoutArticle_maison');
    let sousCategorie_ajoutArticle_vetement= document.getElementById('sousCategorie_ajoutArticle_vetement');
    let achat_direct_ajoutArticle= document.getElementById('achat_direct_ajoutArticle');
    let achat_nego_ajoutArticle= document.getElementById('achat_nego_ajoutArticle');
    let achat_enchere_ajoutArticle= document.getElementById('achat_enchere_ajoutArticle');
    
            // span
    let nomProduitErreur_ajoutArticle= document.getElementById('nomProduitErreur_ajoutArticle');
    let descriptionErreur_ajoutArticle= document.getElementById('descriptionErreur_ajoutArticle');
    let prixErreur_ajoutArticle= document.getElementById('prixErreur_ajoutArticle');
    let quantiteErreur_ajoutArticle= document.getElementById('quantiteErreur_ajoutArticle');
    let choixCategorieErreur_ajoutArticle= document.getElementById('choixCategorieErreur_ajoutArticle');
    let choixSousCategorieErreur_ajoutArticle_maison= document.getElementById('choixSousCategorieErreur_ajoutArticle_maison');
    let choixSousCategorieErreur_ajoutArticle_vetement= document.getElementById('choixSousCategorieErreur_ajoutArticle_vetement');
    let typeAchatErreur_ajoutArticle= document.getElementById('typeAchatErreur_ajoutArticle');

            // reset span
    nomProduitErreur_ajoutArticle.innerHTML="";
    descriptionErreur_ajoutArticle.innerHTML="";
    prixErreur_ajoutArticle.innerHTML="";
    quantiteErreur_ajoutArticle.innerHTML="";
    choixCategorieErreur_ajoutArticle.innerHTML="";
    choixSousCategorieErreur_ajoutArticle_maison.innerHTML="";
    choixSousCategorieErreur_ajoutArticle_vetement.innerHTML="";
    typeAchatErreur_ajoutArticle.innerHTML="";

    var verif_ajoutArticle=true;
    
    // nom produit verif
    if(nomProduit_ajoutArticle.value.trim()==""){
        nomProduitErreur_ajoutArticle.innerHTML = "Compléter ce champs";
        verif_ajoutArticle=false;
    }else if(regex_tot.test(nomProduit_ajoutArticle.value)==false){
        nomProduitErreur_ajoutArticle.innerHTML = "Les caractères spéciaux ne sont pas pris en compte";
        verif_ajoutArticle=false;
    }else if(nomProduit_ajoutArticle.value.length >= 15){
        nomProduitErreur_ajoutArticle.innerHTML = "Trop long";
        verif_ajoutArticle=false;
    }else{
        nomProduitErreur_ajoutArticle.innerHTML = "";
    }

    // description verif
    if(description_ajoutArticle.value.trim()==""){
        descriptionErreur_ajoutArticle.innerHTML = "Compléter ce champs";
        verif_ajoutArticle=false;
    }else if(regex_tot.test(description_ajoutArticle.value)==false){
        descriptionErreur_ajoutArticle.innerHTML = "Les caractères spéciaux ne sont pas pris en compte";
        verif_ajoutArticle=false;
    }else if(description_ajoutArticle.value.length <= 10){
        descriptionErreur_ajoutArticle.innerHTML = "Trop court";
        verif_ajoutArticle=false;
    }else if(description_ajoutArticle.value.length >= 250){
        descriptionErreur_ajoutArticle.innerHTML = "Trop long";
        verif_ajoutArticle=false;
    }else{
        descriptionErreur_ajoutArticle.innerHTML = "";
    }
    
    // categorie verif
    if(choixCategorie_ajoutArticle.value == "choix_categorie_null"){
        choixCategorieErreur_ajoutArticle.innerHTML = "Choisir une catégorie";
        verif_ajoutArticle=false;
    }else{
        choixCategorieErreur_ajoutArticle.innerHTML = "";

        if(choixCategorie_ajoutArticle.value == "house" && sousCategorie_ajoutArticle_maison.value == "sous_categorieMaison"){
            choixSousCategorieErreur_ajoutArticle_maison.innerHTML = "Choisir une catégorie";
            verif_ajoutArticle=false;
        }else{
            choixSousCategorieErreur_ajoutArticle_maison.innerHTML = "";
        }
    
        if(choixCategorie_ajoutArticle.value == "clothes" && sousCategorie_ajoutArticle_vetement.value == "sous_categorie_vetement"){
            choixSousCategorieErreur_ajoutArticle_vetement.innerHTML = "Choisir une catégorie";
            verif_ajoutArticle=false;
        }else{
            choixSousCategorieErreur_ajoutArticle_vetement.innerHTML = "";
        }
    }

    // prix verif
    if(prix_ajoutArticle.value.trim()==""){
        prixErreur_ajoutArticle.innerHTML = "Compléter ce champs";
        verif_ajoutArticle=false;
    }else if(regex_chiffre.test(prix_ajoutArticle.value)==false){
        prixErreur_ajoutArticle.innerHTML = "Les lettres ne sont pas pris en compte";
        verif_ajoutArticle=false;
    }else{
        prixErreur_ajoutArticle.innerHTML = "";
    }

    // quantité verif
    if(quatite_ajoutArticle.value.trim()==""){
        quantiteErreur_ajoutArticle.innerHTML = "Compléter ce champs";
        verif_ajoutArticle=false;
    }else if(regex_chiffre.test(quatite_ajoutArticle.value)==false){
        quantiteErreur_ajoutArticle.innerHTML = "Les lettres ne sont pas pris en compte";
        verif_ajoutArticle=false;
    }else{
        quantiteErreur_ajoutArticle.innerHTML = "";
    }

    // type achat verif
    if(achat_direct_ajoutArticle.checked==false && achat_nego_ajoutArticle.checked==false
        && achat_enchere_ajoutArticle.checked==false){
        typeAchatErreur_ajoutArticle.innerHTML = "Choisir un type d'achat";
        verif_ajoutArticle=false;
    }else if(achat_nego_ajoutArticle.checked==true && achat_enchere_ajoutArticle.checked==true){
        typeAchatErreur_ajoutArticle.innerHTML = "Impossible";
        verif_ajoutArticle=false;
    }else{
        typeAchatErreur_ajoutArticle.innerHTML = "";
    }

    // condition achat direct
    if(achat_direct_ajoutArticle.checked==true && parseInt(prix_ajoutArticle.value) <= "19"){
        typeAchatErreur_ajoutArticle.innerHTML = "Augmenter le prix de l'article";
        verif_ajoutArticle=false;
    }else{
        typeAchatErreur_ajoutArticle.innerHTML = "";
    }

    if(verif_ajoutArticle == false){
        event.preventDefault();
    }
    
}

function reset_ajoutArticle(){
    $(".contenu_details_Ajoutarticle").val("");
    $("#description_ajoutArticle").val("");
    document.getElementById('achat_direct_ajoutArticle').checked=false;
    document.getElementById('achat_nego_ajoutArticle').checked=false;
    document.getElementById('achat_enchere_ajoutArticle').checked=false;
    choixCategorie_ajoutArticle.selectedIndex = 0;
    sousCategorie_ajoutArticle_maison.selectedIndex = 0;
    sousCategorie_ajoutArticle_vetement.selectedIndex = 0;
    $("#sousCategorie_ajoutArticle_maison").hide();
    $("#sousCategorie_ajoutArticle_vetement").hide();

    nomProduitErreur_ajoutArticle.innerHTML="";
    descriptionErreur_ajoutArticle.innerHTML="";
    prixErreur_ajoutArticle.innerHTML="";
    quantiteErreur_ajoutArticle.innerHTML="";
    choixCategorieErreur_ajoutArticle.innerHTML="";
    choixSousCategorieErreur_ajoutArticle_maison.innerHTML="";
    choixSousCategorieErreur_ajoutArticle_vetement.innerHTML="";
    typeAchatErreur_ajoutArticle.innerHTML="";
}


function choix_image_vendeur(){

    $(document).on('change', '.btn_choix_img_ajoutArticle :file', function() {
        let maVariable = $(this),
            nvx_texte = maVariable.val().replace(/\\/g, '/').replace(/.*\//, '');
            maVariable.trigger('fileselect', [nvx_texte]);
    });

    $('.btn_choix_img_ajoutArticle :file').on('fileselect', function(event, nvx_texte) {
        
        let nom_img = $(this).parents(".img_ajoutArticle_general").find(':text'),
        // let nom_img = $("#file_interrieur_inscription_img"),
        // let nom_img = $(".form-control"),
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
                $("#img_ajoutArticle").attr('src', e.target.result);
            }
            
            read.readAsDataURL(mon_img.files[0]);
        }
    }
    
    $("#file_interrieur_ajoutArticle_img").change(function(){
        readURL(this);
    });

}


/********************************
            QUANTITE
*********************************/
var count1 = 0;
var countFlower1 = document.getElementById("nb1");

function ajouter1(){
    count1++;
    countFlower1.value = count1;
}
function enlever1(){
    if (count1 > 0) {
        count1--;
        countFlower1.value = count1;
    }
}