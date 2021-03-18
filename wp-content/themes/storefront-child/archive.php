<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

    <div id="primary" class="content-area col-12">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) : ?>

                <header class="page-header">
                    <?php
                    the_archive_title('<h1 class="page-title mb-5">', '</h1>');
                    the_archive_description('<div class="taxonomy-description">', '</div>');
                    ?>
                </header><!-- .page-header -->

                <?php
                get_template_part('loop');

            else :

                get_template_part('content', 'none');

            endif;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    </div>
    </div>
<?= get_advantages(20) ?>
<?php
get_footer();
