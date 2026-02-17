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
            <span class="section-tag">Terms & Conditions</span>
            <h1>Условия использования</h1>

            <div class="legal-content">
                <div class="policy-hero-card terms-accent" data-aos="fade-up">
                    <p>
                        Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                        представляют собой юридически обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>.
                        Используя наш сайт, вы подтверждаете свое полное согласие с данными Условиями и готовность следовать инновационным стандартам профессионального роста.
                    </p>
                </div>

                <div class="legal-section" data-aos="fade-up" data-aos-delay="100">
                    <h2>1. Предмет Соглашения</h2>
                    <p>
                        Компания предоставляет Пользователю доступ к использованию платформы
                        <strong><?= $fullDomain ?></strong> и её функционала, включая: доступ к
                        экспертным материалам, статьям блога, карьерным консультациям и другим инструментам, 
                        создающим решения, которые меняют правила игры в вашей карьере на рынке Франции и ЕС.
                    </p>
                </div>

                <div class="legal-section" data-aos="fade-up" data-aos-delay="200">
                    <h2>2. Обязанности и права Пользователя</h2>
                    <p>При использовании платформы <strong><?= $domainTitle ?></strong> в целях построения карьеры запрещается:</p>
                    <ul class="legal-list">
                        <li>Публиковать или передавать информацию, нарушающую законодательство Франции или нормы ЕС.</li>
                        <li>Предпринимать действия, направленные на дестабилизацию цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.</li>
                        <li>Использовать автоматизированные системы (боты, парсеры) для сбора данных без официального разрешения.</li>
                        <li>Предоставлять ложные сведения о своем профессиональном опыте при записи на консультации.</li>
                    </ul>
                </div>

                <div class="legal-section" data-aos="fade-up" data-aos-delay="300">
                    <h2>3. Интеллектуальная собственность</h2>
                    <div class="property-block">
                        <i class="fas fa-copyright"></i>
                        <p>
                            Весь контент на <strong><?= $fullDomain ?></strong> (авторские методики, тексты, код, графика) является исключительной собственностью Компании. 
                            Вам предоставляется ограниченная лицензия для личного, некоммерческого использования в целях вашего карьерного апгрейда.
                        </p>
                    </div>
                </div>

                <div class="legal-section" data-aos="fade-up" data-aos-delay="400">
                    <h2>4. Ограничение ответственности</h2>
                    <div class="warning-block">
                        <p>
                            Услуги платформы предоставляются по принципу <strong>«как есть» (as is)</strong>. <strong><?= $domainTitle ?></strong> не несет ответственности за любые прямые или косвенные убытки, возникшие вследствие использования предложенных методологий или временной недоступности сайта.
                        </p>
                    </div>
                </div>

                <div class="legal-section" data-aos="fade-up" data-aos-delay="500">
                    <h2>5. Изменения и разрешение споров</h2>
                    <p>
                        Мы оставляем за собой право обновлять данные Условия для улучшения качества поддержки. Все споры будут решаться путем конструктивных переговоров. В случае невозможности достижения согласия, спор подлежит рассмотрению в соответствии с действующим законодательством по месту регистрации Компании.
                    </p>
                </div>

                <div class="contact-footer-policy" data-aos="zoom-in">
                    <h2>Контактная информация</h2>
                    <p>Если у вас возникли вопросы, связанные с настоящими Условиями, пожалуйста, свяжитесь с нашей экспертной поддержкой:</p>
                    <a href="mailto:support@<?= $fullDomain ?>" class="policy-mail">support@<?= $fullDomain ?></a>
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