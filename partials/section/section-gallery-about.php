<?php
 $gallery = get_field('gallery');
 $gallery_btn_txt = get_field('gallery_btn_txt');

?>

<?php if( $gallery ): 
	$i= 0 	
	?>
	<div id="gallery" class="container p0 gallery d-flex jc-between jc-center-m">
		<?php foreach( $gallery as $image ): 			
			$is_visible = $i < 3 ? '' : 'hide';
			$popped = $i == 1 ? 'popped' : '';
		?>

			<div class="gallery__item cell-5 cell-m-6 cell-xs-12 mg-b-sm pd-h-sm <?= $is_visible , $popped;?>">
				<a class="gallery__item--url" href="<?= $image['url']?>" title="<?= $image['title']?>">
					<div class="gallery__item--hover"></div>
					<img  class="gallery__item--img" src="<?= $image['sizes']['article-group-big']?>" alt="<?= $image['alt']?>"/>
				</a>
			</div>
		<?php 
		
		$i++;
		endforeach;?>
	</div>
	<div id="gallery-btn" class="container gallery-btn-wrapper jc-center mg-t-xxl">
		<a href="javascript:gallery1trigger()" class=" gallery-btn btn btn__secondary btn__secondary--o"> <?= $gallery_btn_txt;?> </a >
	</div>
<?php endif;?>

<script>
function gallery1trigger() {
		jQuery('#gallery a').eq(0).trigger('click');
	}
</script>