document.addEventListener("DOMContentLoaded", function (event) {
  // шапка
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav-left");

  hamburger.addEventListener("click", mobileMenu);

  function mobileMenu() {
    hamburger.classList.toggle("is-active");
    navMenu.classList.toggle("is-active");
  }

  const navLink = document.querySelectorAll(".nav-links-item a");

  navLink.forEach((n) => n.addEventListener("click", closeMenu));

  function closeMenu() {
    hamburger.classList.remove("is-active");
    navMenu.classList.remove("is-active");
  }

  // все модальные окна
  const backdrop = document.querySelector('#modal-backdrop');
  document.addEventListener('click', modalHandler);

  function modalHandler(evt) {
    const modalBtnOpen = evt.target.closest('.js-modal');
    if (modalBtnOpen) { // open btn click
      const modalSelector = modalBtnOpen.dataset.modal;
      showModal(document.querySelector(modalSelector));
    }

    const modalBtnClose = evt.target.closest('.modal-close');
    if (modalBtnClose) { // close btn click
      evt.preventDefault();
      hideModal(modalBtnClose.closest('.modal-window'));
    }

    if (evt.target.matches('#modal-backdrop')) { // backdrop click
      hideModal(document.querySelector('.modal-window.show'));
    }
  }

  function showModal(modalElem) {
    modalElem.classList.add('show');
    backdrop.classList.remove('hidden');
  }

  function hideModal(modalElem) {
    modalElem.classList.remove('show');
    backdrop.classList.add('hidden');
  }

  // все селекты

  document.querySelectorAll('.dropdown').forEach(function (dropdownWrapper) {
    const dropdownBtn = dropdownWrapper.querySelector('.dropdown__button');
    const dropdownList = dropdownWrapper.querySelector('.dropdown__list');
    const dropdownItems = dropdownList.querySelectorAll('.dropdown__list-item');
    const dropdownInput = dropdownWrapper.querySelector('.dropdown__input_hidden')

    dropdownBtn.addEventListener('click', function () {
      dropdownList.classList.toggle('dropdown__list_visible');
      this.classList.toggle('dropdown__button_active');
    });

    dropdownItems.forEach(function (listItem) {
      listItem.addEventListener('click', function (e) {
        dropdownItems.forEach(function (el) {
          el.classList.remove('dropdown__list-item_active');
        })
        e.target.classList.add('dropdown__list-item_active');
        dropdownBtn.innerText = this.innerText;
        dropdownInput.value = this.dataset.value;
        dropdownList.classList.remove('dropdown__list_visible');
      })
    })

    document.addEventListener('click', function (e) {
      if (e.target !== dropdownBtn) {
        dropdownBtn.classList.remove('dropdown__button_active');
        dropdownList.classList.remove('dropdown__list_visible');
      }
    })

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Tab' || e.key === 'Escape') {
        dropdownBtn.classList.remove('dropdown__button_active');
        dropdownList.classList.remove('dropdown__list_visible');
      }
    })
  })

  document.querySelectorAll('.dropdown_with-chk').forEach(function (dropdownWrapper) {
    const dropdownBtn = dropdownWrapper.querySelector('.dropdown_with-chk__button');
    const dropdownList = dropdownWrapper.querySelector('.dropdown_with-chk__list');
    const dropdownItems = dropdownList.querySelectorAll('.dropdown_with-chk__list-item');

    dropdownBtn.addEventListener('click', function () {
      dropdownList.classList.toggle('dropdown_with-chk__list_visible');
      this.classList.toggle('dropdown_with-chk__button_active');
    });

    dropdownItems.forEach(function (listItem) {
      listItem.addEventListener('click', function (e) {
        e.target.classList.toggle('dropdown_with-chk__list-item_active');
      })
    })

    document.addEventListener('click', function (e) {
      if (e.target !== dropdownBtn && e.target !== dropdownItems && !e.target.classList.contains('dropdown_with-chk__list-item') && !e.target.classList.contains('dropdown_with-chk__list-item_label')) {
        dropdownBtn.classList.remove('dropdown_with-chk__button_active');
        dropdownList.classList.remove('dropdown_with-chk__list_visible');
      }
    })

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Tab' || e.key === 'Escape') {
        dropdownBtn.classList.remove('dropdown_with-chk__button_active');
        dropdownList.classList.remove('dropdown_with-chk__list_visible');
      }
    })
  })

  // sendForm = document.querySelector(".btn-call-send");
  // sendForm.addEventListener("click", function(e) {
  //     document.querySelector("#call .modal-inner").classList.remove("is-active");
  //     document.querySelector("#call .modal-thanks").classList.add("is-active");
  // })

  // форма

  document.querySelector("#contact-form").addEventListener("submit", function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch('../components/contact.php', {
      method: 'POST',
      body: formData
    })
      .then(response => response.text())
      .then(data => {
        if (data.includes('Сообщение отправлено!')) {
          document.querySelector("#call .modal-inner").classList.remove("is-active");
          document.querySelector("#call .modal-thanks").classList.add("is-active");
        } else {
          alert("Произошла непредвиденная ошибка. Позвоните нам по номеру телефона на сайте, а мы параллельно исправим её.");
        }
      })
      .catch(error => {
        alert("Код ошибки: " + error);
      });
  });



  // store tabs variable
  var theTabs = document.querySelectorAll(".nav-tabs > li");

  function theTabClicks(tabClickEvent) {
    var clickedTab = tabClickEvent.currentTarget;
    var tabParent = tabClickEvent.currentTarget.parentNode.parentNode.parentNode;
    var theTabs = tabParent.querySelectorAll(".nav-tabs > li");
    for (var i = 0; i < theTabs.length; i++) {
      theTabs[i].classList.remove("active");
    }

    clickedTab.classList.add("active");
    tabClickEvent.preventDefault();
    var contentPanes = tabParent.querySelectorAll(".tab-pane");
    for (i = 0; i < contentPanes.length; i++) {
      contentPanes[i].classList.remove("active");
    }
    var anchorReference = tabClickEvent.target;
    var activePaneId = anchorReference.getAttribute("href");
    var activePane = tabParent.querySelector(activePaneId);
    activePane.classList.add("active");
  }
  for (i = 0; i < theTabs.length; i++) {
    theTabs[i].addEventListener("click", theTabClicks)
  }

  // видео превью
  setInterval(function () {
    if (document.activeElement instanceof HTMLIFrameElement) {
      document.getElementById('video-overlay').style.display = "none";
      document.getElementById('video-player').style.opacity = 1;
    }
  }, 50);

  // автозаполнение
  document.querySelectorAll('.autocomplete').forEach(autocompleteElement => {
    const cityListElement = document.querySelector('.city-list');
    const cityList = cityListElement.textContent.split(',').map(city => city.trim());

    const input = autocompleteElement.querySelector('.city-input');
    const suggestions = autocompleteElement.querySelector('.suggestions');

    input.addEventListener('input', function () {
      const query = input.value.toLowerCase();
      suggestions.innerHTML = '';

      if (query) {
        const filteredCities = cityList.filter(city => city.toLowerCase().includes(query));

        filteredCities.forEach(city => {
          const suggestionItem = document.createElement('div');
          suggestionItem.textContent = city;

          suggestionItem.addEventListener('click', function () {
            input.value = city;
            suggestions.innerHTML = '';
          });

          suggestions.appendChild(suggestionItem);
        });
      }
    });

    document.addEventListener('click', function (event) {
      if (!event.target.closest('.autocomplete')) {
        suggestions.innerHTML = '';
      }
    });
  });

  document.querySelectorAll('.passenger-counter').forEach(counter => {
    const input = counter.querySelector('.passenger-counter-input');
    const plusBtn = counter.querySelector('.plus');
    const minusBtn = counter.querySelector('.minus');
    const passengerLabel = counter.querySelector('.passenger-label');

    function getPassengerLabel(value) {
      const lastDigit = value % 10;
      const lastTwoDigits = value % 100;

      if (lastTwoDigits >= 11 && lastTwoDigits <= 14) {
        return 'пассажиров';
      }

      if (lastDigit === 1) {
        return 'пассажир';
      } else if (lastDigit >= 2 && lastDigit <= 4) {
        return 'пассажира';
      } else {
        return 'пассажиров';
      }
    }

    function updateLabel(value) {
      passengerLabel.textContent = getPassengerLabel(value);
    }

    function adjustInputWidth() {
      const valueLength = input.value.length;
      input.style.width = `${valueLength * 12}px`;
    }

    updateLabel(parseInt(input.value));

    plusBtn.addEventListener('click', () => {
      let value = parseInt(input.value);
      if (value <= 99) {
        value++;
        input.value = value;
        updateLabel(value);
        adjustInputWidth();
      }
    });

    minusBtn.addEventListener('click', () => {
      let value = parseInt(input.value);
      if (value > 1) {
        value--;
        input.value = value;
        updateLabel(value);
        adjustInputWidth();
      }
    });
  });


  // поправить классы
  document.querySelectorAll('.gallery-container').forEach((container) => {
    const galleryElement = container.querySelector(".lightgallery");
    const gallery = lightGallery(galleryElement, {
      plugins: [lgThumbnail, lgZoom],
      thumbnail: true,
      zoom: true,
      actualSize: false,
      selector: '.thumb-wrap a'
    });

    const showMoreBtn = container.querySelector(".show-more-btn");
    const thumbnails = container.querySelectorAll(".thumb-wrap a");
    const visibleThumbnails = 5;
    const hiddenThumbnails = Math.max(thumbnails.length - visibleThumbnails, 0);
    let currentIndex = 0;

    if (showMoreBtn) {
      updateButtonText();

      showMoreBtn.addEventListener("click", function () {
        currentIndex = (currentIndex + 1) % thumbnails.length;
        gallery.openGallery(currentIndex);
      });

      function updateButtonText() {
        showMoreBtn.textContent = hiddenThumbnails > 0 ? `Ещё ${hiddenThumbnails}` : "Ещё";
      }
    }
  });
});


// our-fleet
document.querySelector('.btn-find').addEventListener('click', () => {
  // Получаем значения фильтров
  const selectedManufacturer = document.querySelector('.dropdown:nth-child(3) .dropdown__list-item_active')?.getAttribute('data-value');
  const selectedRange = document.querySelector('.dropdown:nth-child(4) .dropdown__list-item_active')?.getAttribute('data-value');
  const selectedPrice = document.querySelector('.dropdown:nth-child(5) .dropdown__list-item_active')?.getAttribute('data-value') || null;
  const selectedSeats = Array.from(document.querySelectorAll('.dropdown_with-chk__list-item input:checked'))
    .map(checkbox => checkbox.id); // Извлекаем диапазоны мест

  // Получаем все элементы самолетов
  const items = document.querySelectorAll('.looking-item');

  console.log('Фильтры:');
  console.log('Производитель:', selectedManufacturer || 'Любой');
  console.log('Дальность:', selectedRange || 'Любая');
  console.log('Цена:', selectedPrice || 'Любая');
  console.log('Места:', selectedSeats.length ? selectedSeats : 'Любые');

  // Если ни один фильтр не выбран
  if (!selectedManufacturer && !selectedRange && !selectedPrice && selectedSeats.length === 0) {
    console.log('Нет выбранных фильтров. Показываем все блоки.');
    items.forEach(item => {
      item.style.display = 'block'; // Показываем все элементы, если фильтры не выбраны
    });
    return; // Прерываем выполнение функции, если нет фильтров
  }

  // Если фильтры выбраны, продолжаем фильтрацию
  items.forEach(item => {
    // Данные для фильтрации
    const title = item.querySelector('h3').innerText.trim(); // Название самолета
    const rangeText = item.querySelector('.looking-row:nth-child(2) .looking-row-desc').innerText.trim(); // Текст дальности
    const seatsText = item.querySelector('.looking-row:nth-child(3) .looking-row-desc').innerText.trim(); // Места
    const priceText = item.querySelector('.looking-row:nth-child(4) .looking-row-desc').innerText.trim(); // Цена

    console.log('Название:', title);
    console.log('Дальность (текст):', rangeText);
    console.log('Места (текст):', seatsText);
    console.log('Цена (текст):', priceText);

    // Извлекаем производителя из названия
    const manufacturer = title.split(' ')[0];

    // Извлекаем последнее значение перед "км" из текста дальности
    const rangeMatch = rangeText.match(/(\d+)\s*км/);
    const range = rangeMatch ? parseInt(rangeMatch[1], 10) : 0;

    // Преобразуем значения
    const seats = parseInt(seatsText, 10);
    const price = parseInt(priceText.replace(/\D/g, ''), 10);

    // Проверяем соответствие фильтрам
    const matchManufacturer = !selectedManufacturer || selectedManufacturer === 'Любой' || manufacturer === selectedManufacturer;
    const matchRange = !selectedRange || selectedRange === 'Любой' || range >= parseInt(selectedRange, 10);
    const matchPrice = !selectedPrice || (selectedPrice.includes('-') && checkPriceRange(price, selectedPrice));
    const matchSeats = selectedSeats.length === 0 || checkSeatRange(seats, selectedSeats);

    console.log('---');
    console.log('Проверяем блок:', item.querySelector('h3').innerText);
    console.log('matchManufacturer:', matchManufacturer);
    console.log('matchRange:', matchRange);
    console.log('matchPrice:', matchPrice);
    console.log('matchSeats:', matchSeats);
    console.log('Производитель:', manufacturer);
    console.log('Дальность (число):', range);
    console.log('Места (число):', seats);
    console.log('Цена (число):', price);

    // Показываем или скрываем элемент
    if (matchManufacturer && matchRange && matchPrice && matchSeats) {
      console.log('Элемент отображается:', title);
      item.style.display = 'block';
    } else {
      console.log('Элемент скрывается:', title);
      item.style.display = 'none';
    }
  });
});

// Проверка диапазона цены
function checkPriceRange(price, range) {
  console.log('Проверяем диапазон цены:', price, range);
  const [min, max] = range.split('-').map(Number);
  if (isNaN(min) || isNaN(max)) {
    console.error('Некорректный диапазон цены:', range);
    return true; // Если диапазон некорректный, пропускаем фильтр
  }
  return price >= min && price <= max;
}

// Проверка диапазона мест
function checkSeatRange(seats, ranges) {
  console.log('Проверяем диапазон мест:', seats, ranges);
  return ranges.some(range => {
    const [min, max] = range.split('-').map(Number);
    return seats >= min && (max ? seats <= max : true);
  });
}

// Сброс фильтров
document.querySelector('.btn-reset').addEventListener('click', () => {
  // Сбросить активные фильтры
  document.querySelectorAll('.dropdown__list-item_active').forEach(item => item.classList.remove('dropdown__list-item_active'));
  document.querySelectorAll('.dropdown__list-item:first-child').forEach(item => item.classList.add('dropdown__list-item_active'));
  document.querySelectorAll('.dropdown_with-chk__list-item input').forEach(checkbox => checkbox.checked = false);

  // Показать все самолеты
  document.querySelectorAll('.looking-item').forEach(item => item.style.display = 'block');
});
