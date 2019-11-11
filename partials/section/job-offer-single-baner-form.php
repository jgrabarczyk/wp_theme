
<?php 
/**
 * job offer single baner
 * 
 * @package projectic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	$banner_title = get_field('banner_title');
	$banner_subtitle = get_field('banner_subtitle');
	$banner_txt = get_field('banner_txt');
	$banner_btn_txt = get_field('btn_txt_2');
	$banner_form = get_field('banner_form');
?>
<div id="call-us-banner">

	<div class="container ">
		<div class="cell-7 cell-lg-8 cell-m-12">
			<h2 class="call-us-banner__title mg-b-xs"><?= $banner_title;?></h2>
			<h2 class="call-us-banner__subtitle mg-b-lg"><?= $banner_subtitle;?></h2>
			<div class="call-us-banner__txt"><?= $banner_txt;?></div>
		</div>
	

		<div class="cell-5 cell-lg-4 cell-m-12 d-flex jc-end ai-center">
			<a id="job-form-toggler2" href="javascript:vodi(0)" class="job-form-toggler btn btn--shadow btn__big btn__darkblue">
				<?= $banner_btn_txt;?>		 
			</a>
		</div>
	</div>
</div>

<div id="job-form" class="job-form__wrapper">
	<div class="container jc-center">
		<div class="cell-8 cell-sm-12 job-form pd-h-m pd-v-m">					
			<div id="close-job-form" class="close-job-form cross"> </div>
			<?= do_shortcode( $banner_form );?>
		</div>
	</div>
</div>