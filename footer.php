<footer class="footer">
    <section class="footer_contact">
      <div class="contact_container">
        <h2 class="_heading">Contact</h2>
        <p class="_subtitle">お問い合わせ</p>
        <p class="_txt">Web制作の相談やお見積もりなどお気軽にご相談ください</p>
        <button type="button" class="_morebtn" type=“button” onclick="location.href='<?php echo home_url('/contact'); ?>'">
          Contact Form
        </button>
      </div>
    </section>
    <section class="footer_works">
      <div class="works_container">
        <h2 class="_heading">Our works</h2>
        <p class="_subtitle">制作実績一覧</p>
        <button type="button" class="_morebtn" type=“button” onclick="location.href='<?php echo home_url('/works'); ?>'">
            View More</button>
      </div>
    </section>
    <div class="footer_container">
      <div class="_logo">
        <div class="_logo-img"><img src="<?php echo get_template_directory_uri();?>/img/logo_icon.png" alt="ロゴ画像です"></div>
        <p class="_logo-txt">LOSTA</p>
      </div>
      <div class="_sns">
        <a href="">
          <div class="_sns-twitter"><img src="<?php echo get_template_directory_uri();?>/img/icon_sns1.png" alt="Twitter"></div>
        </a>
        <a href="">
          <div class="_sns-instagram"><img src="<?php echo get_template_directory_uri();?>/img/icon_sns2.png" alt="instagram"></div>
        </a>
      </div>
      <p class="_txt">© 2022 Losta, Inc.</p>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/swiper.js"></script>
    <?php if ( !is_category() ): ?>
      <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/smoothScroll.js"></script>
    <?php endif; ?>
    <script src="<?php echo get_template_directory_uri();?>/js/paginathing.min.js"></script>
  </body>
  
  </html>