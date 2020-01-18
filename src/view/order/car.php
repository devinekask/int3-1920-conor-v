<section>
  <h2 class="details__title">HUMO/winkelmand</h2>
  <form action="index.php?page=car" method="post">
    <?php
      $total = 0;
      foreach($_SESSION['cart'] as $item):
        $itemTotal = $item['product']['prijs'] * $item['quantity'];
        $total += $itemTotal;
    ?>
    <img class="foto__car" src="<?php echo $item['product']['foto'] ?>" alt="">
    <p><?php echo $item['product']['naam'] ?></p>
    <input type="number" name="" value="<?php echo $item['quantity'];?>">
    <p><?php echo $item['product']['prijs'] ?></p>
    <button type="submit" class="" name="remove" value="<?php echo $item['product']['id'];?>">X</button>


    <?php endforeach; ?>
  </form>
</section>
