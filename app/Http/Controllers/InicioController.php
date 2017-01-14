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
    
        SEO::setTitle('Usabilidad y optimizacion de paginas web');
        SEO::setDescription('This is my page description');
        SEO::setCanonical('https://ziuxlab.com');
        SEO::addImages(['url' => 'http://image.url.com/cover.jpg']);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->setUrl('http://ziuxlab.com');
        SEO::twitter()->setSite('@ziuxlab');
        SEOMeta::addKeyword(['Usabilidad', 'Optimizacion web', 'SEO']);
       
        return view('app.inicio');
    }
    
}
