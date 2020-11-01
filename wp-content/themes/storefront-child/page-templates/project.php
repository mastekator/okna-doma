<?php
/*
Template Name: project
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

</div>
</div>

<?php
global $post;
$project_id = $post->ID;
$image = get_the_post_thumbnail($project_id, 'full');
$image_url = get_the_post_thumbnail_url($project_id, 'full');
$project_params = array_filter(explode(';', get_field('project_params', $project_id)));
$project_gallery = get_post_gallery_or_custom_field(get_field('project_gallery', $project_id, false));
?>
<section class="project">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 col-12 project__image">
                <a data-fancybox="gallery" href="<?= $image_url ?>">
                    <?= apply_filters('a3_lazy_load_images', $image, null) ?>
                </a>
            </div>
            <div class="col-lg-6 col-12">
                <h1 class="project__header okna-header entry-title">
                    <?= $post->post_title ?>
                </h1>
                <div class="project__description">
                    <?php the_content() ?>
                </div>
                <?php if ($project_params): ?>
                    <ul class="project__list">
                        <?php foreach ($project_params as $project_param): ?>
                            <li><?= $project_param ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        <?php
        if (count($project_gallery) > 1): ?>
            <h2 class="okna-header">
                Галерея проекта
            </h2>
            <div class="swiper-container project__swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($project_gallery as $image_obj):
                        ?>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" href="<?= $image_obj['src'] ?>">
                                <?= apply_filters('a3_lazy_load_images', '<img src="' . $image_obj['src'] . '" />', null) ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        <?php endif; ?>
    </div>
</section>

<script>
    const oknaProject = new Swiper('.project__swiper', {
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>

<?= get_colors(127) ?>

<?php get_footer(); ?>
