<?php if( have_rows('gallery_group') ) :  
	$section_title = get_field('gallery_group_title');
	?>
	<section id="gallery-group-wrapper" class="mg-t-xxl" >

		<div class="container-fullhd d-flex">			
			<div class="cell-12 gallery-group__heading mg-b-m">
				<h2 class="default-heading"><?= $section_title;?></h2>
			</div>
		</div>

		<div id="gallery-group" class="d-flex container-fullhd">			
			
			<?php while ( have_rows('gallery_group') ) : the_row();
				$gallery_link = get_sub_field('gallery_page');
				$img_ID = get_sub_field('gallery_img');
				$gallery_ID = get_sub_field('gallery_id');
				$gallery_title = get_sub_field('gallery_title');
				
				$hash =  $gallery_ID ? '#'.$gallery_ID : '';
				$url = $gallery_link . $hash;
				?>
			
				<div class="cell-3 cell-lg-6 cell-xs-12">
					<a href="<?= $url;?>">
						<div class="article-box border-hover">
							<?= wp_get_attachment_image( $img_ID, 'article-group-big', false ); ?>				
							
							<h3 class="article-box__title mg-t-xs"><?= $gallery_title;?></h3>								
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