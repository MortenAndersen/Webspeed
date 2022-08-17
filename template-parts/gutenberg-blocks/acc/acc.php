<?php
$id = 'acc-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}


$classes = [ 'acc-con' ];
$block_style = '';
if ( ! empty( $block['className'] ) ) {
    $classes = array_merge( $classes, explode( ' ', $block['className'] ) );
}
if ( ! empty( $block['align'] ) ) {
    $classes[] = 'align' . $block['align'];
}
if ( ! empty( $block['backgroundColor'] ) ) {
    $classes[] = 'has-' . $block['backgroundColor'] . '-background-color';
}
if ( ! empty( $block['textColor'] ) ) {
    $classes[] = 'has-' . $block['textColor'] . '-color';
}







if( have_rows('accordion') ):
	$i = 1;

printf(    '<div id="' . $id . '"' . 'class="%s"%s>',
    esc_attr( join( ' ', $classes ) ),
    ! empty( $block['anchor'] ) ? ' id="' . esc_attr( sanitize_title( $block['anchor'] ) ) . '"' : '',
);

    while( have_rows('accordion') ) : the_row();
        $sub_title = get_sub_field('title');
        $sub_body = get_sub_field('body');
        $sub_class_master = get_sub_field('class');

        if ($sub_class_master) {
            $sub_class = ' ' . get_sub_field('class');
            } else {
                $sub_class = '';
        }

        echo '<div class="acc-' . $i . '' . $sub_class .'">';
            echo '<div class="acc-head">';
                echo '<p class="acc-title">' . $sub_title . '</p>';
                echo '<i class="arrow"></i>';
            echo '</div>';
            echo '<div class="acc-content">';
                echo $sub_body;
            echo '</div>';
        echo '</div>';
        
    ++$i;
    endwhile;

echo '</div>';  
endif;
