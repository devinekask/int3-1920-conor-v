<section>
  <h2 class="hidden">form stap3</h2>
  <article>
    <h3 class="hidden">stappen form</h3>
    <ul class="betaalform__stappen">
      <li class="betaalform__stappen--stap">Begin</li>
      <li class="betaalform__stappen--stap">Bestellen</li>
      <li class="betaalform__stappen--stap stap--active">Betalen</li>
      <li class="betaalform__stappen--stap">Bevesteging</li>
    </ul>
  </article>

  <article>
    <h3 class="betaalform__title">Betaal methode</h3>
    <form action="index.php" methode="post">
      <div class="betaalform__inputwrapper">
        <label for="paypal">
          <input class="radio" type="radio" id="paypal" name="betaal" value="paypal" checked>
          <span class="form__toggle__button">PayPal</span>
          <img src="./assets/betaalmethodes/paypal.png" alt="PayPal">
        </label>

        <label for="Bancontact/MisterCash">
          <input class="radio" type="radio" id="Bancontact/MisterCash" name="betaal" value="Bancontact/MisterCash">
          <span class="form__toggle__button">Bancontact/MisterCash</span>
          <img src="./assets/betaalmethodes/bancontact.png" alt="Bancontact/MisterCash">
        </label>

        <label for="Maestro">
          <input class="radio" type="radio" id="Maestro" name="betaal" value="Maestro">
          <span class="form__toggle__button">Maestro</span>
          <img src="./assets/betaalmethodes/maestro.png" alt="Maestro">
        </label>

        <label for="Mastercard">
          <input class="radio" type="radio" id="Mastercard" name="betaal" value="Mastercard">
          <span class="form__toggle__button">Mastercard</span>
          <img src="./assets/betaalmethodes/mastercard.png" alt="Mastercard">
        </label>

        <label for="VISA">
          <input class="radio" type="radio" id="VISA" name="betaal" value="VISA">
          <span class="form__toggle__button">VISA</span>
          <img src="./assets/betaalmethodes/visa.png" alt="VISA">
        </label>

        <label for="vooruitbetaling">
          <input class="radio" type="radio" id="vooruitbetaling" name="betaal" value="vooruitbetaling">
          <span class="form__toggle__button">vooruitbetaling per bank</span>
        </label>


        <h3 class="betaalform__title">Aflever methode</h3>

        <label for="post">
          <input class="radio" type="radio" id="post" name="verzend" value="post" checked>
          <span class="form__toggle__button">PostNl brieven post (niet traceerbaar)</span>
          <span class="form__toggle__button">Geschatte levertijd: 1-2 werkdagen</span>
          <span class="form__toggle__button">&euro;1,95</span>
        </label>

        <label for="pakket">
          <input class="radio" type="radio" id="pakket" name="verzend" value="pakket">
          <span class="form__toggle__button">PostNl pakket</span>
          <span class="form__toggle__button">Geschatte levertijd: 1 dag</span>
          <span class="form__toggle__button">&euro;4,95</span>
        </label>
      </div>

      <div class="betaalform__totaal">
          <div class="car__totaal">
            <h4 class="car__totaal__titel">Begin info</h4>
            <p class="car__totaal--fullname">HC(fullname)</p>
            <p class="car__totaal--email">HC(email)</p>

            <h4 class="car__totaal__titel">Bestel info</h4>
            <p class="car__totaal--fullname">HC(straat nummer)</p>
            <p class="car__totaal--email">HC(stad postcode)</p>

            <h4 class="car__totaal__titel">Opsomming</h4>
            <p class="car__totaal--producten">Order totaal: HC</p>
            <p class="car__totaal--verzend">Verzend kosten: HC</p>
            <p class="car__totaal--totaal">Totaal: HC</p>
          </div>
          <button class="car__betaalbutton" type="submit" name="action" value="add">Bevesteging &rarr;</button>
      </div>
    </form>
  </article>
</section>
