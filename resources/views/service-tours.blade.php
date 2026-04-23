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
                    <img src="images/sports-tours.png" alt="Sports Tours Logo">
                </div>
                <!-- TEXT -->
                <div class="hero-text">
                    <h1>SPORTS TOURS</h1>
                    <h2>Sports Tour Management</h2>
                </div>
            </div>
        </div>
        
        <!-- CONTENT -->
        <div class="service-content">
            <!-- DESCRIPTION -->
            <p class="service-description">
                Managing a sports tour requires more than just booking flights; it requires an intimate 
                understanding of the athlete's rhythm. From managing heavy equipment transport to securing 
                high-performance training facilities, we provide a 360-degree support system tailored to 
                the unique demands of competitive sports.
            </p>

            FEATURES
            <div class="service-features">
                <div class="feature">
                    <i class="fa fa-plane"></i>
                    <h4>Travel & Logistics</h4>
                    <p>Complete travel planning including flights and transport.</p>
                </div>

                <div class="feature">
                    <i class="fa fa-hotel"></i>
                    <h4>Accommodation</h4>
                    <p>Premium and comfortable stays for teams.</p>
                </div>

                <div class="feature">
                    <i class="fa fa-trophy"></i>
                    <h4>Match Arrangements</h4>
                    <p>Organizing friendly and competitive matches.</p>
                </div>
            </div>

            <!-- CTA -->
            <div class="service-cta">
                <h3>Plan Your Next Tour With Us</h3>
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
