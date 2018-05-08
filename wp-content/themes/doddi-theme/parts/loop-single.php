<!-- Single Posts - Important Posts Loop -->
<div class="fc-content page-blog">
	<div class="post-container">

		<div class="title">
		  <h3><?php the_title(); ?></h3>
		</div>

		<p class="news-meta">Posted: <?php the_time('j F Y'); ?></p>

		<div class="fc-content">
			<?php the_content();?>
		</div>

			<?php
				// Featured Images
				 $featuredImageId = get_field('featured_image');
				 $featuredImage = wp_get_attachment_image($featuredImageId, 'large');
				 echo $featuredImage;
		 	 ?>


		<!-- Custum Fields Content -->
		<?php include (get_template_directory() .'/includes/flexible-content.php'); ?>

	</div>
</div>
