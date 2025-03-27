<div class="container">
    <div class="article-wrap article-wrap-page">
        <div class="article-body">
            <p><strong>In this article, we answer the most frequently asked questions from our clients: How to rent a private jet? How to choose an aircraft on board an airplane? What is included in the cost of renting a private jet? Can I change the conditions of the booked flight? How is the flight ensured? What is the level of training of the pilots? What happens if I miss my flight?</strong></p>
            <?php $faq_items = carbon_get_theme_option('faq_items_en');
            if (empty($faq_items)) return;
            ?>
            <div class="accordion-container">
                <?php foreach ($faq_items as $item) : ?>
                    <div class="accordion-block">
                        <div class="accordion-heading">
                            <p class="accordion-heading-name"><?php echo esc_html($item['question']); ?></p>
                        </div>
                        <div class="accordion-text">
                            <p><?php echo nl2br(esc_html($item['answer'])); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- <div class="accordion-container">
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
            </div> -->

            <!-- <h3 class="h3">Что случится, если я опоздаю на свой рейс?</h3>
            <div class="article-note article-note-contact">
                <div class="article-note-person">
                    <p class="article-note-name">При опоздании самолет и экипаж будет ждать вас, и вы сможете вылететь во столько, во сколько вам будет удобно. В случае сильной задержки мы согласуем с авиакомпанией перенос рейса на более позднее время или следующий день.</p>
                </div>
            </div> -->
        </div>
        <aside class="article-sidebar">
            <div class="form-bg">
                <?php echo do_shortcode('[contact-form-7 id="1f2bdf6" title="Вопрос в FAQ"]'); ?>
            </div>
        </aside>
    </div>
</div>