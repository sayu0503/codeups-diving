<?php get_header(); ?>
<main>

    <!-- 下層メインビュー -->
    <div class="sub-mv" id="js-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_mv_sp.jpg" alt="海から顔を出すダイバー" decoding="async" width="375"
              height="460">
          </picture>
        </div>
        <div class="sub-mv__title">
          <h1 class="sub-mv__section-header">Price</h1>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <div class="page-bredcrumb bredcrumb">
      <div class="bredcrumb__inner inner">
        <p class="bredcrumb__text">
          <a href="index.html" class="berdcrumb__link">TOP</a>
        </p>
        <p class="bredcrumb__text">料金一覧</p>
      </div>
    </div>

    <!-- 下層Price -->
    <section class="layout-price page-price">
      <div class="page-price__inner inner">
        <div class="page-price__contents">
          <!-- セクション1：ライセンス講習 -->
          <div class="page-price__group" id="page-price__group01">
            <h2 class="page-price__title">ライセンス講習</h2>
            <div class="page-price__items">
              <div class="page-price__item">
                <span class="page-price__list">オープンウォーター<br class="u-mobile">ダイバーコース</span>
                <span class="page-price__price">¥50,000</span>
              </div>
              <div class="page-price__item">
                <span class="page-price__list page-price__list--layout">アドバンスド<br class="u-mobile">オープンウォーターコース</span>
                <span class="page-price__price">¥60,000</span>
              </div>
              <div class="page-price__item">
                <span class="page-price__list">レスキュー＋EFRコース</span>
                <span class="page-price__price">¥70,000</span>
              </div>
            </div>
          </div>
          <!-- セクション2：体験ダイビング -->
          <div class="page-price__group" id="page-price__group02">
            <h2 class="page-price__title">体験ダイビング</h2>
            <div class="page-price__items">
              <div class="page-price__item">
                <span class="page-price__list">ビーチ体験ダイビング<br class="u-mobile">(半日)</span>
                <span class="page-price__price">¥7,000</span>
              </div>
              <div class="page-price__item">
                <span class="page-price__list">ビーチ体験ダイビング<br class="u-mobile">(1日)</span>
                <span class="page-price__price">¥14,000</span>
              </div>
              <div class="page-price__item">
                <span class="page-price__list">ボート体験ダイビング<br class="u-mobile">(半日)</span>
                <span class="page-price__price">¥10,000</span>
              </div>
              <div class="page-price__item">
                <span class="page-price__list">ボート体験ダイビング<br class="u-mobile">(1日)</span>
                <span class="page-price__price">¥18,000</span>
              </div>
            </div>
          </div>
          <!-- セクション3：ファンダイビング -->
          <div class="page-price__group" id="page-price__group03">
            <h2 class="page-price__title">ファンダイビング</h2>
            <div class="page-price__items">
              <div class="page-price__item">
                <span class="page-price__list">ビーチダイビング<br class="u-mobile">(2ダイブ)</span>
                <span class="page-price__price">¥14,000</span>
              </div>
              <div class="page-price__item">
                <span class="page-price__list">ボートダイビング<br class="u-mobile">(2ダイブ)</span>
                <span class="page-price__price">¥18,000</span>
              </div>
              <div class="page-price__item">
                <span class="page-price__list">スペシャルダイビング<br class="u-mobile">(2ダイブ)</span>
                <span class="page-price__price">¥24,000</span>
              </div>
              <div class="page-price__item">
                <span class="page-price__list">ナイトダイビング<br class="u-mobile">(1ダイブ)</span>
                <span class="page-price__price">¥10,000</span>
              </div>
            </div>
          </div>
          <!-- セクション4：スペシャルダイビング -->
          <div class="page-price__group" id="page-price__group04">
            <h2 class="page-price__title">スペシャルダイビング</h2>
            <div class="page-price__items">
              <div class="page-price__item">
                <span class="page-price__list">貸切ダイビング<br class="u-mobile">(2ダイブ)</span>
                <span class="page-price__price">24,000</span>
              </div>
              <div class="page-price__item">
                <span class="page-price__list">1日ダイビング<br class="u-mobile">(3ダイブ)</span>
                <span class="page-price__price">¥32,000</span>
              </div>
              <div class="page-price__item">
                <span class="page-price__list">1日ダイナイトダイビング<br class="u-mobile">(2ダイブ)</span>
                <span class="page-price__price">¥14,000</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>