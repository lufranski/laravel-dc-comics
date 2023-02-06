<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complete CRUD</title>

    @vite('resources/js/app.js')
    @yield('head')
</head>
<body>
    @include('components.header')
    @include('components.errors')

    @yield('content')

    @include('components.footer')
    
</body>
</html>