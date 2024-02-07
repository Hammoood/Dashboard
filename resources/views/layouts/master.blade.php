<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.head')
    </head>
    <body class="sb-nav-fixed">
        @include('layouts.main-header')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('layouts.main-sidebar')
            </div>
            <div id="layoutSidenav_content">
                @yield('content')
                @include('layouts.footer')
            </div>
        </div>
        @include('layouts.footer-scripts')
    </body>
</html>
