<?php
/**
 * Default page template
 * 
 * @package projectic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>
<main role="main">
  <div class="container">
    <section>
      <?php 
        if (have_posts()): 
          while (have_posts()) : the_post(); 
            get_template_part('loop-templates/content', 'page'); 
          endwhile; 
        else: 
          get_template_part('loop-templates/content', 'none'); 
        endif; 
      ?>
    </section>
  </div>
</main>

<?php get_footer(); ?>


