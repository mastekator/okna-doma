<?php
/*
Template Name: about
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

<?php
$phone = get_field('phone');
$email = get_field('email');
$address = get_field('address');
$schedule = get_field('schedule');
?>

</div>
</div>

<section class="okna-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12">
                <h1 class="okna-header okna-about__header">
                    О компании
                </h1>
                <div class="okna-card okna-about-card">
                    <p class="okna-about-card__title">
                        Контактная информация
                    </p>
                    <?php if ($phone): ?>
                        <p class="okna-about-card__sub-title">
                            Телефон:
                        </p>
                        <a class="okna-about-card__link" href="tel:<?= $phone ?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.01 15.38C18.78 15.38 17.59 15.18 16.48 14.82C16.13 14.7 15.74 14.79 15.47 15.06L13.9 17.03C11.07 15.68 8.42 13.13 7.01 10.2L8.96 8.54C9.23 8.26 9.31 7.87 9.2 7.52C8.83 6.41 8.64 5.22 8.64 3.99C8.64 3.45 8.19 3 7.65 3H4.19C3.65 3 3 3.24 3 3.99C3 13.28 10.73 21 20.01 21C20.72 21 21 20.37 21 19.82V16.37C21 15.83 20.55 15.38 20.01 15.38Z"
                                      fill="#4D6595"/>
                            </svg>
                            <?= $phone ?>
                        </a>
                    <?php endif; ?>
                    <?php if ($email): ?>
                        <p class="okna-about-card__sub-title">
                            Email:
                        </p>
                        <a class="okna-about-card__link" href="mailto:<?= $email ?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z"
                                      fill="#4D6595"/>
                            </svg>
                            <?= $email ?>
                        </a>
                    <?php endif; ?>
                    <?php if ($address): ?>
                        <p class="okna-about-card__sub-title">
                            Адрес:
                        </p>
                        <a class="okna-about-card__link">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z"
                                      fill="#4D6595"/>
                            </svg>
                            <?= $address ?>
                        </a>
                    <?php endif; ?>
                    <?php if ($schedule): ?>
                        <p class="okna-about-card__sub-title">
                            График работы:
                        </p>
                        <a class="okna-about-card__link">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52 6.47 22 11.99 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 11.99 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20Z"
                                      fill="#4D6595"/>
                                <path d="M12.5 7H11V13L16.25 16.15L17 14.92L12.5 12.25V7Z" fill="#4D6595"/>
                            </svg>
                            <?= $schedule ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-7 col-12 okna-about-map">
                <div class="okna-about-map__container">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3d9ebb3e7f9734a01592bdb8bc71ffc778d0cfe794ae0c8bfe8591c445dfbcce&amp;source=constructor"
                            width="100%" height="500" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?= get_colors(127) ?>

<?php get_footer(); ?>
