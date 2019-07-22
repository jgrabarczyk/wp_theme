<?php
/**
 * Template for displaying archive pages
 *
 * @package projectic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>

<div class="wrapper">
    <main role="main">
        <div class="archive-content-wrapper">
            
            <section>
                <?php if (have_posts()): ?>
                    
                    <header class="page-header">
                        <h1><?php _e('Archives', 'projectic'); ?></h1>
                    </header>

                    <?php while (have_posts()) : the_post(); ?>

                        <?php get_template_part( 'loop-templates/content' ); ?>

                    <?php endwhile; ?>
                    
                    <?php get_template_part('pagination'); ?>  

                <?php else: ?>

                    <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                <?php endif; ?>

            </section>

            <aside>
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-widget-list')) : ?>
                <?php endif; ?>
            </aside>
        </div>
    </main>
</div>
<?php get_footer(); ?>
