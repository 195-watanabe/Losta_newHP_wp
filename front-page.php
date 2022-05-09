  <?php get_header(); ?>
  <main class="main">
    <div class="fv">
      <video class="fv_movie" src="<?php echo get_template_directory_uri();?>/movie/mov0.mp4" autoplay muted playsinline loop>
      </video>
      <div class="fv_container">
        <h1 class="fv_heading fvtxt1">
          To be a Partner,
        </h1>
        <h1 class="fv_heading fvtxt2">
          To solve Web Problems
        </h1>
      </div>
      <div class="scrolldown_fv"><span>SCROLL</span><span></span></div>
    </div>
    <div class="wrapper">
      <div class="about">
        <div class="about_line">
          <div class="about_line-out"></div>
          <div class="about_line-in"></div>
        </div>
        <h2 class="about_heading">
          About Us
        </h2>
        <h3 class="about_subheading">
          - Lostaとは
        </h3>
        <div class="about_container">
          <div class="container_item">
            <p class="container_item-txt">
              私たちLostaはWeb制作会社として、規模・業界問わずお客様が抱えるWeb課題を解決するパートナーを目指しています。「お客様の未来が私たちの明日へ。」それがLostaが持つミッションです。ITが普及した現代においてなくてはならないWebを通じて、お客様が抱えている課題を解決し、持続的な成長へと導いていきます。
            </p>
            <div class="container_item-morebtn">
              <button class="about_morebtn">
                  <a href="<?php echo home_url('/about'); ?>"></a>
                  View More
                </button>
            </div>
          </div>
          <div class="container_item -img">
            <img src="<?php echo get_template_directory_uri();?>/img/about_pic-min.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="service">
        <div class="service_container">
          <h2 class="service_heading">
            Service
          </h2>
          <h3 class="service_subheading">
            - 事業内容
          </h3>
        </div>
        <div class="service_txt">
          Web制作を軸としながらも、お客様が抱えている課題を解決するべく、包括的なWeb戦略をご提案させていただきます。<br>
          ※ サポート内容の詳細に関しては<a href="<?php echo home_url('/service'); ?>#plan">Service Plan</a>をご確認ください。
        </div>
        <div class="service_lineup">
          <div class="service_lineup-item">web戦略立案</div>
          <div class="service_lineup-item">webデザイン</div>
          <div class="service_lineup-item">コーディング</div>
          <div class="service_lineup-item">SEO対策</div>
          <div class="service_lineup-item">MEO対策</div>
          <div class="service_lineup-item">保守・運用</div>
        </div>
        <div class="service_line"></div>
        <div class="service_triangle"></div>
        <p class="service_message">
          お客様が抱えるWeb課題をトータルでサポート
        </p>
        <div class="service_btn-container">
          <button class="service_morebtn">
              <a href="<?php echo home_url('/service'); ?>"></a>
              View More
            </button>
        </div>
      </div>
      <div class="works">
        <div class="works_container">
          <div class="works_msg">
            <h2 class="works_heading">Works</h2>
            <h3 class="works_subheading">- 制作実績</h2>
              <p class="works_txt">
                Lostaがこれまで担当してきたお客様の制作実績をご紹介します。幅広い業種のホームページ制作を担当してきた弊社が持つ制作実績をご覧ください。
              </p>
          </div>
          <div class="works_img">
            <img src="<?php echo get_template_directory_uri();?>/img/works_pic1-min.jpg" alt="works画像">
          </div>
        </div>
        <div class="works_slidercontainer">
          <div class="works_slidewrapper">
            <div class="works_slide swiper-container">
              <div class="swiper-wrapper">
                <?php
                global $post;
                $cat_slug = 'works'; // カテゴリーのスラッグ
                $cat_posts = get_posts(array(
                  'post_type' => 'post', // 投稿タイプ
                  'category_name' => $cat_slug, // カテゴリをスラッグで指定する場合
                  'posts_per_page' => 6, // 表示件数
                  'orderby' => 'date', // 基準になる表示順
                  'order' => 'DESC' // 昇順・降順
                ));
                if($cat_posts):
                  foreach($cat_posts as $post):
                    setup_postdata($post);
                ?>
                <div class="works_slider-item swiper-slide">
                  <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail( 'large',  array("alt" => get_the_title())); ?>
                  <?php endif; ?>
                  <h4 class="slideitem_heading">
                    <?php
                    if(mb_strlen($post->post_title, 'UTF-8')>23){
                      $title= mb_substr($post->post_title, 0, 23, 'UTF-8');
                      echo $title.'…';
                    }else{
                      echo $post->post_title;
                    }
                    ?>  
                  </h4>
                  <p class="slideitem_txt">
                    <?php
                    if(mb_strlen($post->post_content,'UTF-8')>23){
                      $content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 23,'UTF-8'));
                      echo $content.'…';
                    }else{
                      echo str_replace('\n', '', strip_tags($post->post_content));
                    }
                    ?>
                  </p>
                  <a href="<?php the_permalink(); ?>"></a>
                </div>
                <?php
                  endforeach;
                endif;
                // ループ後のリセット処理
                wp_reset_postdata();
                ?>
              </div>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <div class="works_btnarea">
          <button class="works_morebtn">
            <a href="<?php echo home_url('/category/works'); ?>"></a>
              View more
          </button>
        </div>
      </div>
      <div class="topics">
        <div class="topics_container">
          <div class="topics_left">
            <h2 class="topics_heading">Topics</h2>
            <h3 class="topics_subheading">- 新着情報</h2>
              <button class="topics_morebtn" type=“button” onclick="location.href='<?php echo home_url('/category/topics'); ?>'">
                View More
              </button>
          </div>
          <div class="topics_right">
            <?php
            global $post;
            $cat_slug = 'topics'; // カテゴリーのスラッグ
            $cat_posts = get_posts(array(
              'post_type' => 'post', // 投稿タイプ
              'category_name' => $cat_slug, // カテゴリをスラッグで指定する場合
              'posts_per_page' => 3, // 表示件数
              'orderby' => 'date', // 基準になる表示順
              'order' => 'DESC' // 昇順・降順
            ));
            if($cat_posts):
              foreach($cat_posts as $post):
                setup_postdata($post);
            ?>
            <a href="<?php the_permalink(); ?>">
              <div class="topics_item">
                <p class="article_date"><?php echo get_the_date(); ?></p>
                <h4 class="article_title">
                  <?php
                  if(mb_strlen($post->post_title, 'UTF-8')>25){
                    $title= mb_substr($post->post_title, 0, 25, 'UTF-8');
                    echo $title.'……';
                  }else{
                    echo $post->post_title;
                  }
                  ?> 
                </h4>
              </div>
            </a>
            <?php
              endforeach;
            endif;
            // ループ後のリセット処理
            wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
      <div class="faq">
        <h2 class="faq_heading">
          Q&A
        </h2>
        <h3 class="faq_subheading">
          - よくある質問
        </h3>
        <div class="faq_wrapper">
          <div class="faq_item">
            <div class="faq_title">
              <div class="faq_tri"></div>
              <h4 class="faq_question">制作費用はどれくらいかかりますか？</h4>
            </div>
            <div class="faq_answer">
              <p class="faq_txt">
                制作費に関しては料金プランを用意させていただいております。基本的な制作費は料金プラン以外にかかること
                はありません。<br>
                <br>
                ■ ミニマムプラン（LP 1ページ）：150,000円<br>
                ■ ベーシックプラン（HP 2~10ページ）：500,000円<br>
                ■ プロプラン（HP 10ページ~）：1,000,000円<br>
                ■ アルファ（サイト保守・運用）：100,000円/月<br>
              </p>
              <div class="faq_btnarea">
                <button class="faq_btn" type=“button” onclick="location.href='<?php echo home_url('/service'); ?>#plan'">料金プランを見る</button>
              </div>
            </div>
          </div>
          <div class="faq_item">
            <div class="faq_title">
              <div class="faq_tri"></div>
              <h4 class="faq_question">納品までの流れを教えてください。</h4>
            </div>
            <div class="faq_answer">
              <p class="faq_txt">
                弊社では、打ち合わせや作業報告を含め「完全オンライン完結型」を採用しております。<br>
                お問い合わせ内容を確認した後、打ち合わせを実施し、詳細な流れに関してお伝えさせていただきます。<br>
              </p>
              <div class="faq_btnarea">
                <button class="faq_btn" type=“button” onclick="location.href='<?php echo home_url('/service'); ?>#process'">納品までの流れを見る</button>
              </div>
            </div>
          </div>
          <div class="faq_item">
            <div class="faq_title">
              <div class="faq_tri"></div>
              <h4 class="faq_question">Webに関しては無知なのですが、大丈夫ですか？</h4>
            </div>
            <div class="faq_answer">
              <p class="faq_txt">
                弊社にご依頼されるお客様の80%以上がWebに関して知識をお持ちでない方です。<br>
                打ち合わせの際は、分かりやすい言葉で説明させていただきますので、ご安心ください。<br>
              </p>
            </div>
          </div>
          <div class="faq_item">
            <div class="faq_title">
              <div class="faq_tri"></div>
              <h4 class="faq_question">納品後のアフターサポートはありますか？</h4>
            </div>
            <div class="faq_answer">
              <p class="faq_txt">
                月額プランを契約していただくことで、サーバーの保守や日々のサイト更新などの運用業務を請け負わせていただきます。<br>
                ホームページの保守・運用に不安をいただいているお客様はこちらも検討していただければと思います。<br>
              </p>
              <div class="faq_btnarea">
                <button class="faq_btn" type=“button” onclick="location.href='<?php echo home_url('/service'); ?>#support'">アフターサポートを見る</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer();?>