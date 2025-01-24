<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>

<body class="@yield('class_body')">
    @yield('body')

    <script src="{{ asset('assets/js/bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>
