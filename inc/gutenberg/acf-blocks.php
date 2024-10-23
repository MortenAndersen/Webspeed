<?php 



// ---------------------------------------------------

add_action('acf/init', 'contact_block');
function contact_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a Spalter block.
        acf_register_block_type(array(
            'name'              => 'contact',
            'title'             => __('Contact HJEMMESIDER'),
            'description'       => __('Contact Information'),
            'render_template'   => 'template-parts/gutenberg-blocks/contact/contact.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'mode'              => 'edit',
            'keywords'          => array( 'Kontakt', 'Hjemmesider' ),
        ));
    }
}

// ---------------------------------------------------

add_action('acf/init', 'meeting_block');
function meeting_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a Spalter block.
        acf_register_block_type(array(
            'name'              => 'meeting',
            'title'             => __('Meeting HJEMMESIDER'),
            'description'       => __('Meeting Information'),
            'render_template'   => 'template-parts/gutenberg-blocks/meeting/meeting.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'mode'              => 'edit',
            'keywords'          => array( 'meeting', 'Hjemmesider' ),
        ));
    }
}

// ---------------------------------------------------

add_action('acf/init', 'fullwidth_block');
function fullwidth_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a Spalter block.
        acf_register_block_type(array(
            'name'              => 'fullwidth',
            'title'             => __('Full Width HJEMMESIDER'),
            'description'       => __('Image and Text Information'),
            'render_template'   => 'template-parts/gutenberg-blocks/fullwidth/fullwidth.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'mode'              => 'edit',
            'keywords'          => array( 'Design', 'Hjemmesider' ),
        ));
    }
}

// ---------------------------------------------------



