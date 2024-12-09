<!-- resources/views/layouts/web.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <title>@yield('title', 'Crafto - The Multipurpose HTML5 Template')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Link to CSS files in the public folder -->
    <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>
    <link rel="stylesheet" href="{{ asset('demos/fashion-store/fashion-store.css') }}" />
</head>
<body>
    @include('common.header') <!-- Include header from common -->

    <main>
        @yield('content') <!-- Main content will be injected here -->
    </main>

    @include('common.footer') <!-- Include footer from common -->

    <!-- Link to JS files in the public folder -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/vendors.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>