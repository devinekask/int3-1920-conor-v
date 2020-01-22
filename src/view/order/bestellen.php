<section class="betaalform__container">
  <h2 class="hidden">form stap2</h2>
  <article>
    <h3 class="hidden">stappen form</h3>
    <ul class="betaalform__stappen">
      <li class="betaalform__stappen--stap">Begin</li>
      <li class="betaalform__stappen--stap stap--active">Bestellen</li>
      <li class="betaalform__stappen--stap">Betalen</li>
      <li class="betaalform__stappen--stap">Bevesteging</li>
    </ul>
  </article>

  <article>
    <h3 class="betaalform__title">Levering adres</h3>
    <form class="betaal__metode__form" action="index.php?page=bestellen" method="post">
      <div class="betaalform__inputwrapper">
        <label class="betaalform__input" for="straat">*Straat:
          <input class="betaalform__input--tekst" type="text" name="straat" id="straat" required>
        </label>

        <label class="betaalform__input" for="nummer">*Nummer:
          <input class="betaalform__input--tekst" type="number" name="nummer" id="nummer" required>
        </label>

        <label class="betaalform__input" for="gemeente">*Stad:
          <input class="betaalform__input--tekst" type="text" name="gemeente" id="gemeente" required>
        </label>

        <label class="betaalform__input" for="postcode">*Postcode:
          <input class="betaalform__input--tekst" type="number" name="postcode" id="postcode" required>
        </label>


        <h3 class="betaalform__title">Factuur adres</h3>

        <label class="betaalform__input" for="facstraat">Straat:
          <input class="betaalform__input--tekst" type="text" name="facstraat" id="facstraat">
        </label>

        <label class="betaalform__input" for="facnummer">Nummer:
          <input class="betaalform__input--tekst" type="number" name="facnummer" id="facnummer">
        </label>

        <label class="betaalform__input" for="facgemeente">Stad:
          <input class="betaalform__input--tekst" type="text" name="facgemeente" id="facgemeente">
        </label>

        <label class="betaalform__input" for="facpostcode">Postcode:
          <input class="betaalform__input--tekst" type="number" name="facpostcode" id="facpostcode">
        </label>
      </div>

      <div class="betaalform__totaal">
          <div class="car__totaal">
            <h4 class="car__totaal__titel">Begin info</h4>
            <p class="car__totaal--fullname"><?php echo $info['naam'] ?></p>
            <p class="car__totaal--email"><?php echo $info['email'] ?></p>

            <h4 class="car__totaal__titel">Opsomming</h4>
            <p class="car__totaal--producten">Order totaal: &euro;<?php echo  $info['totaal'] - $verzendkosten?></p>
            <p class="car__totaal--verzend">Verzend kosten: &euro;<?php echo $verzendkosten ?></p>
            <p class="car__totaal--totaal">Totaal: &euro;<?php echo $info['totaal'] ?></p>
          </div>
          <button class="car__betaalbutton" type="submit" name="action" value="betalen">Betalen &rarr;</button>
      </div>
    </form>
  </article>
</section>
