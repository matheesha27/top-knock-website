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
                    <img src="images/logos/sports-photography.png" alt="Sports Tours Logo">
                </div>
                <!-- TEXT -->
                <div class="hero-text">
                    <h1>PHOTOGRAPHY & VIDEOGRAPHY</h1>
                </div>
            </div>
        </div>
        
        <!-- CONTENT -->
        <div class="service-content">
            <!-- DESCRIPTION -->
            <p class="service-description">
                Most moments are fleeting, but the greatest ones deserve to be permanent. I 
                specialize in high-stakes sports photography and cinematic videography, 
                bringing a fast-twitch technical approach to every shoot. Whether it's the 
                split-second intensity of a match-winning play or the significant milestones 
                that define your journey, my goal is to preserve the energy, grit, and 
                emotion of the moment. With a background in capturing peak performance, 
                I bring a unique perspective to all life's activities. From the sideline 
                to the boardroom, I provide high-resolution visual storytelling that turns 
                raw action into lasting legacy.
            </p>

            <div class="service-features">
                <div class="feature">
                    <i class="fa fa-camera"></i>
                    <h4>High-Performance Capture</h4>
                    <p>Capturing split-second moments with precision and clarity.</p>
                </div>

                <div class="feature">
                    <i class="fa fa-camera"></i>
                    <h4>Cinematic Storytelling</h4>
                    <p>Turning action into visually compelling, professional narratives.</p>
                </div>

                <div class="feature">
                    <i class="fa fa-camera"></i>
                    <h4>Preserving powerful moments as timeless visual memories.</h4>
                    <p>Organizing friendly and competitive matches.</p>
                </div>
            </div>

            <div class="maxw" style="text-align:center; padding-bottom:24px;margin-top:24px">
                <a href="{{ asset('digital-profile.pdf') }}" target="_blank" class="btn"
                    style="border-color:#7f86a6;color:#cbd0e6">Find the Profile here...</a>
            </div>

            <!-- CTA -->
            <div class="service-cta">
                <h3>We catch you through the lens!</h3>
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
