{
  const init = () => {
    const $button1 = document.querySelector(`.LR__chap1__hotspot`);
    const $button2 = document.querySelector(`.LR__chap2__hotspot`);
    const $introFoto = document.querySelector(`.LR__intro__img`);
    const $buttonMateriaal = document.querySelector(`.button1`);

    let count = 1;


    $button1.addEventListener('click', () => {
      weetje1Maken();
    });

    $button2.addEventListener('click', () => {
      weetje2Maken();
    });

    $introFoto.addEventListener(`click`, () => {
      if (count <= 3) {
        count ++;
      } else {
        count = 1;
      }
      boekBrand(count);
    });

    $buttonMateriaal.addEventListener(`click`, () => {
      materiaal();
    }, {once: true});
  };

  //WEETJE 1
  const weetje1Maken = () => {
    const $div = document.querySelector(`.LR__weetje1`);
    $div.classList.remove('hidden');

    const $x = document.querySelector(`.LR__weetje1-X`);
    $x.addEventListener('click', () => {
      sluitWeetje1($div);
    });
  };

  const sluitWeetje1 = div => {
    div.classList.add('hidden');
  };

  //WEETJE 2
  const weetje2Maken = () => {
    const $div = document.querySelector(`.LR__weetje2`);
    $div.classList.remove('hidden');

    const $x = document.querySelector(`.LR__weetje2-X`);
    $x.addEventListener('click', () => {
      sluitWeetje2($div);
    });
  };

  const sluitWeetje2 = div => {
    div.classList.add('hidden');
  };

  //BOEK
  const boekBrand = count => {
    const $introFoto = document.querySelector(`.LR__intro__img`);

    switch (count) {
    case 2:
      $introFoto.src = './assets/longread/boek_brand2.png';
      break;
    case 3:
      $introFoto.src = './assets/longread/boek_brand3.png';
      break;
    case 4:
      $introFoto.src = './assets/longread/boek_brand4.png';
      break;
    default:
      $introFoto.src = './assets/longread/boek_brand1.png';
    }
  };

  const materiaal = () => {
    const $model = document.querySelector(`.LR__materiaal__model`);
    const $button1 = document.querySelector(`.button1`);
    const $button2 = document.querySelector(`.button2`);
    const $button3 = document.querySelector(`.button3`);

    $button1.classList.remove('LR__materiaal__neemmee__actief');
    $button1.classList.add('LR__materiaal__neemmee__check');
    $button1.innerHTML = 'check';

    $button2.classList.remove('LR__materiaal__neemmee');
    $button2.classList.add('LR__materiaal__neemmee__actief');

    $model.src = './assets/longread/model2.png';

    $button2.addEventListener(`click`, () => {
      $button2.classList.remove('LR__materiaal__neemmee__actief');
      $button2.classList.add('LR__materiaal__neemmee__check');
      $button2.innerHTML = 'check';

      $button3.classList.remove('LR__materiaal__neemmee');
      $button3.classList.add('LR__materiaal__neemmee__actief');

      $model.src = './assets/longread/model3.png';
    }, {once: true});

    $button3.addEventListener(`click`, () => {
      $button3.classList.remove('LR__materiaal__neemmee__actief');
      $button3.classList.add('LR__materiaal__neemmee__check');
      $button3.innerHTML = 'check';

      $model.src = './assets/longread/model4.png';
    }, {once: true});
  };

  init();
}
