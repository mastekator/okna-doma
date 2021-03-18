<?php
/**
 * Template used to display post content on single pages.
 *
 * @package storefront
 */

global $post;

$post_id = $post->ID;
$image = get_the_post_thumbnail($post_id, 'full');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-content'); ?>>

    <h1 class="blog-content__title"><?= $post->post_title ?></h1>

    <?php if ($image): ?>
        <?= apply_filters('a3_lazy_load_images', $image, null) ?>
    <?php endif; ?>

    <div class="blog-content__text">
        <?php the_content(); ?>
    </div>

</article>

</div>
</div>
</div>
<?= get_advantages(20) ?>
