<!DOCTYPE html>
<html>
<head>
    <title>HM</title>

    <meta name="description" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="mobile-web-app-capable" content="yes">

    <meta name="theme-color" content="#282828">
    <meta name="msapplication-navbutton-color" content="#282828">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app"></div>

    <noscript>It may sound funny, but Koel requires JavaScript to sing. Please enable it.</noscript>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
