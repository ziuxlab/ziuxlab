@extends('template.master')

@section('meta')

@stop

@section('contenido')
    <main id="main-container ">
        <div class=" bg-primary">
            <section class="overflow-hidden content-boxed">
                <!-- Section Content -->
                <div class="portada row flex-items-xs-middle flex-items-xs-center content-boxed ">
                    <div class="col-lg-8 col-sm-10 text-white text-xs-center push-150-t">
                        <h1>¡Hola Mauricio!</h1>
                        <h2 class="push">Gracias por contactar con nosotros</h2>
                        <p>En breve uno de nuestros especialistas de productos se comunicará con usted</p>
                        <img class="img-responsive animated bounceInRight push-50 push-30-t"
                             src="{{ asset('assets/img/congrats.svg') }}"
                             alt="" height="300">
                    </div>
                </div>
                
                
                <!-- END Section Content -->
            </section>
           
        </div>
        <div class=" bg-primary">
        <section class="overflow-hidden content-boxed">
            <div class="row flex-items-xs-middle flex-items-xs-center content-boxed ">
                <div class="col-lg-6 col-md-8 col-sm-10 push-100">
                    <div class="block block-rounded block-sombra">
                        <div class="block-content block-content-full text-xs-center">
                            <h3 class="h4 push">Mientras tanto puede visitar nuestro laboratorio de casos de exito o ir a la sala de
                                                experimentos de nuestro blog.</h3>
                            <div class="row">
                                <div class="col-xs-6"><a href="#" class="btn btn-primary btn-minw">Casos de exito</a></div>
                                <div class="col-xs-6"><a href="#" class="btn btn-danger btn-minw">Blog</a></div>
                            </div>
                    
                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
            </div>
    </main>
@stop
