<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ (isset($title) ? $title : 'Home') . ' | Political Points' }}</title>

    @include('web.layout.css')
    @yield('css')

</head>
<body>
    @include('web.layout.header')
    @yield('content')
    @include('web.layout.footer')
    @include('web.layout.script')
    @yield('script')
</body>
</html>

