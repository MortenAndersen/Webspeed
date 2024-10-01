<?php

// the_field('layout');

$layout = '1fr';
$txtorder = '1';
$picorder = '2';

if (get_field('layout') == '100') {
  $layout = '1fr';
  $txtorder = '1';
  $picorder = '2';
}

if (get_field('layout') == '50') {
  $layout = '1fr 1fr';
  $txtorder = '1';
  $picorder = '2';
}
if (get_field('layout') == '33') {
  $layout = '2fr 1fr';
  $txtorder = '1';
  $picorder = '2';
}
if (get_field('layout') == '25') {
  $layout = '3fr 1fr';
  $txtorder = '1';
  $picorder = '2';
}
if (get_field('layout') == '100p') {
  $layout = '1fr';
  $txtorder = '2';
  $picorder = '1';
}
if (get_field('layout') == '50p') {
  $layout = '1fr 1fr';
  $txtorder = '2';
  $picorder = '1';
}
if (get_field('layout') == '33p') {
  $layout = '1fr 2fr';
  $txtorder = '2';
  $picorder = '1';
}
if (get_field('layout') == '25p') {
  $layout = '1fr 3fr';
  $txtorder = '2';
  $picorder = '1';
}

// Class name til Gutenberg block
$className = 'textpic grid';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}



echo '<div class="' . esc_attr($className) . '" style="grid-template-columns: ' . $layout . '">';

echo '<div class="tekst" style="order: ' . $txtorder . '">';
  the_field('tekst');
echo '</div>';


$images = get_field('billeder');
$size = 'large';


if( $images ): 
  echo '<div class="pic" style="order: ' . $picorder . '">';
  foreach( $images as $image ):
    $img_caption = get_the_excerpt( $image );
      
    echo wp_get_attachment_image( $image, $size );     
    if ( $img_caption){
        echo '<p>' . $img_caption . '</p>';
    }

  endforeach; 
  echo '</div>';
 endif; 

 echo '</div>';