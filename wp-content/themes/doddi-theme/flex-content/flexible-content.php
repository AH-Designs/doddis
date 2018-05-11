	<?php

			// check if the flexible content field has rows of data
			if( have_rows('page_content') ):

			     // loop through the rows of data
			    while ( have_rows('page_content') ) : the_row(); ?>

				<?php if( get_row_layout() == 'fc-text_area' ) { include (get_template_directory() .'/flex-content/content-text.php'); } ?>
				<?php if( get_row_layout() == 'fc-documents' ) { include (get_template_directory() .'/flex-content/content-docs.php'); } ?>
				<?php if( get_row_layout() == 'fc-single_photo' ) { include (get_template_directory() .'/flex-content/content-photo.php'); } ?>
				<?php if( get_row_layout() == 'fc-photo_gallery' ) { include (get_template_directory() .'/flex-content/content-gallery.php'); } ?>
				<?php if( get_row_layout() == 'fc-map' ) { include (get_template_directory() .'/flex-content/content-map.php'); } ?>
				<?php if( get_row_layout() == 'fc-video' ) { include (get_template_directory() .'/flex-content/content-video.php'); } ?>
				<?php if( get_row_layout() == 'fc-table' ) { include (get_template_directory() .'/flex-content/content-table.php'); } ?>
				<?php if( get_row_layout() == 'fc-faqs' ) { include (get_template_directory() .'/flex-content/content-faqs.php'); } ?>
				<?php if( get_row_layout() == 'fc-links' ) { include (get_template_directory() .'/flex-content/content-links.php'); } ?>
				<?php if( get_row_layout() == 'fc-calendar' ) { include (get_template_directory() .'/flex-content/content-calendar.php'); } ?>
				<?php if( get_row_layout() == 'fc-slideshow' ) { include (get_template_directory() .'/flex-content/content-slideshow.php'); } ?>
				<?php if( get_row_layout() == 'fc-blog' ) { include (get_template_directory() .'/flex-content/content-pageblog.php'); } ?>
				<?php if( get_row_layout() == 'fc-list' ) { include (get_template_directory() .'/flex-content/content-lists.php'); } ?>
				<?php if( get_row_layout() == 'fc-profiles' ) {
					if(get_sub_field('display_as_grid')) { include (get_template_directory() .'/flex-content/content-profiles-grid.php'); }
					else { include (get_template_directory() .'/flex-content/content-profiles.php'); }
				} ?>

			    <?php endwhile;

			endif;
		?>
