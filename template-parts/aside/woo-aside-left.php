<?php
echo '<aside class="left-woo-aside">';
echo '<button id="woo-filter-toggle">Kategori Menu</button>';
echo '<div class="woo-aside-con">';
dynamic_sidebar('woo-aside');

if (class_exists('ACF')) {
	$product_tags = get_terms('product_tag');
	echo '<div class="widget woo-brands"><h4>Brands</h4>';
	echo '<ul class="woo-tags grid gap-1">';
	foreach ($product_tags as $tag) {
		$tag_link = get_tag_link($tag->term_id);

		if (get_field('brand', $tag)) {
			$image = get_field('brand_logo', $tag);
			echo '<li class="' . $tag->slug . '"><a href="' . $tag_link . '" title="' . $tag->name . '">';
			if (!empty($image)):
				$size = 'medium';
				echo wp_get_attachment_image($image, $size);
			endif;
			echo '<span>' . $tag->name . '</span></a></li>';
		}
	}
	echo '</ul></div>';
}
echo '</div>';
echo '</aside>';