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

    <section class="events-content">
        <h2 class="table-title">Upcoming Event Schedule</h2>

        <div class="table-wrapper">
            <table class="events-table">
                <thead>
                    <tr>
                        <th>Event #</th>
                        <th>Event Name</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>SLCL Provincial League (Season 2)</td><td>Q2 2026</td></tr>
                    <tr><td>2</td><td>Top Knock T22 Super League</td><td>-</td></tr>
                    <tr><td>3</td><td>Top Knock Insurance League</td><td>-</td></tr>
                    <tr><td>4</td><td>Top Knock Engineers League</td><td>-</td></tr>
                    <tr><td>5</td><td>Top Knock Bankers League</td><td>-</td></tr>
                    <tr><td>6</td><td>Peterite Indoor Sports Carnival (15th Edition)</td><td>-</td></tr>
                    <tr><td>7</td><td>Top Knock U25 Asian Cup</td><td>Q3 2026</td></tr>
                    <tr><td>8</td><td>Top Knock Rising League</td><td>-</td></tr>
                    <tr><td>9</td><td>Top Knock Pro Division</td><td>Q4 2026</td></tr>
                    <tr><td>10</td><td>SLCL Club League (Season IX)</td><td>-</td></tr>
                    <tr><td>11</td><td>Top Knock Premier 40 Series</td><td>-</td></tr>
                    <tr><td>12</td><td>SLCL Masters League (Season 3)</td><td>-</td></tr>
                    <tr><td>13</td><td>Top Knock Super Sixes Festival (Open & Masters)</td><td>-</td></tr>
                    <tr><td>14</td><td>Top Knock Super Sixes</td><td>-</td></tr>
                </tbody>
            </table>
        </div>
    </section>

    @include('partials.footer')

    <script src="script.js"></script>
</body>
</html>
