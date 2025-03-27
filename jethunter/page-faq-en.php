<?php
/* Template Name: FAQ EN */
?>

<?php get_header(); ?>

<article class="article">
    <div class="container">
        <!-- <a href="" class="breadcrumbs-back">← К новостям</a> -->
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
        <h1 class="h1">FAQ</h1>
        <div class="article-info">
            <span class="article-date">17.07.2024</span>
            <span class="article-info-time">1 min</span>
        </div>
        <div class="article-hero">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/faq-hero.jpg" class="article-hero-img" alt="">
        </div>
        <!-- <div class="article-body">
            <p><strong>In this article, we answer the most frequently asked questions from our clients: How to rent a private jet? How to choose an aircraft on board an airplane? What is included in the cost of renting a private jet? Can I change the conditions of the booked flight? How is the flight ensured? What is the level of training of the pilots? What happens if I miss my flight?</strong></p>
            <div class="accordion-container">
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">How to rent a private jet?</p>
                    </div>
                    <div class="accordion-text">
                        <p>Call us at the company / leave a request in any convenient way and tell us the desired flight date and number of passengers. We will prepare the best for you, based on your wishes. Then you choose the aircraft you like and after signing the contract - pay for it. After you provide a list of passengers and food preferences, we will organize a flight for you. On the appointed day, you arrive at the airport, where the ordered aircraft and crew will be waiting for you.</p>
                    </div>
                </div>
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">How to choose an aircraft on board an airplane?</p>
                    </div>
                    <div class="accordion-text">
                        <p>When choosing equipment, there are several main parameters: the number of passengers, the flight range, the size of the aircraft, which determines the level of comfort and the budget. We offer several aircraft to choose from, in different sizes and shapes.</p>
                    </div>
                </div>
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">What is included in the price of renting a private jet?</p>
                    </div>
                    <div class="accordion-text">
                        <p>The cost of a flight on a private jet with the lights on: aircraft with a crew; VIP terminals (if available); VIP meals, airport fees and additional services at your request.</p>
                    </div>
                </div>
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">Can I change the conditions of the booked flight?</p>
                    </div>
                    <div class="accordion-text">
                        <p>You can, of course, change the conditions of the flight, and we will make every effort to ensure that all changes are carried out.</p>
                    </div>
                </div>
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">How is the flight safe? What is the level of training of the pilots?</p>
                    </div>
                    <div class="accordion-text">
                        <p>We offer aircraft only in the summer year, with current insurance certificates and timely maintenance. All pilots are employed and undergo regular training.</p>
                    </div>
                </div>
            </div> -->
            <!-- <h3 class="h3">Как арендовать частный самолет?</h3> -->
            <!-- <div class="article-note article-note-contact">
                <div class="article-note-person">
                    <p class="article-note-name">Позвонить нам в компанию / оставить заявку любым удобным способом и сообщить желаемые даты перелета и количество пассажиров. Мы подготовим вам лучшее предложение, исходя из ваших пожеланий. Далее вы выбираете понравившийся самолет и после подписания договора – оплачиваете его. После вы предоставляете список пассажиров и пожелания по питанию, а мы организовываем для вас рейс. В назначенный день вы приезжаете в аэропорт, где вас будет ждать заказанный самолет и экипаж.</p>
                </div>
            </div>
            <h3 class="h3">Как выбрать воздушное судно при заказе самолета?</h3>
            <div class="article-note article-note-contact">
                <div class="article-note-person">
                    <p class="article-note-name">При выборе судна существуют несколько основных критериев: количество пассажиров, дальность перелета, размер самолета, от которого зависит уровень комфорта и бюджет. Мы предоставим несколько самолетов на выбор и расскажем, чем они отличаются.</p>
                </div>
            </div>
            <h3 class="h3">Что входит в стоимость аренды частного самолета?</h3>
            <div class="article-note article-note-contact">
                <div class="article-note-person">
                    <p class="article-note-name">В стоимость перелета на частном борту включены: воздушное судно с экипажем; VIP-терминалы (при их наличии); VIP-питание, аэропортовые сборы и дополнительные услуги по вашему желанию.</p>
                </div>
            </div>
            <h3 class="h3">Могу ли я изменить условия забронированного рейса?</h3>
            <div class="article-note article-note-contact">
                <div class="article-note-person">
                    <p class="article-note-name">Вы, несомненно, можете изменить условия рейса, а мы приложим все усилия, чтобы все изменения были выполнены.</p>
                </div>
            </div>
            <h3 class="h3">Каким образом обеспечивается безопасность перелета? Каков уровень подготовки пилотов?</h3>
            <div class="article-note article-note-contact">
                <div class="article-note-person">
                    <p class="article-note-name">Мы предлагаем самолеты только в летной годности, с действующими страховыми сертификатами и своевременно пройденным техобслуживанием. Все пилоты имеют действующие лицензии и регулярно проходят обучение.</p>
                </div>
            </div>
            <h3 class="h3">Что случится, если я опоздаю на свой рейс?</h3>
            <div class="article-note article-note-contact">
                <div class="article-note-person">
                    <p class="article-note-name">При опоздании самолет и экипаж будет ждать вас, и вы сможете вылететь во столько, во сколько вам будет удобно. В случае сильной задержки мы согласуем с авиакомпанией перенос рейса на более позднее время или следующий день.</p>
                </div>
            </div> -->
        <!-- </div> -->

        <?php include_once get_stylesheet_directory() . '/components/en/faq.php'; ?>
    </div>
</article>

<?php get_footer(); ?>