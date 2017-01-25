@extends('template.master')

@section('meta')

@stop

@section('contenido')
    <main id="main-container ">
        <div class="bg-radial-gradient-blue">
            <section class="overflow-hidden content-boxed">
                <!-- Section Content -->
                <div class="col-sm-12 flex-items-xs-middle flex-items-xs-center push-50-t">
                    <div class="text-xs-center push content">
                        <h1 class="h1 font-w600 text-white text-uppercase">Laboratorio de casos de éxito</h1>
                        <h2 class="h2 text-white">Productos diseñados, desarrollados, optimizados y testeados por
                                                  personas para personas</h2>
                        <img class="img-responsive" src="{{ url('assets/img/portafolio-laboratorio.svg') }}"
                             alt="laboratorio de casos de exito ziuxlab">
                    
                    </div>
                
                </div>
                
                <!-- END Section Content -->
            </section>
        </div>
        <!-- sección 2 -->
        
        <div id="section-3" class=" bg-gray-lighter">
            <div class="row flex-items-xs-center  remove-margin ">
                <div class="col-sm-4 remove-padding">
                    <div class="img-container remove-margin block block-sombra fx-opt-zoom-out">
                        <img class="img-responsive" src="{{ url('assets/img/miproteina.png') }}"
                             alt="desarrollo web e-commerce">
                        <div class="img-options ">
                            <div class="img-options-content">
                                <h3 class="h3 font-w400 text-white push-5">Desarrollo web e-commerce</h3>
                                <h4 class="h4 font-w400 text-white-op push-15">desarrollo de plataforma e-commerce
                                                                               para
                                                                               tienda de suplementos y vitaminas <br> a
                                                                               nivel nacional</h4>
                                <div class="row d-flex justify-content-center align-items-end">
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/magento.svg')}}" height="50"
                                             alt="creación de sitios web en magento">
                                        <p class="text-white">Magento</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/bootstrap.svg')}}" height="50"
                                             alt="diseño de interfaces en bootstrap">
                                        <p class="text-white">Bootstrap</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/mysql.svg')}}" height="50"
                                             alt="manejo bases de datos mysql">
                                        <p class="text-white">Mysql</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
                <div class="col-sm-4 remove-padding">
                    <div class="img-container remove-margin  block  block-sombra fx-opt-zoom-out">
                        <img class="img-responsive" src="{{ url('assets/img/testabolic.png') }}"
                             alt="optimización de paginas web">
                        <div class="img-options ">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Optimización web</h3>
                                <h4 class="h4 font-w400 text-white-op push-15">mejora de velocidad de la página,
                                    <br>optimización SEO, implementación <br> de cache y CDN.
                                </h4>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/laravel.svg')}}" height="50"
                                             alt="creación de sitios web con laravel">
                                        <p class="text-white">Laravel</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/js.svg')}}" height="50"
                                             alt="creación de sitios web con nodejs">
                                        <p class="text-white">Node js</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/bootstrap.svg')}}" height="50"
                                             alt="creación de sitios web con bootstrap">
                                        <p class="text-white">Bootstrap</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4  remove-padding">
                    <div class="img-container remove-margin block block-sombra fx-opt-zoom-out">
                        <img class="img-responsive" src="{{ url('assets/img/contapp.png') }}"
                             alt="desarrollo de aplicaciones web">
                        <div class="img-options ">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Desarrollo Aplicación Web</h3>
                                <h4 class="h4 font-w400 text-white-op push-15">Aplicación de facturación y <br>
                                                                               Sistema POS online para microempresas
                                </h4>
                                <div class="row d-flex justify-content-center align-self-baseline">
                                    <div class="col-xs-3">
                                        <img src="{{url('assets/img/laravel.svg')}}" height="50"
                                             alt="creación de sitios web en laravel">
                                        <p class="text-white">Laravel</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <img src="{{url('assets/img/js.svg')}}" height="50"
                                             alt="creación de sitios web en nodejs">
                                        <p class="text-white">Node js</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <img src="{{url('assets/img/bootstrap.svg')}}" height="50"
                                             alt="creación de sitios web en bootstrap">
                                        <p class="text-white">Bootstrap</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <img src="{{url('assets/img/mysql.svg')}}" height="50"
                                             alt="creación de sitios web mysql">
                                        <p class="text-white">Mysql</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 remove-padding">
                    <div class="img-container remove-margin  block  block-sombra fx-opt-zoom-out">
                        <img class="img-responsive" src="{{ url('assets/img/lipocore-portafolio.png') }}"
                             alt="optimización de paginas web">
                        <div class="img-options ">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Optimización web y Úsabilidad</h3>
                                <h4 class="h4 font-w400 text-white-op push-15">mejora de velocidad de la página,
                                    <br>optimización SEO, Diseño de interfáces <br> y test de usabilidad.
                                </h4>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/laravel.svg')}}" height="50"
                                             alt="creación de sitios web con laravel">
                                        <p class="text-white">Laravel</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/js.svg')}}" height="50"
                                             alt="creación de sitios web con nodejs">
                                        <p class="text-white">Node.js</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/bootstrap.svg')}}" height="50"
                                             alt="creación de sitios web con bootstrap">
                                        <p class="text-white">Bootstrap</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 remove-padding">
                    <div class="img-container remove-margin block block-sombra fx-opt-zoom-out">
                        <img class="img-responsive" src="{{ url('assets/img/turismo-responsable.png') }}"
                             alt="desarrollo web e-commerce">
                        <div class="img-options ">
                            <div class="img-options-content">
                                <h3 class="h3 font-w400 text-white push-5">Desarrollo Webapp</h3>
                                <h4 class="h4 font-w400 text-white-op push-15">Desarrollo de plataforma de referencia
                                                                               para empresas de túrismo en el éje
                                                                               cafetero
                                </h4>
                                <div class="row d-flex justify-content-center align-items-end">
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/js.svg')}}" height="50"
                                             alt="creación de sitios web en nodejs">
                                        <p class="text-white">Node.js</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/bootstrap.svg')}}" height="50"
                                             alt="diseño de interfaces en bootstrap">
                                        <p class="text-white">Bootstrap</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/mysql.svg')}}" height="50"
                                             alt="manejo bases de datos mysql">
                                        <p class="text-white">Mysql</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
                <div class="col-sm-4  remove-padding">
                    <div class="img-container remove-margin block block-sombra fx-opt-zoom-out">
                        <img class="img-responsive" src="{{ url('assets/img/app-contapp.png') }}"
                             alt="desarrollo de aplicaciones web">
                        <div class="img-options ">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Desarrollo Aplicación Web</h3>
                                <h4 class="h4 font-w400 text-white-op push-15">Aplicación de facturación y <br>
                                                                               Sistema POS online para microempresas
                                </h4>
                                <div class="row d-flex justify-content-center align-self-baseline">
                                    <div class="col-xs-3">
                                        <img src="{{url('assets/img/laravel.svg')}}" height="50"
                                             alt="creación de sitios web en laravel">
                                        <p class="text-white">Laravel</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <img src="{{url('assets/img/js.svg')}}" height="50"
                                             alt="creación de sitios web en nodejs">
                                        <p class="text-white">Node.js</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <img src="{{url('assets/img/bootstrap.svg')}}" height="50"
                                             alt="creación de sitios web en bootstrap">
                                        <p class="text-white">Bootstrap</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <img src="{{url('assets/img/mysql.svg')}}" height="50"
                                             alt="creación de sitios web mysql">
                                        <p class="text-white">Mysql</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-primary-darker">
            <h3 class="h1 text-xs-center text-uppercase text-white font-w600 push-50-t">Opiniones de nuestros clientes</h3>
            <div class="row push-50-t flex-items-xs-center content-boxed">
                <div class="col-sm-10">
                    <div class=" js-slider text-xs-center text-white" data-slider-autoplay="true"
                         data-slider-dots="true">
                        <div class="block block-content-narrow block-transparent">
                            <blockquote class="h3">
                                <span class="text-primary h1">“</span>
                                Ziuxlab entendió desde el principio lo que queriamos lograr y nos permitió escalar a nivel nacional rapidamente!
                                <span class="text-primary h1">” </span>
                            </blockquote>
                            <br>
                            <cite class="h5 ">Andrés Ortiz – Gerente Regional<br><span class="text-primary"> Miproteina</span></cite>
                        </div>
                        <div class="block block-content-narrow block-transparent">
                            <blockquote class="h3">
                                <span class="text-primary h1">“</span>
                                Yo lo resumo con un socio más de nuestra empresa, nos hicieron un acompañamiento desde la ideación, hasta la version final de nuestra aplicación!
                                <span class="text-primary h1">” </span>
                            </blockquote>
                            <br>
                            <cite class="h5">Yonier Ramirez – Cofundador  <br><span class="text-primary"> Contapp</span></cite>
                        </div>
                    </div>
                </div>
            
            
            </div>
        </div>
    
    </main>
    @include('app.formulario')
@stop