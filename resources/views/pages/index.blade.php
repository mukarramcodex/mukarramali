<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap">

    <link rel="shortcut icon" href="" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/app/main.css' , 'resources/js/app.js'])

</head>
<body class="home-page">
    <div id="preloader">
        <div class="loader-cover">
            <div class="loader-container">
                <div class="loader-icon-2"></div>
            </div>
        </div>
    </div>

    <header>
        <div class="cont">

        </div>
    </header>
</body>
</html>
