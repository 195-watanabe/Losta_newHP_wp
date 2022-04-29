<?php
$post = $wp_query->post;
// newsカテゴリであれば以下のテンプレートを呼び出す
if ( in_category('works') ):
    include(TEMPLATEPATH. '/single-works.php'); // 作成したnews用の単一記事テンプレート
if ( in_category('topics') ):
    include(TEMPLATEPATH. '/single-topics.php'); // 作成したnews用の単一記事テンプレート
// newsカテゴリでなければ、このままsingle.phpを使用
else: ?>
<?php endif; ?>

