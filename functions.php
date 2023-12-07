<?php 

function fimd_theme_support(){
//Adds dynamic title tag support
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
}

add_action ('after_setup_theme', 'fimd_theme_support');

function fimd_menus() {
    $locations = array (
        'primary' => "Desktop Primary Menu",
        'footer' => "Footer Menu Items",
    );
    register_nav_menus($locations);
}

add_action('init','fimd_menus');

function fimd_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('fimd-custom-style', get_template_directory_uri() . "/style.css", array('fimd-bootstrap'), $version, 'all');
    wp_enqueue_style('fimd-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '5.3.2', 'all');
}

add_action ('wp_enqueue_scripts', 'fimd_register_styles');

function fimd_register_scripts(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script('fimd-bootstrap-script', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js", array(), '5.3.2', 'all', true);
    wp_enqueue_script('fimd-custom-js', "/js/main.js", array('fimd-bootstrap-script'), $version, 'all', true);
}

add_action ('wp_enqueue_scripts', 'fimd_register_scripts');

function fimd_move_admin_bar_bottom() {
    echo '<style>
    body {
    margin-top: -28px;
    padding-bottom: 28px;
    }
    body.admin-bar #wphead {
       padding-top: 0;
    }
    body.admin-bar #footer {
       padding-bottom: 28px;
    }
    #wpadminbar {
        top: auto !important;
        bottom: 0;
    }
    #wpadminbar .quicklinks .menupop ul {
        bottom: 28px;
    }
    </style>';
}
// Action to add CSS on WP admin
add_action( 'admin_head', 'fimd_move_admin_bar_bottom' );
// action to add CSS to frontend
add_action( 'wp_head', 'fimd_move_admin_bar_bottom' );

function fimd_widget_areas() {
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
        ),
        array(
            'name' => 'Sidebar area',
            'id' => 'Sidebar area',
            'description' => 'Sidebar widget area'
        )
        );
}

add_action( 'widgets_init', 'fimd_widget_areas')

?>