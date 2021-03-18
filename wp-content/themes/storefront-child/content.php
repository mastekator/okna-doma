<?php
/**
 * Template used to display post content.
 *
 * @package storefront
 */

global $post;

$post_id = $post->ID;
$image = get_the_post_thumbnail($post_id, 'full');
?>

<a href="<?= get_permalink($post_id) ?>"
   id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4 col-md-6 col-12 inc-reaction mb-3'); ?>>
    <div class="post-card">
        <?php if ($image): ?>
            <?= apply_filters('a3_lazy_load_images', $image, null) ?>
        <?php else: ?>
            <img src="/wp-content/themes/storefront-child/img/540x350.png" alt="">
        <?php endif; ?>
        <div class="post-card__body">
            <p class="post-card__category"><?= get_the_category($post_id)[0]->name ?></p>
            <h2 class="post-card__title"><?= $post->post_title ?></h2>
            <p class="post-card__description"><?= mb_strimwidth($post->post_content, 0, 155, '...') ?></p>
        </div>
    </div>
</a>
