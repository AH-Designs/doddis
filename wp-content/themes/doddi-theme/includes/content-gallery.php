

<?php if( get_row_layout() == 'fc-photo_gallery' ): ?>


<?php if(get_sub_field('subtitle')) { ?>
<div class="row">
	<div class="small-12 medium-12 columns fc-content subtitle-gallery">
		<h3><?php the_sub_field('subtitle'); ?></h3>
	</div>
</div>
<?php } ?>

<div class="row">
	<div class="small-12 columns fc-content photo-gallery">

			<?php

			$images = get_sub_field('gallery');

				if( $images ): ?>
				    <ul class="gallery">
				        <?php foreach( $images as $image ): ?>
				            <li>
				                <a href="<?php echo $image['url']; ?>">
				                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				                <p><?php echo $image['caption']; ?></p>
				            </li>
				        <?php endforeach; ?>
				    </ul>
				<?php endif; ?>

	</div>
</div>
<?php endif; ?>
