<?php
$form = get_sub_field('form');
$form_title = get_sub_field('form_title');
$form_caption = get_sub_field('form_caption');
$wyswig = get_sub_field('wyswig');
$img_1 = get_sub_field('img_1');
$img_2 = get_sub_field('img_2');
?>
<section id="single-offer-form" class="pd-v-lg">
	<div class="container jc-between">
			<div class="cell-6 cell-lg-12 wp-content">
				<a href="<?=wp_get_referer();?>" class="back-link">
					<i class="arrow arrow__left"></i>
					<?=__('Back', 'projectic');?>
				</a>

				<h1 class="form-section-title mg-v-lg">
					<?=get_the_title();?>
				</h1>
				<div class="wp-content">
					<?=$wyswig;?>
				</div>

				<div class="form-img-wrapper mg-t-xl d-flex jc-between">
					<?=wp_get_attachment_image($img_1, 'full');?>
					<div class="bg"></div>
					<?=wp_get_attachment_image($img_2, 'full');?>
				</div>
			</div>

			<div class="cell-5 cell-lg-12 ">
				<div class="form form--bg pd-v-m">
					<div class="form__heading pd-h-m mg-b-m">
						<h2 class="form__heading--title mg-b-sm">
							<?=$form_title?>
						</h2>
						<p>
							<?=$form_caption;?>
						</p>
					</div>
					<div class="form__fields pd-h-m">
						<?=do_shortcode($form);?>
					</div>
				</div>
			</div>
	</div>
</section>