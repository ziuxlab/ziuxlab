@extends('template.master')

@section('meta')

@stop

@section('styles')
    <style>@charset 'UTF-8';
        .btn, img {
            vertical-align: middle
        }
        
        .btn-link, a {
            background-color: transparent;
            text-decoration: none
        }
        
        #header-navbar:after, .nav-header:after {
            clear: both
        }
        
        @-ms-viewport {
            width: device-width
        }
        
        @font-face {
            font-family: FontAwesome;
            src: url(../../assets/fonts/fontawesome-webfont.eot?v=4.6.3);
            src: url(../../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format('embedded-opentype'), url(../../assets/fonts/fontawesome-webfont.woff2?v=4.6.3) format('woff2'), url(../../assets/fonts/fontawesome-webfont.woff?v=4.6.3) format('woff'), url(../../assets/fonts/fontawesome-webfont.ttf?v=4.6.3) format('truetype'), url(../../assets/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format('svg');
            font-weight: 400;
            font-style: normal
        }
        
        @-ms-viewport {
            width: device-width
        }
        
        @font-face {
            font-family: FontAwesome;
            src: url(../../assets/fonts/fontawesome-webfont.eot?v=4.6.3);
            src: url(../../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format('embedded-opentype'), url(../../assets/fonts/fontawesome-webfont.woff2?v=4.6.3) format('woff2'), url(../../assets/fonts/fontawesome-webfont.woff?v=4.6.3) format('woff'), url(../../assets/fonts/fontawesome-webfont.ttf?v=4.6.3) format('truetype'), url(../../assets/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format('svg');
            font-weight: 400;
            font-style: normal
        }
        
        html {
            font-family: sans-serif;
            line-height: 1.15;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }
        
        header, main, section {
            display: block
        }
        
        img {
            border-style: none
        }
        
        button, input {
            font: inherit;
            margin: 0;
            overflow: visible
        }
        
        button {
            text-transform: none
        }
        
        button, html [type=button] {
            -webkit-appearance: button
        }
        
        [type=button]::-moz-focus-inner, button::-moz-focus-inner {
            border-style: none;
            padding: 0
        }
        
        [type=button]:-moz-focusring, button:-moz-focusring {
            outline: ButtonText dotted 1px
        }
        
        ::-webkit-input-placeholder {
            color: inherit;
            opacity: .54
        }
        
        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }
        
        html {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-size: 16px;
            -ms-overflow-style: scrollbar
        }
        
        *, ::after, ::before {
            -webkit-box-sizing: inherit;
            box-sizing: inherit
        }
        
        @-ms-viewport {
            width: device-width
        }
        
        body {
            margin: 0;
            line-height: 1.5
        }
        
        h1, h2, h3 {
            margin-top: 0;
            margin-bottom: .5rem
        }
        
        p, ul {
            margin-top: 0;
            margin-bottom: 1rem
        }
        
        ul ul {
            margin-bottom: 0
        }
        
        a, button, input {
            -ms-touch-action: manipulation;
            touch-action: manipulation
        }
        
        button, input {
            line-height: inherit
        }
        
        .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }
        
        .col-sm-10, .col-sm-3, .col-sm-6, .col-xl-4, .col-xs, .col-xs-6 {
            position: relative;
            min-height: 1px;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px
        }
        
        @media (min-width: 768px) {
            .row {
                margin-right: -15px;
                margin-left: -15px
            }
            
            .col-sm-10, .col-sm-3, .col-sm-6, .col-xl-4, .col-xs, .col-xs-6 {
                padding-right: 15px;
                padding-left: 15px
            }
        }
        
        @media (min-width: 992px) {
            .row {
                margin-right: -15px;
                margin-left: -15px
            }
            
            .col-sm-10, .col-sm-3, .col-sm-6, .col-xl-4, .col-xs, .col-xs-6 {
                padding-right: 15px;
                padding-left: 15px
            }
        }
        
        .col-xs {
            -webkit-flex-basis: 0;
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }
        
        .col-xs-6 {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 50%;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }
        
        @media (min-width: 576px) {
            .row {
                margin-right: -15px;
                margin-left: -15px
            }
            
            .col-sm-10, .col-sm-3, .col-sm-6, .col-xl-4, .col-xs, .col-xs-6 {
                padding-right: 15px;
                padding-left: 15px
            }
            
            .col-sm-3 {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 25%;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }
            
            .col-sm-6 {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 50%;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }
            
            .col-sm-10 {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 83.333333%;
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }
        }
        
        @media (min-width: 1200px) {
            .row {
                margin-right: -15px;
                margin-left: -15px
            }
            
            .col-sm-10, .col-sm-3, .col-sm-6, .col-xl-4, .col-xs, .col-xs-6 {
                padding-right: 15px;
                padding-left: 15px
            }
            
            .col-xl-4 {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 33.333333%;
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }
        }
        
        .btn {
            display: inline-block;
            line-height: 1.25;
            text-align: center;
            white-space: nowrap;
            border: 1px solid transparent;
            padding: .5rem 1rem;
            font-size: 1rem
        }
        
        .btn-link {
            font-weight: 400;
            color: #0275d8;
            border-radius: 0;
            border-color: transparent
        }
        
        .btn-lg {
            padding: .75rem 1.5rem;
            font-size: 1.25rem;
            border-radius: .3rem
        }
        
        .bg-primary {
            background-color: #0275d8 !important
        }
        
        .flex-items-xs-middle {
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }
        
        .flex-items-xs-center {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }
        
        .flex-items-xs-right {
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end
        }
        
        .text-xs-right {
            text-align: right !important
        }
        
        .text-xs-center {
            text-align: center !important
        }
        
        .text-capitalize {
            text-transform: capitalize !important
        }
        
        .text-white {
            color: #fff !important
        }
        
        @media (max-width: 991px) {
            .hidden-md-down {
                display: none !important
            }
        }
        
        @media (min-width: 992px) {
            .hidden-lg-up {
                display: none !important
            }
        }
        
        body, html {
            height: 100%
        }
        
        body {
            font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #646464;
            background-color: #0275d8
        }
        
        a {
            -webkit-text-decoration-skip: objects;
            color: #00a1f1
        }
        
        .h2, .h5, .h6, h1, h2, h3 {
            margin: 0;
            font-family: "Source Sans Pro", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 600;
            line-height: 1.2;
            color: inherit
        }
        
        .h2, .h5, .h6 {
            font-weight: inherit
        }
        
        h1 {
            font-size: 36px
        }
        
        .h2, h2 {
            font-size: 30px
        }
        
        h3 {
            font-size: 24px
        }
        
        .h5 {
            font-size: 16px
        }
        
        .h6 {
            font-size: 14px
        }
        
        .font-w400 {
            font-weight: 400 !important
        }
        
        .font-w600 {
            font-weight: 600 !important
        }
        
        p {
            line-height: 1.6
        }
        
        .bg-white {
            background-color: #fff
        }
        
        .btn {
            font-weight: 600;
            border-radius: 2px
        }
        
        .btn-danger {
            color: #fff;
            background-color: #f55;
            border-color: #f22
        }
        
        @font-face {
            font-family: FontAwesome;
            src: url(../../assets/fonts/fontawesome-webfont.eot?v=4.6.3);
            src: url(../../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format('embedded-opentype'), url(../../assets/fonts/fontawesome-webfont.woff2?v=4.6.3) format('woff2'), url(../../assets/fonts/fontawesome-webfont.woff?v=4.6.3) format('woff'), url(../../assets/fonts/fontawesome-webfont.ttf?v=4.6.3) format('truetype'), url(../../assets/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format('svg');
            font-weight: 400;
            font-style: normal
        }
        
        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }
        
        .fa-2x {
            font-size: 2em
        }
        
        .pull-right {
            float: right
        }
        
        .fa-times:before {
            content: "\f00d"
        }
        
        .fa-navicon:before {
            content: "\f0c9"
        }
        
        #header-navbar {
            min-height: 60px
        }
        
        #header-navbar:after, #header-navbar:before {
            content: " ";
            display: table
        }
        
        .header-navbar-fixed #header-navbar {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
            min-width: 320px;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .02)
        }
        
        #page-container {
            margin: 0 auto;
            width: 100%;
            min-width: 320px;
            background-color: #2c343f
        }
        
        #main-container {
            overflow-x: hidden;
            background-color: #0275d8
        }
        
        .content, .content-mini {
            max-width: 100%;
            overflow-x: visible
        }
        
        .content {
            margin: 0 auto;
            padding: 16px 14px 1px
        }
        
        .content .push, .content p {
            margin-bottom: 16px
        }
        
        .content.content-full {
            padding-bottom: 16px
        }
        
        @media screen and (min-width: 768px) {
            .content {
                margin: 0 auto;
                padding: 30px 30px 1px;
                max-width: 100%;
                overflow-x: visible
            }
            
            .content .push, .content p {
                margin-bottom: 30px
            }
            
            .content.content-full {
                padding-bottom: 30px
            }
        }
        
        .content-mini {
            margin: 0 auto;
            padding: 13px 14px 1px
        }
        
        .content-mini.content-mini-full {
            padding-bottom: 13px
        }
        
        @media screen and (min-width: 768px) {
            .content-mini {
                margin: 0 auto;
                padding: 13px 30px 1px;
                max-width: 100%;
                overflow-x: visible
            }
            
            .content-mini.content-mini-full {
                padding-bottom: 13px
            }
        }
        
        .content-boxed {
            margin: 0 auto;
            width: 100%;
            max-width: 1280px
        }
        
        .nav-main-header {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: 0;
            padding: 20px;
            width: 100%;
            list-style: none;
            background-color: #2c343f;
            z-index: 1031;
            opacity: 0;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: translateX(0) translateY(-100%) translateZ(0);
            transform: translateX(0) translateY(-100%) translateZ(0)
        }
        
        .nav-main-header > li {
            margin: 0 0 10px
        }
        
        .nav-main-header a {
            display: block;
            padding: 0 12px;
            min-height: 34px;
            color: rgba(255, 255, 255, .5);
            font-weight: 600;
            line-height: 34px
        }
        
        .nav-main-header a.nav-submenu {
            position: relative;
            padding-right: 32px
        }
        
        .nav-main-header a.nav-submenu:before {
            position: absolute;
            right: 10px;
            font-family: FontAwesome;
            content: "\f107"
        }
        
        .nav-main-header ul {
            margin: 0 0 0 15px;
            padding: 0;
            list-style: none;
            display: none
        }
        
        .nav-main-header ul a {
            min-height: 32px;
            font-weight: 400;
            line-height: 32px;
            font-size: 16px
        }
        
        .nav-header .header-content, .nav-header > li > a {
            line-height: 34px
        }
        
        @media screen and (min-width: 992px) {
            .nav-main-header {
                position: static;
                top: auto;
                right: auto;
                bottom: auto;
                left: auto;
                padding: 0;
                width: auto;
                background-color: transparent;
                z-index: auto;
                opacity: 1;
                overflow-y: visible;
                -webkit-overflow-scrolling: auto;
                -webkit-backface-visibility: visible;
                backface-visibility: visible;
                -webkit-transform: translateX(0) translateY(0) translateZ(0);
                transform: translateX(0) translateY(0) translateZ(0)
            }
            
            .nav-main-header > li {
                position: relative;
                margin: 0 10px 0 0;
                float: left
            }
            
            .nav-main-header ul {
                position: absolute;
                left: 0;
                margin: 0;
                padding: 13px 0;
                min-width: 160px;
                background-color: #3f4752
            }
        }
        
        .nav-header {
            margin: 0;
            padding: 0;
            list-style: none
        }
        
        .nav-header:after, .nav-header:before {
            content: " ";
            display: table
        }
        
        .nav-header > li {
            margin-right: 12px;
            float: left
        }
        
        .nav-header > li > a {
            padding: 0 12px;
            display: block;
            height: 34px;
            font-weight: 600
        }
        
        .push-5-t {
            margin-top: 5px !important
        }
        
        .push-20-t {
            margin-top: 20px !important
        }
        
        .push-30-t {
            margin-top: 30px !important
        }
        
        .push-50 {
            margin-bottom: 50px !important
        }
        
        .push-50-t {
            margin-top: 50px !important
        }
        
        .remove-padding {
            padding: 0 !important
        }
        
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }
        
        @-webkit-keyframes bounceInRight {
            0%, 100%, 60%, 75%, 90% {
                -webkit-transition-timing-function: cubic-bezier(.215, .61, .355, 1);
                transition-timing-function: cubic-bezier(.215, .61, .355, 1)
            }
            0% {
                opacity: 0;
                -webkit-transform: translate3d(3000px, 0, 0);
                transform: translate3d(3000px, 0, 0)
            }
            60% {
                opacity: 1;
                -webkit-transform: translate3d(-25px, 0, 0);
                transform: translate3d(-25px, 0, 0)
            }
            75% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0)
            }
            90% {
                -webkit-transform: translate3d(-5px, 0, 0);
                transform: translate3d(-5px, 0, 0)
            }
            100% {
                -webkit-transform: none;
                transform: none
            }
        }
        
        @keyframes bounceInRight {
            0%, 100%, 60%, 75%, 90% {
                -webkit-transition-timing-function: cubic-bezier(.215, .61, .355, 1);
                transition-timing-function: cubic-bezier(.215, .61, .355, 1)
            }
            0% {
                opacity: 0;
                -webkit-transform: translate3d(3000px, 0, 0);
                transform: translate3d(3000px, 0, 0)
            }
            60% {
                opacity: 1;
                -webkit-transform: translate3d(-25px, 0, 0);
                transform: translate3d(-25px, 0, 0)
            }
            75% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0)
            }
            90% {
                -webkit-transform: translate3d(-5px, 0, 0);
                transform: translate3d(-5px, 0, 0)
            }
            100% {
                -webkit-transform: none;
                transform: none
            }
        }
        
        .bounceInRight {
            -webkit-animation-name: bounceInRight;
            animation-name: bounceInRight
        }
        
        #header-navbar {
            background-color: #2c343f;
            height: 75px
        }
        
        .nav-main-header ul {
            min-width: 270px;
            border-radius: 5px
        }
        
        .header-navbar-fixed #main-container {
            padding-top: 0
        }
        
        main {
            margin-top: 75px
        }
        
        .img-r-50 {
            right: -50%
        }
        
        .content-boxed {
            display: flex
        }
        
        .font-s16 {
            font-size: 16px !important
        }
        
        .overflow-hidden {
            overflow: hidden
        }
        
        @media (max-width: 768px) {
            .h2 {
                font-size: 24px !important;
                letter-spacing: -1px;
                line-height: 24px !important
            }
            
            .font-s16 {
                font-size: 12px !important
            }
        }
        
        @media screen and (max-width: 576px) {
            .h2 {
                font-size: 24px !important;
                letter-spacing: -1px;
                line-height: 24px !important
            }
            
            .font-s16 {
                font-size: 12px !important
            }
        }</style>
    <link rel="stylesheet" type="text/css"  href="{{ url('assets/css/ux.css') }}">
@stop

@section('contenido')
    <main id="main-container" class="bg-primary">
        <div class="push-50-t">
            <section class="overflow-hidden content-boxed">
                <!-- Section Content -->
                <div class="row flex-items-xs-middle flex-items-xs-center content-boxed ">
                    <div class=" col-sm-10 text-white text-xs-center push-50 ">
                        <h1 class="text-capitalize">Pruebas de usabilidad en interfaces</h1>
                        <h2 class="push">Realizamos pruebas heuristicas, conceptuales y biometricas a todo tipo de
                                         interfaces para promover la usabilidad</h2>
                        <img class="animated bounceInRight  push-20-t"
                             src="{{ asset('assets/img/pruebas-banner.svg') }}" height="100"
                             alt="ziuxlab desarrollo web con usabilidad">
                    
                    </div>
                </div>
                <!-- END Section Content -->
            </section>
        </div>
        <div class=" " style="background-color: #4293EC">
            <section class="content-boxed">
                <div class="row  flex-items-xs-middle  flex-items-xs-center ">
                    <div class="col-sm-6 remove-margin bg-white push-10-t font-s16 content content-full content-narrow  ">
                        <div class="content-mini">
                            <h3 class="h2 text-xs-center push">¿Por qué hacemos las pruebas de usabilidad?</h3>
                            <p>Las pruebas de usabilidad (o pruebas de usuario) implica la observación y el análisis de
                               sus clientes típicos usan e interactúan con los puntos de contacto digitales, incluyendo
                               sitios web, teléfonos inteligentes, tabletas y aplicaciones,
                                además de que usuarios puedan entender y navegar de forma fácil y sencilla en su sitio web.
                            <p>
                                Las pruebas de usabilidad proporciona:
                            </P>
                            <ul>
                                <li>Opciones y recomendaciones sólidas, detalladas y priorizadas.</li>
                                <li>Un plan de acción para la implementación de cambios en torno a sus necesidades
                                    específicas.
                                </li>
                                <li>visualización en directo de las pruebas de usuario que unifica los equipos
                                    internos.
                                </li>
                                <li>Videos de las sesiones de prueba de usuario para que pueda ver como los usuarios interactuan con su interfaz.
                                </li>
                            
                            </ul>
                        </div>
                    
                    </div>
                    <div class="col-sm-6 remove-padding bg-image"
                         style="background-image: url('{{url('assets/img/question.png')}}'); height: 100%">
                    </div>
                </div>
            </section>
        </div>
        <div class="bg-radial-gradient-blue ">
            <section class="content-boxed">
                <div class="row flex-items-xs-middle  flex-items-xs-center">
                    <div class="col-sm-6  remove-padding">
                        <div class="content content-full content-narrow">
                            <img class="img-responsive animated rotateInUpLeft" src="{{url('assets/img/hate-you.png')}}"
                                 alt="que consiste la usabilidad">
                        </div>
                    </div>
                    <div class="col-sm-6 bg-white push-10-t bg-white font-s16 content content-full content-narrow  ">
                        <div class="content-mini animated bounceIn">
                            <h3 class="h2 text-xs-center push">¿En qué consiste pruebas de usabilidad?</h3>
                            <p>A través de un cierre, enfoque de colaboración que va a aprender mucho de nuestra
                               experiencia en todo el proceso de pruebas de usabilidad:
                            </p>
                            <ul>
                                <li>Trabajamos estrechamente con usted para definir con precisión los objetivos de la
                                    investigación, los escenarios y que vamos a reclutar para el test de usuarios.
                                </li>
                                <li>Llevamos a cabo una inmersión profunda en su análisis para identificar lo que están
                                    haciendo los usuarios en sus plataformas digitales (la investigación será entonces
                                    identificar qué ).
                                </li>
                                <li>A continuación, trabajamos con los reclutadores especializados a los participantes
                                    de origen típicos de su público objetivo, no importa cuán oscuro es su mercado
                                    objetivo.
                                </li>
                                <li>Facilitamos sesiones de prueba de uno a uno por el usuario en el que controla los
                                    usuarios interactúan con sus productos digitales, mientras que nuestros moderadores
                                    expertos provocan respuestas enfocadas e imparciales .
                                </li>
                                <li>Revisamos todos los resultados, discutir todos los temas de intercambio de ideas y
                                    las mejores soluciones posibles con usted.
                                </li>
                                <li>Entregamos los resultados y recomendaciones en el formato que funciona mejor para
                                    usted - recomendación impulsada informe, presentación y / o taller.
                                </li>
                            
                            </ul>
                        </div>
                    
                    </div>
                </div>
            </section>
        </div>
        <div id="section-3" class="row flex-items-xs-middle content content-full bg-primary">
            <div class="col-sm-12 text-xs-center"><p class="h1 text-uppercase text-white font-w700 push-15-t push">
                    Pruebas de Usabilidad UX</p>
            </div>
            <div class="row  content-boxed">
                <div class="col-sm-6  animated fadeInUp">
                    <div class="block block-rounded" style="height: 95%">
                        <div class="border-top-radius bg-image"
                             style="background-image: url({{ asset('assets/img/eye-tracking.jpg') }});">
                            <div class="border-top-radius bg-black-op">
                                <div class="block-content  block-content-full text-xs-center">
                                    <h2 class="h3 font-w600 text-uppercase text-white push-50-t push-50">Pruebas de usabilidad
                                        <br> con eye tracker
                                        </h2>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-narrow block-content-full">
                                    <p class="font-s16 push-10-t">
                                        <b>En la prueba de usabilidad con Eye traker</b> realizamos un seguimiento de los ojos durante la prueba, este genera valiosos datos adicionales.
                                         Mientras que el participante en la prueba está trabajando en una tarea, por ejemplo, pedir un producto, nuestro equipo biométrico 	capta la mirada del usuario. De esta manera recogemos las declaraciones de los usuarios y los datos de la mirada objetiva.
                                    </p>
                                    <p class="font-s16">Tanto los resultados cuantitativos y cualitativos son analizados.
                                        El análisis gráfico de los patrones de la mirada (por ejemplo Heatmaps o trayectorias de exploración) visualiza cómo los participantes perciben su producto. Dichos resultados son entregados en un informe con recomendaciones, además de videos donde se puede observar el proceso de los usuarios.
                                    </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6  animated fadeInUp">
                    <div class="block block-rounded" style="height: 95%">
                        <div class="border-top-radius bg-image"
                             style="background-image: url({{ asset('assets/img/pruebas-usabilidad.jpg') }});">
                            <div class="border-top-radius bg-black-op">
                                <div class="block-content  block-content-full text-xs-center">
                                    <h2 class="h3 font-w600 text-uppercase text-white push-50-t push-50">Observacion
                                        <br> de Campo
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-narrow block-content-full">
                            <p class="font-s16 push-10-t">
                                <b>En la observación de campo</b> realizamos un seguimiento de la interacción de los usuarios con 	su sitio web a través de grabación de videos.
                            </p>
                            <p class="font-s16">Mientras los usuarios interactúan con su 	proyecto, un analista experto se encarga de tomar todas aquellas anotaciones relevantes 	que pueden influir en la correcta interacción, además de las opiniones de los usuarios. 	Dichas 	observaciones son entregadas en un informe con las respectivas recomendaciones.   </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6  animated fadeInUp">
                    <div class="block block-rounded" style="height: 95%">
                        <div class="border-top-radius bg-image"
                             style="background-image: url({{ asset('assets/img/heuristic.jpg') }});">
                            <div class="border-top-radius bg-black-op">
                                <div class="block-content  block-content-full text-xs-center">
                                    <h2 class="h3 font-w600 text-uppercase text-white push-50-t push-50">
                                        Evaluacion Heuristica
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-narrow block-content-full">
                            <p class="font-s16 push-10-t">
                                <b>En la evaluación heurística</b> por medio de una lista de chequeo verificamos si la funcionalidad 	que existe es necesaria, si es sistema es intuitivo, si el contenido para el público se entiende, 	si el sistema responde de forma adecuada a cada operación, entre otros. Dichos hallazgos 	se entregan en un informe categorizando y priorizando vulnerabilidades.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6  animated fadeInUp">
                    <div class="block block-rounded" style="height: 95%">
                        <div class="border-top-radius bg-image"
                             style="background-image: url({{ asset('assets/img/heatmap.png') }});">
                            <div class="border-top-radius bg-black-op">
                                <div class="block-content  block-content-full text-xs-center">
                                    <h2 class="h3 font-w600 text-uppercase text-white push-50-t push-50">Mapas de calor
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-narrow block-content-full">
                            <p class="font-s16 push-10-t">
                                <b>En la prueba de Mapas de calor</b>  Un mapa de calor es una visualización que utilizamos para representar la intensidad de los 	datos, con este buscamos comprender cuales son los caminos que tus usuarios toman para 	realizar las tareas, para lograr optimizar las rutas y generar las guías necesarias para 	desarrollar las acciones  que tú quieres. Identificando como tus usuarios entienden las agrupaciones de productos/servicios y las categorías en tu sitio web.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-primary-darkest text-white font-s16">
            <section class="content-boxed">
                <div class="row col-sm-12 flex-items-xs-middle  flex-items-xs-center ">
                    <div class="col-sm-6 push-10-t bg-primary   ">
                        <div class="content content-full">
                            <h3 class="push text-xs-center h2">¿Beneficios de realizar pruebas de usabilidad?</h3>
                            <ul class="text-white-op">
                                <li class="push-10">Identificar si los usuarios son capaces de resolver tareas básicas sin experimentar problemas.
                                </li>
                                <li class="push-10">Puede obtener información importante.</li>
                                <li class="push-10">Identificar si el contenido es comprensible y está bien estructurado.</li>
                                <li class="push-10">La interfaz guía bien al usuario a través de procesos específicos.</li>
                                <li class="push-10">Hay algunas partes de la interfaz que hacen que los usuarios fallen (posible punto de terminación).</li>
                                <li class="push-10">Es divertido usar la aplicación / producto (alegría de uso)..</li>
                                <li class="push-10">Mejorar calidad del producto.</li>
                                <li class="push-10">Usuarios satisfechos.</li>
                                <li class="push-10">Opiniones de sus clientes sobre sus productos/servicios.</li>
                                <li class="push-10">Determinar que necesidades se encuentran insatisfechas.</li>
                                <li class="push-10">Identificar qué tan fácil de usar es un diseño.</li>
                                <li class="push-10">Identificar qué tan claras son las instrucciones y la información en el sitio web.</li>
                                <li class="push-10">Determinar si es amigable su sitio o dónde generar las frustraciones del usuario.</li>
                                <li class="push-10">Cuál es el camino esperado por mis usuarios</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="content">
                            <svg class="heart-loader" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 90 90" version="1.1">
                                <g class="heart-loader__group">
                                    <path class="heart-loader__square" stroke-width="1" fill="none" d="M0,30 0,90 60,90 60,30z"/>
                                    <path class="heart-loader__circle m--left" stroke-width="1" fill="none" d="M60,60 a30,30 0 0,1 -60,0 a30,30 0 0,1 60,0"/>
                                    <path class="heart-loader__circle m--right" stroke-width="1" fill="none" d="M60,60 a30,30 0 0,1 -60,0 a30,30 0 0,1 60,0"/>
                                    <path class="heart-loader__heartPath" stroke-width="2" d="M60,30 a30,30 0 0,1 0,60 L0,90 0,30 a30,30 0 0,1 60,0" />
                                </g>
                            </svg>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    @include('app.opiniones')
    @include('app.formulario')

@stop