<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        {{-- <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="../resources/css/animate.css" />
        <link rel="stylesheet" href="../resources/css/tailwind.css" /> --}}
        <title>Laravel Blog Test</title>
    </head>
    <body>
        @include('part._navbar')
        {{-- @include('part._carousel') --}}
        @include('part._banner')
        <main>
            @yield('content')
        </main>
        @include('part._footer')
        {{-- <x-flash-message/> --}}
    </body>
</html>