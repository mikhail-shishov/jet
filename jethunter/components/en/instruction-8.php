<?php $steps_8 = carbon_get_theme_option('steps_8_en');
if (empty($steps_8)) return;
?>

<section class="instruction-sect">
    <div class="container">
        <h2 class="h2 center">We do 8 steps for your perfect flight</h2>
        <div class="instruction-wrap">
            <!-- <div class="instruction-block">
                <h3 class="h3">Flight request</h3>
                <p>Our experienced team will clarify all details on the route, dates and type of aircraft as well as all your wishes. We will tell you about all the features and possibilities!</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Aircraft selection</h3>
                <p>We will find perfect option to suit your requirements and budget. We will offer several aircraft and give you detailed information about each one, so you can make the right choice!</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Charter contract</h3>
                <p>After agreeing on all the details, we will prepare a charter agreement regulating all the nuances of our work, so you can be sure of legal and financial security.</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">OPS checking</h3>
                <p>Unlike many other brokers, our OPS department checks all flight documentation, all necessary operator requests and permits, catering orders based on your preferences and coordinate airport services. You will have no last moment surprises with us!</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Flight briefing</h3>
                <p>We will check all the data in advance and prepare flight briefing for you with all the details of your ideal flight: itinerary, airplane number, crew and terminal contacts.</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Food inspection</h3>
                <p>A day before the flight, we will check the correctness of your catering order to prevent any surprises. Rare items that cannot be provided by the catering company, we will purchase on our own. We will do everything for your comfort and pleasure.</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Checking the ferry flight</h3>
                <p>We will track the aircraft's location in real time a day in advance of your flight, control on-time departure and inform you of the aircraft's arrival time at the airport. This is all to prevent delays and warn you in advance in case of any change in schedule.</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Departure on time!</h3>
                <p>We will personally supervise preparation for departure, meet you at the terminal and do everything to make your trip as comfortable and safe as possible. You and your family will be happy!</p>
            </div> -->
            <?php foreach ($steps_8 as $index => $step): ?>
                <div class="instruction-block">
                    <h3 class="h3"><?php echo esc_html($step['title']); ?></h3>
                    <p><?php echo esc_html($step['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>