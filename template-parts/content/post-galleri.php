<?php 
echo '<main class="page-content">';
	webspeed_breadcrumb();
	echo '<div class="wrap">';
		echo '<article>';

			while (have_posts()) : the_post();
        web_title();
        the_content();
        
        echo '<div class="billedgalleri masonry">';
                
                // ACF - Gallery fields.
               
                $images = get_field( 'galleri' );
                $size = 'small';
                if ( $images ) :
                    $i = 1;
                    
                    // Grab each image.
                    foreach ( $images as $image ) :
                        $image_id      = $image['ID'];
                        $image_src     = $image['url'];
                        $alt_title = 'image-' . $i;
                        $image_caption = $image['caption'] ? $image['caption'] : $alt_title;
              
        
                            echo '<a href="' . esc_url( $image_src ) . '" title="' . esc_html( $image_caption ) . '" class="lightbox-link">';
                                echo wp_get_attachment_image( $image_id, $size ); 
                            echo '</a>';
        
       
                            $i++;
                    endforeach;
                endif;
               
            echo '</div>';

				web_go_back();
			endwhile;


		echo '</article>';

	echo '</div>';
echo '</main>';