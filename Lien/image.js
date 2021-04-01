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
                $("#img_inscription_choix_vendeur").attr('src', e.target.result);
            }
            
            read.readAsDataURL(mon_img.files[0]);
        }
    }
    
    $("#file_interrieur_inscription_img").change(function(){
        readURL(this);
    });

}
jQuery(document).ready(function(){
    compteur();
});

    // const minutes=60;
    // const hours=60*minutes;
    // const days=24*hours;

    // function compteur(){
    //     const countdown = document.querySelector('#countdown');
    //     const launchDate = Date.parse(countdown.dataset.time)/1000;
    //     const difference = launchDate - Date.now() / 1000;

    //     const diff = {
    //         days: Math.floor(difference/days),
    //         hours: Math.floor(difference%days/hours),
    //         minutes: Math.floor(difference%hours/minutes),
    //         seconddes: Math.floor(difference%minutes),
    //     }

    //     document.getElementById('jour').innerText=diff.days;
    //     document.getElementById('heure').innerText=diff.hours;
    //     document.getElementById('minute').innerText=diff.minutes;
    //     document.getElementById('seconde').innerText=diff.seconddes;

    //     window.setTimeout(()=>{
    //         window.requestAnimationFrame(compteur);
    //     });
    // }