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
                    <img src="images/logos/sports-events.png" alt="Sports Tours Logo">
                </div>
                <!-- TEXT -->
                <div class="hero-text">
                    <h1>SPORTS EVENTS MANAGEMENT</h1>
                </div>
            </div>
        </div>
        
        <!-- CONTENT -->
        <div class="service-content">
            <!-- DESCRIPTION -->
            <p class="service-description">
                Organizing and managing local and international sporting events and tournaments. Cricket, Rugby,
                Soccer, Basketball, Badminton, Netball, Volleyball, Athletics, Swimming, Padel Tennis, Table Tennis,
                Cycling, Bowling, Karting and much more.
            </p>

            <div class="service-features">
                <div class="feature">
                    <i class="fa fa-bookmark"></i>
                    <h4>End-to-End Event Planning & Execution</h4>
                    <p>Seamlessly organizing sporting events from concept to completion, ensuring smooth logistics and flawless delivery.</p>
                </div>

                <div class="feature">
                    <i class="fa fa-bookmark"></i>
                    <h4>Multi-Sport Tournament Management</h4>
                    <p>Expert coordination of diverse sports including cricket, football, basketball, athletics, and more across local and international levels.</p>
                </div>

                <div class="feature">
                    <i class="fa fa-bookmark"></i>
                    <h4>Operations, Scheduling & Stakeholder Coordination</h4>
                    <p>Efficient management of fixtures, venues, teams, and officials while maintaining strong communication with all stakeholders.</p>
                </div>
            </div>

            <!-- CTA -->
            <div class="service-cta">
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
