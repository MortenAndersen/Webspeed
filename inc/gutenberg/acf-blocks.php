<?php 

add_action('acf/init', 'acc_block');
function acc_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a Spalter block.
        acf_register_block_type(array(
            'name'              => 'acc',
            'title'             => __('Accordion WEB'),
            'description'       => __('Accordion'),
            'render_template'   => 'template-parts/gutenberg-blocks/acc/acc.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'acc', 'quote' ),
        ));
    }
}

add_action('acf/init', 'contact_block');
function contact_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a Spalter block.
        acf_register_block_type(array(
            'name'              => 'contact',
            'title'             => __('Contact WEB'),
            'description'       => __('Contact Information'),
            'render_template'   => 'template-parts/gutenberg-blocks/contact/contact.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'contact', 'quote' ),
        ));
    }
}

add_action('acf/init', 'meeting_block');
function meeting_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a Spalter block.
        acf_register_block_type(array(
            'name'              => 'meeting',
            'title'             => __('Meeting WEB'),
            'description'       => __('Meeting Information'),
            'render_template'   => 'template-parts/gutenberg-blocks/meeting/meeting.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'meeting', 'quote' ),
        ));
    }
}