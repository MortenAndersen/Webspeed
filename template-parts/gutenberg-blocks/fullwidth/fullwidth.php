<?php
if( have_rows('chunk') ):
	$arr = array(" | " => "<br />");

$afstand = get_field('afstand');


switch ($afstand) {
    case 0:
        $grid_gap = ' null';
        break;
    case 1:
        $grid_gap = ' gap-1';
        break;
    case 2:
        $grid_gap = ' gap-2';
        break;
   case 3:
        $grid_gap = ' gap-3';
        break;
   case 4:
        $grid_gap = ' gap-4';
        break;
   case 5:
        $grid_gap = ' gap-5';
        break;
   case 6:
        $grid_gap = ' gap-6';
        break;
}

 $img_width = get_field('billedbredde');
        $txt_witdh = 100 - $img_width;


echo '<div class="full-width grid' . $grid_gap . '">';
    while( have_rows('chunk') ) : the_row();
        $billede = get_sub_field('billede');
        $overskrift = '<h3 class="tit-bor">' . strtr(get_sub_field('overskrift'),$arr)  . '</h3>';
        $tekst = get_sub_field('tekst');
        $link = get_sub_field('link');
       

        echo '<div class="fw-row">';
        	echo '<div class="fw-col fw-img" style="width:' . $img_width . '%;">';
        		if( $link ) {
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';						  
					echo '<a href="' . $link_url . '" target="' . $link_target .'"><img src="' . $billede . '"></a>';
				} else {
					echo '<img src="' .$billede . '">';
				}	
        	echo '</div>';
        	echo '<div class="fw-col fw-txt" style="width:' . $txt_witdh . '%">';
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