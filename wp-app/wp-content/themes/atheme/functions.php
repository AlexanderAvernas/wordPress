<?php
function tema_namn_styles(){
 $version = wp_get_theme()->get('Version');
 wp_enqueue_style('demotema-style',
 get_template_directory_uri() . "/style.css",
 array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'tema_namn_styles');


?>
