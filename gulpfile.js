const elixir = require('laravel-elixir');

var critical = require('critical');



/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 
 
 */

elixir(mix => {

    mix.less('main.less', 'resources/assets/css/oneui.min.css');
    mix.styles(['bootstrap-flex.min.css', 'oneui.min.css', 'app.css'], 'public/assets/css/all.min.css');
    mix.scripts(['oneui.min.js', 'typed.min.js','tether.min.js', 'bootstrap.min.js','functions.js'], 'public/assets/js/all.min.js');
    //mix.task('critical');
    //mix.task('cache-clear');
    //mix.browserSync();
    //mix.phpUnit();
});


gulp.task('critical', function () {
    critical.generate({
        base: 'public/',
        src: 'https://ziuxlab.com',
        css: [
            'public/assets/css/all.min.css',
        ],
        dimensions: [{
            width: 320,
            height: 480
        }, {
            width: 768,
            height: 1024
        }, {
            width: 1280,
            height: 960
        }],
        dest: 'public/assets/css/critical.css',
        minify: true,
        extract: true,
        ignore: ['@font-face',/url\(/],
    });
});
