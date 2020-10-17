<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

global $post;

?>

<button class="btn btn-okna-primary inc-reaction product__order">
    Оформить заказ
</button>

<div class="product__meta">
    <p>
        <span>Категории: </span>
        <?php
        $terms = get_the_terms($post->ID, 'product_cat');
        foreach ($terms as $key => $term) {
            echo $term->name;
            echo array_key_last($terms) === $key ? '.' : ', ';
        } ?>
    </p>
</div>
