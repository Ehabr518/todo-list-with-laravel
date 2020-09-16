<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>todos-list</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    @include('inc.navbar')
    @include('inc.messages')
    <div class="container">
        @yield('content')
    </div>
    <footer class="text-center">
        Copyright 2020 &copy; Ehab Reda
    </footer>
</body>
</html>
