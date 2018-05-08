<?php if(get_sub_field('subtitle')) { ?>
<div class="row">
	<div class="small-12 medium-12 columns">
		<h3><?php the_sub_field('subtitle'); ?></h3>	
	</div>
</div>
<?php } ?>

<?php if(get_sub_field('slides')) { ?>
	<div class="row">
		<div class="small-12 columns">
			<div class="page-slideshow">
				<div class="owl-carousel-page">
					<?php while(has_sub_field('slides')): ?>
						<?php $photo = wp_get_attachment_image_src(get_sub_field('slide'), 'large'); ?>
						<div class="item"><img src="<?php echo $photo[0]; ?>" /></div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>