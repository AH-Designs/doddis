<?php if( get_row_layout() == 'fc-text_area' ): ?>


<!-- Sub Titles HTML -->

<?php if(get_sub_field('subtitle')) { ?>
<div class="row">
	<div class="small-12 medium-12 columns fc-content subtitle-text">

			<h3><?php the_sub_field('subtitle'); ?></h3>

	</div>
</div>
<?php } ?>

<!-- Text Area HTML -->

<div class="row">
	<div class="small-12 columns fc-content text-area">
		<div class="gutter-small">
			<?php the_sub_field('text_area'); ?>
		</div>
	</div>
</div>
<?php endif; ?>
