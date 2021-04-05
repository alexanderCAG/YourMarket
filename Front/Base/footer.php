
<div class="suivez_reseaux pt-3 pb-3">
    <div class="text-uppercase centrer texte_style">
        Follow us
        <a href="#" style="text-decoration: none;">
            <img class="image_reseau" src="../../Image/instragram.png" alt="instragram">
        </a>
        <a href="test.html" style="text-decoration: none;">
            <img class="image_reseau" src="../../Image/facebook.png" alt="facebook">
        </a>
        <a href="#" style="text-decoration: none;">
            <img class="image_reseau" src="../../Image/twitter.png" alt="twitter">
        </a>
    </div>
</div>

<div class="footer">
    <div class="mon_footer1 row p-4">
        <div class="white centrer mt-4 col-md-4">
            <h4 class="texte_style">House</h4><br>
            <ul style="list-style:none; margin-right:30px;">
                <li class=" footer_menu"><a href="page-maison-sheet.php" class="texte_style" style="text-decoration:none; color: white;cursor:pointer;">Sheet</a></li>
                <li class=" footer_menu"><a href="page-maison-pillow.php" class="texte_style" style="text-decoration:none; color: white;cursor:pointer;">Pillow</a></li>
                <li class=" footer_menu"><a href="page-maison-decoration.php" class="texte_style" style="text-decoration:none; color: white;cursor:pointer;">Decoration</a></li>
                <li class=" footer_menu"><a href="page-maison.php" class="texte_style" style="text-decoration:none; color: white;cursor:pointer;">All</a></li>
            </ul>
        </div>

        <div class="white centrer mt-4 col-md-4">
            <h4 class="texte_style">Clothes</h4><br>
            <ul style="list-style:none; margin-right:30px;">
                <li class=" footer_menu"><a href="page-vetements-tshirt.php" class="texte_style" style="text-decoration:none; color: white;cursor:pointer;">T-shirt</a></li>
                <li class=" footer_menu"><a href="page-vetements-sweat.php" class="texte_style" style="text-decoration:none; color: white;cursor:pointer;">Sweat-shirt</a></li>
                <li class=" footer_menu"><a href="page-vetements-shoes.php" class="texte_style" style="text-decoration:none; color: white;cursor:pointer;">Shoes</a></li>
                <li class=" footer_menu"><a href="page-vetements.php" class="texte_style" style="text-decoration:none; color: white;cursor:pointer;">All</a></li>
            </ul>
        </div>

        <div class="col-md-4 mt-4">
            <div class="container overflow-hidden">
                <div class="row gy-5">
                    <div class="col-6">
                        <div class="p-3">
                            <img class="image_payment_footer" src="../../Image/carte_payement_amex.png" alt="carte_payement_amex">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">
                            <img class="image_payment_footer" src="../../Image/carte_payement_cb.png" alt="carte_payement_cb">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">
                            <img class="image_payment_footer" src="../../Image/carte_payement_mastercard.png" alt="carte_payement_mastercard">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">
                            <img class="image_payment_footer" src="../../Image/carte_payement_visa.png" alt="carte_payement_visa">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="monfotter2 centrer bg-light p-2">
        @ 2121 All rights reserved | &copy; privacy policy | Terms of Sales
    </div>
</div>

<div class="fixed-bottom">
    <a href="#">
        <div class="position-absolute bottom-0 end-0">
            <img src="../../Image/fleche_haut.png" alt="fleche_haut">
        </div>
    </a>
</div>

<script>
    var nav = document.querySelector('.navbar_menu_principal'); // Identify target

    window.addEventListener('scroll', function(event) { // To listen for event
        event.preventDefault();

        if (window.scrollY <= 650) { // Just an example
            nav.style.backgroundColor = 'transparent'; // or default color
        } else {
            nav.style.backgroundColor = '#FFF';
        }
    });
</script>

<!-- Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- ARCTEXT -->
<script type="text/javascript" src="http://tympanus.net/Development/Arctext/js/jquery.arctext.js"></script>
<!-- JS -->
<script src="../../Lien/yourmarket.js"></script>
<script src="../../Lien/infoPerso_acheteur.js"></script>
<script src="../../Lien/infoPerso_acheteur2.js"></script>
<script src="../../Lien/infoPerso_vendeur.js"></script>
<script src="../../Lien/infoPerso_admin.js"></script>
<script src="../../Lien/ajoutVendeur.js"></script>
<script src="../../Lien/article.js"></script>
<script src="../../Lien/panier.js"></script>
<script src="../../Lien/image.js"></script>
<script src="../../Lien/multiCarouselAccueil.js"></script>


</body>

</html>

