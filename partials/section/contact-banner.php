<div class="contact-banner d-flex">
	<?php 
	$gallery_left = get_field('gallery_left');
	$gallery_right = get_field('gallery_right');
	$contact_baner_title = get_field('contact_baner_title');
	$contact_baner_txt = get_field('contact_baner_txt');

	if( $gallery_left ):  ?>
		<div id="acf-gallery" class="contact-banner-gallery d-flex mg-r-auto mg-l-0">
			<?php foreach( $gallery_left as $image ):?>
				<div class="gallery__item">
						<img 
							class="gallery__item--img" 
							src="<?= $image['sizes']['offer-slider'];?>" 
							alt="<?=  $image['alt'];?>"
							/>
				</div>
			<?php endforeach;?>
		</div>
	<?php endif; ?>

	<div class="contact-banner__content d-flex jc-center ai-center">
		<div class="contact-banner__content--wrapper">
			<div class="default-heading">
				<?=$contact_baner_title;?>
			</div>
			<div class="contact-banner__content--txt mg-t-sm">
				<?= $contact_baner_txt?>
			</div>			
			
			<?= projectic_print_socials();?>
		</div>
	</div>

	<?php if( $gallery_right ):  ?>
		<div id="acf-gallery" class="contact-banner-gallery d-flex mg-r-0 mg-l-auto">
			<?php foreach( $gallery_right as $image ):?>
				<div class="gallery__item">
						<img 
							class="gallery__item--img" 
							src="<?= $image['sizes']['offer-slider'];?>" 
							alt="<?=  $image['alt'];?>"
							/>
				</div>
			<?php endforeach;?>
		</div>
	<?php endif; ?>
	
</div>