<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusPulse | {{ $title }}</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{ asset('import/assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
