<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="\  iewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('includes.header')
    <main>
        @include('includes.jumbotron')
        @yield('comics')
        @yield('comic')

        @yield('services')
    </main>
    @include('includes.footer')
  
</body>
</html>