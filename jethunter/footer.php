<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <h2 class="h3">Подпишитесь на нашу Email рассылку и получай эксклюзивные предложения</h2>
            <h3 class="h2">Вступайте в наше сообщество, где уже более 150+ участников</h3>
            <div class="footer-top-links">
                <a href="" class="btn btn-green-fill">Подписаться на рассылку</a>
                <div class="footer-top-socials">
                    <a href="" class="footer-social-link">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/tg-green.svg" loading="lazy" alt="Telegram">
                    </a>
                    <a href="" class="footer-social-link">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/yt-green.svg" loading="lazy" alt="Youtube">
                    </a>
                    <a href="" class="footer-social-link">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/ig-green.svg" loading="lazy" alt="Instagram">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <a href="" class="logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="JetHunter">
            </a>
            <div class="footer-middle-links">
                <a href="/empty-legs" class="footer-middle-link">Пустые перелёты</a>
                <a href="/our-fleet" class="footer-middle-link">Наш флот</a>
                <a href="/tour" class="footer-middle-link">Предложения</a>
                <a href="/blog" class="footer-middle-link">Блог</a>
                <a href="/affiliate" class="footer-middle-link">Партнерская программа</a>
                <a href="/reviews" class="footer-middle-link">Отзывы</a>
                <a href="/contact" class="footer-middle-link">Контакты</a>
                <a href="/faq" class="footer-middle-link">Вопросы и ответы</a>
                <a href="/services" class="footer-middle-link">Услуги</a>
            </div>
            <p class="footer-copyright">«Jet Hunter» использует файлы «cookie», с целью персонализации сервисов
                и повышения удобства пользования веб-сайтом. «Cookie» представляют собой небольшие файлы, содержащие
                информацию о предыдущих посещениях веб-сайта. Если вы не хотите использовать файлы «cookie»,
                измените настройки браузера.</p>
        </div>
        <div class="footer-bottom">
            <a href="tel:+77710000000" class="footer-bottom-tel">+7 771 000 0000</a>
            <div class="footer-bottom-socials">
                <a href="" class="footer-social-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/tg-white.svg" loading="lazy"
                        alt="Telegram"></a>
                <a href="" class="footer-social-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/wa-white.svg" loading="lazy"
                        alt="Whatsapp"></a>
                <a href="" class="footer-social-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/call-white.svg" loading="lazy"
                        alt="Phone number"></a>
            </div>
        </div>
    </div>
</footer>

<div id="call" class="modal-window modal-call">
    <div class="modal-inner is-active">
        <a href="#" class="modal-close btn-close">Закрыть</a>
        <h2 class="h2">Как с вами связаться?</h2>
        <!-- <form action="contact.php" id="contact-form" method="POST" class="form-vertical">
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
        </form> -->
        <?php echo do_shortcode('[contact-form-7 id="5c9874b" title="Узнать стоимость"]'); ?>
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

<div id="quiz" class="modal-window modal-quiz">
    <div class="modal-inner is-active">
        <a href="#" class="modal-close btn-close">Закрыть</a>
        <div class="quiz-wrap">
            <div class="quiz-left">
                <div class="quiz-left-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/quiz-img.jpg" alt="">
                </div>
            </div>
            <div class="quiz-right">
                <?php /* echo do_shortcode('[contact-form-7 id="a1ae65c" title="Квиз"]'); */ ?>
            </div>
        </div>
    </div>
</div>

<div class="modal-window__backdrop hidden" id="modal-backdrop"></div>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>
</body>

</html>
</div>
<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(99736467, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/99736467" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>

</html>