<?php 
$job_query = new WP_Query(array(
  'post_type' => 'oferty_pracy',  
  'posts_per_page' => -1,
));
$offers_title = get_field('offers_title')

?>


<div class="bg-job-offer pd-v-lg">
		<div class="container jc-center">
			<div class="cell-12">	
				<h2 class="job-offer__title job-offer__title--big">
					<?= $offers_title	;?>
				</h2>
			</div>
			
				<?php if ($job_query->have_posts()): ?>
					
					<?php while ($job_query->have_posts()) : $job_query->the_post();?>
						<div class="cell-8 cell-sm-12 job-offer__single ">
							<a href="<?= get_permalink();?>" class="d-flex jc-between ai-center">
								<h2 class="job-offer__title">
									<?= get_the_title(); ?>
								</h2>
								<div class="arrow arrow__right"></div>
							</a>
						</div>
					<?php endwhile;?>
				
					<?php get_template_part('pagination');  ?>				
							
					<?php else:
						get_template_part( 'loop-templates/content', 'none' ); 
					endif; 
					wp_reset_query();
					?>
			
		</div>
	</div>