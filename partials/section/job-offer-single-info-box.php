<?php 
/**
 * job offer single info box template
 * 
 * @package projectic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$position_title = get_field('position_title');
$position = get_field('position');
$place_title = get_field('place_title');
$place = get_field('place');
$btn_txt = get_field('btn_txt');
?>
<div class="job-offer__info-box">

<h3 class="job-offer__info-box--heading">
	<?= $position_title;?>
</h3>
<div class="job-offer__info-box--txt"> 
	<?= $position;?>
</div>

<h3 class="job-offer__info-box--heading">
	<?= $place_title; ?>
</h3>
<div class="job-offer__info-box--txt"> 
	<?= $place; ?>
</div>
<a id="job-form-toggler" href="javascript:void(0)" class="job-form-toggler  btn btn__darkblue btn--shadow">	
	<?= $btn_txt;?>		 
</a>
</div>