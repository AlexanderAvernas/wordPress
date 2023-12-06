<?php
function atheme_titlename() {
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
};

add_action('after_setup_theme', 'atheme_titlename');

function atheme_menus() {
    $locations = array(
        'primary' => 'Desktop Navbar',
        'sidemenu' => 'side menu'
    );

    register_nav_menus($locations);
}

add_action('init', 'atheme_menus');


function atheme_styles()
{
     $version = wp_get_theme()->get('Version');
    wp_enqueue_style(
        'atheme-style',
        get_template_directory_uri() . "/style.css",
        array("atheme-bootstrap"),
        $version,
        'all'
    );
    wp_enqueue_style(
        'atheme-bootstrap',
       "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css",
        array(),
        '5.3.0',
        'all'
    );

    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
        array(),
        '5.15.4',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'atheme_styles');


function atheme_scripts()
{
    $version = wp_get_theme()->get('Version');
wp_enqueue_script('atheme_scriptsbootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), '5.3.0', true);
wp_enqueue_script('atheme_script',  get_template_directory_uri()."/assets/js/main.js" , array(), $version, true);
}
add_action('wp_enqueue_scripts', 'atheme_scripts');

function atheme_register_sidebars() {
    register_sidebar( array(
    'name' => 'adress widget',
    'id' => 'adress-widget',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'

    ) );
    register_sidebar( array(
    'name' => 'home widget',
    'id' => 'home-widget',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'

    ) );
   }
   add_action( 'widgets_init', 'atheme_register_sidebars' );

?>
