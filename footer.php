<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>

</div><!-- #content -->

<?php if(is_single()):?>
<aside id="footer-widget" class="footer-widget" role="complementary">
  <div class="widget-area-in c-wiget">
    <?php dynamic_sidebar('sidebar-1'); ?>
  </div>
</aside><!-- #secondary -->
<?php endif;?>

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="site-info">
    <a href="<?php echo esc_url(__('https://wordpress.org/', 'cnt_rem')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'cnt_rem'), 'WordPress'); ?></a>
    <span class="sep"> | </span>
    <?php printf(esc_html__('Theme: %1$s by %2$s.', 'cnt_rem'), 'cnt_rem', '<a href="http://automattic.com/" rel="designer">Automattic</a>'); ?>
  </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
  $('.c-archive-list').matchHeight();
</script>
</body>
</html>
