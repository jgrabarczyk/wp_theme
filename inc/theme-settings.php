<?php
/*
 *  Author: Leszek Iwaniec |wp_theme
 *  URL:wp_theme.pl |wp_theme
 *  Custom functions, support, custom post types and more. 
 */

/* ------------------------------------*\
  Functions
  \*------------------------------------ */


// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '') {
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var) {
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist) {
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes) {
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// Custom Excerpts
function wp_themewp_index($length) { // Create 45 Word Callback for Index page Excerpts, call usingwp_theme_excerpt('wp_theme_wp_index');
    return 45;
}

// Create 40 Word Callback for Custom Post Excerpts, call usingwp_theme_excerpt('wp_theme_wp_custom_post');
function wp_themewp_custom_post($length) {
    return 40;
}

// Create the Custom Excerpts callback
function wp_theme_excerpt($length_callback = '', $more_callback = '') {
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function wp_theme_blank_view_article($more) { 
    global $post;
    return '... <div class="view-article-container btn-default"><a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'wp_theme') . '</a></div>';
}

// Remove Admin bar
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        return false;
    } else {
        return true;
    }
}

// Remove 'text/css' from our enqueued stylesheet
function wp_theme_style_remove($tag) {
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions($html) {
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function wp_theme_gravatar($avatar_defaults) {
    $myavatar = get_template_directory_uri() . '/assets/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments() {
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND ( get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

function wp_theme_get_thumbnail($size= NULL){
    $thumb = is_null($size) ? get_the_post_thumbnail(): get_the_post_thumbnail(get_the_ID(), $size);
    $img_size = is_null($size) ? '' : 'img-'.$size;
    if (has_post_thumbnail()) :
        echo '
            <a  href="' . get_permalink() . '" 
                title="'. get_the_title() . '">'.
                $thumb.
           '</a>';
    else:
        echo '
            <a  href="' . get_permalink() . '" 
                title="'. get_the_title() . '">
                <img 
                  class="'.$img_size.'" 
                  src="'. get_template_directory_uri() .'/assets/img/default.png">
            </a>';
    endif;
}
function wp_theme_bacgrounded_img(){
  
    $default_url =  get_template_directory_uri() .'/assets/img/default.png';
    $url = (has_post_thumbnail()) ?  get_the_post_thumbnail_url() : $default_url ;
    $url =  $_SERVER['SERVER_NAME']  == 'localhost' ?  'http:'.$url : $url;        
    
    echo '
        <a  href="' . get_permalink() . '" 
            title="'. get_the_title() . '">
            <div 
                class="post-img" 
                style="
                    background: url(\' '. $url .' \');
                    background-size: contain;
                    background-position: center;
                    background-repeat: no-repeat;
                    "
                ></div>
        </a>';
}
//post navigation
function wp_theme_prev_post(){
    $prev_post = get_previous_post();
    if($prev_post) {
        $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
        echo "\t". 
            '<a rel="prev" 
                href="' . get_permalink($prev_post->ID) . '" 
                title="' . $prev_title. '" 
                class="post-nav single-prev"
                >
                <div class="arrow left"></div>'
                . __('Previous', 'wp_theme') .
            '</a>'. 
            "\n";
    }
}
function wp_theme_next_post(){
    $next_post = get_next_post();
    if($next_post) {
        $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
        echo "\t".
        '<a rel="next" 
            href="' . get_permalink($next_post->ID) . '" 
            title="' . $next_title. '" 
            class="post-nav single-next"
            >' 
            . __('Next', 'wp_theme') . 
            '<div class="arrow right"></div>
        </a>'. 
        "\n";
    }
}