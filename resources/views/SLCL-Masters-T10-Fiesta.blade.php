<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ABOUT US | Top-Knock</title>

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
    <link rel="stylesheet" href="past-events2.css?v={{ config('app.app_version') }}">
</head>

<body>
    @include('partials.header')

    <!-- Banner -->
    <section class="past-events-banner">
        <img src="images/past-events-banner.avif" alt="Past Events Banner">
        <div class="banner-text">
            <h2>SLCL MASTERS SEASON 1</h2>
        </div>
    </section>

    <section class="league-content">
        <div class="poster"> <img src="/images/SLCL MASTERS SEASON 1/sample-main-poster.avif" alt="Ramadan League Poster"> </div>
        <h1 style="text-align:center;">SLCL MASTERS SEASON 1</h1>
        <p>
            Unveiling the SLCL Masters T10 Cricket Carnival – Season I, a spectacular cricketing spectacle set to captivate fans at the Royal Cricket Grounds, Ajman, on 14th Jan 2023! Brace yourselves for a showdown of monumental proportions as six powerhouse teams, including Colombo Knights Masters, Freedem Masters, Legends CC, Kandy SC Legends, Reborn Legends, and UUDS Masters, vie for supremacy in this electrifying T10 extravaganza.        </p>
        <p>
            Brought to you by SLCL T10, an event by unmatched expertise of Top-Knock, this carnival promises a fusion of cricketing brilliance and unparalleled entertainment.
        </p>
        <p>
            Join us in the stands, bring your cheers, and let the adrenaline flow as these teams clash in a legacy-defining battle. Be part of the cricketing extravaganza that will echo in the annals of SLCL history!
        </p>
        <div class="teams">
            <div class="team-card"><img src="images/SLCL MASTERS SEASON 1/team1.avif" alt="REBORN LEGENDS"><h3>REBORN LEGENDS</h3></div>
            <div class="team-card"><img src="images/SLCL MASTERS SEASON 1/team2.avif" alt="COLOMBO KNIGHT MASTERS"><h3>COLOMBO KNIGHT MASTERS</h3></div>
            <div class="team-card"><img src="images/SLCL MASTERS SEASON 1/team3.avif" alt="UUDS MASTERS"><h3>UUDS MASTERS</h3></div>
            <div class="team-card"><img src="images/SLCL MASTERS SEASON 1/team4.avif" alt="LEGENDS CRICKET CLUB"><h3>LEGENDS CRICKET CLUB</h3></div>
            <div class="team-card"><img src="images/SLCL MASTERS SEASON 1/team5.avif" alt="FREEDEM MASTERS"><h3>FREEDEM MASTERS</h3></div>
            <div class="team-card"><img src="images/SLCL MASTERS SEASON 1/team6.avif" alt="KANDY SC LEGENDS"><h3>KANDY SC LEGENDS</h3></div>

        </div>
    </section>

    @include('partials.footer')

    <script src="script.js"></script>
</body>
</html>
