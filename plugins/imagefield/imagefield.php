<?php
/*
Plugin Name: Image Custom Field Sample
Description: 投稿に画像を扱うカスタムフィールドを追加するサンプルプラグイン
Author: Hiroki Kawakami
Version: 0.1
Author URI: https://ideal-reality.com
*/

// 編集画面にカスタムフィールドの表示領域を追加する
add_action('admin_menu', 'add_image_custom_field');
function add_image_custom_field() {
    add_meta_box(
        'pc_img', // 編集画面セクションのHTML要素のID
        'PC画像', // 編集画面セクションのタイトル
        'insert_pc_img', // 編集画面セクションにHTML出力する関数
        'post', // 投稿タイプ
        'normal' // 編集画面セクションが表示される部分
    );
    add_meta_box(
        'sp_img', // 編集画面セクションのHTML要素のID
        'SP画像', // 編集画面セクションのタイトル
        'insert_sp_img', // 編集画面セクションにHTML出力する関数
        'post', // 投稿タイプ
        'normal' // 編集画面セクションが表示される部分
    );
}

// 編集画面の表示領域に使用されるHTML
// PC画像
function insert_pc_img() {
    global $post;
    $pc_img_field = get_post_meta($post->ID, 'pc_img_field', true); ?>
    <div>
        <style>#pc_img_field_preview img { max-width: 8rem; max-height: 8rem; margin: .5rem; }</style>
        <input type="hidden" name="pc_img_field" id="pc_imagefield_input" value="<?php echo $pc_img_field; ?>"/>
        <div id="pc_img_field_preview"> <?php
            foreach (explode(",", $pc_img_field) as $image) {
                echo wp_get_attachment_image($image, 'small');
            }
        ?></div>
        <input type="button" value="画像を選択" onclick="pc_imagefield_selectImage()"/>
    </div>
<?php }

// SP画像
function insert_sp_img() {
    global $post;
    $sp_img_field = get_post_meta($post->ID, 'sp_img_field', true); ?>
    <div>
        <style>#sp_img_field_preview img { max-width: 8rem; max-height: 8rem; margin: .5rem; }</style>
        <input type="hidden" name="sp_img_field" id="sp_imagefield_input" value="<?php echo $sp_img_field; ?>"/>
        <div id="sp_img_field_preview"> <?php
            foreach (explode(",", $sp_img_field) as $image) {
                echo wp_get_attachment_image($image, 'small');
            }
        ?></div>
        <input type="button" value="画像を選択" onclick="sp_imagefield_selectImage()"/>
    </div>
<?php }

// カスタムフィールドの値を保存する処理
add_action('save_post', 'save_imagefield');
function save_imagefield($post_id) {
    if(isset($_POST['imagefield'])){
        update_post_meta($post_id, 'imagefield', $_POST['imagefield']);
    } else {
        delete_post_meta($post_id, 'imagefield');
    }
}

// 投稿内容の末尾にカスタムフィールドの内容を追加
add_filter('the_content', 'add_imagefield_content', 1);
function add_imagefield_content($content) {
    $images = get_post_meta(get_the_ID(), 'imagefield', true);
    if ($images) $content .= '<h2>Imagefield</h2>';
    foreach (explode(",", $images) as $image) {
        $content .= wp_get_attachment_image($image, 'large');
    }
    return $content;
}

// 編集画面でimagefield.jsを読み込む
add_action('admin_enqueue_scripts', 'add_imagefield_scripts');
function add_imagefield_scripts($hook_suffix){
    global $post_type;
    if ($post_type == 'post' && in_array($hook_suffix, array('post.php', 'post-new.php'))) {
        wp_enqueue_script('imagefield-script', plugin_dir_url(__FILE__) . '/imagefield.js'); // プラグインの場合
        // wp_enqueue_script('imagefield-script', get_template_directory_uri() . '/imagefield.js'); // テーマの場合        
    }
}