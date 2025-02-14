<?php get_header(); ?>
<main>

<!-- 下層メインビュー -->
<div class="sub-mv" id="js-mv">
  <div class="sub-mv__inner">
    <div class="sub-mv__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq_mv_sp.jpg" alt="ビーチ" decoding="async" width="375" height="460">
      </picture>
    </div>
    <div class="sub-mv__title">
      <h1 class="sub-mv__section-header">FAQ</h1>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb')?>

<!-- 下層FAQ -->
<div class="layout-faq page-faq">
  <div class="page-faq__inner inner">
    <div class="page-faq__content accordion__items">
    <?php 
      // SCFからFAQデータを取得
      $faq_list = SCF::get('faq_list');

      // FAQが登録されている場合のみループを実行
      if (!empty($faq_list)) :
        foreach ($faq_list as $faq) :
          $question = esc_html($faq['question']); // 質問
          $answer = nl2br(esc_html($faq['answer'])); // 答え（改行を有効にする）
      ?>
      <dl class="accordion__item">
        <dt class="accordion__header"><?php echo $question; ?></dt>
        <dd class="accordion__content"><?php echo $answer; ?></dd>
      </dl>
      <?php
        endforeach;
      endif;
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>