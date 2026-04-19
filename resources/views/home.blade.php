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

    <link rel="stylesheet" href="header.css?v={{ config('app.app_version') }}">
    <link rel="stylesheet" href="home.css?v={{ config('app.app_version') }}">
    <link rel="stylesheet" href="footer.css?v={{ config('app.app_version') }}">

</head>

<body>
    @include('partials.header')


    <!-- Hero -->
    <section id="home" class="hero hero-home">
        <!-- Background video -->
        <video autoplay muted loop playsinline class="hero-video">
            <source src="videos/hero-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-inner">
            <h1>ELEVATE YOUR<br />SPORTING <br class="mobile-only"> EVENTS</h1>
            <br class="mobile-only">
            <p class="hero-p">NOW WITH TOP-KNOCK <br class="mobile-only"> TO GUIDE YOU TO <br class="mobile-only"> EXCELLENCE</p>
            <div class="hero-btn">
                <a href="/about-us" class="btn primary">Learn More</a>
                <a href="/#contact" class="btn primary">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Six Tiles -->
    <section class="tiles" id="events">
        <div class="tiles-inner">
            <a class="tile tile1" href="#events">
                <div class="overlay"></div>
                <div class="content right">
                    <h3>Sports <br class="desktop-only">Events</h3>
                </div>
            </a>
            <a class="tile tile2" href="#services" id="services">
                <div class="overlay"></div>
                <div class="content left">
                    <h3>Sports <br class="desktop-only">Services</h3>
                </div>
            </a>
            <a class="tile tile1" href="#events">
                <div class="overlay"></div>
                <div class="content right">
                    <h3>Category <br class="desktop-only">3</h3>
                </div>
            </a>
            <a class="tile tile2" href="#events">
                <div class="overlay"></div>
                <div class="content left">
                    <h3>Category <br class="desktop-only">4</h3>
                </div>
            </a>
            <a class="tile tile1" href="#events">
                <div class="overlay"></div>
                <div class="content right">
                    <h3>Category <br class="desktop-only">5</h3>
                </div>
            </a>
            <a class="tile tile2" href="#events">
                <div class="overlay"></div>
                <div class="content left">
                    <h3>Category <br class="desktop-only">6</h3>
                </div>
            </a>
        </div>
    </section>

    <!-- About -->
    {{-- <section class="about" id="about">
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
    </section> --}}
    <!-- About -->
    <!-- About -->
    <section class="about" id="about">
        <!-- Parallax background image -->
        <div class="parallax-bg">
            <img src="/images/about-us.jpg" alt="About Us Background">
        </div>

        <div class="overlay" style="padding-bottom: 5%;">
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

    <script>
        // Parallax scroll effect
        // window.addEventListener("scroll", function () {
        //   const bg = document.querySelector(".parallax-bg img");
        //   if (bg) {
        //     let offset = window.scrollY;
        //     bg.style.transform = `translateY(${offset * 0.3}px)`; // adjust 0.3 for speed
        //   }
        // });
        window.addEventListener("scroll", function() {
            const bg = document.querySelector(".parallax-bg img");
            if (!bg) return;

            const offset = window.scrollY;
            const screenWidth = window.innerWidth;

            if (screenWidth >= 1024) {
                // Desktop
                bg.style.transform = `translateY(${offset * 0.3}px)`;
            } else if (screenWidth >= 768) {
                // Large mobile / small tablet
                bg.style.transform = `translateY(${offset * 0.1}px)`; // slower speed
                bg.style.marginTop = `0px`;
            } else {
                // Small mobile
                bg.style.transform = `translateY(0)`; // fixed
                bg.style.marginTop = `0px`;
            }
        });
    </script>

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
                            <a href="https://www.instagram.com/manju.abeysekera/?igshid=MzRlODBiNWFlZA%3D%3D">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="https://www.facebook.com/manju.abeysekera?mibextid=LQQJ4d">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/manju-abeysekera-mba-597bb728">
                                <i class="fa fa-linkedin"></i>
                            </a>
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

                    <!-- Contact Section -->
                    <div class="header-line">
                        <h5>Contact</h5>
                        <p>
                            <i class="fa fa-phone"></i>
                            <a href="tel:+971506328350">+971 50 6328 350</a>
                        </p>
                        <p>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:manju@top-knock.com">manju@top-knock.com</a>
                        </p>
                    </div>
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
                    <!-- Contact Section -->
                    <div class="header-line">
                        <h5>Contact</h5>
                        <p>
                            <i class="fa fa-phone"></i>
                            <a href="tel:+971509545787">+971 50 9545 787</a>
                        </p>
                        <p>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:admin@top-knock.com">admin@top-knock.com</a>
                        </p>
                    </div>
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
                    <!-- Contact Section -->
                    <div class="header-line">
                        <h5>Contact</h5>
                        <p>
                            <i class="fa fa-phone"></i>
                            <a href="tel:+971561346680">+971 56 134 6680</a>
                        </p>
                        <p>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:admin@top-knock.com">admin@top-knock.com</a>
                        </p>
                    </div>
                </div>
            </article>

            <!-- Member 4 -->
            <article class="member">
                <div class="photo">
                    <img src="images/member-2.png" alt="Rangika Thilakawardena">
                </div>
                <div class="content">
                    <div class="header-line">
                        <div>
                            <h4>Nikhila Rajakaruna</h4>
                            <div class="role">(Head of Marketing)</div>
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
                    <!-- Contact Section -->
                    <div class="header-line">
                        <h5>Contact</h5>
                        <p>
                            <i class="fa fa-phone"></i>
                            <a href="tel:+971557469153">+971 55 7469 153</a>
                        </p>
                        <p>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:info@top-knock.com">info@top-knock.com</a>
                        </p>
                    </div>
                </div>
            </article>

            <!-- Member 5 -->
            <article class="member">
                <div class="photo">
                    <img src="images/member-2.png" alt="Rangika Thilakawardena">
                </div>
                <div class="content">
                    <div class="header-line">
                        <div>
                            <h4>Sehan Kavinda</h4>
                            <div class="role">(Director of Photography - Top-knock Studios)</div>
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
                    <!-- Contact Section -->
                    <div class="header-line">
                        <h5>Contact</h5>
                        <p>
                            <i class="fa fa-phone"></i>
                            <a href="tel:+971553760772">+971 55 376 0772</a>
                        </p>
                        <p>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:info@top-knock.com">info@top-knock.com</a>
                        </p>
                    </div>
                </div>
            </article>

            <!-- Member 6 -->
            <article class="member">
                <div class="photo">
                    <img src="images/member-2.png" alt="Rangika Thilakawardena">
                </div>
                <div class="content">
                    <div class="header-line">
                        <div>
                            <h4>Chemila Obeysekere</h4>
                            <div class="role">(Manager - Operations)</div>
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
                    <!-- Contact Section -->
                    <div class="header-line">
                        <h5>Contact</h5>
                        <p>
                            <i class="fa fa-phone"></i>
                            <a href="tel:+971553760772">+971 55 376 0772</a>
                        </p>
                        <p>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:info@top-knock.com">info@top-knock.com</a>
                        </p>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- CTA Band -->
    <section class="cta-band">
        <div class="text-div">
            <p>ELEVATE YOUR NEXT SPORTING EVENT</p>
            <div class="contact-div">
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
        <h3>Our Clients & Partners</h3>
        <div class="subtitle">
            <h4 class="subtitle">Working with the best clients</h4>
        </div>
        <div class="logo-slider">
            <div class="logo-track">
                <!-- original logos -->
                @for ($i = 1; $i <= 16; $i++)
                    <div class="logo">
                        <img src="{{ asset('images/clients/' . $i . '.jpg') }}" alt="Client {{ $i }}">
                    </div>
                @endfor
                <!-- duplicate logos (important for seamless loop) -->
                @for ($i = 1; $i <= 16; $i++)
                    <div class="logo">
                        <img src="{{ asset('images/clients/' . $i . '.jpg') }}" alt="Client {{ $i }}">
                    </div>
                @endfor
            </div>
        </div>
        <div class="maxw" style="text-align:center; padding-bottom:24px;margin-top:24px">
            <a href="{{ asset('Our Partners.pdf') }}" target="_blank" class="btn"
                style="border-color:#7f86a6;color:#cbd0e6">View More...</a>
        </div>
    </section>

    <!-- Numbers -->
    <section class="numbers section-0" id="expertise">
        <p>OUR EXPERTISE</p>
        <div class="nums">
            <div>
                <div class="n" data-count="10">0</div>
                <hr>
                <div class="cap">YEARS IN SERVICE</div>
            </div>
            <div>
                <div class="n" data-count="150">0</div>
                <hr>
                <div class="cap">EVENTS HOSTED</div>
            </div>
            <div>
                <div class="n" data-count="100">0</div>
                <hr>
                <div class="cap">SATISFIED CLIENTS</div>
            </div>
            <div>
                <div class="n" data-count="15">0</div>
                <hr>
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

    <script src="script.js"></script>
</body>

</html>
