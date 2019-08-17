<?php
/**
 * 404 template
 * 
 * @package wp_theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>

<main role="main">
  <div class="container">    
    <section class="no-results not-found">
      
      <header class="page-header mg-v-xl">
        <h1 class="main-title"> <?= __('You seems lost', 'wp_theme'); ?> </h1>
      </header>

      <?php get_template_part( 'loop-templates/content', 'none' ); ?>
    </section>
  </div>
</main>

<?php get_footer(); ?>

