<?php if( get_row_layout() == 'fc-blog' ):

	$selectedblog = get_sub_field('select_blog_category');

	$blogloop = new WP_Query( array( 'cat' => $selectedblog, 'posts_per_page' => 10 ) );

?>

<!-- Sub Title -->
<?php if(get_sub_field('subtitle')) { ?>
<div class="row">
	<div class="small-12 medium-12 columns fc-content subtitle-page-blog">
		<h3><?php the_sub_field('subtitle'); ?></h3>
	</div>
</div>
<?php } ?>

<div class="row">
	<div class="small-12 columns fc-content page-blog">

		<?php while ( $blogloop->have_posts() ) : $blogloop->the_post(); ?>

			<?php get_template_part( 'parts/loop', 'archive' ); ?>

		<?php
			endwhile;
			wp_reset_postdata();
		?>

	</div>
</div>



<?php

	wp_reset_query();
	endif;
?>
