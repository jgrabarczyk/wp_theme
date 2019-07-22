<?php
/**
 * Index
 * 
 * @package projectic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>

<div class="wrapper">
    <main role="main">
        <!-- section -->        
        <section >
            <h1 class="mg-t-50 pd-h-30 h1 fs-xl"><?php _e('Latest Posts', 'projectic'); ?></h1>
            <div class="container">
              <?php if (have_posts()): ?>
                  <?php while ( have_posts() ) : the_post(); ?>
                                  
                      <?php get_template_part( 'loop-templates/content' ); ?>

                  <?php endwhile; ?>            

              <?php get_template_part('pagination'); ?>

              <?php else: ?>

                  <?php get_template_part( 'loop-templates/content', 'none' ); ?>

              <?php endif; ?>
            </div>
        </section>
        <!-- /section -->
    </main>
</div>

<?php get_footer(); ?>
