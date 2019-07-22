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
    <section class="container">

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <?php get_template_part( 'loop-templates/content', 'page' ); ?> 

            <?php endwhile; ?>

        <?php else: ?>

            <?php get_template_part( 'loop-templates/content', 'none' ); ?>
            
        <?php endif; ?>

    </section>
</main>

<?php get_footer(); ?>


