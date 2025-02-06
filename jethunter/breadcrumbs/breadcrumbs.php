<?php function get_breadcrumb() {
    echo "<div class='breadcrumbs'>";
    if(pll_current_language() == 'en'){
        echo '<a href="'.home_url().'" class="breadcrumbs-link">Home</a>';
    } else {
        echo '<a href="'.home_url().'" class="breadcrumbs-link">Главная</a>';
    }
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&gt;&nbsp;&nbsp;<span class='breadcrumbs-item'>";
                the_title();
                echo "</span>";
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&gt;&nbsp;&nbsp;<span class='breadcrumbs-item'>";
        echo the_title();
        echo "</span>";
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
    echo "</div>";
} ?>