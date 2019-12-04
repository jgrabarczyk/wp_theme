<?php $gallery = get_field('gallery');?>

<?php if( $gallery ): ?>
	<div id="gallery" class="gallery d-flex">
		<?php foreach( $gallery as $image ): ?>
			<div class="gallery__item cell-4">
				<a class="gallery__item--url" href="<?= $image['url']?>" title="<?= __('Toggle Ligthbox','wp_theme')?>">
					<div class="gallery__item--hover"></div>
					<img  class="gallery__item--img" src="<?= $image['sizes']['article-group-big']?>" alt="<?= $image['alt']?>"/>
				</a>
			</div>
		<?php endforeach;?>
	</div>
<?php endif;?>