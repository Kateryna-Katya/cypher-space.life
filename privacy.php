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
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Upgrade kariery i strategie wzrostu</title>
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
                    <li><a href="./#hero" class="nav__link">Strona główna</a></li>
                    <li><a href="./#strategy" class="nav__link">Strategia</a></li>
                    <li><a href="./#cases" class="nav__link">Case studies</a></li>
                    <li><a href="./#expertise" class="nav__link">Ekspertyza</a></li>
                    <li><a href="./#reviews" class="nav__link">Opinie</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn-contact">
                <span>Kontakt</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>

            <button class="burger" id="burger" aria-label="Otwórz menu">
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <main class="legal-page">
    <section class="pages">
        <div class="container" data-aos="fade-up">
            <span class="section-tag">Privacy Policy</span>
            <h1>Polityka prywatności</h1>

            <div class="legal-content">
                <div class="policy-hero-card" data-aos="fade-up">
                    <p>
                        Niniejsza polityka prywatności dotyczy danych osobowych dostarczanych przez klientów <strong><?= $domainTitle ?></strong>, zarówno w celu świadczenia usług doradztwa zawodowego, jak i wszelkich innych interakcji cyfrowych na terenie UE.
                    </p>
                </div>

                <div class="policy-notice" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        <strong><?= $domainTitle ?></strong> zastrzega sobie prawo do wprowadzania zmian w postanowieniach niniejszej Polityki. Zalecamy regularne sprawdzanie tej strony. Udostępniając swoje dane na <strong><?= $fullDomain ?></strong>, wyrażasz pełną zgodę na ich przetwarzanie zgodnie z innowacyjnymi standardami bezpieczeństwa.
                    </p>
                </div>

                <h2 data-aos="fade-up">Zasady gromadzenia, przechowywania i usuwania danych</h2>
                <div class="storage-info" data-aos="fade-up" data-aos-delay="150">
                    <div class="storage-item">
                        <i class="fas fa-history"></i>
                        <span>Okres przechowywania: <strong>do 75 lat</strong></span>
                    </div>
                    <div class="storage-item">
                        <i class="fas fa-user-check"></i>
                        <span>Tylko za Twoją zgodą</span>
                    </div>
                </div>
                <p data-aos="fade-up">
                    W celu zapobiegania wyciekom lub nieautoryzowanemu dostępowi do danych kandydatów, korzystamy z zaawansowanej infrastruktury cyfrowej. Usunięcie lub zablokowanie danych następuje na Twoje pierwsze żądanie lub po osiągnięciu celów związanych z upgrade'em kariery.
                </p>

                <div class="data-collection-grid">
                    <div class="data-box" data-aos="flip-left" data-aos-delay="200">
                        <h3><i class="fas fa-microchip"></i> Informacje techniczne</h3>
                        <ul>
                            <li>Adres IP i czas dostępu w Warszawie</li>
                            <li>Źródła odesłań do <strong><?= $fullDomain ?></strong></li>
                            <li>Dane przeglądarki i zachowanie na stronach</li>
                        </ul>
                    </div>
                    <div class="data-box" data-aos="flip-left" data-aos-delay="300">
                        <h3><i class="fas fa-id-card"></i> Personalizacja</h3>
                        <ul>
                            <li>Imię użytkownika</li>
                            <li>E-mail i numer telefonu</li>
                            <li>Historia konsultacji i zamówień</li>
                        </ul>
                    </div>
                </div>

                <h2 data-aos="fade-up">Cele przetwarzania danych osobowych</h2>
                <ul class="legal-list" data-aos="fade-up">
                    <li>Zapewnienie dostępu do innowacyjnej platformy upgrade'u kariery.</li>
                    <li>Uwzględnienie indywidualnych preferencji przy opracowywaniu strategii wzrostu.</li>
                    <li>Informowanie o nowych artykułach na blogu i ofertach ekskluzywnych.</li>
                    <li>Zapewnienie szybkiej i wysokiej jakości komunikacji zwrotnej.</li>
                </ul>

                <h2 data-aos="fade-up">Używanie plików Cookies</h2>
                <p data-aos="fade-up">
                    Pliki cookie pozwalają nam analizować ruch i zapisywać Twoje preferencje (np. ustawienia regionu Polska), aby korzystanie z platformy <strong><?= $domainTitle ?></strong> było jak najbardziej wygodne i efektywne.
                </p>

                <div class="rights-block" data-aos="zoom-in" data-aos-delay="400">
                    <h2>Twoje prawa</h2>
                    <p>
                        Jeśli chcesz edytować swoje dane, poprosić o ich usunięcie lub wycofać zgodę, skontaktuj się z zespołem <strong><?= $domainTitle ?></strong>:
                    </p>
                    <div class="rights-contacts">
                        <a href="mailto:hello@<?= $fullDomain ?>" class="contact-btn">hello@<?= $fullDomain ?></a>
                        <a href="tel:+48221052857" class="contact-btn contact-btn--phone">+48 22 105 28 57</a>
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
                    Innowacyjne strategie budowania kariery, która pracuje dla Ciebie. Przebuduj swoją ścieżkę razem z ekspertami <?= $domainTitle ?>.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Nawigacja</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Strona główna</a></li>
                    <li><a href="./#strategy">Strategia</a></li>
                    <li><a href="./#cases">Case studies</a></li>
                    <li><a href="./#expertise">Ekspertyza</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Informacje prawne</h4>
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
                <h4 class="footer__title">Kontakt</h4>
                <ul class="footer__contacts">
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+48221052857">+48 22 105 28 57</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>ul. Marszałkowska 126/134, 00-008 Warszawa, Polska</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="container">
            <div class="footer__bottom">
                <p>&copy; <?= date('Y') ?> <?= $domainTitle ?>. Platforma dostępna w Europie.</p>
            </div>
        </div>
    </footer>

    <div class="mobile-menu" id="mobile-menu">
        <button class="mobile-menu__close" id="menu-close">&times;</button>
        <nav class="mobile-menu__nav">
            <a href="./#hero" class="mobile-menu__link">Strona główna</a>
            <a href="./#strategy" class="mobile-menu__link">Strategia</a>
            <a href="./#cases" class="mobile-menu__link">Case studies</a>
            <a href="./#expertise" class="mobile-menu__link">Ekspertyza</a>
            <a href="./#reviews" class="mobile-menu__link">Opinie</a>
            <a href="./#contact" class="btn-primary">Bezpłatna konsultacja</a>
        </nav>
    </div>
    
    <div class="cookie-popup" id="cookie-popup">
        <div class="cookie-popup__content">
            <p>Ta strona używa plików cookie w celu poprawy działania. Więcej szczegółów w naszej <a href="./cookies.php">Polityce plików cookie</a>.</p>
            <button class="btn-primary btn-primary--small" id="cookie-accept">Akceptuję</button>
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