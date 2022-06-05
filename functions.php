<?php

// Add Custom JS File
add_action( 'wp_enqueue_scripts', 'purplefish_custom_scripts', 999999 );
function purplefish_custom_scripts() {
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/script.js', array( 'jquery' ), rand());
}
