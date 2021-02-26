<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->



    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      
        @if (session('success'))
            <div class="container alert " role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="flex posaition items-center justify-center bg-gray-50 ">
                <ul>
                    @foreach ($errors->all() as $error)
                        <h3>{{ $error }}</h3> 
                    @endforeach
                </ul>
            </div>
        @endif
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
