<!-- Loops for the images in the sidebar on centent pages -->

<div class="gutter-small hide-for-medium-only hide-for-small-only">

  <?php if( have_rows('sidebar_images') ): ?>

  <?php while( have_rows('sidebar_images') ): the_row();

  $image = wp_get_attachment_image_src(get_sub_field('image'),'large')[0];?>

    <div class="side-bar-image" style="background-image: url(<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>)">
    </div>

  <?php endwhile; ?>

  <?php endif; ?>

</div>
