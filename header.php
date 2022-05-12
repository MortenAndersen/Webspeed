<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head();?>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
</head>

<body <?php body_class();?>>
  <?php wp_body_open();?>

<?php 
	if (is_active_sidebar('pre-header')) {
		echo '<div class="pre-header-con">';
    	echo '<div class="pre-header flex' . get_pre_header_class() . '">';
        	dynamic_sidebar('pre-header');
    	echo '</div>';
    echo '</div>';
  } 
?>

<header class="page-header <?php web_header_class(); ?>">
	<div class="<?php web_header_div_class(); ?>">
		<?php web_logo();?>
		<div class="menu-icon">
			<?php get_template_part('img/menu', 'icon');?>
		</div>
			<?php get_template_part('template-parts/nav/main', 'menu');?>
	</div>
</header>

<?php if (is_active_sidebar('pre-content')) {
    dynamic_sidebar('pre-content');
} ?>