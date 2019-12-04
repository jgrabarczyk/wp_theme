<?php
$heading = get_field('article_video_heading');
$title = get_field('article_video_title');
$content = get_field('article_video_content');
$url = get_field('article_video_url');
$overlay_img = get_field('article_video_url_cover');
?>
<section id="baner-article-video" class="mg-t-lg mg-b-xl">
	<div class="container article-video">
		<div class="cell-6 cell-m-12 article-video__video">			
			<?php projectic_print_ACF_oEmbed($url,$overlay_img);?>
		</div>
		<div class="cell-6 cell-m-12 article-video__txt">
				<h2 class="article-video__txt--heading"> <?= $heading ;?></h2>
				<h2 class="article-video__txt--title"> <?= $title ;?></h2>
				<div class="article-video__txt--content"> <?= $content ;?></div>
		</div>
	</div>
</section>