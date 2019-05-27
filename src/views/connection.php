<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./../../../styles/style.css">
    <link rel="shortcut icon" href="./../../../favicon.ico" type="image/x-icon">
    <script src="./../../../scripts/style.js"></script>
    <title>Mille Et Une Pousses</title>
</head>

<body>

    <main class="connexionPage b-beige">

        <img class="leaf leaf-1 leaf_1" src="./../media/leafs/leaf1_1.png" alt="leaf">
        <img class="leaf leaf-2 leaf_1" src="./../media/leafs/leaf1_1.png" alt="leaf">
        <img class="leaf leaf-3 leaf_1" src="./../media/leafs/leaf1_2.png" alt="leaf">
        <img class="leaf leaf-4 leaf_1" src="./../media/leafs/leaf1_2.png" alt="leaf">
        <img class="leaf leaf-5 leaf_2" src="./../media/leafs/leaf2_2.png" alt="leaf">
        <img class="leaf leaf-6 leaf_2" src="./../media/leafs/leaf2_2.png" alt="leaf">
        <img class="leaf leaf-7 leaf_3" src="./../media/leafs/leaf3_1.png" alt="leaf">
        <img class="leaf leaf-8 leaf_3" src="./../media/leafs/leaf3_2.png" alt="leaf">

        <a href="/" class="back btn btn-pinkOrange b-pinkOrange">
            <i class="fas fa-arrow-left c-white"></i>
            <p class="c-white">accueil</p>
        </a>

        <section id="connexion-one" class="connexion connexion-one b-white">
            <span class="circle b-lightPink"></span>
            <h1 class="c-deepBlue">se connecter</h1>
            <form method="POST" action="/user/verification">
                <input class="text b-white c-deepBlue" type="email" name="email" placeholder="adresse mail">
                <input class="text b-white c-deepBlue" type="password" name="password" placeholder="mot de passe">
                <p class="c-deepBlue">Rentrez votre adresse mail ainsi que votre mot de passe afin de vous connecter</p>
                <input class="btn btn-pinkOrange b-pinkOrange c-white" type="submit" value="valider">
                <button id="forgotPassword" class="forgotPassword btn btn-pinkOrange b-pinkOrange c-white" type="button">mot de passe oublié ?</button>
                <button id="createAccount" class="newAccount btn btn-pinkOrange b-pinkOrange c-white" type="button">pas encore de compte ?</button>
                <?php if (isset($validation) && is_string($validation)): ?>
                <p class="c-lightPink"><?php echo "&#9888; " . $validation ?></p>
                <?php endif?>
            </form>
        </section>

        <section id="connexion-two" class="connexion connexion-two b-white height">
            <span class="circle b-lightPink"></span>
            <h1 class="title c-deepBlue">créer ton compte</h1>
            <form method="POST" action="/user/createnew">
                <div class="container">
                    <div id="createAccount1">
                        <input class="text b-white c-deepBlue" type="text" name="lastname" placeholder="nom *">
                        <input class="text b-white c-deepBlue" type="text" name="firstname" placeholder="prénom *">
                        <input class="text b-white c-deepBlue" type="tel" name="phone" placeholder="téléphone">
                        <input class="text b-white c-deepBlue" type="text" name="address" placeholder="adresse">
                        <div class="btns">
                            <button class="btn btn-pinkOrange b-pinkOrange c-white backToConnexion"
                                type="button">retour</button>
                            <button id="PartOneCreateAcount" class="btn btn-pinkOrange b-pinkOrange c-white"
                                type="button">suivant</button>
                        </div>
                        <?php if (isset($createAccount) && is_string($createAccount)): ?>
                        <p class="c-lightPink"><?php echo "&#9888; " . $createAccount ?></p>
                        <?php endif?>
                    </div>
                    <div id="createAccount2" class="none">
                        <input class="text b-white c-deepBlue" type="email" name="email" placeholder="adresse mail *">
                        <input class="text b-white c-deepBlue" type="password" name="password" placeholder="mot de passe *">
                        <input class="text b-white c-deepBlue" type="password" name="password_confirmation"
                            placeholder="confirmation mot de passe *">
                        <div class="btns">
                            <button id="PartTwoCreateAcount" class="btn btn-pinkOrange b-pinkOrange c-white"
                                type="button">retour</button>
                            <input class="btn btn-pinkOrange b-pinkOrange c-white" type="submit" value="valider">
                        </div>
                    </div>
                </div>
                <p class="c-lightPink">* Champs obligatoire</p>
            </form>
        </section>

        <section id="connexion-three" class="connexion connexion-three b-white">
            <span class="circle b-lightPink"></span>
            <h1 class="title c-deepBlue">mot de passe oublié ?</h1>
            <form method="POST" action="">
                <input class="text b-white c-deepBlue" type="email" name="email" placeholder="adresse">
                <p class="c-deepBlue">Rentrez votre adresse mail, nous vous enverrons un mail afin de réinitialiser
                    votre mot de passe</p>
                <div class="btns">
                    <button class="btn btn-pinkOrange b-pinkOrange c-white backToConnexion"
                        type="button">retour</button>
                    <input class="btn btn-pinkOrange b-pinkOrange c-white" type="submit" value="valider">
                </div>
            </form>
        </section>
    </main>