<?php
/**
 * Partial template for content in single.php
 *
 * @package projectic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

     <div class="post__img">
        <?= projectic_get_thumbnail('medium'); ?>
     </div>      
     <div class="post__content">
      <header class="entry-header">  
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="post-details">
          <?php projectic_posted_on(); ?>       
        </div>
      </header>
      
      <div class="single-post-content">
        <?php the_content(); ?>
      </div>
      
      <footer>
        <?php the_tags(__('Tags: ', 'projectic'), ', ', '<br>'); ?>
        
        <nav class="post-navigation">
            <?php projectic_prev_post() ?>
            <?php projectic_next_post() ?>
        </nav>

        <?php edit_post_link(); ?>
      </footer>
    </div>

</article>

<?php // comments_template();  ?>
