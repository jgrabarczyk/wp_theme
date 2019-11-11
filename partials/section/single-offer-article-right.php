<?php
	$wyswig = get_sub_field('offer_wyswig');	
	$img = get_sub_field('offer_img');	
	$img_caption = get_sub_field('offer_img_caption');	
?>
<section id="single-offer-article-right" class="mg-t-lg mg-b-xl">
	<div class="container p0 ai-center">
		
	<div class="cell-6 cell-m-12  img-wrapper pd-h-sm">
			<?= wp_get_attachment_image( $img,'full' ) ;?>
			<?php if(strlen($img_caption) !== 0){ ?>
				<div class="img-caption pd-v-m pd-l-xl pd-r-m">
						<?= $img_caption ;?>
				</div>
			<?php } ?>
		</div>

		<div class="cell-6 cell-m-12  wp-content pd-h-sm">
			<?= $wyswig ;?>
		</div>
		
	</div>
</section>