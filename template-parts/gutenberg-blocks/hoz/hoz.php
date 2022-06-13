<?php
if( have_rows('item') ):
$i = get_field('grid');
switch ($i) {
    case 2:
        $grid_number = 'g-d-2';
        break;
    case 3:
        $grid_number = 'g-d-3';
        break;
    case 4:
        $grid_number = 'g-d-4';
        break;
   case 5:
        $grid_number = 'g-d-5';
        break;
   case 6:
        $grid_number = 'g-d-6';
        break;
   case 7:
        $grid_number = 'g-d-7';
        break;
   case 8:
        $grid_number = 'g-d-8';
        break;
}
$height = get_field('min-height');
    echo '<div class="hoz grid '. $grid_number . '">';
     while( have_rows('item') ) : the_row();  
      $item = get_sub_field('indhold');
      $icon = get_sub_field('ikon');
      $title_alt = get_sub_field('title_alt');
      $permalink = get_permalink( $item->ID );
      $excerpt = get_the_excerpt( $item->ID );
      $imgurl = get_the_post_thumbnail_url( $item->ID );
      $img = get_the_post_thumbnail( $item->ID, 'webspeed-post' );
      $active = 'not-active';
      if( get_sub_field('active') ) {
    	 $active = 'active';
		}
        
        
        echo '<div class="hoz-item ' . $active . '" style="background-image: url(' . $imgurl . '); background-color:' . get_sub_field('farve') . '; color:' . get_sub_field('tekst_farve') . '; min-height:' . $height . 'px;">';
        	echo '<div class="hoz-title">';
        		echo '<span class="acc-hoz-title">';
               if( empty( $title_alt ) ) {
        			 echo esc_html( $item->post_title );
               } else {
                  echo $title_alt;
               }
        		echo '</span>';
            if( !empty( $icon ) ) {
            echo '<img class="hoz-icon" src="' . esc_url($icon['url']) . '" alt="' . esc_attr($icon['alt']) . '" />';
            }
        	echo '</div>';
        	echo ' <div class="hoz-con">';
        		echo '<div>';
               if( get_sub_field('vis_billede') ) {
                  if( get_sub_field('vis_tekst') ) {
                     echo '<div class="hoz-img-txt">';
                        echo '<a href="' . $permalink . '">';
                           echo $img;
                        echo '</a>';
                     echo '</div>';
                  } else {
                     echo '<div class="hoz-img">';
                        echo '<a href="' . $permalink . '">';
                           echo $img;
                        echo '</a>';
                     echo '</div>';
                  }
               }
        			echo '<p>';
               if( get_sub_field('vis_tekst') ) {
        			 echo $excerpt;
               }
					echo '<a class="hoz-more" href="' . $permalink . '">Læs mere</a></p>';
				echo '</div>';
			echo '</div>';
        echo '</div>';
     endwhile;
    echo '</div>';
endif;