<?php
/**
 * Index
 * 
 * @package wp_theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>

<main role="main">      
  <div class="container">

    <section>
      <header class="page-header mg-v-xl">
        <h1 class="main-title"><?php _e('Latest Posts', 'wp_theme'); ?></h1>
      </header>      
      
      <?php 
        if (have_posts()): 
          while (have_posts()) : the_post(); 
            get_template_part('loop-templates/content'); 
          endwhile; 

        else: 
          get_template_part('loop-templates/content', 'none'); 
        endif; 
      ?>
    </section>    

  </div>
</main>

<?php get_footer(); ?>
