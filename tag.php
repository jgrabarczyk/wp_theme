<?php
/**
 * Default template for tag loop 
 * 
 * @package wp_theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>
<div class="wrapper">
    <main role="main">
        <!-- section -->
        <section>

            <h1><?php
                _e('Tag Archive: ', 'wp_theme');
                echo single_tag_title('', false);
                ?></h1>
                
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
<?php get_sidebar(); ?>

<?php get_footer(); ?>
