<?php get_header(); ?>
  <main class="main">
    <div class="fv">
      <div class="fv_title">
        <h1 class="_heading">
          Topics
        </h1>
        <p class="_sub">
          新着情報
        </p>
      </div>
    </div>
    <div class="wrapper">
      <div class="topics">
        <div class="topics_content _content">
          <!-- 全てのTopics取得 -->
          <div class="_menu _active mr">ALL</div>
          <div class="tabcontent">
            <ul class="topics_article">
            <?php
              $newslist = get_posts( array(
                'category_name' => 'topics', //特定のカテゴリースラッグを指定
                'posts_per_page' => 10000 //取得記事件数
              ));
                foreach( $newslist as $post ):
                setup_postdata( $post );
            ?>
            <li class="topics_item">
              <a href="<?php the_permalink(); ?>">
              <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail( 'large',  array("alt" => get_the_title())); ?>
              <?php endif; ?>
              <p>
                <!-- 記事タイトル -->
                  <?php
                if(mb_strlen($post->post_title, 'UTF-8')>21){
                  $title= mb_substr($post->post_title, 0, 21, 'UTF-8');
                  echo $title.'…';
                }else{
                  echo $post->post_title;
                }
                ?>
              </p>
              <div class="_container">
                <div class="_tag">
                  <?php
                    $cats = get_the_category();
                    foreach($cats as $cat){
                    if ( 5 === $cat->parent ) {
                    echo esc_html( $cat->cat_name );
                    }
                    }
                  ?>
                </div>
                <div class="_date">
                  <?php the_time( get_option( 'date_format' ) ); ?>
                </div>
              </div>
              </a>
            </li>
            <?php
              endforeach;
              wp_reset_postdata();
            ?>
            </ul>
          </div>
  
          <div class="_menu mr">NEWS</div>
          <div class="tabcontent">
            <ul class="topics_article">
            
            <?php
              $newslist = get_posts( array(
                'category_name' => 'news', //特定のカテゴリースラッグを指定
                'posts_per_page' => 10000 //取得記事件数
              ));
                foreach( $newslist as $post ):
                setup_postdata( $post );
            ?>
            <li class="topics_item">
              <a href="<?php the_permalink(); ?>">
              <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail( 'large',  array("alt" => get_the_title())); ?>
              <?php endif; ?>
              <p>
                <!-- 記事タイトル -->
                  <?php
                if(mb_strlen($post->post_title, 'UTF-8')>21){
                  $title= mb_substr($post->post_title, 0, 21, 'UTF-8');
                  echo $title.'…';
                }else{
                  echo $post->post_title;
                }
                ?>
              </p>
              <div class="_container">
                <div class="_tag">
                  <?php
                    $cats = get_the_category();
                    foreach($cats as $cat){
                    if ( 5 === $cat->parent ) {
                    echo esc_html( $cat->cat_name );
                    }
                    }
                  ?>
                </div>
                <div class="_date">
                  <?php the_time( get_option( 'date_format' ) ); ?>
                </div>
              </div>
              </a>
            </li>
            <?php
              endforeach;
              wp_reset_postdata();
            ?>
            </ul>
          </div>
  
          <div class="_menu mr">PRESS</div>
          <div class="tabcontent">
            <ul class="topics_article">
            <?php
              $newslist = get_posts( array(
                'category_name' => 'press', //特定のカテゴリースラッグを指定
                'posts_per_page' => 10000 //取得記事件数
              ));
                foreach( $newslist as $post ):
                setup_postdata( $post );
            ?>
            <li class="topics_item">
              <a href="<?php the_permalink(); ?>">
              <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail( 'large',  array("alt" => get_the_title())); ?>
              <?php endif; ?>
              <p>
                <!-- 記事タイトル -->
                  <?php
                if(mb_strlen($post->post_title, 'UTF-8')>21){
                  $title= mb_substr($post->post_title, 0, 21, 'UTF-8');
                  echo $title.'…';
                }else{
                  echo $post->post_title;
                }
                ?>
              </p>
              <div class="_container">
                <div class="_tag">
                  <?php
                    $cats = get_the_category();
                    foreach($cats as $cat){
                    if ( 5 === $cat->parent ) {
                    echo esc_html( $cat->cat_name );
                    }
                    }
                  ?>
                </div>
                <div class="_date">
                  <?php the_time( get_option( 'date_format' ) ); ?>
                </div>
              </div>
              </a>
            </li>
            <?php
              endforeach;
              wp_reset_postdata();
            ?>
            </ul>
          </div>
  
          <div class="_menu mr">MEDIA</div>
          <div class="tabcontent">
            <ul class="topics_article">
            <?php
              $newslist = get_posts( array(
                'category_name' => 'media', //特定のカテゴリースラッグを指定
                'posts_per_page' => 10000 //取得記事件数
              ));
                foreach( $newslist as $post ):
                setup_postdata( $post );
            ?>
              <li class="topics_item">
                <a href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail( 'large',  array("alt" => get_the_title())); ?>
                <?php endif; ?>
                <p>
                  <!-- 記事タイトル -->
                    <?php
                  if(mb_strlen($post->post_title, 'UTF-8')>21){
                    $title= mb_substr($post->post_title, 0, 21, 'UTF-8');
                    echo $title.'…';
                  }else{
                    echo $post->post_title;
                  }
                  ?>
                </p>
                <div class="_container">
                  <div class="_tag">
                    <?php
                      $cats = get_the_category();
                      foreach($cats as $cat){
                      if ( 5 === $cat->parent ) {
                      echo esc_html( $cat->cat_name );
                      }
                      }
                    ?>
                  </div>
                  <div class="_date">
                    <?php the_time( get_option( 'date_format' ) ); ?>
                  </div>
                </div>
                </a>
              </li>
              <?php
              endforeach;
              wp_reset_postdata();
              ?>
            </ul>
          </div>
  
          <div class="_menu">EVENT</div>
          <div class="tabcontent">
            <ul class="topics_article">
            <?php
              $newslist = get_posts( array(
                'category_name' => 'event', //特定のカテゴリースラッグを指定
                'posts_per_page' => 10000 //取得記事件数
              ));
                foreach( $newslist as $post ):
                setup_postdata( $post );
            ?>
            <li class="topics_item">
              <a href="<?php the_permalink(); ?>">
              <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail( 'large',  array("alt" => get_the_title())); ?>
              <?php endif; ?>
              <p>
                <!-- 記事タイトル -->
                  <?php
                if(mb_strlen($post->post_title, 'UTF-8')>21){
                  $title= mb_substr($post->post_title, 0, 21, 'UTF-8');
                  echo $title.'…';
                }else{
                  echo $post->post_title;
                }
                ?>
              </p>
              <div class="_container">
                <div class="_tag">
                  <?php
                    $cats = get_the_category();
                    foreach($cats as $cat){
                    if ( 5 === $cat->parent ) {
                    echo esc_html( $cat->cat_name );
                    }
                    }
                  ?>
                </div>
                <div class="_date">
                  <?php the_time( get_option( 'date_format' ) ); ?>
                </div>
              </div>
              </a>
            </li>
            <?php
              endforeach;
              wp_reset_postdata();
            ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer();?>