<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <!-- <?php if (is_404()) : ?>
	      <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("")); ?>">
    <?php endif; ?> -->
    <?php wp_head(); ?>
  <?php wp_head();?>
</head>

<body id="top">
  <header class="top-header header" id="js-header">
    <div class="header__inner">
      <h1 class="header__title">
        <a href="index.html" class="header__logo-link">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.png" decoding="async" alt="CodeUpsのロゴ" width="133" height="50">
        </a>
      </h1>
      <button type="button" class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="page-campaign.html" class="pc-nav__link">
              Campaign
              <p class="pc-nav__subtitle">キャンペーン</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-about.html" class="pc-nav__link">
              About us
              <p class="pc-nav__subtitle">私たちについて</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-information.html" class="pc-nav__link">
              Information
              <p class="pc-nav__subtitle">ダイビング情報</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-blog.html" class="pc-nav__link">
              Blog
              <p class="pc-nav__subtitle">ブログ</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-voice.html" class="pc-nav__link">
              Voice
              <p class="pc-nav__subtitle">お客様の声</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-price.html" class="pc-nav__link">
              Price
              <p class="pc-nav__subtitle">料金一覧</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-faq.html" class="pc-nav__link">
              FAQ
              <p class="pc-nav__subtitle">よくある質問</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-contact.html" class="pc-nav__link">
              Contact
              <p class="pc-nav__subtitle">お問合せ</p>
            </a>
          </li>
        </ul>
      </nav>
      <nav class="header__sp-nav sp-nav js-sp-nav is-activ">
        <div class="sp-nav__inner">
          <div class="sp-nav__wrap">
            <div class="sp-nav__contents">
              <div class="sp-nav__container">
                <div class="sp-nav__flex">
                  <div class="sp-nav__group">
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="page-campaign.html">キャンペーン</a>
                      </li>
                      <li class="sp-nav__body">
                        <ul class="sp-nav__lists">
                          <li class="sp-nav__list">
                            <a href="page-campaign.html#page-campaign__item01">ライセンス取得</a>
                          </li>
                          <li class="sp-nav__list">
                            <a href="page-campaign.html#page-campaign__item02">貸切体験ダイビング</a>
                          </li>
                          <li class="sp-nav__list">
                            <a href="page-campaign.html#page-campaign__item03">ナイトダイビング</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="page-about.html">私たちについて</a>
                      </li>
                    </ul>
                  </div>
                  <div class="sp-nav__group">
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="page-information.html">ダイビング情報</a>
                      </li>
                      <li class="sp-nav__body">
                        <ul class="sp-nav__lists">
                          <li class="sp-nav__list">
                            <a href="page-information.html#tab__content01">ライセンス講習</a>
                          </li>
                          <li class="sp-nav__list">
                            <a href="page-information.html#tab__content02">体験ダイビング</a>
                          </li>
                          <li class="sp-nav__list">
                            <a href="page-information.html#tab__content03">ファンダイビング</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="page-blog.html">ブログ</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="sp-nav__container">
                <div class="sp-nav__flex">
                  <div class="sp-nav__group">
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="page-voice.html">お客様の声</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="page-price.html">料金一覧</a>
                      </li>
                      <li class="sp-nav__body">
                        <ul class="sp-nav__lists">
                          <li class="sp-nav__list">
                            <a href="page-price.html#page-price__group01">ライセンス講習</a>
                          </li>
                          <li class="sp-nav__list">
                            <a href="page-price.html#page-price__group02">体験ダイビング</a>
                          </li>
                          <li class="sp-nav__list">
                            <a href="page-price.html#page-price__group03">ファンダイビング</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="sp-nav__group">
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="page-faq.html">よくある質問</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="page-privacypolicy.html">プライバシー<br class="u-mobile">ポリシー</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="page-terms.html">利用規約</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="page-sitemap.html">サイトマップ</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="page-contact.html">お問い合わせ</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
