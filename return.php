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
            <span class="section-tag">Payment & Refunds</span>
            <h1>Polityka zwrotów</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent" data-aos="fade-up">
                    <p>
                        Dążymy do maksymalnej przejrzystości i cenimy Twoje zaufanie. 
                        W <strong><?= $domainTitle ?></strong> przewidziano elastyczną procedurę zwrotu, 
                        która chroni Twoje inwestycje w rozwój zawodowy i jest zgodna z przepisami obowiązującymi w Polsce i UE.
                    </p>
                </div>

                <h2 data-aos="fade-up">Warunki otrzymania zwrotu</h2>
                <div class="refund-grid">
                    <div class="refund-card" data-aos="zoom-in" data-aos-delay="100">
                        <i class="fas fa-file-contract"></i>
                        <h3>Niezgodność ze strategią</h3>
                        <p>Jeśli treść konsultacji lub materiałów istotnie odbiega od opisu przedstawionego na platformie <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card" data-aos="zoom-in" data-aos-delay="200">
                        <i class="fas fa-tools"></i>
                        <h3>Bariery techniczne</h3>
                        <p>Krytyczne błędy platformy <strong><?= $fullDomain ?></strong> uniemożliwiające korzystanie z usług, które nie zostały naprawione w terminie.</p>
                    </div>
                    <div class="refund-card" data-aos="zoom-in" data-aos-delay="300">
                        <i class="fas fa-hourglass-half"></i>
                        <h3>Prawo do odstąpienia</h3>
                        <p>Możliwość anulowania zamówienia w ciągu 14 dni od momentu płatności, o ile praca nad Twoim przypadkiem nie została jeszcze rozpoczęta.</p>
                    </div>
                </div>

                <div class="procedure-block" data-aos="fade-up">
                    <h2>Procedura ubiegania się o zwrot</h2>
                    <p>Aby zainicjować proces zwrotu na platformie <strong><?= $domainTitle ?></strong>, wykonaj następujące kroki:</p>
                    <div class="steps-mini">
                        <div class="step-mini"><span>1</span> Wyślij zgłoszenie na adres <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a></div>
                        <div class="step-mini"><span>2</span> Wpisz temat: „Wniosek o zwrot środków”</div>
                        <div class="step-mini"><span>3</span> Podaj dane: Imię, adres e-mail oraz datę transakcji</div>
                        <div class="step-mini"><span>4</span> Krótko opisz powód swojej decyzji</div>
                    </div>
                </div>

                <h2 data-aos="fade-up">Terminy i sposób zwrotu</h2>
                <p data-aos="fade-up">
                    Po zatwierdzeniu wniosku, zwrot środków zostanie zrealizowany w ciągu <strong>7–14 dni roboczych</strong>. 
                    Środki są zwracane tą samą metodą, którą dokonano płatności. 
                    Faktyczny czas księgowania zależy od regulaminu Twojego banku w <strong>Polsce</strong> lub kraju Twojego pobytu.
                </p>

                <div class="warning-block" data-aos="fade-up">
                    <h2>Wyjątki i ograniczenia</h2>
                    <ul class="legal-list">
                        <li>Usługa została już w pełni wykonana (np. odbyła się indywidualna konsultacja).</li>
                        <li>Wniosek został złożony po upływie 14 dni kalendarzowych od momentu zakupu.</li>
                        <li>Uzyskałeś dostęp do ponad 50% unikalnych autorskich metodologii i materiałów.</li>
                        <li>Naruszenie zasad współpracy z ekspertami <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy" data-aos="zoom-in">
                    <h2>Masz pytania?</h2>
                    <p>Nasz zespół wsparcia jest gotowy, aby pomóc Ci zrozumieć szczegóły:</p>
                    <div class="policy-contacts-row">
                        <a href="mailto:support@<?= $fullDomain ?>" class="policy-mail">support@<?= $fullDomain ?></a>
                        <a href="tel:+48221052857" class="policy-phone">+48 22 105 28 57</a>
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
            <p>Ta strona używa plików cookies w celu poprawy działania. Więcej szczegółów w naszej <a href="./cookies.php">Polityce Cookies</a>.</p>
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