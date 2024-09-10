<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meija Landing</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <link rel="stylesheet" href="Landing/assets/css/style.css">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NavBar -->
    @include('LandingPage.navbar')

    <!-- Hero -->
    @include('LandingPage.hero')

    <!-- About -->
    @include('LandingPage.about')

    <!-- service -->
    @include('LandingPage.service')

    <!-- Counter -->
    @include('LandingPage.counter')

    <!-- Portfolio -->
    @include('LandingPage.portfolio')

    <!-- Review -->
    @include('LandingPage.review')
    
    <!-- member -->
    @include('LandingPage.member')

    <!-- contact -->
    @include('LandingPage.contact')

    <!-- Footer -->
    @include('LandingPage.footer')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="Landing/assets/js/main.js"></script>
</body>
</html>i