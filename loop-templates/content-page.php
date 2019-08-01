<?php
/**
 * Partial template for content in page.php
 *
 * @package projectic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="page-img mg-t-xl">
    <?= projectic_get_thumbnail('medium');?>
  </div>

	<header class="entry-header mg-v-xl">
    <h1 class="main-title"> <?php the_title(); ?> </h1>

    <div class="posted-on-details">
      <?php projectic_posted_on(); ?>       
    </div>      
	</header>

  <?php //use .wp-content mg-b-xl class to wrap around WYSWIG contents to get proper styling ?>
	<div class="wp-content mg-b-xl">
		<?php the_content(); ?>
	</div>
	<?php the_tags(__('Tags: ', 'projectic'), ', ', '<br>'); ?>

    <?php edit_post_link(); // Always handy to have Edit Post Links available  ?>

</article> 
