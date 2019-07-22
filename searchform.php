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
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
    <input class="search-input" type="search" name="s" placeholder="<?php _e('To search, type and hit enter.', 'projectic'); ?>">
    <button class="search-submit" type="submit" role="button"><?php _e('Search', 'projectic'); ?></button>
</form>
