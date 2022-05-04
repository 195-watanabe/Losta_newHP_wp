<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <!-- 株式会社Losta｜Web課題を解決するパートナー -->
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <!-- 私たちLostaはWeb制作会社として、規模・業界問わずお客様が抱えるWeb課題を解決するパートナーを目指しています。「お客様の未来が私たちの明日へ。」それがLostaが持つミッションです。Webを通じて、お客様が抱えている課題を解決し、持続的な成長へと導いていきます。 -->
  <meta property="og:url" content="https://">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Losta Inc.">
  <meta property="og:description" content="私たちLostaはWeb制作会社として、規模・業界問わずお客様が抱えるWeb課題を解決するパートナーを目指しています。「お客様の未来が私たちの明日へ。」それがLostaが持つミッションです。Webを通じて、お客様が抱えている課題を解決し、持続的な成長へと導いていきます。">
  <meta property="og:site_name" content="株式会社Losta｜Web課題を解決するパートナー">
  <meta property="og:image" content="img/og-pic.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@losta_youhei">
  <link rel="icon" type="image/x-icon" sizes="32×32" href="<?php echo get_template_directory_uri();?>/img/icon.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/img/logo_icon_b.png">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css"></link>
  <?php if ( is_front_page()): ?>
    <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri();?>/css/page/home/style.css"></link>
  <?php endif; ?>
  <?php if ( is_page('about') ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page/about/style.css"></link>
  <?php endif; ?>
  <?php if ( is_page('service') ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page/service/style.css"></link>
  <?php endif; ?>
  <?php if ( is_category('works') ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page/works/style.css"></link>
  <?php elseif ( is_category('topics') ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page/topics/style.css"></link>
  <?php 
  $post = $wp_query->post;
  elseif ( in_category(6) || post_is_in_descendant_category(6)): ?> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page/works-detail/style.css"></link>
    <?php 
  $post = $wp_query->post;
  elseif ( in_category(5) || post_is_in_descendant_category(5)): ?> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page/topics-detail/style.css"></link>
    <?php endif; ?> 
    <?php if ( is_page('contact') ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page/contact/style.css"></link>
  <?php endif; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
  
<body>
  <header class="header">
    <div class="header_wrapper">
      <div class="header_logo">
        <a href="<?php echo esc_url(home_url()); ?>">
          <img src="<?php echo get_template_directory_uri();?>/img/logo_b.png" alt="ロゴ画像です">
        </a>
      </div>
      <div class="scrolldown"><span>SCROLL</span><span></span></div>
      <div class="topbtn _hidden">
        <a href="#"><span></span></a>
      </div>
    </div>
  </header>
  <div class="openbtn">
    <span></span><span></span><span></span>
  </div>
  <nav class="gnav">
    <a href="home.html">
      <div class="gnav_logo"><img src="<?php echo get_template_directory_uri();?>/img/logo_b.png" alt=""></div>
    </a>
    <?php
    $args = array(
      'menu' => 'menu', // 管理画面で作成したメニュー名
      'menu_class' => 'list', // メニューを構成するulタグのクラス名
      'container' => false, // <ul>タグを囲んでいる<div>タグを削除
     );

       // カスタムメニューを表示
       wp_nav_menu($args);
      ?>
    <ul class="sns">
      <li class="sns_item"><a href=""><img src="<?php echo get_template_directory_uri();?>/img/icon_sns1.png" alt="twitter"></a></li>
      <li class="sns_item"><a href=""><img src="<?php echo get_template_directory_uri();?>/img/icon_sns2.png" alt="instagram"></a></li>
    </ul>
  </nav>