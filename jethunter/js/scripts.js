document.addEventListener("DOMContentLoaded", function (e) {
  // ip info phone
  async function getPhoneNumber() {
    const cachedData = localStorage.getItem("phone_number_info");
    const cacheTime = localStorage.getItem("phone_number_timestamp");
    const now = new Date().getTime();

    if (cachedData && cacheTime && now - cacheTime < 24 * 60 * 60 * 1000) {
      const data = JSON.parse(cachedData);
      document.querySelector(".nav-tel-link").textContent = data.formatted;
      document.querySelector(".nav-tel-link").href = "tel:" + data.clean;
      document.querySelector(".nav-social-link-tel").href = "tel:" + data.clean;
      document.querySelector(".footer-social-link-tel").href = "tel:" + data.clean;
      document.querySelector(".footer-bottom-tel").textContent = data.formatted;
      document.querySelector(".footer-bottom-tel").href = "tel:" + data.clean;
      return;
    }

    try {
      const response = await fetch("/wp-admin/admin-ajax.php?action=get_phone_number");
      const data = await response.json();

      if (!data.success) return;

      document.querySelector(".nav-tel-link").textContent = data.data.formatted;
      document.querySelector(".nav-tel-link").href = "tel:" + data.data.clean;
      document.querySelector(".nav-social-link-tel").href = "tel:" + data.data.clean;
      document.querySelector(".footer-social-link-tel").href = "tel:" + data.data.clean;
      document.querySelector(".footer-bottom-tel").textContent = data.data.formatted;
      document.querySelector(".footer-bottom-tel").href = "tel:" + data.data.clean;

      // Cache response in localStorage
      localStorage.setItem("phone_number_info", JSON.stringify(data.data));
      localStorage.setItem("phone_number_timestamp", now);
    } catch (error) {
      console.error("Error fetching phone number:", error);
    }
  }

  getPhoneNumber();

  // home form
  document.querySelector(".home-form-1-open")?.addEventListener("click", function () {
    document.querySelector(".home-form-1").classList.add("is-active")
    document.querySelector(".home-form-2").classList.remove("is-active")
    document.querySelector(".home-form-3").classList.remove("is-active")
  })
  document.querySelector(".home-form-1-close")?.addEventListener("click", function () {
    document.querySelector(".home-form-1").classList.remove("is-active")
  })
  document.querySelector(".home-form-2-open")?.addEventListener("click", function () {
    document.querySelector(".home-form-2").classList.add("is-active")
    document.querySelector(".home-form-1").classList.remove("is-active")
    document.querySelector(".home-form-3").classList.remove("is-active")
  })
  document.querySelector(".home-form-2-close")?.addEventListener("click", function () {
    document.querySelector(".home-form-2").classList.remove("is-active")
  })
  document.querySelector(".home-form-3-open")?.addEventListener("click", function () {
    document.querySelector(".home-form-3").classList.add("is-active")
    document.querySelector(".home-form-2").classList.remove("is-active")
    document.querySelector(".home-form-1").classList.remove("is-active")
  })
  document.querySelector(".home-form-3-close")?.addEventListener("click", function () {
    document.querySelector(".home-form-3").classList.remove("is-active")
  })

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
    backdrop.classList.remove('is-hidden');
  }

  function hideModal(modalElem) {
    modalElem.classList.remove('show');
    backdrop.classList.add('is-hidden');
  }

  // передача ссылки в вывод формы
  document.querySelectorAll('.wpcf7 input[name="page-url"]')?.forEach(function (element) {
    element.value = window.location.href;
  });

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

  // форма на чистом РНР
  // document.querySelector("#contact-form").addEventListener("submit", function (e) {
  //   e.preventDefault();

  //   let formData = new FormData(this);

  //   fetch('../components/contact.php', {
  //     method: 'POST',
  //     body: formData
  //   })
  //     .then(response => response.text())
  //     .then(data => {
  //       if (data.includes('Сообщение отправлено!')) {
  //         document.querySelector("#call .modal-inner").classList.remove("is-active");
  //         document.querySelector("#call .modal-thanks").classList.add("is-active");
  //       } else {
  //         alert("Произошла непредвиденная ошибка. Позвоните нам по номеру телефона на сайте, а мы параллельно исправим её.");
  //       }
  //     })
  //     .catch(error => {
  //       alert("Код ошибки: " + error);
  //     });
  // });

  // форма с CF7
  document.addEventListener('wpcf7mailsent', function () {
    const modalInner = document.querySelector('.modal-inner');
    const modalThanks = document.querySelector('.modal-thanks');

    if (modalInner && modalThanks) {
      modalInner.classList.remove('is-active');
      modalThanks.classList.add('is-active');
    }
  });


  const toggleFlightBtnRu = document.querySelector(".home-form-flight-toggle-ru");
  toggleFlightBtnRu?.addEventListener("click", function () {
    if (this.innerHTML === "Добавить перелёт") {
      this.innerHTML = "Удалить перелёт";
    } else {
      this.innerHTML = "Добавить перелёт";
    }
    document.querySelector(".home-form-flight-set").classList.toggle("is-active");
  })
  const toggleFlightBtnEn = document.querySelector(".home-form-flight-toggle-en");
  toggleFlightBtnEn?.addEventListener("click", function () {
    if (this.innerHTML === "Add flight") {
      this.innerHTML = "Remove flight";
    } else {
      this.innerHTML = "Add flight";
    }
    document.querySelector(".home-form-flight-set").classList.toggle("is-active");
  })

  if (window.innerWidth <= 992) {
    document.querySelector(".home-form-2 .home-form-bottom")?.prepend(toggleFlightBtn);
  }

  // store tabs variable
  var theTabs = document.querySelectorAll(".nav-tabs > .nav-tabs-item");

  function theTabClicks(tabClickEvent) {
    var clickedTab = tabClickEvent.currentTarget;
    var tabParent = tabClickEvent.currentTarget.parentNode.parentNode.parentNode;
    var theTabs = tabParent.querySelectorAll(".nav-tabs > .nav-tabs-item");
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

    const inputCity = autocompleteElement.querySelector('.city-input');
    const suggestions = autocompleteElement.querySelector('.suggestions');

    inputCity.addEventListener('input', function () {
      const query = inputCity.value.toLowerCase();
      suggestions.innerHTML = '';

      if (query) {
        const filteredCities = cityList.filter(city => city.toLowerCase().includes(query));

        filteredCities.forEach(city => {
          const suggestionItem = document.createElement('div');
          suggestionItem.textContent = city;

          suggestionItem.addEventListener('click', function () {
            inputCity.value = city;
            suggestions.innerHTML = '';
          });

          suggestions.appendChild(suggestionItem);
        });
      }
    });

    document.addEventListener('click', function (e) {
      if (!e.target.closest('.autocomplete')) {
        suggestions.innerHTML = '';
      }
    });
  });

  document.querySelectorAll('.passenger-counter').forEach(counter => {
    const inputPass = counter.querySelector('.passenger-counter-input');
    const plusBtn = counter.querySelector('.plus');
    const minusBtn = counter.querySelector('.minus');
    const passengerLabel = counter.querySelector('.passenger-label');
    const hiddenField = document.querySelector("input[name='your-passengers']");
    const isEnglish = document.documentElement.lang === 'en-US';

    function getPassengerLabel(value) {
      const lastDigit = value % 10;
      const lastTwoDigits = value % 100;

      if (isEnglish) {
        return value === 1 ? 'passenger' : 'passengers';
      }

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
      const valueLength = inputPass.value.length;
      inputPass.style.width = `${valueLength * 12}px`;
    }

    function updateHiddenField(value) {
      if (hiddenField) {
        hiddenField.value = value;
      }
    }

    updateLabel(parseInt(inputPass.value));
    updateHiddenField(parseInt(inputPass.value));

    plusBtn.addEventListener('click', () => {
      let value = parseInt(inputPass.value);
      if (value <= 99) {
        value++;
        inputPass.value = value;
        updateLabel(value);
        adjustInputWidth();
        if (hiddenField) {
          updateHiddenField(value);
        }
      }
    });

    minusBtn.addEventListener('click', () => {
      let value = parseInt(inputPass.value);
      if (value > 1) {
        value--;
        inputPass.value = value;
        updateLabel(value);
        adjustInputWidth();
        if (hiddenField) {
          updateHiddenField(value);
        }
      }
    });
  });


  // поправить классы
  document.querySelectorAll('.gallery-container').forEach((container) => {
    const galleryElement = container.querySelector(".lightgallery");

    // Only initialize if not already done (set a data attribute as a flag)
    if (!galleryElement.dataset.lgInitialized) {
      const gallery = lightGallery(galleryElement, {
        plugins: [lgThumbnail, lgZoom],
        thumbnail: true,
        zoom: true,
        actualSize: false,
        selector: '.plane-thumb-wrap a'
      });
      galleryElement.dataset.lgInitialized = "true";

      const showMoreBtn = container.querySelector(".show-more-btn");
      const thumbnails = container.querySelectorAll(".plane-thumb-wrap a");
      const visibleThumbnails = 5;
      const hiddenThumbnails = Math.max(thumbnails.length - visibleThumbnails, 0);
      let currentIndex = 0;

      if (showMoreBtn) {
        updateButtonText();

        showMoreBtn.addEventListener("click", function (e) {
          e.preventDefault();
          e.stopPropagation();
          currentIndex = (currentIndex + 1) % thumbnails.length;
          gallery.openGallery(currentIndex);
        });

        function updateButtonText() {
          showMoreBtn.textContent = hiddenThumbnails > 0 ? `Ещё ${hiddenThumbnails}` : "Ещё";
        }
      }
    }
  });
});

// empty-legs
window.addEventListener("load", () => {
  const cityInputs = document.querySelectorAll('.city-input');
  const cityList = document.querySelector('.city-list');
  const planeItems = document.querySelectorAll('.empty-item');
  const searchButton = document.querySelector('.search-flight-form .btn'); // кнопка "Найти"
  const passengerInput = document.querySelector('.passenger-counter-input'); // количество пассажиров
  const dateInput = document.querySelector('.search-flight-form input[type="date"]'); // поле даты

  // сбор уникальных городов
  const citySet = new Set();

  const updateCityList = () => {
    citySet.clear();
    planeItems.forEach(item => {
      const fromCity = item.querySelector('.empty-path-start .empty-path-city')?.textContent.trim();
      const toCity = item.querySelector('.empty-path-end .empty-path-city')?.textContent.trim();
      if (fromCity) {
        citySet.add(fromCity);
      }
      if (toCity) {
        citySet.add(toCity);
      }
    });
  };

  updateCityList();
  const cityArray = Array.from(citySet).sort();
  if (cityList) {
    cityList.textContent = cityArray.join(', ');
  }

  // автозаполнение
  const filterSuggestions = (input, suggestionsBox) => {
    const inputValue = input.value.trim().toLowerCase();
    suggestionsBox.innerHTML = '';

    if (inputValue.length > 0) {
      const filteredCities = cityArray.filter(city => city.toLowerCase().includes(inputValue));

      filteredCities.forEach(city => {
        const suggestion = document.createElement('div');
        suggestion.textContent = city;
        suggestion.classList.add('suggestion-item');
        suggestionsBox.appendChild(suggestion);

        suggestion.addEventListener('click', () => {
          input.value = city;
          suggestionsBox.innerHTML = '';
          console.log('Выбранный город:', city); // для проверки выбранного города
        });
      });
    }
  };

  cityInputs.forEach(input => {
    const suggestionsBox = input.nextElementSibling;

    input.addEventListener('input', () => {
      filterSuggestions(input, suggestionsBox);
    });

    input.addEventListener('blur', () => {
      setTimeout(() => {
        suggestionsBox.innerHTML = '';
      }, 200);
    });
  });

  // фильтрация .plane-item
  const filterPlanes = () => {
    const fromCity = cityInputs[0].value.trim().toLowerCase();
    const toCity = cityInputs[1].value.trim().toLowerCase();
    const passengerCount = parseInt(passengerInput.value, 10) || 1;
    const selectedDate = dateInput.value;

    planeItems.forEach(item => {
      const itemFromCity = item.querySelector('.empty-path-start .empty-path-city')?.textContent.trim().toLowerCase();
      const itemToCity = item.querySelector('.empty-path-end .empty-path-city')?.textContent.trim().toLowerCase();
      const itemSeats = parseInt(item.querySelector('.empty-path-seat .empty-path-info')?.textContent.trim(), 10) || 0;
      const itemDate = item.querySelector('.empty-path-date .empty-path-info')?.textContent.trim(); // Дата в формате строки

      let matches = true;

      // проверяем город отправления
      if (fromCity && itemFromCity && !itemFromCity.includes(fromCity)) {
        matches = false;
      }

      // проверяем город прибытия
      if (toCity && itemToCity && !itemToCity.includes(toCity)) {
        matches = false;
      }

      // проверяем количество пассажиров
      if (itemSeats < passengerCount) {
        matches = false;
      }

      // проверяем дату
      if (selectedDate) {
        const selectedDateObj = new Date(selectedDate); // YYYY-MM-DD
      
        const itemDateRaw = item.querySelector('.empty-path-date .empty-path-info')?.textContent.trim();
        
        if (itemDateRaw) {
          // Разбираем дату формата "15.01, 12:00"
          const dateMatch = itemDateRaw.match(/(\d{2})\.(\d{2})/); // извлекаем день и месяц
          
          if (dateMatch) {
            const day = dateMatch[1];
            const month = dateMatch[2];
            const year = selectedDateObj.getFullYear(); // используем текущий год
      
            // Форматируем дату в ISO
            const itemDateFormatted = `${year}-${month}-${day}`;
      
            // Сравниваем
            if (selectedDate !== itemDateFormatted) {
              matches = false;
            }
          } else {
            matches = false; // если дата не парсится, скрываем
          }
        } else {
          matches = false; // если даты в карточке нет, скрываем
        }
      }

      // скрыть или показать plane-item
      if (matches) {
        item.style.display = '';
      } else {
        item.style.display = 'none';
      }
    });
  };

  // слушаем нажатие кнопки "Найти"
  searchButton?.addEventListener('click', (e) => {
    e.preventDefault(); // Предотвращаем отправку формы
    filterPlanes();
  });

  // // Сообщение для отсутсвия результатов
  // const noResultsMessage = document.createElement('p');
  // noResultsMessage.textContent = 'Нет доступных рейсов';
  // noResultsMessage.style.display = 'none';
  // document.querySelector('.empty-grid')?.appendChild(noResultsMessage);

  // // Показать сообщение, если все блоки скрыты
  // const visibleItems = Array.from(planeItems).some(item => item.style.display !== 'none');
  // noResultsMessage.style.display = visibleItems ? 'none' : '';
});


// our-fleet
// document.addEventListener("DOMContentLoaded", function () {
//   document.querySelector('.btn-find')?.addEventListener('click', () => {
//     // получаем значения фильтров
//     const selectedManufacturer = document.querySelector('.dropdown:nth-child(3) .dropdown__list-item_active')?.getAttribute('data-value');
//     const selectedRange = document.querySelector('.dropdown:nth-child(4) .dropdown__list-item_active')?.getAttribute('data-value');
//     const selectedPrice = document.querySelector('.dropdown:nth-child(5) .dropdown__list-item_active')?.getAttribute('data-value') || null;
//     const selectedSeats = Array.from(document.querySelectorAll('.dropdown_with-chk__list-item input:checked'))
//       .map(checkbox => checkbox.id); // Извлекаем диапазоны мест

//     // получаем все элементы самолетов
//     const items = document.querySelectorAll('.looking-item');

//     console.log('Фильтры:');
//     console.log('Производитель:', selectedManufacturer || 'Любой');
//     console.log('Дальность:', selectedRange || 'Любая');
//     console.log('Цена:', selectedPrice || 'Любая');
//     console.log('Места:', selectedSeats.length ? selectedSeats : 'Любые');

//     // если ни один фильтр не выбран
//     if (!selectedManufacturer && !selectedRange && !selectedPrice && selectedSeats.length === 0) {
//       console.log('Нет выбранных фильтров. Показываем все блоки.');
//       items.forEach(item => {
//         item.style.display = 'block'; // показываем все элементы, если фильтры не выбраны
//       });
//       return; // прерываем выполнение функции, если нет фильтров
//     }

//     // если фильтры выбраны, продолжаем фильтрацию
//     items.forEach(item => {
//       // данные для фильтрации
//       const title = item.querySelector('h3').innerText.trim(); // Название самолета
//       const rangeText = item.querySelector('.looking-row:nth-child(2) .looking-row-desc').innerText.trim(); // Текст дальности
//       const seatsText = item.querySelector('.looking-row:nth-child(3) .looking-row-desc').innerText.trim(); // Места
//       const priceText = item.querySelector('.looking-row:nth-child(4) .looking-row-desc').innerText.trim(); // Цена

//       console.log('Название:', title);
//       console.log('Дальность (текст):', rangeText);
//       console.log('Места (текст):', seatsText);
//       console.log('Цена (текст):', priceText);

//       // извлекаем производителя из названия
//       const manufacturer = title.split(' ')[0];

//       // извлекаем последнее значение перед "км" из текста дальности
//       const rangeMatch = rangeText.match(/(\d+)\s*км/);
//       const range = rangeMatch ? parseInt(rangeMatch[1], 10) : 0;

//       // преобразуем значения
//       const seats = parseInt(seatsText, 10);
//       const price = parseInt(priceText.replace(/\D/g, ''), 10);

//       // проверяем соответствие фильтрам
//       const matchManufacturer = !selectedManufacturer || selectedManufacturer === 'Любой' || manufacturer === selectedManufacturer;
//       const matchRange = !selectedRange || selectedRange === 'Любой' || range >= parseInt(selectedRange, 10);
//       const matchPrice = !selectedPrice || (selectedPrice.includes('-') && checkPriceRange(price, selectedPrice));
//       const matchSeats = selectedSeats.length === 0 || checkSeatRange(seats, selectedSeats);

//       console.log('---');
//       console.log('Проверяем блок:', item.querySelector('h3').innerText);
//       console.log('matchManufacturer:', matchManufacturer);
//       console.log('matchRange:', matchRange);
//       console.log('matchPrice:', matchPrice);
//       console.log('matchSeats:', matchSeats);
//       console.log('Производитель:', manufacturer);
//       console.log('Дальность (число):', range);
//       console.log('Места (число):', seats);
//       console.log('Цена (число):', price);

//       // показываем или скрываем элемент
//       if (matchManufacturer && matchRange && matchPrice && matchSeats) {
//         console.log('Элемент отображается:', title);
//         item.style.display = 'block';
//       } else {
//         console.log('Элемент скрывается:', title);
//         item.style.display = 'none';
//       }
//     });
//   });

//   // проверка диапазона цены
//   function checkPriceRange(price, range) {
//     console.log('Проверяем диапазон цены:', price, range);
//     const [min, max] = range.split('-').map(Number);
//     if (isNaN(min) || isNaN(max)) {
//       console.error('Некорректный диапазон цены:', range);
//       return true; // если диапазон некорректный, пропускаем фильтр
//     }
//     return price >= min && price <= max;
//   }

//   // проверка диапазона мест
//   function checkSeatRange(seats, ranges) {
//     console.log('Проверяем диапазон мест:', seats, ranges);
//     return ranges.some(range => {
//       const [min, max] = range.split('-').map(Number);
//       return seats >= min && (max ? seats <= max : true);
//     });
//   }

//   // сброс фильтров
//   document.querySelector('.btn-reset')?.addEventListener('click', () => {
//     // сбросить активные фильтры
//     document.querySelectorAll('.dropdown__list-item_active').forEach(item => item.classList.remove('dropdown__list-item_active'));
//     document.querySelectorAll('.dropdown__list-item:first-child').forEach(item => item.classList.add('dropdown__list-item_active'));
//     document.querySelectorAll('.dropdown_with-chk__list-item input').forEach(checkbox => checkbox.checked = false);

//     // показать все самолеты
//     document.querySelectorAll('.looking-item').forEach(item => item.style.display = 'block');
//   });
document.addEventListener("DOMContentLoaded", function () {
  const itemsContainer = document.querySelector(".looking-grid-full");
  let items = Array.from(document.querySelectorAll(".looking-item"));
  const btnFind = document.querySelector(".btn-find");
  const btnReset = document.querySelector(".btn-reset");
  const pagination = document.querySelector(".pagination");
  const paginationList = document.querySelector(".pagination-list");
  const paginationBack = document.querySelector(".pagination-back");
  const paginationForward = document.querySelector(".pagination-forward");
  const paginationRight = document.querySelector(".pagination-right");
  const perPageOptions = document.querySelectorAll(".pagination-right .pagination-list-item a");

  let itemsPerPage = 10;
  let currentPage = 1;

  if (!itemsContainer || !items.length) {
    console.warn("Сортировка: контейнер или элементы отсутствуют.");
    return;
  }

  // 📌 Фильтрация самолетов
  btnFind?.addEventListener("click", () => {
    const selectedManufacturer = document
      .querySelector('.dropdown:nth-child(3) .dropdown__list-item_active')
      ?.getAttribute("data-value");

    const selectedRange = parseInt(
      document.querySelector('.dropdown:nth-child(4) .dropdown__list-item_active')
        ?.getAttribute("data-value")
    );

    const selectedPrice = document
      .querySelector('.dropdown:nth-child(5) .dropdown__list-item_active')
      ?.getAttribute("data-value");

    const selectedSeats = Array.from(
      document.querySelectorAll('.dropdown_with-chk__list-item input:checked')
    ).map(checkbox => checkbox.id);

    console.log("Фильтрация:", { selectedManufacturer, selectedRange, selectedPrice, selectedSeats });

    items.forEach(item => {
      const manufacturer = item.dataset.manufacturer || "";
      const range = parseInt(item.dataset.range) || 0;
      const seats = parseInt(item.dataset.seats) || 0;
      const price = parseInt(item.dataset.price.replace(/\D/g, "")) || 0;

      const matchManufacturer = !selectedManufacturer || selectedManufacturer === "Любой" || manufacturer === selectedManufacturer;
      const matchRange = !selectedRange || range >= selectedRange;
      const matchPrice = !selectedPrice || checkPriceRange(price, selectedPrice);
      const matchSeats = selectedSeats.length === 0 || checkSeatRange(seats, selectedSeats);

      item.style.display = (matchManufacturer && matchRange && matchPrice && matchSeats) ? "block" : "none";
    });
  });

  function checkPriceRange(price, range) {
    const [min, max] = range.split("-").map(Number);
    return price >= min && (max ? price <= max : true);
  }

  function checkSeatRange(seats, ranges) {
    return ranges.some(range => {
      const [min, max] = range.split("-").map(Number);
      return seats >= min && (max ? seats <= max : true);
    });
  }

  // 🔄 Сброс фильтров
  btnReset?.addEventListener("click", () => {
    document.querySelectorAll(".dropdown__list-item_active").forEach(item => item.classList.remove("dropdown__list-item_active"));
    document.querySelectorAll(".dropdown__list-item:first-child").forEach(item => item.classList.add("dropdown__list-item_active"));
    document.querySelectorAll(".dropdown_with-chk__list-item input").forEach(checkbox => (checkbox.checked = false));
    items.forEach(item => (item.style.display = "block"));
  });

  // 📌 Сортировка самолетов
  function sortItems(sortType = "name") {
    let sortedItems = [...items];

    if (sortType === "name") {
      sortedItems.sort((a, b) => a.querySelector("h3").textContent.localeCompare(b.querySelector("h3").textContent));
    } else {
      sortedItems.sort((a, b) => {
        const valA = parseInt(a.dataset[sortType]) || 0;
        const valB = parseInt(b.dataset[sortType]) || 0;
        return valB - valA; // Сортируем от большего к меньшему
      });
    }

    itemsContainer.innerHTML = "";
    sortedItems.forEach(item => itemsContainer.appendChild(item));
  }

  document.querySelectorAll(".tabs-options .btn-tab").forEach(button => {
    button.addEventListener("click", event => {
      event.preventDefault();
      const sortType = button.getAttribute("data-sort");

      console.log("Сортировка по:", sortType);
      sortItems(sortType);
    });
  });

  sortItems(); // Сортируем сразу при загрузке

  // 📌 Фильтрация по категории (кнопки tabs-options-cat)
  document.querySelectorAll(".tabs-options-cat .btn").forEach(button => {
    button.addEventListener("click", event => {
      event.preventDefault();
      const category = button.textContent.trim();

      console.log("Фильтрация по категории:", category);

      items.forEach(item => {
        const itemCategory = item.dataset.category;
        item.style.display = (!category || category === itemCategory) ? "block" : "none";
      });
    });
  });

  function updatePagination() {
    const totalItems = items.filter(item => item.style.display !== "none").length;
    const totalPages = Math.ceil(totalItems / itemsPerPage);

    if (pagination) {
      pagination.style.display = totalItems <= itemsPerPage ? "none" : "block";
    }

    if (paginationList) {
      paginationList.innerHTML = "";
    }
    for (let i = 1; i <= totalPages; i++) {
      const li = document.createElement("li");
      li.classList.add("pagination-list-item");
      if (i === currentPage) li.classList.add("is-active");
      li.innerHTML = `<a href="#">${i}</a>`;
      li.addEventListener("click", function (e) {
        e.preventDefault();
        currentPage = i;
        renderPagination();
      });
      if (paginationList) {
        paginationList.appendChild(li);
      }
    }

    if (paginationBack) {
      paginationBack.style.display = currentPage > 1 ? "inline-block" : "none";
    }
    if (paginationForward) {
      paginationForward.style.display = currentPage < totalPages ? "inline-block" : "none";
    }
  }

  function renderPagination() {
    items.forEach((item, index) => {
      const start = (currentPage - 1) * itemsPerPage;
      const end = start + itemsPerPage;
      item.style.display = index >= start && index < end ? "block" : "none";
    });

    document.querySelectorAll(".pagination-list-item").forEach((li, i) => {
      li.classList.toggle("is-active", i + 1 === currentPage);
    });

    if (paginationBack) {
      paginationBack.style.display = currentPage > 1 ? "inline-block" : "none";
    }
    if (paginationForward) {
      paginationForward.style.display = currentPage < Math.ceil(items.length / itemsPerPage) ? "inline-block" : "none";
    }
  }

  paginationBack?.addEventListener("click", function (e) {
    e.preventDefault();
    if (currentPage > 1) {
      currentPage--;
      renderPagination();
    }
  });

  paginationForward?.addEventListener("click", function (e) {
    e.preventDefault();
    if (currentPage < Math.ceil(items.length / itemsPerPage)) {
      currentPage++;
      renderPagination();
    }
  });

  perPageOptions.forEach(option => {
    option.addEventListener("click", function (e) {
      e.preventDefault();
      itemsPerPage = parseInt(this.textContent, 10);
      currentPage = 1;
      updatePagination();
      renderPagination();
    });
  });

  updatePagination();
  renderPagination();








  // открывающиеся меню
  accordion = document.querySelectorAll('.accordion-block');
  accordion.forEach((el) => {
    el.firstElementChild.addEventListener('click', () => {
      if (!el.classList.contains('is-active')) {
        el.classList.add('is-active');
      } else {
        el.classList.remove('is-active');
      }
    });
  });


  // форма с квизом
  let currentStep = 1;
  const firstStep = document.querySelector(".quiz-step.step-1");
  if (firstStep) {
    firstStep.classList.add("active");
  }
  // Обработчик для кнопок "Продолжить"
  document.querySelectorAll(".next-step").forEach((button) => {
    button.addEventListener("click", function () {
      if (currentStep === 1) {
        // Получаем выбранное значение услуги
        let selectedService = document.querySelector('input[name="service"]:checked');

        if (!selectedService) {
          alert("Выберите услугу, чтобы продолжить.");
          return;
        }

        let serviceValue = selectedService.value;
        // console.log("Выбрана услуга:", serviceValue);

        // Скрываем первый шаг и показываем нужный второй шаг
        document.querySelector(".quiz-step.step-1").style.display = "none";
        document.querySelectorAll(".quiz-step.step-2").forEach((step) => {
          step.style.display = "none";
        });

        let nextStep = document.querySelector(`.quiz-step.step-2[data-service="${serviceValue}"]`);
        if (nextStep) {
          nextStep.style.display = "block";
          currentStep = 2;
        }
      } else if (currentStep === 2) {
        // Скрываем второй шаг и показываем третий
        document.querySelectorAll(".quiz-step.step-2").forEach((step) => {
          step.style.display = "none";
        });
        document.querySelector(".quiz-step.step-3").style.display = "block";
        currentStep = 3;
      }
    });
  });

  // Обработчик для кнопок "Назад"
  document.querySelectorAll(".prev-step").forEach((button) => {
    button.addEventListener("click", function () {
      if (currentStep === 2) {
        // Показываем первый шаг
        document.querySelectorAll(".quiz-step.step-2").forEach((step) => {
          step.style.display = "none";
        });
        document.querySelector(".quiz-step.step-1").style.display = "block";
        currentStep = 1;
      } else if (currentStep === 3) {
        // Показываем соответствующий второй шаг
        document.querySelector(".quiz-step.step-3").style.display = "none";
        let selectedService = document.querySelector('input[name="service"]:checked');
        if (selectedService) {
          let serviceValue = selectedService.value;
          document.querySelector(`.quiz-step.step-2[data-service="${serviceValue}"]`).style.display = "block";
          currentStep = 2;
        }
      }
    });
  });

  const swiper = new Swiper('.services-swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 16,
    // slidesOffsetBefore: 36,
    // slidesOffsetAfter: 36,
    breakpoints: {
      // when window width is >= 768px
      768: {
        slidesPerView: 2,
      },
      // when window width is >= 992px
      992: {
        slidesPerView: 2,
        spaceBetween: 24,
        // slidesOffsetBefore: 70,
        // slidesOffsetAfter: 70
      },
      // when window width is >= 668px
      1280: {
        slidesPerView: 3,
        spaceBetween: 32
      }
    },

    // Navigation arrows
    navigation: {
      nextEl: '.services-swiper-button-next',
      prevEl: '.services-swiper-button-prev',
    },
  });

  // табы в отзывах
  const reviewsTabs = document.querySelectorAll(".btn-tab-reviews");
  const filterTabs = document.querySelectorAll(".btn-tab-type");
  const reviewsContainer = document.querySelector(".reviews-grid");

  if (reviewsContainer) {
    let reviews = Array.from(reviewsContainer.children);
    let activeFilter = "all";

    function sortReviews(sortType) {
      let sortedReviews = [...reviews];

      if (sortType === "newest") {
        sortedReviews.sort((a, b) => new Date(b.dataset.date) - new Date(a.dataset.date));
      } else if (sortType === "oldest") {
        sortedReviews.sort((a, b) => new Date(a.dataset.date) - new Date(b.dataset.date));
      } else if (sortType === "positive") {
        sortedReviews.sort((a, b) => b.dataset.rate - a.dataset.rate);
      } else if (sortType === "negative") {
        sortedReviews.sort((a, b) => a.dataset.rate - b.dataset.rate);
      }

      reviewsContainer.innerHTML = "";
      sortedReviews.forEach(review => {
        if (activeFilter === "all" || review.dataset.type.includes(activeFilter)) {
          reviewsContainer.appendChild(review);
        }
      });
    }

    function filterReviews(filterType) {
      activeFilter = filterType;

      reviews.forEach(review => {
        review.style.display = "none";
        if (filterType === "all" || review.dataset.type.includes(filterType)) {
          review.style.display = "block";
        }
      });
    }

    reviewsTabs.forEach(tab => {
      tab.addEventListener("click", function (e) {
        e.preventDefault();
        reviewsTabs.forEach(t => t.classList.remove("is-active"));
        this.classList.add("is-active");

        const sortType = this.getAttribute("data-sort");
        sortReviews(sortType);
      });
    });

    filterTabs.forEach(tab => {
      tab.addEventListener("click", function (e) {
        e.preventDefault();
        filterTabs.forEach(t => t.classList.remove("is-active"));
        this.classList.add("is-active");

        const filterType = this.getAttribute("data-filter");
        filterReviews(filterType);
      });
    });
  }

  // маска для телефона
  document.addEventListener("submit", function (e) {
    let form = e.target;
    let phoneInput = form.querySelector('input[name="your-tel"]');

    if (phoneInput) {
      let phoneValue = phoneInput.value.trim();
      let phonePattern = /^\+\d{1,13}$/;

      if (!phonePattern.test(phoneValue)) {
        e.preventDefault();
        e.stopImmediatePropagation();

        phoneInput.classList.add("wpcf7-not-valid");
        let errorWrap = phoneInput.closest(".wpcf7-form-control-wrap");
        errorWrap.querySelector(".wpcf7-not-valid-tip")?.remove();
        let errorMsg = document.createElement("span");
        errorMsg.classList.add("wpcf7-not-valid-tip");
        errorMsg.textContent = "Введите номер в формате +1234567890";
        errorWrap.appendChild(errorMsg);

        return false;
      }
    }
  }, true);
})

window.addEventListener("load", () => {
  // сравнение самолётов
  const compareContainer = document.querySelector(".compare-main");
  let selectedPlanes = JSON.parse(localStorage.getItem("selectedPlanes")) || [];

  if (selectedPlanes.length === 0) {
    if (compareContainer) {
      compareContainer.innerHTML = "<p>Выберите самолеты для сравнения.</p>";
    }
    return;
  }

  function renderComparison() {
    compareContainer.innerHTML = "";

    selectedPlanes.forEach((plane, index) => {
      const planeHTML = `
                <div class="compare-col" data-index="${index}">
                    <div class="compare-edit">
                        <button class="compare-edit-delete">Удалить</button>
                    </div>
                    <img src="${plane.image}" alt="">
                    <h2 class="h2">${plane.name}</h2>
                    <div class="compare-col-wrap">
                        ${plane.attributes.map(attr => `
                            <div class="compare-col-block">
                                <p class="compare-col-title">${attr.title}</p>
                                <p class="compare-col-desc">${attr.value}</p>
                            </div>
                        `).join('')}
                    </div>
                    <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Арендовать</button>
                </div>
            `;
      compareContainer.insertAdjacentHTML("beforeend", planeHTML);
    });
  }

  compareContainer.addEventListener("click", (event) => {
    if (event.target.classList.contains("compare-edit-delete")) {
      const planeCol = event.target.closest(".compare-col");
      const index = planeCol.dataset.index;
      selectedPlanes.splice(index, 1);
      localStorage.setItem("selectedPlanes", JSON.stringify(selectedPlanes));
      renderComparison();
    }
  });

  renderComparison();
});
