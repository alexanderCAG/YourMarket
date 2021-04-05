<?php
    $title="Se connecter";
    require "head.php";
?>


<form action="../../Bdd/login.php" method="POST">
    <div class="se_connecter_general position-relative">
        <div class="se_connecter_div position-absolute top-50 start-50 translate-middle shadow">
            <div class="se_connecter_titre position-absolute top-0 start-50 translate-middle-x">
                <h2 class="text-uppercase texte_style centrer">Log in</h2>
            </div>
            
            <div class="se_connecter_contenu position-absolute bottom-0 start-0">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <input class="se_connecter_email detail_style" name="mail" placeholder="Email">
                    <br>
                    <input class="se_connecter_mdp detail_style" name="mdp" type="password" placeholder="Password">
                    <br>
                    <input type="submit" name="submit" value="Connexion" class="text-uppercase btn_se_connecter texte_style">
                    <br>
                    <a href="#" class="connecter_mdp_oublié">Forgot your password ?</a>
                    <br><br><br><br>
                    <a href="inscription.php" class="connecter_mais_inscription centrer position-absolute bottom-0 start-50 translate-middle-x">Register</a>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Animation on the background -->
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

<?php
    include("footer.php");
?>