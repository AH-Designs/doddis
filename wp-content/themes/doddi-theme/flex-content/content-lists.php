<?php if(get_sub_field('list')) { ?>

	<?php if(get_sub_field('subtitle')) { ?>
	<div class="row">
		<div class="small-12 medium-12 columns fc-content subtitle-links">

			<h3><?php the_sub_field('subtitle'); ?></h3>

		</div>
	</div>
	<?php } ?>

	<div class="row links">
		<div class="small-12 columns fc-content lists">
			<div class="gutter-small">

				<?php the_sub_field('list'); ?>

			</div>
		</div>
	</div>
<?php } ?>
