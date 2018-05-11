<?php
/*
Template Name: Contact Page
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

    <div class="columns small-12 large-4">
      <div class="gutter-medium">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <!-- Includes the flexable content from wordpress custome fields in the admin area pages, on the page that the
          templates being used on -->
          <?php include (get_template_directory() .'/flex-content/flexible-content.php'); ?>

          <div class="map map-mobile">
            <iframe class="mobile-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2528.767475159376!2d-3.625345148465869!3d50.668577679405566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486da8f73b25078f%3A0xcce218a2ff9eb9fb!2sDoddiscombsleigh+Primary+School!5e0!3m2!1sen!2suk!4v1526035166074" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>


        <?php endwhile; endif; ?>

        <div class="panel panel-medium important-update bottom">

        <!-- Important Updates -->
        <?php get_template_part( 'parts/loop', 'important' ); ?>

        </div>
      </div>
    </div>
    <div class="columns small-12 large-4">
      <div class="gutter-medium">
        <div class="map map-large">
          <iframe class="large-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2528.7672920268824!2d-3.625345148663114!3d50.66858107940366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486da8f73b25078f%3A0xcce218a2ff9eb9fb!2sDoddiscombsleigh+Primary+School!5e0!3m2!1sen!2suk!4v1525880267409" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    </div>
  </div>
</content-section>



<?php get_footer(); ?>
