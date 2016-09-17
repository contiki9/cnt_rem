<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header();
?>

<div class="p-single-post c-single-post single_column">
  <div class="post-title"><?php the_title('<h1 class="entry-title">', '</h1>'); ?></div>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="post-thum-wrap">
        <?php if (has_post_thumbnail()): ?>
          <?php
          //サムネイルを持っている場合
          the_post_thumbnail(full);
        else :
          //サムネイルを持っていない場合
          ?>
          <div class="no-image"></div>
        <?php endif; ?>
      </div>
      <?php
      while (have_posts()) : the_post();

        get_template_part('template-parts/content', 'single');

        the_post_navigation();

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
          comments_template();
        endif;

      endwhile; // End of the loop.
      ?>
    </main><!-- #main -->
  </div><!-- #primary -->
</div>
<?php
//get_sidebar();
get_footer();
