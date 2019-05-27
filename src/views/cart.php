<?php include "./inc/head.php";?>

<main class="cartPage">

    <section class="cart-one">
        <form method="POST" action="">
            <span class="circle b-lightPink"></span>

            <h1 class="title c-pinkOrange">mon panier</h1>
            <hr class="b-deepBlue">

            <div class="container b-white">
                <header>
                    <h3 class="col col-one c-deepBlue">produits</h3>
                    <h3 class="col col-two c-deepBlue">nombre</h3>
                    <h3 class="col col-three c-deepBlue">prix</h3>
                </header>

                <div class="product">

                    <div class="col col-one c-deepBlue">
                        <div class="img">
                            <img src="/media/products/aglaonema/aglaonema.jpg" alt="">
                        </div>
                        <p class="name c-deepBlue">aglaoneama</p>
                    </div>

                    <div class="col col-two">
                        <button type="button" class="btn btn-quantity btn-lightPink b-lightPink">
                            <i class="fas fa-minus c-white"></i>
                        </button>

                        <input class="c-deepBlue" type="text" value="1" disabled>

                        <button type="button" class="btn btn-quantity btn-lightPink b-lightPink">
                            <i class="fas fa-plus c-white"></i>
                        </button>
                    </div>
                    
                    <p class="col col-three c-lightPink">17€</p>

                </div>
                <div class="product">

                    <div class="col col-one c-deepBlue">
                        <div class="img">
                            <img src="/media/products/aglaonema/aglaonema.jpg" alt="">
                        </div>
                        <p class="name c-deepBlue">aglaoneama</p>
                    </div>

                    <div class="col col-two">
                        <button type="button" class="btn btn-quantity btn-lightPink b-lightPink">
                            <i class="fas fa-minus c-white"></i>
                        </button>

                        <input class="c-deepBlue" type="text" value="1" disabled>

                        <button type="button" class="btn btn-quantity btn-lightPink b-lightPink">
                            <i class="fas fa-plus c-white"></i>
                        </button>
                    </div>
                    
                    <p class="col col-three c-lightPink">17€</p>

                </div>
                <div class="product">

                    <div class="col col-one c-deepBlue">
                        <div class="img">
                            <img src="/media/products/aglaonema/aglaonema.jpg" alt="">
                        </div>
                        <p class="name c-deepBlue">aglaoneama</p>
                    </div>

                    <div class="col col-two">
                        <button type="button" class="btn btn-quantity btn-lightPink b-lightPink">
                            <i class="fas fa-minus c-white"></i>
                        </button>

                        <input class="c-deepBlue" type="text" value="1" disabled>

                        <button type="button" class="btn btn-quantity btn-lightPink b-lightPink">
                            <i class="fas fa-plus c-white"></i>
                        </button>
                    </div>
                    
                    <p class="col col-three c-lightPink">17€</p>

                </div>
                <div class="product">

                    <div class="col col-one c-deepBlue">
                        <div class="img">
                            <img src="/media/products/aglaonema/aglaonema.jpg" alt="">
                        </div>
                        <p class="name c-deepBlue">aglaoneama</p>
                    </div>

                    <div class="col col-two">
                        <button type="button" class="btn btn-quantity btn-lightPink b-lightPink">
                            <i class="fas fa-minus c-white"></i>
                        </button>

                        <input class="c-deepBlue" type="text" value="1" disabled>

                        <button type="button" class="btn btn-quantity btn-lightPink b-lightPink">
                            <i class="fas fa-plus c-white"></i>
                        </button>
                    </div>
                    
                    <p class="col col-three c-lightPink">17€</p>

                </div>
                <div class="product">

                    <div class="col col-one c-deepBlue">
                        <div class="img">
                            <img src="/media/products/aglaonema/aglaonema.jpg" alt="">
                        </div>
                        <p class="name c-deepBlue">aglaoneama</p>
                    </div>

                    <div class="col col-two">
                        <button type="button" class="btn btn-quantity btn-lightPink b-lightPink">
                            <i class="fas fa-minus c-white"></i>
                        </button>

                        <input class="c-deepBlue" type="text" value="1" disabled>

                        <button type="button" class="btn btn-quantity btn-lightPink b-lightPink">
                            <i class="fas fa-plus c-white"></i>
                        </button>
                    </div>
                    
                    <p class="col col-three c-lightPink">17€</p>

                </div>
            </div>

            <p class="text c-deepBlue">Remplissez votre panier et votre intérieur vous remerciera !</p>

            <input class="confirm btn btn-lightPink b-lightPink c-white" type="submit" value="valider ma commande">
        </form>
    </section>
</main>

<?php include "./inc/foot.php";?>