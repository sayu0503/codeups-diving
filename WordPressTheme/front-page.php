<?php get_header(); ?>


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

    <?php get_footer(); ?>