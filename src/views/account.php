<?php include "./inc/head.php";?>

<main id="account" class="accountPage">

    <span class="circle b-lightPink"></span>

    <img class="leaf leaf-1" src="/media/leafs/leaf1_2.png" alt="leaf">
    <img class="leaf leaf-2" src="/media/leafs/leaf1_1.png" alt="leaf">

    <?php if ($profile["role_id"] == 2): ?>
    <section id="account-one" class="account-one">

        <div class="text">
            <h1 class="title c-deepBlue">Bienvenue <?php echo $profile["firstname"] ?> !</h1>
            <p class="c-deepBlue">Vous pouvez organiser vos abonnements, vos commandes mais aussi vos informations
                personnelles !</p>
        </div>

        <div class="buttons">
            <a href="/user/orders" class="btn btn-deepBlue b-deepBlue c-white">mes commandes</a>
            <button id="subscriptionProfile" class="btn btn-deepBlue b-deepBlue c-white">mes abonnements</button>
            <button id="infoProfile" class="btn btn-deepBlue b-deepBlue c-white">informations personnelles</button>
        </div>
    </section>

    <section id="account-two" class="account-two none">
        <p class="text c-deepBlue">Votre abonnement box touche à sa fin et vous souhaitez renouveler votre abonnement ?
            On vous comprend totalement ! Un seul clic et vous voilà assuré de recevoir votre box le mois prochain !
        </p>
        <p class="text c-deepBlue">Vous souhaitez résilier votre abonnement ?
            N’hésitez pas à nous faire part de vos retours ainsi que les points que vous aimeriez voir améliorés.</p>

        <div class="container">

            <div class="button">

                <div class="img">
                    <img src="/media/img/background_leafs.png" alt="leafs">
                </div>

                <form action="" method="post">
                    <input class="c-pinkOrange" type="submit" value="renouveler" title="renouveler l'abonnement">
                </form>

                <span class="bar top-bar b-deepBlue"></span>
                <span class="bar right-bar b-deepBlue"></span>
                <span class="bar bottom-bar b-deepBlue"></span>
                <span class="bar left-bar b-deepBlue"></span>
            </div>

            <div class="button">

                <div class="img">
                    <img src="/media/img/background_leafs.png" alt="leafs">
                </div>

                <div class="form">
                    <form action="" method="post">
                        <input class="c-pinkOrange" type="submit" value="résilier" title="résilier l'abonnement">
                    </form>
                </div>

                <span class="bar top-bar b-deepBlue"></span>
                <span class="bar right-bar b-deepBlue"></span>
                <span class="bar bottom-bar b-deepBlue"></span>
                <span class="bar left-bar b-deepBlue"></span>
            </div>
        </div>
        <button class="back btn btn-lightPink b-lightPink c-white backToProfile">retour</button>
    </section>

    <section id="account-three" class="account-three none">
        <p class="text c-deepBlue">Un changement d’adresse ?<br> Pas de soucis, changez vos informations personnelles
            quand vous
            le souhaitez ! </p>
        <div class=container>
            <form method="POST" action="" class="info">

                <h3 class='c-deepBlue'>mail</h3>

                <input id="dataMail" class="data c-deepBlue" type="text" name="email" value="mail" placeholder="nouvelle adresse mail"
                    title="votre adresse mail actuelle" disabled>

                <button id="changeDataMail" type="button" class="btn btn-deepBlue b-deepBlue c-white"
                    title="modifier l'adresse mail'">modifier</button>

                <div id="changingDataMail" class="btns none">
                    <input id="validateDataMail" class="btn btn-deepBlue b-deepBlue c-white" type="submit"
                        value="valider" title="annuler la modification de l'adresse mail">
                        <button id="cancelDataMail" type="button" class="btn btn-pinkOrange b-pinkOrange c-white"
                        title="modifier le mot de passe">annuler</button>
                </div>

            </form>
            <form method="POST" action="" class="info">

                <h3 class='c-deepBlue'>adresse</h3>

                <input id="dataAddress" class="data c-deepBlue" type="text" name="adresse" value="address" placeholder="nouvelle adresse"
                    title="votre adresse actuelle" disabled>

                <button id="changeDataAddress" type="button" class="btn btn-deepBlue b-deepBlue c-white"
                    title="modifier l'adresse">modifier</button>

                <div id="changingDataAddress" class="btns none">
                    <input id="validateDataAddress" class="btn btn-deepBlue b-deepBlue c-white" type="submit"
                        value="valider" title="annuler la modification de l'adresse">
                    <button id="cancelDataAddress" type="button" class="btn btn-pinkOrange b-pinkOrange c-white"
                        title="modifier le mot de passe">annuler</button>
                </div>

            </form>
            <form method="POST" action="" class="info">

                <h3 class='c-deepBlue'>téléphone</h3>

                <input id="dataPhone" class="data c-deepBlue" type="tel" name="phone" value="phone" placeholder="nouveau numéro de téléphone"
                    title="votre numéro de téléphone actuel" disabled>

                <button id="changeDataPhone" type="button" class="btn btn-deepBlue b-deepBlue c-white"
                    title="modifier le numéro de téléphone">modifier</button>

                <div id="changingDataPhone" class="btns none">
                    <input id="validateDataPhone" class="btn btn-deepBlue b-deepBlue c-white" type="submit"
                        value="valider" title="annuler la modification du numéro de téléphone">
                    <button id="cancelDataPhone" type="button" class="btn btn-pinkOrange b-pinkOrange c-white"
                        title="modifier le mot de passe">annuler</button>
                </div>

            </form>
            <form method="POST" action="" class="info">

                <h3 class='c-deepBlue'>mot de passe</h3>

                <input id="dataPassword" class="data c-deepBlue" type="password" name="password" placeholder="nouveau mot de passe"
                    value="mot de passe" title="votre mot de passe actuel" disabled>

                <button id="changeDataPassword" type="button" class="btn btn-deepBlue b-deepBlue c-white"
                    title="modifier le mot de passe">modifier</button>

                <div id="changingDataPassword" class="btns none">
                    <input id="validateDataPassword" class="btn btn-deepBlue b-deepBlue c-white" type="submit"
                        value="valider" title="annuler la modification du mot de passe">
                    <button id="cancelDataPassword" type="button" class="btn btn-pinkOrange b-pinkOrange c-white"
                        title="modifier le mot de passe">annuler</button>
                </div>

            </form>
        </div>
        <button class="back btn btn-lightPink b-lightPink c-white backToProfile">retour</button>
    </section>
    <?php else: ?>
    <section id="account-one" class="account-one">
        <div class="text">
            <h1 class="title c-deepBlue">Bienvenue <?php echo $profile["firstname"] ?> !</h1>
        </div>

        <div class="buttons">
            <a href="/admin" class="btn btn-deepBlue b-deepBlue c-white">gestion du site</a>
        </div>
    </section>
    <?php endif?>
</main>

<?php include "./inc/foot.php";?>