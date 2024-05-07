<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>CampusPulse | {{ $title }}</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- swiper cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- custom css link -->
    <link rel="stylesheet" href="css/styleCampus.css">
</head>
<body>
    @include('partials.navbar')

    <div class="container">
        @yield('container')
    </div>

    @include('partials.footer')
    

    <!-- swiper cdn link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js link -->
    <script src="js/script.js"></script>
</body>
</html>