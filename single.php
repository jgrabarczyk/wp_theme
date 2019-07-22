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
<div class="wrapper">
    <main role="main">
        <!-- section -->
        <div class="post-content-wrapper container">
        <section>

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>                    
                
                    <?php get_template_part('loop-templates/content', 'single'); ?>

                <?php endwhile; ?>

            <?php else: ?>

                <?= get_template_part('loop-templates/content', 'none'); ?>                        

            <?php endif; ?>

        </section>
        <!-- /section -->

        <aside>
            <!-- aside -->
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-widget-list')) : ?>
            <?php endif; ?>
        </aside>
        <!-- /aside -->
</div>
    </main>
</div>


<?php get_footer(); ?>
