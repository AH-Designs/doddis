<?php if(get_sub_field('profiles')) { ?>

<?php if(get_sub_field('subtitle')) { ?>
<div class="row">
	<div class="small-12 medium-12 columns fc-content subtitle">
		<h3><?php the_sub_field('subtitle'); ?></h3>	
	</div>
</div>
<?php } ?>


	
	<div class="fc-content">
	<?php while(has_sub_field('profiles')): ?>
	<div class="row profiles">
		<div class="small-12 medium-4 large-3 columns profile-image">
			<?php $portrait = wp_get_attachment_image_src(get_sub_field('photo'), 'portrait'); ?>
			<div class="profile-photo"><img src="<?php echo $portrait[0]; ?>" /></div>
		</div>
		
		<div class="small-12 medium-8 large-9 columns profile-data">
			<h3><?php the_sub_field('name'); ?></h3>
			<?php if(get_sub_field('role')) { ?><div class="profile-role"><?php the_sub_field('role'); ?></div><?php } ?>
			<?php if(get_sub_field('description')) { ?><div class="profile-desc"><?php the_sub_field('description'); ?></div><?php } ?>
		</div>
	</div>
	<?php endwhile; ?>
	</div>
<?php } ?>