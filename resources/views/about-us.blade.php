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

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="footer.css">
    <!-- External CSS -->
    <link rel="stylesheet" href="about.css">
</head>

<body>
    @include('partials.header')

    <!-- Floating Action Button -->
    <a class="fab" href="#contact" title="Contact"><i class="fa fa-comment"></i></a>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay">
            <img src="{{ asset('images/about-1.jpg') }}" alt="Sports Banner">
            <div class="hero-text">
                <h1>WE ARE TOP KNOCK SPORTS MANAGEMENT</h1>
                <p>
                    Top Knock is a Sports Management company with major expertise in Sports Event Management, Tours,
                    Sports Clothing & Camps.<br><br>
                    We strive for ethics and fairness in everything we do. Sports is our passion and joy.
                    Passion is our work for us that inspires us to achieve extraordinary results.
                    Superior quality is the "ground floor" of our organization.
                </p>
            </div>
        </div>
    </section>

    <!-- Vision, Mission & Values -->
    <section class="vision">
        <h2>Vision, Mission & Values</h2>
        <div class="vision-content">
            <h3>Our Vision</h3>
            <p>The highly successful, efficient, competitive and robust sporting event organizer on the worldwide market.</p>

            <h3>Our Mission</h3>
            <p>To design successful business models by meeting and exceeding requirements through innovative ideas
                with the optimum level of service in accordance with the changing needs of our clients.</p>

            <h3>Our Values</h3>
            <ul>
                <li><b>Fairness:</b> We strive for ethics and fairness in everything we do.</li>
                <li><b>Passion:</b> Sports is our passion and joy. Passion for our work fuels us.</li>
                <li><b>Improvement:</b> We study our progress and learn from ourselves and others.</li>
                <li><b>Innovation:</b> Innovation is about challenging the norm.</li>
                <li><b>Focus on Results:</b> We manage by objectives and results.</li>
                <li><b>Proactivity:</b> We are eager to act before we are asked.</li>
            </ul>
        </div>
    </section>


    @include('partials.footer')

</body>
</html>
