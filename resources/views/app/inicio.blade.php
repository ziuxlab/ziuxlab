@extends('template.master')

@section('meta')

@stop

@section('styles')
    <style>
        @charset 'UTF-8';.btn,img{vertical-align:middle}#header-navbar:after,.nav-header:after{clear:both}@-ms-viewport{width:device-width}h1,h3,h4{margin-top:0;margin-bottom:.5rem}.h1,.h3,.h4,.h5,h1,h3,h4{margin:0;font-family:"Source Sans Pro","Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:600;line-height:1.2;color:inherit}.col-lg-6,.col-sm-3,.col-xl-5,.col-xs,.col-xs-3,.col-xs-4,.col-xs-6{position:relative;min-height:1px;width:100%;padding-right:15px;padding-left:15px}.col-xs-3{-webkit-box-flex:0;-webkit-flex:0 0 25%;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.h1,.h3,.h4,.h5{font-weight:inherit}.h3,h3{font-size:24px}.h4,h4{font-size:20px}.font-w400{font-weight:400!important}@font-face{font-family:FontAwesome;src:url(../../../assets/fonts/fontawesome-webfont.eot?v=4.6.3);src:url(../../../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format('embedded-opentype'),url(../../../assets/fonts/fontawesome-webfont.woff2?v=4.6.3) format('woff2'),url(../../../assets/fonts/fontawesome-webfont.woff?v=4.6.3) format('woff'),url(../../../assets/fonts/fontawesome-webfont.ttf?v=4.6.3) format('truetype'),url(../../../assets/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format('svg');font-weight:400;font-style:normal}.content p{margin-bottom:16px}.img-container .img-options{position:absolute;top:0;right:0;bottom:0;left:0;z-index:1;content:"";opacity:0;visibility:none;background-color:rgba(0,0,0,.8)!important}.img-container .img-options-content{position:absolute;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);right:0;left:0;text-align:center}@media screen and (max-width:767px){.img-container .img-options{display:none}}.img-container.fx-opt-zoom-out .img-options{-webkit-transform:scale(2);transform:scale(2)}.push-5{margin-bottom:5px!important}.push-15{margin-bottom:15px!important}@media (max-width:768px){.h1,.h3{letter-spacing:-1px}.div-full{min-height:80vh}.h1{font-size:30px!important;line-height:30px!important}.h3{font-size:22px!important;line-height:22px!important}.h4{font-size:20px!important;line-height:18px!important}.portada{margin:150px 30px 50px!important}}@media screen and (max-width:576px){.h1,.h3{letter-spacing:-1px}.div-full{min-height:100vh}.h1{font-size:28px!important;line-height:24px!important}.h3{font-size:20px!important;line-height:20px!important}.h4{font-size:18px!important;line-height:18px!important}.portada{margin:100px 0 50px!important}.rw-words span{left:0}}@-ms-viewport{width:device-width}.col-lg-6,.col-sm-12,.col-sm-3,.col-sm-6,.col-xl,.col-xl-5,.col-xs,.col-xs-4,.col-xs-6{position:relative;min-height:1px;width:100%;padding-right:15px;padding-left:15px}@media (min-width:576px){.col-lg-6,.col-sm-12,.col-sm-3,.col-sm-6,.col-xl,.col-xl-5,.col-xs,.col-xs-4,.col-xs-6{padding-right:15px;padding-left:15px}.col-sm-3{-webkit-box-flex:0;-webkit-flex:0 0 25%;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-sm-6{-webkit-box-flex:0;-webkit-flex:0 0 50%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-sm-12{-webkit-box-flex:0;-webkit-flex:0 0 100%;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}.flex-items-xs-center{-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}@media (min-width:768px){.col-lg-6,.col-sm-12,.col-sm-3,.col-sm-6,.col-xl,.col-xl-5,.col-xs,.col-xs-4,.col-xs-6{padding-right:15px;padding-left:15px}}a.block,header,main,section{display:block}.bg-black-op{background-color:rgba(0,0,0,.4)}@font-face{font-family:FontAwesome;src:url(../../../assets/fonts/fontawesome-webfont.eot?v=4.6.3);src:url(../../../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format('embedded-opentype'),url(../../../assets/fonts/fontawesome-webfont.woff2?v=4.6.3) format('woff2'),url(../../../assets/fonts/fontawesome-webfont.woff?v=4.6.3) format('woff'),url(../../../assets/fonts/fontawesome-webfont.ttf?v=4.6.3) format('truetype'),url(../../../assets/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format('svg');font-weight:400;font-style:normal}.content .block,.content .push,.content p{margin-bottom:16px}@media screen and (min-width:768px){.content{margin:0 auto;padding:30px 30px 1px;max-width:100%;overflow-x:visible}.content .block,.content .push,.content p{margin-bottom:30px}.content.content-full{padding-bottom:30px}}.bg-image{background-color:#f9f9f9;background-position:0 50%;background-size:cover}.block{margin-bottom:30px;background-color:#fff;box-shadow:0 2px rgba(0,0,0,.01)}.btn-link,a{text-decoration:none;background-color:transparent}.block-content{margin:0 auto;padding:20px 20px 1px;max-width:100%;overflow-x:visible}.block-content.block-content-full{padding-bottom:20px}a.block{color:#646464;font-weight:400}@-webkit-keyframes fadeInUp{0%{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}100%{opacity:1;-webkit-transform:none;transform:none}}@keyframes fadeInUp{0%{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}100%{opacity:1;-webkit-transform:none;transform:none}}.fadeInUp{-webkit-animation-name:fadeInUp;animation-name:fadeInUp}.block-sombra{box-shadow:0 2px 29px rgba(0,0,0,.25)}h1,h3,p,ul{margin-top:0}html{font-family:sans-serif;line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}img{border-style:none}button,input{font:inherit;margin:0;overflow:visible}button{text-transform:none}button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}::-webkit-input-placeholder{color:inherit;opacity:.54}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}html{-webkit-box-sizing:border-box;box-sizing:border-box;font-size:16px;-ms-overflow-style:scrollbar}*,::after,::before{-webkit-box-sizing:inherit;box-sizing:inherit}@-ms-viewport{width:device-width}body{margin:0;line-height:1.5}h1,h3{margin-bottom:.5rem}p,ul{margin-bottom:1rem}ul ul{margin-bottom:0}a,button,input{-ms-touch-action:manipulation;touch-action:manipulation}button,input{line-height:inherit}.img-fluid{max-width:100%;height:auto}.row{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col-lg-6,.col-sm-12,.col-sm-3,.col-xl-5,.col-xs,.col-xs-4,.col-xs-6{position:relative;min-height:1px;width:100%;padding-right:15px;padding-left:15px}@media (min-width:768px){.row{margin-right:-15px;margin-left:-15px}.col-lg-6,.col-sm-12,.col-sm-3,.col-xl-5,.col-xs,.col-xs-4,.col-xs-6{padding-right:15px;padding-left:15px}}.col-xs{-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-xs-4{-webkit-box-flex:0;-webkit-flex:0 0 33.333333%;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-xs-6{-webkit-box-flex:0;-webkit-flex:0 0 50%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}@media (min-width:576px){.row{margin-right:-15px;margin-left:-15px}.col-lg-6,.col-sm-12,.col-sm-3,.col-xl-5,.col-xs,.col-xs-4,.col-xs-6{padding-right:15px;padding-left:15px}.col-sm-3{-webkit-box-flex:0;-webkit-flex:0 0 25%;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-sm-12{-webkit-box-flex:0;-webkit-flex:0 0 100%;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}@media (min-width:992px){.row{margin-right:-15px;margin-left:-15px}.col-lg-6,.col-sm-12,.col-sm-3,.col-xl-5,.col-xs,.col-xs-4,.col-xs-6{padding-right:15px;padding-left:15px}.col-lg-6{-webkit-box-flex:0;-webkit-flex:0 0 50%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}}@media (min-width:1200px){.row{margin-right:-15px;margin-left:-15px}.col-lg-6,.col-sm-12,.col-sm-3,.col-xl-5,.col-xs,.col-xs-4,.col-xs-6{padding-right:15px;padding-left:15px}.col-xl-5{-webkit-box-flex:0;-webkit-flex:0 0 41.666667%;-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}}.content,.content-mini{max-width:100%;overflow-x:visible}.btn{display:inline-block;line-height:1.25;text-align:center;white-space:nowrap;border:1px solid transparent;padding:.5rem 1rem;font-size:1rem}.btn-link{font-weight:400;color:#0275d8;border-radius:0;border-color:transparent}.btn-lg{padding:.75rem 1.5rem;font-size:1.25rem;border-radius:.3rem}.flex-items-xs-middle{-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.flex-items-xs-left{-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.flex-items-xs-right{-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}.text-xs-right{text-align:right!important}.text-xs-center{text-align:center!important}@media (min-width:768px){.flex-items-md-right{-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}.text-md-left{text-align:left!important}}.text-uppercase{text-transform:uppercase!important}.text-white{color:#fff!important}@media (max-width:575px){.hidden-xs-down{display:none!important}}@media (max-width:991px){.hidden-md-down{display:none!important}}@media (min-width:992px){.hidden-lg-up{display:none!important}}body,html{height:100%}body{font-family:"Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;color:#646464;background-color:#0275d8}a{-webkit-text-decoration-skip:objects;color:#00a1f1}.h1,.h4,.h5,h1,h3{margin:0;font-family:"Source Sans Pro","Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:600;line-height:1.2;color:inherit}.h1,.h4,.h5{font-weight:inherit}.h1,h1{font-size:36px}h3{font-size:24px}.h4{font-size:20px}.h5{font-size:16px}.font-w600{font-weight:600!important}.font-w700{font-weight:700!important}p{line-height:1.6}.text-white-op{color:rgba(255,255,255,.85)}.bg-white{background-color:#fff}.btn{font-weight:600;border-radius:2px}.btn-danger{color:#fff;background-color:#f55;border-color:#f22}#page-container,.nav-main-header{width:100%;background-color:#2c343f}.img-responsive{width:100%}@font-face{font-family:FontAwesome;src:url(../../../assets/fonts/fontawesome-webfont.eot?v=4.6.3);src:url(../../../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format('embedded-opentype'),url(../../../assets/fonts/fontawesome-webfont.woff2?v=4.6.3) format('woff2'),url(../../../assets/fonts/fontawesome-webfont.woff?v=4.6.3) format('woff'),url(../../../assets/fonts/fontawesome-webfont.ttf?v=4.6.3) format('truetype'),url(../../../assets/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format('svg');font-weight:400;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-2x{font-size:2em}.pull-right{float:right}.fa-times:before{content:"\f00d"}.fa-navicon:before{content:"\f0c9"}#header-navbar{min-height:60px}#header-navbar:after,#header-navbar:before{content:" ";display:table}.header-navbar-fixed #header-navbar{position:fixed;top:0;right:0;left:0;z-index:1030;min-width:320px;-webkit-backface-visibility:hidden;backface-visibility:hidden;box-shadow:0 2px 5px rgba(0,0,0,.02)}#page-container{margin:0 auto;min-width:320px}.content{margin:0 auto;padding:16px 14px 1px}.content .push,.content p{margin-bottom:16px}.content.content-full{padding-bottom:16px}@media screen and (min-width:768px){.content{margin:0 auto;padding:30px 30px 1px;max-width:100%;overflow-x:visible}.content .push,.content p{margin-bottom:30px}.content.content-full{padding-bottom:30px}}.content-mini{margin:0 auto;padding:13px 14px 1px}.content-mini.content-mini-full{padding-bottom:13px}@media screen and (min-width:768px){.content-mini{margin:0 auto;padding:13px 30px 1px;max-width:100%;overflow-x:visible}.content-mini.content-mini-full{padding-bottom:13px}}.content-boxed{margin:0 auto;width:100%;max-width:1280px}.nav-main-header{position:fixed;top:0;right:0;bottom:0;left:0;margin:0;padding:20px;list-style:none;z-index:1031;opacity:0;overflow-y:auto;-webkit-overflow-scrolling:touch;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-transform:translateX(0) translateY(-100%) translateZ(0);transform:translateX(0) translateY(-100%) translateZ(0)}.nav-main-header>li{margin:0 0 10px}.nav-main-header a{display:block;padding:0 12px;min-height:34px;color:rgba(255,255,255,.5);font-weight:600;line-height:34px}.nav-main-header a.nav-submenu{position:relative;padding-right:32px}.nav-main-header a.nav-submenu:before{position:absolute;right:10px;font-family:FontAwesome;content:"\f107"}.nav-main-header ul{margin:0 0 0 15px;padding:0;list-style:none;display:none}.nav-main-header ul a{min-height:32px;font-weight:400;line-height:32px;font-size:16px}.nav-header .header-content,.nav-header>li>a{line-height:34px}@media screen and (min-width:992px){.nav-main-header{position:static;top:auto;right:auto;bottom:auto;left:auto;padding:0;width:auto;background-color:transparent;z-index:auto;opacity:1;overflow-y:visible;-webkit-overflow-scrolling:auto;-webkit-backface-visibility:visible;backface-visibility:visible;-webkit-transform:translateX(0) translateY(0) translateZ(0);transform:translateX(0) translateY(0) translateZ(0)}.nav-main-header>li{position:relative;margin:0 10px 0 0;float:left}.nav-main-header ul{position:absolute;left:0;margin:0;padding:13px 0;min-width:160px;background-color:#3e4a59}}.nav-header{margin:0;padding:0;list-style:none}.nav-header:after,.nav-header:before{content:" ";display:table}.nav-header>li{margin-right:12px;float:left}.nav-header>li>a{padding:0 12px;display:block;height:34px;font-weight:600}.content-boxed,.div-full{display:flex}.push-5-t{margin-top:5px!important}.push-10-t{margin-top:10px!important}.push-15-t{margin-top:15px!important}.push-30-t{margin-top:30px!important}.push-50-t{margin-top:50px!important}.animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}@-webkit-keyframes bounceInRight{0%,100%,60%,75%,90%{-webkit-transition-timing-function:cubic-bezier(.215,.61,.355,1);transition-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(3000px,0,0);transform:translate3d(3000px,0,0)}60%{opacity:1;-webkit-transform:translate3d(-25px,0,0);transform:translate3d(-25px,0,0)}75%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}90%{-webkit-transform:translate3d(-5px,0,0);transform:translate3d(-5px,0,0)}100%{-webkit-transform:none;transform:none}}@keyframes bounceInRight{0%,100%,60%,75%,90%{-webkit-transition-timing-function:cubic-bezier(.215,.61,.355,1);transition-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(3000px,0,0);transform:translate3d(3000px,0,0)}60%{opacity:1;-webkit-transform:translate3d(-25px,0,0);transform:translate3d(-25px,0,0)}75%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}90%{-webkit-transform:translate3d(-5px,0,0);transform:translate3d(-5px,0,0)}100%{-webkit-transform:none;transform:none}}.bounceInRight{-webkit-animation-name:bounceInRight;animation-name:bounceInRight}#header-navbar{background-color:#2c343f}.nav-main-header ul{min-width:250px;border-radius:5px}main{margin-top:75px}.bg-lineal-gradient-blue{background:linear-gradient(to right bottom,#0570cd 1%,#0275d8 80%,#00a1f1 90%,#00a1f1 30%)}.div-full{height:100vh;z-index:0;max-height:800px;align-items:center}.rw-words{display:inline}.rw-words span{position:absolute;opacity:0;width:100%}.rw-words-1 span{animation:rotateWordsFirst 16s linear infinite 0s}.rw-words span:nth-child(2){animation-delay:4s}.rw-words span:nth-child(3){animation-delay:8s}.rw-words span:nth-child(4){animation-delay:12s}@keyframes rotateWordsFirst{0%{opacity:1;animation-timing-function:ease-in;height:10px}19%,8%{opacity:1;height:60px}25%{opacity:0;height:60px}100%{opacity:0}}.portada .h1{line-height:.9em}#section-2{z-index:2;position:relative}#header-navbar{height:75px}.overflow-hidden{overflow:hidden}@media (max-width:992px){.div-full{min-height:100vh;height:auto}}@media (max-width:768px){.div-full{min-height:80vh}.h1{font-size:30px!important;letter-spacing:-1px;line-height:30px!important}.h4{font-size:20px!important;line-height:18px!important}.portada{margin:150px 30px 50px!important}}@media screen and (max-width:576px){.div-full{min-height:100vh}.h1{font-size:28px!important;letter-spacing:-1px;line-height:24px!important}.h4{font-size:18px!important;line-height:18px!important}.portada{margin:100px 0 50px!important}.rw-words span{left:0}}
    </style>
@stop

@section('contenido')
    <main id="main-container">
        <div class="bg-lineal-gradient-blue div-full">
            <section class="overflow-hidden content-boxed">
                <!-- Section Content -->
                <div class="portada row flex-items-xs-middle content-boxed">
                    <div class="col-lg-6">
                        <div class="text-xs-center text-md-left push">
                            <h1 class="h1 rw-words rw-words-1 typer font-w600 text-white text-uppercase">Laboratorio de
                                <br>
                                <span>diseño interfaces UI/UX </span>
                                <span>Desarrollo aplicaciónes web </span>
                                <span>Pruebas de usabilidad </span>
                                <span>Optimización Web </span>
                                <br>
                                                                                                         centrado en los
                                                                                                         usuarios</h1>
                            <!--<h2 class="h4 text-white-op  push-10-t">Integramos servicios de estratégia, planeación,
                                diseño y desarrollo de aplicaciónes web, mediante una arquitectura escalable y siempre
                                enfocada a mejorar la experiencia de usuario.</h2>-->
                            <p class="h4 text-white-op  push-10-t">Cada cliente para nosotros es único, somos
                                                                   profesionales que trabajan duro para descubrir
                                                                   las necesidades, desafios y oportunidades de nuestros
                                                                   clientes. Desarrollando soluciones
                                                                   web centradas en sus usuarios.</p>
                        
                        </div>
                        <div class="row push-50-t">
                            <div class="col-sm-3 col-xs-4 text-xs-center hidden-xs-down ">
                                <img src="{{url('assets/img/diseño-banner.svg')}}" width="60" class="img-fluid "
                                     alt="diseño de interfaces">
                                <h3 class="h4 text-white-op push-10-t">Diseño Web UI/UX</h3>
                            </div>
                            <div class="col-sm-3 col-xs-4 text-xs-center ">
                                <img src="{{url('assets/img/code.svg')}}" width="60" class="img-fluid " alt="desarrollo de web apps">
                                <h3 class="h4 text-white-op push-10-t">Desarrollo Web y Apps</h3>
                            </div>
                            <div class="col-sm-3 col-xs-4 text-xs-center ">
                                <img src="{{url('assets/img/pruebas-banner.svg')}}" width="60" class="img-fluid "
                                     alt="pruebas de usabilidad web">
                                <h3 class="h4 text-white-op push-10-t">pruebas Usabilidad</h3>
                            </div>
                            <div class="col-sm-3 col-xs-4 text-xs-center ">
                                <img src="{{url('assets/img/performance.svg')}}" width="60" class="img-fluid"
                                     alt="optimizacion web y seo">
                                <h3 class="h4 text-white-op push-10-t">Optimización Web</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 push-30-t ">
                        <img class="img-responsive animated bounceInRight"
                             src="{{ asset('assets/img/usabilidad-web.png') }}"
                             alt="usabilidad con eye tracker en colombia">
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
                    <a class="block block-sombra" href="{{url('diseno-interfaces-web')}}">
                        <div class="bg-image"
                             style="background-image: url({{ asset('assets/img/web-design.png') }});">
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
                                    <h4 class="h5 push-5-t push">
                                        Creamos <b>diseños de interfaces</b> centrados en el usuario, alineados con sus
                                        objetivos y
                                        expectativas de negocio,
                                        diseños inductivos, de <i>fácil navegación</i> y enfocados en el modelo de interacción.
                                    </h4>
                                    <div class="btn btn-primary">Ver más</div>
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl text-xs-center animated fadeInUp">
                    <a class="block block-sombra" href="{{url('desarrollo-aplicaciones-web')}}">
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
                                    <h4 class="h5 push-5-t push">
                                        Desarrollamos <b>aplicaciónes web</b>, aplicaciónes moviles, software empresarial y
                                        APIs. Optimizadas, escalables y únicas para cada uno de
                                        nuestros clientes, centradas en mejorar la experiencia de usuario.
                                    </h4>
                                    <div class="btn btn-primary" >Ver más</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl text-xs-center animated fadeInUp">
                    <a class="block block-sombra" href="{{url('pruebas-usabilidad-interfaces')}}">
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
                                    <h4 class="h5 push-5-t push">
                                        Realizamos <b>pruebas de usabilidad</b> biometricas (eyetracker), mapas de calor,
                                        pruebas de observación, entrevistas con usuarios reales,
                                        promoviendo la <i>usabilidad de las interfaces</i> y prototipos.
                                    </h4>
                                    <div class="btn btn-primary" >Ver más</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl text-xs-center animated fadeInUp">
                    <a class="block block-sombra" href="{{url('optimizacion-web')}}">
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
                                    <h4 class="h5 push-5-t push">
                                        <b>Optimizamos todo tipo de aplicaciónes web</b> y su contenido, mejorando la velocidad
                                        de carga en navegadores, cache, integración de CDNs, optimización para
                                        dispositivos moviles,
                                        service-workers, y SEO.
                                    </h4>
                                    <div class="btn btn-primary" >Ver más</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            
            </div>
            <!--
            <div class="col-sm-12 flex-sm-bottom text-xs-center">
                <a class="text-primary" href="#section-2">
                    <i class="si si-arrow-down fa-4x"></i>
                </a>
            </div>-->
        </div>
        <div id="section-3" class="row flex-items-xs-middle content content-full bg-primary">
            <div class="col-sm-12 text-xs-center">
                <p class="h1 text-uppercase text-white font-w700 push-15-t push">Como trabajamos</p>
            </div>
            <div class="row flex-items-xs-center content-boxed">
                <div class="col-xs-10 row flex-items-xs-center text-xs-center content  animated fadeInUp  block block-rounded block-sombra">
                    <div class="col-lg-3 col-sm-6 push">
                        <img class="img-responsive " src="{{ asset('assets/img/planeacion.svg') }}" alt="planeacion de diseño web">
                        <div class="push-15-t">
                            <h3 class="h3 text-primary">Planeación</h3>
                            <div class="push-10-t">Cada proyecto comienza con una investigación del mercado, la
                                                   identifación de los objetivos y requerimientos, para crear una
                                                   estrategia que haga
                                                   destacar sus ideas y su proyecto.
                            </div>
                        </div>
                    
                    </div>
                    <div class=" col-lg-3 col-sm-6 push">
                        <img class="img-responsive" src="{{ asset('assets/img/diseno.svg') }}" alt="diseño de aplicaciones moviles">
                        <div class="push-15-t">
                            <h3 class="h3 text-primary">Diseño</h3>
                            <div class="push-10-t">Se plasmas las ideas en diseños <u>centrados en los usuarios</u>, diseñando
                                                   las interfaces, mockups y prototipos requeridos, evaluandolos con los
                                                   usuarios finales para su mejoramiento.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 push">
                        <img class="img-responsive" src="{{ asset('assets/img/desarrollo.svg') }}" alt="desarrollo de aplicaciones web">
                        <div class="push-15-t">
                            <h3 class="h3 text-primary">Desarrollo</h3>
                            <div class="push-10-t">Se desarrollan los diseños creados, evaluados y aprobados por
                                                   nuestros clientes, incluyendo las funcionalidades, y finalizando con
                                                   la
                                                   liberación del proyecto o entrega del código documentado.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 push">
                        <img class="img-responsive" src="{{ asset('assets/img/pruebas.svg') }}" alt="pruebas de usabilidad en interfaces">
                        <div class="push-15-t">
                            <h3 class="h3 text-primary">Testeo</h3>
                            <div class="push-10-t">Durante todo el proyecto se realizan las pruebas pertinentes en cada
                                                   una de las etapas, al finalizar se entrega a nuestros clientes un
                                                   producto
                                                   funcional, optimizado y de calidad.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
        </div>
        <div id="section-5" class="row flex-items-xs-middle content content-full bg-primary-darker">
            <div class="col-sm-12 text-xs-center">
                <p class="h1 text-uppercase text-white font-w700 push-30-t push text-uppercase">Algunos de nuestros
                                                                                                trabajos</p>
            </div>
            <div class="row flex-items-xs-center content-boxed">
                <div class="col-md-6 col-lg push-30-t">
                    <div class="img-container block block-rounded block-sombra  fx-opt-zoom-out">
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
                                             alt="creacion de sitios web en magento">
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
                <div class="col-md-6 col-lg push-30-t">
                    <div class="img-container  block block-rounded block-sombra fx-opt-zoom-out">
                        <img class="img-responsive" src="{{ url('assets/img/testabolic.png') }}"
                             alt="optimizacion de paginas web">
                        <div class="img-options ">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Optimizacion web</h3>
                                <h4 class="h4 font-w400 text-white-op push-15">mejora de velocidad de la página,
                                    <br>optimizacion SEO, implementacion <br> de cache y CDN.
                                </h4>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/laravel.svg')}}" height="50"
                                             alt="creacion de sitios web con laravel">
                                        <p class="text-white">Laravel</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/js.svg')}}" height="50"
                                             alt="creacion de sitios web con nodejs">
                                        <p class="text-white">Node js</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <img src="{{url('assets/img/bootstrap.svg')}}" height="50"
                                             alt="creacion de sitios web con bootstrap">
                                        <p class="text-white">Bootstrap</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg push-30-t">
                    <div class="img-container block block-rounded block-sombra fx-opt-zoom-out">
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
                                             alt="creacion de sitios web en laravel">
                                        <p class="text-white">Laravel</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <img src="{{url('assets/img/js.svg')}}" height="50"
                                             alt="creacion de sitios web en nodejs">
                                        <p class="text-white">Node js</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <img src="{{url('assets/img/bootstrap.svg')}}" height="50"
                                             alt="creacion de sitios web en bootstrap">
                                        <p class="text-white">Bootstrap</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <img src="{{url('assets/img/mysql.svg')}}" height="50"
                                             alt="creacion de sitios web mysql">
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
    @include('app.formulario')
@stop
