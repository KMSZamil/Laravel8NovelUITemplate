<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
    <link rel="stylesheet" href="{{ asset('')}}assets/vendors/core/core.css">
    <link rel="stylesheet" href="{{ asset('')}}assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{ asset('')}}assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="{{ asset('')}}assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('')}}assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="{{ asset('')}}assets/images/favicon.png" />

    @stack('css')

</head>
<body class="sidebar-dark">
<div class="main-wrapper">

    @include('layouts.sidebar')

    @include('layouts.navbar')

        <div class="page-content">

            @yield('content')

        </div>

        <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
            <p class="text-muted text-center text-md-left">Copyright © 2020 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>. All rights reserved</p>
            <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
        </footer>

    </div>
</div>

<script src="{{ asset('')}}assets/vendors/core/core.js"></script>
<script src="{{ asset('')}}assets/vendors/chartjs/Chart.min.js"></script>
<script src="{{ asset('')}}assets/vendors/jquery.flot/jquery.flot.js"></script>
<script src="{{ asset('')}}assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
<script src="{{ asset('')}}assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('')}}assets/vendors/apexcharts/apexcharts.min.js"></script>
<script src="{{ asset('')}}assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="{{ asset('')}}assets/vendors/feather-icons/feather.min.js"></script>
<script src="{{ asset('')}}assets/js/template.js"></script>
<script src="{{ asset('')}}assets/js/dashboard.js"></script>
<script src="{{ asset('')}}assets/js/datepicker.js"></script>

@stack('css')

</body>
</html>
