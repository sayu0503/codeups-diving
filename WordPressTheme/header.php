<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php if (is_404()) : ?>
	      <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("")); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
  <?php wp_head();?>
</head>

<body id="top" <?php body_class(); ?>>
  <header class="top-header header" id="js-header">
    <div class="header__inner">
    <?php if (is_front_page() || is_home()) : ?>
  <h1 class="header__title">
<?php else : ?>
  <div class="header__title">
<?php endif; ?>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo-link">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.png" decoding="async" alt="CodeUpsのロゴ" width="133" height="50">
    </a>
<?php if (is_front_page() || is_home()) : ?>
  </h1>
<?php else : ?>
  </div>
<?php endif; ?>
      <button type="button" class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">

            <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="pc-nav__link">
              Campaign
              <p class="pc-nav__subtitle">キャンペーン</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/about-us")) ?>" class="pc-nav__link">
              About us
              <p class="pc-nav__subtitle">私たちについて</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/information")) ?>" class="pc-nav__link">
              Information
              <p class="pc-nav__subtitle">ダイビング情報</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/blog")) ?>" class="pc-nav__link">
              Blog
              <p class="pc-nav__subtitle">ブログ</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/voice")) ?>" class="pc-nav__link">
              Voice
              <p class="pc-nav__subtitle">お客様の声</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/price")) ?>" class="pc-nav__link">
              Price
              <p class="pc-nav__subtitle">料金一覧</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/faq")) ?>" class="pc-nav__link">
              FAQ
              <p class="pc-nav__subtitle">よくある質問</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/contact")) ?>" class="pc-nav__link">
              Contact
              <p class="pc-nav__subtitle">お問合せ</p>
            </a>
          </li>
        </ul>
      </nav>
      <nav class="header__sp-nav sp-nav js-sp-nav">
        <div class="sp-nav__inner">
          <div class="sp-nav__wrap">
            <div class="sp-nav__contents">
              <div class="sp-nav__container">
                <div class="sp-nav__flex">
                  <div class="sp-nav__group">
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/campaign")) ?>">キャンペーン</a>
                      </li>
                      <li class="sp-nav__body">
                        <ul class="sp-nav__lists">
                          <li class="sp-nav__list">
                          <a href="<?php echo esc_url(home_url('/campaign/#page-campaign-license_1')); ?>">ライセンス取得</a>
                          </li>
                          <li class="sp-nav__list">
                            <a href="<?php echo esc_url(home_url('/campaign/#page-campaign-diving_1')); ?>">貸切体験ダイビング</a>
                          </li>
                          <li class="sp-nav__list">
                            <a href="<?php echo esc_url(home_url('/campaign/#page-campaign-night_diving_1')); ?>">ナイトダイビング</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/about-us")) ?>">私たちについて</a>
                      </li>
                    </ul>
                  </div>
                  <div class="sp-nav__group">
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/information")) ?>">ダイビング情報</a>
                      </li>
                      <li class="sp-nav__body">
                        <ul class="sp-nav__lists">
                          <li class="sp-nav__list">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>information#tab__content01">ライセンス講習</a>
                          </li>
                          <li class="sp-nav__list">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>information#tab__content02">体験ダイビング</a>
                          </li>
                          <li class="sp-nav__list">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>information#tab__content03">ファンダイビング</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/blog")) ?>">ブログ</a>
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
                        <a href="<?php echo esc_url(home_url("/voice")) ?>">お客様の声</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/price")) ?>">料金一覧</a>
                      </li>
                      <li class="sp-nav__body">
                        <ul class="sp-nav__lists">
                          <li class="sp-nav__list">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#page-price__group01">ライセンス講習</a>
                          </li>
                          <li class="sp-nav__list">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#page-price__group02">体験ダイビング</a>
                          </li>
                          <li class="sp-nav__list">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#page-price__group03">ファンダイビング</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="sp-nav__group">
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/faq")) ?>">よくある質問</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/privacypolicy")) ?>">プライバシー<br class="u-mobile">ポリシー</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/terms-of-service")) ?>">利用規約</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/sitemap")) ?>">サイトマップ</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/contact")) ?>">お問い合わせ</a>
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
