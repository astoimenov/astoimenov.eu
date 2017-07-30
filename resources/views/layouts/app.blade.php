<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <meta name="description" content="{{ $description }}" />

    <title>{{ $title }}</title>

    <link rel="shortcut icon" href="{{ $logo }}">

    <link rel="apple-touch-icon" href="{{ $logo }}" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta property="og:url" content="https://astoimenov.eu/" />
    <meta property="og:site_name" content="{{ $title }}"/>
    <meta property="og:title" content="{{ $title }}"/>
    <meta property="og:type" content="blog"/>
    <meta property="og:description" content="{{ $description }}"/>
    <meta property="og:image" content="{{ $headerImage }}"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/genericons/3.1/genericons.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <main id="page">
        @include('layouts.header')

        <section id="content">
            @yield('content')
        </section>

        @include('layouts.footer')
    </main>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
