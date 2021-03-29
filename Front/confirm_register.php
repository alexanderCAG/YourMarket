<?php
    $title="Confirmation";
    require "head.php";
?>

<div class="confirm_register_general position-relative">

    <div class="toast-area" id="toasts">
        <div style="display: none">
            <div class="toast" id="clonemother">
                <div class="toast-content">
                    <div class="toast_deco_gauche"></div>
                    <div class="toast_icon">
                        &#x2714
                    </div>
                    <div class="toast_text">
                        <p class="toast_text_titre">Success</p>
                        <p class="toast_text_message">Inscription valider</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="confirm_register_div position-absolute top-50 start-50 translate-middle shadow">
        <div class="confirm_register_titre position-absolute top-0 start-50 translate-middle-x">
            <h2 class="text-uppercase texte_style centrer">BIENVENUE</h2>
        </div>
        
        <div class="confirm_register_contenu position-absolute bottom-0 start-0">
            <div class="confirm_register_contenu2 position-absolute top-50 start-50 translate-middle">
                <p class="text-uppercase msg_confirm_register">
                    Vous êtes maintenant inscrit
                </p>
                <br><br>
                <a href="../Front/Base/connexion.php" class="confirm_register_to_connexion">Sign up</a>
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
    function animationInscription(){
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

    window.onload=animationInscription();
</script>

<?php
    include("footer.php");
?>