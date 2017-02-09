<div id="section-4" class="row flex-items-xs-middle content content-full bg-primary push-100-t push-100">
    <div class="row flex-items-xs-middle content-boxed">
        <div class="col-sm-4 col-lg-6 text-white text-xs-center text-sm-left content content-full">
            <div class="h1">¿Listo para innovar?</div>
            <p class="h4 push-15-t">Cuéntenos acerca de sus nuevos proyectos, nosotros nos encargaremos de ayudarle,
                                    diligencie el siguiente formulario para que podamos empezar!</p>
            <p class="h4">Teléfono:  311-664-8767</p>
            <span class="h4">Correo: </span><a class="h4" href="mailto:comercial@ziuxlab.com"><span>comercial</span><span>@ziuxlab.com</span></a>
        </div>
        <div class="col-lg-6 col-sm-8">
            <div id="formulario" class="block block-sombra contact-form block-rounded">
                <div class="block-header bg-gray-lighter">
                    <h3 class="block-title">Nueva solicitud de proyecto</h3>
                </div>
                <div class="block-content">
                    {!! Form::open(['action'=>'MailController@store']) !!}
                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('nombre', 'Nombre:') !!}
                            {{ Form::text('nombre', null, ['class' => 'form-control ','placeholder'=>'Ingrese su nombre...','required']) }}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('telefono', 'Teléfono:') !!}
                            {{ Form::text('telefono', null, ['class' => 'form-control','placeholder'=>'Ingrese su teléfono...']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('email', 'Email:') !!}
                            <div class="input-group">
                                {{ Form::email('email', null, ['class' => 'form-control ','placeholder'=>'Ingrese su email...','required']) }}
                                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            {{ Form::label('proyecto', 'Tipo de proyecto:') }}
                            {{ Form::select('tipo_proyecto', [
                            'diseño' => 'Diseño de interfaces UI/UX',
                            'aplicaciones' => 'Aplicaciones moviles',
                            'desarrollo' => 'Desarrollo Web Apps',
                            'software' => 'Desarrollo Software',
                            'usabilidad' => 'pruebas de usabilidad',
                            'optimizacion' => 'Optimización Web',
                            ],null,
                            ['class'=>'form-control','placeholder'=>'Seleccione','required']) }}
                        
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
                            'placeholder'=>'Cuéntanos acerca de su proyecto o idea...','required']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm text-xs-center">
                            {{ Form::submit('Enviar mensaje', ['class' => 'js-swal-success btn btn-primary']) }}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        
        </div>
    </div>
</div>