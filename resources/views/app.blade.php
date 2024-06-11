<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel Application') }}</title>

    <!-- CSS Files -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> --}}
    <!-- You can include other CSS files as needed -->

    <!-- Additional head content -->
    @stack('head')
</head>
<body>
    <!-- Header -->
    @include('layouts.header')

    <!-- Main content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- JS Files -->
    <script src="{{ asset('js/bundle.js') }}"></script>
    {{-- <script src="{{ asset('js/custom.js') }}"></script> --}}
    <!-- You can include other JS files as needed -->

    <!-- Additional scripts -->
    @stack('scripts')
</body>
</html>
