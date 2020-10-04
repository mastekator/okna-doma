<?php
/**
 * Richbee functions and definitions
 *
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );
/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style()
{
    wp_dequeue_style('storefront-style');
    wp_dequeue_style('storefront-woocommerce-style');
}


/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */
function enqueue_child_theme_styles()
{
// load bootstrap css
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/inc/assets/css/bootstrap.min.css', false, NULL, 'all');
// load bootstrap css
// load WP Bootstrap Starter styles
    wp_enqueue_style('wp-bootstrap-starter-style', get_stylesheet_uri(), array('theme'));
    if (get_theme_mod('theme_option_setting') && get_theme_mod('theme_option_setting') !== 'default') {
        wp_enqueue_style('wp-bootstrap-starter-' . get_theme_mod('theme_option_setting'), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/' . get_theme_mod('theme_option_setting') . '.css', false, '');
    }

    wp_enqueue_script('jQuery', get_stylesheet_directory_uri() . '/inc/assets/js/jquery-3.4.1.slim.min.js', array(), '1.0', false);
    wp_enqueue_style('ripple-effect', get_stylesheet_directory_uri() . '/inc/assets/css/ripple-effect.css', array(), '1.0', false);
    wp_enqueue_script('ripple-effect-js', get_stylesheet_directory_uri() . '/inc/assets/js/ripple-effect.min.js', array(), '1.0', true);


    // Internet Explorer HTML5 support
    wp_enqueue_script('html5hiv', get_template_directory_uri() . '/inc/assets/js/html5.js', array(), '3.7.0', false);
    wp_script_add_data('html5hiv', 'conditional', 'lt IE 9');

    // load swiper js and css
    wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/inc/assets/js/swiper.min.js', array(), '1.0', false);
    wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/inc/assets/css/swiper.min.css', array(), '1.0', true);

    // load bootstrap js
    wp_enqueue_script('wp-bootstrap-starter-popper', get_stylesheet_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true);
    wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_stylesheet_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true);
    wp_enqueue_script('wp-bootstrap-starter-themejs', get_stylesheet_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true);
    wp_enqueue_script('wp-bootstrap-starter-skip-link-focus-fix', get_stylesheet_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    //enqueue my child theme stylesheet
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('theme'));
}

add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

remove_action('wp_head', 'feed_links_extra', 3); // убирает ссылки на rss категорий
remove_action('wp_head', 'feed_links', 2); // минус ссылки на основной rss и комментарии
remove_action('wp_head', 'rsd_link');  // сервис Really Simple Discovery
remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer
remove_action('wp_head', 'wp_generator');  // скрыть версию wordpress

/**
 * Load custom WordPress nav walker.
 */
if (!class_exists('wp_bootstrap_navwalker')) {
    require_once(get_stylesheet_directory() . '/inc/wp_bootstrap_navwalker.php');
}

/**
 * Удаление json-api ссылок
 */
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('template_redirect', 'rest_output_link_header', 11);

/**
 * Cкрываем разные линки при отображении постов блога (следующий, предыдущий, короткий url)
 */
remove_action('wp_head', 'start_post_rel_link', 10);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
remove_action('wp_head', 'wp_shortlink_wp_head', 10);

/**
 * `Disable Emojis` Plugin Version: 1.7.2
 */
if ('Отключаем Emojis в WordPress') {

    /**
     * Disable the emoji's
     */
    function disable_emojis()
    {
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
        add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
        add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
    }

    add_action('init', 'disable_emojis');

    /**
     * Filter function used to remove the tinymce emoji plugin.
     *
     * @param array $plugins
     * @return  array Difference between the two arrays
     */
    function disable_emojis_tinymce($plugins)
    {
        if (is_array($plugins)) {
            return array_diff($plugins, array('wpemoji'));
        }

        return array();
    }

    /**
     * Remove emoji CDN hostname from DNS prefetching hints.
     *
     * @param array $urls URLs to print for resource hints.
     * @param string $relation_type The relation type the URLs are printed for.
     * @return array                 Difference betwen the two arrays.
     */
    function disable_emojis_remove_dns_prefetch($urls, $relation_type)
    {

        if ('dns-prefetch' === $relation_type) {

            // Strip out any URLs referencing the WordPress.org emoji location
            $emoji_svg_url_bit = 'https://s.w.org/images/core/emoji/';
            foreach ($urls as $key => $url) {
                if (strpos($url, $emoji_svg_url_bit) !== false) {
                    unset($urls[$key]);
                }
            }

        }

        return $urls;
    }

}

/**
 * Удаляем стили для recentcomments из header'а
 */
function remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}

add_action('widgets_init', 'remove_recent_comments_style');

/**
 * Удаляем ссылку на xmlrpc.php из header'а
 */
remove_action('wp_head', 'wp_bootstrap_starter_pingback_header');

/**
 * Удаляем стили для #page-sub-header из  header'а
 */
remove_action('wp_head', 'wp_bootstrap_starter_customizer_css');

/*
*Обновление количества товара
*/
add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment');

function header_add_to_cart_fragment($fragments)
{
    global $woocommerce;
    ob_start();
    ?>
    <span class="basket-btn__counter"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
    <?php
    $fragments['.basket-btn__counter'] = ob_get_clean();
    return $fragments;
}

/**
 * Замена надписи на кнопке Добавить в корзину
 */
add_filter('woocommerce_product_single_add_to_cart_text', 'woocust_change_label_button_add_to_cart_single');
function woocust_change_label_button_add_to_cart_single($label)
{
    $label = 'Добавить в корзину';

    return $label;
}

/**
 * Удаляем поля адрес и телефон, если нет доставки
 */

add_filter('woocommerce_checkout_fields', 'new_woocommerce_checkout_fields', 10, 1);

function new_woocommerce_checkout_fields($fields)
{
    if (!WC()->cart->needs_shipping()) {
        unset($fields['billing']['billing_address_1'],
            $fields['billing']['billing_address_2'],
            $fields['billing']['billing_city'],
            $fields['billing']['billing_postcode'],
            $fields['billing']['billing_country'],
            $fields['billing']['billing_state'],
            $fields['billing']['billing_company'],
            $fields['billing']['phone']);
    }
    return $fields;
}

remove_action('storefront_footer', 'storefront_credit', 20);

/**
 * Remove product data tabs
 */
add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);

function woo_remove_product_tabs($tabs)
{

    unset($tabs['description'],
        $tabs['reviews'],
        $tabs['additional_information']);
    return $tabs;
}

//Количество товаров для вывода на странице магазина
add_filter('loop_shop_per_page', 'wg_view_all_products');

function wg_view_all_products()
{
    return '9999';
}

//Удаление сортировки
add_action('init', 'bbloomer_delay_remove');

function bbloomer_delay_remove()
{
    remove_action('woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
    remove_action('woocommerce_after_shop_loop', 'woocommerce_result_count', 20);

}

/*
*Изменение количетсва товара на строку на страницах woo
*/
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
    function loop_columns()
    {
        return 3; // 3 products per row
    }
}


//Удаление сторфронт-кредит
add_action('init', 'custom_remove_footer_credit', 10);

function custom_remove_footer_credit()
{
    remove_action('storefront_footer', 'storefront_credit', 20);
    add_action('storefront_footer', 'custom_storefront_credit', 20);
}


//Добавление favicon
function favicon_link()
{
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.png" />' . "\n";
}

add_action('wp_head', 'favicon_link');

//Изменение entry-content
function storefront_page_content()
{
    ?>
    <div class="row">
        <?php the_content(); ?>
        <?php
        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . __('Pages:', 'storefront'),
                'after' => '</div>',
            )
        );
        ?>
    </div>
    <?php
}

add_filter('woocommerce_sale_flash', 'my_custom_sale_flash', 10, 3);
function my_custom_sale_flash($text, $post, $_product)
{
    return '<span class="onsale">SALE!</span>';
}

// Колонки related
add_filter('woocommerce_output_related_products_args', 'jk_related_products_args');
function jk_related_products_args($args)
{
    $args['posts_per_page'] = 6; // количество "Похожих товаров"
    $args['columns'] = 4; // количество колонок
    return $args;
}

/**
 * Get projects posts by category id
 * @param $cat_id
 * @return false|string
 */
function get_projects($cat_id)
{
    $args = array(
        'category' => $cat_id,
        'post_type' => 'post',
        'post_status' => 'publish',
        'numberposts' => 6
    );
    $projects = get_posts($args);
    ob_start();
    if ($projects): ?>
        <section class="okna-projects">
            <div class="container">
                <h2 class="okna-header okna-projects__header">
                    Наши проекты
                </h2>

                <div class="swiper-container okna-projects__swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($projects as $project):
                            $project_id = $project->ID;
                            $link = get_permalink($project_id);
                            $project_params = array_filter(explode(';', get_field('project_params', $project_id)));
                            ?>
                            <div class="swiper-slide">
                                <div class="card-project">
                                    <div class="row">
                                        <div class="col-lg-5 col-12">
                                            <p class="card-project__title bottom-line"><?= $project->post_title ?></p>
                                            <p class="card-project__info okna-text">
                                                <?= mb_strimwidth($project->post_content, 0, 245, '...') ?>
                                            </p>
                                            <?php if ($project_params): ?>
                                                <ul class="card-project__list">
                                                    <?php foreach ($project_params as $project_param): ?>
                                                        <li><?= $project_param ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                            <a href="<?= $link ?>" class="btn btn-okna-primary inc-reaction">
                                                Посмотреть
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-12">
                                            <a href="<?= $link ?>">
                                                <img class="card-project__img"
                                                     src="/wp-content/themes/storefront-child/img/project.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <script>
                const oknaProjects = new Swiper('.okna-projects__swiper', {
                    pagination: {
                        el: '.swiper-pagination',
                    },
                });
            </script>
        </section>
    <?php endif;
    return ob_get_clean();
}

/**
 * Get post or custom field gallery images
 * @param null $postvar
 * @param int $pos
 * @param string $post_content
 * @return array
 */
function get_post_gallery_or_custom_field($post_content = '', $postvar = NULL, $pos = 0)
{
    if (!isset($postvar)) {
        global $post;
        $postvar = $post;
    }
    if (!$post_content) {
        $post_content = $postvar->post_content;
        if ($pos) {
            $post_content = preg_split('~\(:\)~', $post_content)[1];
        }
    }
    preg_match('/\[gallery.*ids=.(.*).]/', $post_content, $ids);
    $images_id = explode(",", $ids[1]);
    $image_gallery_with_info = array();
    foreach ($images_id as $image_id) {
        $attachment = get_post($image_id);
        $image_gallery_with_info[] = array(
            'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
            'caption' => $attachment->post_excerpt,
            'description' => $attachment->post_content,
            'href' => get_permalink($attachment->ID),
            'src' => $attachment->guid,
            'title' => $attachment->post_title
        );
    }
    return $image_gallery_with_info;
}

/**
 * Get advantages by main page id
 * @param $page_id
 * @return false|string
 */
function get_advantages($page_id = false)
{
    if (!$page_id) {
        $page_id = get_option('page_on_front');
    }
    ob_start();
    $advantages = get_post_gallery_or_custom_field(get_field('okna-advantages', $page_id, false));
    if ($advantages): ?>
        <section class="okna-advantage">
            <div class="container">
                <h2 class="okna-header okna-advantage__header">
                    Наши преимущества
                </h2>

                <div class="row">
                    <?php foreach ($advantages as $image_obj): ?>
                        <div class="col-lg-4 col-12">
                            <div class="card-advantage">
                                <div class="okna-icon card-advantage__icon">
                                    <img src="<?= $image_obj['src'] ?>" alt="<?= $image_obj['title'] ?>">
                                </div>
                                <p class="card-advantage__title"><?= $image_obj['title'] ?></p>
                                <p class="card-advantage__info okna-text"><?= $image_obj['description'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif;
    return ob_get_clean();
}

// Adding the metaboxes
add_action('add_meta_boxes', 'add_employee_meta');

/* Saving the data */
add_action('save_post', 'employee_meta_save');

/* Adding the main meta box container to the post editor screen */
function add_employee_meta()
{
    add_meta_box(
        'employee-details',
        'Employee Details',
        'employee_details_init',
        'post');
}

/*Printing the box content */
function employee_details_init()
{
    global $post;
    // Use nonce for verification
    wp_nonce_field(plugin_basename(__FILE__), 'employee_nonce');
    ?>
    <div id="employee_meta_item">
    <?php

    //Obtaining the linked employeedetails meta values
    $employeeDetails = get_post_meta($post->ID, 'employeeDetails', true);
    $c = 0;
    if (count($employeeDetails) > 0 && is_array($employeeDetails)) {
        foreach ($employeeDetails as $employeeDetail) {
            if (isset($employeeDetail['name']) || isset($employeeDetail['bio'])) {
                printf('<p>Name<input type="text" name="employeeDetails[%1$s][name]" value="%2$s" />  Package : <textarea name="employeeDetails[%1$s][bio]"  rows="4" cols="50" >%3$s</textarea><a href="#" class="remove-package">%4$s</a></p>', $c, $employeeDetail['name'], $employeeDetail['bio'], 'Remove');
                $c++;
            }
        }
    }

    ?>
    <span id="output-package"></span>
    <a href="#" class="add_package"><?php _e('Add Employee Details'); ?></a>
    <script>
        var $ = jQuery.noConflict();
        $(document).ready(function () {
            let count = <?php echo $c; ?>;
            $(".add_package").on('click', function () {
                count++
                $('#output-package').append('<p> Name <input type="text" name="employeeDetails[' + count + '][name]" value="" />  bio : <textarea name="employeeDetails[' + count + '][bio]" rows="4" cols="50" ></textarea><a href="#" class="remove-package"><?php echo "Remove"; ?></a></p>');
                return false
            });
            $(document.body).on('click', '.remove-package', function () {
                $(this).parent().remove();
            });
        });
    </script>
    </div><?php

}

/* Save function for the entered data */
function employee_meta_save($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    // Verifying the nonce
    if (!isset($_POST['employee_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['employee_nonce'], plugin_basename(__FILE__))) {
        return;
    }
    // Updating the employeeDetails meta data
    $employeeDetails = $_POST['employeeDetails'];

    update_post_meta($post_id, 'employeeDetails', $employeeDetails);
}
