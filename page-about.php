  <?php get_header(); ?>
  <main class="main">
    <div class="fv">
      <div class="fv_title">
        <h1 class="_heading">
          About Us
        </h1>
        <p class="_sub">
          Lostaについて
        </p>
      </div>
    </div>
    <div class="wrapper">
      <div class="about">
        <div class="about_img"><img src="<?php echo get_template_directory_uri();?>/img/logo_w.png" alt="ロゴ画像です"></div>
        <h2 class="about_heading">
          「お客様の未来が私たちの明日へ。」<br>
          - Your Future is<br> to Our Tomorrow. -
        </h2>
        <p class="about_txt">
          2020年度、新型コロナウイルス感染症拡大の影響により、人々のライフスタイルや働き方が大きく変化しました。この変化により、企業・事業主は急速なIT化への対応を求められ、今までの常識が根底から覆る実情を目の当たりにしてまいりました。このような不安定な社会情勢の中、お客様が抱えているWeb課題を解決するべく、株式会社Lostaを創業しました。Lostaは「お客様の未来が私たちの明日へ。」というミッションを掲げ、移り変わりの早いIT業界の中でお客様の未来に繋がる持続的な成長をサポートし続けております。「お客様の成長が私たちLostaの明日へと繋がっていく」という信念を持ち、常に期待を超える新しい未来を創造してまいります。
        </p>
        <div class="about_sign">
          <img src="<?php echo get_template_directory_uri();?>/img/sign-min.jpg" alt="株式会社Losta
          代表取締役社長 梅村 洋平">
        </div>
      </div>
      <div class="company">
        <h2 class="company_heading">
          Company Profile
        </h2>
        <h3 class="company_subheading">
          - 会社情報
        </h3>
        <table class="company_container">
          <tr class="company_item">
            <th>会社名</th>
            <td>株式会社Losta (Losta Inc.)</td>
          </tr>
          <tr class="company_item">
            <th>創立</th>
            <td>2021年1月22日</td>
          </tr>
          <tr class="company_item">
            <th>所在地</th>
            <td>〒223-0066<br>
            神奈川県横浜市港北区高田西3-6-13</td>
          </tr>
          <tr class="company_item">
            <th>経営者</th>
            <td>代表取締役社長　梅村洋平</td>
          </tr>
          <tr class="company_item">
            <th>事業内容</th>
            <td>・Web制作<br>
            ・プログラミングスクール「WithCode」</td>
          </tr>
          <tr class="company_item">
            <th>資本金</th>
            <td>2,500,000円</td>
          </tr>
          <tr class="company_item">
            <th>取引銀行</th>
            <td>三菱UFJ銀行</td>
          </tr>
        </table>
      </div>
      <div class="access">
        <h2 class="access_heading">
          Access
        </h2>
        <h3 class="access_subheading">
          - アクセス
        </h3>
        <!-- Google Map -->
        <div class="access_map">
          <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyAx5XXLmlD73zfjDWPOkh2Y0tOtpkPEpHk"></script><!-- APIキーを入力 -->
          <script type="text/javascript">
          function googleMap() {
            var latlng = new google.maps.LatLng(35.55330126959252,139.61958645714833);/* 座標を入れる */
            var myOptions = {
              zoom: 17, /*拡大比率 値が大きいと詳細に表示され、値が小さいと俯瞰*/
              scrollwheel: false, /* スクロールを無効化 */
              streetViewControl: false,
              mapTypeControl: false,
              zoomControl: false,
              fullscreenControl: false,
              center: latlng, /*表示枠内の中心を軸にする*/
              mapTypeControlOptions: { mapTypeIds: ['style', google.maps.MapTypeId.ROADMAP] }/*表示タイプの指定*/
            };
            var map = new google.maps.Map(document.getElementById('map'), myOptions);
            /*アイコン設定*/
            var markerOptions = {
              position: latlng,
              map: map,
              icon: {
                    url: '<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon_map.png', /*アイコンまでのパス*/
                    scaledSize : new google.maps.Size(60, 60) /*アイコンのサイズ*/
                },
              title: 'サンプル',/*タイトル*/
              //animation: google.maps.Animation.DROP /*アニメーションしたいなら*/
            };
            var marker = new google.maps.Marker(markerOptions);
            /*地図の表示をカスタマイズ 以下は白黒の例*/
            var styleOptions = [
          {
            'stylers': [{
            'gamma': 0.8
            },
            {
            'saturation': -100
            }]
            }
            ];
            var styledMapOptions = { name: 'サンプル' }/*地図左上のタイトル*/
            var originalType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
            map.mapTypes.set('style', originalType);
            map.setMapTypeId('style');
          };
          google.maps.event.addDomListener(window, 'load', function() {
              googleMap();
          });
          </script>
          <div id="map"></div>
          <div class="_address">住所<br>
          〒223-0066 神奈川県横浜市港北区<br>
          高田西3-6-13</div>
          <div class="_station">最寄駅<br>
          横浜市営地下鉄グリーンライン線<br>
          高田駅</div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer();?>