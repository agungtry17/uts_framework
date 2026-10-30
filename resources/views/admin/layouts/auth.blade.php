<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.head')
</head>

<body>
@yield('content')

<!-- JAVASCRIPT -->
<script src="assets/libs/swiper/swiper-bundle.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/js/scroll-top.init.js"></script>
@stack('scripts')
</body>

</html>