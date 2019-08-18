<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>  
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
      <?php wp_title(''); ?>
    </title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">    
    <link href="<?= get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?= get_template_directory_uri(); ?>/assets/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
    <script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
        assets: '<?= get_template_directory_uri(); ?>',
        tests: {}
      });
    </script>
  </head>
  
  <body <?php body_class(); ?>>    
    <header class="header" role="banner">                            
      <div class="header-container d-flex">

        <div class="logo">
          <a href="<?= home_url(); ?>" 
             title="<?= __('Page logo', 'wp_theme');?>"
             class="logo-url"
             >
            <img 
              src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" 
              alt="<?= __('Page logo', 'wp_theme');?>" 
              class="logo-img" 
              >
          </a>
        </div>

        <nav class="nav">    
          <div id="mobile-menu-handler">
            <div id='top'></div>
            <div id='middle'></div> 
            <div id='bottom'></div>
          </div>          

          <div id="menu-body">                                    
            <?php wp_theme_render_nav(); ?>             
          </div>  
        </nav>          
        
        <?php wp_theme_render_search_form(); ?>        

      </div>
    </header>



