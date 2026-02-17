<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Карьерный апгрейд и стратегии роста</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect x='4' y='18' width='6' height='10' rx='2' fill='%23ff2d55'/%3E%3Crect x='13' y='12' width='6' height='16' rx='2' fill='%23ff2d55'/%3E%3Cpath d='M22 4h6v6l-2-2-4 4-2-2 4-4-2-2z' fill='%23ff2d55'/%3E%3Crect x='22' y='14' width='6' height='14' rx='2' fill='%23ff2d55'/%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>

            <nav class="nav" id="menu">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#strategy" class="nav__link">Стратегия</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                    <li><a href="./#expertise" class="nav__link">Экспертиза</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn-contact">
                <span>Связаться</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>

            <button class="burger" id="burger" aria-label="Открыть меню">
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container" data-aos="fade-up">
            <span class="section-tag">Payment & Refunds</span>
            <h1>Политика возврата средств</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent" data-aos="fade-up">
                    <p>
                        Мы стремимся к максимальной прозрачности и ценим ваше доверие. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена гибкая процедура возврата, 
                        которая защищает ваши инвестиции в профессиональный рост и соответствует законодательству Франции.
                    </p>
                </div>

                <h2 data-aos="fade-up">Условия для оформления возврата</h2>
                <div class="refund-grid">
                    <div class="refund-card" data-aos="zoom-in" data-aos-delay="100">
                        <i class="fas fa-file-contract"></i>
                        <h3>Несоответствие стратегии</h3>
                        <p>Если содержание консультаций или материалов существенно отличается от заявленного на <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card" data-aos="zoom-in" data-aos-delay="200">
                        <i class="fas fa-tools"></i>
                        <h3>Технические преграды</h3>
                        <p>Критические ошибки платформы <strong><?= $fullDomain ?></strong>, препятствующие получению услуг, не устраненные в срок.</p>
                    </div>
                    <div class="refund-card" data-aos="zoom-in" data-aos-delay="300">
                        <i class="fas fa-hourglass-half"></i>
                        <h3>Период охлаждения</h3>
                        <p>Возможность отмены заказа в течение 14 дней с момента оплаты, если работа над вашим кейсом еще не была начата.</p>
                    </div>
                </div>

                <div class="procedure-block" data-aos="fade-up">
                    <h2>Процедура запроса на возврат</h2>
                    <p>Чтобы инициировать возврат на платформе <strong><?= $domainTitle ?></strong>, выполните следующие шаги:</p>
                    <div class="steps-mini">
                        <div class="step-mini"><span>1</span> Отправьте запрос на <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a></div>
                        <div class="step-mini"><span>2</span> Укажите тему: «Запрос на возврат средств»</div>
                        <div class="step-mini"><span>3</span> Данные: Ваше имя, Email и дата транзакции</div>
                        <div class="step-mini"><span>4</span> Кратко опишите причину вашего решения</div>
                    </div>
                </div>

                <h2 data-aos="fade-up">Сроки и способ возврата</h2>
                <p data-aos="fade-up">
                    После одобрения заявки возврат денежных средств будет произведен в течение <strong>7–14 рабочих дней</strong>. 
                    Средства переводятся тем же способом, которым была совершена оплата. 
                    Фактический срок зачисления зависит от регламента вашего банка во <strong>Франции</strong> или стране вашего пребывания.
                </p>

                <div class="warning-block" data-aos="fade-up">
                    <h2>Исключения и ограничения</h2>
                    <ul class="legal-list">
                        <li>Услуга уже была полностью оказана (проведена индивидуальная консультация).</li>
                        <li>Запрос подан по истечении 14 календарных дней с момента совершения покупки.</li>
                        <li>Вы получили доступ к уникальным авторским методологиям и материалам более чем на 50%.</li>
                        <li>Нарушение правил взаимодействия с экспертами <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy" data-aos="zoom-in">
                    <h2>Остались вопросы?</h2>
                    <p>Наша служба поддержки готова помочь вам разобраться в деталях:</p>
                    <div class="policy-contacts-row">
                        <a href="mailto:support@<?= $fullDomain ?>" class="policy-mail">support@<?= $fullDomain ?></a>
                        <a href="tel:+33189480388" class="policy-phone">+33 1 89 48 03 88</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__col footer__col--info">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__dot"></span>
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__description">
                    Инновационные стратегии для построения карьеры, которая работает на вас. Переосмыслите свой путь вместе с экспертами <?= $domainTitle ?>.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#strategy">Стратегия</a></li>
                    <li><a href="./#cases">Кейсы</a></li>
                    <li><a href="./#expertise">Экспертиза</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+33189480388">+33 1 89 48 03 88</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>14 Rue de Rivoli, 75004 Paris, France</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="container">
            <div class="footer__bottom">
                <p>&copy; <?= date('Y') ?> <?= $domainTitle ?>. Платформа доступна в Европе.</p>
            </div>
        </div>
    </footer>
    <div class="mobile-menu" id="mobile-menu">
        <button class="mobile-menu__close" id="menu-close">&times;</button>
        <nav class="mobile-menu__nav">
            <a href="./#hero" class="mobile-menu__link">Главная</a>
            <a href="./#strategy" class="mobile-menu__link">Стратегия</a>
            <a href="./#cases" class="mobile-menu__link">Кейсы</a>
            <a href="./#expertise" class="mobile-menu__link">Экспертиза</a>
            <a href="./#reviews" class="mobile-menu__link">Отзывы</a>
            <a href="./#contact" class="btn-primary">Бесплатная консультация</a>
        </nav>
    </div>
    
    <div class="cookie-popup" id="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button class="btn-primary btn-primary--small" id="cookie-accept">Принять</button>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1000,
        once: true,
        offset: 100
      });
    </script>
    <script src="script.js"></script>
</body>
</html>