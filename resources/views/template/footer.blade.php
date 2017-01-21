
<footer id="page-footer" class="bg-primary-darker">
    <div class="row content-boxed padding-20 flex-items-xs-middle  ">
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
        <div class="row col-sm text-xs-center">
            <div class="col-sm ">
                <a class="font-w600 " href="{{ url('/') }}">Inicio</a>
                <span class="vertical-divider"> | </span>
                <a class="font-w600 " href="{{ url('/') }}">Servicios</a>
                <span class="vertical-divider"> | </span>
                <a class="font-w600 " href="{{ url('/') }}">Casos de exito</a>
                <span class="vertical-divider"> | </span>
                <a class="font-w600 " href="{{ url('/') }}">Empresa</a>
                <span class="vertical-divider"> | </span>
                <a class="font-w600 " href="{{ url('/') }}">Usabilidad</a>
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
