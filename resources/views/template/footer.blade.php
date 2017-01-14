<div id="section-4" class="row flex-items-xs-middle content content-full bg-primary">
    <div class="row flex-items-xs-middle content-boxed">
        <div class="col-sm-4 col-lg-6 text-white text-xs-center text-sm-left">
            <div class="h1">¿Listo para innovar?</div>
            <p class="h4 push-15-t">Cuéntanos acerca de sus nuevos proyectos, nosotros nos encargaremos de ayudarle,
                diligencie el siguiente formulario para que podamos empezar!</p>
        </div>
        <div class="col-lg-6 col-sm-8">
            <div class="block block-sombra contact-form block-rounded">
                <div class="block-header bg-gray-lighter">
                    <h3 class="block-title">Nueva solicitud de proyecto</h3>
                </div>
                <div class="block-content">
                    {!! Form::open() !!}
                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('nombre', 'Nombre:') !!}
                            {{ Form::text('nombre', null, ['class' => 'form-control ','placeholder'=>'Ingrese su nombre...']) }}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('telefono', 'Teléfono:') !!}
                            {{ Form::text('teléfono', null, ['class' => 'form-control','placeholder'=>'Ingrese su teléfono...']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('email', 'Email:') !!}
                            <div class="input-group">
                                {{ Form::email('email', null, ['class' => 'form-control ','placeholder'=>'Ingrese su email...']) }}
                                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('proyecto', 'Tipo de proyecto:') !!}
                            {{ Form::select('', [
                            'diseño' => 'Diseño de interfaces UI/UX',
                            'aplicaciones' => 'Aplicaciones moviles',
                            'desarrollo' => 'Desarrollo Web Apps',
                            'software' => 'Desarrollo Software',
                            'usabilidad' => 'pruebas de usabilidad',
                            'optimizacion' => 'Optimización Web',
                            ],null,
                            ['class'=>'form-control','placeholder'=>'Seleccione']) }}

                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('empresa', 'Empresa:') !!}
                            {{ Form::text('empresa', null, ['class' => 'form-control','placeholder'=>'Ingrese su empresa...']) }}

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-12">
                            {!! Form::label('mensaje', 'Mensaje:') !!}
                            {{ Form::textarea('mensaje', null, ['class' => 'form-control','rows'=>'3',
                            'placeholder'=>'Cuéntanos acerca de tu proyecto o idea...']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm text-xs-center">
                            {{ Form::submit('Enviar mensaje', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
</div>
<footer id="page-footer" class="bg-gray-darker">
    <div class="row content-boxed padding-20 flex-items-xs-middle  push-50-t">
        <!-- Footer Navigation -->

        <div class="col-sm text-xs-center">
            <img src="{{ url('assets/img/logo.png') }}" alt="User expirience first" height="50">
            <!--<div class="font-s14 padding-30 text-justify text-white-op">
                <p>Somos una novedosa empresa de desarrollo de software  enfocada a la experiencia de usuario
                    UX "User eXpirience", contamos con uno de los laboratorios de usabilidad y optimización
                    web mas grandes de Colombia, que permite brindar a nuestros
                    clientes productos usables, testiados y optimizados, para una experiencia de usuario de calidad.</p>
            </div>-->
        </div>
        <div class="row col-sm-6 text-xs-center">
            <div class="col-sm ">
                <a class="font-w600 " href="{{ url('/') }}">Inicio</a>
                <span class="vertical-divider"> | </span>
                <a class="font-w600 " href="{{ url('caracteristicas') }}">Características</a>
                <span class="vertical-divider"> | </span>
                <a class="font-w600 " href="{{ url('planes') }}">Planes</a>
                <span class="vertical-divider"> | </span>
                <a class="font-w600 " href="{{ url('equipo') }}">Equipo</a>
            </div>
        </div>
        <div class="col-sm text-xs-center">
            <a href="#">
                  <span class="item item-circle bg-primary text-white push-15-r">
                  <i class="fa fa-facebook"></i>
                  </span>
            </a>
            <a href="#">
                  <span class="item item-circle bg-city text-white push-15-r">
                  <i class="fa fa-youtube"></i>
                  </span>
            </a>
            <a href="#">
                  <span class="item item-circle bg-info text-white push-15-r">
                  <i class="fa fa-twitter"></i>
                  </span>
            </a>
            <a href="https://plus.google.com/107103225798420891542"
               rel="publisher"><span class="item item-circle bg-city text-white">
                  <i class="fa fa-google-plus"></i>
                  </span>
            </a>
        </div>


        <!-- END Footer Navigation -->
    </div>
    <!--<div class="row bg-primary text-white">
        <div class="col-sm font-s20 text-xs-center push-10-t clearfix">
            <p>Creado con <i class="fa fa-heart text-city"></i> en Colombia por <strong style="color: #393838">ZIUXLAB</strong></p>
        </div>
    </div>-->
    <div id="hablemos" class="modal in formulario">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="block">
                    <div class="block-content padding-30  bg-green-light">
                        <h4 class="h1 font-w600 text-center text-white">Tus 30 Días GRATIS</h4>
                        <h4 class="h3 font-w500 text-center text-white">¡Consiguelo Ahora!</h4>
                        <div class="push-20-t">
                            {!! Form::open(['url' => 'foo/bar','class'=>'form-horizontal']) !!}
                            <div class="form-group">
                                <div class="col-md-12">
                                    {!! Form::text('name', null,['class'=>'form-control font-s20 input-lg','placeholder'=>'Ingrese su Nombre']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    {!! Form::email('email', null,['class'=>'form-control font-s20 input-lg',
                                      'placeholder'=>'Ingrese su correo electrónico']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    {!! Form::text('telefono', null,['class'=>'form-control font-s20 input-lg',
                                      'placeholder'=>'Ingrese su número telefónico']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    {!! Form::text('empresa', null,['class'=>'form-control font-s20 input-lg',
                                      'placeholder'=>'Nombre de su empresa']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    {!! Form::text('ciudad', null,['class'=>'form-control font-s20 input-lg',
                                      'placeholder'=>'Ciudad de ubicación']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    {!! Form::submit('Empieza ahora', ['class'=>'btn btn-block btn-green btn-lg font-s20']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
