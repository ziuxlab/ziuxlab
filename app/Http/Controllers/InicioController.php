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
        
        SEO::setTitle('Empresa de diseño de interfaces y desarrollo de aplicaciones web en Colombia');
        SEO::setDescription('Ziuxlab es la empresa  de desarrollo de software y aplicaciones web, diseño de interfaces y optimizacion web, centrados en el usuario y en la usabilidad de sus interfaces');
        SEO::addImages(['url' => 'http://image.url.com/cover.jpg']);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->setUrl('http://ziuxlab.com');
        SEO::twitter()->setSite('@ziuxlab');
        SEOMeta::addKeyword(['Usabilidad', 'Optimizacion web', 'SEO','desarrollo de web apps']);
       
        return view('app.inicio');
    }
    
    public function store(Request $request){
        
    }
    
}
