<?php
    
    namespace App\Http\Controllers;
    
    use Artesaos\SEOTools\Facades\SEOMeta;
    use SEO;
    use Illuminate\Http\Request;
    
    class PortafolioController extends Controller
    {
        
        public function __construct()
        {
            $this->middleware('minify');
        }
        
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
            SEO::setTitle('casos de exito y portafolio de nuestro laboratorio');
            SEO::setDescription('casos de exito de empresas que utilizaron nuestros servicios de desarrollo web, ecommerce, optimizacion web, page speed, diseño de interfaces centradas en el usuario y pruebas de usabilidad');
            SEO::addImages(['url' => 'http://image.url.com/cover.jpg']);
            SEO::opengraph()
               ->addProperty('type', 'articles')
            ;
            SEO::opengraph()
               ->setUrl('http://ziuxlab.com/portafolio')
            ;
            SEO::twitter()
               ->setSite('@ziuxlab')
            ;
            SEOMeta::addKeyword(['Usabilidad', 'Optimizacion web', 'SEO', 'casos de exito', 'portafolio ziuxlab']);
            
            return view('app.portafolio');
        }
        
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }
        
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //
        }
        
        /**
         * Display the specified resource.
         *
         * @param  int $id
         *
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }
        
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         *
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //
        }
        
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  int                      $id
         *
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
        }
        
        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }
    }
