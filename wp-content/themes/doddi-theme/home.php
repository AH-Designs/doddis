<?php get_header(); ?>

<div class="spacer">

</div>

<header-content>
  <div class="row">
    <div class="small-12">

      <h1>News</h1>

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
    <div class="columns small-12 large-4">
      <div class="gutter-small">

        <!-- sidebar blog menu -->
        <?php get_template_part( 'parts/loop', 'sidebarblogs' ); ?>

      </div>

      <div class="panel panel-medium important-update top">
        <!-- Important Updates -->
        <?php get_template_part( 'parts/loop', 'important' ); ?>
      </div>
    </div>

    <div class="columns small-12 large-8">
      <div class="gutter-medium">


        <!-- Lists Blog Post -->
        <div class="fc-content">
  			  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  					<?php get_template_part( 'parts/loop', 'archive' ); ?>

  				<?php endwhile; ?>

  					<?php joints_page_navi(); ?>

  				<?php else : ?>

  					<?php get_template_part( 'parts/content', 'missing' ); ?>

  				<?php endif; ?>

        </div>
        <!--/ Lists Blog Post -->

        <div class="panel panel-medium important-update bottom">
          <!-- Important Updates -->
          <?php get_template_part( 'parts/loop', 'important' ); ?>
        </div>

      </div>
    </div>

  </div>
</content-section>


<?php get_footer(); ?>
