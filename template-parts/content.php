<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('c-archive-list'); ?>>
  <div class="post-thum-wrap"><?php cnt_thumbnail(300, 300, true); ?></div>
  <div class="inner">
    <header class="entry-header">
      <div class="post-meta-wrap">
        <?php
        if (is_single()) {
          the_title('<h1 class="entry-title">', '</h1>');
        } else {
          echo '<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">';
          echo mb_strimwidth(get_the_title(),0,28,'...','UTF-8');
          echo '</a></h2>';
        }
        ?>
      </div>
    </header><!-- .entry-header -->

    <div class="entry-content inner">
      <?php
      cnt_post_excerpt(150);

      wp_link_pages(array(
          'before' => '<div class="page-links">' . esc_html__('Pages:', 'cnt_rem'),
          'after' => '</div>',
      ));
      ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">

      <?php cnt_rem_entry_footer(); ?>
      <?php
      if ('post' === get_post_type()) :
        ?>
        <div class="entry-meta">
          <?php cnt_rem_posted_on(); ?>
        </div><!-- .entry-meta -->
      <?php endif;
      ?>
    </footer><!-- .entry-footer -->
  </div>
</article><!-- #post-## -->
