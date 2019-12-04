
<?php 
	$local_title = get_field('call_us_title_local');
	$call_us_title = get_field('call_us_title',ACF_OPTION_SLUG);
	$call_us_txt = get_field('call_us_txt',ACF_OPTION_SLUG);
	$call_us_btn_txt = get_field('call_us_btn_txt',ACF_OPTION_SLUG);
	$call_us_btn_url = get_field('call_us_btn_url',ACF_OPTION_SLUG);
	
	$phone_number = get_field('top_info_sub_title',ACF_OPTION_SLUG);

	$heading = strlen($local_title) ? $local_title : $call_us_title;
?>
<div id="call-us-banner">

	<div class="container ">
		<div class="cell-12 txt-center">
			<h2 class="call-us-banner__title mg-b-xs"><?= $heading;?></h2>
			<div class="call-us-banner__txt"><?= $call_us_txt;?></div>
		</div>
	

		<div class="btn-row mg-t-m">
			<a href="<?= $call_us_btn_url;?>" class="btn btn__secondary">
				<?= $call_us_btn_txt;?>		 
			</a>

			<div class="phone-wrapper">
				<div class="top-bar-info__icon top-bar-info__icon--phone-dark"></div>
				<a href="tel:<?= $phone_number;?>" class="">
					<?= $phone_number;?>		 
				</a>
			</div>
		</div>
	</div>
</div>