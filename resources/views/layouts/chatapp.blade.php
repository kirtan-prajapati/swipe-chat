<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('dist/css/lib/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <!-- Swipe core CSS -->
    <link href="{{asset('dist/css/swipe.min.css')}}" type="text/css" rel="stylesheet">
    <!-- Favicon -->
    <link href="{{asset('dist/img/favicon.png')}}" type="image/png" rel="icon">
</head>
<body class="start">
    <main>
        <div class="layout">
            @if(!empty($isNavigation) && $isNavigation == true)
            <!-- Start of Navigation -->
            @include('layouts.partial.navigation')
            <!-- End of Navigation -->
            @endif

            @if(!empty($isSidebar) && $isSidebar == true)
            <!-- Start of Sidebar -->
            @include('layouts.partial.sidebar')
            <!-- End of Sidebar -->
            @endif

            @yield('content')
        </div>
    </main>

    <script src="{{asset('dist/js/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{asset('dist/js/vendor/jquery-slim.min.js')}}"><\/script>')</script>
    <script src="{{asset('dist/js/vendor/popper.min.js')}}"></script>
        <script src="{{asset('dist/js/swipe.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>

    <script>
        function scrollToBottom(el) { el.scrollTop = el.scrollHeight; }
        scrollToBottom(document.getElementById('content'));
    </script>
</body>
</html>
