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
        <link rel="stylesheet" href="{{ asset('css/campusPulse.css') }}">
    </head>
<body>
    @include('AdminDashboard.sidebar') <!-- Include navbar here -->

    <div class="container">
        @yield('content') <!-- Place where content of each page will be inserted -->
    </div>

<!-- =========== Scripts =========  -->
<script type="text/javascript" src="{{ asset('assets/js/ajaxWork.js') }}"></script>   

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
