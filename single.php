<?php 
$post = $wp_query->post;
if ( in_category(6) || post_is_in_descendant_category(6)) {
include(TEMPLATEPATH.'/single-works.php');
//指定した親カテゴリと属する子カテゴリの記事のみ、ここが表示される
} elseif ( in_category(5) || post_is_in_descendant_category(5)) {
include(TEMPLATEPATH.'/single-topics.php');
//指定した親カテゴリと属する子カテゴリの記事のみ、ここが表示される
} else {
include(TEMPLATEPATH.'/single-default.php');
}
 ?>