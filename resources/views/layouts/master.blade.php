<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" value="{{ csrf_token() }}" />

    <title>@yield('page-title') | LaraGirls</title>

    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />

    @yield('page-style')
</head>
<body>

    @include('layouts.partials.navigation')

    @yield('page-content')

    @include('layouts.partials.footer')

<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
