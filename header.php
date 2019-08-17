<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>  
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php
      if (wp_title('', false)) { echo ' :'; } ?> 
      <?php bloginfo('name'); ?>
    </title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
    <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>
  </head>
  
  <body <?php body_class(); ?>>    
    <header class="header clear" role="banner">                      
      
      <div class="header-wrapper d-flex">
        <div class="logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo" class="logo-img" data-anime="top">
            <!-- <h1>Logo here</h1> -->
          </a>
        </div>

        <div class="main-nav">          
          <nav class="nav">    
            
            <div id="mobile-menu-handler">
              <div id='top'></div>
              <div id='middle'></div>
              <div id='bottom'></div>
            </div>          

            <div id="mobile-menu-element" class="header-main-menu">                                    
              <?php wp_theme_nav(); ?>             
            </div>  

          </nav>          
        </div>
        
        <?php render_search_form(); ?>
        
      </div>
    </header>



