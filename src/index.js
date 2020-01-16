require('./style.css');

import Product from './js/model/product.js';
{
  const $filterForm = document.querySelector(`.filter__form`);
  const $products = document.querySelector(`.product__container`);
  const $radiobuttons = document.querySelectorAll (`.radio`);

  const init = () => {
    $radiobuttons.forEach(radio => {
      radio.addEventListener ('click', e => {
        radio.checked = `true`;
        handleClick(e);
      });
    });
  };

  const handleClick = e => {
    if ($filterForm) {
      $filterForm.addEventListener(`submit`, handleSubmitFilterForm(e));
    }
  };

  const handleLoadProduct = data => {
    $products.innerHTML = data
      .map(product => createProduct(product))
      .join(``);
  };

  const createProduct = productObj => {
    const product = new Product(productObj);
    return product.createHTML();
  };

  const handleSubmitFilterForm = e => {
    console.log(e);
    e.originalTarget.checked = true;
    e.preventDefault();
    const qs = new URLSearchParams([
      ...new FormData($filterForm).entries()
    ]).toString();
    fetch(`${$filterForm.getAttribute('action')}?${qs}`, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: 'get'
    })
      .then(r => r.json())
      .then(data => handleLoadProduct(data));
    window.history.pushState(
      {},
      '',
      `${window.location.href.split('?')[0]}?${qs}`
    );
  };

  init();
}
