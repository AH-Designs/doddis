<?php get_header(); ?>


<div class="spacer">

</div>

<header-content>
  <div class="row">
    <div class="small-12">

	  	<h1>Search Results</h1>

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

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>

				<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

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
