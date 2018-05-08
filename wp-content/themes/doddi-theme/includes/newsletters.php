<?php if(get_field('academic_terms')) { ?>
<div class="row term">
<?php while(has_sub_field('academic_terms')): ?>

	<div class="small-12 medium-12 large-4 columns newsletters">
		<h3><?php the_sub_field('term_title'); ?></h3>
			<?php if(get_sub_field('newsletters')) { ?>
			<?php 
				$newsArray = get_sub_field('newsletters');
				$news = array_reverse($newsArray);

				if($news) { ?>
				<ul class="newsletters">
				<?php foreach($news as $newsletter) { ?>
			<li><a href="<?php echo $newsletter['file']; ?>"><span class="link-label"><?php echo $newsletter['title']; ?></span></a></li>
			<?php } ?>
			</ul>
			<?php } ?>
			<?php } ?>
	
	
	
	
	
	
	</div>

<?php endwhile; ?>
</div><!-- closes row -->
<?php } ?>