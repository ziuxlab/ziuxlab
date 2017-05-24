<?php

namespace App\Http\Controllers;


use Artesaos\SEOTools\Facades\SEOMeta;
use SEO;
use Illuminate\Http\Request;
use App\Http\Requests;
use Spatie\Sitemap\SitemapGenerator;

class InicioController extends Controller
{
    //

    public function __construct()
   {
       $this->middleware('minify');
   }
    public function index(){
    
        //SitemapGenerator::create('https://ziuxlab.com')->writeToFile('sitemap.xml');
        
        SEO::setTitle('Empresa de diseño y desarrollo de aplicaciones web en Colombia');
        SEO::setDescription('Ziuxlab es la empresa  de desarrollo aplicaciones web, diseño de interfaces, optimizacion web y pruebas de usabilidad de interfaces centrados en el usuario.');
        SEO::addImages(['url' => 'http://image.url.com/cover.jpg']);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->setUrl('http://ziuxlab.com');
        SEO::twitter()->setSite('@ziuxlab');
        SEOMeta::addKeyword(['Pruebas de Usabilidad', 'Optimización web', 'SEO','desarrollo de aplicaciones web','paginas web']);
       
        return view('app.inicio');
    }
    
    public function diseno(){
        
        SEO::setTitle('Diseño de interfaces UI/UX para aplicaciones web');
        SEO::setDescription('Ziuxlab es la empresa  de desarrollo de software y aplicaciones web, diseño de interfaces y optimizacion web, centrados en el usuario y en la usabilidad de sus interfaces');
        SEO::addImages(['url' => 'http://image.url.com/cover.jpg']);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->setUrl('http://ziuxlab.com/diseno-interfaces');
        SEO::twitter()->setSite('@ziuxlab');
        SEOMeta::addKeyword(['diseño de inrtefaces', 'experiencia de usuario', 'diseño y usabilidad','']);
    
        //return view('errors.construccion');
        return view('app.diseno');
    }
    public function desarrollo(){
        SEO::setTitle('Desarrollo de aplicaciones web y dispositivos moviles');
        SEO::setDescription('Desarrollo de software y aplicaciones web, magento, laravel, wordpress y aplicaciones para dispositivos moviles.');
        SEO::addImages(['url' => 'http://image.url.com/cover.jpg']);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->setUrl('http://ziuxlab.com/desarrollo');
        SEO::twitter()->setSite('@ziuxlab');
        SEOMeta::addKeyword(['diseño de inrtefaces', 'experiencia de usuario', 'diseño y usabilidad','']);
        return view('app.desarrollo');
    }
    public function optimizacion(){
        return view('errors.construccion');
    }
    public function pruebas(){
        SEO::setTitle('Pruebas de Usabilidad UI/UX');
        SEO::setDescription('Realizamos pruebas de usabilidad a interfaces web, moviles, formularios, cualquier interfaz que interactue con un usuario.');
        SEO::addImages(['url' => 'http://image.url.com/cover.jpg']);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->setUrl('http://ziuxlab.com/pruebas-usabilidad-interfaces');
        SEO::twitter()->setSite('@ziuxlab');
        SEOMeta::addKeyword(['pruebas de usabilidad', 'experiencia de usuario UI/UX', 'diseño y usabilidad','']);
        return view('app.usabilidad');
    }
    
    public function empresa(){
        return view('errors.construccion');
    }
    
    public function store(Request $request){
        
    }
    
}
