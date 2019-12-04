

<?php if( have_rows('baner-slider') ) :?>
	<section id="baner-slider-wrapper">
	<div id="baner-slider">
	<?php while ( have_rows('baner-slider') ) : the_row();
		$image_id = get_sub_field('image');
		$title = get_sub_field('title');
		$caption = get_sub_field('caption');
		$btn_txt = get_sub_field('btn_txt');
		$btn_url = get_sub_field('btn_url');
		$bg_img = wp_get_attachment_image_src( $image_id, 'baner-slider', false )[0];
	?>
		<div class="baner-slide">
			<div class="baner-slide__bg" style="background-image: url(<?=$bg_img;?>);"></div>
			
			<div class="baner-slide__txt container h-100">
				<?php if(strlen($title) !== 0 ): ?> 
					<h2 class="baner-slide__txt--title"><?=$title;?></h2>
				<?php endif;?>			

				<?php if(strlen($caption) !== 0 ): ?> 
					<p class="baner-slide__txt--caption"><?=$caption;?></p>
				<?php endif;?>			

				<?php if(strlen($btn_txt) !== 0 ): ?> 
					<a href="<?= $btn_url;?>"class="baner-slide__txt--btn btn btn__secondary"><?= $btn_txt;?></a>
				<?php endif;?>			
				
			</div>	
			
		</div>
	<?php endwhile;?>
	</div>
	<div class="dots-container"></div>
</section>
<?php endif; ?>	

<script>

	</script>