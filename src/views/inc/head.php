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

  <nav id="navbar" class="navUser b-beige">

    <a class="logo b-white" href="/">
      <img src="./../../../media/img/logo.png" alt="logo" title="logo de mille et une pousses">
    </a>

    <ul>

      <div>
        <li>
          <a class="c-deepBlue rout" value="blog" href="/product/listall">plantes
            <span class="underline b-deepBlue"></span>
          </a>
        </li>
        <li>
          <a class="c-deepBlue rout" value="profile" href="/subscription/info">abonnements
            <span class="underline b-deepBlue"></span>
          </a>
        </li>
        <li>
          <a class="rout" value="blog" href="/user/cart">
            <p class="c-deepBlue">panier</p>
            <span class="underline b-deepBlue"></span>
          </a>

          <?php if (count($_SESSION["cart"]) > 0): ?>
            <span class="cartValue">
              <?php echo $count = array_sum(array_map(function ($cart) {
                return $cart["quantity"];
              }, $_SESSION["cart"])) ?>
            </span>
          <?php endif?>
          
          <?php if (count($_SESSION["cart"]) == 0): ?>
          <img class="cart" src="./../../../media/img/cart-icone.png" alt="panier">
          <?php elseif ($count == 1): ?>
          <img class="cart" src="./../../../media/img/cart-icone-1.png" alt="panier">
          <?php elseif ($count == 2): ?>
          <img class="cart" src="./../../../media/img/cart-icone-2.png" alt="panier">
          <?php elseif ($count == 3): ?>
          <img class="cart" src="./../../../media/img/cart-icone-3.png" alt="panier">
          <?php elseif ($count >= 4): ?>
          <img class="cart" src="./../../../media/img/cart-icone-4.png" alt="panier">
          <?php endif?>
        </li>
      </div>

      <div>
        <li>
          <a class="c-deepBlue rout" value="produits" href="/blog/listall">blog
            <span class="underline b-deepBlue"></span>
          </a>
        </li>
        <?php if (isset($_SESSION["connected"])): ?>
        <li>
          <a class="c-deepBlue rout" value="profile" href="/user/profile">mon&nbsp;profil
            <span class="underline b-deepBlue"></span>
          </a>
        </li>
        <li>
          <form action="/user/disconnect" class="rout">
            <input class="c-deepBlue deconnexion" type="submit" value="se déconnecter">
            <span class="underline b-deepBlue"></span>
          </form>
        </li>
        <?php else: ?>
        <li>
          <a class="c-deepBlue rout" value="signin"
            href="/user/identification">s'enregistrer&nbsp;/&nbsp;se&nbsp;connecter
            <span class="underline b-deepBlue"></span>
          </a>
        </li>
        <?php endif?>
      </div>

    </ul>

  </nav>