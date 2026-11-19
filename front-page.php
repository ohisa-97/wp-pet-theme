<?php get_header(); ?>

<main class="l-main">
    <!-- main-visual -->
    <div class="p-index-mv">
        <div class="p-index-mv__inner">
            <!-- slider -->
            <div class="p-index-mv__slider swiper">
                <div class="p-index-mv__slider-wrapper swiper-wrapper">
                    <div class="p-index-mv__slider-item swiper-slide">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/index-slide01.jpg'); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/index-slide01.jpg'); ?>" alt="" class="p-index-mv__slider-image">
                        </picture>
                    </div>
                    <div class="p-index-mv__slider-item swiper-slide">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/index-slide02.jpg'); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/index-slide02.jpg'); ?>" alt="" class="p-index-mv__slider-image">
                        </picture>
                    </div>
                    <div class="p-index-mv__slider-item swiper-slide">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/index-slide03.jpg'); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/index-slide03.jpg'); ?>" alt="" class="p-index-mv__slider-image">
                        </picture>
                    </div>
                </div>
            </div>
            <!-- catch -->
            <div class="p-index-mv__catch">
                <div class="p-index-mv__catch-inner">
                    <span class="p-index-mv__catch-main">
                        大切な家族との<br>
                        あたたかな毎日を<br class="u-sp-only">支えたい
                    </span>
                    <span class="p-index-mv__catch-sub">
                        私たちは動物たちとご家族の気持ちに寄り添いながら、安心して通える診療をご提供しております。<br>
                        小さな不安もお気軽にご相談ください。
                    </span>
                </div>
            </div>
            <!-- post -->
            <?php get_template_part('template-parts/main-visual-post'); ?>
        </div>
    </div>

    <!-- news -->
    <section class="p-index-news">
        <div class="l-container l-container--lg">
            <div class="p-index-news__inner">
                <h2 class="p-index-title js-fade-in">
                    <span class="p-index-title__en">News</span>
                    <span class="p-index-title__jp">お知らせ</span>
                </h2>
                <div class="p-index-news__content js-fade-up">
                    <div class="p-index-news__list">
                        <?php
                        $news_query = new WP_Query([
                            'post_type'      => 'news',
                            'posts_per_page' => 3, // 表示する記事数
                        ]);
                        ?>

                        <?php if ($news_query->have_posts()) : ?>
                            <?php while ($news_query->have_posts()) : $news_query->the_post();
                                $news_categories = get_the_terms(get_the_ID(), 'news_category');
                            ?>

                                <article class="c-news-item">
                                    <div class="c-news-item__body">
                                        <div class="c-news-item__meta">
                                            <time class="c-news-item__date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                                                <?php echo esc_html(get_the_date('Y.m.d')); ?>
                                            </time>

                                            <?php if ($news_categories && !is_wp_error($news_categories)) : ?>
                                                <div class="c-news-item__categories">
                                                    <?php foreach ($news_categories as $category) : ?>
                                                        <a href="<?php echo esc_url(get_term_link($category)); ?>" class="c-category c-category--news">
                                                            <?php echo esc_html($category->name); ?>
                                                        </a>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                        <p class="c-news-item__title">
                                            <a href="<?php the_permalink(); ?>" class="c-news-item__link">
                                                <?php the_title(); ?>
                                            </a>
                                        </p>
                                        <span class="c-news-item__arrow"></span>
                                    </div>
                                </article>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>

                        <?php else : ?>
                            <p class="p-index-news__empty">現在、お知らせはありません。</p>
                        <?php endif; ?>
                    </div>

                    <div class="p-index-news__button">
                        <a href="<?php echo home_url('/news/'); ?>" class="c-button">一覧を見る</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about -->
    <section class="p-index-about u-mb-section">
        <div class="l-container l-container--lg">
            <div class="p-index-about__content js-fade-in">
                <h2 class="p-index-about__copy">
                    大切な家族の毎日に、<br>
                    安心と健やかさを
                </h2>
                <p class="p-index-about__text">
                    私たちは、動物たちが健やかに、そして飼い主さまと一緒に穏やかな毎日を過ごせることを大切にしています。<br>
                    病気やけがの治療はもちろん、日々の健康管理や予防、ちょっとした気になる変化についても、気軽にご相談いただける動物病院を目指しています。<br>
                    「ここに相談してよかった」と思っていただける、身近で頼れる存在として、動物たちとご家族のこれからに寄り添ってまいります。
                </p>
                <div class="p-index-about__button">
                    <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c-button">当院について</a>
                </div>
            </div>
            <div class="p-index-about__image js-blur-in">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/index-about.jpg'); ?>" alt="">
            </div>
        </div>
    </section>

    <!-- treatments -->
    <section class="p-index-treatments u-mb-section">
        <div class="l-container l-container--lg">
            <div class="p-index-treatments__head js-fade-in">
                <div class="p-index-treatments__desc">
                    <h2 class="p-index-title">
                        <span class="p-index-title__en">Medical Information</span>
                        <span class="p-index-title__jp">診療案内</span>
                    </h2>
                    <p class="p-index-treatments__text">
                        犬・猫をはじめ、うさぎ、鳥、ハムスターなどの小動物から爬虫類まで幅広い動物の診療に対応しています。<br>
                        日々の健康管理や予防医療から、病気や慢性疾患の治療、外科手術まで、動物たちの状態やご家族のご希望に合わせた診療を行っています。いまどんな状態なのか、これからどんな治療を行うのかを分かりやすく丁寧にご説明し、ご家族と一緒により良い治療を考えていきます。
                    </p>
                </div>
                <div class="p-index-treatments__button">
                    <a href="<?php echo esc_url(home_url('/treatments/')); ?>" class="c-button">詳しく見る</a>
                </div>
            </div>
            <div class="p-index-treatments__content js-stagger">
                <a href="<?php echo esc_url(home_url('/treatments/#general')); ?>" class="c-treatments-card">
                    <div class="c-treatments-card__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/general.png'); ?>" alt="">
                    </div>
                    <h3 class="c-treatments-card__title">
                        <span class="c-treatments-card__title-jp">一般診療</span>
                        <span class="c-treatments-card__title-en">General Practice</span>
                    </h3>
                    <div class="c-treatments-card__body">
                        <span class="c-treatments-card__arrow"></span>
                    </div>
                </a>
                <a href="<?php echo esc_url(home_url('/treatments/#prevention')); ?>" class="c-treatments-card">
                    <div class="c-treatments-card__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/prevention.png'); ?>" alt="">
                    </div>
                    <h3 class="c-treatments-card__title">
                        <span class="c-treatments-card__title-jp">予防医療</span>
                        <span class="c-treatments-card__title-en">Prevention</span>
                    </h3>
                    <div class="c-treatments-card__body">
                        <span class="c-treatments-card__arrow"></span>
                    </div>
                </a>
                <a href="<?php echo esc_url(home_url('/treatments/#checkup')); ?>" class="c-treatments-card">
                    <div class="c-treatments-card__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/checkup.png'); ?>" alt="">
                    </div>
                    <h3 class="c-treatments-card__title">
                        <span class="c-treatments-card__title-jp">健康診断</span>
                        <span class="c-treatments-card__title-en">Checkup</span>
                    </h3>
                    <div class="c-treatments-card__body">
                        <span class="c-treatments-card__arrow"></span>
                    </div>
                </a>
                <a href="<?php echo esc_url(home_url('/treatments/#advanced')); ?>" class="c-treatments-card">
                    <div class="c-treatments-card__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/advanced.png'); ?>" alt="">
                    </div>
                    <h3 class="c-treatments-card__title">
                        <span class="c-treatments-card__title-jp">高度医療</span>
                        <span class="c-treatments-card__title-en">Advanced Care</span>
                    </h3>
                    <div class="c-treatments-card__body">
                        <span class="c-treatments-card__arrow"></span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- features -->
    <section class="p-index-features">
        <div class="p-index-features__container">
            <div class="p-index-features__head l-container l-container--lg js-fade-in">
                <h2 class="p-index-title p-index-title--center">
                    <span class="p-index-title__en">Feature</span>
                    <span class="p-index-title__jp">当院の特徴</span>
                </h2>
            </div>
            <div class="p-index-features__body js-fade-in">

                <!-- 1つ目のアイテム -->
                <article class="p-index-features__item">
                    <div class="p-index-features__item-inner l-container--lg">
                        <div class="p-index-features__content">
                            <h3 class="p-index-features__copy">幅広い動物に対応</h3>
                            <p class="p-index-features__text">
                                犬・猫だけでなく、うさぎ、鳥、ハムスターなどの小動物から爬虫類まで、幅広い動物を診療しています。
                            </p>
                            <div class="p-index-features__button">
                                <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c-button">詳しく見る</a>
                            </div>
                        </div>
                        <div class="p-index-features__image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/index-feature_1.jpg'); ?>" alt="">
                        </div>
                    </div>
                </article>

                <!-- 2つ目のアイテム -->
                <article class="p-index-features__item">
                    <div class="p-index-features__item-inner l-container--lg">
                        <div class="p-index-features__content">
                            <h3 class="p-index-features__copy">丁寧で分かりやすい診療</h3>
                            <p class="p-index-features__text">
                                動物の状態や検査結果、治療の必要性について、飼い主さまに分かりやすく丁寧にご説明します。
                            </p>
                            <div class="p-index-features__button">
                                <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c-button">詳しく見る</a>
                            </div>
                        </div>
                        <div class="p-index-features__image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/index-feature_2.jpg'); ?>" alt="">
                        </div>
                    </div>
                </article>

                <!-- 3つ目のアイテム -->
                <article class="p-index-features__item">
                    <div class="p-index-features__item-inner l-container--lg">
                        <div class="p-index-features__content">
                            <h3 class="p-index-features__copy">予防から治療・手術まで</h3>
                            <p class="p-index-features__text">
                                ワクチンや健康診断、日々の健康管理などの予防医療から、外科手術まで幅広く対応しています。
                            </p>
                            <div class="p-index-features__button">
                                <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c-button">詳しく見る</a>
                            </div>
                        </div>
                        <div class="p-index-features__image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/index-feature_3.jpg'); ?>" alt="">
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- blog -->
    <section class="p-index-blog">
        <div class="p-index-blog__head l-container l-container--lg">
            <h2 class="p-index-title js-fade-in">
                <span class="p-index-title__en">Blog</span>
                <span class="p-index-title__jp">ブログ</span>
            </h2>
        </div>

        <?php
        $blog_query = new WP_Query([
            'post_type'      => 'post',
            'posts_per_page' => 8,
        ]);
        ?>

        <?php if ($blog_query->have_posts()) : ?>

            <div class="p-index-blog__container js-fade-in">
                <div class="swiper p-index-blog__swiper">
                    <div class="swiper-wrapper">
                        <?php while ($blog_query->have_posts()) : $blog_query->the_post();
                            $categories = get_the_category();
                        ?>
                            <article class="swiper-slide p-index-blog__card">
                                <figure class="p-index-blog__thumbnail">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/thumbnail.jpg'); ?>" alt="">
                                    <?php endif; ?>
                                </figure>
                                <time class="p-index-blog__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                    <?php echo esc_html(get_the_date('Y.m.d')); ?>
                                </time>
                                <div class="p-index-blog__content">
                                    <h3 class="p-index-blog__title">
                                        <a href="<?php the_permalink(); ?>" class="p-index-blog__link">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>

                                    <?php if (!empty($categories)) : ?>
                                        <div class="p-index-blog__categories">
                                            <?php foreach ($categories as $category) : ?>
                                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="c-category">
                                                    <?php echo esc_html($category->name); ?>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                </div>

            </div>

            <div class="p-index-blog__bottom">
                <div class=" l-container l-container--lg">
                    <div class="p-index-blog__navigation">
                        <button type="button" class="p-index-blog__arrow p-index-blog__arrow--prev p-index-blog__prev" aria-label="前のブログ記事へ">
                            <span class="p-index-blog__arrow--left" aria-hidden="true"></span>
                        </button>

                        <button type="button" class="p-index-blog__arrow p-index-blog__arrow--next p-index-blog__next" aria-label="次のブログ記事へ">
                            <span class="p-index-blog__arrow--right" aria-hidden="true"></span>
                        </button>
                    </div>

                    <div class="p-index-blog__button">
                        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="c-button">一覧を見る</a>
                    </div>
                </div>
            </div>

        <?php else : ?>
            <div class="p-index-blog__empty l-container l-container--lg">
                <p class="p-index-blog__empty-text">現在、ブログ記事はありません。</p>
            </div>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

    </section>

    <!-- flow -->
    <section class="p-index-flow">
        <div class="l-container l-container--lg">
            <div class="p-index-flow__content js-fade-in">
                <h2 class="p-index-title">
                    <span class="p-index-title__en">First Visit</span>
                    <span class="p-index-title__jp">初診の方へ</span>
                </h2>
                <p class="p-index-flow__text">
                    初めてのご来院でも安心して受診いただけるよう、診療の流れやご持参いただきたいものなどをご案内しています。<br>
                    わからないことや気になることがありましたら、どうぞお気軽にご相談ください。
                </p>
                <div class="p-index-flow__button">
                    <a href="<?php echo esc_url(home_url('/flow/')); ?>" class="c-button">一覧を見る</a>
                </div>
            </div>
            <div class="p-index-flow__image js-blur-in">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/index-flow.jpg'); ?>" alt="">
            </div>
        </div>
    </section>

    <!-- access -->
    <section class="p-index-access" id="access">
        <div class="l-container l-container--lg">
            <h2 class="p-index-title">
                <span class="p-index-title__en">Access</span>
                <span class="p-index-title__jp">アクセス</span>
            </h2>
            <div class="p-index-access__content">
                <div class="p-index-access__map js-blur-in">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d847.3842587691652!2d141.3518626012202!3d43.062474218856366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b29d1c4b013ff%3A0x7c91cc0a1acdcbb2!2z44ixSO-9pU_vvaVDIOacrOmDqA!5e0!3m2!1sja!2sjp!4v1791176922924!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
                <div class="p-index-access__desc js-fade-in">
                    <dl class="p-index-access__list">
                        <dt class="c-content-title">バスでお越しの方</dt>
                        <dd>「○○○」バス停より徒歩△分</dd>
                        <dt class="c-content-title">電車でお越しの方</dt>
                        <dd>
                            <ul class="c-list">
                                <li class="c-list__item">「○○○」駅より徒歩△分</li>
                                <li class="c-list__item">「○○○」駅より徒歩△分</li>
                                <li class="c-list__item">「○○○」駅より徒歩△分</li>
                            </ul>
                        </dd>
                        <dt class="c-content-title">お車でお越しの方</dt>
                        <dd>駐車場△台完備</dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>