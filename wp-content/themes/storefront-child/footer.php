<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

</div><!-- .row -->
</div><!-- .container -->

<?php do_action('storefront_before_footer'); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container pt-3 pb-3">
        <div class="row">
            <div class="col-12 text-center col-lg-4 text-lg-left footer-logo mb-lg-0 mb-4">
                <div class="site-info">
                    <a class="site-title"
                       href="<?php echo esc_url(home_url('/')); ?>">
                        <?php esc_url(bloginfo('name')); ?>
                    </a>

                </div><!-- close .site-info -->
            </div>
            <div class="col-12 text-center col-lg-5 text-lg-left mb-lg-0 mb-4">
                <div class="row">

                    <?php
                    if ($menu_items = wp_get_nav_menu_items('second')) {
                        $menu_list = '';
                        echo '<div class="col-12 text-center col-md-6 text-lg-left">';
                        echo '<div class="footer-menu">';
                        echo '<ul class="menu" id="menu-second">';
                        $menu_number = 0;
                        $half_count = ceil(count($menu_items) / 2);
                        foreach ((array)$menu_items as $key => $menu_item) {
                            $title = $menu_item->title; // заголовок элемента меню (анкор ссылки)
                            $url = $menu_item->url; // URL ссылки
                            if ($menu_number !== $half_count) {
                                echo '<li class="mb-lg-3 mb-3"><a href="' . $url . '">' . $title . '</a></li>';
                            } else {
                                echo '</ul>';
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="col-12 text-center col-md-6 text-lg-left">';
                                echo '<div class="footer-menu">';
                                echo '<ul class="menu" id="menu-second_1">';
                                echo '<li class="mb-lg-3 mb-3"><a href="' . $url . '">' . $title . '</a></li>';
                            }
                            $menu_number++;
                        }
                        echo '</ul>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <div class="col-12 footer-socials text-center col-lg-3 text-lg-right">
                <p class="footer-name-p">
                    &copy; <?php echo '<a class="footer-name" href="' . home_url() . '">' . get_bloginfo('name') . '</a>'; ?>
                    , 2019 - <?php echo date('Y'); ?>
                </p>
            </div>
        </div>

    </div>


    <div class="col-full">

        <?php
        /**
         * Functions hooked in to storefront_footer action
         *
         * @hooked storefront_footer_widgets - 10
         * @hooked storefront_credit         - 20
         */
        do_action('storefront_footer');
        ?>

    </div><!-- .col-full -->
</footer><!-- #colophon -->

<?php do_action('storefront_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<script>
    $('.inc-reaction').rippleEffect()
</script>

</body>
</html>
