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
    <div class="columns small-12 medium-6 large-4">
      <div class="gutter-medium" data-equalizer-watch="square">
        <div class="panel panel-medium">
          <div class="title">
            <h3>Essential Information</h3>
          </div>

          <ul>
            <!-- Our School - Children pages -->
            <?php get_template_part( 'parts/loop', 'ourschool-children' ); ?>
          </ul>

          <a class="panel-link" href="/our-school"><i class="fas fa-info-circle"></i>Learn more about our school</a>
        </div>
      </div>
    </div>

    <div class="columns small-12 medium-6 large-4">
      <div class="gutter-medium" data-equalizer-watch="square">
        <div class="panel panel-medium">
          <!-- LATEST NEWS Blog Posts  -->
            <?php get_template_part( 'parts/loop', 'latest' ); ?>
          <a class="panel-link" href="/news"><i class="far fa-file-image file"></i>View all news</a>
        </div>
      </div>
    </div>


    <div class="columns small-12 medium-6 large-4">
      <div class="gutter-medium" data-equalizer-watch="square"  data-equalizer-watch="rectangle" data-equalize-by-row="true">
        <div class="panel panel-medium important-update">
          <!-- IMPORTANT UPDATES Blog Posts  -->
            <?php get_template_part( 'parts/loop', 'important' ); ?>

        </div>
      </div>
    </div>

    <div class="columns small-12 medium-6 large-12">
      <div class="gutter-medium" data-equalizer-watch="square">
      <div class="row" data-equalizer="rectangle" data-equalize-on="medium">
        <div class="columns small-12 large-4">
          <div class="gutter-small" data-equalizer-watch="rectangle">
            <div class="panel panel-small">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/applecastle-img.png" alt="">
            </div>
          </div>
        </div>
        <div class="columns small-12 large-4">
          <div class="gutter-small"  data-equalizer-watch="rectangle">
            <div class="panel panel-small blog-post">
              <!-- Class One Latest Blog Posts Loop  -->
              <?php get_template_part( 'parts/loop', 'blogclass1' ); ?>
            </div>
          </div>
        </div>
        <div class="columns small-12 large-4">
          <div class="gutter-small no-gutter"  data-equalizer-watch="rectangle">
            <div class="panel panel-small blog-post">
              <!-- Class Two Latest Blog Posts Loop  -->
              <?php get_template_part( 'parts/loop', 'blogclass2' ); ?>
            </div>
          </div>
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
        <div class="panel panel-large panel-red fb-post">
          <h5>Latest from Facebook</h5>
          <div class="content">
            <p>A yellow Weather Warning is in place across Devon and Cornwall for ice from 7pm tonight, through until 9am tomorrow morning. Having spoken to Devon Highways this evening, the roads in and around Doddi will be particularly cold and icy, making driving conditions dangerous.</p>
            <p>Therefore, to ensure the safety of staff, pupils, and parents, school will be open tomorrow from 12:30pm to begin an afternoon session at 12:45pm. Please can I ask that your children have had lunch before they come to school, as we will not be able to provide this tomorrow.</p>
            <p>Sorry for any inconvenience caused, but thank you for your co-operation.</p>
            <p>Please take care travelling tomorrow.</p>
            <p>Please take care travelling tomorrow.- <span class="post-date">Posted 18hrs ago</span></p>
          </div>
          <div class="fb-link">
            <p><i class="fab fa-facebook-f"></i>Follow us on Facebook</p>
          </div>
      </div>
    </div>
  </div>
</div>
</welcome-panel>

<?php include(get_template_directory().'/includes/awards-location-bar.php'); ?>

<?php get_footer(); ?>