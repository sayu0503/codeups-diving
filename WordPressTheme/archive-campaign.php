<?php get_header(); ?>
<main>

    <!-- 下層メインビュー -->
    <div class="sub-mv" id="js-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_mv.jpg" media="(min-width: 768px)" width="1440"
              height="548">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_mv_sp.jpg" alt="黄色い熱帯魚が2匹泳いでいる様子" decoding="async" width="375"
              height="460">
          </picture>
        </div>
        <div class="sub-mv__title">
          <h1 class="sub-mv__section-header">Campaign</h1>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb')?>

    <!-- 下層キャンペーン -->
    <div class="layout-campaign page-campaign">
      <div class="page-campaign__inner inner">
        <div class="page-campaign__category category">
          <div class="category__items">

          <?php
    $all_class = is_post_type_archive('campaign') ? 'is-active' : '';
    ?>
    <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="category__item <?php echo esc_attr($all_class); ?>">
        <p class="category__item-text">ALL</p>
    </a>

    <?php
    $terms = get_terms([
        'taxonomy'   => 'campaign_category',
        'hide_empty' => true,
        'orderby'    => 'name',
        'order'      => 'ASC',
    ]);

    if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $term) :
            $term_link = get_term_link($term);

            $term_class = (is_tax('campaign_category', $term->term_id)) ? 'is-active' : '';
            ?>
            <a href="<?php echo esc_url($term_link); ?>" class="category__item <?php echo esc_attr($term_class); ?>">
                <p class="category__item-text"><?php echo esc_html($term->name); ?></p>
            </a>
        <?php endforeach;
    endif; ?>
          </div>
        </div>

        <div class="page-campaign__items">
                    <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <?php
                $post_slug = get_post_field('post_name', get_the_ID());
            ?>
                <div class="page-campaign__item" id="page-campaign-<?php echo esc_attr($post_slug); ?>">
                        <div class="campaign-card">
                        <figure class="campaign-card__img">
                                                <?php if ( has_post_thumbnail() ) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>" alt="<?php the_title_attribute(); ?>のアイキャッチ画像">
                        <?php else : ?>
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                        <?php endif; ?>
                        </figure>
                        <div class="campaign-card__body campaign-card__body--layout">
                            <div class="campaign-card__category">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'campaign_category');

                            $term_name = !empty($terms) && !is_wp_error($terms) ? $terms[0]->name : '未分類';
                            ?>
                            <div class="campaign-card__label"><?php echo esc_html($term_name); ?></div>
                            </div>
                            <div class="campaign-card__title campaign__title--size"><?php the_title(); ?></div>
                            <div class="campaign-card__wrap">
                            <div class="campaign-card__text campaign-card__text--layout">全部コミコミ(お一人様)</div>
                            <?php
                                  $first_price = get_field('first_price');   // 通常価格
                                  $second_price = get_field('second_price'); // 割引価格

                                  // 通常価格と割引価格の表示ルール
                                  if (!empty($second_price)) {
                                      // 割引価格がある場合 → 通常価格と割引価格を表示
                                      if (!empty($first_price)) { ?>
                                          <div class="campaign-card__price">
                                              <p class="campaign-card__first-price"><?php echo esc_html($first_price); ?></p>
                                              <p class="campaign-card__second-price campaign-card__second-price--layout"><?php echo esc_html($second_price); ?></p>
                                          </div>
                                      <?php } else { ?>
                                          <!-- 通常価格がない場合は割引価格のみ表示 -->
                                          <div class="campaign-card__price">
                                              <p class="campaign-card__second-price"><?php echo esc_html($second_price); ?></p>
                                          </div>
                                      <?php }
                                  }
                                  ?>

                            <div class="campaign-card__content u-desktop">
                                <p class="campaign-card__text-item">
                                <?php the_content(); ?>
                                <div class="campaign-card__meta">
                                                                  <?php
                                  $start_date = get_field('discount_start_date');
                                  $end_date = get_field('discount_end_date');

                                  // 両方が存在する場合のみ表示
                                  if ($start_date && $end_date): ?>
                                      <time class="campaign-card__date"><?php echo esc_html($start_date); ?></time>
                                      <span>-</span>
                                      <time class="campaign-card__date"><?php echo esc_html($end_date); ?></time>
                                  <?php endif; ?>
                                <p class="campaign-card__comment">ご予約・お問い合わせはコチラ</p>
                                </div>
                                <div class="campaign-card__apply">
                                <a href="<?php echo esc_url(home_url("/contact")) ?>" class="button slide"><span>Contact&nbsp;us</span></a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else : ?>
                <p>投稿が見つかりませんでした。</p>
            <?php endif; ?>
        </div>

        <!-- ページナビ -->
        <div class="page-campaign__pagenavi pagenavi">
        <?php wp_pagenavi(); ?>
      </div>
    </div>

<?php get_footer(); ?>