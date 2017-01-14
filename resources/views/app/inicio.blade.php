@extends('template.master')

@section('meta')

@stop

@section('contenido')
    <main id="main-container ">
        <div class="bg-lineal-gradient-blue div-full">
            <section class="overflow-hidden content-boxed">
                <!-- Section Content -->
                <div class="portada row flex-items-xs-middle content-boxed">
                    <div class="col-lg-6 col-sm ">
                        <div class="text-xs-center text-md-left">
                            <h1 class="h1 rw-words rw-words-1 typer font-w600 text-white text-uppercase">Laboratorio de
                                <br>
                                <span>diseño interfaces UI/UX</span>
                                <span>Desarrollo aplicaciónes web</span>
                                <span>Pruebas de usabilidad</span>
                                <span>Optimización Web</span>
                                <br>
                                centrado en los usuarios</h1>
                            <!--<h2 class="h4 text-white-op  push-10-t">Integramos servicios de estratégia, planeación,
                                diseño y desarrollo de aplicaciónes web, mediante una arquitectura escalable y siempre
                                enfocada a mejorar la experiencia de usuario.</h2>-->
                            <p class="h4 text-white-op  push-10-t">Cada cliente para nosotros es único, somos
                                profesionales que trabajan duro para descubir
                                las necesidades, desafios y oportunidades de nuestros clientes y desarrollamos
                                soluciones web centradas en sus usuarios.</p>

                        </div>
                    </div>
                    <div class="col-md push-30-t ">
                        <img class="img-responsive animated bounceInRight"
                             src="{{ asset('assets/img/usabilidad-web.png') }}"
                             alt="">
                    </div>
                </div>

                <!-- END Section Content -->
            </section>
        </div>
        <!-- seccion 2 -->
        <div id="section-2" class="row flex-items-xs-middle content content-full bg-white">
            <div class="col-sm-12 text-xs-center">
                <p class="h1 text-uppercase font-w700 push-15-t push">Esto es lo que hacemos bien</p>
            </div>
            <div class="row flex-items-xs-center content-boxed">
                <div class="col-sm-6 col-xl text-xs-center animated fadeInUp">
                    <a class="block block-sombra" href="#">
                        <div class="bg-image"
                             style="background-image: url({{ asset('assets/img/web-design.jpg') }});">
                            <div class="bg-black-op">
                                <div class="block-content block-content-full text-center">
                                    <h2 class="h3 text-uppercase font-w600 text-white push-50-t push-50">Diseño <br>Interfaces
                                        UI/UX
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row text-center">
                                <div class="col-xs-12">
                                    <h4 class="h5 push-5-t">
                                        Creamos diseños de interfaces centrados en el usuario, alineados con sus
                                        objetivos y
                                        expectativas de negocio,
                                        diseños originales, de fácil navegación y enfocados en el modelo de interacción.
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl text-xs-center animated fadeInUp">
                    <a class="block block-sombra" href="#">
                        <div class="bg-image "
                             style="background-image: url({{ asset('assets/img/desarrollo-web.jpg') }});">
                            <div class="bg-black-op">
                                <div class="block-content block-content-full text-center">
                                    <h2 class="h3 text-uppercase font-w600 text-white push-50-t push-50">Desarrollo <br>aplicaciónes
                                        web
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row text-center">
                                <div class="col-xs-12">
                                    <h4 class="h5 push-5-t">
                                        Desarrollamos aplicaciónes web, aplicaciónes moviles, software empresarial y
                                        APIs. Optimizadas, escalables y únicas para cada uno de
                                        nuestros clientes, centradas en mejorar la experiencia de usuario.
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl text-xs-center animated fadeInUp">
                    <a class="block block-sombra" href="#">
                        <div class="bg-image"
                             style="background-image: url({{ asset('assets/img/pruebas-usabilidad.jpg') }});">
                            <div class="bg-black-op">
                                <div class="block-content block-content-full text-center">
                                    <h2 class="h3 font-w600 text-uppercase text-white push-50-t push-50">Pruebas de <br>
                                        Usabilidad</h2>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row text-center">
                                <div class="col-xs-12">
                                    <h4 class="h5 push-5-t">
                                        Realizamos pruebas de usabilidad biometricas (eye tracker), mapas de calor,
                                        pruebas de observación, heuristicas y entrevistas con usuarios reales,
                                        promoviendo la usabilidad de las
                                        interfaces y prototipos.
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl text-xs-center animated fadeInUp">
                    <a class="block block-sombra" href="#">
                        <div class="bg-image"
                             style="background-image: url({{ asset('assets/img/optimizacion-web.jpg') }});">
                            <div class="bg-black-op">
                                <div class="block-content block-content-full text-center">
                                    <h2 class="h3 font-w600 text-uppercase text-white push-50-t push-50">Optimización
                                        <br>aplicaciónes Web</h2>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row text-center">
                                <div class="col-xs-12">
                                    <h4 class="h5 push-5-t ">
                                        Optimizamos todo tipo de aplicaciónes web y su contenido, mejorando la velocidad
                                        de carga en navegadores, cache, integración de CDNs, optimización para
                                        dispositivos moviles,
                                        service-workers, y SEO.
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-sm-12 text-xs-center">
                <div class="col-sm">
                    <a href="#" class="btn btn-lg btn-primary">Ver más servicios</a>
                </div>


            </div>
            <!--
            <div class="col-sm-12 flex-sm-bottom text-xs-center">
                <a class="text-primary" href="#section-2">
                    <i class="si si-arrow-down fa-4x"></i>
                </a>
            </div>-->
        </div>
        <div id="section-2" class="row flex-items-xs-middle content content-full bg-primary">
            <div class="col-sm-12 text-xs-center">
                <p class="h1 text-uppercase text-white font-w700 push-15-t push">Como trabajamos</p>
            </div>
            <div class="row flex-items-xs-center content-boxed">
                <div class="col-xs-10 row flex-items-xs-center text-xs-center content  animated fadeInUp  block block-rounded block-sombra">
                    <div class="col-lg-3 col-sm-6 push">
                        <img class="img-responsive " src="{{ asset('assets/img/planeacion.svg') }}" alt="">
                        <div class="push-15-t">
                            <h3 class="h3 text-primary">Planeación</h3>
                            <div class="push-10-t">Cada proyecto comienza con una investigación del mercado, la
                                identifación de los objetivos y requerimientos, para crear una estrategia que haga
                                destacar sus ideas y su proyecto.
                            </div>
                        </div>

                    </div>
                    <div class=" col-lg-3 col-sm-6 push">
                        <img class="img-responsive" src="{{ asset('assets/img/diseno.svg') }}" alt="">
                        <div class="push-15-t">
                            <h3 class="h3 text-primary">Diseño</h3>
                            <div class="push-10-t">Se plasmas las ideas en diseños centrados en los usuarios, diseñando
                                las interfaces, mockups y prototipos requeridos, evaluandolos con los
                                usuarios finales para su mejoramiento.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 push">
                        <img class="img-responsive" src="{{ asset('assets/img/desarrollo.svg') }}" alt="">
                        <div class="push-15-t">
                            <h3 class="h3 text-primary">Desarrollo</h3>
                            <div class="push-10-t">Se desarrollan los diseños creados, evaluados y aprobados por
                                nuestros clientes, incluyendo las funcionalidades, y finalizando con la
                                liberación del proyecto o entrega del código documentado.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 push">
                        <img class="img-responsive" src="{{ asset('assets/img/pruebas.svg') }}" alt="">
                        <div class="push-15-t">
                            <h3 class="h3 text-primary">Testeo</h3>
                            <div class="push-10-t">Durante todo el proyecto se realizan las pruebas pertinentes en cada
                                una de las etapas, al finalizar se entrega a nuestros clientes un producto
                                funcional, optimizado y de calidad.
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div id="section-3" class="row flex-items-xs-middle content content-full bg-primary-darker">
            <div class="col-sm-12 text-xs-center">
                <p class="h1 text-uppercase text-white font-w700 push-30-t push">Algunos de nuestros trabajos</p>
            </div>
            <div class="row flex-items-xs-center content-boxed push-100">
                <div class="col-md-6 col-lg push-30-t">
                    <div class="img-container block block-rounded block-sombra  fx-opt-zoom-out">
                        <img class="img-responsive" src="{{ url('assets/img/miproteina.png') }}" alt="desarrollo web e-commerce">
                        <div class="img-options ">
                            <div class="img-options-content">
                                <h3 class="h3 font-w400 text-white push-5">Desarrollo web e-commerce</h3>
                                <h4 class="h4 font-w400 text-white-op push-15">desarrollo de plataforma e-commerce
                                    para
                                    tienda de suplementos y vitaminas <br> a nivel nacional</h4>
                                <div class="row d-flex justify-content-center align-items-end">
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/magento.svg')}}" height="50" alt="creacion de sitios web en magento">
                                        <p class="text-white">Magento</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/bootstrap.svg')}}" height="50" alt="diseño de interfaces en bootstrap">
                                        <p class="text-white">Bootstrap</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/mysql.svg')}}" height="50" alt="manejo bases de datos mysql">
                                        <p class="text-white">Mysql</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg push-30-t">
                    <div class="img-container  block block-rounded block-sombra fx-opt-zoom-out">
                        <img class="img-responsive" src="{{ url('assets/img/testabolic.png') }}" alt="optimizacion de paginas web">
                        <div class="img-options ">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Optimizacion web</h3>
                                <h4 class="h4 font-w400 text-white-op push-15">mejora de velocidad de la página,
                                    <br>optimizacion SEO, implementacion <br> de cache y CDN.
                                </h4>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/laravel.svg')}}" height="50" alt="creacion de sitios web con laravel">
                                        <p class="text-white">Laravel</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/js.svg')}}" height="50" alt="creacion de sitios web con nodejs">
                                        <p class="text-white">Node js</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/bootstrap.svg')}}" height="50" alt="creacion de sitios web con bootstrap">
                                        <p class="text-white">Bootstrap</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg push-30-t">
                    <div class="img-container block block-rounded block-sombra fx-opt-zoom-out">
                        <img class="img-responsive" src="{{ url('assets/img/contapp.png') }}" alt="desarrollo de aplicaciones web">
                        <div class="img-options ">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Desarrollo Aplicación Web</h3>
                                <h4 class="h4 font-w400 text-white-op push-15">Aplicación de facturación y <br>
                                    Sistema POS online para microempresas</h4>
                                <div class="row d-flex justify-content-center align-self-baseline">
                                    <div class="col-xs-3">
                                        <img src="{{url('assets/img/laravel.svg')}}" height="50" alt="creacion de sitios web en laravel">
                                        <p class="text-white">Laravel</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <img src="{{url('assets/img/js.svg')}}" height="50" alt="creacion de sitios web en nodejs">
                                        <p class="text-white">Node js</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <img src="{{url('assets/img/bootstrap.svg')}}" height="50" alt="creacion de sitios web en bootstrap">
                                        <p class="text-white">Bootstrap</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <img src="{{url('assets/img/mysql.svg')}}" height="50" alt="creacion de sitios web mysql">
                                        <p class="text-white">Mysql</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@stop
