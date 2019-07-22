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

	<header class="page-header">
		
		<?php the_title( '<h1 class="page-title -bordered">', '</h1>' ); ?>
		

	</header>


    <?php # echo projectic_get_thumbnail();?>

	<div class="page-content">
		<?php the_content(); ?>
	</div>
	<?php the_tags(__('Tags: ', 'projectic'), ', ', '<br>'); ?>

    <?php edit_post_link(); // Always handy to have Edit Post Links available  ?>

</article> 
