<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
if (!is_active_sidebar('sidebar-1')) {
  return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
  <div class="widget-area-in c-wiget">
    <?php dynamic_sidebar('sidebar-1'); ?>
  </div>
</aside><!-- #secondary -->
