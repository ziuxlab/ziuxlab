<?php

namespace App\Http\Controllers;


use Artesaos\SEOTools\Facades\SEOMeta;
use SEO;
use Illuminate\Http\Request;
use App\Http\Requests;

class InicioController extends Controller
{
    //

    public function __construct()
   {
       $this->middleware('minify');
   }
    public function index(){
    
        SEO::setTitle('Empresa de diseño y desarrollo de web apps en colombia');
        SEO::setDescription('Ziuxlab es la empresa  de desarrollo de software y web apps, diseño de interfaces y optimizacion web, centrados en el usuario y en la usabilidad de sus interfaces');
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
