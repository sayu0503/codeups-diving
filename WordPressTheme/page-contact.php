<?php get_header(); ?>
<main>

    <!-- 下層メインビュー -->
    <div class="sub-mv" id="js-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact_mv_sp.jpg" alt="波打際" decoding="async" width="375" height="460">
          </picture>
        </div>
        <div class="sub-mv__title">
          <h1 class="sub-mv__section-header">Contact</h1>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <div class="page-bredcrumb bredcrumb">
      <div class="bredcrumb__inner inner">
        <p class="bredcrumb__text">
          <a href="index.html" class="berdcrumb__link">TOP</a>
        </p>
        <p class="bredcrumb__text">お問い合わせ</p>
      </div>
    </div>

    <!-- 下層Contact -->
    <div class="layout-page-contact page-contact">
      <div class="page-contact__inner inner">
        <div class="page-contact__content">
          <form class="page-contact__form js-form">
            <div class="page-contact__error-box">
              <p class="page-contact__error-message">
                ※必須項目が入力されていません。<br class="u-mobile">入力してください。
              </p>
            </div>
            <div class="page-contact__list">
              <!-- お名前 -->
              <div class="page-contact__item">
                <div class="page-contact__label">
                  <label for="name" class="page-contact__label-text">お名前</label>
                  <span class="page-contact__required">必須</span>
                </div>
                <input id="name" type="text" class="page-contact__input" placeholder="沖縄 太郎" required>
              </div>
              <!-- メールアドレス -->
              <div class="page-contact__item">
                <div class="page-contact__label">
                  <label for="mail" class="page-contact__label-text">メールアドレス</label>
                  <span class="page-contact__required">必須</span>
                </div>
                <input id="mail" type="email" class="page-contact__input" placeholder="aaa000@ggmail.com" required>
              </div>
              <!-- 電話番号 -->
              <div class="page-contact__item">
                <div class="page-contact__label">
                  <label for="phone" class="page-contact__label-text">電話番号</label>
                  <span class="page-contact__required">必須</span>
                </div>
                <input id="phone" type="tel" class="page-contact__input" placeholder="000-0000-0000" required>
              </div>
              <!-- お問い合わせ項目 -->
              <div class="page-contact__item">
                <div class="page-contact__label">
                  <label for="phone" class="page-contact__label-text">お問合せ項目</label>
                  <span class="page-contact__required">必須</span>
                </div>
                <!-- チェックボックスグループ -->
                <div class="page-contact__checkbox-group">
                  <label class="page-contact__checkbox">
                    <input type="checkbox" name="course" value="1" required>
                    <span class="checkbox__text">ダイビング講習について</span>
                  </label>
                  <label class="page-contact__checkbox">
                    <input type="checkbox" name="course" value="2" required>
                    <span class="checkbox__text">ファンダイビングについて</span>
                  </label>
                  <label class="page-contact__checkbox">
                    <input type="checkbox" name="course" value="3" required>
                    <span class="checkbox__text">体験ダイビングについて</span>
                  </label>
                </div>
              </div>
              <!-- キャンペーン -->
              <div class="page-contact__item">
                <div class="page-contact__label">
                  <label for="type" class="page-contact__label-text">キャンペーン</label>
                </div>
                <div class="page-contact__select-wrap">
                  <select name="type" id="type" class="page-contact__select">
                    <option hidden>キャンペーン内容を選択</option>
                    <option value="ライセンス講習">ライセンス講習</option>
                    <option value="体験ダイビング">体験ダイビング</option>
                    <option value="ファンダイビング">ファンダイビング</option>
                    <option value="スペシャルダイビング">スペシャルダイビング</option>
                  </select>
                </div>
              </div>
              <!-- お問合せ内容 -->
              <div class="page-contact__item">
                <div class="page-contact__label">
                  <label for="contents" class="page-contact__label-text">お問合せ内容</label>
                  <span class="page-contact__required">必須</span>
                </div>
                <textarea name="contents" id="contents" class="page-contact__textarea" required></textarea>
              </div>
            </div>
            <div class="page-contact__button-block">
              <!-- 同意チェックボックス -->
              <label class="page-contact__checkbox">
                <input type="checkbox" name="term" value="個人情報の取り扱いについて同意のうえ送信します。" required>
                <span class="checkbox__consent--text">個人情報の取り扱いについて同意のうえ送信します。</span>
              </label>
              <!-- 送信ボタン -->
              <button class="page-contact__button" type="submit">
                <span class="button button--layout slide"><span>Send</span></span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>