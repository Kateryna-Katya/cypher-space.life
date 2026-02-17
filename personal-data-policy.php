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
            <span class="section-tag">Privacy & Security</span>
            <h1>Политика обработки персональных данных</h1>

            <div class="legal-content">
                <div class="policy-intro" data-aos="fade-up" data-aos-delay="100">
                    <h2>1. Общие положения</h2>
                    <p>
                        Настоящая политика (далее — «Политика») определяет порядок и условия обработки персональных
                        данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), 
                        в соответствии с требованиями GDPR и законодательства Франции.
                    </p>
                    <p>
                        1.1. Важнейшей целью Оператора является защита прав и свобод Пользователей при
                        обработке их персональных данных, включая защиту права на неприкосновенность частной жизни и профессиональную тайну.
                    </p>
                    <p>
                        1.2. Настоящая Политика применяется ко всей информации, которую
                        Оператор может получить о посетителях веб-сайта <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="policy-section" data-aos="fade-up" data-aos-delay="200">
                    <h2>2. Основные понятия</h2>
                    <ul class="terminology-list">
                        <li>
                            <strong>Веб-сайт</strong> — совокупность графических и
                            информационных материалов <strong><?= $fullDomain ?></strong>.
                        </li>
                        <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                        <li>
                            <strong>Персональные данные</strong> — любая информация,
                            относящаяся прямо или косвенно к Пользователю, стремящемуся к карьерному апгрейду.
                        </li>
                    </ul>
                </div>

                <div class="policy-section" data-aos="fade-up" data-aos-delay="300">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <div class="data-grid">
                        <div class="data-item">
                            <i class="fas fa-user-shield"></i>
                            <div>
                                <strong>Идентификационные данные:</strong>
                                <span>Имя, адрес электронной почты, номер телефона.</span>
                            </div>
                        </div>
                        <div class="data-item">
                            <i class="fas fa-cookie-bite"></i>
                            <div>
                                <strong>Технические данные:</strong>
                                <span>Cookies, IP-адрес, тип браузера и данные об активности в Европе.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section" data-aos="fade-up" data-aos-delay="400">
                    <h2>4. Цели обработки данных</h2>
                    <p>Мы используем ваши данные для того, чтобы предоставлять решения, которые меняют правила игры:</p>
                    <ul class="legal-list">
                        <li>Идентификация Пользователя для персонализации стратегий роста.</li>
                        <li>Установление обратной связи и обработка заявок на консультации.</li>
                        <li>Предоставление экспертной поддержки на всех этапах карьеры.</li>
                        <li>Улучшение качества работы платформы и контента блога.</li>
                    </ul>
                </div>

                <div class="policy-section" data-aos="fade-up" data-aos-delay="500">
                    <h2>5. Правовые основания</h2>
                    <p>
                        Оператор обрабатывает персональные данные только в случае их заполнения Пользователем через специальные формы на сайте 
                        <strong><?= $fullDomain ?></strong>. Используя наши сервисы, вы выражаете свое согласие с данной Политикой.
                    </p>
                </div>

                <div class="policy-section contact-footer-policy" data-aos="fade-up" data-aos-delay="600">
                    <h2>6. Вопросы и отзывы</h2>
                    <p>По любым вопросам касательно защиты ваших данных в Париже, вы можете направить письмо на адрес:</p>
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