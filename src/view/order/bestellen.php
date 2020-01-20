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
    <form class="betaal__metode__form" action="index.php" method="post">
      <div class="betaalform__inputwrapper">
        <label class="betaalform__input" for="straat">Straat:
          <input class="betaalform__input--tekst" type="text" name="straat" id="straat">
        </label>

        <label class="betaalform__input" for="nummer">Nummer:
          <input class="betaalform__input--tekst" type="text" name="nummer" id="nummer">
        </label>

        <label class="betaalform__input" for="stad">Stad:
          <input class="betaalform__input--tekst" type="text" name="stad" id="stad">
        </label>

        <label class="betaalform__input" for="postcode">Postcode:
          <input class="betaalform__input--tekst" type="text" name="postcode" id="postcode">
        </label>


        <h3 class="betaalform__title">Factuur adres</h3>

        <label class="betaalform__input" for="straatFactuur">Straat:
          <input class="betaalform__input--tekst" type="text" name="straatFactuur" id="straatFactuur">
        </label>

        <label class="betaalform__input" for="nummerFactuur">Nummer:
          <input class="betaalform__input--tekst" type="text" name="nummerFactuur" id="nummerFactuur">
        </label>

        <label class="betaalform__input" for="stadFactuur">Stad:
          <input class="betaalform__input--tekst" type="text" name="stadFactuur" id="stadFactuur">
        </label>

        <label class="betaalform__input" for="postcodeFactuur">Postcode:
          <input class="betaalform__input--tekst" type="text" name="postcodeFactuur" id="postcodeFactuur">
        </label>
      </div>

      <div class="betaalform__totaal">
          <div class="car__totaal">
            <h4 class="car__totaal__titel">Begin info</h4>
            <p class="car__totaal--fullname">HC(fullname)</p>
            <p class="car__totaal--email">HC(email)</p>

            <h4 class="car__totaal__titel">Opsomming</h4>
            <p class="car__totaal--producten">Order totaal: HC</p>
            <p class="car__totaal--verzend">Verzend kosten: HC</p>
            <p class="car__totaal--totaal">Totaal: HC</p>
          </div>
          <button class="car__betaalbutton" type="submit" name="action" value="add">Betalen &rarr;</button>
      </div>
    </form>
  </article>
</section>
