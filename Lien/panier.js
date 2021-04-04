
jQuery(document).ready(function(){
    /********************************
            NEGOCIATION
    *********************************/
    $("#negociation_item_unique").hide();
});

document.getElementById('btn_submit_nego').addEventListener('click',envoieInfoNego)
function envoieInfoNego(event){

        // input
    let quantite_nego= document.getElementById('quantite_nego');
    let prix_nego= document.getElementById('prix_nego');

        // span
    let negoItemErreur= document.getElementById('negoItemErreur');

        // reset span
    negoItemErreur.innerHTML="";

    var verif_nego=true;

    // quantite verif
    if(quantite_nego.value.trim()==""){
        negoItemErreur.innerHTML = "Compléter tous les champs";
        verif_nego=false;
    }else if(regex_chiffre.test(quantite_nego.value)==false){
        negoItemErreur.innerHTML = "Les lettres ne sont pas pris en compte";
        verif_nego=false;
    }else{
        negoItemErreur.innerHTML = "";
    }

    // prix verif
    if(prix_nego.value.trim()==""){
        negoItemErreur.innerHTML = "Compléter tous les champs";
        verif_nego=false;
    }else if(regex_chiffre.test(prix_nego.value)==false){
        negoItemErreur.innerHTML = "Les lettres ne sont pas pris en compte";
        verif_nego=false;
    }else{
        negoItemErreur.innerHTML = "";
    }

    if(verif_nego == false){
        event.preventDefault();
    }
}

function propositionNego(){
    $("#negociation_item_unique").show();
}

function propositionNego_hide(){
    $("#negociation_item_unique").hide();
}



document.getElementById('btn_submit_navbar_panier').addEventListener('click',panier_avec_livraison)
function panier_avec_livraison(event){
            // input
    let livraison_panier_magasin= document.getElementById('livraison_panier_magasin');
    let livraison_panier_relais= document.getElementById('livraison_panier_magasin');
    let livraison_panier_domicile= document.getElementById('livraison_panier_domicile');
    
    var verif_panierLivraison=true;
    
    // livraison verif
    if(livraison_panier_magasin.checked==false && livraison_panier_relais.checked==false
        && livraison_panier_domicile.checked==false){

        // toastr.options = {
        //     "closeButton": true,
        //     "newestOnTop": false,
        //     "progressBar": true,
        //     "positionClass": "toast-bottom-center",
        //     "preventDuplicates": false,
        //     "onclick": null,
        //     "showDuration": "300",
        //     "hideDuration": "1000",
        //     "timeOut": "5000",
        //     "extendedTimeOut": "1000",
        //     "showEasing": "swing",
        //     "hideEasing": "linear",
        //     "showMethod": "fadeIn",
        //     "hideMethod": "fadeOut"
        // }

        // setTimeout(function doThisEveryTwoSeconds() {
        // toastr.success("Compléter le champs");
        // }, 1000);

        verif_panierLivraison=false;
    }

    if(verif_panierLivraison == false){
        event.preventDefault();
    }
    
}



