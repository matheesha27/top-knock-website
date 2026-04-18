document.addEventListener("DOMContentLoaded", function () {

    // =========================
    // MOBILE MENU
    // =========================
    var burger = document.getElementById('burger');
    var menu = document.getElementById('mobileMenu');
    var closeBtn = document.getElementById('closeMenu');

    if (burger && menu) {
        burger.addEventListener('click', function () {
            menu.classList.add('active');
            burger.setAttribute('aria-expanded', 'true');
        });
    }

    if (closeBtn && menu) {
        closeBtn.addEventListener('click', function () {
            menu.classList.remove('active');
            burger.setAttribute('aria-expanded', 'false');
        });
    }

    // Close menu when clicking links
    if (menu) {
        menu.querySelectorAll('a').forEach(function (a) {
            a.addEventListener('click', function () {
                menu.classList.remove('active');
                if (burger) burger.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // =========================
    // DROPDOWN (MOBILE ONLY)
    // =========================
    document.querySelectorAll('.dropdown-toggle').forEach(function (item) {
        item.addEventListener('click', function (e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                this.parentElement.classList.toggle('active');
            }
        });
    });

    // =========================
    // SMOOTH SCROLL
    // =========================
    document.querySelectorAll('a[href^="#"]').forEach(function (a) {
        a.addEventListener('click', function (e) {
            var id = this.getAttribute('href').slice(1);
            if (!id) return;

            var el = document.getElementById(id);
            if (el) {
                e.preventDefault();
                window.scrollTo({
                    top: el.getBoundingClientRect().top + window.pageYOffset - 60,
                    behavior: 'smooth'
                });
            }
        });
    });

    // =========================
    // COUNTERS
    // =========================
    (function () {
        var counters = document.querySelectorAll('.n[data-count]');
        var activated = false;

        function onScroll() {
            if (activated) return;

            var section = document.getElementById('expertise');
            if (!section) return;

            var rect = section.getBoundingClientRect();

            if (rect.top < window.innerHeight - 80) {
                activated = true;

                counters.forEach(function (el) {
                    var target = parseInt(el.getAttribute('data-count'), 10) || 0;
                    var start = 0;
                    var steps = 40;
                    var step = Math.max(1, Math.round(target / steps));

                    var timer = setInterval(function () {
                        start += step;

                        if (start >= target) {
                            start = target;
                            clearInterval(timer);
                        }

                        el.textContent = start + (target >= 100 ? '+' : '+');
                    }, 40);
                });
            }
        }

        window.addEventListener('scroll', onScroll);
        onScroll();
    })();

    // =========================
    // CONTACT FORM
    // =========================
    (function () {
        var form = document.getElementById('contactForm');
        var msg = document.getElementById('formMsg');

        if (!form) return;

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            msg.textContent = '';
            msg.style.color = '#b00040';

            var name = form.name.value.trim();
            var email = form.email.value.trim();
            var message = form.message.value.trim();

            if (name.length < 2) {
                msg.textContent = 'Please enter your name.';
                return;
            }

            var emailOK = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
            if (!emailOK) {
                msg.textContent = 'Please enter a valid email.';
                return;
            }

            if (message.length < 5) {
                msg.textContent = 'Please enter a message.';
                return;
            }

            msg.style.color = '#006400';
            msg.textContent = 'Thanks! Your message has been sent (demo).';

            form.reset();

            setTimeout(function () {
                msg.textContent = '';
            }, 2500);
        });
    })();

});

document.querySelectorAll('.mega-toggle').forEach(item => {
    item.addEventListener('click', function (e) {
        if (window.innerWidth <= 768) {
            e.preventDefault();
            this.parentElement.classList.toggle('active');
        }
    });
});

document.querySelectorAll('.mobile-dropdown-toggle').forEach(function (item) {
    item.addEventListener('click', function (e) {
        e.preventDefault();
        this.parentElement.classList.toggle('active');
    });
});