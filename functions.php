<?php
// カスタムメニュー機能
add_theme_support('menus');
add_theme_support('post-thumbnails');

function post_is_in_descendant_category( $cats, $_post = null ){
   foreach ( (array) $cats as $cat ) {
         $descendants = get_term_children( (int) $cat, 'category');
          if ( $descendants && in_category( $descendants, $_post ) )
              return true;
   }
   return false;
}

// カスタムフィールドの追加
function add_custom_fields() {
  add_meta_box( 'works_information', '制作実績の情報', 'create_works_information', 'post', 'normal' );
  // add_meta_box( 'gallery', '制作画像', 'create_gallery', 'post', 'normal' );
}
add_action( 'admin_menu', 'add_custom_fields' );




// カスタムフィールドの入力エリア
function create_works_information() {
	global $post;
 
	//下記に管理画面に表示される入力エリアを作ります。「get_post_meta()」は現在入力されている値を表示するための記述です。
	echo 'クライアント名： <input type="text" name="client" value="'.get_post_meta($post->ID, 'client', true).'" size="50" /><br>';
	echo '業種　　　　　： <input type="text" name="industry_type" value="'.get_post_meta($post->ID, 'industry_type', true).'" size="50" /><br>';
	echo '制作物の内容　： <input type="text" name="product_scale" value="'.get_post_meta($post->ID, 'product_scale', true).'" size="50" />　<br>';
	echo '設立日　　　　： <input type="text" name="launch_date" value="'.get_post_meta($post->ID, 'launch_date', true).'" size="50" />　<br>';
	echo 'サイトURL　　 ： <input type="text" name="site_url" value="'.get_post_meta($post->ID, 'site_url', true).'" size="50" />　<br>';
	echo 'プラン　　　　 ： <input type="text" name="plan" value="'.get_post_meta($post->ID, 'plan', true).'" size="50" />　<br>';
}

// カスタムフィールドの値を保存
function save_custom_fields( $post_id ) {
	if(!empty($_POST['client'])){ //題名が入力されている場合
		update_post_meta($post_id, 'client', $_POST['client'] ); //値を保存
	}else{ //題名未入力の場合
		delete_post_meta($post_id, 'client'); //値を削除
	}
	
	if(!empty($_POST['industry_type'])){
		update_post_meta($post_id, 'industry_type', $_POST['industry_type'] );
	}else{
		delete_post_meta($post_id, 'industry_type');
	}
	
	if(!empty($_POST['product_scale'])){
		update_post_meta($post_id, 'product_scale', $_POST['product_scale'] );
	}else{
		delete_post_meta($post_id, 'product_scale');
	}
	
	if(!empty($_POST['launch_date'])){
		update_post_meta($post_id, 'launch_date', $_POST['launch_date'] );
	}else{
		delete_post_meta($post_id, 'launch_date');
	}
	
	if(!empty($_POST['site_url'])){
		update_post_meta($post_id, 'site_url', $_POST['site_url'] );
	}else{
		delete_post_meta($post_id, 'site_url');
	}

	if(!empty($_POST['plan'])){
		update_post_meta($post_id, 'plan', $_POST['plan'] );
	}else{
		delete_post_meta($post_id, 'plan');
	}
}
add_action('save_post', 'save_custom_fields');
?>