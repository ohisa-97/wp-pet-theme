<?php

// -------------------------------------------
// ▶▶ テーマの基本設定
// -------------------------------------------
function theme_setup()
{
    // タイトルタグの自動生成を有効化
    add_theme_support('title-tag');

    // アイキャッチ画像のサポートを有効化
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

// -------------------------------------------
// ▶▶ テーマファイルのキャッシュ対策
// -------------------------------------------
function theme_asset_version($path)
{
    $file_path = get_template_directory() . $path;

    // ファイルの更新日時をバージョンとして使用
    if (file_exists($file_path)) {
        return filemtime($file_path);
    }

    // ファイルが存在しない場合はテーマのバージョンを使用
    return wp_get_theme()->get('Version');
}

// -------------------------------------------
// ▶▶ CSSの読み込み
// -------------------------------------------
function get_theme_styles()
{
    return [

        // 外部CSS
        'sanitize' => [
            'url'     => 'https://unpkg.com/sanitize.css@13.0.0/sanitize.css',
            'version' => '13.0.0',
        ],

        'google-fonts' => [
            'url'     => 'https://fonts.googleapis.com/css2?family=Nunito&family=Zen+Maru+Gothic:wght@400;500&display=swap',
            'version' => null,
        ],

        // 'material-symbols' => [
        //     'url'     => 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap',
        //     'version' => null,
        // ],

        'swiper-style' => [
            'url'     => 'https://cdn.jsdelivr.net/npm/swiper@11.2.10/swiper-bundle.min.css',
            'version' => '11.2.10',
        ],

        'lightbox-style' => [
            'url'     => 'https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css',
            'version' => '2.11.3',
        ],


        // テーマ内CSS
        'theme-style' => [
            'path'    => '/css/style.min.css',
            'version' => theme_asset_version('/css/style.min.css'),
        ],
    ];
}

// -------------------------------------------
// ▶▶ CSSをエンキューする
// -------------------------------------------
function enqueue_custom_styles()
{
    $styles = get_theme_styles();

    foreach ($styles as $handle => $data) {

        // 外部CSS
        if (!empty($data['url'])) {
            wp_enqueue_style(
                $handle,
                $data['url'],
                [],
                $data['version']
            );
        }

        // テーマ内CSS
        elseif (!empty($data['path'])) {
            wp_enqueue_style(
                $handle,
                get_template_directory_uri() . $data['path'],
                [],
                $data['version']
            );
        }
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

// -------------------------------------------
// ▶▶ JSの読み込み
// -------------------------------------------
function get_theme_scripts()
{
    return [

        // 外部JS
        'gsap' => [
            'url'     => 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
            'version' => '3.12.5',
            'depends' => [],
        ],

        'gsap-scrolltrigger' => [
            'url'     => 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
            'version' => '3.12.5',
            'depends' => ['gsap'],
        ],

        'lenis' => [
            'url'     => 'https://cdn.jsdelivr.net/npm/lenis@1.3.11/dist/lenis.min.js',
            'version' => '1.3.11',
            'depends' => [],
        ],

        'swiper' => [
            'url'     => 'https://cdn.jsdelivr.net/npm/swiper@11.2.10/swiper-bundle.min.js',
            'version' => '11.2.10',
            'depends' => [],
        ],

        'lightbox' => [
            'url'     => 'https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js',
            'version' => '2.11.3',
            'depends' => ['jquery'],
        ],


        // テーマ内JS
        'loader' => [
            'path'    => '/js/common/loader.js',
            'version' => theme_asset_version('/js/common/loader.js'),
            'depends' => [],
        ],

        'header' => [
            'path'    => '/js/common/header.js',
            'version' => theme_asset_version('/js/common/header.js'),
            'depends' => [],
        ],

        'smooth-scroll' => [
            'path'    => '/js/common/smooth-scroll.js',
            'version' => theme_asset_version('/js/common/smooth-scroll.js'),
            'depends' => ['lenis'],
        ],

        'scroll-animation' => [
            'path'    => '/js/common/scroll-animation.js',
            'version' => theme_asset_version('/js/common/scroll-animation.js'),
            'depends' => ['gsap', 'gsap-scrolltrigger'],
        ],

        'viewport-optimize' => [
            'path'    => '/js/common/viewport-optimize.js',
            'version' => theme_asset_version('/js/common/viewport-optimize.js'),
            'depends' => [],
        ],
        
        'main-visual' => [
            'path'    => '/js/pages/main-visual.js',
            'version' => theme_asset_version('/js/pages/main-visual.js'),
            'depends' => ['swiper'],
        ],

        'features-animation' => [
            'path'    => '/js/pages/features-animation.js',
            'version' => theme_asset_version('/js/pages/features-animation.js'),
            'depends' => ['gsap', 'gsap-scrolltrigger'],
        ],

        'blog-slider' => [
            'path'    => '/js/pages/blog-slider.js',
            'version' => theme_asset_version('/js/pages/blog-slider.js'),
            'depends' => ['swiper'],
        ],

        'monthly-archive' => [
            'path'    => '/js/pages/monthly-archive.js',
            'version' => theme_asset_version('/js/pages/monthly-archive.js'),
            'depends' => [],
        ],

        'faq-accordion' => [
            'path'    => '/js/components/faq-accordion.js',
            'version' => theme_asset_version('/js/components/faq-accordion.js'),
            'depends' => [],
        ],

        'return-top-button' => [
            'path'    => '/js/components/return-top-button.js',
            'version' => theme_asset_version('/js/components/return-top-button.js'),
            'depends' => [],
        ],

        'fixed-cta-button' => [
            'path'    => '/js/components/fixed-cta-button.js',
            'version' => theme_asset_version('/js/components/fixed-cta-button.js'),
            'depends' => [],
        ],

        

    ];
}

// -------------------------------------------
// ▶▶ JSをエンキューする
// -------------------------------------------
function enqueue_custom_scripts()
{
    $scripts = get_theme_scripts();

    foreach ($scripts as $handle => $data) {

        // 外部JS
        if (!empty($data['url'])) {
            wp_enqueue_script(
                $handle,
                $data['url'],
                $data['depends'],
                $data['version'],
                true
            );
        }

        // テーマ内JS
        elseif (!empty($data['path'])) {
            wp_enqueue_script(
                $handle,
                get_template_directory_uri() . $data['path'],
                $data['depends'],
                $data['version'],
                true
            );
        }
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// -------------------------------------------
// ▶▶ Google Fonts への事前接続（フォント読み込みの高速化）
// -------------------------------------------
function add_google_fonts_preconnect()
{
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action('wp_head', 'add_google_fonts_preconnect', 1);

// -------------------------------------------
// ▶▶ サイドバーを有効化
// -------------------------------------------
// function theme_slug_widgets_init()
// {
//     register_sidebar(array(
//         'name' => 'サイドバー',
//         'id' => 'sidebar',
//     ));
// }
// add_action('widgets_init', 'theme_slug_widgets_init');

// -------------------------------------------
// ▶▶ Contact Form 7の自動整形を無効化
// -------------------------------------------
add_filter('wpcf7_autop_or_not', '__return_false');

// -------------------------------------------
// ▶▶ 管理画面のカスタマイズ
// -------------------------------------------

//  管理画面から「コメント」を非表示   
function custom_remove_menus()
{
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'custom_remove_menus');

// 管理画面に「HP更新方法」を追加 
function add_custom_menu_page()
{
    add_menu_page(
        'Custom Menu Page',
        'HP更新方法',
        'edit_posts',
        'custom-menu-page',
        'custom_menu_page_content',
        'dashicons-admin-page',
        2
    );
}
add_action('admin_menu', 'add_custom_menu_page');

// 管理画面に追加した「HP更新方法」ページのコンテンツを定義
function custom_menu_page_content()
{
?>
    <div class="wrap">
        <h2>HP更新方法</h2>
        <?php
        $pdf_url = get_stylesheet_directory_uri() . '/pdf/WP更新方法マニュアル.pdf';
        ?>
        <embed src="<?php echo esc_url($pdf_url); ?>" type="application/pdf" width="100%" height="800px" />
    </div>
<?php
}

// -------------------------------------------
// ▶▶ カスタム投稿タイプ：お知らせ
// -------------------------------------------
function custom_news_post_type()
{
    $labels = array(
        'name'          => 'お知らせ',
        'singular_name' => 'お知らせ',
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'news'),
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-megaphone',
        'supports'      => array('title', 'editor'),
        'show_in_rest'  => true,
        'taxonomies'    => array('news_category'),
    );

    register_post_type('news', $args);
}
add_action('init', 'custom_news_post_type');

// お知らせタクソノミーの追加
function add_news_taxonomy()
{
    $labels = array(
        'name'          => 'お知らせカテゴリー',
        'singular_name' => 'お知らせカテゴリー',
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'hierarchical'      => true,
        'rewrite'           => array('slug' => 'news-category'),
        'show_admin_column' => true,
        'show_in_rest'      => true,
    );

    register_taxonomy('news_category', 'news', $args);
}
add_action('init', 'add_news_taxonomy');

// -------------------------------------------
// ▶▶ カスタム投稿タイプ：FAQ（よくあるご質問）
// -------------------------------------------
function custom_faq_post_type()
{
    $labels = array(
        'name'          => 'FAQ',
        'singular_name' => 'FAQ',
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'faq'),
        'menu_position' => 6,
        'menu_icon'     => 'dashicons-editor-help',
        'supports'      => array('title', 'editor'),
        'show_in_rest'  => true,
        'taxonomies'    => array('faq_category'),
    );

    register_post_type('faq', $args);
}
add_action('init', 'custom_faq_post_type');

// FAQタクソノミーの追加
function add_faq_taxonomy()
{
    $labels = array(
        'name'          => 'FAQカテゴリー',
        'singular_name' => 'FAQカテゴリー',
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'hierarchical'      => true,
        'rewrite'           => array('slug' => 'faq-category'),
        'show_admin_column' => true,
        'show_in_rest'      => true,
    );

    register_taxonomy('faq_category', 'faq', $args);
}
add_action('init', 'add_faq_taxonomy');

// FAQ 構造化データ（JSON-LD形式）自動生成
function add_faq_jsonld()
{
    if (! is_post_type_archive('faq')) {
        return;
    }
    global $wp_query;
    if (empty($wp_query->posts)) {
        return;
    }
    $main_entity = [];

    foreach ($wp_query->posts as $post) {

        $question = get_the_title($post->ID);
        $answer   = get_post_field('post_content', $post->ID);

        if (! $question || ! $answer) {
            continue;
        }

        $answer = apply_filters('the_content', $answer);
        $answer = wp_strip_all_tags($answer, true);
        $answer = trim(preg_replace('/\s+/', ' ', $answer));

        $main_entity[] = [
            '@type'          => 'Question',
            'name'           => wp_strip_all_tags($question),
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => wp_kses_post($answer),
            ],
        ];
    }

    if (empty($main_entity)) {
        return;
    }

    $structured_data = [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $main_entity,
    ];
?>

    <script type="application/ld+json">
        <?php echo wp_json_encode($structured_data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>
    </script>
<?php
}
add_action('wp_head', 'add_faq_jsonld');
