<!DOCTYPE html>
<html lang="en">

<head>
    @include('landing.partials.head')
</head>

<body>
    @include('landing.partials.spinner')
    @include('landing.partials.navbar')

    @yield('content')

    @include('landing.partials.footer')

    <a href="#!" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('landing.partials.script')
    @stack('scripts')
</body>

</html>