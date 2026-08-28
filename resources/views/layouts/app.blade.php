<!DOCTYPE html>
<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', "Ogowe - Entretien, Nettoyage et Solutions alimentaire integrées")</title>
    <!-- Font Awesome CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icons/6.6.6/css/flag-icons.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-surface text-on-surface font-body">

    <x-navbar />

    <main class="flex-1 w-full">
        @yield('content')
    </main>
    
    <x-footer />

</body>

</html>
