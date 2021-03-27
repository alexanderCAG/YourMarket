

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
        verif_panierLivraison=false;
    }

    if(verif_panierLivraison == false){
        event.preventDefault();
    }
    
}