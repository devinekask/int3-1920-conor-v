<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <?php echo $css;?>
  </head>
  <body>
    <header>
      <nav class="nav">
          <div class="nav__deel1">
            <div class="menu--open">
              <label class="hamburger__menu" for="toggle">&#9776</label>
              <input class="toggle" type="checkbox" id="toggle">
              <ul class="menu">
                <li class="menu__item"><a class="item__link" href="#">home</a></li>
                <li class="menu__item menu__item--yellow"><a class="item__link" href="#">humo@festivals</a></li>
                <li class="menu__item"><a class="item__link" href="#">humor</a></li>
                <li class="menu__item menu__item--red"><a class="item__link" href="#">video</a></li>
                <li class="menu__item"><a class="item__link" href="#">fotospecials</a></li>
                <li class="menu__item"><a class="item__link" href="#">nu in humo</a></li>
                <li class="menu__item"><a class="item__link" href="#">tv/film</a></li>
                <li class="menu__item"><a class="item__link" href="#">actua</a></li>
                <li class="menu__item"><a class="item__link" href="#">muziek</a></li>
                <li class="menu__item"><a class="item__link" href="#">boeken</a></li>
                <li class="menu__item"><a class="item__link" href="index.php">shop</a></li>
                <li class="menu__item"><a class="item__link" href="#">humo sapiens</a></li>
            </ul>
          </div>
            <img src="./assets/scearch.png" alt="vergroot glas">
          </div>
          <a class="logo nav__deel2" href="index.php">HUMO</a>
          <div class="nav__deel3">
            <a class="car__link" href=""><img src="./assets/cart.png" alt="car">(<?php echo '0' ?>)</a>
            <img src="./assets/acount.png" alt="acount">
          </div>

      </nav>
    </header>
    <main>
      <?php echo $content;?>
    </main>
    <footer class="footer">
      <a class="fo__link" href="#">neem een abonnement</a>
      <ul class="fo__menu">
        <li class="fo__menu__item"><a class="fo__menu__item--link" href="#">naar de volledige website</a></li>
        <li class="fo__menu__item"><a class="fo__menu__item--link" href="#">colofon</a></li>
        <li class="fo__menu__item"><a class="fo__menu__item--link" href="#">contact</a></li>
        <li class="fo__menu__item"><a class="fo__menu__item--link" href="#">cookie instellingen</a></li>
      </ul>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
