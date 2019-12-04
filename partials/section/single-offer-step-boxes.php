<?php 
$title = get_sub_field('boxs_title');

?>
<!-- <section id="single-offer-step-boxes"> -->
<section id="single-offer-step-boxes">
	<div class="single-offer-step-boxes-bg">	
		
		<div class="container ">		
			<h2 class="boxes-title mg-v-lg">
				<?= $title; ?>
			</h2>
		</div>

		<div class="container box--wrapper p0">			
			<?php if( have_rows('box_repeater') ) :
				while ( have_rows('box_repeater') ) : the_row();
					$box_label = get_sub_field('box_label');
					$box_title = get_sub_field('box_title');
					$box_txt = get_sub_field('box_txt');
					?>
					<div class="cell-4  cell-lg-6 cell-sm-12 pd-h-sm mg-b-m">
						<div class="box pd-v-m pd-h-m">
							<div class="box__label">
								<?= $box_label ;?>
							</div>
							<div class="box__title default-heading default-heading--left">
								<?= $box_title ;?>
							</div>
							<div class="box__txt wp-content">
								<?= $box_txt ;?>
							</div>
							
						</div>
					</div>
					<?php
				endwhile;					
			endif; ?>
		</div>		
		
		<?php if( have_rows('tab_reapeater') ) : 
			$i=0;
			$j=0;
			?>			
			<nav class="container ">
				<ul class="tab--heading w-100">
					<?php while ( have_rows('tab_reapeater') ) : the_row();
						$i++;
						?>
						<li class="tab d-flex" data-tab-heading-id="<?= $i;?>">
							<div class="tab--label" data-tab-heading-id="<?= $i;?>">
								<?= get_sub_field('tab_label');?>
							</div>
							<div class="arrow"></div>
						</li>
					<?php endwhile;?>				
				</ul>
			</nav>		
		<?php endif;?>
	</div>	

	<?php if( have_rows('tab_reapeater') ) : ?>
		<div class="container p0">
		<?php while ( have_rows('tab_reapeater') ) : the_row();
			$tab_label = get_sub_field('tab_label');
			$tab_txt = get_sub_field('tab_txt');
			$tab_img = get_sub_field('tab_img');
			$is_img_set = !empty($tab_img) && !is_null($tab_img) ? true : false;
			$tab_txt_class = $is_img_set ? 'cell-6  cell-m-12' : 'cell-12';
			$j++;
			?>
			<div class="tab__content mg-t-lg" data-tab-content-id="<?= $j;?>">
				<div class="d-flex">
					<div class="tab__content--txt pd-h-sm <?=$tab_txt_class;?> ">
						<?= $tab_txt;?>
					</div>

					<?php if($is_img_set):?>
						<div class="cell-6 cell-m-12 pd-h-sm tab__content--img">
							<?= wp_get_attachment_image($tab_img,'full');?>
						</div>
					<?php endif;?>

				</div>	
			</div>	
			<?php
		endwhile;
		?>
		</div>
	<?php endif; ?>

	</section>
