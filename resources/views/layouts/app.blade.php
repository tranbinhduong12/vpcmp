<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://kit.fontawesome.com/c71231073e.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{ asset('logo/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/styles/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/modal.css') }}">
    {{-- import jquery cdn --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- import jquery cdn --}}
    @yield('css')
    <title>
        @yield('title')
    </title>
</head>
<body>
    @include('components.navbar')
    <div class="container">
        @include('components.header')
        @yield('content')
    </div>
    @include('components.footer')
</body>
<script src="{{ asset('assets/javascripts/main.js') }}"></script>
@yield('script')
</html>