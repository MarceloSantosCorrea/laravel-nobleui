<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">

        @stack('plugins_css')

        <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}"/>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        {{--class="not-remove sidebar-folded"--}}
        <div class="main-wrapper" id="app">
            <x-sidebar.sidebar/>
            <div class="page-wrapper">
                <x-navbar.navbar/>
                {{ $slot }}
                <x-footer/>
            </div>
        </div>
        <script src="{{ asset('assets/vendors/core/core.js') }}"></script>

        @stack('plugins_js')

        <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/js/template.js') }}"></script>

        @stack('scripts')
    </body>
</html>
