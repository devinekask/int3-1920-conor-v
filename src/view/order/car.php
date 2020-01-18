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
    <form action="index.php?page=car" method="post">
      <?php
        $verzend = 1.95;
        $total = 0;
        foreach($_SESSION['cart'] as $item):
          $itemTotal = $item['product']['prijs'] * $item['quantity'];
          $total += $itemTotal;
      ?>
      <img class="foto__car" src="<?php echo $item['product']['foto'] ?>" alt="">
      <p><?php echo $item['product']['naam'] ?></p>
      <input type="number" name="quantity[<?php echo $item['product']['id'];?>]" value="<?php echo $item['quantity'];?>">
      <p><?php echo $item['product']['prijs'] ?></p>
      <button type="submit" class="" name="remove" value="<?php echo $item['product']['id'];?>">X</button>
      <?php endforeach; ?>

      <p><button type="submit" id="update-cart" class="btn" name="action" value="update">Update Cart</button></p>

      <div>
        <p>Order totaal: <?php echo '&euro;' . $total?></p>
        <p>Verzend kosten: &euro;1,95</p>
        <p>Totaal: <?php echo '&euro;' . ($total + $verzend) ?></p>
      </div>
      
    </form>
  <?php };?>
</section>