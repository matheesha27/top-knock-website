<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>HOME | Top-Knock</title>

    <link rel="icon" href="{{ asset('images/logo-bg.jpg') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600&family=Rajdhani:wght@300;400;600&family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    @include('partials.header')
    <!-- Floating Action Button -->
    <a class="fab" href="#contact" title="Contact"><i class='fa fa-comment-dots'></i></a>

    <!-- Hero -->
    <section id="home" class="hero">
        <!-- Background video -->
        <video autoplay muted loop playsinline class="hero-video">
            <source src="videos/hero-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-inner">
            <h1>ELEVATE YOUR<br />SPORTING EVENTS</h1>
            <p class="hero-p">NOW WITH TOP-KNOCK TO GUIDE YOU TO EXCELLENCE</p>
            <div class="hero-btn">
                <a href="/about-us" class="btn secondary">Learn More</a>
                <a href="/contact-us" class="btn primary">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Two Tiles -->
    <section class="tiles" id="events">
        <div class="tiles-inner">
            <a class="tile tile1" href="#events">
                <div class="overlay"></div>
                <div class="content right">
                    <h3>Sports<br />Events</h3>
                    <img src="images/arrow-right-bold.png" alt="Go" class="go">
                </div>
            </a>
            <a class="tile tile2" href="#services" id="services">
                <div class="overlay"></div>
                <div class="content left">
                    <h3>Sports<br />Services</h3>
                    <img src="images/arrow-right-bold.png" alt="Go" class="go">
                </div>
            </a>
        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <div class="overlay">
            <div class="content">
                <h2>ABOUT US</h2>
                <p>
                    At Top Knock, we are passionate about sports and committed to delivering unforgettable events.
                    Our team of experienced professionals has a proven track record of planning and executing
                    successful sports events of all sizes, from local tournaments to international championships.
                    We pride ourselves in providing exceptional service and creating memorable experiences for
                    athletes, audiences, and sponsors alike.
                </p>
                <a href="/about-us" class="btn primary">Learn More</a>

                <div class="socials">
                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>


    <!-- Team -->
    <section class="team" id="team">
        <h3 class="title">Meet the Team</h3>
        <hr class="divider-team">
        <p class="subtitle">
            Meet our dynamic team of passionate individuals who are the driving force behind Top-Knock.<br>
            Together, we combine our diverse expertise in event management, marketing, and operations to<br>
            deliver unforgettable sporting experiences.
        </p>

        <div class="team-grid">
            <!-- Member 1 -->
            <article class="member">
                <div class="photo">
                    <img src="images/member-1.png" alt="Manju Abeysekera">
                </div>
                <div class="content">
                    <div class="header-line">
                        <div>
                            <h4>Manju Abeysekera</h4>
                            <div class="role">(Founder & CEO)</div>
                        </div>
                        <div class="social-icons">
                            <a href="https://www.instagram.com/manju.abeysekera/?igshid=MzRlODBiNWFlZA%3D%3D"><i
                                    class="fa fa-instagram"></i></a>
                            <a href="https://www.facebook.com/manju.abeysekera?mibextid=LQQJ4d"><i
                                    class="fa fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/in/manju-abeysekera-mba-597bb728"><i
                                    class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <p class="bio">
                        A Banker in profession who is passionate about various sports. He has diversified himself
                        to be a Sports Event Manager and ICC qualified Cricket Coach.
                    </p>
                    <p class="bio">
                        Manju’s experience spans over 16 years in UAE where he has created a name in the market
                        for his professionalism, standards, trust and innovation. He has got vast experience
                        working with Cricket Academies, Clubs & Franchises in UAE and Sri Lanka.
                    </p>
                </div>
            </article>

            <!-- Member 2 -->
            <article class="member">
                <div class="photo">
                    <img src="images/member-2.png" alt="Rangika Thilakawardena">
                </div>
                <div class="content">
                    <div class="header-line">
                        <div>
                            <h4>Rangika Thilakawardena</h4>
                            <div class="role">(Managing Director)</div>
                        </div>
                        <div class="social-icons">
                            <a href="https://www.instagram.com/rangikathilakawardena/?igshid=MzRlODBiNWFlZA%3D%3D"><i
                                    class="fa fa-instagram"></i></a>
                            <a href="https://www.facebook.com/rangika.thilakawardena?mibextid=LQQJ4d"><i
                                    class="fa fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/in/rangika-thilakawardena-40a84674/"><i
                                    class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <p class="bio">
                        Qualified Administrator, Finance Manager in profession. Rangika holds high abilities
                        in Managing Overall Operations with lean processes & principles.
                    </p>
                    <p class="bio">
                        Over 14 years UAE experience in different organizations has led Rangika to be an outshined
                        individual who can drive a company to its success.
                    </p>
                </div>
            </article>

            <!-- Member 3 -->
            <article class="member">
                <div class="photo">
                    <img src="images/member-3.png" alt="Nimesh Jayawardena">
                </div>
                <div class="content">
                    <div class="header-line">
                        <div>
                            <h4>Nimesh Jayawardena</h4>
                            <div class="role">(Head of Operations & Finance)</div>
                        </div>
                        <div class="social-icons">
                            <a href="https://www.instagram.com/slcluae/"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.facebook.com/nimesh.jayawardana.9?mibextid=LQQJ4d"><i
                                    class="fa fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/in/nimesh-jayawardena-acma-cgma-acim-mba-67a07839/"><i
                                    class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <p class="bio">
                        A qualified Finance individual, A Banker in profession with highest level of dedication and
                        commitment towards accomplishing organizational goals.
                    </p>
                    <p class="bio">
                        Nimesh acts as a consultant to many organizations to fulfill their Operational & Financial
                        solutions.
                    </p>
                </div>
            </article>
        </div>
    </section>

    <!-- CTA Band -->
    <section class="cta-band">
        <div class="text-div">
            <p>ELEVATE YOUR NEXT SPORTING EVENT</p>
        <div class="contact-div">
            <a class="btn primary2" href="/contact-us">Contact Us</a>
        </div>

        <div class="image-div">
            <div class="cta-image">
                <img src="images/img01.png" alt="">
                <div class="overlay">
                    <div class="left-icons">
                        <i class="fa fa-heart-o like-btn"></i>
                        <span class="like-count">0</span>
                    </div>
                    <div class="right-icons">
                        <i class="fa fa-share"></i>
                    </div>
                </div>
            </div>

            <div class="cta-image">
                <img src="images/img02.jpg" alt="">
                <div class="overlay">
                    <div class="left-icons">
                        <i class="fa fa-heart-o like-btn"></i>
                        <span class="like-count">0</span>
                    </div>
                    <div class="right-icons">
                        <i class="fa fa-share"></i>
                    </div>
                </div>
            </div>

            <div class="cta-image">
                <img src="images/img03.png" alt="">
                <div class="overlay">
                    <div class="left-icons">
                        <i class="fa fa-heart-o like-btn"></i>
                        <span class="like-count">0</span>
                    </div>
                    <div class="right-icons">
                        <i class="fa fa-share"></i>
                    </div>
                </div>
            </div>

            <div class="cta-image">
                <img src="images/img04.png" alt="">
                <div class="overlay">
                    <div class="left-icons">
                        <i class="fa fa-heart-o like-btn"></i>
                        <span class="like-count">0</span>
                    </div>
                    <div class="right-icons">
                        <i class="fa fa-share"></i>
                    </div>
                </div>
            </div>

            <div class="cta-image">
                <img src="images/img05.png" alt="">
                <div class="overlay">
                    <div class="left-icons">
                        <i class="fa fa-heart-o like-btn"></i>
                        <span class="like-count">0</span>
                    </div>
                    <div class="right-icons">
                        <i class="fa fa-share"></i>
                    </div>
                </div>
            </div>

            <div class="cta-image">
                <img src="images/img06.png" alt="">
                <div class="overlay">
                    <div class="left-icons">
                        <i class="fa fa-heart-o like-btn"></i>
                        <span class="like-count">0</span>
                    </div>
                    <div class="right-icons">
                        <i class="fa fa-share"></i>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Fullscreen Modal -->
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">

        <!-- Top Bar -->
        <div class="top-icons">
            <i class="fa fa-expand maximize"></i>
            <i class="fa fa-compress minimize hidden"></i>
            <i class="fa fa-share share"></i>
            <i class="fa fa-heart-o like-btn"></i>
            <span class="like-count">0</span>
        </div>

        <!-- Navigation -->
        <a class="prev">&#10094;</a>
        <a class="next">&#10095;</a>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const modal = document.getElementById("imageModal");
            const modalImg = document.getElementById("modalImage");
            const closeBtn = document.querySelector(".close");
            const maximizeBtn = document.querySelector(".maximize");
            const minimizeBtn = document.querySelector(".minimize");
            const modalShare = document.querySelector(".top-icons .share");
            const modalLikeBtn = document.querySelector(".top-icons .like-btn");
            const modalLikeCount = document.querySelector(".top-icons .like-count");

            const cards = document.querySelectorAll(".cta-image");
            const overlays = document.querySelectorAll(".cta-image .overlay");

            // Per-image like state
            const likes = Array.from(cards).map(() => 0);
            const liked = Array.from(cards).map(() => false);

            let currentIndex = 0;

            // Helper: update modal like UI
            function setModalLikeUI(isLiked, count) {
                modalLikeBtn.classList.toggle("fa-heart", isLiked);
                modalLikeBtn.classList.toggle("fa-heart-o", !isLiked);
                modalLikeCount.textContent = count;
            }

            // Helper: toggle like for an image index and sync both places
            function toggleLike(index, gridHeartEl, gridCountEl) {
                liked[index] = !liked[index];
                likes[index] += liked[index] ? 1 : -1;

                // Update grid icon/count
                gridHeartEl.classList.toggle("fa-heart", liked[index]);
                gridHeartEl.classList.toggle("fa-heart-o", !liked[index]);
                gridCountEl.textContent = likes[index];

                // If modal is open on the same image, sync it too
                if (modal.style.display === "block" && index === currentIndex) {
                    setModalLikeUI(liked[index], likes[index]);
                }
            }

            // Open modal for given index
            function openModal(index) {
                const img = cards[index].querySelector("img");
                currentIndex = index;
                modal.style.display = "block";
                modalImg.src = img.src;
                setModalLikeUI(liked[index], likes[index]);
            }

            // Overlay click: open modal ONLY when background (not icons) is clicked
            overlays.forEach((overlay, index) => {
                overlay.addEventListener("click", (e) => {
                    if (e.target.closest(".left-icons") || e.target.closest(".right-icons")) return;
                    openModal(index);
                });

                // Grid like button
                const heart = overlay.querySelector(".like-btn");
                const countSpan = overlay.querySelector(".like-count");
                heart.addEventListener("click", (e) => {
                    e.stopPropagation(); // don't open modal
                    toggleLike(index, heart, countSpan);
                });

                // (Optional) grid share button example – prevents modal open
                const share = overlay.querySelector(".right-icons .fa-share");
                if (share) {
                    share.addEventListener("click", (e) => {
                        e.stopPropagation();
                        const url = cards[index].querySelector("img").src;
                        if (navigator.share) navigator.share({
                            title: document.title,
                            url
                        });
                        else navigator.clipboard.writeText(url);
                    });
                }
            });

            // Modal navigation
            document.querySelector(".next").addEventListener("click", () => {
                currentIndex = (currentIndex + 1) % cards.length;
                modalImg.src = cards[currentIndex].querySelector("img").src;
                setModalLikeUI(liked[currentIndex], likes[currentIndex]);
            });
            document.querySelector(".prev").addEventListener("click", () => {
                currentIndex = (currentIndex - 1 + cards.length) % cards.length;
                modalImg.src = cards[currentIndex].querySelector("img").src;
                setModalLikeUI(liked[currentIndex], likes[currentIndex]);
            });

            // Close modal
            closeBtn.addEventListener("click", () => (modal.style.display = "none"));

            // Maximize / Minimize (use Fullscreen API)
            maximizeBtn.addEventListener("click", () => {
                if (modal.requestFullscreen) modal.requestFullscreen();
                maximizeBtn.classList.add("hidden");
                minimizeBtn.classList.remove("hidden");
            });
            minimizeBtn.addEventListener("click", () => {
                if (document.fullscreenElement) document.exitFullscreen();
                minimizeBtn.classList.add("hidden");
                maximizeBtn.classList.remove("hidden");
            });

            // Modal like button (sync with grid)
            modalLikeBtn.addEventListener("click", () => {
                const gridHeart = overlays[currentIndex].querySelector(".like-btn");
                const gridCount = overlays[currentIndex].querySelector(".like-count");
                toggleLike(currentIndex, gridHeart, gridCount);
            });

            // Modal share
            modalShare.addEventListener("click", () => {
                const url = cards[currentIndex].querySelector("img").src;
                if (navigator.share) navigator.share({
                    title: document.title,
                    url
                });
                else navigator.clipboard.writeText(url);
            });
        });
    </script>



    <!-- Partners -->
    <section class="partners">
        <h3>Working With the Best Clients and Partners</h3>
        <div class="logo-grid">
            <div class="logo"><img src="{{ asset('images/clients/1.avif') }}" alt="DHL"></div>
            <div class="logo"><img src="{{ asset('images/clients/2.avif') }}" alt="Lion"></div>
            <div class="logo"><img src="{{ asset('images/clients/3.avif') }}" alt="Red Bull"></div>
            <div class="logo"><img src="{{ asset('images/clients/4.avif') }}" alt="FitsAir"></div>
            <div class="logo"><img src="{{ asset('images/clients/5.avif') }}" alt="mycandy"></div>
            <div class="logo"><img src="{{ asset('images/clients/6.avif') }}" alt="mycargo"></div>
            <div class="logo"><img src="{{ asset('images/clients/7.avif') }}" alt="Then and Now"></div>
            <div class="logo"><img src="{{ asset('images/clients/8.avif') }}" alt="Then and Now"></div>
            <div class="logo"><img src="{{ asset('images/clients/9.avif') }}" alt="Then and Now"></div>
        </div>
        <div class="maxw" style="text-align:center; padding-bottom:24px;margin-top:24px">
            <a href="{{ asset('Our Partners.pdf') }}" target="_blank" class="btn" style="border-color:#7f86a6;color:#cbd0e6">View More...</a>
        </div>
    </section>

    <!-- Numbers -->
    <section class="numbers" id="expertise">
        <p>OUR EXPERTISE</p>
        <div class="nums">
            <div>
                <div class="n" data-count="10">0</div><hr>
                <div class="cap">YEARS IN SERVICE</div>
            </div>
            <div>
                <div class="n" data-count="100">0</div><hr>
                <div class="cap">EVENTS HOSTED</div>
            </div>
            <div>
                <div class="n" data-count="100">0</div><hr>
                <div class="cap">SATISFIED CLIENTS</div>
            </div>
            <div>
                <div class="n" data-count="15">0</div><hr>
                <div class="cap">SPORTS CATEGORIES</div>
            </div>
        </div>
    </section>

    <!-- Quote -->
    <section class="quote">
        <blockquote>
            “Sport has the power to change the world. It has <br> the power to inspire. It has the power to unite <br>
            people in a way that little else does. It speaks to <br> youth in a language they <br> understand.
            Sport can create hope where once <br> there was only despair.”
        </blockquote><br>
        <div class="author">NELSON MANDELA</div>
    </section>

    @include('partials.footer')

    <script>
        // Mobile menu toggle
        (function() {
            var burger = document.getElementById('burger');
            var menu = document.getElementById('mobileMenu');
            if (burger) {
                burger.addEventListener('click', function() {
                    var open = menu.style.display === 'block';
                    menu.style.display = open ? 'none' : 'block';
                    burger.setAttribute('aria-expanded', (!open).toString());
                });
            }
            // Close menu when clicking a link
            menu.querySelectorAll('a').forEach(function(a) {
                a.addEventListener('click', function() {
                    menu.style.display = 'none';
                    burger.setAttribute('aria-expanded', 'false');
                });
            });
        })();

        // Smooth scroll for internal links
        document.querySelectorAll('a[href^="#"]').forEach(function(a) {
            a.addEventListener('click', function(e) {
                var id = a.getAttribute('href').slice(1);
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

        // Simple number counters when visible
        (function() {
            var counters = document.querySelectorAll('.n[data-count]');
            var activated = false;

            function onScroll() {
                if (activated) return;
                var section = document.getElementById('expertise');
                if (!section) return;
                var rect = section.getBoundingClientRect();
                if (rect.top < window.innerHeight - 80) {
                    activated = true;
                    counters.forEach(function(el) {
                        var target = parseInt(el.getAttribute('data-count'), 10) || 0;
                        var start = 0;
                        var steps = 40; // simple linear steps
                        var step = Math.max(1, Math.round(target / steps));
                        var timer = setInterval(function() {
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

        // Basic contact form validation demo
        (function() {
            var form = document.getElementById('contactForm');
            var msg = document.getElementById('formMsg');
            if (!form) return;
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                msg.textContent = '';
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
                setTimeout(function() {
                    msg.textContent = '';
                    msg.style.color = '#b00040';
                }, 2500);
            });
        })();
    </script>
</body>

</html>
