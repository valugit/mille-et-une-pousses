<?php include "./inc/head.php";?>

<main class="productPage">
    <section class="product-one">
        <div class="container">

            <div class="imgs">
                <?php foreach ($images as $image): ?>
                <div class="otherImg">
                    <img class="imgsProduct" src="<?php echo $image["path"] ?>" alt="<?php echo $image["alt"] ?>" title="photo de <?php echo $image["alt"] ?>">
                    <span class="bar top-bar b-deepBlue"></span>
                    <span class="bar right-bar b-deepBlue"></span>
                    <span class="bar bottom-bar b-deepBlue"></span>
                    <span class="bar left-bar b-deepBlue"></span>
                </div>
                <?php endforeach?>
            </div>

            <div class="imgPrincipal">
                <img id="imgProduct" src="<?php echo $product["path"] ?>" alt="<?php echo $product["alt"] ?>" title="photo de <?php echo $product["alt"] ?>">
            </div>

            <form method="POST" action="/user/addtocart" class="text">

                <header>
                    <h1 class="title c-deepBlue"><?php echo $name ?></h1>
                    <p class="price c-deepBlue"><?php echo floatval($product["price"]) / 100 ?>&euro;</p>
                </header>

                <div class="quantity">

                    <h3 class="c-deepBlue">quantité</h3>

                    <div>
                        <button id="less" type="button" class="btn btn-quantity btn-lightPink b-lightPink" title="retirer un article">
                            <i class="fas fa-minus c-white"></i>
                        </button>

                        <input id="quantity" class="c-deepBlue" type="number" name="quantity" min="1" value="1" title="nombre d'articles selectionnés">

                        <button id="more" type="button" class="btn btn-quantity btn-lightPink b-lightPink" title="ajouter un article">
                            <i class="fas fa-plus c-white"></i>
                        </button>
                    </div>

                </div>

                <div class="description">

                    <h4 class="c-deepBlue">description</h4>

                    <p class="c-deepBlue"><?php echo $product["description"] ?></p>

                    <p class="c-deepBlue"><?php echo $product["maintenance"] ?></p>

                </div>

                <div class="delivery">
                    <div>
                        <i class="fas fa-truck c-lightPink"></i>
                        <p class="c-deepBlue">Livraison offerte à partir de 50€</p>
                    </div>
                    <div>
                        <i class="far fa-credit-card c-lightPink"></i>
                        <p class="c-deepBlue">Paiement sécurisé</p>
                    </div>
                </div>

                <input type="hidden" name="name" value="<?php echo $name ?>">
                <input class="btn btn-lightPink b-lightPink c-white" type="submit" value="ajouter au panier" title="ajouter le nombre d'article sélectionné au panier">
            </form>
        </div>
    </section>
    <section class="product-two">
        <div class="container">
            <h2 class="c-deepBlue">D’autres plantes susceptible de vous intéresser</h2>

            <div class="other-products">
                <?php foreach ($otherProducts as $product): ?>
                <div>
                    <div class="frame">
                        <a href="/product/details/<?php echo urlencode($product["name"]) ?>">
                            <img src="<?php echo $product["path"] ?>" alt="<?php echo $product["alt"] ?>" alt="photo de <?php echo $product["alt"] ?>">
                            <span>
                                <p class="b-lightPink c-white">en savoir plus</p>
                            </span>
                        </a>
                    </div>
                    <div class="info">
                        <h4 class="c-deepBlue"><?php echo $product["name"] ?></h4>
                        <h5 class="c-lightPink"><?php echo floatval($product["price"]) / 100 ?>&euro;</h5>
                    </div>
                </div>
                <?php endforeach?>
            </div>
        </div>
    </section>
</main>

<?php include "./inc/foot.php";?>