<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="" />
  <!-- GoogleFonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap"
    rel="stylesheet">

  <!--swiper-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/style.css" />

  <!-- JavaScript -->
  <script defer src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer src="<?php echo get_theme_file_uri(); ?>/assets/js/jquery.inview.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script defer src="<?php echo get_theme_file_uri(); ?>/assets/js/script.js"></script>
  <script defer src="<?php echo get_theme_file_uri(); ?>/assets/js/gsap.js"></script>
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

  <main>
    <!-- メインビュー -->
    <div class="mv" id="js-mv">
      <div class="mv__inner">
        <div class="swiper js-mv-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img_1.jpg" media="(min-width: 768px)" width="2880" height="1536">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img_1-sp.jpg" alt="ウミガメが泳いでいる様子" decoding="async" width="750" height="1334">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img_2.jpg" media="(min-width: 768px)" width="2880"
                  height="1536">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img_2-sp.jpg" alt="ウミガメの近くを泳ぐ２人のダイバー" decoding="async" width="750" height="1334">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img_3.jpg" media="(min-width: 768px)" width="2880"
                  height="1536">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img_3-sp.jpg" alt="太陽が照り付ける海と船" decoding="async" width="750" height="1334">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img_4.jpg" media="(min-width: 768px)" width="2880"
                  height="1536">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_img_4-sp.jpg" alt="綺麗な海と浜辺" decoding="async" width="750" height="1334">
              </picture>
            </div>
          </div>
          <div class="mv__title-wrap">
            <p class="mv__title">diving</p>
            <p class="mv__subtitle">into the ocean</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Campaign -->
    <section class="top-campaign campaign">
      <div class="camping__inner inner">
        <div class="campaign__section-header">
          <div class="section-header">
            <p class="section-header__title">Campaign</p>
            <h2 class="section-header__subtitle">キャンペーン</h2>
          </div>
        </div>
        <div class="campaign__container">
          <div class="swiper js-campaign-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide campaign__slide">
                <div class="campaign-card">
                  <figure class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_img_1.jpg" alt="色鮮やかな魚の群れ" decoding="async" loading="lazy"
                      width="666" height="446">
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__category">
                      <div class="campaign-card__label">ライセンス講習</div>
                    </div>
                    <div class="campaign-card__title">ライセンス取得</div>
                    <div class="campaign-card__wrap">
                      <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                      <div class="campaign-card__price">
                        <p class="campaign-card__first-price">¥56,000</p>
                        <p class="campaign-card__second-price campaign-card__second-price--layout">¥46,000</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide campaign__slide">
                <div class="campaign-card">
                  <figure class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_img_2.jpg" alt="エメラルドグリーンの海と船" decoding="async"
                      loading="lazy" width="666" height="446">
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__category">
                      <div class="campaign-card__label">体験ダイビング</div>
                    </div>
                    <div class="campaign-card__title">貸切体験ダイビング</div>
                    <div class="campaign-card__wrap">
                      <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                      <div class="campaign-card__price">
                        <p class="campaign-card__first-price">¥24,000</p>
                        <p class="campaign-card__second-price campaign-card__second-price--layout">¥18,000</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide campaign__slide">
                <div class="campaign-card">
                  <figure class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_img_3.jpg" alt="クラゲの群れ" decoding="async" loading="lazy"
                      width="666" height="446">
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__category">
                      <div class="campaign-card__label">体験ダイビング</div>
                    </div>
                    <div class="campaign-card__title">ナイトダイビング</div>
                    <div class="campaign-card__wrap">
                      <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                      <div class="campaign-card__price">
                        <p class="campaign-card__first-price">¥10,000</p>
                        <p class="campaign-card__second-price campaign-card__second-price--layout">¥8,000</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide campaign__slide">
                <div class="campaign-card">
                  <figure class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_img_4.jpg" alt="ダイビング" decoding="async" loading="lazy"
                      width="666" height="446">
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__category">
                      <div class="campaign-card__label">ファンダイビング</div>
                    </div>
                    <div class="campaign-card__title">貸切ファンダイビング</div>
                    <div class="campaign-card__wrap">
                      <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                      <div class="campaign-card__price">
                        <p class="campaign-card__first-price">¥20,000</p>
                        <p class="campaign-card__second-price campaign-card__second-price--layout">¥16,000</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="campaign__button-group">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
        <div class="campaign__btn">
          <a href="page-campaign.html" class="button slide"><span>View more</span></a>
        </div>
      </div>
    </section>

    <!--About us-->
    <section class="top-about about">
      <div class="about__inner inner">
        <div class="about__section-header">
          <div class="section-header">
            <p class="section-header__title">About&nbsp;us</p>
            <h2 class="section-header__subtitle">私たちについて</h2>
          </div>
        </div>
        <div class="about__body">
          <div class="about__image-container">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_2.jpg" media="(min-width: 768px)" width="1760" height="1162">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_2-sp.jpg" alt="黄色い二匹の魚が泳いでいる様子" decoding="async" loading="lazy">
            </picture>
          </div>
          <div class="about__image-container-sub">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_1-sp.jpg" media="(min-width: 768px)" width="1212" height="800">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_1.jpg" alt="瓦屋根の上のシーサー" decoding="async" loading="lazy" width="194" height="388">
            </picture>
          </div>
          <div class="about__text-group">
            <p class="about__title">Dive into<br>the Ocean</p>
            <div class="about__group">
              <p class="about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<span
                  class="about__sp-visibility">が入ります。</span></p>
              <div class="about__btn">
                <a href="page-about.html" class="button slide"><span>View&nbsp;more</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--information-->
    <section class="top-information information">
      <div class="information__inner inner">
        <div class="information__section-header">
          <div class="section-header">
            <p class="section-header__title">Information</p>
            <h2 class="section-header__subtitle">ダイビング情報</h2>
          </div>
        </div>
        <div class="information__contents">
          <div class="information__image colorbox">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_img_1.jpg" alt="黄色い熱帯魚が泳いでいる様子" decoding="async" loading="lazy"
              width="1080" height="712">
          </div>
          <div class="information__body">
            <div class="information__title">ライセンス講習</div>
            <div class="information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
              正規登録店として、初めての方でも安心安全にライセンス取得をサポート致します。</div>
            <div class="information__btn">
              <a href="page-information.html" class="button slide"><span>View&nbsp;more</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Blog-->
    <section class="top-blog blog">
      <div class="blog__inner inner">
        <div class="blog__section-header">
          <div class="section-header">
            <p class="section-header__title section-header__title--white">Blog</p>
            <h2 class="section-header__subtitle section-header__subtitle--white">ブログ</h2>
          </div>
        </div>
        <div class="blog__contents">
          <div class="blog-cards">
            <a href="#" class="blog-cards__item blog-card">
              <figure class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img_1.jpg" alt="ピンク色のサンゴ礁" decoding="async" loading="lazy"
                  width="602" height="402">
              </figure>
              <div class="blog-card__body">
                <time datetime="2023-11-17" class="blog-card__date">2023.11/17</time>
                <h3 class="blog-card__title">ライセンス取得</h3>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
            <a href="#" class="blog-cards__item blog-card">
              <figure class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img_2.jpg" alt="ウミガメが泳いでいる様子" decoding="async" loading="lazy"
                  width="602" height="402">
              </figure>
              <div class="blog-card__body">
                <time datetime="2023-11-17" class="blog-card__date">2023.11/17</time>
                <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
            <a href="#" class="blog-cards__item blog-card">
              <figure class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img_3.jpg" alt="カクレクマノミがイソギンチャクに隠れている様子" decoding="async"
                  loading="lazy" width="602" height="402">
              </figure>
              <div class="blog-card__body">
                <time datetime="2023-11-17" class="blog-card__date">2023.11/17</time>
                <h3 class="blog-card__title">カクレクマノミ</h3>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </div>
        </div>
        <div class="blog__btn">
          <a href="page-blog.html" class="button slide"><span>View&nbsp;more</span></a>
        </div>
      </div>
    </section>

    <!--Voice-->
    <section class="top-voice voice">
      <div class="voice__inner inner">
        <div class="voice__section-header">
          <div class="section-header">
            <p class="section-header__title">Voice</p>
            <h2 class="section-header__subtitle">お客様の声</h2>
          </div>
        </div>
        <div class="voice__contents">
          <div class="voice-cards">
            <div class="voice-cards__item voice-card">
              <div class="voice-card__body">
                <div class="voice-card__container">
                  <div class="voice-card__wrap">
                    <div class="voice-card__group">
                      <div class="voice-card__info">20代(女性)</div>
                      <div class="voice-card__category">
                        <div class="voice-card__label">ライセンス講習</div>
                      </div>
                    </div>
                    <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                  </div>
                  <div class="voice-card__image">
                    <div class="voice-card__img colorbox">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_img_1.jpg" alt="麦わら帽子を被った笑顔の女性" decoding="async"
                        loading="lazy" width="360" height="280">
                    </div>
                  </div>
                </div>
                <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。</p>
              </div>
            </div>
            <div class="voice-cards__item voice-card">
              <div class="voice-card__body">
                <div class="voice-card__container">
                  <div class="voice-card__wrap">
                    <div class="voice-card__group">
                      <div class="voice-card__info">20代(男性)</div>
                      <div class="voice-card__category">
                        <div class="voice-card__label">ファンダイビング</div>
                      </div>
                    </div>
                    <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                  </div>
                  <div class="voice-card__image">
                    <div class="voice-card__img colorbox">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_img_2.jpg" alt="親指を立てた男性" decoding="async" loading="lazy"
                        width="360" height="280">
                    </div>
                  </div>
                </div>
                <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="voice__btn">
          <a href="page-voice.html" class="button slide"><span>View&nbsp;more</span></a>
        </div>
      </div>
    </section>

    <!--Price-->
    <section class="top-price price">
      <div class="price__inner inner">
        <div class="price__section-header">
          <div class="section-header">
            <p class="section-header__title">Price</p>
            <h2 class="section-header__subtitle">料金一覧</h2>
          </div>
        </div>
        <div class="price__contents">
          <div class="price__content">
            <dl class="price__list">
              <dt class="price__term">ライセンス講習</dt>
              <dd class="price__wrap">
                <p class="price__description">オープンウォーターダイバーコース</p>
                <p class="price__description">¥50,000</p>
              </dd>
              <dd class="price__wrap">
                <p class="price__description">アドバンスドオープンウォーターコース</p>
                <p class="price__description">¥60,000</p>
              </dd>
              <dd class="price__wrap">
                <p class="price__description">レスキュー＋EFRコース</p>
                <p class="price__description">¥70,000</p>
              </dd>
            </dl>
            <dl class="price__list">
              <dt class="price__term">体験ダイビング</dt>
              <dd class="price__wrap">
                <p class="price__description">ビーチ体験ダイビング(半日)</p>
                <p class="price__description">¥7,000</p>
              </dd>
              <dd class="price__wrap">
                <p class="price__description">ビーチ体験ダイビング(1日)</p>
                <p class="price__description">¥14,000</p>
              </dd>
              <dd class="price__wrap">
                <p class="price__description">ボート体験ダイビング(半日)</p>
                <p class="price__description">¥10,000</p>
              </dd>
              <dd class="price__wrap">
                <p class="price__description">ボート体験ダイビング(1日)</p>
                <p class="price__description">¥18,000</p>
              </dd>
            </dl>
            <dl class="price__list">
              <dt class="price__term">ファンダイビング</dt>
              <dd class="price__wrap">
                <p class="price__description">ビーチダイビング(2ダイブ)</p>
                <p class="price__description">¥14,000</p>
              </dd>
              <dd class="price__wrap">
                <p class="price__description">ボートダイビング(2ダイブ)</p>
                <p class="price__description">¥18,000</p>
              </dd>
              <dd class="price__wrap">
                <p class="price__description">スペシャルダイビング(2ダイブ)</p>
                <p class="price__description">¥24,000</p>
              </dd>
              <dd class="price__wrap">
                <p class="price__description">ナイトダイビング(1ダイブ)</p>
                <p class="price__description">¥10,000</p>
              </dd>
            </dl>
            <dl class="price__list">
              <dt class="price__term">スペシャルダイビング</dt>
              <dd class="price__wrap">
                <p class="price__description">貸切ダイビング(2ダイブ)</p>
                <p class="price__description">¥24,000</p>
              </dd>
              <dd class="price__wrap">
                <p class="price__description">1日ダイビング(3ダイブ)</p>
                <p class="price__description">¥32,000</p>
              </dd>
            </dl>
          </div>
          <div class="price__image colorbox">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_img_1.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_img_2.jpg" alt="ウミガメが泳いでいる様子" decoding="async" loading="lazy"
                width="1492" height="984">
            </picture>
          </div>
        </div>
        <div class="price__btn">
          <a href="page-price.html" class="button slide"><span>View&nbsp;more</span></a>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section class="top-contact contact">
      <div class="contact__inner inner">
        <div class="contact__contents">
          <div class="contact__info">
            <div class="contact__info-inner">
              <div class="contact__info-title">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-green.svg" alt="CodeUps" decoding="async" loading="lazy"
                  width="400" height="150">
              </div>
              <div class="contact__info-container">
                <div class="contact__info-text-group">
                  <p class="contact__info-text">沖縄県那覇市1-1</p>
                  <p class="contact__info-text">TEL:0120-000-0000</p>
                  <p class="contact__info-text">営業時間:8:30-19:00</p>
                  <p class="contact__info-text">定休日:毎週火曜日</p>
                </div>
                <div class="contact__info-map">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.1927241401213!2d127.69486729999998!3d26.22292675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5696278d6553b%3A0xcb44277c653ed00b!2z44CSOTAwLTAwMDYg5rKW57iE55yM6YKj6KaH5biC44GK44KC44KN44G-44Gh77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1718518289231!5m2!1sja!2sjp"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="contact__column">
            <div class="contact__column-section-header">
              <p class="contact__column-section-header-title">Contact</p>
              <h2 class="contact__column-section-header-subtitle">お問い合わせ</h2>
            </div>
            <div class="contact__column-text">ご予約・お問い合わせはコチラ</div>
            <div class="contact__column-btn">
              <a href="page-contact.html" class="button slide"><span>Contact us</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--フッター-->
  <footer class="top-footer footer">
    <div class="fooer__inner inner">
      <div class="footer__wrapper">
        <div class="footer__container">
          <a href="index.html" class="footer__logo-link">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/footer-logo.svg" alt="CodeUps" decoding="async" loading="lazy">
          </a>
          <div class="footer__icon-list">
            <a href="#" class="footer__icon-item">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.svg" alt="facebookのロゴ" decoding="async" loading="lazy">
            </a>
            <a href="#" class="footer__icon-item">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/InstagramLogo.svg" alt="instagramのロゴ" decoding="async" loading="lazy">
            </a>
          </div>
        </div>
        <nav class="footer__nav">
          <div class="footer-nav">
            <div class="footer-nav__contents">
              <div class="footer-nav__container">
                <div class="footer-nav__flex">
                  <div class="footer-nav__group">
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="page-campaign.html">キャンペーン</a>
                      </li>
                      <li class="footer-nav__body">
                        <ul class="footer-nav__lists">
                          <li class="footer-nav__list">
                            <a href="page-campaign.html#page-campaign__item01">ライセンス取得</a>
                          </li>
                          <li class="footer-nav__list">
                            <a href="page-campaign.html#page-campaign__item02">貸切体験ダイビング</a>
                          </li>
                          <li class="footer-nav__list">
                            <a href="page-campaign.html#page-campaign__item03">ナイトダイビング</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="page-about.html">私たちについて</a>
                      </li>
                    </ul>
                  </div>
                  <div class="footer-nav__group">
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="page-information.html">ダイビング情報</a>
                      </li>
                      <li class="footer-nav__body">
                        <ul class="footer-nav__lists">
                          <li class="footer-nav__list">
                            <a href="page-information.html#tab__content01">ライセンス講習</a>
                          </li>
                          <li class="footer-nav__list">
                            <a href="page-information.html#tab__content02">体験ダイビング</a>
                          </li>
                          <li class="footer-nav__list">
                            <a href="page-information.html#tab__content03">ファンダイビング</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="page-blog.html">ブログ</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="footer-nav__container">
                <div class="footer-nav__flex">
                  <div class="footer-nav__group">
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="page-voice.html">お客様の声</a>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="page-price.html">料金一覧</a>
                      </li>
                      <li class="footer-nav__body">
                        <ul class="footer-nav__lists">
                          <li class="footer-nav__list">
                            <a href="page-price.html#page-price__group01">ライセンス講習</a>
                          </li>
                          <li class="footer-nav__list">
                            <a href="page-price.html#page-price__group02">体験ダイビング</a>
                          </li>
                          <li class="footer-nav__list">
                            <a href="page-price.html#page-price__group03">ファンダイビング</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="footer-nav__group">
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="page-faq.html">よくある質問</a>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="page-privacypolicy.html">プライバシー<br class="u-mobile">ポリシー</a>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="page-terms.html">利用規約</a>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="page-sitemap.html">サイトマップ</a>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="page-contact.html">お問い合わせ</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="footer__copyright">
      <small>Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
    </div>
  </footer>
  <a href="#top" class="page-top-button js-page-top" aria-label="ページトップに移動する"></a>
</body>

</html>