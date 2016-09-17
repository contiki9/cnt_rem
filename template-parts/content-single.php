<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<div class="c-single-content">
  <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
    <div class="inner">
      <div class="entry-content inner">
        <?php
        if ('post' === get_post_type()) :
          ?>
          <div class="entry-meta">
            <?php cnt_rem_posted_on(); ?>
          </div><!-- .entry-meta -->
        <?php endif;
        ?>
        <?php
        the_content();
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'cnt_rem'),
            'after' => '</div>',
        ));
        ?>
      </div><!-- .entry-content -->

        
      <footer class="entry-footer">

        <?php cnt_rem_entry_footer(); ?>

      </footer><!-- .entry-footer -->
    </div>
  </article><!-- #post-## -->
</div>
