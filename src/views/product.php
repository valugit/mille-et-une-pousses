<?php include "./inc/head.php";?>

<main class="productPage">
    <section class="product-one">
        <div class="container">

            <div class="imgs">
                <div class="otherImg">
                    <img class="imgsProduct" src="./../media/img/calathea1.jpg" alt="calathea">
                    <span class="bar top-bar b-lightPink"></span>
                    <span class="bar right-bar b-lightPink"></span>
                    <span class="bar bottom-bar b-lightPink"></span>
                    <span class="bar left-bar b-lightPink"></span>
                </div>
                <div class="otherImg">
                    <img class="imgsProduct" src="./../media/img/calathea2.jpg" alt="calathea">
                    <span class="bar top-bar b-lightPink"></span>
                    <span class="bar right-bar b-lightPink"></span>
                    <span class="bar bottom-bar b-lightPink"></span>
                    <span class="bar left-bar b-lightPink"></span>
                </div>
                <div class="otherImg">
                    <img class="imgsProduct" src="./../media/img/calathea3.jpg" alt="calathea">
                    <span class="bar top-bar b-lightPink"></span>
                    <span class="bar right-bar b-lightPink"></span>
                    <span class="bar bottom-bar b-lightPink"></span>
                    <span class="bar left-bar b-lightPink"></span>
                </div>
            </div>

            <div  class="imgPrincipal">
                <img id="imgProduct" src="./../media/img/calathea.jpg" alt="calathea">
            </div>

            <div class="text">

                <header>
                    <h1 class="title c-deepBlue">calathéa</h1>
                    <p class="price c-deepBlue">18€</p>
                </header>

                <div class="quantity">

                    <h3 class="c-deepBlue">quantité</h3>

                    <div>
                        <button id="less" class="btn btn-quantity btn-lightPink b-lightPink">
                            <i class="fas fa-minus c-white"></i>
                        </button>

                        <input id="quantity" class="c-deepBlue" type="text" value="1" disabled>

                        <button id="more" class="btn btn-quantity btn-lightPink b-lightPink">
                            <i class="fas fa-plus c-white"></i>
                        </button>
                    </div>

                </div>

                <div class="description">

                    <h4 class="c-deepBlue">description</h4>

                    <p class="c-deepBlue">Les calathéas sont des plantes très appréciées pour leur feuillage coloré qui
                        lui donne un côté
                        très décoratif.</p>

                    <p class="c-deepBlue">Elle saura vous séduire par son entretien simple et facile. De l’humidité et
                        votre petite
                        calathéas resplendit ! En ce qui concerne le soleil, notre amie l’apprécie, cependant prenez
                        garde à ne pas l’exposer directement aux rayon de celui-ci.</p>

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

                <button class="btn btn-lightPink b-lightPink c-white">ajouter au panier</button>
            </div>
        </div>
    </section>
    <section class="product-two">
        <div class="container">
            <h2 class="c-deepBlue">D’autres plantes susceptible de vous intéresser</h2>

            <div class="other-products">
                <div>
                    <div class="frame">
                        <a href="">
                            <img src="./../media/img/aglaonema_rose.jpg" alt="">
                            <span>
                                <p class="btn b-lightPink c-white">en savoir plus</p>
                            </span>
                        </a>
                    </div>
                    <div class="info">
                        <h4 class="c-deepBlue">aglaonéma</h4>
                        <h5 class="c-lightPink">18€</h5>
                    </div>
                </div>
                <div>
                    <div class="frame">
                        <a href="">
                            <img src="./../media/img/aloe_vera.jpeg" alt="">
                            <span>
                                <p class="btn b-lightPink c-white">en savoir plus</p>
                            </span>
                        </a>
                    </div>
                    <div class="info">
                        <h4 class="c-deepBlue">aloe vera</h4>
                        <h5 class="c-lightPink">9€</h5>
                    </div>
                </div>
                <div>
                    <div class="frame">
                        <a href="">
                            <img src="./../media/img/pilea.jpeg" alt="">
                            <span>
                                <p class="btn b-lightPink c-white">en savoir plus</p>
                            </span>
                        </a>
                    </div>
                    <div class="info">
                        <h4 class="c-deepBlue">pilea</h4>
                        <h5 class="c-lightPink">11€</h5>
                    </div>
                </div>
                <div>
                    <div class="frame">
                        <a href="">
                            <img src="./../media/img/sansevieria.jpg" alt="">
                            <span>
                                <p class="btn b-lightPink c-white">en savoir plus</p>
                            </span>
                        </a>
                    </div>
                    <div class="info">
                        <h4 class="c-deepBlue">sansevieria</h4>
                        <h5 class="c-lightPink">30€</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include "./inc/foot.php";?>