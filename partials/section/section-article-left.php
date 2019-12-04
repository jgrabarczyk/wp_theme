<?php

$title = get_field('article_left_title');
$content = get_field('article_left_content');
$image_ID = get_field('article_left_img_ID');
?>
<section id="article">
	<div class="container p0 article">	
		<div class="cell-6 pd-h-sm cell-m-12 article__txt">				
				<h2 class="article__txt--title article__txt--title-border"> <?= $title ;?></h2>
				<div class="article__txt--content wp-content"> <?= $content ;?></div>
		</div>
		<div class="cell-6 pd-h-sm cell-m-12 article__video">			
			<?= wp_get_attachment_image( $image_ID, 'article-img' ); ?>
		</div>
	</div>
</section>