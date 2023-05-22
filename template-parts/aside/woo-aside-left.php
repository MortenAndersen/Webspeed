<?php
echo '<aside class="left-woo-aside">';
echo '<button id="woo-filter-toggle">Filter</button>';
echo '<div class="woo-aside-con">';
dynamic_sidebar('woo-aside');

$product_tags = get_terms('product_tag');
echo '<div class="widget woo-brands"><h4>Brands</h4>';
echo '<ul class="woo-tags">';
foreach ($product_tags as $tag) {
	$tag_link = get_tag_link($tag->term_id);
	echo '<li class="' . $tag->slug . '"><a href="' . $tag_link . '" title="' . $tag->name . '">' . $tag->name . '</a></li>';
}
echo '</ul></div>';

echo '</div>';
echo '</aside>';