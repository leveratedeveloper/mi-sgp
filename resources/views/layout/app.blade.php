<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-JQ7WH6MT9B"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JQ7WH6MT9B');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mandiri Investment | @yield('title')</title>
        <meta name="description" content="Mandiri Investment is your gateway to premier investment opportunities in Southeast Asia's largest and fastest-growing economy. Explore asset management services tailored for sustainable growth in Indonesia.">
        <meta name="keywords" content="Mandiri Investment, Southeast Asia investment, asset management, investment in Indonesia, sustainable investment, financial services Singapore, Bank Mandiri Group">
        <meta name="robots" content="index, follow">

        <meta property="og:title" content="Mandiri Investment | Premier Investment Opportunities in Southeast Asia">
        <meta property="og:description" content="Gateway to Southeast Asia's Largest & Fastest Growing Economy">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://mandiri-investment.com.sg">
        <meta property="og:image" content="{{ asset('images/og-image.webp') }}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Mandiri Investment | Premier Investment Opportunities in Southeast Asia">
        <meta name="twitter:description" content="Discover investment opportunities in Southeast Asia with Mandiri Investment, backed by the strength of Bank Mandiri.">
        <meta name="twitter:image" content="{{ asset('images/og-image.webp') }}">


        <link rel="canonical" href="https://mandiri-investment.com.sg">
        <link rel="icon" href="{{ asset('images/logo-mandiri.svg') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.typekit.net/spw7abi.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  
        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
        @livewireStyles
    </head>
    <body class="antialiased">
    
    @include('partials.navbar')
        
        <div class="container-fluid" style="max-width: 1522px;margin:auto;">
            @yield('content')
            @include('partials.footer')
        </div>
    <div class="container-fluid">
    
    </div>
    
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        @stack('scripts')
        

    </body>
</html>
