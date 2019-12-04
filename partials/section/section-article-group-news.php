<?php
$default_news_id = pll_get_term(12);
$article_group_cat_id = get_field('article_group_cat_id');
$cat_ID = $article_group_cat_id !== NULL && $article_group_cat_id !== 0 ? $article_group_cat_id : $default_news_id;
$query = new WP_Query(array(
  'post_type' => 'post',
  'cat' => $cat_ID,
  'posts_per_page' => 3,
));

if ($query->have_posts()):
  $i = 0;
  $article_group_title = get_cat_name($cat_ID);
  $article_group_btn_txt = get_field('article_group_btn_txt');
  $article_group_btn_url = get_field('article_group_btn_url');
  ?>
		<section id="news-wrapper" >
			<div class="container">
				<div class="cell-12 news__heading mg-b-m">
					<h2 class="default-heading"><?=$article_group_title;?> </h2>
				</div>
			</div>
			<div id="news" class="container p0">
				<?php while ($query->have_posts()): $query->the_post(); ?>
					<div class="cell-4 cell-m-12 pd-h-sm mg-b-sm">
						<div class="article-box">
							
							<?=get_the_post_thumbnail(get_the_ID(), 'article-group-big')?>
							<div class="posted-on">
								<?php projectic_posted_on();?>
							</div>
							<h3 class="article-box__title mg-t-xs"><?=get_the_title();?></h3>
							<div class="border-bottom-short"></div>
							<div class="article-box__content mg-b-sm">
								<?=get_projectic_excerpt(30, false);?>
							</div>
							<?='<a class="view-more" href="'.get_permalink( ).'">'. __('View more','projectic') . '</a>';
							?>
						</div>
					</div>

				<?php endwhile;
					wp_reset_postdata();
				?>
			</div>

			<div class="cell-12 news__footer txt-center mg-t-lg">
				<a
					href="<?=get_category_link($cat_ID);?> "
					class="btn btn__secondary btn__secondary--o">
					<?=$article_group_btn_txt;?>
				</a>
			</div>

		</section>
		<?php
else:
  _e('Sorry, no posts matched your criteria.');
endif;