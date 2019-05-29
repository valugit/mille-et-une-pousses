<?php include "./inc/head.php";?>

<main class="cartPage">

    <section class="cart-one">
        <form method="POST" action="">
            <span class="circle b-lightPink"></span>

            <h1 class="title c-pinkOrange">mon panier</h1>
            <hr class="b-deepBlue">

            <div class="container b-white">

                <?php if (count($_SESSION["cart"]) > 0): ?>
                <header>
                    <h3 class="col col-one c-deepBlue">produits</h3>
                    <h3 class="col col-two c-deepBlue">nombre</h3>
                    <h3 class="col col-three c-deepBlue">prix</h3>
                </header>

                <?php foreach ($items as $item): ?>
                <div class="product">

                    <div class="col col-one c-deepBlue">
                        <div class="img">
                            <img src="<?php echo $item["path"] ?>" alt="<?php echo $item["alt"] ?>" alt="photo de <?php echo $item["alt"] ?>">
                        </div>
                        <p class="name c-deepBlue"><?php echo $item["name"] ?></p>
                    </div>

                    <div class="col col-two">
                        <button type="button" class="btn btn-quantity btn-lightPink b-lightPink" title="retirer un article">
                            <i class="fas fa-minus c-white"></i>
                        </button>

                        <?php foreach ($quantities as $itemName => $itemQuantity): ?>
                            <?php if ($itemName == $item["name"]): ?>
                            <input id="quantity" class="c-deepBlue" type="text" name="quantity" value="<?php echo $itemQuantity ?>" title="nombre d'articles sélectionnés">

                        <button type="button" class="btn btn-quantity btn-lightPink b-lightPink" title="ajouter un article">
                            <i class="fas fa-plus c-white"></i>
                        </button>
                    </div>

                    <p class="col col-three c-lightPink"><?php echo $itemQuantity * (floatval($item["price"]) / 100) ?>&euro;</p>
                        <?php endif?>
                    <?php endforeach?>

                </div>
                <?php endforeach?>
                <div class="total">
                    <h3 class="c-deepBlue">total&nbsp;:</h3>
                    <p class="c-lightPink"><?php echo $total / 100 ?>&euro;</p>
                </div>
                <?php else: ?>
                <h3 class="empty c-pinkOrange">Votre panier est vide !</h3>
                <?php endif?>
            </div>

            <p class="text c-deepBlue">Remplissez votre panier et votre intérieur vous remerciera !</p>

            <?php if (!isset($_SESSION["connected"])): ?>
            <a class="confirm btn btn-lightPink b-lightPink c-white" href="/user/identification" title="valider ma commande">valider ma commande</a>
            <?php else: ?>
            <input class="confirm btn btn-lightPink b-lightPink c-white" type="submit" value="valider ma commande">
            <?php endif?>
        </form>
    </section>
</main>

<?php include "./inc/foot.php";?>