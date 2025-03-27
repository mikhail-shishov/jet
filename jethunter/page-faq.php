<?php
/* Template Name: FAQ */
?>

<?php get_header(); ?>

<article class="article">
    <div class="container">
        <!-- <a href="" class="breadcrumbs-back">← К новостям</a> -->
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
        <h1 class="h1">Отвечаем на Часто задаваемые вопросы</h1>
        <div class="article-info">
            <span class="article-date">17.07.2024</span>
            <span class="article-info-time">1 мин</span>
        </div>
        <div class="article-hero">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/faq-hero.jpg" class="article-hero-img" alt="">
        </div>
        <!-- <div class="article-wrap article-wrap-page">
            <div class="article-body">
                <p><strong>В этой статье мы отвечаем на самые частые вопросы о наших клиентов: Как арендовать частный самолет? Как выбрать воздушное судно при заказе самолета? Что входит в стоимость аренды частного самолета? Могу ли я изменить условия забронированного рейса? Каким образом обеспечивается безопасность перелета? Каков уровень подготовки пилотов? Что случится, если я опоздаю на свой рейс?</strong></p>
                <div class="accordion-container">
                    <div class="accordion-block">
                        <div class="accordion-heading">
                            <p class="accordion-heading-name">Как арендовать частный самолет?</p>
                        </div>
                        <div class="accordion-text">
                            <p>Позвонить нам в компанию / оставить заявку любым удобным способом и сообщить желаемые даты перелета и количество пассажиров. Мы подготовим вам лучшее предложение, исходя из ваших пожеланий. Далее вы выбираете понравившийся самолет и после подписания договора – оплачиваете его. После вы предоставляете список пассажиров и пожелания по питанию, а мы организовываем для вас рейс. В назначенный день вы приезжаете в аэропорт, где вас будет ждать заказанный самолет и экипаж.</p>
                        </div>
                    </div>
                    <div class="accordion-block">
                        <div class="accordion-heading">
                            <p class="accordion-heading-name">Как выбрать воздушное судно при заказе самолета?</p>
                        </div>
                        <div class="accordion-text">
                            <p>При выборе судна существуют несколько основных критериев: количество пассажиров, дальность перелета, размер самолета, от которого зависит уровень комфорта и бюджет. Мы предоставим несколько самолетов на выбор и расскажем, чем они отличаются.</p>
                        </div>
                    </div>
                    <div class="accordion-block">
                        <div class="accordion-heading">
                            <p class="accordion-heading-name">Что входит в стоимость аренды частного самолета?</p>
                        </div>
                        <div class="accordion-text">
                            <p>В стоимость перелета на частном борту включены: воздушное судно с экипажем; VIP-терминалы (при их наличии); VIP-питание, аэропортовые сборы и дополнительные услуги по вашему желанию.</p>
                        </div>
                    </div>
                    <div class="accordion-block">
                        <div class="accordion-heading">
                            <p class="accordion-heading-name">Могу ли я изменить условия забронированного рейса?</p>
                        </div>
                        <div class="accordion-text">
                            <p>Вы, несомненно, можете изменить условия рейса, а мы приложим все усилия, чтобы все изменения были выполнены.</p>
                        </div>
                    </div>
                    <div class="accordion-block">
                        <div class="accordion-heading">
                            <p class="accordion-heading-name">Каким образом обеспечивается безопасность перелета? Каков уровень подготовки пилотов?</p>
                        </div>
                        <div class="accordion-text">
                            <p>Мы предлагаем самолеты только в летной годности, с действующими страховыми сертификатами и своевременно пройденным техобслуживанием. Все пилоты имеют действующие лицензии и регулярно проходят обучение.</p>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="article-sidebar">
                <div class="form-bg">
                    <?php echo do_shortcode('[contact-form-7 id="1f2bdf6" title="Вопрос в FAQ"]'); ?>
                </div>
            </aside>
        </div> -->
    
        <?php include_once get_stylesheet_directory() . '/components/ru/faq.php'; ?>
    </div>
</article>

<?php include_once get_stylesheet_directory() . '/components/ru/services-slider.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/quiz.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/seo-ceo.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/features.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/services-compare.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-2.php'; ?>

<?php get_footer(); ?>