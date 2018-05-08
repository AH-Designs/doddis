<!--   Our School - Looping through and printing out only the Children pages -->

<?php
//  Our School - Children pages
  $args = array(
      'depth' => 1,
      'include' => 15,
      'title_li' => '',
      'link_before' => '<i class="fas fa-arrow-right"></i>',
  );
  wp_list_pages($args);
  $args['child_of'] = $args['include'];
  unset($args['include']);
  wp_list_pages($args);
?>
