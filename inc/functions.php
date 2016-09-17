<?php

//Function of the eye-catching
function cnt_thumbnail($height, $width, $crop) {
  ;
  ?>
  <div class="post-thum"><a href="<?php the_permalink(); ?>">
      <?php if (has_post_thumbnail()): ?>
        <?php
        //If you have a thumbnail
        the_post_thumbnail(array($height, $width, $crop));
      else :
        //If you do not have a thumbnail
        ?>
        <div class="no-image"></div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/noimage.png" />
      <?php endif; ?>
    </a>
  </div>
  <?php
}

//When to use an excerpt of the loop
function cnt_post_excerpt($text_num) {
  ;
  ?>
  <?php echo mb_substr(get_the_excerpt(), 0, $text_num); ?>
  <div class="more-link"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', '' ) </a></div>
  <?php
}


//カスタムヘッダー
////////////////////////////////////////////////////////////
function cnt_customHeader() {
  if (get_header_image()) :
    ?>
    <div class="custom_header" style="background-image: url('<?php header_image(); ?>');  height: <?php echo esc_attr(get_custom_header()->height); ?>px">
      <div class="bg-alpha"></div>
    </div>
    <?php
  endif;
}

// Breadcrumb
////////////////////////////////////////////////////////////
function cnt_breadcrumb() {
  echo '<ul id="crumbs">';
  if (!is_home()) {
    echo '<li><a href="';
    echo home_url() ;
    echo '">';
    echo 'Home';
    echo "</a></li>";
    if (is_category() || is_single()) {
      echo '<li>';
      the_category(' </li><li> ');
      if (is_single()) {
        echo "</li><li>";
        the_title();
        echo '</li>';
      }
    } elseif (is_page()) {
      echo '<li>';
      echo the_title();
      echo '</li>';
    }
  } elseif (is_tag()) {
    single_tag_title();
  } elseif (is_day()) {
    echo"<li>Archive for ";
    the_time('F jS, Y');
    echo'</li>';
  } elseif (is_month()) {
    echo"<li>Archive for ";
    the_time('F, Y');
    echo'</li>';
  } elseif (is_year()) {
    echo"<li>Archive for ";
    the_time('Y');
    echo'</li>';
  } elseif (is_author()) {
    echo"<li>Author Archive";
    echo'</li>';
  } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
    echo "<li>Blog Archives";
    echo'</li>';
  } elseif (is_search()) {
    echo"<li>Search Results";
    echo'</li>';
  }
  echo '</ul>';
}
