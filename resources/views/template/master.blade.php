<!doctype html>
<html lang="es" xml:lang="es">
    <head>
        @include('template.head')
        @yield('meta')
        @yield('styles')
    </head>
    <body>
        <div id="page-container" class="header-navbar-fixed">
            <!-- Header -->
            @include('template.header')
            <!-- END Header -->

            <!-- Main Container -->
            @yield('contenido')
            <!-- END Main Container -->

            <!-- Footer -->
            @include('template.footer')
            <!-- END Footer -->
        </div>
    @include('template.scripts')
    </body>
</html>
<!-- Bootstrap and OneUI CSS framework -->


<!-- END Stylesheets -->
<!-- Web fonts -->
