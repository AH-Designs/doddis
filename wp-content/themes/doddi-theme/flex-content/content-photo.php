<?php if( get_row_layout() == 'fc-single_photo' ): ?>

	<!-- Sub Title - Single Photo HTML -->

<?php if(get_sub_field('subtitle')) { ?>
<div class="row">
	<div class="small-12 medium-12 columns fc-content subtitle-photo">

			<h3><?php the_sub_field('subtitle'); ?></h3>

	</div>
</div>
<?php } ?>

<!-- Single Photo HTML -->

<div class="row">
	<div class="small-12 columns fc-content single-photo">

		 <?php $fcphoto = wp_get_attachment_image_src(get_sub_field('photo'), 'large'); ?>

		 <img class="aligncenter" src="<?php echo $fcphoto[0]; ?>" />

	</div>
</div>
<?php endif; ?>
