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
            <span class="section-tag">Terms & Conditions</span>
            <h1>Warunki użytkowania</h1>

            <div class="legal-content">
                <div class="policy-hero-card terms-accent" data-aos="fade-up">
                    <p>
                        Witamy na platformie <strong><?= $domainTitle ?></strong>! Niniejsze Warunki użytkowania stanowią prawnie wiążącą umowę między Tobą (dalej — „Użytkownikiem”) a <strong><?= $domainTitle ?></strong>. Korzystając z naszej strony, potwierdzasz pełną akceptację niniejszych Warunków oraz gotowość do przestrzegania innowacyjnych standardów rozwoju zawodowego.
                    </p>
                </div>

                <div class="legal-section" data-aos="fade-up" data-aos-delay="100">
                    <h2>1. Przedmiot Umowy</h2>
                    <p>
                        Firma zapewnia Użytkownikowi dostęp do platformy <strong><?= $fullDomain ?></strong> i jej funkcjonalności, w tym: dostęp do materiałów eksperckich, artykułów na blogu, konsultacji kariery oraz innych narzędzi tworzących rozwiązania zmieniające zasady gry w Twojej karierze na rynku polskim i UE.
                    </p>
                </div>

                <div class="legal-section" data-aos="fade-up" data-aos-delay="200">
                    <h2>2. Prawa i obowiązki Użytkownika</h2>
                    <p>Podczas korzystania z platformy <strong><?= $domainTitle ?></strong> w celu budowania kariery zabrania się:</p>
                    <ul class="legal-list">
                        <li>Publikowania lub przesyłania informacji naruszających prawo polskie lub normy UE.</li>
                        <li>Podejmowania działań mających na celu destabilizację infrastruktury cyfrowej <strong><?= $domainTitle ?></strong>.</li>
                        <li>Korzystania ze zautomatyzowanych systemów (botów, parserów) do zbierania danych bez oficjalnej zgody.</li>
                        <li>Podawania fałszywych informacji o swoim doświadczeniu zawodowym podczas zapisu na konsultacje.</li>
                    </ul>
                </div>

                <div class="legal-section" data-aos="fade-up" data-aos-delay="300">
                    <h2>3. Własność intelektualna</h2>
                    <div class="property-block">
                        <i class="fas fa-copyright"></i>
                        <p>
                            Cała zawartość strony <strong><?= $fullDomain ?></strong> (autorskie metodyki, teksty, kod, grafika) stanowi wyłączną własność Firmy. Użytkownik otrzymuje ograniczoną licencję na osobisty, niekomercyjny użytek w celu realizacji własnego upgrade'u kariery.
                        </p>
                    </div>
                </div>

                <div class="legal-section" data-aos="fade-up" data-aos-delay="400">
                    <h2>4. Ograniczenie odpowiedzialności</h2>
                    <div class="warning-block">
                        <p>
                            Usługi platformy są świadczone na zasadzie <strong>„as is” (takie, jakie są)</strong>. <strong><?= $domainTitle ?></strong> nie ponosi odpowiedzialności za jakiekolwiek bezpośrednie lub pośrednie szkody wynikłe z zastosowania zaproponowanych metodologii lub czasowej niedostępności strony.
                        </p>
                    </div>
                </div>

                <div class="legal-section" data-aos="fade-up" data-aos-delay="500">
                    <h2>5. Zmiany i rozstrzyganie sporów</h2>
                    <p>
                        Zastrzegamy sobie prawo do aktualizacji niniejszych Warunków w celu poprawy jakości wsparcia. Wszelkie spory będą rozstrzygane na drodze konstruktywnych negocjacji. W przypadku braku porozumienia, spór podlega rozstrzygnięciu zgodnie z obowiązującym prawem właściwym dla miejsca rejestracji Firmy.
                    </p>
                </div>

                <div class="contact-footer-policy" data-aos="zoom-in">
                    <h2>Informacje kontaktowe</h2>
                    <p>Jeśli masz pytania dotyczące niniejszych Warunków, skontaktuj się z naszym wsparciem eksperckim:</p>
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