<section class="details">
  <h2 class="details__title"><?php echo $item['naam'] ?></h2>
  <div class="details__wrapper">
    <img class="details__img" src="<?php echo $item['foto_groot'];?>" alt="<?php echo $item['naam']?>">
    <article class="details__container">
      <h3 class="hidden">product data</h3>
      <div class="details__toggles">
        <?php foreach($options as $option): ?>
          <a href="index.php?page=details&id=<?php echo $option['product_id']?>&details_id=<?php echo $option['details_id']?>"
          class="details__toggle <?php if ($option['details_id'] == $item['details_id']) echo 'details__toggle--active'; ?>">
          <?php echo $option['optie']?></a>
        <?php endforeach; ?>
      </div>
      <p class="details__price"><?php if ($item['product_id'] == '3' && ($_GET['details_id'] == '2')){
        echo '<span class="korting">&euro;12,99</span> met code &euro;4,99';
      }else {
        echo '&euro;' . $item['prijs'];
      }?></p>
      <p class="details__categorie">Categorie: <?php echo $item['category']  ?></p>
      <p class="details__tekst"><?php echo $item['beschrijving'] ?></p>
      <?php if ($item['voorraad'] == 'invoorraad' || $item['voorraad'] == 'direct verkrijgbaar'){
        echo '<p class="invooraad">' . $item['voorraad'] . '</p>';
      } else {
        echo '<p class="nietvoorraad">' . $item['voorraad'] . '</p>';
      } ?>
      <div class="details__buttons">
        <form method="post" action="index.php?page=car">
          <input type="hidden" name="details_id" value="<?php echo $item['details_id'];?>" />
          <input type="hidden" name="id" value="<?php echo $item['product_id'];?>" />
          <button class="promo__carbutton details__carbutton" type="submit" name="action" value="add_detail">+ in winkelmand doen</button>
        </form>
        <a class="details__button--rood details__button--margin" href="index.php">&#8592; verder shoppen</a>
      </div>
    </article>
  </div>
</section>

<section class="extra__producten__wrapper">
  <h2 class="extra__producten__title">andere bekenen ook </h2>
  <div  class="product__container">
  <?php foreach($rands as $rand): ?>
    <article class="product">
        <div class="product__img__container">
          <img class="product__img" src="<?php echo $rand['foto'] ?>" alt="<?php $rand['naam'] ?>">
        </div>
        <div class="product__detials">
          <h3 class="product__title"><?php echo $rand['naam'] ?></h3>
          <p class="product__price"><?php if($rand['id'] == '3') {
            echo '<span class="korting">&euro;12,99</span> met code &euro;4,99';
          }else { echo '&euro;' . $rand['prijs'];} ?></p>
          <div class="promo__buttons product__buttons rand__carbutton">
            <form method="post" action="index.php?page=car">
              <input type="hidden" name="details_id" value="<?php echo $rand['details_id'];?>" />
              <button class="promo__carbutton" type="submit" name="action" value="add"><img src="../assets/cart.png" alt="cart">+</button>
            </form>
          </div>
        </div>
      </article>
  <?php endforeach; ?>
  </div>
</section>
