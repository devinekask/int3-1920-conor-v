<section class="promo">
  <h2 class="hidden">promo</h2>
  <article class="promo__article">
    <h2 class="promo__title">promo actie: boek van de week</h2>
    <div class="promo__article__wrapper">
      <img class="promo__productfoto" src="../assets/promoboek.png" alt="promo boek">
      <div class="promo__text__wrapper">
        <h3 class="promo__boek__title">Farenheit 451 Ray Bradbury</h3>
        <p class="promo__tekst">Een tekstje over het product en waar het voor gebruikt moet geworden.
          Alle pluspunten en negatieve punten worden opgelijst over het product.
          Een tekstje over het product en waar het voor gebruikt moet geworden.
          Alle pluspunten en negatieve punten worden opgelijst over het product.</p>
      </div>
      <div class="promo__info">
        <p class="promo__info__price">&euro;12,99</p>
        <p class="promo__info__slogan">100% lees plezier</p>
      </div>
      <div class="promo__buttons">
        <a class="promo__carbutton" href="#"><img src="../assets/cart.png" alt="cart">+</a>
        <a class="promo__moreinfo" href="index.php?page=details&amp;id=3&amp;cat=">meer info</a>
      </div>
      <div class="promo__action">
        <p class="promo__action__text">Met <span>humo code</span> is het nog maar &euro;4,99</p>
      </div>
    </div>
    <a class="promo__longread" href="#">beleef het boek van de week &rarr;</a>
  </article>
</section>

<section class="form__container">
  <h2 class="hidden">filter producten</h2>
  <form action="index.php" class="filter__form" method="get">
    <input type="hidden" name="action" value="filter"/>

    <label for="alles">
      <input class="radio" type="radio" id="alles" name="cat" value="alles" checked <?php if (isset($_GET['cat'])) {if ($_GET['cat'] == 'alles') {echo ' checked';}}?>>
      <span class="form__toggle__button">Alles</span>
    </label>

    <!-- WAARDES UIT DB HALEN -->
    <?php foreach($categories as $categorie): ?>
      <label for="<?php echo $categorie['category'];?>">
        <input class="radio" type="radio" id="<?php echo $categorie['category'];?>" name="cat" value="<?php echo $categorie['category'];?>"
          <?php if (isset($_GET['cat'])) {
            if ($_GET['cat'] == $categorie['category']) {
              echo ' checked';}}?>>
        <span class="form__toggle__button"><?php echo $categorie['category'];?></span>
      </label>
    <?php endforeach;?>

    <input type="submit" value="Filter" class="form__submit input input--button">
  </form>
</section>

<section class="product__container">
  <h2 class="hidden">producten</h2>
  <?php foreach($items as $item): ?>
    <article class="product">
      <div class="product__img__container">
        <img class="product__img" src="<?php echo $item['foto'] ?>" alt="<?php $item['naam'] ?>">
      </div>
      <div class="product__detials">
        <h3 class="product__title"><?php echo $item['naam'] ?></h3>
        <p class="product__price"><?php if($item['id'] == '3') {
          echo '<span class="korting">&euro;12,99</span> met code &euro;4,99';
        }else { echo '&euro;' . $item['prijs'];} ?></p>
        <div class="promo__buttons product__buttons">
          <a class="promo__carbutton" href="#"><img src="../assets/cart.png" alt="cart">+</a>
          <a class="promo__moreinfo" href="index.php?page=details&amp;id=<?php echo $item['id']?>&amp;cat=">meer info</a>
        </div>
      </div>
    </article>
  <?php endforeach; ?>
</section>
