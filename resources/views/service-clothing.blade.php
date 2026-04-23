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
                    <img src="images/logos/sports-clothing.jpg" alt="Sports Tours Logo">
                </div>
                <!-- TEXT -->
                <div class="hero-text">
                    <h1>SPORTS CLOTHING</h1>
                </div>
            </div>
        </div>
        
        <!-- CONTENT -->
        <div class="service-content">
            <!-- DESCRIPTION -->
            <p class="service-description">
                We view sportswear as a critical piece of technical equipment. Our manufacturing process 
                integrates advanced fabric science with ergonomic tailoring to meet the rigorous demands 
                of professional competition. From initial thread to the final snitch, our focus remains 
                on moisture management, thermal regulation, and unrestricted mobility.
            </p>

            <div class="service-features">
                <div class="feature">
                    <i class="fa fa-shirtsinbulk"></i>
                    <h4>Advanced Fabric Technology</h4>
                    <p>Engineered materials designed for durability and peak performance.</p>
                </div>

                <div class="feature">
                    <i class="fa fa-shirtsinbulk"></i>
                    <h4>Moisture & Temperature Control</h4>
                    <p>Optimized for sweat management and thermal regulation.</p>
                </div>

                <div class="feature">
                    <i class="fa fa-shirtsinbulk"></i>
                    <h4>Ergonomic Performance Fit</h4>
                    <p>Tailored for maximum comfort, flexibility, and unrestricted movement.</p>
                </div>
            </div>

            <!-- CTA -->
            <div class="service-cta">
                <h3>Place your order Now!</h3>
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
