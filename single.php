<?php
/**
 * Default post template
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
              get_template_part('loop-templates/content', 'single'); 
            endwhile; 

          else: 
            get_template_part('loop-templates/content', 'none'); 
          endif; 
        ?>
      </section>

      <aside>
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-widget-list')) : ?>
        <?php endif; ?>
      </aside>

    </div>
  </main>

<?php get_footer(); ?>
