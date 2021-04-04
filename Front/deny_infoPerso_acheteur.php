<?php
    $title="Confirmation";
    require "head.php";
?>

<div class="confirm_infoPerso_general position-relative">

    <div class="toast-area" id="toasts">
        <div style="display: none">
            <div class="toast" id="clonemother">
                <div class="toast-content">
                    <div class="toast_deco_gauche_wrong"></div>
                    <div class="toast_icon_wrong">
                        
                    </div>
                    <div class="toast_text">
                        <p class="toast_text_titre">Erreur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="confirm_infoPerso_div position-absolute top-50 start-50 translate-middle shadow">
        <div class="confirm_infoPerso_titre position-absolute top-0 start-50 translate-middle-x">
            <h2 class="text-uppercase texte_style centrer">Erreur</h2>
        </div>
        
        <div class="confirm_infoPerso_contenu position-absolute bottom-0 start-0">
            <div class="confirm_infoPerso_contenu2 position-absolute top-50 start-50 translate-middle">
                <p class="text-uppercase msg_confirm_infoPerso">
                    Modification pas accepté
                </p>
                <br><br>
                <a href="../Front/Acheteur/index.php" class="confirm_infoPerso_to_index">Home Page</a>
            </div>
        </div>
    </div>
</div>

<div id="Clouds">
    <div class="Cloud Foreground"></div>
    <div class="Cloud Background"></div>
    <div class="Cloud Foreground"></div>
    <div class="Cloud Background"></div>
    <div class="Cloud Foreground"></div>
    <div class="Cloud Background"></div>
    <div class="Cloud Background"></div>
    <div class="Cloud Foreground"></div>
    <div class="Cloud Background"></div>
    <div class="Cloud Background"></div>
</div>

<script>
    function animationInfoPerso(){
        let child = document.getElementById('clonemother');
        let clone = child.cloneNode(true);
        let node = document.getElementById("toasts").appendChild(clone);
        console.log(node.childNodes);

        setTimeout(function() {
            if(node) {
                node.style.animation = "toast .5s ease-out forwards";
                setTimeout(() => {node.remove();} ,500);
            }
        },3000);
    }

    window.onload=animationInfoPerso();
</script>

<?php
    include("footer.php");
?>