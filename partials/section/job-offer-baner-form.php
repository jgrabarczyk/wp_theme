
<?php 
	
	$job_offer_banner_title = get_field('job_offer_banner_title');
	$job_offer_banner_txt = get_field('job_offer_banner_txt');
	$job_offer_banner_btn_txt = get_field('job_offer_banner_btn_txt');
	$job_offer_banner_form = get_field('job_offer_banner_form');

?>
<div id="call-us-banner">

	<div class="container ">
		<div class="cell-12 txt-center">
			<h2 class="call-us-banner__title mg-b-xs"><?= $job_offer_banner_title;?></h2>
			<div class="call-us-banner__txt"><?= $job_offer_banner_txt;?></div>
		</div>
	

		<div class="btn-row mg-t-m jc-center">
			<a id="job-form-toggler" href="javascript:vodi(0)" class="job-form-toggler btn btn__secondary">
			<?= $job_offer_banner_btn_txt;?>		 
			</a>

			
		</div>
	</div>
</div>

<div id="job-form" class="job-form__wrapper">
	<div class="container jc-center">
		<div class="cell-8 cell-sm-12 job-form pd-h-m pd-v-m">					
			<div id="close-job-form" class="close-job-form cross"> </div>
				
			<?= do_shortcode( $job_offer_banner_form );?>
		</div>
	</div>
</div>