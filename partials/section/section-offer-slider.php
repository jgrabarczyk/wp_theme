<?php
$query = new WP_Query(array(
  'post_type' => 'oferty',
  'posts_per_page' => -1,
));

if ($query->have_posts()):
	$i = 0;
	$offer_slider_title = get_field('offer_slider_title');
	$offer_slider_btn_txt = get_field('offer_slider_btn_txt');
	$offer_slider_btn_url = get_field('offer_slider_btn_url');
	?>
	<section id="offer-slider-wrapper" >
		<div class="container">
			<div class="cell-12 offer-slider__heading mg-b-m">
				<h2 class="default-heading"><?= $offer_slider_title;?> </h2>
				<div class="arrows-container">
					<div class="offer-prev arrow arrow--big arrow__left"></div>
					<div class="offer-next arrow arrow--big arrow__right"></div>
				</div>
			</div>
		</div>
		<div id="offer-slider" class="container p0">			
			<?php 
			while ($query->have_posts()): $query->the_post();
				$ID = get_the_ID();
				$offer_list_img_ID = get_field('offer_list_img', $ID);
				$offer_list_desc = get_field('offer_list_desc', $ID);
				$offer_title = get_field('offer_title', $ID);
				$offer_subtitle = get_field('offer_subtitle', $ID);
				$offer_title_color = get_field('offer_title_color', $ID);
				$offer_header_bg_img = get_field('offer_header_bg_img', $ID);
				$offer_section = get_field('offer_section', $ID);
			?>
			<div class="cell-3 article-box">
				
				<?= wp_get_attachment_image( $offer_list_img_ID, 'offer-slider', false ); ?>				
				<h3 class="article-box__title mg-t-xs"><?= $offer_title;?></h3>								
				<p class="article-box__subtitle"><?= $offer_subtitle;?></p>
				<div class="article-box__hover">
					<h3 class="article-box__title"><?= $offer_title;?></h3>				
					<p><?= $offer_subtitle;?></p>
					<div class="border-bottom-short"></div>
					<div class="article-box__hover--desc"> <?= $offer_list_desc;?></div>
					<a class="article-box__hover--read-more" href="<?= get_permalink($ID)?>">
						<?= __('See detailas', 'projectic');?>
					</a>
				</div>
				
		</div>

		
	<?php
    
  endwhile;
	wp_reset_postdata();
	?>
	</div>
	
	<div class="cell-12 offer-slider__footer txt-center">
			<a 
				href="<?= $offer_slider_btn_url;?> "
				class="btn btn__secondary btn__secondary--o">
				<?= $offer_slider_btn_txt;?>
			</a>
	</div>

	</section>
	<?php 
else:
  _e('Sorry, no posts matched your criteria.');
endif;