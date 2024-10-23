document.addEventListener("DOMContentLoaded", function(event) {
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

    // sendForm = document.querySelector(".btn-call-send");
    // sendForm.addEventListener("click", function(e) {
    //     document.querySelector("#call .modal-inner").classList.remove("is-active");
    //     document.querySelector("#call .modal-thanks").classList.add("is-active");
    // })

    document.querySelector("#contact-form").addEventListener("submit", function(e) {
      e.preventDefault();

      let formData = new FormData(this);

      fetch('../contact.php', {
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
});