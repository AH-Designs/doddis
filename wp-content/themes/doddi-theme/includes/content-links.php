<?php if(get_sub_field('links')) { ?>

	<?php if(get_sub_field('subtitle')) { ?>
	<div class="row">
		<div class="small-12 medium-12 columns fc-content subtitle-links">

			<h3><?php the_sub_field('subtitle'); ?></h3>

		</div>
	</div>
	<?php } ?>

	<div class="row links">
		<div class="small-12 columns fc-content links-list">
			<ul class="gutter-small">
			<?php while(has_sub_field('links')): ?>
				<li><i class="fas fa-arrow-right"></i><a href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a></li>
			<?php endwhile; ?>
			</ul>
		</div>
	</div>
<?php } ?>
