<section class="betaalform__container">
<h2 class="hidden">form bevestiging</h2>
  <article>
    <h3 class="hidden">stappen form</h3>
    <ul class="betaalform__stappen">
      <li class="betaalform__stappen--stap">Begin</li>
      <li class="betaalform__stappen--stap">Bestellen</li>
      <li class="betaalform__stappen--stap ">Betalen</li>
      <li class="betaalform__stappen--stap stap--active">Bevesteging</li>
    </ul>
  </article>

  <article>
    <h3 class="hidden"> danku voor u bestelling</h3>
    <div class="bevestig__danku--wrapper">
      <p class="bevestig__danku">Dank u voor u bestelling een email met bevestigings info wordt verstuurd</p>
      <p class="bevestig__traking">tracing code: <span><?php echo $trackingcode ?></span></p>
    </div>
    <div class="bevestig__items">
      <?php foreach($_SESSION['cart'] as $item): ?>
        <div class="bevestig__item">
          <img class="bevestig__foto" src="<?php echo $item['product']['foto'] ?>" alt="<?php echo $item['product']['naam'] ?>">
          <p><?php echo $item['product']['naam'] ?></p>
          <p><?php echo $item['quantity']?>x</p>
        </div>
      <?php endforeach ?>
      <p class="bevestig__totaal">totaal: &euro;<?php echo $info['totaal'] ?></p>
    </div>

    <form class="bevestig__form" method="post" action="index.php?page=bevestiging">
      <input type="hidden" name="destroy" value="destroy"/>
      <button class="car__betaalbutton bevestig__knop" type="submit" name="action" value="bevestiging">Terug naar de shop</button>
    </form>
  </article>
</section>


