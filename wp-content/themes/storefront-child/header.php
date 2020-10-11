<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="/wp-content/themes/storefront-child/inc/assets/css/swiper.min.css">
</head>

<body <?php body_class(); ?>>

<?php do_action('storefront_before_site'); ?>

<div id="page" class="hfeed site">
    <?php do_action('storefront_before_header'); ?>

    <div class="header-wrapper">
        <header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-xl p-0 justify-content-between">
                    <div class="navbar-brand">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="/wp-content/themes/storefront-child/svg/header-okna.svg"
                                 alt="<?= esc_attr(get_bloginfo('name')) ?>">
                        </a>
                    </div>

                    <div class="d-flex">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => 'div',
                            'container_id' => '',
                            'container_class' => 'collapse navbar-collapse justify-content-end mr-5',
                            'menu_id' => false,
                            'menu_class' => 'navbar-nav',
                            'depth' => 3,
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                        ?>

                        <div class="outer-menu">
                            <button class="navbar-toggler position-relative" type="button" style="z-index: 1">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <input class="checkbox-toggle" data-toggle="collapse" data-target="#main-nav"
                                   aria-controls="" aria-expanded="false" aria-label="Toggle navigation"
                                   type="checkbox"/>
                            <div class="menu">
                                <div>
                                    <div class="border-header">
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'primary',
                                            'container' => 'div',
                                            'container_id' => 'main-nav',
                                            'container_class' => 'collapse navbar-collapse justify-content-end',
                                            'menu_id' => false,
                                            'menu_class' => 'navbar-nav',
                                            'depth' => 3,
                                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                            'walker' => new wp_bootstrap_navwalker()
                                        ));
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $phone = get_field('phone', 14);
                    if ($phone):?>
                        <a class="site-header__phone" href="tel:<?= $phone ?>">
                            <?= $phone ?>
                        </a>
                    <?php endif; ?>
                </nav>
            </div>

        </header>

        <div class="container header-wrapper__container">
            <h1 class="header-wrapper__title">
                <?= get_field('main_text', 20)
                    ?: 'Замеры на <strong>следующий день*</strong> после заявки' ?>
            </h1>
            <button class="btn btn-okna-primary inc-reaction" data-title="Оформите заявку на замеры" data-toggle="modal"
                    data-target="#orderModal">
                Оставить заявку
            </button>
            <p class="header-wrapper__small">
                <?= get_field('small_text', 20) ?: '*Дата замеров может отличаться в зависимости от расположения относительно офиса' ?>
            </p>
        </div>
    </div>

    <?php if (function_exists('yoast_breadcrumb') && !is_front_page()): ?>
        <div class="breadcrumb">
            <div class="container">
                <?php yoast_breadcrumb('<p class="breadcrumb-primary" id="breadcrumbs">', '</p>'); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php
    /**
     * Functions hooked in to storefront_before_content
     *
     * @hooked storefront_header_widget_region - 10
     * @hooked woocommerce_breadcrumb - 10
     */
    do_action('storefront_before_content');
    ?>

    <div id="content" class="site-content">
        <div class="container">
            <div class="row">

<?php
do_action('storefront_content_top');
