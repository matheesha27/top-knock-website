<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'JND MULTI TECHNICAL SERVICES EST')</title>

    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="{{ asset('css/color-switcher-design.css') }}" rel="stylesheet">

    <!--Color Themes -->
    <link id="theme-color-file" href="{{ asset('css/color-themes/default-theme.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 20px;
            right: 20px;
            background-color: #0084C6; /* WhatsApp green */
            color: #fff;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            z-index: 1000;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            background-color: #0084C6;
            color: #fff;
        }

        .lower-box h3 {
            min-height: 3em;
            line-height: 1.5em;
            text-align: center; /* horizontal center */
            display: block; /* default, can omit */
            vertical-align: middle; /* optional if needed */
        }
    </style>
</head>
<body>

    <div class="page-wrapper">
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
    </div>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/971501832001?text=Hello%2C%20I%20would%20like%20to%20know%20more%20details"
    class="whatsapp-float" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/color-settings.js') }}"></script>
</body>
</html>
