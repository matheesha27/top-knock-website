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
                <img src="images/news/banner3.jpeg" alt="T22 Super League Season 3 Banner">
            </div>

            <!-- RIGHT: Content -->
            <div class="events-content">

                <h3>
                    T22 Super League – Season 3 (Midweek Battle)
                </h3>

                <p>
                    Season 3 of the <strong>Top Knock T22 Super League</strong> shifts the action to 
                    <strong>midweek evenings</strong>, delivering a fast-paced cricketing experience under lights.
                </p>

                <p>
                    Featuring <strong>6 competitive teams</strong>, the tournament blends 
                    <strong>strategy and excitement</strong> through its <strong>22-over format</strong>, 
                    extended <strong>powerplays</strong>, and <strong>impact player rules</strong>.
                </p>

                <p>
                    🏟️ Designed for teams who want to stay competitive during the week, this league offers:
                </p>

                <ul class="event-list">
                    <li>💡 Premium playing facilities</li>
                    <li>📸 Professional match-day photography</li>
                    <li>📋 Strong tournament organization</li>
                    <li>🌙 High-intensity matches under lights</li>
                </ul>

                <p>
                    This is the perfect opportunity to stay <strong>match-ready</strong> while competing for 
                    <strong>top honors</strong> in a professionally managed environment.
                </p>

                <h4>📚 EVENT DETAILS</h4>
                <ul class="event-list">
                    <li>📍 Eagles Cricket Ground - Sharjah</li>
                    <li>📅 13th May onwards</li>
                    <li>🏆 AED 900 per match</li>
                </ul>

            </div>

        </div>

    </section>

    @include('partials.footer')

    <script src="script.js"></script>
</body>
</html>
