<?php get_header(); ?>


  <main>
    <!-- メインビュー -->
    <?php
        $top_page_id = get_option('page_on_front');
        $mv_sliders = SCF::get('mv_slider', $top_page_id);
    ?>

        <div class="mv" id="js-mv">
          <div class="mv__inner">
            <?php if (!empty($mv_sliders)): ?>
              <div class="swiper js-mv-swiper">
                <div class="swiper-wrapper">
                  <?php foreach ($mv_sliders as $slide): ?>
                    <?php
                      $image_pc_url = wp_get_attachment_url($slide['mv_image_pc']);
                      $image_sp_url = wp_get_attachment_url($slide['mv_image_sp']);
                      $alt_text = esc_attr($slide['mv_alt']);
                    ?>
                    <div class="swiper-slide">
                      <picture>
                        <source srcset="<?php echo esc_url($image_pc_url); ?>" media="(min-width: 768px)" width="2880" height="1536">
                        <img src="<?php echo esc_url($image_sp_url); ?>" alt="<?php echo $alt_text; ?>" decoding="async" width="750" height="1334">
                      </picture>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php else: ?>
              <p>スライダー画像が設定されていません。</p>
            <?php endif; ?>

            <div class="mv__title-wrap">
              <p class="mv__title">diving</p>
              <p class="mv__subtitle">into the ocean</p>
            </div>
          </div>
        </div>

    <!-- Campaign -->
    <section class="top-campaign campaign">
  <div class="campaign__inner inner">
    <div class="campaign__section-header">
      <div class="section-header">
        <p class="section-header__title">Campaign</p>
        <h2 class="section-header__subtitle">キャンペーン</h2>
      </div>
    </div>
    <div class="campaign__container">
      <div class="swiper js-campaign-swiper">
        <div class="swiper-wrapper">
          <?php
          $args = array(
            'post_type'      => 'campaign',
            'posts_per_page' => 4,
          );
          $campaign_query = new WP_Query($args);
          ?>

          <?php if ($campaign_query->have_posts()): ?>
            <?php while ($campaign_query->have_posts()): $campaign_query->the_post(); ?>
              <div class="swiper-slide campaign__slide">
                <div class="campaign-card">
                  <figure class="campaign-card__img">
                    <?php if (has_post_thumbnail()): ?>
                      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title_attribute(); ?>" decoding="async" loading="lazy">
                    <?php else: ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="No Image" decoding="async" loading="lazy">
                    <?php endif; ?>
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__category">
                      <?php
                      // カスタムタクソノミー 'campaign_category' からカテゴリー名を取得
                      $terms = get_the_terms(get_the_ID(), 'campaign_category');
                      $term_name = !empty($terms) && !is_wp_error($terms) ? $terms[0]->name : '未分類';
                      ?>
                      <div class="campaign-card__label"><?php echo esc_html($term_name); ?></div>
                    </div>
                    <div class="campaign-card__title"><?php the_title(); ?></div>
                    <div class="campaign-card__wrap">
                      <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                      <div class="campaign-card__price">
                        <p class="campaign-card__first-price"><?php the_field('first_price'); ?></p>
                        <p class="campaign-card__second-price campaign-card__second-price--layout"><?php the_field('second_price'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php else: ?>
            <p>現在キャンペーンはありません。</p>
          <?php endif; ?>
        </div>
      </div>
      <div class="campaign__button-group">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <div class="campaign__btn">
      <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="button slide"><span>View more</span></a>
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
                <a href="<?php echo esc_url(home_url("/about-us")) ?>" class="button slide"><span>View&nbsp;more</span></a>
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
              <a href="<?php echo esc_url(home_url("/information")) ?>" class="button slide"><span>View&nbsp;more</span></a>
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
        <?php
        $args = array(
          'posts_per_page' => 3,
        );
        $blog_query = new WP_Query($args);
        ?>

        <?php if ($blog_query->have_posts()): ?>
          <?php while ($blog_query->have_posts()): $blog_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
              <figure class="blog-card__img">
                <?php if (has_post_thumbnail()): ?>
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title_attribute(); ?>" decoding="async" loading="lazy">
                <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="No Image" decoding="async" loading="lazy">
                <?php endif; ?>
              </figure>
              <div class="blog-card__body">
                <time datetime="<?php the_time('c'); ?>" class="blog-card__date"><?php the_time('Y.m.d'); ?></time>
                <h3 class="blog-card__title"><?php the_title(); ?></h3>
                <p class="blog-card__text"><?php echo wp_trim_words(get_the_excerpt(), 90, '...'); ?></p>
              </div>
            </a>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p>現在、ブログ記事はありません。</p>
        <?php endif; ?>
      </div>
    </div>
    <div class="blog__btn">
      <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="button slide"><span>View&nbsp;more</span></a>
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
        <?php
        $args = array(
          'post_type'      => 'voice',
          'posts_per_page' => 2,
        );
        $voice_query = new WP_Query($args);
        ?>

        <?php if ($voice_query->have_posts()): ?>
          <?php while ($voice_query->have_posts()): $voice_query->the_post(); ?>
            <div class="voice-cards__item voice-card">
              <div class="voice-card__body">
                <div class="voice-card__container">
                  <div class="voice-card__wrap">
                    <div class="voice-card__group">
                      <div class="voice-card__info"><?php the_field('age'); ?> (<?php the_field('gender'); ?>)</div>
                      <div class="voice-card__category">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'voice_category');
                        $term_name = !empty($terms) && !is_wp_error($terms) ? $terms[0]->name : '未分類';
                        ?>
                        <div class="voice-card__label"><?php echo esc_html($term_name); ?></div>
                      </div>
                    </div>
                    <h3 class="voice-card__title"><?php the_title(); ?></h3>
                  </div>
                  <div class="voice-card__image">
                    <div class="voice-card__img colorbox">
                      <?php if (has_post_thumbnail()): ?>
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title_attribute(); ?>" decoding="async" loading="lazy">
                      <?php else: ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="No Image" decoding="async" loading="lazy">
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <p class="voice-card__text"><?php echo wp_trim_words(get_the_content(), 200, '...'); ?></p>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p>現在、お客様の声はありません。</p>
        <?php endif; ?>
      </div>
    </div>
    <div class="voice__btn">
      <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="button slide"><span>View more</span></a>
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
        <?php

        $price_page_id = 11;

        // データ取得
        $categories = [
            'license' => ['menu' => SCF::get('license_menu', $price_page_id), 'price' => SCF::get('license_price', $price_page_id)],
            'experience' => ['menu' => SCF::get('experience_menu', $price_page_id), 'price' => SCF::get('experience_price', $price_page_id)],
            'fundiving' => ['menu' => SCF::get('fundiving_menu', $price_page_id), 'price' => SCF::get('fundiving_price', $price_page_id)],
            'specialdiving' => ['menu' => SCF::get('specialdiving_menu', $price_page_id), 'price' => SCF::get('specialdiving_price', $price_page_id)],
        ];

        // カテゴリー名の表示用ラベル
        $labels = [
            'license' => 'ライセンス講習',
            'experience' => '体験ダイビング',
            'fundiving' => 'ファンダイビング',
            'specialdiving' => 'スペシャルダイビング'
        ];

        // メニューと価格を表示する関数
        function display_price_list($menus, $prices) {
            if (empty($menus) || empty($prices)) return false;  // 両方ない場合は表示しない

            $has_data = false;
            foreach ($menus as $index => $menu) {
                if (!empty($menu) && isset($prices[$index]) && $prices[$index] !== '') {
                    $has_data = true;
                    ?>
                    <dd class="price__wrap">
                        <p class="price__description"><?php echo esc_html($menu); ?></p>
                        <p class="price__description">¥<?php echo number_format((int) $prices[$index]); ?></p>
                    </dd>
                    <?php
                }
            }
            return $has_data;
        }
        ?>

    <div class="price__content">
        <?php foreach ($categories as $key => $data): ?>
            <?php
            ob_start();  // 出力バッファリング開始
            $has_content = display_price_list($data['menu'], $data['price']);
            $output = ob_get_clean();  // バッファ内容取得
            ?>

            <?php if ($has_content): ?>
                <dl class="price__list">
                    <dt class="price__term"><?php echo $labels[$key]; ?></dt>
                    <?php echo $output; ?>
                </dl>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

          <div class="price__image colorbox">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_img_1.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_img_2.jpg" alt="ウミガメが泳いでいる様子" decoding="async" loading="lazy"
                width="1492" height="984">
            </picture>
          </div>
          </div>
        </div>
        <div class="price__btn">
          <a href="<?php echo esc_url(home_url("/price")) ?>" class="button slide"><span>View&nbsp;more</span></a>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>