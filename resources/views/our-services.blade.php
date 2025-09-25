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

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="footer.css">
    <!-- External CSS -->
    <link rel="stylesheet" href="our-services.css">
</head>

<body>
    @include('partials.header')

    <!-- OUR SERVICES SECTION -->
    <section class="services-section">
        <div class="services-banner">
            <img src="images/service-banner.avif" alt="Our Services Banner">
            <div class="services-banner-text">
                <h2>OUR SERVICES</h2>
            </div>
        </div>

        <div class="services-container">
            <div class="service-box">
                <img src="images/icon1.avif" alt="Sports Events Icon" class="service-icon">
                <h3>Sports Events Management</h3>
                <p>Organizing and managing local and international sporting events and tournaments. Cricket, Rugby,
                    Soccer, Basketball, Badminton, Netball, Volleyball, Athletics, Swimming, Padel Tennis, Table Tennis,
                    Cycling, Bowling, Karting and much more.</p>
            </div>

            <div class="service-box">
                <img src="images/icon2.avif" alt="Tour Icon" class="service-icon">
                <h3>Tour Management</h3>
                <p>We are specialize in meticulously planning and organizing tours for various purposes, including
                    leisure, adventure, cultural exploration, and business travel. Our experienced team handles all
                    aspects of tour logistics, from itinerary creation to accommodation and transportation arrangements.
                </p>
            </div>

            <div class="service-box">
                <img src="images/icon3.avif" alt="Training Icon" class="service-icon">
                <h3>Sports Education & Training Camps</h3>
                <p>Arranging platform to train under the international sporting icons and we take care of all details to
                    let you live your best experience.</p>
            </div>
        </div>

        <div class="services-container">
            <div class="service-box">
                <img src="images/logo1.avif" alt="Clothing Icon" class="service-icon">
                <h3>Sport Clothing</h3>
                <p>We provide tailored design services to create unique sport clothing that reflects your brand or team
                    identity. Our team of skilled designers can help you bring your vision to life, from concept
                    sketches to final product designs.</p>
            </div>

            <div class="service-box">
                <img src="images/logo2.avif" alt="Photography Icon" class="service-icon">
                <h3>Sports Photography and Videography</h3>
                <p>Capturing the action of the game, behind the scenes of the players, spectator moments, story-telling
                    images of the game/event as well as candid portraits, detail shots, and player portraits.</p>
            </div>

            <div class="service-box">
                <img src="images/logo3.avif" alt="Media Icon" class="service-icon">
                <h3>Sport Media Production</h3>
                <p>We specialize in capturing the excitement and energy of live sporting events. Our team of skilled
                    videographers, producers, and directors ensures comprehensive coverage, delivering real-time action
                    to viewers around the world.</p>
                <ul class="service-list">
                    <li>Web Development and Management</li>
                    <li>Software Development</li>
                    <li>Digital Marketing</li>
                </ul>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script src="script.js"></script>
</body>
</html>
