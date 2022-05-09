<?php
/*
Template Name: Topics
Template Post Type: post
*/
?>
<?php get_header(); ?>
  <main class="main">
    <div class="wrapper">
      <h1 class="heading">
        Topics<br>
        <span>最新情報</span>
      </h1>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="article">
        <h2 class="article_heading">
          <?php the_title(); ?>
        </h2>
        <div class="article_info">
          <p class="_date"><?php echo get_the_date(); ?></p>
          <?php if(has_category() ): ?>
          <p class="_tag"><?php echo get_the_category_list( ' ' ); ?></p>
          <?php endif; ?>
        </div>
        
        <div class="article_container">
          <div class="article_img">
            <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('full'); ?>
            <?php endif; ?>
          </div>
          <div class="article_txt"><?php the_content(); ?></div>
        </div>
        
        <nav class="pagenation">
          <ul class="pagenation_container">
            <li class="_prev">
              <?php if( get_previous_post_link() ) : ?>
                <?php previous_post_link('%link', '&lt;　PREV', false, '7, 8, 9, 10, 11'); ?>
                <?php else : ?>
                  <a class="hidden">&lt;　PREV</a>
                  <?php endif; ?>
                </li>
                <li class="_home">
                  <a href="<?php echo home_url('/category/topics'); ?>">TOPICS INDEX</a>
                </li>
                <li class="_next">
                  <?php if( get_next_post_link() ) : ?>
                    <?php next_post_link('%link', 'NEXT　&gt;', false, '7, 8, 9, 10, 11'); ?>
                    <?php else : ?>
                      <a class="hidden">NEXT　&gt;</a>
                      <?php endif; ?>
                    </li>
                  </ul>
        </nav>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </main>
  <?php get_footer();?>
