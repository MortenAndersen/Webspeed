<?php
if( have_rows('accordion') ):
    echo '<div class="details">';

    while( have_rows('accordion') ) : the_row();
        $sub_title = get_sub_field('title');
        $sub_deloverskrift = get_sub_field('deloverskrift');
        $sub_body = get_sub_field('body');
        $sub_billede = get_sub_field('billede');
        $sub_class_master = get_sub_field('class');
        $sub_chortcode = get_sub_field('shortcode');

        $accId = strtolower(preg_replace('/[^a-z ]/i', '', $sub_title));
        $accIdUrl = str_replace( " ", "-", $accId );

        if ($sub_class_master) {
            $sub_class = ' ' . get_sub_field('class');
            } else {
                $sub_class = '';
        }

        echo '<details name="det" id="' . $accIdUrl . '" class="acc' . $sub_class .'">';
            echo '<summary>';
                echo '<strong>' . $sub_title . '</strong>';
                if ( $sub_deloverskrift ) {
                    echo '<br /><em>' . $sub_deloverskrift . '</em>';
                }
                
            echo '</summary>';
                
                if( !empty( $sub_billede ) ) {
                    echo '<div class="grid g-d-2 gap-2">';
                        echo '<div>';
                            echo $sub_body;
                        echo '</div>';
                        echo '<div>';
                            echo '<img loading="lazy" src="' . esc_url($sub_billede['url']) . '" width="' . $sub_billede['width'] . '" height="' . $sub_billede['height'] . '" alt="' . esc_attr($sub_billede['alt']) . '" />';
                            if ( $sub_billede['description'] ) {
                                echo '<div class="caption">' . $sub_billede['description'] . '</div>'; 
                            }
                            
                        echo '</div>';

                    echo '</div>';
                } else {
                    echo $sub_body;
                }
    
                echo $sub_chortcode;

        echo '</details>';
  
    endwhile;
    echo '</div>';
endif;

