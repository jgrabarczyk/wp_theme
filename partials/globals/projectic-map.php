<?php  global $PROJECTIC_MAP_KEY; ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?=$PROJECTIC_MAP_KEY;?>"></script>

<?php if( have_rows('locations', ACF_OPTION_SLUG ) ): ?>		
	<div class="acf-map">	
		<?php while ( have_rows('locations', ACF_OPTION_SLUG ) ) : the_row(); 
		  	$location = get_sub_field('location');
			?>
			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
				<h4><?php the_sub_field('title'); ?></h4>
				<p class="address"><?php echo $location['address']; ?></p>
				<p><?php the_sub_field('description'); ?></p>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?> 