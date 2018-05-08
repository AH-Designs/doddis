
<!-- Category - Important Posts Loop -->
<?php
  $important_updates_args = array(
  ‘post_type’=> ‘post’,
  'posts_per_page' => 1,
  'category_name' => 'important-updates'
  );

  $the_query_important = new WP_Query( $important_updates_args ); ?>
  <?php while ($the_query_important -> have_posts()) : $the_query_important -> the_post(); ?>
<div class="title">
  <a href="<?php the_permalink(); ?>"><h3>Important Update</h3></a>
</div>
<h6><?php the_title(); ?></h6>
<p><?php the_field('story_excerpt'); ?>...</p>
<?php
  endwhile;
  wp_reset_postdata();
?>
