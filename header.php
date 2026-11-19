<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="og:http://ogp.me/ns# fb:http://ogp.me/ns/fb# website:http://ogp.me/ns/website#">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- 電話番号の自動検出無効化 -->
    <meta name="format-detection" content="telephone=no">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- loading -->
    <div id="loading" class="c-loader" role="status" aria-label="読み込み中">
        <div class="c-loader__spinner" aria-hidden="true">
            <div class="c-loader__bounce"></div>
            <div class="c-loader__bounce c-loader__bounce--2"></div>
        </div>
    </div>

    <!-- header -->
    <header id="js-header" class="l-header">
        <div class="l-header__container l-container">
            <div class="l-header__inner">
                <?php
                // トップページ：h1 / 下層ページ：div
                $logo_tag = is_front_page() ? 'h1' : 'div';
                ?>

                <!-- logo -->
                <<?php echo $logo_tag; ?> class="l-header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logo-link">
                        <!-- img（ light / dark ） -->
                        <!-- <img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo-white.png'); ?>" alt="<?php bloginfo('name'); ?>" class="l-header__logo-img l-header__logo-img--light">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo-color.png'); ?>" alt="<?php bloginfo('name'); ?>" class="l-header__logo-img l-header__logo-img--dark"> -->

                        <!-- text -->
                        <span class="l-header__logo-text"><?php bloginfo('name'); ?></span>
                    </a>
                </<?php echo $logo_tag; ?>>

                <div class="l-header__menu">
                    <!-- global-menu -->
                    <nav class="l-header__nav" aria-label="グローバルメニュー">
                        <?php get_template_part('template-parts/header-nav'); ?>
                    </nav>

                    <!-- cta-button -->
                    <div class="l-header__cta">
                        <a href="#" target="_blank" rel="noopener" class="l-header__cta-link">WEB予約</a>
                    </div>

                    <!-- drawer-menu -->
                    <div class="l-header__drawer">
                        <button type="button" id="js-hamburger" class="c-hamburger" aria-label="メニューを開く" aria-expanded="false" aria-controls="headerDrawer">
                            <span class="c-hamburger__lines" aria-hidden="true">
                                <span class="c-hamburger__line c-hamburger__line-top"></span>
                                <span class="c-hamburger__line c-hamburger__line-bottom"></span>
                            </span>
                            <span class="c-hamburger__text">
                                <span class="c-hamburger__text-menu">MENU</span>
                                <span class="c-hamburger__text-close">CLOSE</span>
                            </span>
                        </button>

                        <div id="js-overlay" class="l-header__drawer-overlay"></div>

                        <div id="headerDrawer" class="l-header__drawer-content" aria-hidden="true" inert data-lenis-prevent>
                            <div class="l-header__drawer-inner">
                                <!-- drawer-menu -->
                                <nav class="l-header__drawer-nav" aria-label="ドロワーメニュー">
                                    <?php get_template_part('template-parts/header-drawer-nav'); ?>
                                </nav>
                                <!-- drawer-contact -->
                                <div class="l-header__drawer-contact">
                                    <div class="l-header__drawer-tel">
                                        <a href="tel:012-3456-7890" class="l-header__drawer-tel-link"><span>TEL.</span>012-3456-7890</a>
                                        <span class="l-header__drawer-tel-time">受付時間 9:00～18:00</span>
                                    </div>
                                    <div class="l-header__drawer-cta">
                                        <ul class="l-header__drawer-cta-list">
                                            <li class="l-header__drawer-cta-item">
                                                <a href="#" target="_blank" rel="noopener" class="l-header__drawer-cta-link c-button">WEB予約</a>
                                            </li>
                                            <li class="l-header__drawer-cta-item">
                                                <a href="#" target="_blank" rel="noopener" class="l-header__drawer-cta-link c-button">LINE予約</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="l-header__drawer-schedule">
                                        <?php get_template_part('template-parts/schedule'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>