<?php
// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')) {
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'projectic'),
        'description' => __('Description for this widget-area...', 'projectic'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Footer
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'projectic'),
        'description' => __('Elementy wyświetlane w footerze', 'projectic'),
        'id' => 'footer-widget-area',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    //Blog and single post sidebars
    register_sidebar(array(
        'name' => __('Blog List Sidebar', 'projectic'),
        'description' => __('Strona Blog - sidebar po prawej stronie', 'projectic'),
        'id' => 'blog-widget-list',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

}
