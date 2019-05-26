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

    <main class="connexion b-beige">

    <img class="leaf leaf-1 leaf_1" src="./../media/leafs/leaf1_1.png" alt="leaf">
    <img class="leaf leaf-2 leaf_1" src="./../media/leafs/leaf1_1.png" alt="leaf">
    <img class="leaf leaf-3 leaf_1" src="./../media/leafs/leaf1_2.png" alt="leaf">
    <img class="leaf leaf-4 leaf_1" src="./../media/leafs/leaf1_2.png" alt="leaf">
    <img class="leaf leaf-5 leaf_2" src="./../media/leafs/leaf2_2.png" alt="leaf">
    <img class="leaf leaf-6 leaf_2" src="./../media/leafs/leaf2_2.png" alt="leaf">
    <img class="leaf leaf-7 leaf_3" src="./../media/leafs/leaf3_1.png" alt="leaf">
    <img class="leaf leaf-8 leaf_3" src="./../media/leafs/leaf3_2.png" alt="leaf">


        <section class="b-white">
            <span class="circle b-lightPink"></span>
            <h1 class="c-deepBlue">se connecter</h1>
            <form method="POST" action="/user/verification">
                <input class="text b-white c-deepBlue" type="email" name="email" placeholder="adresse mail">
                <input class="text b-white c-deepBlue" type="password" name="password" placeholder="mot de passe">
                <p class="c-deepBlue">Rentrez votre adresse mail ainsi que votre mot de passe afin de vous connecter</p>
                <input class="btn btn-pinkOrange b-pinkOrange c-white" type="submit" value="valider">
                <a class="c-lightPink" href="">mot de passe oublié ?
                    <span class="underline b-lightPink"></span>
                </a>
                <?php if (isset($validation) && is_string($validation)): ?>
                <p class="c-lightPink"><?php echo "&#9888; " . $validation ?></p>
<?php elseif (isset($validation) && is_array($validation)): ?>
                <p class="c-deepBlue"><?php echo "User ID: " . $validation["id"] ?></p>
                <?php endif?>
            </form>
        </section>
    </main>
