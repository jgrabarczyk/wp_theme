<?php 
	$top_info_title = get_field('top_info_title',ACF_OPTION_SLUG);
	$top_info_sub_title = get_field('top_info_sub_title',ACF_OPTION_SLUG);
	$top_info_caption = get_field('top_info_caption',ACF_OPTION_SLUG);
	$top_info_title_2 = get_field('top_info_title_2',ACF_OPTION_SLUG);
	$top_info_sub_title_2 = get_field('top_info_sub_title_2',ACF_OPTION_SLUG);
	$top_info_caption_2 = get_field('top_info_caption_2',ACF_OPTION_SLUG);
?>
<div class="top-bar-info__item">
	<div class="top-bar-info__icon top-bar-info__icon--phone"></div>
	<div class="top-bar-info__content">
		<?php
		if($top_info_title)			 
			echo'<p class="top-bar-info__item--title">'.$top_info_title.'</p>';
			?>

		<?php
		if($top_info_sub_title)
			echo'<a href="tel:'.$top_info_sub_title.'"class="top-bar-info__item--sub-title">'.$top_info_sub_title.'</a>';
		?>
		<?php
		if($top_info_caption)
			echo'<p class="top-bar-info__item--caption">'.$top_info_caption.'</p>';
		?>		
	</div>
</div>


<div class="top-bar-info__item top-bar-info__item--wide">
	<div class="top-bar-info__icon top-bar-info__icon--clock"></div>
	<div class="top-bar-info__content">
		<?php
		if($top_info_title_2)			 
			echo'<p class="top-bar-info__item--title">'.$top_info_title_2.'</p>';
			?>

		<?php
		if($top_info_sub_title_2)
			echo'<p class="top-bar-info__item--sub-title">'.$top_info_sub_title_2.'</p>';
		?>
		<?php
		if($top_info_caption_2)
			echo'<p class="top-bar-info__item--caption">'.$top_info_caption_2.'</p>';
		?>		
	</div>
</div>