<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */

global $product;
$field = get_field('product_description_loop', $product->ID, false);
$gallery = get_post_gallery_or_custom_field($field);

if (!$field) {
    return;
}
$index = 0;
?>

<div class="product-description col-12">
    <h2 class="okna-header product-description__header">Описание</h2>
    <?php foreach ($gallery as $key => $image_obj):
        $imageGallery = wp_get_attachment_image($image_obj['image_id'], 'full');
        $image_url = wp_get_attachment_image_url($image_obj['image_id'], 'full'); ?>
        <div class="product-description-item row">
            <div class="col-lg-6 col-12 product-description-item__img <?= ($index + 1) % 2 === 0 ? 'order-2 offset-lg-5 offset-0' : 'order-1 offset-lg-1 offset-0' ?>">
                <a data-fancybox="gallery" href="<?= $image_url ?>">
                    <?= apply_filters('a3_lazy_load_images', $imageGallery, null) ?>
                </a>
            </div>
            <div class="col-lg-6 col-12 product-description-item__card <?= ($index + 1) % 2 === 0 ? 'order-1 offset-lg-0 offset-0' : 'order-2 offset-lg-6 offset-0' ?>">
                <div>
                    <p>
                        <?= $image_obj['description'] ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
        $index++;
    endforeach;
    $image = wp_get_attachment_image(get_field('product_image'), 'full');
    $image_url = wp_get_attachment_image_url(get_field('product_image'), 'full'); ?>

    <div class="product-description-item row">
        <div class="col-lg-6 col-12 product-description-item__img <?= ($index + 1) % 2 === 0 ? 'order-2 offset-lg-5 offset-0' : 'order-1 offset-lg-1 offset-0' ?>">
            <a data-fancybox="gallery" href="<?= $image_url ?>">
                <?= apply_filters('a3_lazy_load_images', $image, null) ?>
            </a>
            <?= apply_filters('a3_lazy_load_images', $image, null) ?>
        </div>
        <div class="col-lg-6 col-12 product-description-item__card <?= ($index + 1) % 2 === 0 ? 'order-1 offset-lg-0 offset-0' : 'order-2 offset-lg-6 offset-0' ?>">
            <div>
                <?= get_field('product_description') ?>
            </div>
        </div>
    </div>
</div>
