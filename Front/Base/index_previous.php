
<?php
    $title="Accueil";
    require "head.php";
?>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img_carousel position-relative" src="../../Image/acceuil_achat.jpg" class="d-block w-100"
                alt="acceuil_achat">
            <div class="bg-secondary">
                <div class="div_deco">ACHETER MAINTENANT</div>
            </div>
            <div class="row w-100 carousel-caption" style="top: 200px">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <div class="carouseul_info">
                        <h5 class="text_carousel texte_style">ACHAT DIRECT</h5>
                        <button class="btn_carousel">
                            <img id="img_carousel_panier" src="../../Image/panier.png" alt="panier">
                            <p style="font-weight: bold;">SHOPPING</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="img_carousel" src="../../Image/accueil_enchere.png" class="d-block w-100" alt="accueil_enchere">
            <div class="row w-100 carousel-caption" style="top: 320px">
                <div class="col-md-10">
                    <div class="carouseul_info">
                        <h5 class="text_carousel">ENCHERE</h5>
                        <button class="btn_carousel">
                            <img id="img_carousel_panier" src="../../Image/panier.png" alt="panier">
                            <p style="font-weight: bold;">SHOPPING</p>
                        </button>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="row mt-4 presentation_vetement">

    <div class="col-md-4 col-lg-4">
        <br><br><br>
        <h2 class="centrer texte_style mt-4">VETEMENT</h2><br><br>
        <p class="centrer texte_presentation">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam vero,
            aperiam natus at repellendus mollitia, modi laboriosam recusandae iusto sed inventore sunt consequatur
            quis assumenda voluptatum sapiente unde veniam nisi.</p><br><br><br>
        <button class="btn_presentation">DECOUVRIR</button>
    </div>

    <div class="col-md-1 col-lg-1"></div>

    <div class="col-md-3 col-lg-3 presentation_nouveau_col">
        <div class="position-relative">
            <img class="image_presentation_nouveau" id="image_premier_presentation" src="../../Image/t-shirt_homme.png"
            alt="t-shirt_homme">
            <p class="white texte_style presentation_nouveau_texte position-absolute top-50 start-50 translate-middle">NOUVEAU</p>
            <button class="texte_style presentation_nouveau_ajout position-absolute">AJOUTER</button>
        </div>
        
        <div class="information_presentation_premier">
            <div class="information_presentation_prix">20,99 €</div>
            <div class="information_presentation_categorie">CATEGORIE</div>
            <div class="information_presentation_nom">T-shirt</div>
        </div>
    </div>

    <div class="col-md-1 col-lg-1"></div>

    <div class="col-md-3 col-lg-3 presentation_nouveau_col">
        <div class="position-relative">
            <img class="image_presentation_nouveau" src="../../Image/t-shirt_femme.png" alt="t-shirt_femme">
            <p class="white texte_style presentation_nouveau_texte position-absolute top-50 start-50 translate-middle">NOUVEAU</p> 
            <button class="texte_style presentation_nouveau_ajout position-absolute">AJOUTER</button>
        </div>
        
        <div class="information_presentation_deuxieme">
            <div class="information_presentation_prix">20,99 €</div>
            <div class="information_presentation_categorie">CATEGORIE</div>
            <div class="information_presentation_nom">T-shirt</div>
        </div>
    </div>
</div>

<div class="row mt-4 presentation_maison">

    <div class="col-md-3 col-lg-3 presentation_nouveau_col">
        <div class="position-relative">
            <img class="image_presentation_nouveau" id="image_premier_presentation" src="../../Image/t-shirt_homme.png"
            alt="t-shirt_homme">
            <p class="white texte_style presentation_nouveau_texte position-absolute top-50 start-50 translate-middle">NOUVEAU</p>
            <button class="texte_style presentation_nouveau_ajout position-absolute">AJOUTER</button>
        </div>
        
        <div class="information_presentation_premier">
            <div class="information_presentation_prix">20,99 €</div>
            <div class="information_presentation_categorie">CATEGORIE</div>
            <div class="information_presentation_nom">T-shirt</div>
        </div>
    </div>

    <div class="col-md-1 col-lg-1"></div>

    <div class="col-md-3 col-lg-3 presentation_nouveau_col">
        <div class="position-relative">
            <img class="image_presentation_nouveau" src="../../Image/t-shirt_femme.png" alt="t-shirt_femme">
            <p class="white texte_style presentation_nouveau_texte position-absolute top-50 start-50 translate-middle">NOUVEAU</p> 
            <button class="texte_style presentation_nouveau_ajout position-absolute">AJOUTER</button>
        </div>
        
        <div class="information_presentation_deuxieme">
            <div class="information_presentation_prix">20,99 €</div>
            <div class="information_presentation_categorie">CATEGORIE</div>
            <div class="information_presentation_nom">T-shirt</div>
        </div>
    </div>

    <div class="col-md-1 col-lg-1"></div>

    <div class="col-md-4 texte_presentation_div">
        <br><br><br>
        <h2 class="centrer texte_style mt-4">MAISON</h2><br><br>
        <p class="centrer texte_presentation">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam vero,
            aperiam natus at repellendus mollitia, modi laboriosam recusandae iusto sed inventore sunt consequatur
            quis assumenda voluptatum sapiente unde veniam nisi.</p><br><br><br>
        <button class="btn_presentation">DECOUVRIR</button>
    </div>
</div>

<div class="presentation_marque mt-5 position-relative">
    <div class="container">
        <h2 class="centrer texte_style pt-4 pb-4 text-uppercase">Nos Produits</h2>
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            <div class="col">
                <div class="p-3">
                    <img class="image_ronde image_produit" src="../../Image/chaussure.png" alt="chaussure">
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <img class="image_ronde image_produit" src="../../Image/chaussure.png" alt="chaussure">
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <img class="image_ronde image_produit" src="../../Image/chaussure.png" alt="chaussure">
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <img class="image_ronde image_produit" src="../../Image/chaussure.png" alt="chaussure">
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <img class="image_ronde image_produit" src="../../Image/chaussure.png" alt="chaussure">
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <img class="image_ronde image_produit" src="../../Image/chaussure.png" alt="chaussure">
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <img class="image_ronde image_produit" src="../../Image/chaussure.png" alt="chaussure">
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <img class="image_ronde image_produit" src="../../Image/chaussure.png" alt="chaussure">
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <img class="image_ronde image_produit" src="../../Image/chaussure.png" alt="chaussure">
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <img class="image_ronde image_produit" src="../../Image/chaussure.png" alt="chaussure">
                </div>
            </div>
        </div>

        <button class="position-absolute bottom-0 start-50 translate-middle-x" id="btn_presentation_produit">
            TOUT VOIR
        </button>

    </div>
</div>

<div class="information_connection pt-4 position-relative">
    <h2 class="centrer white texte_style">SE CONNECTER</h2><br><br>
    <p class="white info_connection_texte position-absolute top-50 start-50 translate-middle">Lorem ipsum dolor sit
        amet consectetur adipisicing elit. Necessitatibus, dolores magni! A labore incidunt magnam doloribus,
        dolorum repudiandae consequatur corporis aut ex harum officia suscipit rem vero maxime, molestias quisquam.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione perferendis atque deserunt quia
        consectetur voluptatum aut obcaecati vitae accusantium. Ipsam ratione beatae et assumenda. Nesciunt
        accusamus dignissimos deserunt hic et.
    </p>
    <div class="container overflow-hidden position-absolute top-100 start-50 translate-middle">
        <div class="row gx-5">
            <div class="col shadow-sm">
                <a href="#" style="text-decoration: none; color: black;">
                    <div class="info_connection_class texte_style centrer p-3 border">
                        VENDEUR ?
                    </div>
                </a>
            </div>
            <div class="col shadow-sm">
                <a href="#" style="text-decoration: none; color: black;">
                    <div class="info_connection_class texte_style centrer p-3 border">
                        ACHETEUR ?
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
    include("footer.php");
?>