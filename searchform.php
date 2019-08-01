<?php
/**
 * Partial file with searchform 
 * 
 * @package projectic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<form 
  class="search-form" 
  method="get" 
  action="<?php echo home_url(); ?>" 
  role="search">
    <input 
      class="search-input" 
      type="search" 
      name="s" 
      placeholder="<?php _e('Search...', 'projectic'); ?>">

    <button 
      class="search-submit" 
      type="submit" 
      role="button">
      <i class="fa fa-search"></i>
    </button>
</form>
