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

// COLOR PICKER

$("input.color").each(function() {
  var that = this;
  $(this).parent().prepend($("<i class='fa fa-paint-brush color-icon'></i>").click(function() {
    that.type = (that.type == "color") ? "text" : "color";
  }));
}).change(function() {
  $(this).attr("data-value", this.value);
  this.type = "text";
});

// jQuery(document).ready(function(){
//     compteur();
// });

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

// document.getElementById('btn_submit_nego').addEventListener('click',envoieInfoNego)
// function envoieInfoNego(event){
//         // input
//     let quantite_nego= document.getElementById('quantite_nego');
//     let prix_nego= document.getElementById('prix_nego');

//         // span
//     let negoItemErreur= document.getElementById('negoItemErreur');

//         // reset span
//     negoItemErreur.innerHTML="";

//     var verif_nego=true;

//     // quantite verif
//     if(quantite_nego.value.trim()==""){
//         negoItemErreur.innerHTML = "Compléter tous les champs";
//         verif_nego=false;
//     }else if(regex_chiffre.test(quantite_nego.value)==false){
//         negoItemErreur.innerHTML = "Les lettres ne sont pas pris en compte";
//         verif_nego=false;
//     }else{
//         negoItemErreur.innerHTML = "";
//     }

//     // prix verif
//     if(prix_nego.value.trim()==""){
//         negoItemErreur.innerHTML = "Compléter tous les champs";
//         verif_nego=false;
//     }else if(regex_chiffre.test(prix_nego.value)==false){
//         negoItemErreur.innerHTML = "Les lettres ne sont pas pris en compte";
//         verif_nego=false;
//     }else{
//         negoItemErreur.innerHTML = "";
//     }

//     if(verif_nego == false){
//         event.preventDefault();
//     }
// }

/********************************
        NOTE ARTICLE
*********************************/
// $(".fa-star").hide(); --> dans article.js
var compteur = 0;
function myRate(){
    if(compteur%2 == 0){
        $(".fa-star").show();
        compteur++;
    }else{
        $(".fa-star").hide();
        compteur++;
    }
    
}

const allStars = document.querySelectorAll(".fa-star");
console.log("allStars", allStars);
const highlightedStars = [];
const rating = document.querySelector(".rating");

init();

function init() {
  allStars.forEach((star) => {
    star.addEventListener("click", saveRating);
    star.addEventListener("mouseover", addCSS);
    star.addEventListener("mouseleave", removeCSS);
  });
}

function saveRating(e) {
  console.log(e, e.target, e.target.nodeName, e.target.nodeType);
  console.dir(e.target);
  console.log(e.target.dataset);
  removeEventListenersToAllStars();
  rating.innerText = e.target.dataset.star;
}

function removeEventListenersToAllStars() {
  allStars.forEach((star) => {
    star.removeEventListener("click", saveRating);
    star.removeEventListener("mouseover", addCSS);
    star.removeEventListener("mouseleave", removeCSS);
  });
}

function addCSS(e, css = "checked") {
  const overedStar = e.target;
  overedStar.classList.add(css);
  const previousSiblings = getPreviousSiblings(overedStar);
  console.log("previousSiblings", previousSiblings);
  previousSiblings.forEach((elem) => elem.classList.add(css));
}

function removeCSS(e, css = "checked") {
  const overedStar = e.target;
  overedStar.classList.remove(css);
  const previousSiblings = getPreviousSiblings(overedStar);
  previousSiblings.forEach((elem) => elem.classList.remove(css));
}

function getPreviousSiblings(elem) {
  console.log("elem.previousSibling", elem.previousSibling);
  let sibs = [];
  const spanNodeType = 1;
  while ((elem = elem.previousSibling)) {
    if (elem.nodeType === spanNodeType) {
      sibs = [elem, ...sibs];
    }
  }
  return sibs;
}