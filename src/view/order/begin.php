<section class="betaalform__container">
  <h2 class="hidden">form stap1</h2>
  <article>
    <h3 class="hidden">stappen form</h3>
    <ul class="betaalform__stappen">
      <li class="betaalform__stappen--stap stap--active">Begin</li>
      <li class="betaalform__stappen--stap">Bestellen</li>
      <li class="betaalform__stappen--stap">Betalen</li>
      <li class="betaalform__stappen--stap">Bevesteging</li>
    </ul>
  </article>

  <article>
    <h3 class="betaalform__title">Algemene info</h3>
    <form class="betaal__metode__form" action="index.php?page=begin" method="post">
      <div class="betaalform__inputwrapper">
        <label class="betaalform__input" for="voornaam">Voornaam:
          <input class="betaalform__input--tekst" type="text" name="voornaam" id="voornaam" required>
        </label>

        <label class="betaalform__input" for="achternaam">Achternaam:
          <input class="betaalform__input--tekst" type="text" name="achternaam" id="achternaam" required>
        </label>

        <label class="betaalform__input" for="email">Email:
          <input class="betaalform__input--tekst" type="email" name="email" id="email" required>
        </label>
      </div>

      <div class="betaalform__totaal">
          <div class="car__totaal">
            <p class="car__totaal--producten">Order totaal: &euro;<?php echo  $info['totaal'] - $verzendkosten?></p>
            <p class="car__totaal--verzend">Verzend kosten: &euro;<?php echo $verzendkosten ?></p>
            <p class="car__totaal--totaal">Totaal: &euro;<?php echo $info['totaal'] ?></p>
          </div>
          <button class="car__betaalbutton" type="submit" name="action" value="adresinfo">Adres info &rarr;</button>
      </div>
    </form>
  </article>
</section>
