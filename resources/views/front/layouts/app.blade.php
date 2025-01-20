<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Portfolio</title>
    @vite('resources/css/app.css')
    @stack('head-styles')
</head>

{{--<body class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white">--}}
<body class="flex flex-col min-h-screen bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white">

<!-- Header -->
@include('front.layouts.partials.header')

<!-- Main Content -->
<main class="pt-20">
@yield('content')
</main>

<!-- Footer -->
@include('front.layouts.partials.footer')

@stack('body-scripts')
</body>
</html>
