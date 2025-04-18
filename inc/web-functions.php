<?php
// Logo
if (!function_exists('logo_absolute')) {
	function logo_absolute() {
		return ' logo-absolute';
	}
}

if (!function_exists('web_logo')) {
	function web_logo() {
		$logo_name = get_theme_mod('webspeed_logo_checkbox');

		$logo_mobil = get_theme_file_path() . '/logo-mobil.png';

		$custom_logo_id = get_theme_mod('custom_logo');
		$logo = wp_get_attachment_image_src($custom_logo_id, 'full');

		if (file_exists($logo_mobil)) {
			$logo_class = 'only-desktop';
			list($width, $height) = getimagesize($logo_mobil);
		} else {
			$logo_class = 'no-mobil-logo';
		}

		if ($logo_name == false) {
			echo '<div class="logo-name">';
			if (has_custom_logo()) {
				echo '<div class="logo">';
				echo '<a class="' . $logo_class . '" href="' . home_url() . '" title="' . get_bloginfo('name') . '"><img id="logo" width="' . $logo[1] . '" height="' . $logo[2] . '" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
				if (file_exists($logo_mobil)) {
					echo '<a href="' . home_url() . '" class="only-mobile" title="' . get_bloginfo('name') . '"><img id="logo-mobil" width="' . $width . '" height="' . $height . '" src="' . get_stylesheet_directory_uri() . '/logo-mobil.png" alt="' . get_bloginfo('name') . '"></a>';

				}
				echo '</div>';
				echo "\n";
			} else {
				if (get_bloginfo('name') !== '') {
					echo '<div class="name">';
					echo '<span class="site-name"><a href="' . home_url() . '">' . get_bloginfo('name') . '</a></span>';

					if (get_bloginfo('description') !== '') {
						echo '<span class="site-desc">' . get_bloginfo('description') . '</span>';
					}
					echo '</div>';
					echo "\n";
				}
			}
			echo '</div>';
		}

		if ($logo_name == true) {
			echo '<div class="logo-name flex">';
			if (has_custom_logo()) {
				echo '<div class="logo">';
				echo '<a class="' . $logo_class . '" href="' . home_url() . '"><img id="logo" width="' . $logo[1] . '" height="' . $logo[2] . '" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
				if (file_exists($logo_mobil)) {
					echo '<a href="' . home_url() . '" class="only-mobile"><img id="logo-mobil" width="' . $width . '" height="' . $height . '" src="' . get_stylesheet_directory_uri() . '/logo-mobil.png" alt="' . get_bloginfo('name') . '"></a>';

				}
				echo '</div>';
				echo "\n";
			}
			if (get_bloginfo('name') !== '') {
				echo '<div class="name">';
				echo '<span class="site-name"><a href="' . home_url() . '">' . get_bloginfo('name') . '</a></span>';

				if (get_bloginfo('description') !== '') {
					echo '<span class="site-desc">' . get_bloginfo('description') . '</span>';
				}
				echo '</div>';
				echo "\n";
			}
			echo '</div>';
		}

	}
}

// Menu type

if (!function_exists('web_menu')) {
	function web_menu() {
		$menu_vertical = get_theme_mod('webspeed_menu_pos_dropdown');

		return 'site-menu ' . $menu_vertical;

		// megamenu
	}
}

// Menu desktop align
function web_menu_pos() {
	$menu_left = get_theme_mod('webspeed_menu_left_checkbox');
	if ($menu_left == false) {
		echo 'right-align';
	}
}

// BackButton

function web_go_back() {
	echo '<div class="go-back-con">';
	echo '<button onclick="goBack()" class="go-back"><svg height="20" width="20"><path d="M7.938 17.812.125 10l7.813-7.812L9.271 3.5l-6.5 6.5 6.5 6.479Z"/></svg>' . esc_html__('Tilbage', 'webspeed-domain') . '</button>';
	echo '<script>function goBack() {window.history.back();}</script>';
	echo '</div>';
}

// Read More

function web_read_more() {
	echo '<p class="read-more"><a href="' . get_the_permalink() . '">' . esc_html__('Read More', 'webspeed-domain') . '</a></p>';
}

// Edit link taget _blank
add_filter('edit_post_link', function ($link, $post_id, $text) {
	// Add the target attribute
	if (false === strpos($link, 'target=')) {
		$link = str_replace('<a ', '<a target="_blank" ', $link);
	}

	return $link;
}, 10, 3);

// Edit link
function web_edit_link() {
	if (!is_single()) {
		edit_post_link(__('+', 'webspeed-domain'), '<p>', '</p>');
	}
}

function web_excerpt() {
	echo '<div class="the-excerpt">';
	the_excerpt();
	echo '</div>';
}

// Thumbnail

function web_foto() {
	$img_description = get_post(get_post_thumbnail_id())->post_content;
	if ($img_description) {
		echo '<div class="photo-credit">Foto: ' . $img_description . '</div>';
	}
}

function web_blog_thumbnail() {
	if (has_post_thumbnail()) {
		echo '<div class="img-zoom oversigt-post-img">';
		echo '<a href="' . get_the_permalink() . '" aria-label="' . get_the_title() . '">';
		the_post_thumbnail('webspeed-post');
		echo '</a>';
		echo '</div>';
	}
}

function web_thumbnail_link() {

	if (!class_exists('ACF')) {

		if (has_post_thumbnail()) {
			echo '<div class="img-zoom">';
			echo '<a href="' . get_the_permalink() . '" aria-label="' . get_the_title() . '">';
			the_post_thumbnail('webspeed-post');
			echo '</a>';
			echo '</div>';
		}

	} else {
		$image = get_field('billede');
		$size = 'webspeed-post';
		if ($image) {

			echo '<div class="img-zoom">';
			echo '<a href="' . get_the_permalink() . '" aria-label="' . get_the_title() . '">';
			echo wp_get_attachment_image($image, $size);
			echo '</a>';
			echo '</div>';

		} else {

			if (has_post_thumbnail()) {
				echo '<div class="img-zoom">';
				echo '<a href="' . get_the_permalink() . '" aria-label="' . get_the_title() . '">';
				the_post_thumbnail('webspeed-post', );
				echo '</a>';
				echo '</div>';
			}
		}

	}

}

function web_thumbnail_link_no_lazy() {

	if (!class_exists('ACF')) {

		if (has_post_thumbnail()) {
			echo '<div class="img-zoom">';
			echo '<a href="' . get_the_permalink() . '" aria-label="' . get_the_title() . '">';
			the_post_thumbnail('webspeed-post', ['loading' => false]);
			echo '</a>';
			echo '</div>';
		}

	} else {
		$image = get_field('billede');
		$size = 'webspeed-post';
		if ($image) {

			echo '<div class="img-zoom">';
			echo '<a href="' . get_the_permalink() . '" aria-label="' . get_the_title() . '">';
			echo wp_get_attachment_image($image, $size);
			echo '</a>';
			echo '</div>';

		} else {

			if (has_post_thumbnail()) {
				echo '<div class="img-zoom">';
				echo '<a href="' . get_the_permalink() . '" aria-label="' . get_the_title() . '">';
				the_post_thumbnail('webspeed-post', ['loading' => false]);
				echo '</a>';
				echo '</div>';
			}
		}

	}

}

function web_thumbnail() {
	$caption = get_the_post_thumbnail_caption();
	if (has_post_thumbnail()) {
		echo '<div class="post-img">';
		the_post_thumbnail('webspeed-post');
		if (!empty($caption)) {
			echo '<div class="caption">' . $caption . '</div>';
		}
		echo '</div>';
	}
}

function web_img() {
	$caption = get_the_post_thumbnail_caption();
	if (has_post_thumbnail()) {
		echo '<div class="post-img">';
		the_post_thumbnail();
		if (!empty($caption)) {
			echo '<div class="caption">' . $caption . '</div>';
		}
		echo '</div>';
	}
}

function web_topimg() {
	$caption = get_the_post_thumbnail_caption();
	$show_h1 = get_theme_mod('webspeed_h1');
	if (has_post_thumbnail()) {
		echo '<div class="top-post-img">';
		the_post_thumbnail('', ['loading' => false]);
		if (!$show_h1) {
			web_img_title();
		}
		web_foto();
		echo '</div>';
	}
}

function web_topimg_blog() {

	// Get the ID of the page set to Display Posts in Settings > Reading
	$page_for_posts = get_option('page_for_posts');
	$show_h1 = get_theme_mod('webspeed_h1');

	// If that page ID exists, and that page has a Featured Image....
	if ($page_for_posts && has_post_thumbnail($page_for_posts)) {

		// Get the ID of that page's Featured Image
		$thumb_id = get_post_thumbnail_id($page_for_posts);
		echo '<main class="page-content page-blog top-img">';
		echo '<div class="top-post-img">';

		// Display that image
		echo wp_get_attachment_image($thumb_id, 'full');

		echo '<div class="wrap-no-pad">';
		if (!$show_h1) {
			echo '<div class="top-caption">';
				echo '<h1>';
					single_post_title();
				echo '</h1>';
			echo '</div>';
		}
		echo '</div>';
		echo '</div>';
	} else {
		echo '<main class="page-content page-blog">';

	}

}

function web_small_topimg() {
	$caption = get_the_post_thumbnail_caption();
	if (has_post_thumbnail()) {
		echo '<div class="small-top-post-img">';
		the_post_thumbnail();

		echo '<div class="top-caption">';
		$arr = array(" | " => "<br />");
		echo '<h1>' . strtr(get_the_title(), $arr) . '</h1>';

		echo '</div>';

		echo '</div>';
	}
}

// Frontpage fokus

function web_front_fokus() {
	if (is_front_page() && is_active_sidebar('fokus-frontpage')) {
		echo '<div class="fokus">';
		echo '<div class="wrap">';
		dynamic_sidebar('fokus-frontpage');
		echo '</div>';
		echo '</div>';
	}
}

// Reference

add_action('webspeed_before_body_end', 'web_reference', 10);
function web_reference() {
	echo '<div class="reference"><a href="https://www.hjemmesider.dk" target="_blank" rel="nofollow noreferrer">Made by Hjemmesider.DK</a></div>';
}

// Post date
function web_post_date() {
	$post_date = get_the_date('j. F - Y');
	echo '<div class="post-date">' . $post_date . '</div>';
}

// Post date + List cat
function web_date_cat() {
	$post_date = get_the_date('j. F - Y');
	echo '<div class="post-date-cat post-date">';
	echo $post_date;
		echo '<span class="cat">| ';
			the_category(', ');
		echo '</span>';
	echo '</div>';
}

// Post date + List cat + Author
function web_date_cat_author() {
	$post_date = get_the_date('j. F - Y');
	echo '<div class="post-date-cat post-date">' . $post_date . ' <span class="cat">| ';
	the_category(', ');
	echo '</span>';
	echo '<div class="author"><span>Forfatter:</span> <strong>' . get_the_author_meta('display_name') . '</strong></div>';
	echo '</div>';
}

function web_title() {
	echo '<h1>' . get_the_title() . '</h1>';
}
function get_web_title() {
	$title = get_the_title();
	return $title;
}

// Title til TopImg
if (!function_exists('web_img_title')) {
	function web_img_title() {

		$caption = get_the_post_thumbnail_caption();
		$arr = array(" | " => "<br />");

		if (class_exists('ACF')) {
			if (!get_field('skjul_titel')) {
				echo '<div class="wrap-no-pad">';
				echo '<div class="top-caption">';
				echo '<h1 class="banner-title">' . strtr(get_the_title(), $arr) . '</h1>';
				if (!empty($caption)) {
					echo '<h2 class="banner-sub">' . $caption . '</h2>';
				}
				echo '</div>';
				echo '</div>';
			}
		}

		if (!class_exists('ACF')) {
			echo '<div class="wrap-no-pad">';
			echo '<div class="top-caption">';
			echo '<h1 class="banner-title">' . strtr(get_the_title(), $arr) . '</h1>';
			if (!empty($caption)) {
				echo '<h2 class="banner-sub">' . $caption . '</h2>';
			}
			echo '</div>';
			echo '</div>';
		}
	}
}

// Icons
function svg_url($type_key) {
	$svg_type = ['calendar', 'phone', 'mail', 'instagram', 'globe', 'map', 'linkedin', 'facebook'];
	$svg_url = '<svg class="icon meeting" alt="' . $svg_type[$type_key] . '"><use href="' . get_template_directory_uri() . '/img/contact/sprite-sheet.svg#' . $svg_type[$type_key] . '" /></svg>';

	return $svg_url;
}

if (!function_exists('webspeed_breadcrumb')) {
	function webspeed_breadcrumb() {
		global $post;
		if (function_exists('yoast_breadcrumb') && !is_front_page() && $post->post_parent) {
			yoast_breadcrumb('<div id="breadcrumbs"><div class="wrap-no-pad">', '</div></div>');
		}
	}
}

// ------------------------------------------------- //

// PreHeader style
if (!function_exists('get_pre_header_class')) {
	function get_pre_header_class() {
		return 'pre-header flex wrap-pad-top-small only-desktop-flex';
	}
}

function web_header_class() {
	$sticky_menu = get_theme_mod('webspeed_sticky_checkbox');
	if ($sticky_menu == true) {
		return ' sticky-header';
	}
}
// ------------------------------------------------- //

function web_html_class() {
	$sticky_menu = get_theme_mod('webspeed_sticky_checkbox');
	if ($sticky_menu == true) {
		echo 'class="scroll-pad"';
	}
}


// ------------------------------------------------- //

add_filter('comment_form_defaults', 'webspeed_custom_comment_form');
function webspeed_custom_comment_form($no_fields) {
	$no_fields['comment_notes_before'] = ''; // Removes comment before notes
	$no_fields['comment_notes_after'] = ''; // Removes comment after notes
	$no_fields['title_reply'] = ''; // Remove Title Reply
	return $no_fields;
}

// ------------------------------------------------- //

// ACF nye
add_filter('acf/the_field/escape_html_optin', '__return_true');

// ------------------------------------------------- //

// Hjemmesider Admin besked
function hjemmesider_admin_side() {
    add_menu_page(
        'Support - Hjemmesider.dk',    // Sidetitel
        'Support',       // Menu-titel
        'manage_options',     // Hvem kan se den
        'hjemmesider',    // Slug
        'hjemmesider_dk', // Callback-funktion
        'dashicons-editor-help', // Ikon
        1                     // Placering i menuen
    );
}
add_action('admin_menu', 'hjemmesider_admin_side');

function hjemmesider_dk() {
    ?>
    <div class="wrap">
        <h1>Support - Hjemmesider.DK</h1>
				<h2 style="margin:0;">Har du brug for hjælp?</h2>
        <p>Du er altid meget velkommen til at skrive eller ringe til Morten Andersen fra <a href="https://www.hjemmesider.dk" target="_blank">Hjemmesider.DK</a>.</p>
				<p>Måske har du spørgsmål angående:</p>
				<ul style="border-block: 1px solid; padding: 1rem;max-width: 525px;">
					<li>- Den nuværende hjemmeside?</li>
					<li>- Opdateringer?</li>
					<li>- SEO?</li>
					<li>- Ny funktionalitet?</li>
					<li>- Nyt design?</li>
				</ul>
				<p>... eller noget helt andet?<br>Tøv ikke med at tage kontakt til mig :-)</p>
				<p><strong>Hjemmesider.DK</strong><br>Morten Andersen<br><a href="mailto:morten@hjemmesider.dk">morten@hjemmesider.dk</a><br>Tlf. 51948012</p>
    </div>
    <?php
}