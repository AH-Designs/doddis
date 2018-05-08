<!-- Category - *LATEST* Class Twoå  Blog Posts Loop  -->
<?php
  $class_two_args = array(
  ‘post_type’=> ‘post’,
  'posts_per_page' => 1,
  'category_name' => 'class-2'
  );

  $c2_the_query = new WP_Query( $class_two_args ); ?>
  <?php while ($c2_the_query -> have_posts()) : $c2_the_query -> the_post(); ?>

<div class="blog-img">
  <?php
  $blogImage = wp_get_attachment_image_src(get_field('featured_image'),'thumbnail');
  ?>
  <img src="<?php echo $blogImage[0];?>" alt="">
</div>

<div class="content">
  <p>Latest Class 2 Post</p>
  <h6><?php the_title(); ?></h6>
  <a href="<?php the_permalink(); ?>">Read Story<i class="fas fa-arrow-right"></i></a>
</div>
<?php
  endwhile;
  wp_reset_postdata();
 ?>
