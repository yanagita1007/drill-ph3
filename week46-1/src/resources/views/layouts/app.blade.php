<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>POSSE</title>
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen">
            <header>
                <div class="mx-auto">
                    <img src="/img/header-logo.png" width="140" height="64" class="pr-3">
                </div>
            </header>
            <main>
                @yield('content')
            </main>
        </div>
    </body>

</html>
