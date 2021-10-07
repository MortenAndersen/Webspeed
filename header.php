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

<header class="page-header">
	<div class="<?php web_header_style(); ?>">
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