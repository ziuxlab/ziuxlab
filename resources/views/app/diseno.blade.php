@extends('template.master')

@section('meta')

@stop

@section('styles')
@stop

@section('contenido')
    <main id="main-container" class="bg-primary">
        <div class="">
            <section class="overflow-hidden content-boxed">
                <!-- Section Content -->
                <div class="row flex-items-xs-middle flex-items-xs-center content-boxed ">
                    <div class=" col-sm-10 text-white text-xs-center push-50">
                        <h1 class="text-capitalize">Diseño de interfaces UI/UX</h1>
                        <h2 class="push">para aplicaciones web y dispositivos moviles centradas en el usuario</h2>
                        <img class="animated bounceInRight  push-30-t"
                             src="{{ asset('assets/img/diseño-banner.svg') }}" height="100"
                             alt="ziuxlab desarrollo web con usabilidad">
                    </div>
                </div>
                <!-- END Section Content -->
            </section>
        </div>
        <div class="bg-white">
            <section class="overflow-hidden content-boxed">
                <div class="row flex-items-xs-middle content content-full flex-items-xs-center ">
                    <div class="row ">
                        <div class="col-sm-6">
                            <img class="img-responsive" src="{{url('assets/img/mockups.png')}}" alt="">
                        </div>
                        <div class="col-sm-6 push-30-t">
                            <p class="h4">El diseño es de las partes principales de un desarrollo web, porque es la puerta de entrada
                               por la cual los usuarios interactuan con sus productos o servicios.</p>
                            <p class="h4">Una interfaz bien diseñada pagará por si misma y mas</p>
                            <p class="h4">En ziuxlab utilizamos las mejores practicas de usabilidad, diseño de la interacción , diseño
                               visucla, para crear interfaces centradas en los usuarios, generando una ventaja competitiva.
                               teniendo siempre en cuenta su modelo de negocio para realizar los diseños de las interfaces de usuario</p>
                        </div>
                       
                    </div>
                    <div class="col-sm-12">
                        <p>Diseño de marca, logotipo e identidad corporativa</p>
                        <p>Diseño de iteraccion </p>
                    </div>
                </div>
            </section>
        </div>
    </main>
@stop