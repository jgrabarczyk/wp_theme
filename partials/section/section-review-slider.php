<?php if( have_rows('review_slider') ) :  
	$section_title = get_field('review_slider_title');
	?>
	<section id="review-slider-wrapper" class="mg-v-lg">

		<div class="container">			
			<div class="cell-12 review-slider__heading mg-b-m">
				<h2 class="default-heading"><?= $section_title;?></h2>
			</div>
		</div>
		
		<div class="arrows-container">
			<div class="review-prev arrow arrow--big arrow__left"></div>
			<div class="review-next arrow arrow--big arrow__right"></div>
		</div>
		<div id="review-slider" class="p0">			
			
			<?php while ( have_rows('review_slider') ) : the_row();
				$review_author = get_sub_field('review_author');				
				$review_content = get_sub_field('review_content');				
				?>
				<div class="slider-item">
					<div class="article-box">
						<img class="quote" src="<?=  get_template_directory_uri(  );?>/assets/img/quotes.png" alt="">													
						<p class="article-box__content mg-t-xs"><?= $review_content ?></p>											
						<h3 class="article-box__title mg-t-xs">- <?= $review_author ?></h3>											
					</div>		
				</div>		
				
			<?php endwhile; ?>

		</div>	
	</section>

<?php  else:
	 _e('Sorry, no posts matched your criteria.');
endif; 
?>