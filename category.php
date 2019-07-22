<?php
/**
 * Template for displaying category pages
 *
 * @package projectic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php get_header(); ?>
<div class="wrapper category-wrapper">
    <main role="main">
        <section>                   
            <?php if (have_posts()): ?>
            
                <header class="page-header">
                    <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
                </header>
                <div class="category-content-wrapper">             
                    
                    <?php while ( have_posts() ) : the_post(); ?>                    
                        <?php get_template_part( 'loop-templates/content' ); ?>
                    <?php endwhile; ?>

                </div>

                <?php get_template_part('pagination'); ?>
                
            <?php else: ?>

                <?php get_template_part( 'loop-templates/content', 'none' ); ?>

            <?php endif; ?>          

            
        </section>
    </main>
</div>

<?php get_footer(); ?>
