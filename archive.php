<?php
/**
 * Template for displaying archive pages
 *
 * @package wp_theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>

<main role="main">
  <div class="container ">      
    <section>
      <header class="page-header mg-v-xl">
        <h1 class="main-title"><?php the_archive_title( ); ?></h1>
      </header>

      <?php 
        if (have_posts()):              
          while (have_posts()) : the_post();
            get_template_part( 'loop-templates/content' );
            endwhile;

            get_template_part('pagination');  

        else:
          get_template_part( 'loop-templates/content', 'none' ); 
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
