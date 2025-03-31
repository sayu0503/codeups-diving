<?php 
function my_theme_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap',
        array(),
        null
    );

    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
        array(),
        '8.0'
    );

    // メインCSS
    wp_enqueue_style(
        'theme-style',
        get_theme_file_uri('/assets/css/style.css'),
        array(),
        filemtime(get_theme_file_path('/assets/css/style.css')) // キャッシュ対策
    );

    // jQuery（WordPressの同梱バージョンではなくCDN版を使用）
    wp_enqueue_script(
        'jquery-cdn',
        'https://code.jquery.com/jquery-3.6.0.js',
        array(),
        '3.6.0',
        true // フッターに読み込む
    );

    // jQuery Inview
    wp_enqueue_script(
        'jquery-inview',
        get_theme_file_uri('/assets/js/jquery.inview.min.js'),
        array('jquery'),
        filemtime(get_theme_file_path('/assets/js/jquery.inview.min.js')),
        true
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
        array(),
        '8.0',
        true
    );

    // GSAP
    wp_enqueue_script(
        'gsap',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
        array(),
        '3.12.5',
        true
    );

    // メインJS
    wp_enqueue_script(
        'theme-script',
        get_theme_file_uri('/assets/js/script.js'),
        array('jquery'),
        filemtime(get_theme_file_path('/assets/js/script.js')),
        true
    );

    // GSAPカスタムスクリプト
    wp_enqueue_script(
        'theme-gsap',
        get_theme_file_uri('/assets/js/gsap.js'),
        array('gsap'),
        filemtime(get_theme_file_path('/assets/js/gsap.js')),
        true
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = 'ブログ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新しい'.$name;
    }
    function Change_objectlabel() {
    global $wp_post_types;
    $name = 'ブログ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
    }
    add_action( 'init', 'Change_objectlabel' );
    add_action( 'admin_menu', 'Change_menulabel' );

    function my_setup() {
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );
    }
    add_action( 'after_setup_theme', 'my_setup' );

function change_posts_per_page($query) {
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    if ($query->is_post_type_archive('campaign')) {
        $query->set('posts_per_page', 4);
    }

    if ($query->is_post_type_archive('voice')) {
        $query->set('posts_per_page', 6);
    }
}
add_action('pre_get_posts', 'change_posts_per_page');

add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

function add_campaign_options_to_cf7($tag) {
    if ($tag['name'] !== 'campaign') {
        return $tag;
    }

    $args = array(
        'post_type'      => 'campaign',
        'posts_per_page' => 3,
        'orderby'        => 'date',
        'order'          => 'DESC'
    );

    $campaigns = get_posts($args);
    $options = array('キャンペーン内容を選択');

    if (!empty($campaigns)) {
        foreach ($campaigns as $post) {
            $options[] = $post->post_title;
        }
    } else {
        $options[] = 'キャンペーンがありません';
    }

    $tag['raw_values'] = $options;
    $tag['values'] = $options;

    return $tag;
}
add_filter('wpcf7_form_tag', 'add_campaign_options_to_cf7', 10, 1);



function getPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
      return '0 PV';
    }
    return $count.' PV';
  }

  function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
    } else {
      $count++;
      update_post_meta($postID, $count_key, $count);
    }
  }

  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

  function custom_archive_title($title){
    $titleParts=explode(': ',$title);
    if($titleParts[1]){
        return $titleParts[1];
    }
    return $title;
}
add_filter('get_the_archive_title','custom_archive_title');

function login_logo() {
    echo '<style type="text/css">
      #login h1 a {
        background: url('.get_template_directory_uri().'/assets/images/common/logo-green.svg) no-repeat center;
        background-size: contain;
        width: 266px;
        height: 150px;
      }

    }
    </style>';
  }
  add_action('login_head', 'login_logo');

  function custom_login_logo_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'custom_login_logo_url' );

//サムネイルカラム追加
function customize_manage_posts_columns($columns) {
    $columns['thumbnail'] = __('Thumbnail');
    return $columns;
}
add_filter( 'manage_posts_columns', 'customize_manage_posts_columns' );

//サムネイル画像表示
function customize_manage_posts_custom_column($column_name, $post_id) {
    if ( 'thumbnail' == $column_name) {
        $thum = get_the_post_thumbnail($post_id, 'small', array( 'style'=>'width:100px;height:auto;' ));
    } if ( isset($thum) && $thum ) {
        echo $thum;
    } else {
        echo __('None');
    }
}
add_action( 'manage_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2 );



// ウィジェットを3つ追加
function add_client_shortcut_widgets() {
    wp_add_dashboard_widget('content_update_widget', '📝 コンテンツ更新', 'content_update_widget_content');
    wp_add_dashboard_widget('info_edit_widget', '🔧 情報編集', 'info_edit_widget_content');
    wp_add_dashboard_widget('media_manage_widget', '🖼️ メディア管理', 'media_manage_widget_content');
}

// CSSスタイル
function client_shortcut_widget_styles() {
    ?>
    <style>
        /* 共通ボタンスタイル */
        .shortcut-container {
            display: flex;
            gap: 10px;
        }

        .shortcut-container:not(:first-child) {
            margin-top: 20px;
        }

        .shortcut-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: calc(50% - 7.5px);  /* 横並び2列 */
            min-height: 50px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            background: #408F95;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .shortcut-btn:hover {
            text-decoration: none;
            color: #fff;
            transform: translateY(-5px);
            box-shadow: 0 0 2px rgba(0,0,0,0.2);
        }

        .btn-view {
            background: #959595;
        }

        /* アイコンスタイル */
        .dashicons {
            font-size: 20px;
        }

        /* ウィジェットのマージン調整 */
        .shortcut-widget {
            margin-bottom: 20px;
        }
    </style>
    <?php
}
add_action('admin_head', 'client_shortcut_widget_styles');


// 📝 コンテンツ更新ウィジェット
function content_update_widget_content() {
    ?>
    <div class="shortcut-container">
        <a href="<?php echo admin_url('edit.php?post_type=post'); ?>" class="shortcut-btn btn-view">
            <span class="dashicons dashicons-admin-post"></span>ブログ一覧
        </a>
        <a href="<?php echo admin_url('post-new.php'); ?>" class="shortcut-btn">
            <span class="dashicons dashicons-plus"></span>ブログ新規追加
        </a>
    </div>
    <div class="shortcut-container">
        <a href="<?php echo admin_url('edit.php?post_type=campaign'); ?>" class="shortcut-btn btn-view">
            <span class="dashicons dashicons-megaphone"></span>キャンペーン一覧
        </a>
        <a href="<?php echo admin_url('post-new.php?post_type=campaign'); ?>" class="shortcut-btn">
            <span class="dashicons dashicons-plus"></span>キャンペーン新規追加
        </a>
     </div>
     <div class="shortcut-container">
        <a href="<?php echo admin_url('edit.php?post_type=voice'); ?>" class="shortcut-btn btn-view">
            <span class="dashicons dashicons-format-status"></span>お客様の声一覧
        </a>
        <a href="<?php echo admin_url('post-new.php?post_type=voice'); ?>" class="shortcut-btn ">
            <span class="dashicons dashicons-plus"></span>お客様の声新規追加
        </a>
    </div>
    <?php
}

// 🔧 情報編集ウィジェット
function info_edit_widget_content() {
    ?>
    <div class="shortcut-container">
        <a href="<?php echo admin_url('post.php?post=11&action=edit'); ?>" class="shortcut-btn">
            <span class="dashicons dashicons-money"></span>料金一覧
        </a>
        <a href="<?php echo admin_url('post.php?post=13&action=edit'); ?>" class="shortcut-btn">
            <span class="dashicons dashicons-editor-help"></span>よくある質問
        </a>
    </div>
    <?php
}

// 🖼️ メディア管理ウィジェット
function media_manage_widget_content() {
    ?>
    <div class="shortcut-container">
        <a href="<?php echo admin_url('post.php?post=21&action=edit'); ?>" class="shortcut-btn" title="ファーストビュー画像を管理します">
            <span class="dashicons dashicons-admin-home"></span>ファーストビュー
        </a>
        <a href="<?php echo admin_url('post.php?post=7&action=edit'); ?>" class="shortcut-btn" title="ギャラリー画像を追加・変更します">
            <span class="dashicons dashicons-format-gallery"></span>ギャラリー画像
        </a>
    </div>
    <?php
}

// ダッシュボードにウィジェット追加
add_action('wp_dashboard_setup', 'add_client_shortcut_widgets');
