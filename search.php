<?php
/**
 * Search template
 * 
 * @package projectic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>

<div class="wrapper">
    <main role="main">
        <section>

            <h1>
                <?php
                    echo sprintf(__('%s Search Results for ', 'projectic'), $wp_query->found_posts);
                    echo get_search_query();
                ?>
            </h1>

                <?php if (have_posts()): ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                                    
                       <?php get_template_part( 'loop-templates/content' ); ?>
    
                    <?php endwhile; ?>            

                <?php get_template_part('pagination'); ?>

                <?php else: ?>
    
                    <?php get_template_part( 'loop-templates/content', 'none' ); ?>
    
                <?php endif; ?>
    

                

        </section>
        <!-- /section -->
    </main>
</div>

<?php get_footer(); ?>
