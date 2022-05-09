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
        <div class="work_content _content">
          <!-- 全ての施工事例取得 -->
          <div class="_menu _active mr">ALL</div>
          <div class="tabcontent">
            <ul class="work_article">
            <?php
              $newslist = get_posts( array(
                'category_name' => 'works', //特定のカテゴリースラッグを指定
                'posts_per_page' => 10000 //取得記事件数
              ));
                foreach( $newslist as $post ):
                setup_postdata( $post );
            ?>
            <li class="work_item">
              <a href="<?php the_permalink(); ?>">
              <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail( 'large',  array("alt" => get_the_title())); ?>
              <?php endif; ?>
              <p class="article_title">
                <!-- 記事タイトル -->
                <?php
                  if(mb_strlen($post->post_title, 'UTF-8')>38){
                    $title= mb_substr($post->post_title, 0, 38, 'UTF-8');
                    echo $title.'…';
                  }else{
                    echo $post->post_title;
                  }
                ?>
              </p>
              <div class="_container">
                <p class="_left">
                  <!-- 記事本文 -->
                  <?php
                  if(mb_strlen($post->post_content,'UTF-8')>36){
                    $content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 36,'UTF-8'));
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
              </a>
            </li>
            <?php
              endforeach;
              wp_reset_postdata();
            ?>
            </ul>
          </div>
  
          <!-- 広告の施工事例取得 -->
          <div class="_menu mr">広告</div>
          <div class="tabcontent">
            <ul class="work_article">
            
            <?php
              $newslist = get_posts( array(
                'category_name' => 'ad', //特定のカテゴリースラッグを指定
                'posts_per_page' => 10000 //取得記事件数
              ));
                foreach( $newslist as $post ):
                setup_postdata( $post );
            ?>
            <li class="work_item">
              <a href="<?php the_permalink(); ?>">
              <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail( 'large',  array("alt" => get_the_title())); ?>
              <?php endif; ?>
              <p class="article_title">
                <!-- 記事タイトル -->
                <?php
                  if(mb_strlen($post->post_title, 'UTF-8')>38){
                    $title= mb_substr($post->post_title, 0, 38, 'UTF-8');
                    echo $title.'…';
                  }else{
                    echo $post->post_title;
                  }
                ?>
              </p>
              <div class="_container">
                <p class="_left">
                  <!-- 記事本文 -->
                  <?php
                  if(mb_strlen($post->post_content,'UTF-8')>36){
                    $content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 36,'UTF-8'));
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
              </a>
            </li>
            <?php
              endforeach;
              wp_reset_postdata();
            ?>
            </ul>
          </div>
  
          <!-- 医療/美容の施工事例取得 -->
          <div class="_menu mr">医療/美容</div>
          <div class="tabcontent">
            <ul class="work_article">
            <?php
              $newslist = get_posts( array(
                'category_name' => 'medical-beauty', //特定のカテゴリースラッグを指定
                'posts_per_page' => 10000 //取得記事件数
              ));
                foreach( $newslist as $post ):
                setup_postdata( $post );
            ?>
            <li class="work_item">
              <a href="<?php the_permalink(); ?>">
              <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail( 'large',  array("alt" => get_the_title())); ?>
              <?php endif; ?>
              <p class="article_title">
                <!-- 記事タイトル -->
                <?php
                  if(mb_strlen($post->post_title, 'UTF-8')>38){
                    $title= mb_substr($post->post_title, 0, 38, 'UTF-8');
                    echo $title.'…';
                  }else{
                    echo $post->post_title;
                  }
                ?>
              </p>
              <div class="_container">
                <p class="_left">
                  <!-- 記事本文 -->
                  <?php
                  if(mb_strlen($post->post_content,'UTF-8')>36){
                    $content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 36,'UTF-8'));
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
              </a>
            </li>
            <?php
              endforeach;
              wp_reset_postdata();
            ?>
            </ul>
          </div>
  
          <!-- 建築の施工事例取得 -->
          <div class="_menu mr">建築</div>
          <div class="tabcontent">
            <ul class="work_article">
            <?php
              $newslist = get_posts( array(
                'category_name' => 'construction', //特定のカテゴリースラッグを指定
                'posts_per_page' => 10000 //取得記事件数
              ));
                foreach( $newslist as $post ):
                setup_postdata( $post );
            ?>
            <li class="work_item">
              <a href="<?php the_permalink(); ?>">
              <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail( 'large',  array("alt" => get_the_title())); ?>
              <?php endif; ?>
              <p class="article_title">
                <!-- 記事タイトル -->
                <?php
                  if(mb_strlen($post->post_title, 'UTF-8')>38){
                    $title= mb_substr($post->post_title, 0, 38, 'UTF-8');
                    echo $title.'…';
                  }else{
                    echo $post->post_title;
                  }
                ?>
              </p>
              <div class="_container">
                <p class="_left">
                  <!-- 記事本文 -->
                  <?php
                  if(mb_strlen($post->post_content,'UTF-8')>36){
                    $content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 36,'UTF-8'));
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
              </a>
            </li>
            </ul>
            <?php
              endforeach;
              wp_reset_postdata();
            ?>
          </div>
  
          <!-- 飲食の施工事例取得 -->
          <div class="_menu mr">飲食</div>
          <div class="tabcontent">
            <ul class="work_article">
            <?php
              $newslist = get_posts( array(
                'category_name' => 'restaurant', //特定のカテゴリースラッグを指定
                'posts_per_page' => 10000 //取得記事件数
              ));
                foreach( $newslist as $post ):
                setup_postdata( $post );
            ?>
            <li class="work_item">
              <a href="<?php the_permalink(); ?>">
              <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail( 'large',  array("alt" => get_the_title())); ?>
              <?php endif; ?>
              <p class="article_title">
                <!-- 記事タイトル -->
                <?php
                  if(mb_strlen($post->post_title, 'UTF-8')>38){
                    $title= mb_substr($post->post_title, 0, 38, 'UTF-8');
                    echo $title.'…';
                  }else{
                    echo $post->post_title;
                  }
                ?>
              </p>
              <div class="_container">
                <p class="_left">
                  <!-- 記事本文 -->
                  <?php
                  if(mb_strlen($post->post_content,'UTF-8')>36){
                    $content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 36,'UTF-8'));
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
              </a>
            </li>
            <?php
              endforeach;
              wp_reset_postdata();
            ?>
            </ul>
          </div>
  
          <!-- 全ての施工事例取得 -->
          <div class="_menu">その他</div>
          <div class="tabcontent ">
            <ul class="work_article _other" >
            <?php
              $newslist = get_posts( array(
                'category_name' => 'other', //特定のカテゴリースラッグを指定
                'posts_per_page' => 10000 //取得記事件数
              ));
                foreach( $newslist as $post ):
                setup_postdata( $post );
            ?>
            <li class="work_item">
              <a href="<?php the_permalink(); ?>">
              <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail( 'large',  array("alt" => get_the_title())); ?>
              <?php endif; ?>
              <p class="article_title">
                <!-- 記事タイトル -->
                <?php
                  if(mb_strlen($post->post_title, 'UTF-8')>38){
                    $title= mb_substr($post->post_title, 0, 38, 'UTF-8');
                    echo $title.'…';
                  }else{
                    echo $post->post_title;
                  }
                ?>
              </p>
              <div class="_container">
                <p class="_left">
                  <!-- 記事本文 -->
                  <?php
                  if(mb_strlen($post->post_content,'UTF-8')>36){
                    $content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 36,'UTF-8'));
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
  </main>
  <?php get_footer();?>