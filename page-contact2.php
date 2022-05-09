<?php get_header(); ?>
  <main class="main">
    <div class="fv _hidden">
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
            <li><span>1</span><br>入力</li>
            <li class="_visited"><span>2</span><br>確認</li>
            <li><span>3</span><br>完了</li>
          </ol>
          <?php echo do_shortcode('[contact-form-7 id="154" title="入力内容の確認"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer();?>