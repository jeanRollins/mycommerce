const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
/*
mix.scripts([
   'resources/js/vue.js' ,
   'resources/js/axios.js' ,
   'resources/js/jquery.min.js' , 
   'resources/js/popper.min.js' ,
   'resources/js/bootstrap.min.js' ,
   'resources/js/mdb.min.js',
   'resources/js/app.js'
], 
'public/js/app.js')
.styles([
   'resources/css/fontawesome.css' ,
   'resources/css/font-roboto.css' ,
   'resources/css/bootstrap.min.css' , 
   'resources/css/mdb.min.css',
   'resources/css/app.css'
]
, 'public/css/app.css');
*/
 


mix.js('resources/js/app.js' , 'public/js')
   .sass('resources/sass/app.scss', 'public/css')