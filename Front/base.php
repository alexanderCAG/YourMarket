<?php
    $title="Accueil";
    require "head.php";
?>

<!-- <div class="toast-area" id="toasts">
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

<script>
    function test(){
            var child = document.getElementById('clonemother');
            var clone = child.cloneNode(true);
            var node = document.getElementById("toasts").appendChild(clone);
            console.log(node.childNodes);

            setTimeout(function() {
                if(node) {
                    node.style.animation = "toast .5s ease-out forwards";
                    setTimeout(() => {node.remove();} ,500);
                }
            },3000);
        }

    window.onload=test();
</script> -->

<!-- Mon code -->
<?php
    include("footer.php");
?>




