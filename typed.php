<?php
/*
Plugin Name: Customized Typed.js
Plugin URI: https://idzan.eu
Description: Custom Typed.js Source for Gutenberg Based Site
Author: Idzan Marko
Version: 1.0
*/

function typed_js() {
    $plugin_url = plugin_dir_url(_FILE_);
    wp_enqueue_script('typed', $plugin_url . "typed.min.js");
}
add_action('wp_footer', 'typed_js');

function typed_html() { ?>
    <script>
    // Note to myself - add basic div with class named below, can change it later
    var typed = new Typed('.iamlisted', {
        strings: ['Freelance Web Designer', 'IT Technician', 'Web Administrator', 'IT Administrator', 'Photographer', 'Video Editor', 'Gamer and Nerd'],
        typeSpeed: 30,
        startDelay: 5,
        backSpeed: 50,
        backDelay: 700,
        loop: true
    });
    </script>
<? }
add_action('wp_footer', 'typed_html'); 