<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
    return;
}
?>
<div <?php wc_product_class('col-lg-6 col-12', $product); ?>>
    <a href="<?= $product->get_permalink() ?>" class="card-product inc-reaction">
        <div class="card-product__img">
            <?= apply_filters('a3_lazy_load_images',
                wp_get_attachment_image($product->get_image_id(), 'full')
                    ?: '/wp-content/themes/storefront-child/img/540x540.png', null) ?>
        </div>
        <div class="card-product__body">
            <div>
                <p class="card-product__title bottom-line">
                    <?= $product->name ?>
                </p>
                <p class="card-product__info okna-text">
                    <?= mb_strimwidth($product->description, 0, 80, '...') ?>
                </p>
            </div>
        </div>
    </a>
</div>
