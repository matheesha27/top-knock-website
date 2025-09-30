<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UPCOMING EVENTS | Top-Knock</title>

    <link rel="icon" href="{{ asset('images/logo-bg.jpg') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600&family=Rajdhani:wght@300;400;600&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="header.css?v={{ config('app.app_version') }}">
    <link rel="stylesheet" href="home.css?v={{ config('app.app_version') }}">
    <link rel="stylesheet" href="footer.css?v={{ config('app.app_version') }}">
    <!-- External CSS -->
    <link rel="stylesheet" href="upcoming-events.css?v={{ config('app.app_version') }}">
</head>

<body>
    @include('partials.header')

    <!-- Upcoming Events Section -->
    <section class="events-banner">
        <img src="images/upcoming-banner.avif" alt="Upcoming Events Banner">
        <div class="banner-text">
            <h2>UPCOMING EVENTS</h2>
        </div>
    </section>

    <section class="events-content" style="max-width: 650px;">
        <!-- Event 1 -->
        <div class="event">
            <h3>SLCL Schools League</h3>
            <div class="event-img">
                <img src="images/event-schools.avif" alt="SLCL Schools League">
            </div>
    </section>

    <section class="events-content">
        <!-- Event 1 -->
        <div class="event">
            <p>
                We're delighted to unveil the launch of the inaugural Sri Lankan Schools Hard Ball T20 league in the UAE, proudly presented in collaboration with Top Knock International, a licensed Sports Management Entity.
                <br>
                It's time to show your alma mater pride! Dust off those college jerseys and stand behind your school as they vie for the ultimate glory on the cricket field.
                <br>
                Stay updated with all the latest news and fixtures on our website.
                <br>
                #AlmaMater #SLCL #TopKnockInternational #CricketInUAE #T20League 🏆
            </p>
        </div>

        <!-- Event 2 -->
        <div class="event">
            <h3>SLCL SEASON VII</h3>
            <p>
                "Welcome to Season VII of SLCL, the premier Sri Lankan Cricket League in the UAE! Join us beneath the dazzling Dubai skyline for an unforgettable celebration of Sri Lanka's cricketing legacy. As the heart of the United Arab Emirates beats with excitement, we invite you to be part of this thrilling journey. Get ready for a spectacle of talent, passion, and camaraderie on the pitch, as the Sri Lankan Cricket League promises an exhilarating season ahead.
                <br>
                <br>
                Stay updated with all the latest news and fixtures on our website.
                <br>
                #AlmaMater #SLCL #TopKnockInternational #CricketInUAE #T20League 🏆
            </p>
        </div>

        <!-- Event 3 -->
        <div class="event">
            <h3>SLCL Masters T20 League</h3>
            <p>
                "Brace Yourself for Cricketing Extravaganza: SLCL Masters T20 Fiesta!"
                <br>
                <br>
                Get ready for a cricketing spectacle like never before as the SLCL Masters T20 Fiesta takes center stage In this fast-paced and thrilling tournament, cricketing maestros from diverse backgrounds will showcase their skills, battling it out for supremacy in a series of intense T20 clashes.
                <br>
                Mark your calendars for an evening of explosive cricket, strategic brilliance, and unforgettable moments. The stage is set, the teams are primed, and the excitement is palpable. Don't miss out on this cricketing fiesta that promises to be a celebration of skill, sportsmanship, and pure cricketing joy.
                <br>
                <br>
                #SLCLMastersT20 #CricketFiesta # #FastAndFurious"
            </p>
        </div>

        <!-- Event 4 -->
        <div class="event">
            <h3>SLCL International</h3>
            <p>
                " Unleashing Global Cricketing Excellence: SLCL International Edition"
                <br>
                <br>
                Get ready for a cricketing extravaganza of international proportions! The SLCL International Edition is set to welcome teams from across the globe to compete in the heart of UAE.
                <br>
                Experience the thrill as international cricketing talents converge for a series of intense matches, showcasing the best of skill, strategy, and sportsmanship. The SLCL International promises to be a melting pot of cricketing diversity, uniting players and fans in a celebration of the global cricketing spirit.
                <br>
                Don't miss your chance to witness history in the making. Join us as we embark on a journey that transcends borders, where every match is a testament to the universal language of cricket.
                <br>
                <br>
                #SLCLInternational #GlobalCricket "
            </p>
        </div>
    </section>

    @include('partials.footer')

    <script src="script.js"></script>
</body>
</html>
