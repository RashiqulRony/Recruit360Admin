<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Recruit 360 | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    @yield('_css')

</head>
<body>
<div id="app" class="app">
    <!-- BEGIN #header -->
    @include('shared._header')
    <!-- END #header -->

    <!-- BEGIN #sidebar -->
    @include('shared._sidebar')
    <!-- END #sidebar -->

    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        @yield('content')
    </div>

    <!-- END #content -->
    @include('shared._footer')
</div>

<script src="{{ asset('assets/js/vendor.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/app.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/apexcharts/dist/apexcharts.min.js') }}" type="text/javascript"></script>
@stack('_js')

</body>
</html>
