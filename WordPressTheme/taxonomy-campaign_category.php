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

    <div class="layout-campaign page-campaign">
      <div class="page-campaign__inner inner">
        <div class="page-campaign__category category">
          <div class="category__items">
            
          <?php
    // 「ALL」タブ（カスタム投稿タイプのアーカイブページ）
    $all_class = is_post_type_archive('campaign') ? 'is-active' : '';
    ?>
    <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="category__item <?php echo esc_attr($all_class); ?>">
        <p class="category__item-text">ALL</p>
    </a>

    <?php
    // タクソノミー "campaign_category" のターム一覧を取得
    $terms = get_terms([
        'taxonomy'   => 'campaign_category', // タクソノミーのスラッグ
        'hide_empty' => true, // 投稿がないタームは非表示
        'orderby'    => 'name', // 名前順で並び替え
        'order'      => 'ASC', // 昇順
    ]);

    // タームごとのタブリンクを生成
    if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $term) :
            // タームのアーカイブページURLを取得
            $term_link = get_term_link($term);

            // 現在のタームページなら "is-active" クラスを追加
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
                <div class="page-campaign__item" id="page-campaign__item01">
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
                            // カスタムタクソノミー "genre" のタームを取得
                            $terms = get_the_terms(get_the_ID(), 'campaign_category'); // スラッグを正しく設定

                            // タクソノミーが設定されていれば、最初のターム名を取得
                            $term_name = !empty($terms) && !is_wp_error($terms) ? $terms[0]->name : '未分類';
                            ?>
                            <div class="campaign-card__label"><?php echo esc_html($term_name); ?></div>
                            </div>
                            <div class="campaign-card__title campaign__title--size"><?php the_title(); ?></div>
                            <div class="campaign-card__wrap">
                            <div class="campaign-card__text campaign-card__text--layout">全部コミコミ(お一人様)</div>
                            <div class="campaign-card__price">
                                <p class="campaign-card__first-price"><?php the_field('first_price'); ?></p>
                                <p class="campaign-card__second-price campaign-card__second-price--layout"><?php the_field('second_price'); ?></p>
                            </div>
                            <div class="campaign-card__content u-desktop">
                                <p class="campaign-card__text-item">
                                <?php the_content(); ?>
                                <div class="campaign-card__meta">
                                <time class="campaign-card__date" datetime="2023-06-01"><?php the_field('discount_start_date'); ?></time><span>-</span><time
                                    class="campaign-card__date" datetime="2023-09-30"><?php the_field('discount_end_date'); ?></time>
                                <p class="campaign-card__comment">ご予約・お問い合わせはコチラ</p>
                                </div>
                                <div class="campaign-card__apply">
                                <a href="page-contact.html" class="button slide"><span>Contact&nbsp;us</span></a>
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