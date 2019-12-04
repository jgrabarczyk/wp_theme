<?php
$cat = get_field('offer_category');
$query = new WP_Query(array(
  'post_type' => array('oferty','post'),
	'posts_per_page' => 3,
	'category_name' => $cat
));
$related_title = get_field('related_title');
?>

<section id="related">
	<div class="container mg-v-lg">
		<h3 class="cell-12 default-heading">
			<?= $related_title;?>
		</h3>
	</div>

	<div class="container p0 jc-between">		
		<div class="cell-9 cell-m-12">			
			<?php if ($query->have_posts()):
				while ($query->have_posts()): $query->the_post();
					?>
					<div class="cell-12 mg-b-xl">				
						<?php get_template_part( 'loop-templates/content','related' ); ?>
					</div>
					<?php
				endwhile;
			else:
				_e('Sorry, no posts matched your criteria.');
			endif;
			?>
		</div>

		<aside class="cell-3 cell-m-12 sidebar pd-r-sm">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-widget-list')) : ?>
			<?php endif; ?>
		</aside>
	</div>
</section>