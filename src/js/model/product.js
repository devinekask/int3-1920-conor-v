
class Product {
  constructor(productObject) {
    this.productId = productObject['product_id'];
    this.detailsId = productObject['details_id'];
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
            <form method="post" action="index.php?page=car">
              <input type="hidden" name="product_id" value="${this.productId}"/>
              <button class="promo__carbutton" type="submit" name="action" value="add"><img src="../assets/cart.png" alt="cart">+</button>
            </form>
            <a class="promo__moreinfo" href="index.php?page=details&amp;id=${this.productId}&amp;details_id=${this.detailsId}">meer info</a>
          </div>
        </div>
      </article>
    `;
  }
}

export default Product;
