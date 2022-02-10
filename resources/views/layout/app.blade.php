<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('page_name')</title>
</head>
<body>
    @include('partials.header')

    <main>
        @include('partials.main.jumbotron')
        @yield('main_content')
        @include('partials.main.second_part_main')
    </main>
    
    @include('partials.footer')
</body>
</html>