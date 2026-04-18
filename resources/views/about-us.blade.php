<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ABOUT US | Top-Knock</title>

    <link rel="icon" href="{{ asset('images/logo-bg.jpg') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600&family=Rajdhani:wght@300;400;600&family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="header.css?v={{ config('app.app_version') }}">
    <link rel="stylesheet" href="home.css?v={{ config('app.app_version') }}">
    <link rel="stylesheet" href="footer.css?v={{ config('app.app_version') }}">
    <!-- External CSS -->
    <link rel="stylesheet" href="about.css?v={{ config('app.app_version') }}">
</head>

<body>
    @include('partials.header')

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay">
            <img src="{{ asset('images/about-1.jpg') }}" alt="Sports Banner" style="margin-left: -220px;">
            <div class="hero-text">
                <h1>
                    WE ARE 
                </h1>
                <h1>
                    <span class="highlight">TOP KNOCK SPORTS MANAGEMENT</span>
                </h1>
                <p>
                    Top Knock is a Sports Management company with major expertise in Sports Event Management, Tours,
                    Sports Clothing & Camps.<br><br>
                    We strive for ethics and fairness in everything we do. Sports is our passion and joy.
                    Passion is our work for us that inspires us to achieve extraordinary results.
                    Superior quality is the "ground floor" of our organization.
                </p>
            </div>
        </div>
    </section>

    <!-- Vision, Mission & Values -->
    <section class="vision">
        <div class="vision-content">
            <h2>Vision, Mission & Values</h2>
            <h3>Our Vision</h3>
            <p>The highly successful, efficient, competitive and robust sporting event organizer on the worldwide
                market.</p>

            <h3>Our Mission</h3>
            <p>To design successful business models by meeting and exceeding requirements through innovative ideas
                with the optimum level of service in accordance with the changing needs of our clients.</p>

            <h3>Our Values</h3>
            <p>
            <ul>
                <li>
                    <p><b style="font-weight: bold" class="highlight-p">Fairness<span class="desktop-only">:</span></b>
                    <br class="mobile-only">
                    We strive for ethics and fairness in everything we do. Superior quality is the “ground floor” of our organization.</p>
                </li>
                <br class="mobile-only">
                <li>
                    <p><b style="font-weight: bold" class="highlight-p">Passion<span class="desktop-only">:</span></b>
                    <br class="mobile-only">
                    Sports is our passion and joy. Passion for our work is the fuel that inspires us to achieve extraordinary results.</p>
                </li>
                <br class="mobile-only">
                <li>
                    <p><b style="font-weight: bold" class="highlight-p">Improvement<span class="desktop-only">:</span></b>
                    <br class="mobile-only">
                    We study our progress and learn from ourselves and others how to do things more effectively and efficiently.</p>
                </li>
                <br class="mobile-only">
                <li>
                    <p><b style="font-weight: bold" class="highlight-p">Innovation<span class="desktop-only">:</span></b>
                    <br class="mobile-only">
                    Innovation is about challenging the norm and stretching boundaries in order to create a more efficient and better-quality business.</p>
                </li>
                <br class="mobile-only">
                <li>
                    <p><b style="font-weight: bold" class="highlight-p">Focus on Results<span class="desktop-only">:</span></b>
                    <br class="mobile-only">
                    We manage by objectives and results. Each action is focused on achieving a meaningful concrete result for the company.</p>
                </li>
                <br class="mobile-only">
                <li>
                    <p><b style="font-weight: bold" class="highlight-p">Proactivity<span class="desktop-only">:</span></b>
                    <br class="mobile-only">
                    We never stop at what has been achieved. It is inherent to our corporate culture to never settle for the status quo. We demand a lot from ourselves. We fully understand that there is always room for better results and higher efficiencies.</p>
                </li>
                <br class="mobile-only">
            </ul>
            </p>
        </div>
    </section>

    <section class="about-contact">
        <div class="about-contact-container">
            <div class="contact-box">
                <h4>Call</h4>
                <p>+971 50 632 8350</p>
            </div>

            <div class="contact-box">
                <h4>Email</h4>
                <p><a href="mailto:info@top-knock.com">info@top-knock.com</a></p>
            </div>

            <div class="contact-box">
                <h4>Follow</h4>
                <div class="social-icons" style="display: block;">
                    <a href="https://www.facebook.com/topknock" target="_blank" rel="noopener" aria-label="Facebook"><i
                            class="fa fa-facebook-f "></i></a>
                    <a href="https://www.youtube.com/@topknock" target="_blank" rel="noopener" aria-label="YouTube"><i
                            class="fa fa-youtube-play"></i></a>
                    <a href="https://www.instagram.com/topknock/" target="_blank" rel="noopener"
                        aria-label="Instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script src="script.js"></script>

</body>

</html>
