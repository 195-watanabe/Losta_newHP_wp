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
            <li><span>2</span><br>確認</li>
            <li class="_visited"><span>3</span><br>完了</li>
          </ol>
          <div class="form_txt" style="display: none;">
            <p>お見積り、ご依頼、ご質問など、お気軽にお問い合わせください。</p>
          </div>

          <div class="form_thanks">
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
          <div class="form">

            <div class="form_block" style="display: none;">
              <div class="form_block _header">お名前<span>　※必須</span></div>
              <div class="form_block _body">
                <input type="text" name="your-name" class="is-full" size="60" value="" />
              </div>
            </div>
            <div class="form_block" style="display: none;">
              <div class="form_block _header">会社名</div>
              <div class="form_block _body">
                <input type="text" name="your-company" class="is-full" size="60" value="" />
              </div>
            </div>
            <div class="form_block" style="display: none;">
              <div class="form_block _header">メールアドレス<span>　※必須</span></div>
              <div class="form_block _body">
                
                <input type="email" name="your-email" class="is-full" size="60" value="" data-conv-half-alphanumeric="true" />
                
              </div>
            </div>
            <div class="form_block" style="display: none;">
              <div class="form_block _header">電話番号<span>　※必須</span></div>
              <div class="form_block _body">
                
                <input type="text" name="your-tel" class="is-full" size="60" value="" />
                
              </div>
            </div>
            <div class="form_block" style="display: none;">
              <div class="form_block _header">ご希望のプラン</div>
              <div class="form_block _body">
                
                <select name="your-budget">
                  <option value="" selected='selected'>
                  </option>
                  <option value="ミニマム">
                    ミニマム </option>
                    <option value="ベーシック">
                      ベーシック </option>
                      <option value="プロ">
                        プロ </option>
                        <option value="未定">
                          未定 </option>
                        </select>
              </div>
            </div>
            <div class="form_block" style="display: none;">
              <div class="form_block _header">ご希望の納期</div>
              <div class="form_block _body">
                
                <select name="your-period">
                  <option value="" selected='selected'>
                  </option>
                  <option value="1ヶ月以内">
                    1ヶ月以内 </option>
                    <option value="3ヶ月以内">
                      3ヶ月以内 </option>
                      <option value="6ヶ月以内">
                        6ヶ月以内 </option>
                        <option value="12ヶ月以内">
                          12ヶ月以内 </option>
                          <option value="未定">
                            未定 </option>
                </select>
              </div>
            </div>
            <div class="form_block" style="display: none;">
              <div class="form_block _header">ご相談内容<span>　※必須</span></div>
              <div class="form_block _body">
                <textarea name="your-message" cols="50" rows="9"></textarea>
              </div>
            </div>
            <div class="form_block" style="display: none;" id="privacy">
              <div class="form_block _header">個人情報保護方針</div>
              <div class="form_block _body">
                <div class="form_privacy">
                  <p>本ウェブサイトは、株式会社Losta（以下「当社」）の事業概要を紹介するサイトです。</p>
                  <h2>
                    1. 個人情報保護方針
                  </h2>
                  <p>
                    当社は、当社が取得した個人情報の取扱いに関し、個人情報の保護に関する法律、個人情報保護に関するガイドライン等の指針、その他個人情報保護に関する関係法令を遵守します。
                  </p>
                  <h2>
                    2. 個人情報の安全管理
                  </h2>
                  <p>
                    当社は、個人情報の保護に関して、組織的、物理的、人的、技術的に適切な対策を実施し、当社の取り扱う個人情報の漏えい、滅失又はき損の防止その他の個人情報の安全管理のために必要かつ適切な措置を講ずるものとします。
                  </p>
                  <h2>
                    3. 個人情報の取得等の遵守事項
                  </h2>
                  <p>
                    当社による個人情報の取得、利用、提供については、以下の事項を遵守します。<br>
                    
                    <h3>
                      (1) 個人情報の利用目的<br>
                    </h3>
                    当社は、当社が取得した個人情報について、法令に定める場合又は本人の同意を得た場合を除き、以下に定める利用目的の達成に必要な範囲を超えて利用することはありません。<br>
                    <span>
                      ① 本サイトの運営、維持、管理<br>
                    </span>
                    <span>
                      ② 本サイトを通じたサービスの提供及び紹介<br>
                    </span>
                    <span>
                      ③ 本サイトの品質向上のためのアンケート<br>
                    </span>
                    <h3>
                      (2) 個人情報の提供等<br>
                    </h3>
                    当社は、法令で定める場合を除き、本人の同意に基づき取得した個人情報を、本人の事前の同意なく第三者に提供することはありません。なお、本人の求めによる個人情報の開示、訂正、追加若しくは削除又は利用目的の通知については、法令に従いこれを行うとともに、ご意見、ご相談に関して適切に対応します。
                  </p>
                  <h2>
                    4 . 個人情報の利用目的の変更
                  </h2>
                  <p>
                    当社は、前項で特定した利用目的は、予め本人の同意を得た場合を除くほかは、原則として変更しません。但し、変更前の利用目的と相当の関連性を有すると合理的に認められる範囲において、予め変更後の利用目的を公表の上で変更を行う場合はこの限りではありません。
                  </p>
                  <h2>
                    ５. 個人情報の第三者提供
                  </h2>
                  <p>
                    当社は、個人情報の取扱いの全部又は一部を第三者に委託する場合、その適格性を十分に審査し、その取扱いを委託された個人情報の安全管理が図られるよう、委託を受けた者に対する必要かつ適切な監督を行うこととします。
                  </p>
                  <h2>
                    ６. 個人情報の取扱いの改善・見直し
                  </h2>
                  <p>
                    当社は、個人情報の取扱い、管理体制及び取組みに関する点検を実施し、継続的に改善・見直しを行います。
                  </p>
                  <h2>
                    ７. 個人情報の廃棄
                  </h2>
                  <p>
                    当社は、個人情報の利用目的に照らしその必要性が失われたときは、個人情報を消去又は廃棄するものとし、当該消去及び廃棄は、外部流失等の危険を防止するために必要かつ適切な方法により、業務の遂行上必要な限りにおいて行います。
                  </p>
                  <h2>
                    ８. お問い合わせ
                  </h2>
                  <p>
                    当社の個人情報の取扱に関するお問い合せは問い合わせフォームよりご連絡ください。
                  </p>
                </div>
                <p><label style="position:relative;cursor:pointer;"><input type="checkbox"
                  name="acceptance-policy"><span>　個人情報の取り扱いに同意する。</span></label>
                </p>
              </div>
            </div>
          </div>
          <div class="form_submit">
            <div class="form_submit _body">
              <button type="submit" name="submitConfirm" value="confirm" class="form_btn _homeback">
                <a href="<?php echo home_url('/contact1'); ?>"></a>
                  TOPへ戻る
                </button>
            </div>
          </div>
      </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer();?>