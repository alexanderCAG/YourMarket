

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