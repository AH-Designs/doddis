
<!-- Category - Latest Posts Loop -->

<?php
  $wp_args = array(
  ‘post_type’=> ‘post’,
  'posts_per_page' => 1,
  'category_name' => 'latest-news'

);

$the_query = new WP_Query( $wp_args ); ?>

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<div class="title">
  <h3>Latest School News</h3>
</div>
<div class="post">
  <a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?> — <?php the_date('d-m-Y', '<span>', '</span>'); ?></h6></a>
  <p><?php the_field('story_excerpt'); ?>...</p><a href="<?php the_permalink(); ?>">CONTINUE READING<i class="fas fa-arrow-right"></i></a>

</div>
<?php
  endwhile;
  wp_reset_postdata();
?>
