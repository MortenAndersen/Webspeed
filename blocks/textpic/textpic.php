<?php

if (get_field('layout') == '100') {
  $styleClass = 'style1';
}
if (get_field('layout') == '50') {
  $styleClass = 'style2';
}
if (get_field('layout') == '33') {
  $styleClass = 'style3';
}
if (get_field('layout') == '25') {
  $styleClass = 'style4';
}
if (get_field('layout') == '330') {
  $styleClass = 'style5';
}
if (get_field('layout') == '250') {
  $styleClass = 'style6';
}

// Tekst før billede

if (!get_field('tekst_forst')){
  $order = 'pic-text';
} else {
  $order = 'text-pic';
}

// Tekst spalter

if (!get_field('spalter')){
  $spalter = 'no-spalter';
} else {
  $spalter = 'spalter';
}

$txtalign = 'txt-' . get_field('textalign');
$imgalign = 'img-' . get_field('imagealign');

// Padding
$padding = 'no-padding';
if (get_field('baggrund')){
  $padding = 'add-padding';
}

// Class name til Gutenberg block
$className = 'textpic ' . $styleClass . ' ' . $order . ' ' . $txtalign . ' ' . $imgalign . ' ' . $padding;
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// ID
if( !empty($block['anchor']) ) {
$id = ' id="' . $block['anchor'] . '"';
} else {
  $id = '';
}

// Baggrund og tekstfarve

$background = null;
if (get_field('baggrund')) {
  $background = 'background:' . get_field('baggrund') . ';';
}

$textfarve = null;
if (get_field('tekst_farve')) {
  $textfarve = 'color:' . get_field('tekst_farve') . ';';
}

$bgStyle = null;
if ($background || $textfarve) {
  $bgStyle = 'style="' . $background . $textfarve . '"';
}


echo '<div' . $id . ' class="' . esc_attr($className) . '"' . $bgStyle . '>';



echo '<div class="tekst">';
if (get_field('overskrift')) {
  echo '<h3>' . get_field('overskrift') . '</h3>';
}
echo '<div class="text_body ' . $spalter . '">';
    the_field('tekst');
  echo '</div>';
echo '</div>';


$images = get_field('billeder');
$size = 'large';


if( $images ): 
  echo '<div class="pic">';
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