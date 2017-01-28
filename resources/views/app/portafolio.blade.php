@extends('template.master')

@section('meta')

@stop
@section('styles')
    <style>@charset 'UTF-8';.btn,img{vertical-align:middle}.btn-link,a{text-decoration:none}#header-navbar:after,.nav-header:after{clear:both}@-ms-viewport{width:device-width}@font-face{font-family:FontAwesome;src:url(../../../assets/fonts/fontawesome-webfont.eot?v=4.6.3);src:url(../../../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format('embedded-opentype'),url(../../../assets/fonts/fontawesome-webfont.woff2?v=4.6.3) format('woff2'),url(../../../assets/fonts/fontawesome-webfont.woff?v=4.6.3) format('woff'),url(../../../assets/fonts/fontawesome-webfont.ttf?v=4.6.3) format('truetype'),url(../../../assets/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format('svg');font-weight:400;font-style:normal}@-ms-viewport{width:device-width}blockquote{margin:0 0 1rem}.col-sm-10,.col-sm-12,.col-sm-3,.col-sm-4,.col-xl-5,.col-xs,.col-xs-3,.col-xs-4,.col-xs-6{position:relative;min-height:1px;width:100%;padding-right:15px;padding-left:15px}@media (min-width:576px){.col-sm-10,.col-sm-12,.col-sm-3,.col-sm-4,.col-xl-5,.col-xs,.col-xs-3,.col-xs-4,.col-xs-6{padding-right:15px;padding-left:15px}.col-sm-3{-webkit-box-flex:0;-webkit-flex:0 0 25%;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-sm-4{-webkit-box-flex:0;-webkit-flex:0 0 33.333333%;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-sm-10{-webkit-box-flex:0;-webkit-flex:0 0 83.333333%;-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-sm-12{-webkit-box-flex:0;-webkit-flex:0 0 100%;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}@media (min-width:768px){.col-sm-10,.col-sm-12,.col-sm-3,.col-sm-4,.col-xl-5,.col-xs,.col-xs-3,.col-xs-4,.col-xs-6{padding-right:15px;padding-left:15px}}.text-primary{color:#0275d8!important}.bg-primary-darker{background-color:#2c343f}.block.block-transparent,.btn-link,a{background-color:transparent}@font-face{font-family:FontAwesome;src:url(../../../assets/fonts/fontawesome-webfont.eot?v=4.6.3);src:url(../../../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format('embedded-opentype'),url(../../../assets/fonts/fontawesome-webfont.woff2?v=4.6.3) format('woff2'),url(../../../assets/fonts/fontawesome-webfont.woff?v=4.6.3) format('woff'),url(../../../assets/fonts/fontawesome-webfont.ttf?v=4.6.3) format('truetype'),url(../../../assets/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format('svg');font-weight:400;font-style:normal}.block.block-transparent{box-shadow:none}html{font-family:sans-serif;line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}header,main,section{display:block}img{border-style:none}button,input{font:inherit;margin:0;overflow:visible}button{text-transform:none}button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}::-webkit-input-placeholder{color:inherit;opacity:.54}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}html{-webkit-box-sizing:border-box;box-sizing:border-box;font-size:16px;-ms-overflow-style:scrollbar}*,::after,::before{-webkit-box-sizing:inherit;box-sizing:inherit}@-ms-viewport{width:device-width}body{margin:0;line-height:1.5}h1,h2,h3,h4{margin-top:0;margin-bottom:.5rem}p,ul{margin-top:0;margin-bottom:1rem}a,button,input{-ms-touch-action:manipulation;touch-action:manipulation}button,input{line-height:inherit}.row{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col-sm-12,.col-sm-3,.col-sm-4,.col-xl-5,.col-xs,.col-xs-3,.col-xs-4,.col-xs-6{position:relative;min-height:1px;width:100%;padding-right:15px;padding-left:15px}@media (min-width:768px){.row{margin-right:-15px;margin-left:-15px}.col-sm-12,.col-sm-3,.col-sm-4,.col-xl-5,.col-xs,.col-xs-3,.col-xs-4,.col-xs-6{padding-right:15px;padding-left:15px}}@media (min-width:992px){.row{margin-right:-15px;margin-left:-15px}.col-sm-12,.col-sm-3,.col-sm-4,.col-xl-5,.col-xs,.col-xs-3,.col-xs-4,.col-xs-6{padding-right:15px;padding-left:15px}}.col-xs{-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-xs-3{-webkit-box-flex:0;-webkit-flex:0 0 25%;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-xs-4{-webkit-box-flex:0;-webkit-flex:0 0 33.333333%;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-xs-6{-webkit-box-flex:0;-webkit-flex:0 0 50%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}@media (min-width:576px){.row{margin-right:-15px;margin-left:-15px}.col-sm-12,.col-sm-3,.col-sm-4,.col-xl-5,.col-xs,.col-xs-3,.col-xs-4,.col-xs-6{padding-right:15px;padding-left:15px}.col-sm-3{-webkit-box-flex:0;-webkit-flex:0 0 25%;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-sm-4{-webkit-box-flex:0;-webkit-flex:0 0 33.333333%;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-sm-12{-webkit-box-flex:0;-webkit-flex:0 0 100%;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}@media (min-width:1200px){.row{margin-right:-15px;margin-left:-15px}.col-sm-12,.col-sm-3,.col-sm-4,.col-xl-5,.col-xs,.col-xs-3,.col-xs-4,.col-xs-6{padding-right:15px;padding-left:15px}.col-xl-5{-webkit-box-flex:0;-webkit-flex:0 0 41.666667%;-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}}.content,.content-mini{max-width:100%;overflow-x:visible}.btn{display:inline-block;line-height:1.25;text-align:center;white-space:nowrap;border:1px solid transparent;padding:.5rem 1rem;font-size:1rem}.btn-link{font-weight:400;color:#0275d8;border-radius:0;border-color:transparent}.btn-lg{padding:.75rem 1.5rem;font-size:1.25rem;border-radius:.3rem}.flex-items-xs-middle{-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.flex-items-xs-left{-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.flex-items-xs-center{-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}.flex-items-xs-right{-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}@media (min-width:768px){.flex-items-md-right{-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}}.text-xs-right{text-align:right!important}.text-xs-center{text-align:center!important}.text-uppercase{text-transform:uppercase!important}.text-white{color:#fff!important}@media (max-width:991px){.hidden-md-down{display:none!important}}@media (min-width:992px){.hidden-lg-up{display:none!important}}body,html{height:100%}body{font-family:"Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;color:#646464;background-color:#0275d8}a{-webkit-text-decoration-skip:objects;color:#00a1f1}.h1,.h2,.h3,.h4,h1,h2,h3,h4{margin:0;font-family:"Source Sans Pro","Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:600;line-height:1.2;color:inherit}.h1,.h2,.h3,.h4{font-weight:inherit}.h1,h1{font-size:36px}.h2,h2{font-size:30px}.h3,h3{font-size:24px}.h4,h4{font-size:20px}.font-w400{font-weight:400!important}.font-w600{font-weight:600!important}p{line-height:1.6}.text-white-op{color:rgba(255,255,255,.85)}.bg-gray-lighter{background-color:#f9f9f9}.btn{font-weight:600;border-radius:2px}.btn-danger{color:#fff;background-color:#f55;border-color:#f22}.img-responsive{width:100%}@font-face{font-family:FontAwesome;src:url(../../../assets/fonts/fontawesome-webfont.eot?v=4.6.3);src:url(../../../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format('embedded-opentype'),url(../../../assets/fonts/fontawesome-webfont.woff2?v=4.6.3) format('woff2'),url(../../../assets/fonts/fontawesome-webfont.woff?v=4.6.3) format('woff'),url(../../../assets/fonts/fontawesome-webfont.ttf?v=4.6.3) format('truetype'),url(../../../assets/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format('svg');font-weight:400;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.nav-header .header-content,.nav-header>li>a{line-height:34px}.fa-2x{font-size:2em}.pull-right{float:right}.fa-times:before{content:"\f00d"}.fa-navicon:before{content:"\f0c9"}#header-navbar{min-height:60px}#header-navbar:after,#header-navbar:before{content:" ";display:table}.header-navbar-fixed #header-navbar{position:fixed;top:0;right:0;left:0;z-index:1030;min-width:320px;-webkit-backface-visibility:hidden;backface-visibility:hidden;box-shadow:0 2px 5px rgba(0,0,0,.02)}#page-container{margin:0 auto;width:100%;min-width:320px;background-color:#2c343f}.content{margin:0 auto;padding:16px 14px 1px}@media screen and (min-width:768px){.content{margin:0 auto;padding:30px 30px 1px;max-width:100%;overflow-x:visible}}.content-mini{margin:0 auto;padding:13px 14px 1px}.content-mini.content-mini-full{padding-bottom:13px}@media screen and (min-width:768px){.content-mini{margin:0 auto;padding:13px 30px 1px;max-width:100%;overflow-x:visible}.content-mini.content-mini-full{padding-bottom:13px}}.content-boxed{margin:0 auto;width:100%;max-width:1280px}.block{margin-bottom:30px;background-color:#fff;box-shadow:0 2px rgba(0,0,0,.01)}.nav-main-header{position:fixed;top:0;right:0;bottom:0;left:0;margin:0;padding:20px;width:100%;list-style:none;background-color:#2c343f;z-index:1031;opacity:0;overflow-y:auto;-webkit-overflow-scrolling:touch;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-transform:translateX(0) translateY(-100%) translateZ(0);transform:translateX(0) translateY(-100%) translateZ(0)}.nav-main-header>li{margin:0 0 10px}.nav-main-header a{display:block;padding:0 12px;min-height:34px;color:rgba(255,255,255,.5);font-weight:600;line-height:34px}@media screen and (min-width:992px){.nav-main-header{position:static;top:auto;right:auto;bottom:auto;left:auto;padding:0;width:auto;background-color:transparent;z-index:auto;opacity:1;overflow-y:visible;-webkit-overflow-scrolling:auto;-webkit-backface-visibility:visible;backface-visibility:visible;-webkit-transform:translateX(0) translateY(0) translateZ(0);transform:translateX(0) translateY(0) translateZ(0)}.nav-main-header>li{position:relative;margin:0 10px 0 0;float:left}}.img-container,.overflow-hidden{overflow:hidden}.nav-header{margin:0;padding:0;list-style:none}.nav-header:after,.nav-header:before{content:" ";display:table}.nav-header>li{margin-right:12px;float:left}.nav-header>li>a{padding:0 12px;display:block;height:34px;font-weight:600}.img-container{position:relative;z-index:0;display:block}.img-container .img-options{position:absolute;top:0;right:0;bottom:0;left:0;z-index:1;content:"";opacity:0;visibility:none}.img-container .img-options-content{position:absolute;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);right:0;left:0;text-align:center}@media screen and (max-width:767px){.img-container .img-options{display:none}}.img-container.fx-opt-zoom-out .img-options{-webkit-transform:scale(2);transform:scale(2)}.push-5{margin-bottom:5px!important}.push-5-t{margin-top:5px!important}.push-15{margin-bottom:15px!important}.push-50-t{margin-top:50px!important}.remove-margin{margin:0!important}.remove-padding{padding:0!important}#header-navbar{background-color:#2c343f;height:75px}main{margin-top:75px}.img-container .img-options{background-color:rgba(0,0,0,.8)!important}.content-boxed{display:flex}.bg-radial-gradient-blue{background-image:-webkit-radial-gradient(circle closest-corner at 50% 70%,#00a1f1,#0275d8 99%);background-image:radial-gradient(circle closest-corner at 50% 70%,#00a1f1,#0275d8 99%)}.block-sombra{box-shadow:0 2px 29px rgba(0,0,0,.25)}#section-3{z-index:3;position:relative;min-height:400px}@media (max-width:768px){.h1,.h2,.h3{letter-spacing:-1px}.h1{font-size:30px!important;line-height:30px!important}.h2{font-size:24px!important;line-height:24px!important}.h3{font-size:22px!important;line-height:22px!important}.h4{font-size:20px!important;line-height:18px!important}}@media screen and (max-width:576px){.h1,.h2,.h3{letter-spacing:-1px}.h1,.h2{line-height:24px!important}.h1{font-size:28px!important}.h2{font-size:24px!important}.h3{font-size:20px!important;line-height:20px!important}.h4{font-size:18px!important;line-height:18px!important}}</style>
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
                        <a class="img-options" href="http://miproteina.com.co" target="_blank">
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
                                <div class="col-sm-12">
                                    <p class="btn btn-primary">ver trabajo</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 remove-padding">
                    <div class="img-container remove-margin  block  block-sombra fx-opt-zoom-out">
                        <img class="img-responsive" src="{{ url('assets/img/testabolic.png') }}"
                             alt="optimización de paginas web">
                        <a class="img-options " href="https://testabolichd.com" target="_blank">
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
                                <div class="col-sm-12">
                                    <p class="btn btn-primary">ver trabajo</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4  remove-padding">
                    <div class="img-container remove-margin block block-sombra fx-opt-zoom-out">
                        <img class="img-responsive" src="{{ url('assets/img/contapp.png') }}"
                             alt="desarrollo de aplicaciones web">
                        <a class="img-options " href="http://contapp.com.co" target="_blank">
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
                                <div class="col-sm-12">
                                    <p class="btn btn-primary">ver trabajo</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 remove-padding">
                    <div class="img-container remove-margin  block  block-sombra fx-opt-zoom-out">
                        <img class="img-responsive" src="{{ url('assets/img/lipocore-portafolio.png') }}"
                             alt="optimización de paginas web">
                        <a class="img-options " href="https://lipocorehd.com" target="_blank" >
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
                                <div class="col-sm-12">
                                    <p class="btn btn-primary">ver trabajo</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 remove-padding">
                    <div class="img-container remove-margin block block-sombra fx-opt-zoom-out">
                        <img class="img-responsive" src="{{ url('assets/img/turismo-responsable.png') }}"
                             alt="desarrollo web e-commerce">
                        <a class="img-options " href="http://turismoresponsable.com.co" target="_blank">
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
                                <div class="col-sm-12">
                                    <p class="btn btn-primary">ver trabajo</p>
                                </div>
                            </div>
                        </a>
                    </div>
                
                </div>
                <div class="col-sm-4  remove-padding">
                    <div class="img-container remove-margin block block-sombra fx-opt-zoom-out">
                        <img class="img-responsive" src="{{ url('assets/img/app-contapp.png') }}"
                             alt="desarrollo de aplicaciones web">
                        <a class="img-options " href="https://app.contapp.com.co" target="_blank">
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
                                <div class="col-sm-12">
                                    <p class="btn btn-primary">ver trabajo</p>
                                </div>
                            </div>
                        </a>
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