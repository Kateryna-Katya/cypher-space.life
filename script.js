document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. ПЛАВНЫЙ СКРОЛЛ ХЕДЕРА ---
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.padding = '12px 0';
            header.style.background = 'rgba(10, 10, 10, 0.95)';
        } else {
            header.style.padding = '20px 0';
            header.style.background = 'rgba(10, 10, 10, 0.8)';
        }
    });

    // --- 2. МОБИЛЬНОЕ МЕНЮ ---
    const burger = document.getElementById('burger');
    const menuClose = document.getElementById('menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuLinks = document.querySelectorAll('.mobile-menu__link');

    const toggleMenu = () => mobileMenu.classList.toggle('active');

    burger.addEventListener('click', toggleMenu);
    menuClose.addEventListener('click', toggleMenu);
    
    menuLinks.forEach(link => {
        link.addEventListener('click', () => mobileMenu.classList.remove('active'));
    });

    // --- 3. TILT EFFECT ДЛЯ КЕЙСОВ ---
    const cards = document.querySelectorAll('.case-card__inner');
    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;
            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg)`;
        });
    });

    // --- 4. АНИМАЦИЯ СЧЕТЧИКОВ ---
    const stats = document.querySelectorAll('.stat-item__num');
    const countUp = (el) => {
        const target = +el.getAttribute('data-target');
        const count = +el.innerText;
        const speed = 2000 / target;
        if (count < target) {
            el.innerText = count + 1;
            setTimeout(() => countUp(el), speed);
        } else {
            el.innerText = target;
        }
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.hasAttribute('data-target')) {
                    countUp(entry.target);
                    observer.unobserve(entry.target);
                }
            }
        });
    }, { threshold: 0.5 });
    stats.forEach(stat => observer.observe(stat));

    // --- 5. ФОРМА КОНТАКТОВ + КАПЧА ---
    const phoneInput = document.getElementById('phone-input');
    if (phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/[^0-9]/g, '');
        });
    }

    const captchaQ = document.getElementById('captcha-question');
    if (captchaQ) {
        const num1 = Math.floor(Math.random() * 10) + 1;
        const num2 = Math.floor(Math.random() * 10) + 1;
        const correctAnswer = num1 + num2;
        captchaQ.innerText = `${num1} + ${num2} = `;

        const form = document.getElementById('contact-form');
        const successMsg = document.getElementById('form-success');

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const userAnswer = document.getElementById('captcha-answer').value;
            
            if (parseInt(userAnswer) !== correctAnswer) {
                alert('Ошибка в примере! Попробуйте еще раз.');
                return;
            }

            const btn = form.querySelector('.form__btn');
            btn.innerText = 'Отправка...';
            btn.disabled = true;

            setTimeout(() => {
                successMsg.style.display = 'flex';
                form.reset();
            }, 1500);
        });
    }

    // --- 6. COOKIE POPUP ---
    const cookiePopup = document.getElementById('cookie-popup');
    const cookieAccept = document.getElementById('cookie-accept');

    if (!localStorage.getItem('cookieConsent')) {
        setTimeout(() => {
            cookiePopup.classList.add('active');
        }, 2000);
    }

    cookieAccept.addEventListener('click', () => {
        localStorage.setItem('cookieConsent', 'true');
        cookiePopup.classList.remove('active');
    });

});