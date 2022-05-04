function pc_imagefield_selectImage() {
    var frame = wp.media({
        title: "画像の選択", // メディアライブラリ上部に表示されるタイトル
        multiple: true, // 複数選択可能にするか
        library: {type: "image"} // 画像のみ
    });

    frame.on('open', function() {
        var selection = frame.state().get('selection');
        document.getElementById("pc_imagefield_input").value.split(",").forEach(function(id) {
            selection.add(wp.media.attachment(id));
        })
    });
    
    frame.on('select', function() { // 画像が選択されたとき
        // 選択された画像の情報を取得
        var images = frame.state().get('selection').toJSON(); 

        // 画像のIDをコンマ区切りにしてimagefieldのテキストフィールドに格納
        document.getElementById("pc_imagefield_input").value = images.map(function(image) {
            return image.id;
        });

        // プレビューに画像をセット
        var previewPc = document.getElementById("pc_img_field_preview");
        previewPc.innerHTML = images.map(image => {
            var previewImage = image.sizes.small || image;
            return '<img src="' + previewImage.url + '"/>';
        }).join("");
    });

    frame.open();
}

// SP画像
function sp_imagefield_selectImage() {
    var frame = wp.media({
        title: "画像の選択", // メディアライブラリ上部に表示されるタイトル
        multiple: true, // 複数選択可能にするか
        library: {type: "image"} // 画像のみ
    });

    frame.on('open', function() {
        var selection = frame.state().get('selection');
        document.getElementById("sp_imagefield_input").value.split(",").forEach(function(id) {
            selection.add(wp.media.attachment(id));
        })
    });
    
    frame.on('select', function() { // 画像が選択されたとき
        // 選択された画像の情報を取得
        var images = frame.state().get('selection').toJSON(); 

        // 画像のIDをコンマ区切りにしてimagefieldのテキストフィールドに格納
        document.getElementById("sp_imagefield_input").value = images.map(function(image) {
            return image.id;
        });

        // プレビューに画像をセット
        var previewSp = document.getElementById("sp_img_field_preview");
        previewSp.innerHTML = images.map(image => {
            var previewImage = image.sizes.small || image;
            return '<img src="' + previewImage.url + '"/>';
        }).join("");
    });

    frame.open();
}