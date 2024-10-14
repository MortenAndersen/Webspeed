<?php

if( get_field('type') == 'Masonry' ) {
            $class = ' masonry';
            $size = 'small';
        } else {
            $class = ' kvadratisk';
            $size = 'webspeed-gallery';
        }

echo '<div class="billedgalleri' . $class . '">';
        
        // ACF - Gallery fields.
       
        $images = get_field( 'billedgalleri' );

        if ( $images ) :
            $i = 1;
            
            // Grab each image.
            foreach ( $images as $image ) :
                $image_id      = $image['ID'];
                $image_src     = $image['url'];
                $alt_title = 'image-' . $i;
                $image_caption = $image['caption'] ? $image['caption'] : $alt_title;
                ?>

                    <a href="<?php echo esc_url( $image_src ); ?>" title="<?php echo esc_html( $image_caption ); ?>" class="lightbox-link">
                        <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                    </a>

                    <?php
                    $i++;
            endforeach;
        endif;
        ?>
    </div>