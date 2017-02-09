<header id="header-navbar" class="content-mini content-mini-full">
    <div class="content-boxed row">
        <ul class="nav-header col-xs-6 col-sm-2  col-xl-4">
            <li class="header-content">
                <a href="{{url('/')}}">
                    <img class="" src="{{ url('assets/img/logo.svg') }}" alt="desarrollo centrado en el usuario" height="50">
                </a>
            </li>
        </ul>
        <div class="col-xs row flex-items-xs-right hidden-lg-up">
            <ul class="nav-header ">
                <li class="">
                    <button class="btn btn-link text-white pull-right" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                        <i class="fa fa-navicon fa-2x"></i>
                    </button>
                </li>
            </ul>
        </div>
        <ul class=" col-xs push-5-t item-xs js-nav-main-header nav-main-header">
                <li class="text-xs-right  hidden-lg-up">
                    <button class="btn btn-link text-white" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                </li>
                <li>
                    <a class="nav-submenu h4 text-center text-white font-w600" href="javascript:void(0)">Servicios</a>
                    <ul>
                        <li>
                            <a class="h5 text-center text-white font-w600" href="{{ url('diseno-interfaces') }}">Diseño de interfaces</a>
                        </li>
                        <li>
                            <a class="h5 text-center text-white font-w600" href="{{ url('desarrollo-web') }}">Desarrollo de aplicaciones web</a>
                        </li>
                        <li>
                            <a class="h5 text-center text-white font-w600" href="{{ url('optimizacion-web') }}">Optimización de paginas web</a>
                        </li>
                        <li>
                            <a class="h5 text-center text-white font-w600" href="{{ url('pruebas-usabilidad') }}">Pruebas de uabilidad</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="h4 text-center text-white font-w600" href="{{ url('portafolio') }}">Casos de exito</a>
                </li>
                <li>
                    <a class="h4 text-center text-white font-w600" href="{{ url('empresa') }}">Empresa</a>
                </li>
                <li>
                    <a class="h4 text-center text-white font-w600" href="{{ url('pruebas-usabilidad') }}">Usabilidad</a>
                </li>
                <li>
                    <a class="hidden-md-down btn btn-lg btn-danger h4 text-center text-white font-w600" href="#formulario">Contáctenos</a>
                </li>
                <li>
                    <a class="hidden-lg-up  h4 text-center text-white font-w600" href="#formulario">Contáctenos</a>
                </li>
          
        </ul>
    </div>
</header>
