<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>OUR SERVICES | Top-Knock</title>

    <link rel="icon" href="{{ asset('images/logo-bg.jpg') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600&family=Rajdhani:wght@300;400;600&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="header.css?v={{ config('app.app_version') }}">
    <link rel="stylesheet" href="home.css?v={{ config('app.app_version') }}">
    <link rel="stylesheet" href="footer.css?v={{ config('app.app_version') }}">
    <!-- External CSS -->
    <link rel="stylesheet" href="our-services.css?v={{ config('app.app_version') }}">
</head>

<body>
    @include('partials.header')

    <section class="service-page">

        <div class="service-hero">
            <div class="hero-inner">
                <!-- LOGO -->
                <div class="hero-logo">
                    <img src="images/logo.png" alt="Sports Tours Logo">
                </div>
                <!-- TEXT -->
                <div class="hero-text">
                    <h1>SPORTS EDUCATION</h1>
                    <h1>& TRAINING CAMPS</h1>
                </div>
            </div>
        </div>
        
        <!-- CONTENT -->
        <div class="service-content">
            <!-- DESCRIPTION -->
            <p class="service-description">
                We specialize in high-performance coaching, pedagogical sports education, and immersive 
                training camps desinged to sharpen technical skills, mental fortitude, and tactical intelligence. 
                Our approach is built on a foundation of structured progression. We don't just host practice 
                sessions; we implement comprehensive curricula that evolve with the athlete. By combining 
                traditional coaching values with modern sports science, we create an environment where 
                student-athletes can thrive both physically and strategically.
            </p>

            <div class="service-features">
                <div class="feature">
                    <i class="fa fa-bookmark"></i>
                    <h4>Structured Skill Development</h4>
                    <p>Progressive training programs designed to continuously elevate performance.</p>
                </div>

                <div class="feature">
                    <i class="fa fa-bookmark"></i>
                    <h4>Mental & Tactical Excellence</h4>
                    <p>Building game intelligence, focus, and competitive mindset.</p>
                </div>

                <div class="feature">
                    <i class="fa fa-bookmark"></i>
                    <h4>Modern Sports Science Approach</h4>
                    <p>Combining traditional coaching with data-driven performance methods.</p>
                </div>
            </div>

            <!-- CTA -->
            <div class="service-cta">
                <h3>Join Us</h3>
                <div class="hero-btn">
                    <a href="/#contact" class="btn primary">Contact Us</a>
                </div>
            </div>

        </div>

    </section>

    @include('partials.footer')

    <script src="script.js"></script>
</body>
</html>
