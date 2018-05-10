<!-- Parts - Sidebar -->

<?php

			if ($post->post_parent) {
			$ancestors=get_post_ancestors($post->ID);
			$root=count($ancestors)-1;
			$parent = $ancestors[$root];
			} else {
			$parent = $post->ID;
			}

			$children = wp_list_pages("title_li=&child_of=". $parent ."&echo=0");

			if ($children) { ?>

			<!-- Drop down link -->
      <div class="content-link" data-equalizer data-equalize-on="medium" data-toggle="subpage-dropdown"><h3><?php echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent ); ?></h3><i class="fas fa-arrow-down"></i></div>

			<!-- Dropdown content listed -->
      <div class="dropdown-pane content-panel">
        <ul id="subpage-dropdown" class="dropdown-pane" data-dropdown data-auto-focus="true">
          <?php echo $children; ?>
        </ul>
      </div>


<?php } ?>
