<?php
/**
 * Search template
 * 
 * @package wp_theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>

<main role="main">
  <div class="container">
    <section >
      <header class="page-header mg-v-xl">
        <h1 class="main-title">
          <?php
            echo sprintf(__('%s Search Results for ', 'wp_theme'), $wp_query->found_posts);
            echo get_search_query();
          ?>
        </h1>
      </header>

      <?php if (have_posts()): ?>
        <?php while ( have_posts() ) : the_post(); ?>                                    
          <?php get_template_part( 'loop-templates/content' ); ?>    
        <?php endwhile; ?>            
      <?php get_template_part('pagination'); ?>
      <?php else: ?>    
        <?php get_template_part( 'loop-templates/content', 'none' ); ?>    
      <?php endif; ?>                
    </section>
  </div>
</main>

<?php get_footer(); ?>
