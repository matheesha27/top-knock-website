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
                    <img src="images/logos/sports-media.png" alt="Sports Tours Logo">
                </div>
                <!-- TEXT -->
                <div class="hero-text">
                    <h1>SOCIAL MEDIA MARKETING</h1>
                </div>
            </div>
        </div>
        
        <!-- CONTENT -->
        <div class="service-content">
            <!-- DESCRIPTION -->
            <p class="service-description">
                We are a next-generation sports media and content house dedicated to capturing the raw 
                energy of the arena and translating it into high-impact digital experiences. We sit at 
                the intersection of live-action journalism and cinematic storytelling, providing fans, 
                athletes, and brands with a front-row seat to the stories that define the sporting world.
            </p>

            <div class="service-features">
                <div class="feature">
                    <i class="fa fa-video-camera"></i>
                    <h4>Live-Action Coverage</h4>
                    <p>Capturing the intensity and energy of real-time sporting moments.</p>
                </div>

                <div class="feature">
                    <i class="fa fa-video-camera"></i>
                    <h4>Cinematic Content Creation</h4>
                    <p>Transforming sports stories into high-impact visual experiences.</p>
                </div>

                <div class="feature">
                    <i class="fa fa-video-camera"></i>
                    <h4>Digital Fan Engagement</h4>
                    <p>Delivering compelling content that connects athletes, brands, and audiences.</p>
                </div>
            </div>

            <!-- CTA -->
            <div class="service-cta">
                <!-- <h3>Plan Your Next Tour With Us</h3> -->
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
