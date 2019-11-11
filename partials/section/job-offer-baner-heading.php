<?php 
	$baner_title = get_field('baner_title');
	$baner_caption = get_field('baner_caption');
?>
<div class="carrier-banner">
	<div class="carrier-banner__txt">
		<h2>
			<?=$baner_title;?>
		</h2>
		<p class="hide show-sm ">
			<?=$baner_caption;?>
		</p>
	</div>
</div>
<div class="carrier-banner-bottom hide-sm">
	<p class="hide-sm">
		<?=$baner_caption;?>
	</p>
</div>