<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="mukarram-ali, portfolio, webdeveloper, phpdeveloper, laraveldeveloper, developer">
    <meta name="description" content="">

    <title>{{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
