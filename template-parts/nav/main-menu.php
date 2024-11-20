<?php
if (has_nav_menu('main-menu')):
	$main_nav = array(
		'theme_location' => 'main-menu',
		'container' => false,
		'items_wrap' => '<ul class="first-lvl">' . "\n" . '%3$s</ul>',
	);

	$woo_cart = get_theme_mod('webspeed_woo_card');
	if ($woo_cart == true && class_exists('WooCommerce')) {
		echo '<nav class="site-menu woo-site-menu mobile-menu js-nav-toggle">';
		get_template_part('img/menu', 'icon-close');
		wp_nav_menu($main_nav);
		if (is_active_sidebar('menu-widget')) {
			echo '<div class="menu-widget">';
			dynamic_sidebar('menu-widget');
			echo '</div>';
		}
		echo '</nav>';
	} else {
		echo '<nav class="' . web_menu() . ' mobile-menu js-nav-toggle ';
		web_menu_pos();
		echo '">';
		get_template_part('img/menu', 'icon-close');
		wp_nav_menu($main_nav);
		if (is_active_sidebar('menu-widget')) {
			echo '<div class="menu-widget">';
			dynamic_sidebar('menu-widget');
			echo '</div>';
		}
		echo '</nav>';
	}
	
endif;

// ---------------------------------------

// $menu_name = 'main-menu'; // Skift til dit eget menunavn
// $locations = get_nav_menu_locations();

// if (isset($locations[$menu_name])) {
//     $menu = wp_get_nav_menu_items($locations[$menu_name]);
//     $menu_items_by_parent = [];

    
//     // Organiserer menuen hierarkisk
//     foreach ($menu as $menu_item) {
//         $menu_items_by_parent[$menu_item->menu_item_parent][] = $menu_item;
//     }
//     // Rekursiv funktion til at bygge menuen
//     function build_menu($parent_id, $menu_items_by_parent) {
      
//         if (isset($menu_items_by_parent[$parent_id])) {
//             echo '<ul' . ($parent_id == 0 ? ' class="first-lvl"' : ' class="sub-menu"') . '>';

//             foreach ($menu_items_by_parent[$parent_id] as $menu_item) {
//                 // Tjekker om der er et sub-menu
//                 $has_children = !empty($menu_items_by_parent[$menu_item->ID]);
// 								$customClass = 'menu-item';

//                 // Tjekker om der er nogen klasser og fjerner tomme strenge
//                 if (!empty($menu_item->classes) && is_array($menu_item->classes)) {
//                     // Filtrerer tomme strenge ud af arrayet
//                     $filtered_classes = array_filter($menu_item->classes);
//                     if (!empty($filtered_classes)) {
//                         $customClass .= ' ' . implode(' ', $filtered_classes);
//                     }
//                 }

//                 echo '<li class="' . $customClass . ($has_children ? ' menu-item-has-children' : '') . '">';
                
//                   // Udskriv linket og titlen
//                   echo '<a href="' . esc_url($menu_item->url) . '"';
//                     // Target
//                     if (isset($menu_item->target) && !empty($menu_item->target)) {
//                         echo ' target="' . esc_attr($menu_item->target) . '"';
//                     }
//                     // Title
//                     if (isset($menu_item->attr_title) && !empty($menu_item->attr_title)) {
//                       echo ' title="' . esc_attr($menu_item->attr_title) . '"';
//                     }
                  
// 										echo '><span class="menu-item-title">' . esc_html($menu_item->title) . '</span>';
// 										// Udskriv beskrivelsen, hvis der er en
// 										if (!empty($menu_item->description)) {
// 												echo '<span class="menu-item-description">' . esc_html($menu_item->description) . '</span>';
// 										}
// 										echo '</a>';

//                   // Hvis menu-elementet har underpunkter, kaldes funktionen rekursivt
//                   if ($has_children) {
//                       build_menu($menu_item->ID, $menu_items_by_parent);
//                   }

//                 echo '</li>';
//             }

//             echo '</ul>';
//         }
        
//     }
//     // Start menuen fra toppen (parent_id = 0)
//     echo '<nav class="site-menu center mobile-menu js-nav-toggle right-align">';
//     build_menu(0, $menu_items_by_parent);
//     echo '</nav>';
// }

// -----------------------------------------------

// $menu_name = 'main-menu'; // Skift til dit eget menunavn
// $locations = get_nav_menu_locations();

// if (isset($locations[$menu_name])) {
//     $menu = wp_get_nav_menu_items($locations[$menu_name]);
//     $menu_items_by_parent = [];
//     $active_parents = []; // Array til at holde ID'er for alle forældre til det aktive element

//     // Organiserer menuen hierarkisk og finder alle aktive forældre-IDs
//     foreach ($menu as $menu_item) {
//         $menu_items_by_parent[$menu_item->menu_item_parent][] = $menu_item;
        
//         // Hvis dette menupunkt er det aktive, sporer vi forældre op til toppen
//         if ($menu_item->object_id == get_queried_object_id()) {
//             $current_item = $menu_item;
//             while ($current_item && $current_item->menu_item_parent != 0) {
//                 $active_parents[] = $current_item->menu_item_parent;
//                 $parent_items = wp_filter_object_list($menu, ['ID' => $current_item->menu_item_parent]);

//                 // Sikkerhedstjek for at undgå null-værdier
//                 $current_item = !empty($parent_items) ? array_shift($parent_items) : null;
//             }
//         }
//     }

//     // Rekursiv funktion til at bygge menuen
//     function build_menu($parent_id, $menu_items_by_parent, $active_parents) {
//         if (isset($menu_items_by_parent[$parent_id])) {
//             echo '<ul' . ($parent_id == 0 ? ' class="first-lvl"' : ' class="sub-menu"') . '>';

//             foreach ($menu_items_by_parent[$parent_id] as $menu_item) {
//                 // Tjek om dette menu-item er aktivt
//                 $is_active = ($menu_item->object_id == get_queried_object_id());
//                 $has_children = !empty($menu_items_by_parent[$menu_item->ID]);
//                 $customClass = 'menu-item';

//                 // Tilføj active-klasse til det aktive menupunkt
//                 if ($is_active) {
//                     $customClass .= ' active';
//                 }

//                 // Tilføj has-active-child klasse til forældre-<li>
//                 if (in_array($menu_item->ID, $active_parents)) {
//                     $customClass .= ' has-active-child';
//                 }

//                 // Tilføj eventuelle yderligere klasser fra WordPress-menuen
//                 if (!empty($menu_item->classes) && is_array($menu_item->classes)) {
//                     $filtered_classes = array_filter($menu_item->classes);
//                     if (!empty($filtered_classes)) {
//                         $customClass .= ' ' . implode(' ', $filtered_classes);
//                     }
//                 }

//                 echo '<li class="' . esc_attr($customClass) . ($has_children ? ' menu-item-has-children' : '') . '">';

//                 // Udskriv linket og titlen
//                 echo '<a href="' . esc_url($menu_item->url) . '"';
//                 if (!empty($menu_item->target)) {
//                     echo ' target="' . esc_attr($menu_item->target) . '"';
//                 }
//                 if (!empty($menu_item->attr_title)) {
//                     echo ' title="' . esc_attr($menu_item->attr_title) . '"';
//                 }
//                 echo '><span class="menu-item-title">' . esc_html($menu_item->title) . '</span>';

//                 // Udskriv beskrivelsen, hvis der er en
//                 if (!empty($menu_item->description)) {
//                     echo '<span class="menu-item-description">' . esc_html($menu_item->description) . '</span>';
//                 }
//                 echo '</a>';

//                 // Hvis menu-elementet har underpunkter, kaldes funktionen rekursivt
//                 if ($has_children) {
//                     build_menu($menu_item->ID, $menu_items_by_parent, $active_parents);
//                 }

//                 echo '</li>';
//             }

//             echo '</ul>';
//         }
//     }

//     // Start menuen fra toppen (parent_id = 0)
//     echo '<nav class="site-menu center mobile-menu js-nav-toggle right-align">';
//     build_menu(0, $menu_items_by_parent, $active_parents);
//     echo '</nav>';
// }
