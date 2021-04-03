<?php
    $title="Accueil";
    require "head.php";
        include("../../Bdd/cnx.php");
        
        // $queryCountItems = mysqli_query($con, "select count(id_item) as total from item where category='Vetement' and subcategory='sweat_shirt'"); 
        $dernierVetement = mysqli_query($con, 'select id_item, brand,price,name,category,subcategory,quantity,description,photo,is_bidding,is_negotiated,is_buying FROM item, seller WHERE item.id_seller=seller.id_seller and category="Clothes" order by id_item desc limit 1');
       
        $avantDernierVetement = mysqli_query($con, 'select id_item, brand, price,name,category,subcategory,quantity,description,photo,is_bidding,is_negotiated,is_buying FROM item, seller WHERE item.id_seller=seller.id_seller and category="Clothes" order by id_item desc limit 1,1');

        $dernierMaison = mysqli_query($con, 'select id_item, brand, price,name,category,subcategory,quantity,description,photo,is_bidding,is_negotiated,is_buying FROM item, seller WHERE item.id_seller=seller.id_seller and category="House" order by id_item desc limit 1');
       
        $avantDernierMaison = mysqli_query($con, 'select id_item,brand, price,name,category,subcategory,quantity,description,photo,is_bidding,is_negotiated,is_buying FROM item, seller WHERE item.id_seller=seller.id_seller and category="House" order by id_item desc limit 1,1');

        $queryAllItems = mysqli_query($con, "select name, price , brand,subcategory,category, quantity, description,photo, is_negotiated, is_bidding from item,seller where seller.id_seller=item.id_seller order by id_item desc limit 10 ");

        $queryAllSeller = mysqli_query($con, "select brand, profil_picture from seller");
        $queryCountSeller  = mysqli_query($con, "select count(id_seller) as totalSeller from seller");

?>


<div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="carousel">
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

<div class="row mt-4 presentation_vetement" style="margin-top: 0px!important;">
    <div class="col-md-4 col-lg-4">
        <br><br><br>
        <h2 class="centrer texte_style mt-4">VETEMENT</h2><br><br>
        <p class="centrer texte_presentation">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam vero,
            aperiam natus at repellendus mollitia, modi laboriosam recusandae iusto sed inventore sunt consequatur
            quis assumenda voluptatum sapiente unde veniam nisi.</p><br><br><br>
        <a type="button"  href="page-vetements.php" class="btn bg_blue1 text-light  pt-3 pb-3 w-100">DECOUVRIR</a>
    </div>

    <div class="col-md-1 col-lg-1"></div>

    <div class="col-md-3 col-lg-3 presentation_nouveau_col">
    <?php if($rowdernierVetement = mysqli_fetch_assoc($dernierVetement)){
                    $nameItem = $rowdernierVetement['name'];
                    $priceItem = $rowdernierVetement['price'];
                    $categoryItem = $rowdernierVetement['category'];
                    $brandItem = $rowdernierVetement['brand'];
                    $subcategoryItem = $rowdernierVetement['subcategory'];
                    $photo = $rowdernierVetement['photo'];
        ?>
        <div class="position-relative">
            <img class="image_presentation_nouveau" id="image_premier_presentation" src="<?php echo $photo ?>"
            alt="t-shirt_homme">
            <p class="white texte_style presentation_nouveau_texte position-absolute top-50 start-50 translate-middle">NOUVEAU</p>
            <button class="texte_style presentation_nouveau_ajout position-absolute">AJOUTER</button>
        </div>
        
        <div class="information_presentation_premier">
        
            <div class="information_presentation_prix"><?php echo $priceItem ?> €</div>
            <div class="information_presentation_categorie"><?php echo $nameItem ?></div>
            <div class="information_presentation_categorie"><?php echo $brandItem ?> / <?php echo $subcategoryItem ?></div>
            <?php } ?>
        </div>
    </div>

    <div class="col-md-1 col-lg-1"></div>

    <div class="col-md-3 col-lg-3 presentation_nouveau_col">
    <?php if($rowavantDernierVetement = mysqli_fetch_assoc($avantDernierVetement)){
                    $nameItem = $rowavantDernierVetement['name'];
                    $priceItem = $rowavantDernierVetement['price'];
                    $brandItem = $rowdernierVetement['brand'];
                    $categoryItem = $rowavantDernierVetement['category'];
                    $subcategoryItem = $rowavantDernierVetement['subcategory'];
                    $photo = $rowavantDernierVetement['photo'];
        ?>
        <div class="position-relative">
            <img class="image_presentation_nouveau" src="<?php echo $photo ?>" alt="t-shirt_femme">
            <p class="white texte_style presentation_nouveau_texte position-absolute top-50 start-50 translate-middle">NOUVEAU</p> 
            <button class="texte_style presentation_nouveau_ajout position-absolute">AJOUTER</button>
        </div>
        
        <div class="information_presentation_deuxieme">
        
            <div class="information_presentation_prix"><?php echo $priceItem ?> €</div>
            <div class="information_presentation_categorie"><?php echo $nameItem ?></div>
            <div class="information_presentation_categorie"><?php echo $brandItem ?> / <?php echo $subcategoryItem ?></div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="row mt-4 presentation_maison">

    <div class="col-md-3 col-lg-3 presentation_nouveau_col">
    <?php if($rowdernierMaison = mysqli_fetch_assoc($dernierMaison)){
                    $nameItem = $rowdernierMaison['name'];
                    $priceItem = $rowdernierMaison['price'];
                    $categoryItem = $rowdernierMaison['category'];
                    $brandItem = $rowdernierVetement['brand'];
                    $subcategoryItem = $rowdernierMaison['subcategory'];
                    $photo = $rowdernierMaison['photo'];
        ?>
        <div class="position-relative">
            <img class="image_presentation_nouveau" id="image_premier_presentation" src="<?php echo $photo ?>"
            alt="t-shirt_homme">
            <p class="white texte_style presentation_nouveau_texte position-absolute top-50 start-50 translate-middle">NOUVEAU</p>
            <button class="texte_style presentation_nouveau_ajout position-absolute">AJOUTER</button>
        </div>
        
        <div class="information_presentation_premier">
        
            <div class="information_presentation_prix"><?php echo $priceItem ?> €</div>
            <div class="information_presentation_categorie"><?php echo $nameItem ?></div>
            <div class="information_presentation_categorie"><?php echo $brandItem ?> / <?php echo $subcategoryItem ?></div>
            <?php } ?>
        </div>
    </div>

    <div class="col-md-1 col-lg-1"></div>

    <div class="col-md-3 col-lg-3 presentation_nouveau_col">
    <?php if($rowavantDernierMaison = mysqli_fetch_assoc($avantDernierMaison)){
                    $nameItem = $rowavantDernierMaison['name'];
                    $priceItem = $rowavantDernierMaison['price'];
                    $categoryItem = $rowavantDernierMaison['category'];
                    $brandItem = $rowavantDernierMaison['brand'];
                    $subcategoryItem = $rowavantDernierMaison['subcategory'];
                    $photo = $rowavantDernierMaison['photo'];
        ?>
        <div class="position-relative">
            <img class="image_presentation_nouveau" src="<?php echo $photo ?>" alt="t-shirt_femme">
            <p class="white texte_style presentation_nouveau_texte position-absolute top-50 start-50 translate-middle">NOUVEAU</p> 
            <button class="texte_style presentation_nouveau_ajout position-absolute">AJOUTER</button>
        </div>
        
        <div class="information_presentation_deuxieme">
        
            <div class="information_presentation_prix"><?php echo $priceItem ?> €</div>
            <div class="information_presentation_categorie"><?php echo $nameItem ?></div>
            <div class="information_presentation_categorie"><?php echo $brandItem ?> / <?php echo $subcategoryItem ?></div>
            <?php } ?>
        </div>
    </div>

    <div class="col-md-1 col-lg-1"></div>

    <div class="col-md-4 texte_presentation_div">
        <br><br><br>
        <h2 class="centrer texte_style mt-4">MAISON</h2><br><br>
        <p class="centrer texte_presentation">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam vero,
            aperiam natus at repellendus mollitia, modi laboriosam recusandae iusto sed inventore sunt consequatur
            quis assumenda voluptatum sapiente unde veniam nisi.</p><br><br><br>
            <a type="button"  href="page-maison.php" class="btn bg_blue1 text-light  pt-3 pb-3 w-100">DECOUVRIR</a>
    </div>
</div>

<div class="presentation_marque  position-relative" style="background-color:#f1f1f1">
    <div class="container">
        <h2 class="centrer texte_style pt-4 pb-4 text-uppercase">Nos Produits</h2>
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
        <?php for ($i=0; $i<=9;$i++){
            if($rowAllItems = mysqli_fetch_assoc($queryAllItems)){
                $nameItems = $rowAllItems['name'];
                $prixItems = $rowAllItems['price'];
                $brandItems = $rowAllItems['brand'];
                $photo = $rowAllItems['photo'];
    ?>
            <div class="col">
                <div class="p-3">
                    <p lass='text-center'><img class="image_ronde image_produit" src="<?php echo $photo ?>" alt="chaussure">
                    <small><?php echo "<p class='text-center'>".$nameItems." - ".$prixItems."€ </p>"  ?></small></p>
                </div>
            </div>
            <?php } }?>
            
        </div>

        <button class="position-absolute bottom-0 start-50 translate-middle-x" id="btn_presentation_produit"><a href="tous-nos-produits.php" class="text-decoration-none text-light">TOUT VOIR</a>
        </button>
        
    </div>
</div>
<div class="">
	<div class="row  w-100 mt-5">
		<div class="MultiCarousel p-0 p-0" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
            <?php
            if($row = mysqli_fetch_assoc($queryCountSeller)){
                $total = $row['totalSeller'];
                for ($i=0; $i<=$total;$i++){
                    if($rowAllSeller = mysqli_fetch_assoc($queryAllSeller)){
                        $nameSeller = $rowAllSeller['brand'];
                        $profil_pictureSeller = $rowAllSeller['profil_picture'];
                    ?>
                <div class="item">
                    <div class="h-100">
                    &nbsp;
                        <img src="<?php echo $profil_pictureSeller ?>" class="rounded-circle float-start w-100 h-75  text-center" alt="<?php echo $nameSeller ?>">
                        <p class="text-center lead w-75">&nbsp;</p> 
                    </div>
                    <p class="text-center lead w-75"><?php echo $nameSeller ?></p> 
                </div>
                    <?php
                    }
                }
            }
            ?>
            </div>
            <button class="btn btn-primary leftLst"><i class="fas fa-angle-left"></i></button>
            <button class="btn btn-primary rightLst"><i class="fas fa-angle-right"></i></button>
        </div>
	</div>
</div>
<!-- <div class="information_connection pt-4 position-relative">
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
</div> -->

<?php
    include("footer.php");
?>