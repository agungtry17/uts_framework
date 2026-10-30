<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.partials.head') 
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('admin.partials.header')
        
        @include('admin.partials.search-modal')
        @include('admin.partials.sidebar')
        @include('admin.partials.horizontal-sidebar')
        <div class="sidebar-backdrop" id="sidebar-backdrop"></div>
        <main class="app-wrapper">
            @yield('content')
        </main>

        @include('admin.partials.customizer')
        @include('admin.partials.scroll-top')
        @include('admin.partials.footer')
    </div>
    <!-- END page -->

    @stack('modals')

    <!-- JAVASCRIPT -->
    @include('admin.partials.script')

</body>

</html>
