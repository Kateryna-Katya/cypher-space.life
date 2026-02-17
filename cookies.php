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
            <span class="section-tag">Informacje prawne</span>
            <h1>Polityka plików cookie</h1>

            <div class="legal-content">
                <p class="lead-text">
                    Witamy w <strong><?= $domainTitle ?></strong>! Aby poprawić Twoje doświadczenia
                    podczas korzystania z naszej platformy, zapewnić jej stabilne działanie oraz
                    analizować skuteczność proponowanych strategii, używamy plików cookie.
                </p>

                <h2>Czym są pliki cookie?</h2>
                <p>
                    Plik cookie to mały plik tekstowy, który strona internetowa zapisuje na Twoim urządzeniu podczas jej odwiedzania. Pozwala to platformie 
                    <strong><?= $domainTitle ?></strong> „zapamiętać” Twoje preferencje 
                    (na przykład wybór języka, ustawienia regionu Polska i inne parametry) 
                    w celu zapewnienia bardziej spersonalizowanego doradztwa zawodowego.
                </p>

                <h2>Jakich rodzajów plików cookie używamy?</h2>
                <p>
                    Klasyfikujemy pliki cookie na stronie <strong><?= $fullDomain ?></strong> w następujących kategoriach:
                </p>
                <ul class="legal-list">
                    <li>
                        <strong>Niezbędne:</strong> Zapewniają podstawowe funkcje, takie jak nawigacja po sekcjach <strong><?= $domainTitle ?></strong> oraz dostęp do bezpiecznych obszarów.
                    </li>
                    <li>
                        <strong>Analityczne:</strong> Pozwalają nam zrozumieć, w jaki sposób użytkownicy korzystają z serwisu, abyśmy mogli optymalizować nasze narzędzia kariery.
                    </li>
                    <li>
                        <strong>Funkcjonalne:</strong> Służą do zapamiętywania Twoich ustawień, tworząc indywidualne doświadczenie w ramach Twojego upgrade'u zawodowego.
                    </li>
                    <li>
                        <strong>Marketingowe:</strong> Pomagają nam wyświetlać odpowiednie oferty zgodne z Twoimi zainteresowaniami zawodowymi w krajach UE.
                    </li>
                </ul>

                <h2>Dlaczego ich używamy?</h2>
                <ul class="legal-list">
                    <li>Zapewnienie bezpieczeństwa i ochrony Twoich danych.</li>
                    <li>Analiza ruchu w celu ulepszania metodologii wzrostu.</li>
                    <li>Personalizacja treści dla kandydatów w Europie.</li>
                    <li>Innowacyjna technologia adaptacji interfejsu do Twoich potrzeb.</li>
                </ul>

                <h2>Zarządzanie plikami cookie</h2>
                <p>
                    Możesz zarządzać plikami cookie poprzez ustawienia swojej przeglądarki (blokować je lub usuwać). Pamiętaj, że ograniczenie plików cookie może wpłynąć na dostępność niektórych funkcji platformy.
                </p>

                <div class="contact-info-block">
                    <h2>Informacje kontaktowe</h2>
                    <p>
                        Jeśli masz pytania dotyczące wykorzystania technologii w <strong><?= $domainTitle ?></strong>:
                    </p>
                    <ul class="contact-data">
                        <li><strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a></li>
                        <li><strong>Telefon:</strong> <a href="tel:+48221052857">+48 22 105 28 57</a></li>
                        <li><strong>Adres:</strong> ul. Marszałkowska 126/134, 00-008 Warszawa, Polska</li>
                    </ul>
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
                        <span>ul. Marszałkowska 126/134, Warszawa, Polska</span>
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
            <p>Ta strona używa plików cookies w celu poprawy działania. Dowiedz się więcej w naszej <a href="./cookies.php">Polityce plików cookie</a>.</p>
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