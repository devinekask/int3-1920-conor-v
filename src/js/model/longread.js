{
  const init = () => {
    const $button1 = document.querySelector(`.LR__chap1__hotspot`);
    const $button2 = document.querySelector(`.LR__chap2__hotspot`);

    $button1.addEventListener('click', () => {
      weetje1Maken();
    });

    $button2.addEventListener('click', () => {
      weetje2Maken();
    });
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

  init();
}


