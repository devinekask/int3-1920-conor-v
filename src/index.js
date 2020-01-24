require('./style.css');

if (window.location.search === '?page=longread') {
  require('./js/model/longread.js');
}


import Product from './js/model/product.js';
{
  const $filterForm = document.querySelector(`.filter__form`);
  const $products = document.querySelector(`.product__container`);
  const $radiobuttons = document.querySelectorAll (`.radio`);
  const $filterbutton = document.querySelector(`.form__submit`);

  const init = () => {
    $filterbutton.style.display = `none`;
    $radiobuttons.forEach(radio => {
      radio.addEventListener ('click', e => {
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

  const handleSubmitFilterForm = () => {
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

