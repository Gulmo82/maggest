<!DOCTYPE html>
<html class="has-navbar-fixed-top" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MagGest - @yield('title')</title>
    <link rel="stylesheet" href="/css/bulma.css">
    <link rel="stylesheet" href="/css/bulma-table.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="icon" type="image/png" href="/icon/favicon-16x16-dunplab-manifest-37602.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/icon/favicon-32x32-dunplab-manifest-37602.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/icon/favicon-96x96-dunplab-manifest-37602.png" sizes="96x96">
    <link rel="manifest" href="/manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="MagGest">
    <meta name="apple-mobile-web-app-title" content="MagGest">
    <meta name="theme-color" content="#363636">
    <meta name="msapplication-navbutton-color" content="#363636">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @livewireStyles

</head>

<body>
    @include('partial.navbar')

    <section class="section">
        @include('partial.notification')
        @yield('content')
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/js/bulma.js"></script>
    @livewireScripts
</body>

</html>
