<?php
if (has_nav_menu('main-menu')):
    $main_nav = array(
    'theme_location' => 'main-menu',
    'container'      => false,
    'items_wrap'     => '<ul class="first-lvl">' . "\n" . '%3$s</ul>',
);
echo '<nav class="' . web_menu() . ' mobile-menu js-nav-toggle ';
    web_menu_pos();
    echo '">';
    get_template_part('img/menu', 'icon-close');
    wp_nav_menu($main_nav);
    if (is_active_sidebar('menu-widget')){
    echo '<div class="menu-widget">';
        dynamic_sidebar('menu-widget');
    echo '</div>';
    }
echo '</nav>';
endif;
