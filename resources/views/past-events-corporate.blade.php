<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PAST EVENTS | Top-Knock</title>

    <link rel="icon" href="{{ asset('images/logo-bg.jpg') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600&family=Rajdhani:wght@300;400;600&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="header.css?v={{ config('app.app_version') }}">
    <link rel="stylesheet" href="home.css?v={{ config('app.app_version') }}">
    <link rel="stylesheet" href="footer.css?v={{ config('app.app_version') }}">
    <!-- External CSS -->
    <link rel="stylesheet" href="past-events.css?v={{ config('app.app_version') }}">
</head>

<body>
    @include('partials.header')

    <!-- Banner -->
    <section class="past-events-banner">
        <img src="images/past-events-banner.avif" alt="Past Events Banner">
        <div class="banner-text">
            <h2>PAST CORPORATE EVENTS</h2>
        </div>
    </section>

    <!-- Events -->
    <section class="past-events-content">

        <!-- Event 1 -->
        <div class="event-gallery">
            <h1>Peterite Indoor Sports Carnival (14th Edition)</h1>
            <div class="event-track" id="eventTrack">

                @php
                    $images = glob(public_path('images/past-event-5/*.jpeg'));
                @endphp

                @foreach ($images as $img)
                    <div class="event-img">
                        <img src="{{ asset('images/past-event-5/' . basename($img)) }}">
                    </div>
                @endforeach

            </div>
        </div>

        <!-- Event 2 -->
        <div class="event-gallery">
            <h1>Kamel Pay Azizi Fun Fiesta</h1>
            <div class="event-track" id="eventTrack">

                @php
                    $images = glob(public_path('images/past-event-6/*.jpg'));
                @endphp

                @foreach ($images as $img)
                    <div class="event-img">
                        <img src="{{ asset('images/past-event-6/' . basename($img)) }}">
                    </div>
                @endforeach

            </div>
        </div>

        <!-- Event 3 -->
        <div class="event-gallery">
            <h1>Emirates Airlines Sports Carnival</h1>
            <div class="event-track" id="eventTrack">

                @php
                    $images = glob(public_path('images/past-event-7/*.jpg'));
                @endphp

                @foreach ($images as $img)
                    <div class="event-img">
                        <img src="{{ asset('images/past-event-7/' . basename($img)) }}">
                    </div>
                @endforeach

            </div>
        </div>

        <!-- Event 4 -->
        <div class="event-gallery">
            <h1>GNN Shipping Conference</h1>
            <div class="event-track" id="eventTrack">

                @php
                    $images = glob(public_path('images/past-event-8/*.jpg'));
                @endphp

                @foreach ($images as $img)
                    <div class="event-img">
                        <img src="{{ asset('images/past-event-8/' . basename($img)) }}">
                    </div>
                @endforeach

            </div>
        </div>

        <!-- Event 5 -->
        <div class="event-gallery">
            <h1>Silkway Airlines Iftar</h1>
            <div class="event-track" id="eventTrack">

                @php
                    $images = glob(public_path('images/past-event-9/*.jpg'));
                @endphp

                @foreach ($images as $img)
                    <div class="event-img">
                        <img src="{{ asset('images/past-event-9/' . basename($img)) }}">
                    </div>
                @endforeach

            </div>
        </div>

        <!-- Event 6 -->
        <div class="event-gallery">
            <h1>Ignite. PIMA Global conference</h1>
            <div class="event-track" id="eventTrack">

                @php
                    $images = glob(public_path('images/past-event-10/*.jpg'));
                @endphp

                @foreach ($images as $img)
                    <div class="event-img">
                        <img src="{{ asset('images/past-event-10/' . basename($img)) }}">
                    </div>
                @endforeach

            </div>
        </div>

        <!-- Event 7 -->
        <div class="event-gallery">
            <h1>Commercial Bank BIZ Show</h1>
            <div class="event-track" id="eventTrack">

                @php
                    $images = glob(public_path('images/past-event-11/*.jpg'));
                @endphp

                @foreach ($images as $img)
                    <div class="event-img">
                        <img src="{{ asset('images/past-event-11/' . basename($img)) }}">
                    </div>
                @endforeach

            </div>
        </div>

        <!-- Past Events List
        <div class="event-list">
            <h1 style="text-align: left;">Past Events</h1>
            <p>
                <ul style="list-style-type: disc; margin-left: 20px;">
                    <li>SLCL - Season V - SLCL Tournaments (T20) - Oct 2022</li>
                    <li>SLCL Ramadan League - Season II - SLCL Tournaments (T20) - Apr 2022</li>
                    <li>Thomian Shark Tour of UAE - Inbound Sport Tours - Nov 2021</li>
                    <li>SLCL - Season IV - SLCL Tournaments (T20) - Sep 2021</li>
                    <li>SLCL Ramadan League - Season I - SLCL Tournaments (T20) - Apr 2021</li>
                    <li>T20 Super League - Divisional Tournaments - Jan 2021</li>
                    <li>SLCL - Season III - SLCL Tournaments (T20) - Sep 2020</li>
                    <li>Colombo Cricket Club Tour of UAE - Inbound Sport Tours - Dec 2019</li>
                    <li>SLCL - Season II - SLCL Tournaments (T20) - Sep 2019</li>
                    <li>One Nation & One Soul Tour of UAE - Inbound Sport Tours (Multi Sports) - Apr 2019</li>
                    <li>Battle of the Golds (DSSC vs MC) - May 2018</li>
                    <li>DHL Super League - Corporate Leagues - Apr 2018</li>
                    <li>SLCL UAE 6's - SLCL Tournaments (6 Overs) - Apr 2018</li>
                    <li>SLCL - Season I - SLCL Tournaments (T20) - Oct 2017</li>
                </ul>
            </p>
            <div class="event-img desktop-only">
                <img src="images/logo.png" alt="Top-Knock Logo" style="width: 60%;margin-top: -180px;margin-bottom: -180px;display: inline;">
            </div>
        </div>
    </section> -->

    <div class="sp-24"></div>

    @include('partials.footer')

    <script src="script.js"></script>
</body>
</html>
