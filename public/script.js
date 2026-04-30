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
                showToast('Please enter your name', 'error');
                return;
            }

            var emailOK = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
            if (!emailOK) {
                msg.textContent = 'Please enter a valid email.';
                showToast('Please enter a valid email', 'error');
                return;
            }

            if (subject.length < 2) {
                msg.textContent = 'Please enter a subject.';
                showToast('Empty subject', 'error');
                return;
            }

            if (message.length < 5) {
                msg.textContent = 'Please enter a message.';
                showToast('Empty message content', 'error');
                return;
            }

            // CSRF token
            var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            msg.style.color = '#42ff42';
            // msg.textContent = 'Sending...';
            showToast('Sending...!', 'success');

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
                msg.style.color = '#42ff42';
                // msg.textContent = 'Message sent successfully!';
                showToast('Message sent successfully!', 'success');
                form.reset();
            })
            .catch(() => {
                msg.style.color = '#e80c0c';
                // msg.textContent = 'Something went wrong. Try again.';
                showToast('Something went wrong. Try again.', 'error');
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

    function showToast(message, type = 'success') {
        var toast = document.getElementById('toast');
        if (!toast) return;

        toast.textContent = message;
        toast.className = 'toast show ' + type;

        setTimeout(function () {
            toast.className = 'toast';
        }, 3000);
    }

// =========================
// EVENTS SLIDER
// =========================
(function () {
    const slides = document.querySelectorAll('.event-slide');
    const next = document.querySelector('.slider-btn.next');
    const prev = document.querySelector('.slider-btn.prev');

    const title = document.getElementById('eventTitle');
    const desc = document.getElementById('eventDesc');
    const meta = document.getElementById('eventMeta');

    if (!slides.length) return;

    let index = 0;

    const data = [
        {
    title: "LEVEL 1 CRICKET UMPIRE ACCREDITATION COURSE – ONLINE BATCH 1",
    desc: `
            <p>Take your cricket knowledge to the <strong>NEXT LEVEL</strong> and gain the confidence to understand, control, and respect the game like a professional! 📘🏏</p>

            <p><strong>This is NOT just an umpire course</strong> — it is a powerful learning experience for:</p>

            <ul>
                <li>👨‍⚖️ Aspiring Umpires</li>
                <li>🏏 Cricketers</li>
                <li>👨‍🏫 Coaches</li>
                <li>📋 Team Managers</li>
                <li>📊 Scorers</li>
                <li>🏟️ Cricket Organizers</li>
                <li>❤️ Cricket Enthusiasts</li>
            </ul>

            <p><strong>📌 WHY JOIN THIS COURSE?</strong></p>
            <ul>
                <li>✔ Understand the Laws of Cricket in depth</li>
                <li>✔ Make smarter decisions on and off the field</li>
                <li>✔ Improve discipline and game awareness</li>
                <li>✔ Run matches more professionally</li>
                <li>✔ Gain respect as a knowledgeable cricket member</li>
            </ul>

            <p><strong>📚 COURSE DETAILS:</strong></p>
            <ul>
                <li>🖥️ 7:00 PM – 9:00 PM</li>
                <li>📅 15, 16, 17, 19, 20 May 2026</li>
                <li>📝 Exam: 24th May 2026</li>
                <li>💰 AED 400 + VAT</li>
            </ul>

            <p><strong>📞 REGISTER NOW:</strong><br>
            📱 +971 50 6328350 – Manju<br>
            📱 +971 55 8380176 – Chemila</p>

            <p><strong>🔥 MASTER THE GAME 🔥</strong></p>
        `,
        meta: [
            "📍 Dubai International Stadium",
            "📅 August 2025",
            "🏆 International Tournament"
        ]
        },
        {
            title: "T22 Super League – Season 2 (Weekend Battle)",
            desc: `
                <p>
                Top Knock T22 Super League Season 2 is an exciting <strong>weekend cricket competition</strong> designed for competitive teams seeking high-intensity action under lights.
                </p>

                <p>
                Played in a <strong>22-over format</strong> with dynamic <strong>powerplay rules</strong> and <strong>impact players</strong>, the league brings together <strong>4 strong teams</strong> battling for one ultimate title.
                </p>

                <p>
                📍 Hosted at <strong>Eagles Cricket Ground, Sharjah</strong>, the tournament delivers:
                </p>

                <ul>
                    <li>🏟️ Professional match conditions</li>
                    <li>🎽 Quality equipment</li>
                    <li>📺 Live-style match experience</li>
                    <li>📸 Full media coverage</li>
                </ul>

                <p>
                This is the perfect platform to <strong>showcase talent</strong> and compete at a <strong>higher level</strong>.
                </p>
                <p><strong>📞 REGISTER NOW:</strong><br>
                    📱 +971 50 6328350 – Manju<br>
                    📱 +971 55 8380176 – Chemila</p>
                `,
            meta: [
                "📍 Eagles Cricket Ground - Sharjah",
                "📅 8th May onwards",
                "🏆 AED 950 per match"
            ]
        },
        {
            title: "T22 Super League – Season 3 (Midweek Battle)",
            desc: `
                <p>
                Season 3 of the <strong>Top Knock T22 Super League</strong> shifts the action to <strong>midweek evenings</strong>, delivering a fast-paced cricketing experience under lights.
                </p>

                <p>
                Featuring <strong>6 competitive teams</strong>, the tournament blends <strong>strategy and excitement</strong> through its <strong>22-over format</strong>, extended <strong>powerplays</strong>, and <strong>impact player rules</strong>.
                </p>

                <p>
                🏟️ Designed for teams who want to stay competitive during the week, this league offers:
                </p>

                <ul>
                    <li>💡 Premium playing facilities</li>
                    <li>📸 Professional match-day photography</li>
                    <li>📋 Strong tournament organization</li>
                    <li>🌙 High-intensity matches under lights</li>
                </ul>

                <p>
                This is the perfect opportunity to stay <strong>match-ready</strong> while competing for <strong>top honors</strong> in a professionally managed environment.
                </p>
                `,
            meta: [
                "📍 Eagles Cricket Ground - Sharjah",
                "📅 13th May onwards",
                "🏆 AED 900 per match"
            ]
        }
    ];

    function showSlide(i) {
        slides.forEach(s => s.classList.remove('active'));
        slides[i].classList.add('active');

        if (title && desc && meta) {
            title.textContent = data[i].title;
            desc.innerHTML = data[i].desc;
            meta.innerHTML = data[i].meta.map(m => `<li>${m}</li>`).join('');
        }
    }

    document.querySelectorAll('.event-slide img').forEach((img, i) => {
        img.addEventListener('click', function () {
            index = i;
            showSlide(index);
        });
    });

    if (next) next.addEventListener('click', () => {
        index = (index + 1) % slides.length;
        showSlide(index);
    });

    if (prev) prev.addEventListener('click', () => {
        index = (index - 1 + slides.length) % slides.length;
        showSlide(index);
    });

    showSlide(0);

})();


// =========================
// LIGHTBOX (FIXED)
// =========================
(function () {
    const images = document.querySelectorAll('.event-slide img');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightboxImg');
    const closeBtn = document.querySelector('#lightbox .close');

    if (!images.length || !lightbox || !lightboxImg) return;

    images.forEach(img => {
        img.addEventListener('click', function () {
            lightbox.style.display = 'flex';
            lightboxImg.src = this.src; // ✅ correct image
        });
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            lightbox.style.display = 'none';
        });
    }

    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            lightbox.style.display = 'none';
        }
    });

})();