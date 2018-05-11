<?php if(get_sub_field('subtitle')) { ?>
<div class="row">
	<div class="small-12 medium-12 columns fc-content subtitle">
		<h3><?php the_sub_field('subtitle'); ?></h3>	
	</div>
</div>
<?php } ?>


<div class="row">
	<div class="small-12 columns fc-content map">
		<h2><?php the_sub_field('map_subtitle'); ?></h2>
		<div class="map-wrapper">
			<div id="map-canvas"></div>
		</div>
	</div>
</div>