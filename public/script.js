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
            var subject = form.subject.value.trim();
            var message = form.message.value.trim();

            // Validation
            if (name.length < 2) {
                msg.textContent = 'Please enter your name.';
                return;
            }

            var emailOK = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
            if (!emailOK) {
                msg.textContent = 'Please enter a valid email.';
                return;
            }

            if (subject.length < 2) {
                msg.textContent = 'Please enter a subject.';
                return;
            }

            if (message.length < 5) {
                msg.textContent = 'Please enter a message.';
                return;
            }

            // CSRF token
            var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            msg.style.color = '#333';
            msg.textContent = 'Sending...';

            fetch('/contact-send', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token
                },
                body: JSON.stringify({
                    name: name,
                    email: email,
                    subject: subject,
                    message: message
                })
            })
            .then(res => res.json())
            .then(data => {
                msg.style.color = '#006400';
                msg.textContent = 'Message sent successfully!';
                form.reset();
            })
            .catch(() => {
                msg.style.color = '#b00040';
                msg.textContent = 'Something went wrong. Try again.';
            });
        })
    })();

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

    document.querySelectorAll('.event-gallery').forEach((gallery) => {

        const track = gallery.querySelector('.event-track');
        const images = gallery.querySelectorAll('.event-img');

        let index = 0;
        const visibleCount = 2;
        const totalSlides = Math.ceil(images.length / visibleCount);

        function slide() {
            index++;
            if (index >= totalSlides) {
                index = 0;
            }
            track.style.transform = `translateX(-${index * 100}%)`;
        }

        setInterval(slide, 4000); // 4 seconds
    });
    });