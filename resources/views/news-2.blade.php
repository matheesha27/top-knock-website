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

        <div class="events-container">

            <!-- LEFT: Banner -->
            <div class="events-banner">
                <img src="images/news/banner2.jpeg" alt="T22 Super League Banner">
            </div>

            <!-- RIGHT: Content -->
            <div class="events-content">

                <h3>
                    T22 Super League – Season 2 (Weekend Battle)
                </h3>

                <p>
                    Top Knock T22 Super League Season 2 is an exciting 
                    <strong>weekend cricket competition</strong> designed for competitive teams seeking high-intensity action under lights.
                </p>

                <p>
                    Played in a <strong>22-over format</strong> with dynamic 
                    <strong>powerplay rules</strong> and <strong>impact players</strong>, the league brings together 
                    <strong>4 strong teams</strong> battling for one ultimate title.
                </p>

                <ul class="event-list">
                    <li>🏟️ Professional match conditions</li>
                    <li>🎽 Quality equipment</li>
                    <li>📺 Live-style match experience</li>
                    <li>📸 Full media coverage</li>
                </ul>

                <p>
                    This is the perfect platform to <strong>showcase talent</strong> and compete at a 
                    <strong>higher level</strong>.
                </p>

                <h4>📚 EVENT DETAILS</h4>
                <ul class="event-list">
                    <li>📍 Eagles Cricket Ground - Sharjah</li>
                    <li>📅 8th May onwards</li>
                    <li>🏆 AED 950 per match</li>
                </ul>

                <h4>📞 REGISTER NOW</h4>
                <ul class="event-list">
                    <li>📱 +971 50 6328350 – Manju</li>
                    <li>📱 +971 55 8380176 – Chemila</li>
                </ul>

            </div>

        </div>

    </section>

    @include('partials.footer')

    <script src="script.js"></script>
</body>
</html>
