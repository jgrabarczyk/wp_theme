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
<div id="searchform-default" class="search-form-wrapper">
  <form 
    class="search-form" 
    method="get" 
    action="<?php echo home_url(); ?>" 
    role="search">
      <input 
        class="search-input" 
        type="search" 
        name="s" 
        placeholder="<?php _e('Search...', 'wp_theme'); ?>">

      <button 
        class="search-submit" 
        type="submit" 
        role="button">
        <i class="fa fa-search"></i>
      </button>
  </form>
</div>