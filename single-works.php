<?php
/*
Template Name: 制作実績
Template Post Type: post
*/
?>
<?php get_header(); ?>
  <main class="main">
    <div class="wrapper">
      <h1 class="heading">
        Works<br>
        <span>制作実績</span>
      </h1>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h2 class="title"><?php the_title(); ?></h2>
      <div class="fv">
        <div class="fv_container">
          <div class="fv_img">
            <?php if(has_post_thumbnail()): ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/works_pic2.png" alt="デスクトップ画像">
            <div class="thumbnail_pc">
              <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="thumbnail_sp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/works_pic3.png" alt="スマートフォン画像">
              <?php the_post_thumbnail('thumbnail'); ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="article">
        <div class="article_description">
          <table class="_left">
            <tr class="_item">
              <th>Client</th>
              <td><?php echo get_post_meta($post->ID, 'client', true); ?></td>
            </tr>
            <tr class="_item">
              <th>Industry Type</th>
              <td><?php echo get_post_meta($post->ID, 'industry_type', true); ?></td>
            </tr>
            <tr class="_item">
              <th>Production Scale</th>
              <td><?php echo get_post_meta($post->ID, 'product_scale', true); ?></td>
            </tr>
            <tr class="_item">
              <th>Launch Date</th>
              <td><?php echo get_post_meta($post->ID, 'launch_date', true); ?></td>
            </tr>
            <tr class="_item">
              <th>Site URL</th>
              <td><?php echo get_post_meta($post->ID, 'site_url', true); ?></td>
            </tr>
          </table>
          <div class="_right">
            <!-- プランの内容を入れてください -->
            <p class="_plan"><?php echo get_post_meta($post->ID, 'plan', true); ?></p>
            <!-- サイトの説明を入れてください -->
            <div class="_description">
              <?php echo the_content(); ?>
            </div>
          </div>
        </div>
        <div class="article_pc">
          <?php
          $imgGroup = SCF::get('pc_item');
          foreach ($imgGroup as $fields) { 
              $imgurl = wp_get_attachment_image_src($fields['pc_img'] , 'large');          
          ?>
          <div>
              <!-- 画像がない時はnoImg画像を表示 -->
              <?php if($fields['pc_img'] === "" ) {?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/noImage.jpg">
              <!-- それ以外（画像がある時）画像を表示 -->
              <?php } else { ?>
                  <img src="<?php echo $imgurl[0]; ?>" >
              <?php
              }
              ?>
          </div>
          <?php } ?>

            <!-- <img src="../img/work_detail_sample2.png" alt=""> -->
           <!-- <img src="../img/work_detail_sample3.png" alt=""> -->
           <!-- <img src="../img/work_detail_sample2.png" alt=""> -->
           <!-- <img src="../img/work_detail_sample3.png" alt=""> -->
           <!-- <img src="../img/work_detail_sample2.png" alt=""> -->
           <!-- <img src="../img/work_detail_sample3.png" alt="">  -->
        </div>
        <div class="article_sp">
          <h2 class="_heading">SPサイズ</h2>
          <div class="_container">
            <?php
            $imgGroup = SCF::get('sp_item');
            foreach ($imgGroup as $fields) { 
                $imgurl = wp_get_attachment_image_src($fields['sp_img'] , 'large');          
            ?>
            <div>
                <!-- 画像がない時はnoImg画像を表示 -->
                <?php if($fields['sp_img'] === "" ) {?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noImage.jpg">
                <!-- それ以外（画像がある時）画像を表示 -->
                <?php } else { ?>
                    <img src="<?php echo $imgurl[0]; ?>" >
                <?php
                }
                ?>
            </div>
            <?php } ?>
          </div>
        </div>
        <nav class="pagenation">
          <ul class="pagenation_container">
            
           

            <li class="_prev">
              <?php if( get_previous_post_link() ) : ?>
              <?php previous_post_link('%link', '&lt;　PREV'); ?>
              <?php else : ?>
              <a class="hidden">&lt;　PREV</a>
              <?php endif; ?>
            </li>
            <li class="_home">
              <a href="<?php echo home_url('/category/works'); ?>">WORKS INDEX</a>
            </li>
            <li class="_next">
              <?php if( get_next_post_link() ) : ?>
              <?php next_post_link('%link', 'NEXT　&gt;'); ?>
              <?php else : ?>
              <a class="hidden">NEXT　&gt;</a>
              <?php endif; ?>
            </li>

            <!-- <a href=""><li class="_prev">&lt;　PREV</li></a>
            <a href="works.html"><li class="_home">WORKS INDEX</li></a>
            <a href=""><li class="_next">NEXT　&gt;</li></a> -->
          </ul>
        </nav>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </main>
  <?php get_footer();?>
