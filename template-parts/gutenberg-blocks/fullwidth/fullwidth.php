<?php
if( have_rows('chunk') ):
echo '<div class="full-width">';
    while( have_rows('chunk') ) : the_row();
        $billede = get_sub_field('billede');
        $overskrift = '<h3 class="tit-bor">' . get_sub_field('overskrift') . '</h3>';
        $tekst = get_sub_field('tekst');
        $link = get_sub_field('link');

        echo '<div class="fw-row">';
        	echo '<div class="fw-col fw-img">';
        		if( $link ) {
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';						  
					echo '<a href="' . $link_url . '" target="' . $link_target .'"><img src="' . $billede . '"></a>';
				} else {
					echo '<img src="' .$billede . '">';
				}	
        	echo '</div>';
        	echo '<div class="fw-col fw-txt">';
	        	echo $overskrift;
	        	echo $tekst;
			    if( $link ) {						  
					echo '<a href="' . $link_url . '" target="' . $link_target .'" class="but but-1">' . $link_title . '</a>';
				}
        	echo '</div>';
        echo '</div>';
    endwhile;
echo '</div>';  
endif;