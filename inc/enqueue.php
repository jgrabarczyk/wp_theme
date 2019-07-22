<?php
// Loadprojectic Blank scripts (header.php)
function projectic_header_scripts() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!        
        
        wp_register_script('projectic-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('projectic-scripts'); // Enqueue it!
        
        wp_register_script('smooth-scroll', get_template_directory_uri() . '/js/theme-assets/smooth-scroll.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('smooth-scroll'); // Enqueue it!
        
        wp_register_script('mobile-menu', get_template_directory_uri() . '/js/theme-assets/mobile-menu.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('mobile-menu'); // Enqueue it!

        wp_register_script('aos', get_template_directory_uri() . '/js/lib/aos/aos.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('aos'); // Enqueue it!
        
          // just uncomment to enable slick slider
        wp_register_script('slick', get_template_directory_uri() . '/js/lib/slick/slick.min.js', array('jquery'), '1.8.0'); // Slick
        wp_enqueue_script('slick'); // Enqueue it!
    }
}

// Loadprojectic Blank conditional scripts
function projectic_conditional_scripts() {
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Loadprojectic Blank styles
function projectic_styles() {
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!
    
    wp_register_style('projectic', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('projectic'); // Enqueue it!
    
    wp_register_style('fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/all.css', array(), '1.0', 'all');
    wp_enqueue_style('fontawesome'); // Enqueue it!
    
    wp_register_style('slick', get_template_directory_uri() . '/js/lib/slick/slick.css', array(), '1.0', 'all');
    wp_enqueue_style('slick'); // Enqueue it!

    wp_register_style('aos', get_template_directory_uri() . '/js/lib/aos/aos.css', array(), '1.0', 'all');
    wp_enqueue_style('aos'); // Enqueue it!
        
}

