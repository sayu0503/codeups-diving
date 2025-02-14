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
    <?php get_template_part('parts/breadcrumb')?>

    <!-- 下層Price -->
    <section class="layout-price page-price">
      <div class="page-price__inner inner">
        <div class="page-price__contents">
          <!-- ライセンス講習 -->
          <div class="page-price__group">
            <h2 class="page-price__title">ライセンス講習</h2>
            <div class="page-price__items">
              <?php
              $license_menus = SCF::get('license_menu');
              $license_prices = SCF::get('license_price');

              if (!empty($license_menus)) :
                foreach ($license_menus as $index => $menu) :
                  $price = isset($license_prices[$index]) ? $license_prices[$index] : '';
              ?>
                <div class="page-price__item">
                  <span class="page-price__list"><?php echo esc_html($menu); ?></span>
                  <span class="page-price__price">¥<?php echo number_format((int) $price); ?></span>
                </div>
              <?php endforeach; endif; ?>
            </div>
          </div>
          <!-- 体験ダイビング -->
          <div class="page-price__group">
            <h2 class="page-price__title">体験ダイビング</h2>
            <div class="page-price__items">
              <?php
              $experience_menus = SCF::get('experience_menu');
              $experience_prices = SCF::get('experience_price');

              if (!empty($experience_menus)) :
                foreach ($experience_menus as $index => $menu) :
                  $price = isset($experience_prices[$index]) ? $experience_prices[$index] : '';
              ?>
                <div class="page-price__item">
                  <span class="page-price__list"><?php echo esc_html($menu); ?></span>
                  <span class="page-price__price">¥<?php echo number_format((int) $price); ?></span>
                </div>
              <?php endforeach; endif; ?>
            </div>
          </div>
          <!-- ファンダイビング -->
          <div class="page-price__group">
            <h2 class="page-price__title">ファンダイビング</h2>
            <div class="page-price__items">
              <?php 
              $fundiving_menus = SCF::get('fundiving_menu');
              $fundiving_prices = SCF::get('fundiving_price');

              if (!empty($fundiving_menus)) :
                foreach ($fundiving_menus as $index => $menu) :
                  $price = isset($fundiving_prices[$index]) ? $fundiving_prices[$index] : '';
              ?>
                <div class="page-price__item">
                  <span class="page-price__list"><?php echo esc_html($menu); ?></span>
                  <span class="page-price__price">¥<?php echo number_format((int) $price); ?></span>
                </div>
              <?php endforeach; endif; ?>
            </div>
          </div>

          <!-- スペシャルダイビング -->
          <div class="page-price__group">
            <h2 class="page-price__title">スペシャルダイビング</h2>
            <div class="page-price__items">
              <?php 
              $specialdiving_menus = SCF::get('specialdiving_menu');
              $specialdiving_prices = SCF::get('specialdiving_price');

              if (!empty($specialdiving_menus)) :
                foreach ($specialdiving_menus as $index => $menu) :
                  $price = isset($specialdiving_prices[$index]) ? $specialdiving_prices[$index] : '';
              ?>
                <div class="page-price__item">
                  <span class="page-price__list"><?php echo esc_html($menu); ?></span>
                  <span class="page-price__price">¥<?php echo number_format((int) $price); ?></span>
                </div>
              <?php endforeach; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>