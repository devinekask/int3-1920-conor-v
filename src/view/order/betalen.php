<section class="betaalform__container">
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
    <form class="betaal__metode__form" action="index.php?page=betalen" method="post">
      <div class="betaalform__inputwrapper betaalform__inputwrapper--toggle">
        <label class="betaalform__toggle" for="paypal">
          <input class="radio" type="radio" id="paypal" name="methode" value="paypal" checked>
          <span class="form__toggle__button">PayPal</span>
          <img src="./assets/betaalmethodes/paypal.png" alt="PayPal">
        </label>

        <label class="betaalform__toggle" for="Bancontact/MisterCash">
          <input class="radio" type="radio" id="Bancontact/MisterCash" name="methode" value="Bancontact/MisterCash">
          <span class="form__toggle__button">Bancontact/MisterCash</span>
          <img src="./assets/betaalmethodes/bancontact.png" alt="Bancontact/MisterCash">
        </label>

        <label class="betaalform__toggle" for="Maestro">
          <input class="radio" type="radio" id="Maestro" name="methode" value="Maestro">
          <span class="form__toggle__button">Maestro</span>
          <img src="./assets/betaalmethodes/maestro.png" alt="Maestro">
        </label>

        <label class="betaalform__toggle" for="Mastercard">
          <input class="radio" type="radio" id="Mastercard" name="methode" value="Mastercard">
          <span class="form__toggle__button">Mastercard</span>
          <img src="./assets/betaalmethodes/mastercard.png" alt="Mastercard">
        </label>

        <label class="betaalform__toggle" for="VISA">
          <input class="radio" type="radio" id="VISA" name="methode" value="VISA">
          <span class="form__toggle__button">VISA</span>
          <img src="./assets/betaalmethodes/visa.png" alt="VISA">
        </label>

        <label class="betaalform__toggle" for="vooruitbetaling">
          <input class="radio" type="radio" id="vooruitbetaling" name="methode" value="vooruitbetaling">
          <span class="form__toggle__button">vooruitbetaling per bank</span>
        </label>
      </div>

      <div class="betaalform__totaal">
        <div class="car__totaal">
          <h4 class="car__totaal__titel">Begin info</h4>
          <p class="car__totaal--fullname"><?php echo $info['naam'] ?></p>
          <p class="car__totaal--email"><?php echo $info['email'] ?></p>

          <h4 class="car__totaal__titel">Bestel info</h4>
          <p class="car__totaal--fullname"><?php echo $info['straat'] ?></p>
          <p class="car__totaal--email"><?php echo $info['gemeente'] . ' ' . $info['postcode']?></p>

          <h4 class="car__totaal__titel">Opsomming</h4>
          <p class="car__totaal--producten">Order totaal: &euro;<?php echo  $info['totaal'] - $verzendkosten?></p>
            <p class="car__totaal--verzend">Verzend kosten: &euro;<?php echo $verzendkosten ?></p>
            <p class="car__totaal--totaal">Totaal: &euro;<?php echo $info['totaal'] ?></p>
        </div>
        <button class="car__betaalbutton" type="submit" name="action" value="bevestiging">Bevesteging &rarr;</button>
      </div>
    </form>
  </article>
</section>
