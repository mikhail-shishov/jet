<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <h2 class="h3">Подпишитесь на нашу Email рассылку и получай эксклюзивные предложения</h2>
            <h3 class="h2">Вступайте в наше сообщество, где уже более 150+ участников</h3>
            <div class="footer-top-links">
                <a href="" class="btn btn-green-fill">Подписаться на Email</a>
                <div class="footer-top-socials">
                    <a href="" class="footer-social-link">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/tg-green.svg" loading="lazy" alt="">
                    </a>
                    <a href="" class="footer-social-link">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/yt-green.svg" loading="lazy" alt="">
                    </a>
                    <a href="" class="footer-social-link">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/ig-green.svg" loading="lazy" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <a href="" class="logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="">
            </a>
            <div class="footer-middle-links">
                <a href="" class="footer-middle-link">Пустые перелёты</a>
                <a href="" class="footer-middle-link">Наш флот</a>
                <a href="" class="footer-middle-link">Предложения</a>
                <a href="" class="footer-middle-link">Блог</a>
                <a href="" class="footer-middle-link">Партнерская программа</a>
                <a href="" class="footer-middle-link">Отзывы</a>
                <a href="" class="footer-middle-link">Контакты</a>
                <a href="" class="footer-middle-link">Вопросы и ответы</a>
                <a href="" class="footer-middle-link">Услуги</a>
            </div>
            <p class="footer-copyright">ООО «Leader Jet» использует файлы «cookie», с целью персонализации сервисов
                и повышения удобства пользования веб-сайтом. «Cookie» представляют собой небольшие файлы, содержащие
                информацию о предыдущих посещениях веб-сайта. Если вы не хотите использовать файлы «cookie»,
                измените настройки браузера.</p>
        </div>
        <div class="footer-bottom">
            <a href="tel:+74950000000" class="footer-bottom-tel">+7 495 000 00 00</a>
            <div class="footer-bottom-socials">
                <a href="" class="footer-social-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/tg-white.svg" loading="lazy"
                        alt=""></a>
                <a href="" class="footer-social-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/wa-white.svg" loading="lazy"
                        alt=""></a>
                <a href="" class="footer-social-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/call-white.svg" loading="lazy"
                        alt=""></a>
            </div>
        </div>
    </div>
</footer>

<div id="call" class="modal-window">
    <div class="modal-inner is-active">
        <a href="#" class="modal-close btn-close">Закрыть</a>
        <h2 class="h2">Как с вами связаться?</h2>
        <form action="contact.php" id="contact-form" method="POST" class="form-vertical">
            <div class="input-wrap">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/form-person.svg" class="input-wrap-icon" loading="lazy" alt="">
                <input type="text" name="username" id="username" class="input" required placeholder="ФИО">
            </div>
            <div class="input-wrap">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/form-phone.svg" class="input-wrap-icon" loading="lazy" alt="">
                <input type="text" name="phone" id="phone" class="input" required placeholder="Телефон">
            </div>
            <div class="input-wrap">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/form-email.svg" class="input-wrap-icon" loading="lazy" alt="">
                <input type="text" name="email" id="email" class="input" required placeholder="Почта">
            </div>
            <div class="input-wrap">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/form-comment.svg" class="input-wrap-icon" loading="lazy" alt="">
                <textarea name="message" id="message" class="input" placeholder="Оставьте комментарий"></textarea>
            </div>
            <button type="submit" class="btn btn-green-fill btn-call-send">Отправить</button>
        </form>
    </div>
    <div class="modal-thanks">
        <a href="#" class="modal-close btn-close">Закрыть</a>
        <div class="modal-thanks-content">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/check_circle.svg" class="modal-thanks-check" alt="">
            <h2 class="h2">Спасибо за вашу заявку!</h2>
            <p>Мы свяжемся с вами в течении 3-ёх суток</p>
        </div>
        <a href="#" class="btn modal-close btn-green-fill">Закрыть</a>
    </div>
</div>

<div class="modal-window__backdrop hidden" id="modal-backdrop"></div>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>
</body>

</html>
</div>
<?php wp_footer(); ?>
</body>

</html>