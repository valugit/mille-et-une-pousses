<?php include "./inc/head.php";?>

<main class="productsPage">
    <section class="products-one parallax">
        <div class="text">

            <h1 class="title c-lightPink">découvrir</h1>

            <hr class="b-deepBlue">

            <p class="c-deepBlue">Découvrez les plantes de Mille et une pousses !
                Et laissez vous emporter par la verdure ambiante,
                succombez sous le charme de nos amies à feuilles !</p>
        </div>
    </section>

    <section class="products-two">

        <span id="fakeTags"></span>

        <div id="tags" class="tags">

            <div class="block">
                <h2 class="title c-deepBlue">catégories</h2>

                <div class="check">
                    <input type="checkbox" id="tagOne" class="checkbox">

                    <label for="tagOne" class="lab labName">
                        <h4 class="c-deepBlue">Facile d'entretien</h4>
                        <span class="underline b-lightPink"></span>
                    </label>

                    <label for="tagOne" class="lab labCheck one">
                        <i class="fas fa-check c-white"></i>
                    </label>
                </div>

                <div class="check">
                    <input type="checkbox" id="tagTwo" class="checkbox">

                    <label for="tagTwo" class="lab labName">
                        <h4 class="c-deepBlue">Peu de lumière</h4>
                        <span class="underline b-lightPink"></span>
                    </label>

                    <label for="tagTwo" class="lab labCheck two">
                        <i class="fas fa-check c-white"></i>
                    </label>
                </div>

                <div class="check">
                    <input type="checkbox" id="tagThree" class="checkbox">

                    <label for="tagThree" class="lab labName">
                        <h4 class="c-deepBlue">Pet friendly</h4>
                        <span class="underline b-lightPink"></span>
                    </label>

                    <label for="tagThree" class="lab labCheck three">
                        <i class="fas fa-check c-white"></i>
                    </label>
                </div>
            </div>

        </div>

        <div class="container">
            <?php foreach ($products as $product): ?>
            <div class="product <?php foreach ($categories as $key => $category) {
  if ($product["id"] == $key) {
    foreach ($category as $value) {
      echo $value["name"] . " ";
    }
  }}?>">
                <div class="frame">
                    <a href="http://milleetunepousses.loc/product/details/<?php echo urlencode($product["name"]) ?>">
                        <img src="<?php echo $product["path"] ?>" alt="<?php echo $product["alt"] ?>">
                        <span>
                            <p class="btn b-lightPink c-white">acheter</p>
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
    </section>
</main>

<?php include "./inc/foot.php";