<section class="details">
  <h2 class="details__title"><?php echo $item['naam'] ?></h2>
  <div class="details__wrapper">
    <img class="details__img" src="<?php echo $item['foto']?>" alt="<?php echo $item['naam']?>">
    <article class="details__container">
      <h3 class="hidden">product data</h3>
        <?php if ($item['category'] == 'boeken' &&  $item['id'] != '1'):?>
          <div class="details__toggles">
            <a class="details__toggle <?php if ($_GET['cat'] == "e-book"){echo 'details__toggle--active';}?>"
              href="index.php?page=details&amp;id=<?php echo $item['id']?>&amp;cat=e-book">E-book</a>
            <a class="details__toggle <?php if ($_GET['cat'] == "" || $_GET['cat'] == "papier"){ echo 'details__toggle--active';}?>"
            href="index.php?page=details&amp;id=<?php echo $item['id']?>&amp;cat=papier">Papiere versie</a>
          </div>
        <?php endif;?>
      <p class="details__price"><?php if ($item['id'] == '3' && ($_GET['cat'] == '' || $_GET['cat'] == 'papier')){
        echo '<span class="korting">&euro;12,99</span> met code &euro;4,99';
      }
      elseif ($_GET['cat'] == 'e-book'){
        echo '&euro;' . $item['prijsEbook'];
      }else {
        echo '&euro;' . $item['prijs'];
      }?></p>
      <p class="details__categorie">Categorie: <?php echo $item['category']  ?></p>
      <p class="details__tekst"><?php echo $item['beschrijving'] ?></p>
      <?php if ($item['voorraad'] == true){
        echo '<p class="invooraad">in voorraad</p>';
      } else {
        echo '<p class="nietvoorraad">niet in voorraad</p>';
      } ?>
      <div class="details__buttons">
        <form method="post" action="index.php?page=car">
          <input type="hidden" name="product_id" value="<?php echo $item['id'];?>" />
          <button class="promo__carbutton" type="submit" name="action" value="add">+ in winkelmand doen</button>
        </form>
        <a class="details__button--rood" href="index.php">&#8592; verder shoppen</a>
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
          <div class="promo__buttons product__buttons">
            <form method="post" action="index.php?page=car">
              <input type="hidden" name="product_id" value="<?php echo $rand['id'];?>" />
              <button class="promo__carbutton" type="submit" name="action" value="add"><img src="../assets/cart.png" alt="cart">+</button>
            </form>
          </div>
        </div>
      </article>
  <?php endforeach; ?>
  </div>
</section>
