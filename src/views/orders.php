<?php include "./inc/head.php";?>

<main class="ordersPage">

    <span class="circle b-lightPink"></span>

    <a href="/user/profile" class="back btn btn-pinkOrange b-pinkOrange">
        <i class="fas fa-arrow-left c-white"></i>
        <p class="c-white">retour</p>
    </a>

    <section class="orders order-one">
        <h2 class="title c-deepBlue">Commandes en cours</h2>
        <div class="product">
            <div class="img">
                <img src="/media/products/calathea/calathea.jpg" alt="">
            </div>
            <div class="text">
                <h3 class="c-lightPink">calathea</h3>
                <p class="c-deepBlue">Les calathéas sont des plantes très appréciées pour leur feuillage coloré qui lui
                    donne un côté très décoratif.</p>
            </div>
            <form method="POST" action="">
                <input class="btn btn-lightPink b-lightPink c-white" type="submit" value="annuler">
            </form>
        </div>
    </section>

    <hr class="b-deepBlue">

    <section class="orders orders-two">
        <h2 class="title c-deepBlue">Historique</h2>
        <div class="product">
            <div class="img">
                <img src="/media/products/calathea/calathea.jpg" alt="">
            </div>
            <div class="text">
                <h3 class="c-lightPink">calathea</h3>
                <p class="c-deepBlue">Les calathéas sont des plantes très appréciées pour leur feuillage coloré qui lui
                    donne un côté très décoratif.</p>
            </div>
        </div>
        <div class="product">
            <div class="img">
                <img src="/media/products/calathea/calathea.jpg" alt="">
            </div>
            <div class="text">
                <h3 class="c-lightPink">calathea</h3>
                <p class="c-deepBlue">Les calathéas sont des plantes très appréciées pour leur feuillage coloré qui lui
                    donne un côté très décoratif.</p>
            </div>
        </div>
        <div class="product">
            <div class="img">
                <img src="/media/products/calathea/calathea.jpg" alt="">
            </div>
            <div class="text">
                <h3 class="c-lightPink">calathea</h3>
                <p class="c-deepBlue">Les calathéas sont des plantes très appréciées pour leur feuillage coloré qui lui
                    donne un côté très décoratif.</p>
            </div>
        </div>
        <div class="product">
            <div class="img">
                <img src="/media/products/calathea/calathea.jpg" alt="">
            </div>
            <div class="text">
                <h3 class="c-lightPink">calathea</h3>
                <p class="c-deepBlue">Les calathéas sont des plantes très appréciées pour leur feuillage coloré qui lui
                    donne un côté très décoratif.</p>
            </div>
        </div>
    </section>
</main>

<?php include "./inc/foot.php";?>