<?php
/**
 * Partial file with searchform 
 * 
 * @package wp_theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div id="searchform-mobile-input-hidden" class="search-form-wrapper">
  <div id="searchform-toggle" class="searchform-toggle">
		<?php _e('Click to search', 'wp_theme'); ?>
    <i class="fa fa-search"></i>
  </div>
  
  <form 
    class="search-form" 
    method="get" 
    action="<?php echo home_url(); ?>" 
    role="search">
    <input 
      class="search-input" 
      type="search" 
      name="s" 
      placeholder="<?php _e('Search...', 'wp_theme'); ?>"
    >

    <button 
      class="search-submit" 
      type="submit" 
      role="button">
      <i class="fa fa-search"></i>
    </button>
  </form>

</div>