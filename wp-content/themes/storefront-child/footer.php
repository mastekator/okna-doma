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

<div class="pre-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="pre-footer-phone">
                    <div class="pre-footer-phone__inner">
                        <div class="pre-footer-phone__icons">
                            <a class="pre-footer-phone__icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 0H2C0.9 0 0.00999999 0.9 0.00999999 2L0 20L4 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0ZM16 12H4V10H16V12ZM16 9H4V7H16V9ZM16 6H4V4H16V6Z"
                                          fill="#CECECE"/>
                                </svg>
                            </a>
                            <a href="#" class="pre-footer-phone__icon active">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.01 15.38C18.78 15.38 17.59 15.18 16.48 14.82C16.13 14.7 15.74 14.79 15.47 15.06L13.9 17.03C11.07 15.68 8.42 13.13 7.01 10.2L8.96 8.54C9.23 8.26 9.31 7.87 9.2 7.52C8.83 6.41 8.64 5.22 8.64 3.99C8.64 3.45 8.19 3 7.65 3H4.19C3.65 3 3 3.24 3 3.99C3 13.28 10.73 21 20.01 21C20.72 21 21 20.37 21 19.82V16.37C21 15.83 20.55 15.38 20.01 15.38Z"
                                          fill="#4D6595"/>
                                </svg>
                            </a>
                            <a class="pre-footer-phone__icon">
                                <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 4.5V1C14 0.45 13.55 0 13 0H1C0.45 0 0 0.45 0 1V11C0 11.55 0.45 12 1 12H13C13.55 12 14 11.55 14 11V7.5L18 11.5V0.5L14 4.5Z"
                                          fill="#CECECE"/>
                                </svg>
                            </a>
                            <a href="#" class="pre-footer-phone__icon active">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z"
                                          fill="#4D6595"/>
                                </svg>
                            </a>
                        </div>
                        <div class="pre-footer-phone__item">
                            <p class="pre-footer-phone__title">Телефон</p>
                            <a class="pre-footer-phone__link" href="#">+7 (999) 999-00-00</a>
                        </div>
                        <div class="pre-footer-phone__item">
                            <p class="pre-footer-phone__title">Email</p>
                            <a class="pre-footer-phone__link" href="#">example@example.ru</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 offset-0 col-12">
                <div class="pre-footer-body">
                    <p class="pre-footer__title">
                        Остались вопросы
                    </p>
                    <div class="pre-footer-card">
                        <img src="/wp-content/themes/storefront-child/img/placeholder.jpg" alt="">
                        <div class="pre-footer-card__body">
                            <p class="pre-footer-card__title">
                                Иванов Иван Иванович
                                <small>Менеджер по работе с клиентами</small>
                            </p>
                            <a class="pre-footer-card__link" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.01 15.38C18.78 15.38 17.59 15.18 16.48 14.82C16.13 14.7 15.74 14.79 15.47 15.06L13.9 17.03C11.07 15.68 8.42 13.13 7.01 10.2L8.96 8.54C9.23 8.26 9.31 7.87 9.2 7.52C8.83 6.41 8.64 5.22 8.64 3.99C8.64 3.45 8.19 3 7.65 3H4.19C3.65 3 3 3.24 3 3.99C3 13.28 10.73 21 20.01 21C20.72 21 21 20.37 21 19.82V16.37C21 15.83 20.55 15.38 20.01 15.38Z"
                                          fill="#4D6595"/>
                                </svg>
                                +7 (999) 999-99-99
                            </a>
                            <a class="pre-footer-card__link" href="#">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z"
                                          fill="#4D6595"/>
                                </svg>
                                example@example.ru
                            </a>
                            <p class="pre-footer-card__or">или оставьте заявку</p>
                            <button class="btn btn-okna-primary inc-reaction">
                                Задайте вопрос
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="site-footer__body">
            <div class="row">
                <div class="col-12 col-lg-5 footer-logo">
                    <div class="site-info">
                        <a class="site-title"
                           href="<?php echo esc_url(home_url('/')); ?>">
                            <svg width="170" height="78" viewBox="0 0 170 78" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M90.6 31.192C88.3813 31.192 86.3653 30.7013 84.552 29.72C82.76 28.7173 81.352 27.352 80.328 25.624C79.3253 23.896 78.824 21.9547 78.824 19.8C78.824 17.6453 79.3253 15.704 80.328 13.976C81.352 12.248 82.76 10.8933 84.552 9.912C86.3653 8.90933 88.3813 8.408 90.6 8.408C92.8187 8.408 94.8133 8.89867 96.584 9.88C98.376 10.8613 99.784 12.2267 100.808 13.976C101.832 15.704 102.344 17.6453 102.344 19.8C102.344 21.9547 101.832 23.9067 100.808 25.656C99.784 27.384 98.376 28.7387 96.584 29.72C94.8133 30.7013 92.8187 31.192 90.6 31.192ZM90.6 29.08C92.3707 29.08 93.9707 28.6853 95.4 27.896C96.8293 27.0853 97.9493 25.976 98.76 24.568C99.5707 23.1387 99.976 21.5493 99.976 19.8C99.976 18.0507 99.5707 16.472 98.76 15.064C97.9493 13.6347 96.8293 12.5253 95.4 11.736C93.9707 10.9253 92.3707 10.52 90.6 10.52C88.8293 10.52 87.2187 10.9253 85.768 11.736C84.3387 12.5253 83.208 13.6347 82.376 15.064C81.5653 16.472 81.16 18.0507 81.16 19.8C81.16 21.5493 81.5653 23.1387 82.376 24.568C83.208 25.976 84.3387 27.0853 85.768 27.896C87.2187 28.6853 88.8293 29.08 90.6 29.08ZM113.563 23.512H109.723V31H107.451V14.168H109.723V21.56H113.595L119.515 14.168H121.979L115.355 22.328L122.459 31H119.771L113.563 23.512ZM126.045 14.168H128.317V21.624H138.909V14.168H141.181V31H138.909V23.576H128.317V31H126.045V14.168ZM153.43 14.04C155.628 14.04 157.313 14.5947 158.486 15.704C159.66 16.792 160.246 18.4133 160.246 20.568V31H158.07V28.376C157.558 29.2507 156.801 29.9333 155.798 30.424C154.817 30.9147 153.644 31.16 152.278 31.16C150.401 31.16 148.908 30.712 147.798 29.816C146.689 28.92 146.134 27.736 146.134 26.264C146.134 24.8347 146.646 23.6827 147.67 22.808C148.716 21.9333 150.369 21.496 152.63 21.496H157.974V20.472C157.974 19.0213 157.569 17.9227 156.758 17.176C155.948 16.408 154.764 16.024 153.206 16.024C152.14 16.024 151.116 16.2053 150.134 16.568C149.153 16.9093 148.31 17.3893 147.606 18.008L146.582 16.312C147.436 15.5867 148.46 15.032 149.654 14.648C150.849 14.2427 152.108 14.04 153.43 14.04ZM152.63 29.368C153.91 29.368 155.009 29.08 155.926 28.504C156.844 27.9067 157.526 27.0533 157.974 25.944V23.192H152.694C149.814 23.192 148.374 24.1947 148.374 26.2C148.374 27.1813 148.748 27.96 149.494 28.536C150.241 29.0907 151.286 29.368 152.63 29.368ZM101.352 67.952V75.024H99.144V70H79.592L79.56 75.024H77.352L77.384 67.952H78.504C79.976 67.8667 81 66.704 81.576 64.464C82.152 62.2027 82.504 59.0027 82.632 54.864L82.888 47.6H97.992V67.952H101.352ZM84.744 55.088C84.6373 58.5013 84.3707 61.3173 83.944 63.536C83.5387 65.7333 82.8453 67.2053 81.864 67.952H95.656V49.648H84.936L84.744 55.088ZM112.114 70.16C110.492 70.16 109.031 69.7973 107.73 69.072C106.428 68.3253 105.404 67.3013 104.658 66C103.911 64.6987 103.538 63.2267 103.538 61.584C103.538 59.9413 103.911 58.4693 104.658 57.168C105.404 55.8667 106.428 54.8533 107.73 54.128C109.031 53.4027 110.492 53.04 112.114 53.04C113.735 53.04 115.196 53.4027 116.498 54.128C117.799 54.8533 118.812 55.8667 119.538 57.168C120.284 58.4693 120.658 59.9413 120.658 61.584C120.658 63.2267 120.284 64.6987 119.538 66C118.812 67.3013 117.799 68.3253 116.498 69.072C115.196 69.7973 113.735 70.16 112.114 70.16ZM112.114 68.144C113.308 68.144 114.375 67.8773 115.314 67.344C116.274 66.7893 117.02 66.0107 117.554 65.008C118.087 64.0053 118.354 62.864 118.354 61.584C118.354 60.304 118.087 59.1627 117.554 58.16C117.02 57.1573 116.274 56.3893 115.314 55.856C114.375 55.3013 113.308 55.024 112.114 55.024C110.919 55.024 109.842 55.3013 108.882 55.856C107.943 56.3893 107.196 57.1573 106.641 58.16C106.108 59.1627 105.842 60.304 105.842 61.584C105.842 62.864 106.108 64.0053 106.641 65.008C107.196 66.0107 107.943 66.7893 108.882 67.344C109.842 67.8773 110.919 68.144 112.114 68.144ZM144.329 53.168V70H142.249V56.688L135.433 67.952H134.409L127.593 56.656V70H125.513V53.168H127.817L134.953 65.296L142.217 53.168H144.329ZM156.587 53.04C158.784 53.04 160.469 53.5947 161.643 54.704C162.816 55.792 163.403 57.4133 163.403 59.568V70H161.227V67.376C160.715 68.2507 159.957 68.9333 158.955 69.424C157.973 69.9147 156.8 70.16 155.435 70.16C153.557 70.16 152.064 69.712 150.955 68.816C149.845 67.92 149.291 66.736 149.291 65.264C149.291 63.8347 149.803 62.6827 150.827 61.808C151.872 60.9333 153.525 60.496 155.786 60.496H161.131V59.472C161.131 58.0213 160.725 56.9227 159.915 56.176C159.104 55.408 157.92 55.024 156.363 55.024C155.296 55.024 154.272 55.2053 153.291 55.568C152.309 55.9093 151.467 56.3893 150.763 57.008L149.739 55.312C150.592 54.5867 151.616 54.032 152.811 53.648C154.005 53.2427 155.264 53.04 156.587 53.04ZM155.786 68.368C157.067 68.368 158.165 68.08 159.083 67.504C160 66.9067 160.683 66.0533 161.131 64.944V62.192H155.851C152.971 62.192 151.531 63.1947 151.531 65.2C151.531 66.1813 151.904 66.96 152.651 67.536C153.397 68.0907 154.443 68.368 155.786 68.368Z"
                                      fill="black"/>
                                <path d="M59.0008 36.0075L53.9301 31.2658V15.5466C53.9291 15.3077 53.8827 15.0713 53.7935 14.851C53.7042 14.6307 53.5739 14.4307 53.41 14.2626C53.2461 14.0945 53.0518 13.9614 52.8381 13.8711C52.6245 13.7808 52.3958 13.735 52.1651 13.7363H39.9629C39.4971 13.7344 39.0496 13.9239 38.7187 14.2633C38.3878 14.6027 38.2005 15.0643 38.198 15.5466V16.5542L32.0778 10.8296C31.5106 10.2958 30.7716 10 30.0051 10C29.2387 10 28.4997 10.2958 27.9325 10.8296L1.00713 36.0075C0.54703 36.4328 0.223963 36.9939 0.0815147 37.6153C-0.0609341 38.2366 -0.0159103 38.8882 0.210512 39.4823C0.434991 40.0785 0.828578 40.5904 1.33946 40.9506C1.85035 41.3107 2.45458 41.5023 3.07263 41.5H7.3658V66.7248C7.36833 67.2073 7.55555 67.6691 7.88641 68.0089C8.21727 68.3487 8.66476 68.5388 9.13078 68.5375H23.8898C24.3555 68.5388 24.8028 68.3486 25.1333 68.0088C25.4638 67.6689 25.6504 67.2071 25.6523 66.7248V51.4131H34.346V66.7248C34.347 66.9638 34.3934 67.2003 34.4826 67.4208C34.5718 67.6412 34.702 67.8413 34.8659 68.0096C35.0298 68.178 35.2241 68.3112 35.4378 68.4018C35.6514 68.4924 35.8801 68.5385 36.111 68.5375H50.8676C51.0983 68.5385 51.327 68.4923 51.5405 68.4017C51.754 68.3111 51.9481 68.1778 52.1118 68.0095C52.2755 67.8411 52.4056 67.641 52.4945 67.4206C52.5834 67.2001 52.6296 66.9637 52.6302 66.7248V41.5H56.9234C57.5415 41.5026 58.1459 41.3112 58.6568 40.951C59.1677 40.5908 59.5613 40.0787 59.7855 39.4823C60.014 38.8896 60.0613 38.2385 59.9209 37.6171C59.7806 36.9957 59.4594 36.4338 59.0008 36.0075ZM50.8628 37.877C50.6321 37.8757 50.4034 37.9215 50.1898 38.0118C49.9762 38.1021 49.7818 38.2351 49.6179 38.4033C49.454 38.5714 49.3237 38.7713 49.2344 38.9916C49.1452 39.212 49.0988 39.4483 49.0978 39.6872V64.9145H37.8712V49.6028C37.8687 49.1205 37.6814 48.659 37.3504 48.3196C37.0195 47.9801 36.572 47.7906 36.1062 47.7926H23.9041C23.6733 47.7913 23.4446 47.8371 23.231 47.9274C23.0174 48.0177 22.8231 48.1507 22.6591 48.3188C22.4952 48.487 22.3649 48.6869 22.2757 48.9072C22.1864 49.1275 22.14 49.3639 22.1391 49.6028V64.9145H10.9101V39.6872C10.9091 39.4483 10.8627 39.212 10.7735 38.9916C10.6842 38.7713 10.5539 38.5714 10.39 38.4033C10.2261 38.2351 10.0318 38.1021 9.81814 38.0118C9.60453 37.9215 9.37581 37.8757 9.14509 37.877H4.24848L30.0075 13.7907L38.7775 21.9923C39.032 22.2304 39.3475 22.3872 39.6861 22.4437C40.0247 22.5003 40.3718 22.4541 40.6856 22.3109C40.9982 22.1712 41.2646 21.9399 41.4519 21.6455C41.6392 21.3511 41.7393 21.0064 41.7398 20.6538V17.3568H50.4144V32.066C50.4144 32.3183 50.4656 32.5678 50.5646 32.7984C50.6636 33.029 50.8083 33.2355 50.9892 33.4045L55.7714 37.877H50.8628Z"
                                      fill="#4D6595"/>
                            </svg>
                        </a>
                        <p class="site-info__descr">
                            Наша задача - учесть индивидуальные потребности и соответствовать высокому уровню
                        </p>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <?php
                    if ($menu_items = wp_get_nav_menu_items('second')) {
                        $menu_list = '';
                        echo '<div class="footer-menu">';
                        echo '<ul class="menu" id="menu-second">';
                        foreach ((array)$menu_items as $key => $menu_item) {
                            $title = $menu_item->title; // заголовок элемента меню (анкор ссылки)
                            $url = $menu_item->url; // URL ссылки
                            echo '<li><a href="' . $url . '">' . $title . '</a></li>';
                        }
                        echo '</ul>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="col-12 col-lg-3 pl-0">
                    <div class="footer-contacts">
                        <p>Наши контакты</p>
                        <a href="#">+7 (999) 000-00-00 </a>
                        <a href="#">example@mail.ru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="after-footer">
            <p class="footer-name-p">
                &copy; 2019 - <?php echo date('Y'); ?>
                <?php echo '<a class="footer-name" href="' . home_url() . '">' . get_bloginfo('name') . '</a>'; ?>
            </p>
            <a class="mastekator" href="#">Designed by Mastekator</a>
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
