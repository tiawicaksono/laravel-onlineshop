<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <!-- Top Bar -->
        @include('layouts.header')
        <!-- #Top Bar -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(){
            
            window.addEventListener('scroll', function() {
               
                if (window.scrollY > 50) {
                    document.getElementById('navbar_top').classList.add('fixed-top');
                    // add padding top to show content behind navbar
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                     document.getElementById('navbar_top').classList.remove('fixed-top');
                     // remove padding top from body
                    document.body.style.paddingTop = '0';
                } 
            });
        }); 
        // DOMContentLoaded  end
    </script>
</body>

</html>