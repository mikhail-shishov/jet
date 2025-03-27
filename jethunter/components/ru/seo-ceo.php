<!-- <section class="about-sect">
    <div class="container">
        <h2 class="h2 center">Слово генерального директора</h2>

        <div class="about-text">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/about.svg" width="460" height="460" class="about-img" loading="lazy" alt="">

            <p>В Jet Hunter мы верим, что время – самый ценный ресурс, небо – не предел, а пространство для новых возможностей. Мы помогаем людям, ценящим свое время и стремящимся к максимальной эффективности, преодолевать любые расстояния с непревзойденным комфортом и стилем.</p>
            <p>Jet Hunter – это не просто компания по продаже бизнес-джетов. Это команда, страстно преданных своему делу и готовых превзойти ваши ожидания. Мы учитываем индивидуальные потребности каждого клиента, предлагая не только широкий выбор самолетов от ведущих мировых производителей, но и полный спектр услуг, связанных с владением и эксплуатацией бизнес-джета.</p>
            <p>Мы ценим доверие, которое вы нам оказываете, и стремимся строить долгосрочные и взаимовыгодные отношения с каждым клиентом.</p>
            <p>С Jet Hunter вы получаете не просто самолет, вы получаете ключ к безграничным возможностям!</p>
            <br>
            <p>С уважением,</p>
            <p>Алексей Мордвинцев</p>
        </div>
    </div>
</section> -->
<?php $about_seo_section_text = carbon_get_theme_option('about_seo_section_text'); ?>
<section class="about-sect">
    <div class="container">
        <h2 class="h2 center">Слово генерального директора</h2>
        <div class="about-text">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/about.svg" width="460" height="460" class="about-img" loading="lazy" alt="">
            <?php echo wpautop($about_seo_section_text); ?>
        </div>
    </div>
</section>