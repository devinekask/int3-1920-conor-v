<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/favicon.png" type="image/gif">
    <title><?php echo $title; ?></title>
    <?php echo $css;?>
  </head>
    <?php if ($title == 'longread'){
      echo $content;
    } else { ?>
    <body>
    <h1 class="hidden">humo shop</h1>
    <header>
      <nav class="nav--mobiel">
        <h2 class="hidden">nav mobiel</h2>
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
            <a class="car__link" href="index.php?page=car"><img src="./assets/cart.png" alt="car"><?php echo "(" . $numItems . ")" ?></a>
            <img src="./assets/acount.png" alt="acount">
          </div>
      </nav>

      <nav class="nav--pc">
        <h2 class="hidden"> nav pc</h2>
        <div class="header__deel1">
          <ul class="header__deel1_items">
            <li class="header__deel1_item"><a class="header__deel1_item--link video--red" href="#">video</a></li>
            <li class="header__deel1_item"><a class="header__deel1_item--link" href="#">tv-gids</a></li>
            <li class="header__deel1_item"><a class="header__deel1_item--link" href="#">zoekertjes</a></li>
            <li class="header__deel1_item"><a class="header__deel1_item--link" href="#">abonnement nemen</a></li>
          </ul>
          <ul class="header__deel1_items">
            <li class="header__deel1_item"><a class="header__deel1_item--link" href="#">nu in humo</a></li>
            <li class="header__deel1_item"><a class="header__deel1_item--link" href="#">login</a></li>
            <li class="header__deel1_item"><a class="header__deel1_item--link" href="#">registreer</a></li>
          </ul>
        </div>

        <div class="header__deel2__container">
          <div class="header__deel2">
            <ul class="header__deel2_items">
              <li class="header__deel2_item"><a class="header__deel2_item--link" href="#">home</a></li>
              <li class="header__deel2_item"><a class="header__deel2_item--link" href="#">actua</a></li>
              <li class="header__deel2_item"><a class="header__deel2_item--link" href="#">humor</a></li>
              <li class="header__deel2_item nav__deel2__item"><a class="header__deel2_item--link" href="#">tv/film</a></li>
            </ul>
            <a href="index.php"><img src="../assets/humologo.png" alt="humo logo"></a>
            <ul class="header__deel2_items">
              <li class="header__deel2_item"><a class="header__deel2_item--link" href="#">muziek</a></li>
              <li class="header__deel2_item"><a class="header__deel2_item--link" href="#">boeken</a></li>
              <li class="header__deel2_item"><a class="header__deel2_item--link active--link" href="index.php">shop</a></li>
              <li class="header__deel2_item"><a class="car__link" href="index.php?page=car"><img src="../assets/cart.png" alt="car">(<span class="car__rood"><?php echo $numItems ?></span>)</a></li>
              <li class="header__deel2_item nav__deel2__item"><img src="../assets/scearch.png" alt="zoeken"></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <?php echo $content;?>
    </main>
    <footer class="footer--mobiel">
      <a class="fo__link" href="#">neem een abonnement</a>
      <ul class="fo__menu">
        <li class="fo__menu__item"><a class="fo__menu__item--link" href="#">naar de volledige website</a></li>
        <li class="fo__menu__item"><a class="fo__menu__item--link" href="#">colofon</a></li>
        <li class="fo__menu__item"><a class="fo__menu__item--link" href="#">contact</a></li>
        <li class="fo__menu__item"><a class="fo__menu__item--link" href="#">cookie instellingen</a></li>
      </ul>
    </footer>

    <footer class="footer--pc">
      <section class="footer--pc__deel1">
        <h2 class="hidden">footer deel1</h2>
       <ul class="footer__list">
         <li class="footer__list__item"><a class="footer__list__item--link cap--link" href="#">Actua</a></li>
         <li class="footer__list__item"><a class="footer__list__item--link" href="#">nu in humo</a></li>
         <li class="footer__list__item"><a class="footer__list__item--link" href="#">de columns</a></li>
         <li class="footer__list__item"><a class="footer__list__item--link" href="#">dossiers</a></li>
         <li class="footer__list__item"><a class="footer__list__item--link" href="#">politiek</a></li>
         <li class="footer__list__item"><a class="footer__list__item--link" href="#">sport</a></li>
         <li class="footer__list__item"><a class="footer__list__item--link" href="#">onze man/vrouw</a></li>
         <li class="footer__list__item"><a class="footer__list__item--link" href="#">eerder in humo</a></li>
         <li class="footer__list__item"><a class="footer__list__item--link" href="#">de eindejaarsvragen</a></li>
        </ul>

        <ul class="footer__list">
          <li class="footer__list__item"><a class="footer__list__item--link cap--link" href="#">Humor</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">fotospecials</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">cartoons</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">uitlaat</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">(bulderlacht)</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">doe het zelf</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">humo's comedy cup</a></li>
        </ul>

        <ul class="footer__list">
          <li class="footer__list__item"><a class="footer__list__item--link cap--link" href="#">Tv/Film</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">tv-gids</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">tv-tips</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">tv-reviews</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">filmreviews</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">de 100 beste films volgens (es)</a></li>
        </ul>

        <ul class="footer__list">
          <li class="footer__list__item"><a class="footer__list__item--link cap--link" href="#">Muziek</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">concertreviews</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">cd-reviews</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">humo's rock rally</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">festivalitis</a></li>
        </ul>

        <ul class="footer__list">
          <li class="footer__list__item"><a class="footer__list__item--link cap--link" href="#">Boeken</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">reviews</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">fictie</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">non-fictie</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">het lezen zoals het is</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">de grootste schrijvers van deze tijd</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link cap--link cap--link--middel" href="#">Ga naar</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">video</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">foto's</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">wedstrijden</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">zoekertjes</a></li>
          <li class="footer__list__item"><a class="footer__list__item--link" href="#">apps</a></li>
        </ul>
      </section>
      <section class="footer--pc__deel2">
        <h2 class="hidden">footer deel2</h2>
        <article class="deel2--article1">
          <h3 class="hidden">links</h3>
          <ul class="begeleid__list">
            <li class="begeleid__list__item"><a class="begeleid__list__item--link" href="#">Privacybeleid</a></li>
            <li class="begeleid__list__item"><a class="begeleid__list__item--link" href="#">Wedstrijdregelement</a></li>
            <li class="begeleid__list__item"><a class="begeleid__list__item--link" href="#">Adverteren</a></li>
            <li class="begeleid__list__item"><a class="begeleid__list__item--link" href="#">Gebruikersvoorwaarden</a></li>
            <li class="begeleid__list__item"><a class="begeleid__list__item--link" href="#">Cookiebegeleid</a></li>
            <li class="begeleid__list__item"><a class="begeleid__list__item--link" href="#">Cookie instellingen</a></li>
            <li class="begeleid__list__item"><a class="begeleid__list__item--link" href="#">Contact</a></li>
            <li class="begeleid__list__item"><a class="begeleid__list__item--link" href="#">Colofon</a></li>
          </ul>
          <div class="footer__socialmedia">
            <img class="footer_sm_facebook" src="../assets/facebooklogo.png" alt="facebook">
            <img class="footer_sm_twitter" src="../assets/twitterlogo.png" alt="twitter">
          </div>
        </article>
        <article  class="deel2--article2">
          <h3 hidden="hidden">sponsers</h3>
          <div class="footer__deel2__onderste">
            <img class="onderstedeel" src="../assets/dpglogo.png" alt="dpg logo">
            <p class="onderstedeel">&copy;2019 DPG Media</p>
            <p class="onderstedeel link--mobiel">Naar de mobiele site</p>
          </div>
          <div>
            <img src="../assets/sponsers.png" alt="sponsers">
          </div>
        </article>
      </section>
    </footer>
    <?php echo $js; ?>
  </body>
  <?php } ?>
</html>
