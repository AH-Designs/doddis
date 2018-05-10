

<!-- Drop down link -->
<div class="content-link" data-equalizer data-equalize-on="medium" data-toggle="subpage-dropdown">

  <h3>News Categories</h3><i class="fas fa-arrow-down"></i></div>

<!-- Dropdown content listed -->
<div class="dropdown-pane content-panel">
  <ul id="subpage-dropdown" class="dropdown-pane" data-dropdown data-auto-focus="true">
    <?php wp_list_categories(array(
      'depth' => 1,
      'title_li' => '',
      'hide_empty' => false
    )); ?>
  </ul>
</div>
