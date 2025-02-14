<?php get_header(); ?>
<main>
    <!-- 下層メインビュー -->
    <div class="sub-mv" id="js-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_mv-sp.jpg" alt="黄色い熱帯魚が2匹泳いでいる様子" decoding="async" width="375"
              height="460">
          </picture>
        </div>
        <div class="sub-mv__title">
          <h1 class="sub-mv__section-header">About us</h1>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb')?>

<!-- 下層About us -->
<div class="layout-about page-about">
    <div class="page-about__inner inner">
        <div class="about__body about__body--offset">
            <div class="about__image-container about__image-container--layout">
                <picture>
                    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_2.jpg" media="(min-width: 768px)" width="1760"
                        height="1162">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_2-sp.jpg" alt="黄色い二匹の魚が泳いでいる様子" decoding="async" loading="lazy"
                        width="562" height="372">
                </picture>
            </div>
            <div class="about__image-container-sub u-desktop">
                <picture>
                    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_1-sp.jpg" media="(min-width: 768px)" width="1212"
                        height="800">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_1.jpg" alt="瓦屋根の上のシーサー" decoding="async" loading="lazy"
                        width="194" height="388">
                </picture>
            </div>
            <div class="about__text-group about__text-group">
                <p class="about__title about__title--absolute">Dive into<br>the Ocean</p>
                <div class="about__group">
                    <p class="about__text about__text--layout">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery -->
<section class="layout-gallery gallery">
    <div class="gallery__inner inner">
        <div class="section-header">
            <p class="section-header__title section-header__title--line-height"> Gallery</p>
            <h2 class="section-header__subtitle section-header__subtitle--layout">フォト</h2>
        </div>
        <div class="gallery__contents">
            <div class="gallery__image js-modal-open">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery1.jpg" alt="赤い小さな魚の群れ" decoding="async" loading="lazy" width="1492"
                    height="984">
            </div>
            <div class="gallery__image js-modal-open">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery2.jpg" alt="海に浮かぶ船" decoding="async" loading="lazy" width="1160"
                    height="738">
            </div>
            <div class="gallery__image js-modal-open">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery3.jpg" alt="縞模様の熱帯魚" decoding="async" loading="lazy" width="1160"
                    height="738">
            </div>
            <div class="gallery__image js-modal-open">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery4.jpg" alt="黄色い熱帯魚" decoding="async" loading="lazy" width="1160"
                    height="738">
            </div>
            <div class="gallery__image js-modal-open">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery5.jpg" alt="魚の群れ" decoding="async" loading="lazy" width="1160"
                    height="738">
            </div>
            <div class="gallery__image js-modal-open">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery6.jpg" alt="黄色い熱帯魚" decoding="async" loading="lazy" width="1492"
                    height="984">
            </div>
            <!-- モーダル -->
            <div class="modal js-modal">
                <div class="modal__image">
                    <img src="" alt="拡大写真" class="modal__img js-modal-img">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>