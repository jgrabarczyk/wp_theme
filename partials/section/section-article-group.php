<?php if( have_rows('article_group') ) :  
	$section_title = get_field('article_group_title');
	?>
	<section id="article-group-wrapper" >

		<div class="container">			
			<div class="cell-12 article-group__heading mg-b-m">
				<h2 class="default-heading"><?= $section_title;?></h2>
			</div>
		</div>

		<div id="article-group" class="container p0">			
			
			<?php while ( have_rows('article_group') ) : the_row();
				$ID = get_sub_field('article');
				$img_ID = get_sub_field('article_img');
				?>

				<div class="cell-4 cell-sm-12 pd-h-sm">
					<a href="<?= get_permalink($ID);?>">
						<div class="article-box border-hover">
							<?= wp_get_attachment_image( $img_ID, 'article-group', false ); ?>				
							
							<h3 class="article-box__title mg-t-xs"><?= get_the_title($ID);?></h3>								
						</div>								
					</a>
				</div>		
				
			<?php endwhile; ?>

		</div>	
	</section>

<?php  else:
	 _e('Sorry, no posts matched your criteria.');
endif; 
?>