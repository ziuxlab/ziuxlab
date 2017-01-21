<!doctype html>
<html lang="es" xml:lang="es">
    <head>
        @include('template.head')
        @yield('meta')
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
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700" media="none" onload="if(media!='all')media='all'">
