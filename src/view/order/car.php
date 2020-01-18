<section>
  <div class="carleeg__wrapper">
    <h2 class="details__title">HUMO/winkelmand</h2>
    <?php if (empty($_SESSION['cart'])){ ?>
    <div class="carleeg__content">
      <img class="carleeg__foto" srcset="./assets/carplaceholder_G.png 600w,
                  ./assets/carplaceholder_K.png 500w"
       src="./assets/carplaceholder_K.png" alt="jos het debiele ei">
      <p class='carleeg__tekst'>Je winkelmandje is leeg!</p>
      <a class="carleeg__knop" href="index.php"> Verder shoppen</a>
    </div>
  </div>
    <?php }else {?>
    <form class="car__form" action="index.php?page=car" method="post">
      <div>
        <?php
          $verzend = 1.95;
          $total = 0;
          foreach($_SESSION['cart'] as $item):
            $itemTotal = $item['product']['prijs'] * $item['quantity'];
            $total += $itemTotal;
        ?>
        <div class="car__item__wrapper">
          <img class="car__foto" src="<?php echo $item['product']['foto'] ?>" alt="">
          <h3 class="car__title"><?php echo $item['product']['naam'] ?></h3>
          <div class="car__info">
            <input type="number" name="quantity[<?php echo $item['product']['id'];?>]" value="<?php echo $item['quantity'];?>">
            <p class="car__prijs"><?php echo $item['product']['prijs'] ?></p>
            <button type="submit" class="car__delete" name="remove" value="<?php echo $item['product']['id'];?>">X</button>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      
      <div>
        <p class="car__update"><button class="car__update--link" type="submit" id="update-cart" class="btn" name="action" value="update">Update Cart</button></p>

        <div class="car__totaal">
          <p class="car__totaal--producten">Order totaal: <?php echo '&euro;' . $total?></p>
          <p class="car__totaal--verzend">Verzend kosten: &euro;1,95</p>
          <p class="car__totaal--totaal">Totaal: <?php echo '&euro;' . ($total + $verzend) ?></p>
        </div>

        <div class="car__buttons">
        <a class="car__button--rood" href="index.php">&#8592; verder shoppen</a>
          <form method="post" action="index.php?page=car">
            <input type="hidden" name="betalen" value="betalen" />
            <button class="car__betaalbutton" type="submit" name="action" value="add">betalen&rarr;</button>
          </form>
        </div>
      </div>

    </form>
  <?php };?>
</section>
