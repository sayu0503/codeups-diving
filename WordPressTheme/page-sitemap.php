<?php get_header(); ?>
<main>
      <!-- 下層メインビュー -->
      <div class="sub-mv" id="js-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__image">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/other_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/other_mv_sp.jpg" alt="イソギンチャクと魚の群" decoding="async" width="375" height="460">
            </picture>
          </div>
          <div class="sub-mv__title">
            <h1 class="sub-mv__section-header">Site MAP</h1>
          </div>
        </div>
      </div>

      <!-- パンくず -->
      <div class="page-bredcrumb bredcrumb">
        <div class="bredcrumb__inner inner">
          <p class="bredcrumb__text">
            <a href="index.html" class="berdcrumb__link">TOP</a></p>
          <p class="bredcrumb__text">サイトマップ</p>
        </div>
      </div>

      <!-- 下層サイトマップ -->
      <div class="layout-sitemap page-sitemap">
        <div class="page-sitemap__inner inner">
          <div class="page-sitemap__nav">
            <nav class="footer__nav">
              <div class="footer-nav">
                <div class="footer-nav__contents footer-nav__contents--layout">
                  <div class="footer-nav__container">
                    <div class="footer-nav__flex">
                      <div class="footer-nav__group">
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="page-campaign.html">キャンペーン</a>
                          </li>
                          <li class="footer-nav__body">
                            <ul class="footer-nav__lists">
                              <li class="footer-nav__list footer-nav__list--color">
                                <a href="page-campaign.html#page-campaign__item01">ライセンス取得</a>
                              </li>
                              <li class="footer-nav__list footer-nav__list--color">
                                <a href="page-campaign.html#page-campaign__item02">貸切体験ダイビング</a>
                              </li>
                              <li class="footer-nav__list footer-nav__list--color">
                                <a href="page-campaign.html#page-campaign__item03">ナイトダイビング</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="page-about.html">私たちについて</a>
                          </li>
                        </ul>
                      </div>
                      <div class="footer-nav__group">
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="page-information.html">ダイビング情報</a>
                          </li>
                          <li class="footer-nav__body">
                            <ul class="footer-nav__lists">
                              <li class="footer-nav__list footer-nav__list--color">
                                <a href="page-information.html#tab__content01">ライセンス講習</a>
                              </li>
                              <li class="footer-nav__list footer-nav__list--color">
                                <a href="page-information.html#tab__content02">体験ダイビング</a>
                              </li>
                              <li class="footer-nav__list footer-nav__list--color">
                                <a href="page-information.html#tab__content03">ファンダイビング</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
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
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="page-voice.html">お客様の声</a>
                          </li>
                        </ul>
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="page-price.html">料金一覧</a>
                          </li>
                          <li class="footer-nav__body">
                            <ul class="footer-nav__lists">
                              <li class="footer-nav__list footer-nav__list--color">
                                <a href="page-price.html#page-price__group01">ライセンス講習</a>
                              </li>
                              <li class="footer-nav__list footer-nav__list--color">
                                <a href="page-price.html#page-price__group02">体験ダイビング</a>
                              </li>
                              <li class="footer-nav__list footer-nav__list--color">
                                <a href="page-price.html#page-price__group03">ファンダイビング</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <div class="footer-nav__group">
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="page-faq.html">よくある質問</a>
                          </li>
                        </ul>
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="page-privacypolicy.html">プライバシー<br class="u-mobile">ポリシー</a>
                          </li>
                        </ul>
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="page-terms.html">利用規約</a>
                          </li>
                        </ul>
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="page-sitemap.html">サイトマップ</a>
                          </li>
                        </ul>
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
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
      </div>

<?php get_footer(); ?>