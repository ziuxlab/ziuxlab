@extends('template.master')

@section('meta')

@stop

@section('styles')
    <style>
        @charset 'UTF-8';.btn,img{vertical-align:middle}.btn-link,a{background-color:transparent;text-decoration:none}#header-navbar:after,.nav-header:after{clear:both}@-ms-viewport{width:device-width}@font-face{font-family:FontAwesome;src:url(../../assets/fonts/fontawesome-webfont.eot?v=4.6.3);src:url(../../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format('embedded-opentype'),url(../../assets/fonts/fontawesome-webfont.woff2?v=4.6.3) format('woff2'),url(../../assets/fonts/fontawesome-webfont.woff?v=4.6.3) format('woff'),url(../../assets/fonts/fontawesome-webfont.ttf?v=4.6.3) format('truetype'),url(../../assets/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format('svg');font-weight:400;font-style:normal}@-ms-viewport{width:device-width}@font-face{font-family:FontAwesome;src:url(../../assets/fonts/fontawesome-webfont.eot?v=4.6.3);src:url(../../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format('embedded-opentype'),url(../../assets/fonts/fontawesome-webfont.woff2?v=4.6.3) format('woff2'),url(../../assets/fonts/fontawesome-webfont.woff?v=4.6.3) format('woff'),url(../../assets/fonts/fontawesome-webfont.ttf?v=4.6.3) format('truetype'),url(../../assets/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format('svg');font-weight:400;font-style:normal}@media (max-width:768px){.h4{font-size:20px!important;line-height:18px!important}}@media screen and (max-width:576px){.h4{font-size:18px!important;line-height:18px!important}}html{font-family:sans-serif;line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}header,main,section{display:block}img{border-style:none}button,input{font:inherit;margin:0;overflow:visible}button{text-transform:none}button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}::-webkit-input-placeholder{color:inherit;opacity:.54}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}html{-webkit-box-sizing:border-box;box-sizing:border-box;font-size:16px;-ms-overflow-style:scrollbar}*,::after,::before{-webkit-box-sizing:inherit;box-sizing:inherit}@-ms-viewport{width:device-width}body{margin:0;line-height:1.5}h1,h2,h3{margin-top:0;margin-bottom:.5rem}p,ul{margin-top:0;margin-bottom:1rem}ul ul{margin-bottom:0}a,button,input{-ms-touch-action:manipulation;touch-action:manipulation}button,input{line-height:inherit}.row{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col-sm-10,.col-sm-2,.col-sm-6,.col-xl-4,.col-xs,.col-xs-6{position:relative;min-height:1px;width:100%;padding-right:15px;padding-left:15px}@media (min-width:768px){.row{margin-right:-15px;margin-left:-15px}.col-sm-10,.col-sm-2,.col-sm-6,.col-xl-4,.col-xs,.col-xs-6{padding-right:15px;padding-left:15px}}@media (min-width:992px){.row{margin-right:-15px;margin-left:-15px}.col-sm-10,.col-sm-2,.col-sm-6,.col-xl-4,.col-xs,.col-xs-6{padding-right:15px;padding-left:15px}}.col-xs{-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-xs-6{-webkit-box-flex:0;-webkit-flex:0 0 50%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}@media (min-width:576px){.row{margin-right:-15px;margin-left:-15px}.col-sm-10,.col-sm-2,.col-sm-6,.col-xl-4,.col-xs,.col-xs-6{padding-right:15px;padding-left:15px}.col-sm-2{-webkit-box-flex:0;-webkit-flex:0 0 16.666667%;-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-sm-6{-webkit-box-flex:0;-webkit-flex:0 0 50%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-sm-10{-webkit-box-flex:0;-webkit-flex:0 0 83.333333%;-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}}@media (min-width:1200px){.row{margin-right:-15px;margin-left:-15px}.col-sm-10,.col-sm-2,.col-sm-6,.col-xl-4,.col-xs,.col-xs-6{padding-right:15px;padding-left:15px}.col-xl-4{-webkit-box-flex:0;-webkit-flex:0 0 33.333333%;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}}.btn{display:inline-block;line-height:1.25;text-align:center;white-space:nowrap;border:1px solid transparent;padding:.5rem 1rem;font-size:1rem}.btn-link{font-weight:400;color:#0275d8;border-radius:0;border-color:transparent}.btn-lg{padding:.75rem 1.5rem;font-size:1.25rem;border-radius:.3rem}.bg-primary{background-color:#0275d8!important}.flex-items-xs-middle{-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.flex-items-xs-center{-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}.flex-items-xs-right{-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}.text-xs-right{text-align:right!important}.text-xs-center{text-align:center!important}.text-capitalize{text-transform:capitalize!important}.text-white{color:#fff!important}@media (max-width:991px){.hidden-md-down{display:none!important}}@media (min-width:992px){.hidden-lg-up{display:none!important}}body,html{height:100%}body{font-family:"Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;color:#646464;background-color:#0275d8}a{-webkit-text-decoration-skip:objects;color:#00a1f1}.h2,.h4,.h5,h1,h2,h3{margin:0;font-family:"Source Sans Pro","Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:600;line-height:1.2;color:inherit}.h2,.h4,.h5{font-weight:inherit}h1{font-size:36px}.h2,h2{font-size:30px}h3{font-size:24px}.h4{font-size:20px}.h5{font-size:16px}.font-w600{font-weight:600!important}p{line-height:1.6}.bg-white{background-color:#fff}.btn{font-weight:600;border-radius:2px}.btn-danger{color:#fff;background-color:#f55;border-color:#f22}.img-responsive{width:100%}@font-face{font-family:FontAwesome;src:url(../../assets/fonts/fontawesome-webfont.eot?v=4.6.3);src:url(../../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format('embedded-opentype'),url(../../assets/fonts/fontawesome-webfont.woff2?v=4.6.3) format('woff2'),url(../../assets/fonts/fontawesome-webfont.woff?v=4.6.3) format('woff'),url(../../assets/fonts/fontawesome-webfont.ttf?v=4.6.3) format('truetype'),url(../../assets/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format('svg');font-weight:400;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-2x{font-size:2em}.pull-right{float:right}.fa-times:before{content:"\f00d"}.fa-navicon:before{content:"\f0c9"}#header-navbar{min-height:60px}#header-navbar:after,#header-navbar:before{content:" ";display:table}.header-navbar-fixed #header-navbar{position:fixed;top:0;right:0;left:0;z-index:1030;min-width:320px;-webkit-backface-visibility:hidden;backface-visibility:hidden;box-shadow:0 2px 5px rgba(0,0,0,.02)}.header-navbar-fixed #main-container{padding-top:60px}#page-container{margin:0 auto;width:100%;min-width:320px;background-color:#2c343f}#main-container{overflow-x:hidden;background-color:#0275d8}.content,.content-mini{max-width:100%;overflow-x:visible}.content{margin:0 auto;padding:16px 14px 1px}.content .push,.content p{margin-bottom:16px}.content.content-full{padding-bottom:16px}@media screen and (min-width:768px){.content{margin:0 auto;padding:30px 30px 1px;max-width:100%;overflow-x:visible}.content .push,.content p{margin-bottom:30px}.content.content-full{padding-bottom:30px}}.content-mini{margin:0 auto;padding:13px 14px 1px}.content-mini.content-mini-full{padding-bottom:13px}@media screen and (min-width:768px){.content-mini{margin:0 auto;padding:13px 30px 1px;max-width:100%;overflow-x:visible}.content-mini.content-mini-full{padding-bottom:13px}}.content-boxed{margin:0 auto;width:100%;max-width:1280px}.nav-main-header{position:fixed;top:0;right:0;bottom:0;left:0;margin:0;padding:20px;width:100%;list-style:none;background-color:#2c343f;z-index:1031;opacity:0;overflow-y:auto;-webkit-overflow-scrolling:touch;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-transform:translateX(0) translateY(-100%) translateZ(0);transform:translateX(0) translateY(-100%) translateZ(0)}.nav-main-header>li{margin:0 0 10px}.nav-main-header a{display:block;padding:0 12px;min-height:34px;color:rgba(255,255,255,.5);font-weight:600;line-height:34px}.nav-main-header a.nav-submenu{position:relative;padding-right:32px}.nav-main-header a.nav-submenu:before{position:absolute;right:10px;font-family:FontAwesome;content:"\f107"}.nav-main-header ul{margin:0 0 0 15px;padding:0;list-style:none;display:none}.nav-main-header ul a{min-height:32px;font-weight:400;line-height:32px;font-size:16px}.nav-header .header-content,.nav-header>li>a{line-height:34px}@media screen and (min-width:992px){.nav-main-header{position:static;top:auto;right:auto;bottom:auto;left:auto;padding:0;width:auto;background-color:transparent;z-index:auto;opacity:1;overflow-y:visible;-webkit-overflow-scrolling:auto;-webkit-backface-visibility:visible;backface-visibility:visible;-webkit-transform:translateX(0) translateY(0) translateZ(0);transform:translateX(0) translateY(0) translateZ(0)}.nav-main-header>li{position:relative;margin:0 10px 0 0;float:left}.nav-main-header ul{position:absolute;left:0;margin:0;padding:13px 0;min-width:160px;background-color:#16203b}}.nav-header{margin:0;padding:0;list-style:none}.nav-header:after,.nav-header:before{content:" ";display:table}.nav-header>li{margin-right:12px;float:left}.nav-header>li>a{padding:0 12px;display:block;height:34px;font-weight:600}.push-5-t{margin-top:5px!important}.push-30-t{margin-top:30px!important}.push-50{margin-bottom:50px!important}.animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}@-webkit-keyframes bounceInRight{0%,100%,60%,75%,90%{-webkit-transition-timing-function:cubic-bezier(.215,.61,.355,1);transition-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(3000px,0,0);transform:translate3d(3000px,0,0)}60%{opacity:1;-webkit-transform:translate3d(-25px,0,0);transform:translate3d(-25px,0,0)}75%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}90%{-webkit-transform:translate3d(-5px,0,0);transform:translate3d(-5px,0,0)}100%{-webkit-transform:none;transform:none}}@keyframes bounceInRight{0%,100%,60%,75%,90%{-webkit-transition-timing-function:cubic-bezier(.215,.61,.355,1);transition-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(3000px,0,0);transform:translate3d(3000px,0,0)}60%{opacity:1;-webkit-transform:translate3d(-25px,0,0);transform:translate3d(-25px,0,0)}75%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}90%{-webkit-transform:translate3d(-5px,0,0);transform:translate3d(-5px,0,0)}100%{-webkit-transform:none;transform:none}}.bounceInRight{-webkit-animation-name:bounceInRight;animation-name:bounceInRight}#header-navbar{background-color:#2c343f;height:75px}.nav-main-header ul{min-width:250px;border-radius:5px}main{margin-top:75px}.content-boxed{display:flex}.font-s16{font-size:16px!important}.overflow-hidden{overflow:hidden}@media (max-width:768px){.h2{font-size:24px!important;letter-spacing:-1px;line-height:24px!important}.h4{font-size:20px!important;line-height:18px!important}.font-s16{font-size:12px!important}}@media screen and (max-width:576px){.h2{font-size:24px!important;letter-spacing:-1px;line-height:24px!important}.h4{font-size:18px!important;line-height:18px!important}.font-s16{font-size:12px!important}}
    </style>
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
        <div class="bg-white ">
            <section class="overflow-hidden content-boxed">
                <div class="row flex-items-xs-middle content content-full flex-items-xs-center ">
                    
                    <div class="col-sm-6">
                        <img class="img-responsive" src="{{url('assets/img/mockups.png')}}" alt="">
                    </div>
                    <div class="col-sm-6 push-30-t font-s16 content content-full">
                        <h3 class="h2 text-xs-center push">Diseño de interfaces</h3>
                        <p>Una interfaz de usuario es la entrada principal por la cual los usuarios interactúan con
                           sus productos o servicios, si la interfaz está bien diseñada pagará por sí misma porque
                           los usuarios sienten más confianza y solidez, de lo contrario si les genera desconfianza
                           o les parece complicada la dejaran y es un posible cliente potencial que esta
                           perdiendo.</p>
                        <p>Una interfaz bien diseñada pagará por si misma porque los usuarios sienten más confianza
                           y solidez</p>
                        
                        <p>Una interfaz no solo debe ser atractiva visualmente, esta debe transmitir de forma clara
                           y sencilla las tareas que debe realizar un usuario. Una interfaz con diseño adecuado no
                           solamente requiere de imaginación, creatividad e inspiración, sino que necesita un
                           enfoque analítico para pensar en la interacción que va a realizar un usuario teniendo en
                           cuenta el modelo de negocio, las verdaderas necesidades que un usuario tiene, para así
                           tomar las decisiones más acertadas sobre el diseño y realiza una interacción fácil y
                           amigable. </p>
                    
                    </div>
                
                
                </div>
            </section>
        </div>
        <div class="bg-radial-gradient-blue text-white font-s16">
            <section class="overflow-hidden content-boxed">
                <div class="row flex-items-xs-middle content content-full flex-items-xs-center ">
                    <div class="col-sm-6 content content-full">
                        <h3 class="push h2">¿Qué hacemos en diseño de interfaces?</h3>
                        <p>En ziuxlab tomamos todo esto en cuenta y es por eso que utilizamos las mejores prácticas
                           para desarrollar diseños que no sean solo visualmente atractivos, sino que además cuenten
                           con usabilidad, un adecuado y acertado diseño de la interacción.</p>
                        <p>Buscamos colaborar con usted para crear diseños enfocados en sus procesos de negocio,
                           generando soluciones estratégicas que generen una ventaja competitiva al lograr que sus
                           usuarios sientan una excelente experiencia (User expirience), donde sus interfaces sean
                           centradas en los
                           usuarios, intuitivas, teniendo en cuenta siempre el contexto al cual está enfocado el
                           sistema.</p>
                        <p>Identificamos, evaluamos y diseñamos interfaces de usuario teniendo en cuenta las
                           interacciones que pueden tener las personas con sus productos o servicios en línea.
                           Buscamos que estas interacciones sean compatibles con la arquitectura de la información
                           de su sitio, sus objetivos de negocio y las expectativas de sus clientes. Es una sinergia
                           de la forma, función e interacción. Sin olvidarnos de que sean atractivas visualmente
                           generando confianza.</p>
                    </div>
                    <div class="col-sm-6 content content-full">
                        <img class="img-responsive block-sombra"
                             src="{{url('assets/img/diseño-interfaces-dashboard.png')}}" alt="">
                    </div>
                
                </div>
            </section>
        </div>
        <div class="bg-white">
            <section class="overflow-hidden content-boxed">
                <div class="row flex-items-xs-middle content content-full flex-items-xs-center ">
                    
                    <div class="col-sm-6">
                        <img class="img-responsive" src="{{url('assets/img/imagen-corporativa.svg')}}" alt="">
                    </div>
                    <div class="col-sm-6 push-30-t font-s16 content content-full">
                        <h3 class=" h2 text-xs-center push">Diseño UI/UX</h3>
                        <p>Diseñamos experiencias inteligentes y memorables, productos y servicios que desempeñan un
                           papel significativo en la vida de las personas y el éxito del negocio.
                           Nuetros servicios incluyen la realización de la investigación del usuario, el desarrollo de
                           estructuras de wireframes, el diseño de maquetas visuales (mockups), y la creación de
                           prototipos para
                           pruebas de usabilidad.</p>
                           
                        <p>
                        
                           Siempre al día con las últimas tendencias, no sólo a través del diseño y la tecnología, sino
                           en el comportamiento humano también.
                           No me acaba con diseñar una experiencia de usuario efectiva, podemos crear uno excepcional.
                        </p>
                        
                        <h3 class="h2 text-xs-center push">Diseño de marca y logotipos <br> identidad corporativa</h3>
                        <p>Creamos tu marca para que puedas transmitir personalidad y carácter de tu empresa, buscando
                           que sea claro, que este construido con verdades y comuniquen emoción. El logotipo de una
                           empresa hace que sea reconocida por sus clientes actuales o potenciales, la diferencia de la
                           competencia de manera única y clara, y transmite sus valores a la sociedad.</p>
                    
                    </div>
                
                
                </div>
            </section>
        </div>
        <div class="bg-radial-gradient-blue text-white font-s16">
            <section class="overflow-hidden content-boxed">
                <div class="col-sm-6 col-xs-12 row flex-items-xs-middle content content-full flex-items-xs-center ">
                    <div class="col-sm-12">
                        <h3 class="push h2">¿Beneficios del diseño de interfaces e identidad corporativa?</h3>
                        <ul class="text-white-op">
                            <li class="push-10">Diseño optimizado y alineado con la identidad visual de su marca que
                                                garantice una
                                                agradable experiencia de navegación.
                            </li>
                            <li class="push-10">Reciba la planeación del sitio desde la usabilidad.</li>
                            <li class="push-10">Optimice la experiencia de sus usuarios a través de diseños adaptativos
                                                a diferentes dispositivos móviles.
                            </li>
                            <li class="push-10">Reducir los tiempos de búsqueda y el éxito de las tareas principales.
                            </li>
                            <li class="push-10">Reducir la frustración y conseguir una mayor satisfacción del cliente.
                            </li>
                            <li class="push-10">Disminuir el tiempo de desarrollo de nuestros proyectos.</li>
                            <li class="push-10">Disminuir los costes de mantenimiento y darle mayor vida útil al sitio
                                                web.
                            </li>
                            
                            <li class="push-10">Mejorar la credibilidad frente a nuestros diferentes públicos (clientes,
                                                prens, etc).
                            </li>
                            <li class="push-10">Aumentar los ingresos de su sitio.</li>
                            <li class="push-10">Conseguir una mejor alineación entre las metas de negocio y el sitio
                                                web.
                            </li>
                            <li class="push-10">Disminuir las llamadas al servicio de atención al cliente.</li>
                            <li class="push-10">Mejorar el valor de marca.</li>
                            <li class="push-10">Aumentar la lealtad y la repetición de la visita.</li>
                            <li class="push-10">Aumentar las páginas vistas y la exposición a contenidos adicionales.</li>
                            <li class="push-10">Disminuir los errores del usuario cuando navega así como los errores del sitio web.</li>
                           
                        </ul>
                    </div>
                
                
                
                </div>
                <div class="col-sm-6 col-xs-12 bg-primary-dark row flex-items-xs-middle flex-items-xs-center ">
                    
                    <img class="img-responsive"
                         src="{{url('http://media02.hongkiat.com/mobile-app-ui/3-iPhone-app-designs-UI.jpg')}}" alt="">
                
                </div>
            
            </section>
        </div>
    
    
        
    </main>
    @include('app.opiniones')
    @include('app.formulario')

@stop