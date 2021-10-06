<?php
if (has_nav_menu('main-menu')):
    $main_nav = array(
    'theme_location' => 'main-menu',
    'container'      => false,
    'items_wrap'     => '<ul>' . "\n" . '%3$s</ul>',
);
echo '<nav class="site-menu js-nav-toggle ';
    web_menu_pos();
    echo '">';
    get_template_part('img/menu', 'icon-close');
    wp_nav_menu($main_nav);
    web_social_menu();
    if (is_active_sidebar('menu-widget')){
    echo '<div class="menu-widget">';
        dynamic_sidebar('menu-widget');
    echo '</div>';
    }
echo '</nav>';
endif;