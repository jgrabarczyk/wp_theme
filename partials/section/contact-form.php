<?php 
$contact_form_shortcode = get_field('contact_form_shortcode');
?>
<div class="bg-form">
	<div id="contact-form" class="contact-form d-flex">
		<div class="contact-form__form">
			<div class="cell-12 txt-center">
				<h2 class="contact-form__form--title mg-b-xs">
					<?php the_field('contact_heading');?>
				</h2>
			</div>

			<div class="cell-12 txt-center">
				<p class="contact-form__form--txt">
					<?php the_field('contact_txt');?>
				</p>
			</div>

			<?php echo do_shortcode($contact_form_shortcode) ?>
		</div>
	</div>
</div>