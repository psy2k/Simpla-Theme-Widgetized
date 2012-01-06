<div id="sidebar">
<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
  <li id="pages">
    <h2>Pages</h2>
    <ul>
      <li><a href="<?php echo get_settings('home'); ?>/">Home</a></li>
      <?php wp_list_pages('title_li='); ?>
    </ul>
  </li>
  <li id="categories">
    <h2>Categories</h2>
    <ul>
    <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
    </ul>
  </li>
  <li id="links">
    <ul>
    <?php get_links_list(); ?>
    </ul>
  </li>
<?php endif; ?>
</ul>
</div>