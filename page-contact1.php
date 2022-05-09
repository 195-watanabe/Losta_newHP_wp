<?php get_header(); ?>
  <main class="main">
    <div class="fv">
      <div class="fv_title">
        <h1 class="_heading">
          Contact
        </h1>
        <p class="_sub">
          お問い合わせ
        </p>
      </div>
    </div>
    <div class="wrapper">
      <div class=" contact">
        <div class="form_container">
          <ol class="_stepBar">
            <li class="_visited"><span>1</span><br>入力</li>
            <li><span>2</span><br>確認</li>
            <li><span>3</span><br>完了</li>
          </ol>
          <div class="form_txt">
            <p>お見積り、ご依頼、ご質問など、お気軽にお問い合わせください。</p>
          </div>

          <div class="form_thanks" style="display: none;">
            <p class="form_thanks _header">お問い合わせを受け付けました。</p>
            <p class="form_thanks _txt">
              このたびは、株式会社Lostaへお問い合わせ頂き誠にありがとうございます。<br>
              3営業日以内に担当者より折り返しご連絡させていただきます。<br>
              <br>
              尚、お問い合わせ内容によっては、ご返事までにお時間をいただく場合もございます。<br>
              あらかじめご了承ください。<br>
            </p>
          </div>

          <form method="post" action="" enctype="multipart/form-data">
            
          </form>
          <?php echo do_shortcode('[contact-form-7 id="153" title="お問い合わせ"]'); ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer();?>