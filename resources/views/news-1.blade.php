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

    <section class="events-section">
        <div class="section-header">
            <h2>What’s Coming Next?</h2>
            <p class="sub">Stay updated with our latest tournaments and sporting experiences</p>
        </div>

        <div class="events-container">

            <!-- LEFT: Image Slider -->
            <div class="events-slider">

                <div class="event-slide active">
                    <img src="images/news/banner1.jpeg" alt="Event 1">
                </div>

                <div class="event-slide">
                    <img src="images/news/banner2.jpeg" alt="Event 2">
                </div>

                <div class="event-slide">
                    <img src="images/news/banner3.jpeg" alt="Event 3">
                </div>

                <!-- Arrows -->
                <button class="slider-btn prev">&#10094;</button>
                <button class="slider-btn next">&#10095;</button>

            </div>

            <!-- RIGHT: Description -->
           <div class="events-content">
                <h3 id="eventTitle"></h3>
                <div id="eventDesc"></div>
                <ul id="eventMeta"></ul>
            </div>

        </div>

        <!-- Lightbox -->
        <div id="lightbox" class="lightbox">
            <span class="close">&times;</span>
            <img class="lightbox-img" id="lightboxImg">
        </div>
    </section>

    @include('partials.footer')

    <script src="script.js"></script>
</body>
</html>
