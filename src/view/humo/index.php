<section class="promo">
  <h2 class="promo__title">promo actie: boek van de week</h2>
  <img src="../assets/promoboek.png" alt="promo boek">
  <h3 class="promo__boek__title">Farenheit 451 Ray Bradbury</h3>
  <div class="promo__info">
    <p class="promo__info__price">&euro;12,99</p>
    <p class="promo__info__slogan">100% lees plezier</p>
  </div>
  <div class="promo__buttons">
    <a class="promo__carbutton" href="#"><img src="../assets/cart.png" alt="cart">+</a>
    <a class="promo__moreinfo" href="index.php?page=details&amp;id=3">meer info</a>
  </div>
  <div class="promo__action">
    <p class="promo__action__text">Met <span>humo code</span> is het nog maar &euro;4,99</p>
  </div>
  <a class="promo__longread" href="#">beleef het boek van de week &rarr;</a>
</section>

<section>
  <h2 class="hidden">filter producten</h2>

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
          <a class="promo__moreinfo" href="index.php?page=details&amp;id=<?php echo $item['id'] ?>">meer info</a>
        </div>
      </div>
    </article>
  <?php endforeach; ?>
</section>
