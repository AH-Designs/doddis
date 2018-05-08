<?php if(get_sub_field('profiles')) { ?>

<?php if(get_sub_field('subtitle')) { ?>
<div class="row">
	<div class="small-12 medium-12 columns fc-content subtitle">
		<h3><?php the_sub_field('subtitle'); ?></h3>	
	</div>
</div>
<?php } ?>


	
	<div class="row profiles-grid fc-content">
	<?php while(has_sub_field('profiles')): ?>
	<div class="small-6 medium-3 columns profile-block">
		<div class="profile">
			
			<div class="profile-name">
			<?php the_sub_field('name'); ?>
			</div>
			
			<div class="profile-image">
			<?php $profileimage = wp_get_attachment_image_src(get_sub_field('photo'), 'portrait'); ?>
			
			<img src="<?php echo $profileimage[0]; ?>" />
			</div>
			<?php if(get_sub_field('role')) { ?><div class="profile-role"><?php the_sub_field('role'); ?></div><?php } ?>
			
		</div>
	</div>
	<?php endwhile; ?>
	</div>
<?php } ?>