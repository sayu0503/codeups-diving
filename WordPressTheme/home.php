<?php get_header(); ?>
<main>

    <!-- 下層メインビュー -->
    <div class="sub-mv" id="js-mv">
        <div class="sub-mv__inner">
            <div class="sub-mv__image">
                <picture>
                    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_mv_sp.jpg" alt="魚の群れ" decoding="async" width="375" height="460">
                </picture>
            </div>
            <div class="sub-mv__title">
                <h1 class="sub-mv__section-header">Blog</h1>
            </div>
        </div>
    </div>

    <!-- パンくず -->
    <div class="page-bredcrumb bredcrumb">
        <div class="bredcrumb__inner inner">
            <p class="bredcrumb__text">
                <a href="index.html" class="berdcrumb__link">TOP</a>
            </p>
            <p class="bredcrumb__text">ブログ一覧</p>
        </div>
    </div>

    <!-- 下層 Blog -->
    <section class="layout-blog page-blog">
        <div class="page-blog__inner inner">
            <div class="page-blog__contents">
                <div class="page-blog__wrapper">
                    <div class="blog-cards blog-cards--layout">
                    <?php if ( have_posts() ) : ?>
                       <?php while ( have_posts() ) : the_post(); ?>
                       <a href="single-blog.html" class="blog-cards__item blog-card">
                            <figure class="blog-card__img">
                            <?php if ( has_post_thumbnail() ) : ?>
                                    <img src="<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>" alt="<?php the_title_attribute(); ?>のアイキャッチ画像">
                                <?php else : ?>
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                                <?php endif; ?>
                            </figure>
                            <div class="blog-card__body">
                                <time datetime="<?php the_time('c'); ?>" class="blog-card__date"><?php the_time('Y.m.d'); ?>
                                </time>
                                <h3 class="blog-card__title"><?php the_title(); ?></h3>
                                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                            </div>
                        </a>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>投稿が見つかりませんでした。</p>
                    <?php endif; ?>
                    </div>
                    <!-- ページナビ -->
                    <div class="page-blog__pagenavi pagenavi">
                        <div class="wp-pagenavi">
                            <a class="previouspostslink" rel="prev" href="#"></a>
                            <span class="current">1</span>
                            <a class="page smaller" href="#">2</a>
                            <a class="page smaller" href="#">3</a>
                            <a class="page larger" href="#">4</a>
                            <a class="page larger" href="#">5</a>
                            <a class="page larger" href="#">6</a>
                            <a class="nextpostslink" rel="next" href="#"></a>
                        </div>
                    </div>
                </div>

                <!-- サイドバー -->
                <div class="page-blog__sidebar sidebar">
                    <div class="sidebar__items">
                        <div class="sidebar__item">
                            <h2 class="sidebar__title">人気記事</h2>
                            <div class="sidebar__article">
                                <a href="#" class="sidebar__article-item">
                                    <div class="sidebar__article-image">
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page_blog_img1.jpg" alt="黄色い熱帯魚" decoding="async" loading="lazy"
                                            width="242" height="180">
                                    </div>
                                    <div class="sidebar__article-textbox">
                                        <time class="sidebar__article-data" datetime="2023-11-17">2023.11/17</time>
                                        <h3 class="sidebar__article-text">ライセンス取得</h3>
                                    </div>
                                </a>
                                <a href="#" class="sidebar__article-item">
                                    <div class="sidebar__article-image">
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img_2.jpg" alt="ウミガメ" decoding="async" loading="lazy"
                                            width="242" height="180">
                                    </div>
                                    <div class="sidebar__article-textbox">
                                        <time class="sidebar__article-data" datetime="2023-11-17">2023.11/17</time>
                                        <h3 class="sidebar__article-text">ウミガメと泳ぐ</h3>
                                    </div>
                                </a>
                                <a href="#" class="sidebar__article-item">
                                    <div class="sidebar__article-image">
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img_3.jpg" alt="黄色い熱帯魚" decoding="async" loading="lazy"
                                            width="242" height="180">
                                    </div>
                                    <div class="sidebar__article-textbox">
                                        <time class="sidebar__article-data" datetime="2023-11-17">2023.11/17</time>
                                        <h3 class="sidebar__article-text">カクレクマノミ</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h2 class="sidebar__title">口コミ</h2>
                            <div class="sidebar__review">
                                <div class="sidebar__review-image">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/review_img1.jpg" alt="カップル" decoding="async" loading="lazy"
                                        width="588" height="436">
                                </div>
                                <div class="sidebar__review-textbox">
                                    <div class="sidebar__review-age">30代(カップル)</div>
                                    <h3 class="sidebar__review-text">ここにタイトルが入ります。ここにタイトル</h3>
                                </div>
                                <div class="sidebar__btn">
                                    <a href="page-voice.html" class="button slide"><span>View more</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h2 class="sidebar__title">キャンペーン</h2>
                            <div class="sidebar__campaign-contents">
                                <div class="sidebar__campaign-cards">
                                    <div class="sidebar__campaign-cards-item">
                                        <div class="sidebar__campaign-card">
                                            <figure class="sidebar__campaign-card__img">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_img_1.jpg" alt="色鮮やかな魚の群れ" decoding="async"
                                                    loading="lazy" width="588" height="376">
                                            </figure>
                                            <div class="sidebar__campaign-card__body">
                                                <div class="sidebar__campaign-card__title">ライセンス取得</div>
                                                <div class="sidebar__campaign-card__wrap">
                                                    <div class="sidebar__campaign-card__text">全部コミコミ(お一人様)</div>
                                                    <div class="sidebar__campaign-card__price">
                                                        <p class="sidebar__campaign-card__first-price">¥56,000</p>
                                                        <p class="sidebar__campaign-card__second-price">¥46,000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar__campaign-cards-item">
                                        <div class="sidebar__campaign-card">
                                            <figure class="sidebar__campaign-card__img">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_img_2.jpg" alt="エメラルドグリーンの海と船" decoding="async"
                                                    loading="lazy" width="588" height="376">
                                            </figure>
                                            <div class="sidebar__campaign-card__body">
                                                <div class="sidebar__campaign-card__title">貸切体験ダイビング</div>
                                                <div class="sidebar__campaign-card__wrap">
                                                    <div class="sidebar__campaign-card__text">全部コミコミ(お一人様)</div>
                                                    <div class="sidebar__campaign-card__price">
                                                        <p class="sidebar__campaign-card__first-price">¥24,000</p>
                                                        <p class="sidebar__campaign-card__second-price">¥18,000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__btn">
                                <a href="page-campaign.html" class="button slide"><span>View more</span></a>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <div class="sidebar__title">アーカイブ</div>
                            <div class="sidebar__archive">
                                <div class="sidebar__archive-group">
                                    <h3 class="sidebar__archive-calendar js-accordion-title is-open">2023</h3>
                                    <div class="sidebar__archive-months">
                                        <li class="sidebar__archive-month">
                                            <a href="#" class="sidebar__archive-link">3月</a>
                                        </li>
                                        <li class="sidebar__archive-month">
                                            <a href="#" class="sidebar__archive-link">2月</a>
                                        </li>
                                        <li class="sidebar__archive-month">
                                            <a href="#" class="sidebar__archive-link">1月</a>
                                        </li>
                                    </div>
                                </div>
                                <div class="sidebar__archive-group">
                                    <h3 class="sidebar__archive-calendar js-accordion-title">2022</h3>
                                    <div class="sidebar__archive-months">
                                        <li class="sidebar__archive-month">
                                            <a href="#" class="sidebar__archive-link">3月</a>
                                        </li>
                                        <li class="sidebar__archive-month">
                                            <a href="#" class="sidebar__archive-link">2月</a>
                                        </li>
                                        <li class="sidebar__archive-month">
                                            <a href="#" class="sidebar__archive-link">1月</a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>