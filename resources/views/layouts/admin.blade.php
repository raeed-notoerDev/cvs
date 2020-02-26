<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Almarai&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('pages.header')
    <main class="py-4 font-family" v-if="$i18n.locale==='ar'" dir="rtl">
        @yield('content')
    </main>
    <main class="py-4" v-else-if="$i18n.locale!=='ar'" dir="ltr">
        @yield('content')
    </main>
</div>
<script src="{{ asset('js/all.min.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
