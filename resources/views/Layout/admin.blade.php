<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('src/output.css') }}">
    <script src="{{ asset('src/preline.js') }}"></script>
    @yield('head')
</head>

<body>
    @include('Components.navbarAdmin')

    <main id="content">
        @include('Components.navbarAdmin2')

        <div class="max-w-[85rem] min-h-[75rem] mx-auto py-10 px-4 sm:px-6 lg:px-8 space-y-6">
            @yield('body')
        </div>

    </main>


</body>

</html>
