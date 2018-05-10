<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div class="spacer">

</div>

<!-- <main-carousel> -->
<div id="carousel">
  <div class="main-carousel">
  <?php if( have_rows('slides') ): ?>

      <?php while( have_rows('slides') ): the_row();
          // vars
        $image = get_sub_field('slide');

      ?>
      <?php if( $image ): ?>
          <div class="carousel-cell" style="background-image: url(<?php echo $image; ?>)">
          </div>
      <?php endif; ?>
      <?php endwhile; ?>

    <?php endif; ?>
  </div>
</div>

<!-- </main-carousel> -->

<information-panels>
  <div class="row" data-equalizer="square" data-equalize-on="medium" data-equalize-by-row="true">
    <div class="columns small-12 medium-4">
      <div class="gutter-medium" data-equalizer-watch="square">
          <div class="panel panel-medium panel-orange">
            <div class="title">
              <h3>Essential Information</h3>
            </div>

            <ul>
              <li><i class="fas fa-arrow-right"></i><a href="#">Admission</a></li>
              <li><i class="fas fa-arrow-right"></i><a href="#">Ofsted Report</a></li>
              <li><i class="fas fa-arrow-right"></i><a href="#">Performance Table</a></li>
              <li><i class="fas fa-arrow-right"></i><a href="#">Term Dates</a></li>
              <li><i class="fas fa-arrow-right"></i><a href="#">Values and Ethos</a></li>
            </ul>

            <a class="panel-link" href="/our-school"><i class="fas fa-info-circle"></i>Learn more about our school</a>
          </div>
        </div>
      </div>

    <div class="columns small-12 medium-4">
      <div class="gutter-medium" data-equalizer-watch="square">

         <div class="panel panel-medium panel-blue">
          <!-- LATEST NEWS Blog Posts  -->
            <?php get_template_part( 'parts/loop', 'latest' ); ?>
          <a class="panel-link" href="/news"><i class="far fa-file-image file"></i>View all news</a>
         </div>

      </div>
    </div>


    <div class="columns small-12 medium-4">
      <div class="gutter-medium" data-equalizer-watch="square"  data-equalizer-watch="rectangle" data-equalize-by-row="true">
        <div class="panel panel-medium important-update panel-green">
          <div class="title">
            <a href="<?php the_permalink(); ?>"><h3>Calendar</h3></a>
          </div>

        </div>
      </div>
    </div>

  </div>
</information-panels>

<welcome-panel>
  <div class="row">
    <div class="columns small-12 large-8">
      <div class="gutter-medium">
      <!-- Home Page Main Content -->
      <!-- If this page has posts (content in the page)  -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h2><?php the_title(); ?></h2>

          <?php the_content(); ?>

          <?php endwhile; endif; ?>

      </div>
    </div>

    <div class="columns small-12 large-4">
      <div class="gutter-medium">

        <img class="pre-school" src="<?php echo get_template_directory_uri(); ?>/assets/images/applecastle-img.png" alt=""/>

        <div class="panel panel-large panel-red save-the-date">

          <!-- IMPORTANT UPDATES Blog Posts  -->
            <?php get_template_part( 'parts/loop', 'savedate' ); ?>
      </div>
    </div>
  </div>
</div>
</welcome-panel>

<?php include(get_template_directory().'/includes/awards-location-bar.php'); ?>

<?php get_footer(); ?>
