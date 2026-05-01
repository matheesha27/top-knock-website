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
                <img src="images/news/banner1.jpeg" alt="Cricket Event Banner">
            </div>

            <!-- RIGHT: Content -->
            <div class="events-content">

                <h3>
                    LEVEL 1 CRICKET UMPIRE ACCREDITATION COURSE – ONLINE BATCH 1
                </h3>

                <p>
                    Take your cricket knowledge to the <strong>NEXT LEVEL</strong> and gain the confidence to understand, control, and respect the game like a professional! 📘🏏
                </p>

                <p class="event-highlight">
                    This is <strong>NOT just an umpire course</strong> — it is a powerful learning experience for:
                </p>

                <ul class="event-list">
                    <li>👨‍⚖️ Aspiring Umpires</li>
                    <li>🏏 Cricketers</li>
                    <li>👨‍🏫 Coaches</li>
                    <li>📋 Team Managers</li>
                    <li>📊 Scorers</li>
                    <li>🏟️ Cricket Organizers</li>
                    <li>❤️ Cricket Enthusiasts</li>
                </ul>

                <h4>📌 WHY JOIN THIS COURSE?</h4>
                <ul class="event-list">
                    <li>✔ Understand the Laws of Cricket in depth</li>
                    <li>✔ Make smarter decisions on and off the field</li>
                    <li>✔ Improve discipline and game awareness</li>
                    <li>✔ Run matches more professionally</li>
                    <li>✔ Gain respect as a knowledgeable cricket member</li>
                </ul>

                <h4>🎓 ACCREDITED LEVEL 1 COURSE (APCU Sri Lanka)</h4>
                <p>Learn directly from world-class ICC panel umpires:</p>

                <ul class="event-list">
                    <li>🔹 Lyndon Hannibal – ICC International Panel Umpire</li>
                    <li>🔹 Ranmor Martinesz – ICC Test Umpire</li>
                    <li>🔹 Asoka De Silva – ICC Elite Panel Umpire</li>
                </ul>

                <h4>📚 COURSE DETAILS</h4>
                <ul>
                    <li>🖥️ Online Tutorials: 7:00 PM – 9:00 PM</li>
                    <li>📅 Lectures: 15, 16, 17, 19, 20 May 2026</li>
                    <li>📝 Exam Date: 24th May 2026</li>
                    <li>📄 Practical Submission: Within 14 days</li>
                    <li>💰 Fee: AED 400 + 5% VAT</li>
                </ul>

                <h4>📞 REGISTER NOW</h4>
                <ul class="event-list">
                    <li>📱 +971 50 632 8350 – Manju</li>
                    <li>📱 +971 55 838 0176 – Chemila</li>
                </ul>

                <p class="event-footer">
                    🏆 Whether you’re on the field or behind the scenes — this course gives you the edge to 
                    <strong>UNDERSTAND THE GAME LIKE NEVER BEFORE.</strong>
                </p>

                <p class="event-footer highlight">
                    🔥 Don’t just play or watch cricket — <strong>MASTER IT!</strong> 🔥
                </p>

            </div>

        </div>

    </section>

    @include('partials.footer')

    <script src="script.js"></script>
</body>
</html>
