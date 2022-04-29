<?php
// カスタムメニュー機能
add_theme_support('menus');
add_theme_support('post-thumbnails');

function my_category_template( $template ) {
  $category = get_queried_object();
  if ( $category->parent != 0 && ( $template == "" || strpos( $template, "category.php" ) !== false ) ) {
    $templates = array();
    while ( $category->parent ) {
    $category = get_category( $category->parent );
    if ( !isset( $category->slug ) ) break;
      $templates[] = "category-{$category->slug}.php";
      $templates[] = "category-{$category->term_id}.php";
    }
    $templates[] = "category.php";
    $template = locate_template( $templates );
  }
  return $template;
}
add_filter( 'category_template', 'my_category_template' );

// // ページネーション
// function pagination($pages = '', $range = 2) {
//   $showitems = ($range * 2) + 1;

//   // 現在のページ数
//   global $paged;
//   if(empty($paged)) {
//     $paged = 1;
//   }

//   // 全ページ数
//   if($pages == '') {
//     global $wp_query;
//     $pages = $wp_query->max_num_pages;
//     if(!$pages) {
//       $pages = 1;
//     }
//   }

//   // ページ数が2ぺージ以上の場合のみ、ページネーションを表示
//   if(1 != $pages) {
//     echo '<div class="pager">';
//     echo '<ul class="pagination">';
//     // 1ページ目でなければ、「前のページ」リンクを表示
//     if($paged > 1) {
//       echo '<li class="pre"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">PREV</a></li>';
//     }

//     // ページ番号を表示（現在のページはリンクにしない）
//     for ($i=1; $i <= $pages; $i++) {
//       if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
//         if ($paged == $i) {
//           echo '<li class="active"><span>' .$i. '</span></li>';
//         } else {
//           echo '<li><a href="' . esc_url(get_pagenum_link($i)) . '"><span>' .$i. '</span></a></li>';
//         }
//       }
//     }

//     // 最終ページでなければ、「次のページ」リンクを表示
//     if ($paged < $pages) {
//       echo '<li class="next"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '">NEXT</a></li>';
//     }
//     echo '</ul>';
//     echo '</div>';
//   }
// }

// function pagination($end_size = 1, $mid_size = 2, $prev_next = true) {
//   global $wp_query;
//   $page_format = paginate_links(
//     array(
//       'current' => max(1, get_query_var('paged')),
//       'total' => $wp_query->max_num_pages,
//       'type'  => 'array',
//       'prev_text' => '前へ',//前へのリンク文言
//       'next_text' => '次へ',//次へのリンク文言
//       'end_size' => $end_size,//初期値：１  両端のﾍﾟｰｼﾞﾘﾝｸの数
//       'mid_size' => $mid_size,//初期値：２  現在のﾍﾟｰｼﾞの両端にいくつページリンクを表示するか（現在のページは含まない）
//       'prev_next' => $prev_next,//初期値：true  リストの中に「前へ」「次へ」のリンクを含むか
//     )
//   );
//   $code = '';
//   if( is_array($page_format) ) {
//     $paged = get_query_var('paged') == 0 ? 1 : get_query_var('paged');
//     $code .= '<div class="pagination">'.PHP_EOL;
//     $code .= '<ul>'.PHP_EOL;
//     foreach ( $page_format as $page ) {
//       $code .= '<li>'.$page.'</li>'.PHP_EOL;
//     }
//     $code .= '</ul>'.PHP_EOL;
//     $code .= '</div>'.PHP_EOL;
//     $code .= '<div class="pagination-total">'.$paged.'/'.$wp_query->max_num_pages.'</div>'.PHP_EOL;
//   }
//   wp_reset_query();
//   return $code;
// }


function pagenation($pages = '', $range = 2){
    $showitems = ($range * 1)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == ''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages){
            $pages = 1;
        }
    }
    if(1 != $pages){
        // 画像を使う時用に、テーマのパスを取得
        $img_pass = get_template_directory_uri();
        echo "<div class=\"m-pagenation\">";
        // 「1/2」表示 現在のページ数 / 総ページ数
        // echo "<div class=\"m-pagenation__result\">". $paged."/". $pages."</div>";
        // 「前へ」を表示
        // if($paged > 1) echo "<div class=\"m-pagenation__prev\"><a href='".get_pagenum_link($paged - 1)."'>前へ</a></div>";
        // ページ番号を出力
        echo "<ol class=\"m-pagenation__body\">\n";
        for ($i=1; $i <= $pages; $i++){
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                echo ($paged == $i)? "<li class=\"-current\">".$i."</li>": // 現在のページの数字はリンク無し
                    "<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
            }
        }
        // [...] 表示
        // if(($paged + 4 ) < $pages){
        //     echo "<li class=\"notNumbering\">...</li>";
        //     echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
        // }
        echo "</ol>\n";
        // 「次へ」を表示
        // if($paged < $pages) echo "<div class=\"m-pagenation__next\"><a href='".get_pagenum_link($paged + 1)."'>次へ</a></div>";
        echo "</div>\n";
    }
}

function pre_get_posts_custom( $query ) {
	if( is_admin() || ! $query->is_main_query() ){
		return;
	}
	if( $query->is_category( 'works' ) ){
		$query->set( 'posts_per_page' , 4 );
	}

}
add_action( 'pre_get_posts', 'pre_get_posts_custom' );
?>