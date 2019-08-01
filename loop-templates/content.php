<?php
/**
 * Partial template for content excerpts in loops
 *
 * @package projectic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('d-flex'); ?>>
    
    <div class="post-excerpt__img">
      <?php echo projectic_get_thumbnail();?>
    </div>

    <div class="post-excerpt__content">
      <header class="post-excerpt__content--header">        
          <h2 class="post-excerpt--title"> 
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </h2>

          <div class="posted-on-details">
            <?= projectic_posted_on() ?>    
          </div>
      </header>

      <div class="post-excerpt--excerpt wp-content mg-b-xl">
          <?php projectic_excerpt('projectic_wp_index');?>
      </div>

      <?php edit_post_link(); ?>
    </div>
</article>