@extends('template.master')

@section('meta')

@stop

@section('styles')
    <style>@charset 'UTF-8';footer,header,main,section{display:block}#main-container,#page-footer{overflow-x:hidden}.btn,img{vertical-align:middle}#header-navbar:after,.nav-header:after{clear:both}@-ms-viewport{width:device-width}@font-face{font-family:FontAwesome;src:url(../../../assets/fonts/fontawesome-webfont.eot?v=4.6.3);src:url(../../../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format('embedded-opentype'),url(../../../assets/fonts/fontawesome-webfont.woff2?v=4.6.3) format('woff2'),url(../../../assets/fonts/fontawesome-webfont.woff?v=4.6.3) format('woff'),url(../../../assets/fonts/fontawesome-webfont.ttf?v=4.6.3) format('truetype'),url(../../../assets/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format('svg');font-weight:400;font-style:normal}@-ms-viewport{width:device-width}.bg-primary-darker{background-color:#2c343f}.btn-link,a{text-decoration:none;background-color:transparent}@font-face{font-family:FontAwesome;src:url(../../../assets/fonts/fontawesome-webfont.eot?v=4.6.3);src:url(../../../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format('embedded-opentype'),url(../../../assets/fonts/fontawesome-webfont.woff2?v=4.6.3) format('woff2'),url(../../../assets/fonts/fontawesome-webfont.woff?v=4.6.3) format('woff'),url(../../../assets/fonts/fontawesome-webfont.ttf?v=4.6.3) format('truetype'),url(../../../assets/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format('svg');font-weight:400;font-style:normal}footer{z-index:3;position:relative}.padding-20{padding:20px!important}html{font-family:sans-serif;line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}img{border-style:none}button{font:inherit;margin:0;overflow:visible;text-transform:none}button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}::-webkit-input-placeholder{color:inherit;opacity:.54}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}html{-webkit-box-sizing:border-box;box-sizing:border-box;font-size:16px;-ms-overflow-style:scrollbar}*,::after,::before{-webkit-box-sizing:inherit;box-sizing:inherit}@-ms-viewport{width:device-width}body{margin:0;line-height:1.5}h1,h2,h3{margin-top:0;margin-bottom:.5rem}p,ul{margin-top:0;margin-bottom:1rem}a,button{-ms-touch-action:manipulation;touch-action:manipulation}button{line-height:inherit}.row{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col-lg-6,.col-lg-8,.col-md-8,.col-sm-10,.col-sm-3,.col-xl-5,.col-xs,.col-xs-6{position:relative;min-height:1px;width:100%;padding-right:15px;padding-left:15px}.col-xs{-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-xs-6{-webkit-box-flex:0;-webkit-flex:0 0 50%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}@media (min-width:576px){.row{margin-right:-15px;margin-left:-15px}.col-lg-6,.col-lg-8,.col-md-8,.col-sm-10,.col-sm-3,.col-xl-5,.col-xs,.col-xs-6{padding-right:15px;padding-left:15px}.col-sm-3{-webkit-box-flex:0;-webkit-flex:0 0 25%;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-sm-10{-webkit-box-flex:0;-webkit-flex:0 0 83.333333%;-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}}@media (min-width:768px){.row{margin-right:-15px;margin-left:-15px}.col-lg-6,.col-lg-8,.col-md-8,.col-sm-10,.col-sm-3,.col-xl-5,.col-xs,.col-xs-6{padding-right:15px;padding-left:15px}.col-md-8{-webkit-box-flex:0;-webkit-flex:0 0 66.666667%;-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}}@media (min-width:992px){.row{margin-right:-15px;margin-left:-15px}.col-lg-6,.col-lg-8,.col-md-8,.col-sm-10,.col-sm-3,.col-xl-5,.col-xs,.col-xs-6{padding-right:15px;padding-left:15px}.col-lg-6{-webkit-box-flex:0;-webkit-flex:0 0 50%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-lg-8{-webkit-box-flex:0;-webkit-flex:0 0 66.666667%;-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}}@media (min-width:1200px){.row{margin-right:-15px;margin-left:-15px}.col-lg-6,.col-lg-8,.col-md-8,.col-sm-10,.col-sm-3,.col-xl-5,.col-xs,.col-xs-6{padding-right:15px;padding-left:15px}.col-xl-5{-webkit-box-flex:0;-webkit-flex:0 0 41.666667%;-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}}.btn{display:inline-block;line-height:1.25;text-align:center;white-space:nowrap;border:1px solid transparent;padding:.5rem 1rem;font-size:1rem}.btn-link{font-weight:400;color:#0275d8;border-radius:0;border-color:transparent}.btn-lg{padding:.75rem 1.5rem;font-size:1.25rem;border-radius:.3rem}.bg-primary{background-color:#0275d8!important}.flex-items-xs-middle{-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.flex-items-xs-left{-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.flex-items-xs-center{-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}.flex-items-xs-right{-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}@media (min-width:768px){.flex-items-md-right{-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}}.text-xs-right{text-align:right!important}.text-xs-center{text-align:center!important}.text-capitalize{text-transform:capitalize!important}.text-white{color:#fff!important}@media (max-width:991px){.hidden-md-down{display:none!important}}@media (min-width:992px){.hidden-lg-up{display:none!important}}body,html{height:100%}body{font-family:"Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;color:#646464;background-color:#0275d8}a{-webkit-text-decoration-skip:objects;color:#00a1f1}.h4,h1,h2,h3{margin:0;font-family:"Source Sans Pro","Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:600;line-height:1.2;color:inherit}h1{font-size:36px}h2{font-size:30px}h3{font-size:24px}.h4{font-weight:inherit;font-size:20px}.font-w600{font-weight:600!important}p{line-height:1.6}.btn{font-weight:600;border-radius:2px}.btn.btn-minw{min-width:110px}.btn-primary{color:#fff;background-color:#1b8bf9;border-color:#0671db}.btn-danger{color:#fff;background-color:#f55;border-color:#f22}.img-responsive{width:100%}@font-face{font-family:FontAwesome;src:url(../../../assets/fonts/fontawesome-webfont.eot?v=4.6.3);src:url(../../../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format('embedded-opentype'),url(../../../assets/fonts/fontawesome-webfont.woff2?v=4.6.3) format('woff2'),url(../../../assets/fonts/fontawesome-webfont.woff?v=4.6.3) format('woff'),url(../../../assets/fonts/fontawesome-webfont.ttf?v=4.6.3) format('truetype'),url(../../../assets/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format('svg');font-weight:400;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.nav-header .header-content,.nav-header>li>a{line-height:34px}.fa-2x{font-size:2em}.pull-right{float:right}.fa-times:before{content:"\f00d"}.fa-navicon:before{content:"\f0c9"}#header-navbar{min-height:60px}#header-navbar:after,#header-navbar:before{content:" ";display:table}.header-navbar-fixed #header-navbar{position:fixed;top:0;right:0;left:0;z-index:1030;min-width:320px;-webkit-backface-visibility:hidden;backface-visibility:hidden;box-shadow:0 2px 5px rgba(0,0,0,.02)}.header-navbar-fixed #main-container{padding-top:60px}#page-container{margin:0 auto;width:100%;min-width:320px;background-color:#2c343f}#main-container{background-color:#0275d8}.content-mini{margin:0 auto;padding:13px 14px 1px;max-width:100%;overflow-x:visible}.content-mini.content-mini-full{padding-bottom:13px}@media screen and (min-width:768px){.content-mini{margin:0 auto;padding:13px 30px 1px;max-width:100%;overflow-x:visible}.content-mini.content-mini-full{padding-bottom:13px}}.content-boxed{margin:0 auto;width:100%;max-width:1280px}.block{margin-bottom:30px;background-color:#fff;box-shadow:0 2px rgba(0,0,0,.01)}.block-content{margin:0 auto;padding:20px 20px 1px;max-width:100%;overflow-x:visible}.block-content .push{margin-bottom:20px}.block-content.block-content-full{padding-bottom:20px}.block.block-rounded{border-radius:4px}.block.block-rounded>.block-content:first-child{border-top-right-radius:3px;border-top-left-radius:3px}.block.block-rounded>.block-content:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.nav-main-header{position:fixed;top:0;right:0;bottom:0;left:0;margin:0;padding:20px;width:100%;list-style:none;background-color:#2c343f;z-index:1031;opacity:0;overflow-y:auto;-webkit-overflow-scrolling:touch;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-transform:translateX(0) translateY(-100%) translateZ(0);transform:translateX(0) translateY(-100%) translateZ(0)}.nav-main-header>li{margin:0 0 10px}.nav-main-header a{display:block;padding:0 12px;min-height:34px;color:rgba(255,255,255,.5);font-weight:600;line-height:34px}@media screen and (min-width:992px){.nav-main-header{position:static;top:auto;right:auto;bottom:auto;left:auto;padding:0;width:auto;background-color:transparent;z-index:auto;opacity:1;overflow-y:visible;-webkit-overflow-scrolling:auto;-webkit-backface-visibility:visible;backface-visibility:visible;-webkit-transform:translateX(0) translateY(0) translateZ(0);transform:translateX(0) translateY(0) translateZ(0)}.nav-main-header>li{position:relative;margin:0 10px 0 0;float:left}}.nav-header{margin:0;padding:0;list-style:none}.nav-header:after,.nav-header:before{content:" ";display:table}.nav-header>li{margin-right:12px;float:left}.nav-header>li>a{padding:0 12px;display:block;height:34px;font-weight:600}.push-5-t{margin-top:5px!important}.push-30-t{margin-top:30px!important}.push-50{margin-bottom:50px!important}.push-100{margin-bottom:100px!important}.push-100-t{margin-top:100px!important}.animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}@-webkit-keyframes bounceInRight{0%,100%,60%,75%,90%{-webkit-transition-timing-function:cubic-bezier(.215,.61,.355,1);transition-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(3000px,0,0);transform:translate3d(3000px,0,0)}60%{opacity:1;-webkit-transform:translate3d(-25px,0,0);transform:translate3d(-25px,0,0)}75%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}90%{-webkit-transform:translate3d(-5px,0,0);transform:translate3d(-5px,0,0)}100%{-webkit-transform:none;transform:none}}@keyframes bounceInRight{0%,100%,60%,75%,90%{-webkit-transition-timing-function:cubic-bezier(.215,.61,.355,1);transition-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(3000px,0,0);transform:translate3d(3000px,0,0)}60%{opacity:1;-webkit-transform:translate3d(-25px,0,0);transform:translate3d(-25px,0,0)}75%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}90%{-webkit-transform:translate3d(-5px,0,0);transform:translate3d(-5px,0,0)}100%{-webkit-transform:none;transform:none}}.bounceInRight{-webkit-animation-name:bounceInRight;animation-name:bounceInRight}#header-navbar{background-color:#2c343f;height:75px}main{margin-top:75px}.content-boxed{display:flex}.block-sombra{box-shadow:0 2px 29px rgba(0,0,0,.25)}.overflow-hidden{overflow:hidden}@media (max-width:768px){.h4{font-size:20px!important;line-height:18px!important}}@media screen and (max-width:576px){.h4{font-size:18px!important;line-height:18px!important}}</style>
    @stop

@section('contenido')
    <main id="main-container" class="bg-primary">
        <div class="">
            <section class="overflow-hidden content-boxed">
                <!-- Section Content -->
                <div class="row flex-items-xs-middle flex-items-xs-center content-boxed ">
                    <div class="col-lg-8 col-sm-10 text-white text-xs-center push-100-t">
                        <h1 class="text-capitalize">¡Hola {!! $nombre or 'amigo' !!}!</h1>
                        <h2 class="push">Gracias por contactar con nosotros</h2>
                        <p class="h4">En breve uno de nuestros especialistas de productos se comunicará con usted</p>
                        <img class="img-responsive animated bounceInRight push-50 push-30-t"
                             src="{{ asset('assets/img/congrats.svg') }}"
                             alt="ziuxlab desarrollo web con usabilidad" height="300">
                    </div>
                </div>
                
                
                <!-- END Section Content -->
            </section>
           
        </div>
        <div class=" ">
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
