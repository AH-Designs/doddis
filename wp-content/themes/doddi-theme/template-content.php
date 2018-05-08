<?php
/*
Template Name: Content Page
*/
?>


<?php get_header(); ?>

<div class="spacer">

</div>

<header-content>
  <div class="row">
    <div class="small-12">

      <h1><?php
          echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
      ?></h1>

      <h2>
        <?php
         empty( $post->post_parent )  ?  : the_title();
        ?>
      </h2>

    </div>
  </div>
</header-content>


<content-section>
  <div class="row">
    <!-- Sidebar starts -->
    <div class="columns small-12 large-4">
      <div class="gutter-small">
        <!-- Sub pages (child pages) listed to the parent page im on -->
        <?php get_template_part( 'parts/loop', 'sidebar' ); ?>

      </div>

      <div class="panel panel-medium important-update top">
        <!-- Important Updates -->
        <?php get_template_part( 'parts/loop', 'important' ); ?>
      </div>

    </div>
    <!-- Sidebar Ends -->

    <div class="columns small-12 large-8">
      <div class="gutter-medium">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <!-- Includes the flexable content from wordpress admission on the page that the
          templates being used on -->
          <?php include (get_template_directory() .'/includes/flexible-content.php'); ?>


        <?php endwhile; endif; ?>

        <div class="panel panel-medium important-update bottom">

        <!-- Important Updates -->
        <?php get_template_part( 'parts/loop', 'important' ); ?>

        </div>
      </div>

    </div>
  </div>
</content-section>



<?php get_footer(); ?>
