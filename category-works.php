<?php get_header(); ?>
  <main class="main">
    <div class="fv _works">
      <div class="fv_title">
        <h1 class="_heading">
          Works
        </h1>
        <p class="_sub">
          制作実績
        </p>
      </div>
    </div>
    <div class="wrapper">
      <div class="work">
          <?php
            $args = array(
              'menu' => 'works_menu', // 管理画面で作成したメニュー名
              'menu_class' => 'work_container', // メニューを構成するulタグのクラス名
              'container' => false, // <ul>タグを囲んでいる<div>タグを削除
            );

            // カスタムメニューを表示
            wp_nav_menu($args);
          ?>
        <!-- <ul class="work_container">
          <a href=""><li class="_item selected">ALL</li></a>
          <a href=""><li class="_item">広告</li></a>
          <a href=""><li class="_item">医療/美容</li></a>
          <a href=""><li class="_item">建設</li></a>
          <a href=""><li class="_item">飲食</li></a>
          <a href=""><li class="_item">その他</li></a>
        </ul> -->

        <!-- ニュース項目-->
        <ul class="work_article">
          <?php 
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = Array(
                'category_name' => 'works',
                  'post_type' => 'post',   
                  'posts_per_page' =>4,   
                  'paged' => $paged
          ); ?>

          <?php $wp_query = new WP_Query( $args ); ?>

          <?php if ( $wp_query->have_posts() ) : ?>
            <?php while ( $wp_query->have_posts() ) : ?>
              <?php $wp_query->the_post();  ?>
              <a href="<?php the_permalink(); ?>">
                      <li class="work_item">
                        <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail( 'large',  array("alt" => get_the_title())); ?>
                        <?php endif; ?>
                        <div class="_container">
                          <p class="_left">
                            <!-- 記事タイトル -->
                            <span>
                              <?php
                            if(mb_strlen($post->post_title, 'UTF-8')>15){
                              $title= mb_substr($post->post_title, 0, 15, 'UTF-8');
                              echo $title.'……';
                            }else{
                              echo $post->post_title;
                            }
                            ?>
                            </span><br>
                            <!-- 記事本文 -->
                            <?php
                            if(mb_strlen($post->post_content,'UTF-8')>25){
                              $content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 25,'UTF-8'));
                              echo $content.'…';
                            }else{
                              echo str_replace('\n', '', strip_tags($post->post_content));
                            }
                            ?>
                          </p>
                          <div class="_right">
                            <?php
                              $cats = get_the_category();
                              foreach($cats as $cat){
                              if ( 6 === $cat->parent ) {
                              echo esc_html( $cat->cat_name );
                              }
                              }
                            ?>
                          </div>
                        </div>
                      </li>
                    </a> 
            <?php if(function_exists('wp_pagenavi')): ?>
      <?php wp_pagenavi(); ?>
      <?php else: ?>
      <?php endif; ?>

          <?php endwhile; ?>
        </ul>


        <?php
        if( function_exists('pagenation') ){ // 関数が定義されていたらtrueになる
            pagenation();
        }?>

        <div class="pager">
          <ul class="pagination">
            <li class="pre"><?php previous_posts_link('PREV' ); ?></li>
            <li class="active"><a href="#"><span>1</span></a></li>
            <li><a href="#"><span>2</span></a></li>
            <li><a href="#"><span>3</span></a></li>
            <li><a href="#"><span>10</span></a></li>
            <li class="next"><?php next_posts_link('NEXT' ); ?></li>
          </ul>
        </div>

        <?php wp_reset_postdata(); ?>
        <?php else: ?>
        <p>投稿はありません</p>
      </div>
    </div>
  </div>
  <?php endif; ?>
      </div>
   </div>
  </main>
  <?php get_footer();?>