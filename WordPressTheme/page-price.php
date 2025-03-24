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
      <?php
      $license_menus = SCF::get('license_menu');
      $license_prices = SCF::get('license_price');

      // コースと料金が両方揃っているデータのみ抽出
      $valid_license_items = [];
      if (!empty($license_menus) && !empty($license_prices)) {
        foreach ($license_menus as $index => $menu) {
          $price = isset($license_prices[$index]) ? $license_prices[$index] : '';
          if (!empty($menu) && !empty($price)) {
            $valid_license_items[] = ['menu' => $menu, 'price' => $price];
          }
        }
      }

      // 表示判定（揃っているデータが1件以上ある場合に表示）
      if (!empty($valid_license_items)) : ?>
        <div class="page-price__group" id="page-price__group01">
          <h2 class="page-price__title">ライセンス講習</h2>
          <div class="page-price__items">
            <?php foreach ($valid_license_items as $item) : ?>
              <div class="page-price__item">
                <span class="page-price__list"><?php echo esc_html($item['menu']); ?></span>
                <span class="page-price__price">¥<?php echo number_format((int)$item['price']); ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- 体験ダイビング -->
      <?php
      $experience_menus = SCF::get('experience_menu');
      $experience_prices = SCF::get('experience_price');

      $valid_experience_items = [];
      if (!empty($experience_menus) && !empty($experience_prices)) {
        foreach ($experience_menus as $index => $menu) {
          $price = isset($experience_prices[$index]) ? $experience_prices[$index] : '';
          if (!empty($menu) && !empty($price)) {
            $valid_experience_items[] = ['menu' => $menu, 'price' => $price];
          }
        }
      }

      if (!empty($valid_experience_items)) : ?>
        <div class="page-price__group" id="page-price__group02">
          <h2 class="page-price__title">体験ダイビング</h2>
          <div class="page-price__items">
            <?php foreach ($valid_experience_items as $item) : ?>
              <div class="page-price__item">
                <span class="page-price__list"><?php echo esc_html($item['menu']); ?></span>
                <span class="page-price__price">¥<?php echo number_format((int)$item['price']); ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- ファンダイビング -->
      <?php
      $fundiving_menus = SCF::get('fundiving_menu');
      $fundiving_prices = SCF::get('fundiving_price');

      $valid_fundiving_items = [];
      if (!empty($fundiving_menus) && !empty($fundiving_prices)) {
        foreach ($fundiving_menus as $index => $menu) {
          $price = isset($fundiving_prices[$index]) ? $fundiving_prices[$index] : '';
          if (!empty($menu) && !empty($price)) {
            $valid_fundiving_items[] = ['menu' => $menu, 'price' => $price];
          }
        }
      }

      if (!empty($valid_fundiving_items)) : ?>
        <div class="page-price__group" id="page-price__group03">
          <h2 class="page-price__title">ファンダイビング</h2>
          <div class="page-price__items">
            <?php foreach ($valid_fundiving_items as $item) : ?>
              <div class="page-price__item">
                <span class="page-price__list"><?php echo esc_html($item['menu']); ?></span>
                <span class="page-price__price">¥<?php echo number_format((int)$item['price']); ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- スペシャルダイビング -->
      <?php
      $specialdiving_menus = SCF::get('specialdiving_menu');
      $specialdiving_prices = SCF::get('specialdiving_price');

      $valid_specialdiving_items = [];
      if (!empty($specialdiving_menus) && !empty($specialdiving_prices)) {
        foreach ($specialdiving_menus as $index => $menu) {
          $price = isset($specialdiving_prices[$index]) ? $specialdiving_prices[$index] : '';
          if (!empty($menu) && !empty($price)) {
            $valid_specialdiving_items[] = ['menu' => $menu, 'price' => $price];
          }
        }
      }

      if (!empty($valid_specialdiving_items)) : ?>
        <div class="page-price__group">
          <h2 class="page-price__title">スペシャルダイビング</h2>
          <div class="page-price__items">
            <?php foreach ($valid_specialdiving_items as $item) : ?>
              <div class="page-price__item">
                <span class="page-price__list"><?php echo esc_html($item['menu']); ?></span>
                <span class="page-price__price">¥<?php echo number_format((int)$item['price']); ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>


<?php get_footer(); ?>