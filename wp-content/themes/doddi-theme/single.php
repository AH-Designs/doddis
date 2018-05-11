<?php get_header(); ?>

<div class="spacer">

</div>

<header-content>
  <div class="row">
    <div class="small-12">

      <h1>
        <?php
            foreach((get_the_category()) as $category) {
                echo $category->cat_name . '</br> ';
            }
        ?>
      </h1>

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

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    	<?php get_template_part( 'parts/loop', 'single' ); ?>

		    <?php endwhile; else : ?>

		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>


      <div class="panel panel-medium important-update bottom">

          <!-- Important Updates -->
          <?php get_template_part( 'parts/loop', 'important' ); ?>

      </div>

    </div>
  </div>
</div>
</content-section>



<?php get_footer(); ?>
