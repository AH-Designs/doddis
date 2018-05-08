
<!-- Archive - Important Posts Loop -->
<div class="fc-content page-blog">
	<div class="post-container">

		<p class="news-meta">Posted: <?php the_time('j F Y'); ?></p>

		<div class="title">
			<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		</div>

		<p class="excerpt"><?php the_field('story_excerpt'); ?>...</p>

		<a href="<?php the_permalink(); ?>">CONTINUE READING<i class="fas fa-arrow-right"></i></a>

	</div>
</div>
