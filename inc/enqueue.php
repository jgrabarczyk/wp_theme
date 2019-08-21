<?php
// Loadwp_theme Blank scripts (header.php)
function wp_theme_header_scripts() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_script('conditionizr', get_template_directory_uri() . '/assets/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!        
        
        wp_register_script('default-scripts', get_template_directory_uri() . '/assets/js/theme-assets/default.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('default-scripts'); // Enqueue it!

        wp_register_script('searchformToggler', get_template_directory_uri() . '/assets/js/theme-assets/searchform-toggle.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('searchformToggler'); // Enqueue it!

        wp_register_script('wp_theme-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('wp_theme-scripts'); // Enqueue it!
        
        wp_register_script('smooth-scroll', get_template_directory_uri() . '/assets/js/theme-assets/smooth-scroll.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('smooth-scroll'); // Enqueue it!
        
        wp_register_script('menu', get_template_directory_uri() . '/assets/js/theme-assets/menu.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('menu'); // Enqueue it!

        wp_register_script('aos', get_template_directory_uri() . '/assets/js/lib/aos/aos.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('aos'); // Enqueue it!
        
          // just uncomment to enable slick slider
        wp_register_script('slick', get_template_directory_uri() . '/assets/js/lib/slick/slick.min.js', array('jquery'), '1.8.0'); // Slick
        wp_enqueue_script('slick'); // Enqueue it!
    }
}

// Loadwp_theme Blank conditional scripts
function wp_theme_conditional_scripts() {
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/assets/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Loadwp_theme Blank styles
function wp_theme_styles() {
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!
    
    wp_register_style('wp_theme', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('wp_theme'); // Enqueue it!
    
    wp_register_style('fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/all.css', array(), '1.0', 'all');
    wp_enqueue_style('fontawesome'); // Enqueue it!
    
    wp_register_style('slick', get_template_directory_uri() . '/assets/js/lib/slick/slick.css', array(), '1.0', 'all');
    wp_enqueue_style('slick'); // Enqueue it!

    wp_register_style('aos', get_template_directory_uri() . '/assets/js/lib/aos/aos.css', array(), '1.0', 'all');
    wp_enqueue_style('aos'); // Enqueue it!
        
}

