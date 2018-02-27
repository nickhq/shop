<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name') }}</title>

    {{-- material design icons css --}}
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    {{-- Styles --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    @include('incl.navigation')
    <main class="content">
        @yield('content')
    </main>
</div>
{{-- Scripts --}}
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
