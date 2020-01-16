
class Product {
  constructor(productObject) {
    this.id = productObject['id'];
    this.naam = productObject['naam'];
    this.prijs = productObject['prijs'];
    this.foto = productObject['foto'];
  }

  createHTML() {
    return `
      <article class="product">
        <div class="product__img__container">
          <img class="product__img" src="${this.foto}" alt="${this.naam}">
        </div>
        <div class="product__detials">
          <h3 class="product__title">${this.naam}</h3>
          <p class="product__price">&euro;${this.prijs}</p>
          <div class="promo__buttons product__buttons">
            <a class="promo__carbutton" href="#"><img src="../assets/cart.png" alt="cart">+</a>
            <a class="promo__moreinfo" href="index.php?page=details&amp;id=${this.id}&amp;cat=">meer info</a>
          </div>
        </div>
      </article>
    `;
  }

  /*
  priceLogic() {
    if (this.id === '3') {
      `<span class="korting">&euro;12,99</span> met de code &euro;4,99`;
    } else {
      `&euro;${this.prijs}`;
    }
    return this.priceLogic;
  }
*/
}

export default Product;
/*
<?php if($item['id'] == '3') {
  echo '<span class="korting">&euro;12,99</span> met code &euro;4,99';
  }else { echo '&euro;' . $item['prijs'];} ?>
*/
