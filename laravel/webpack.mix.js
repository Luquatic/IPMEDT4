<<<<<<< HEAD
let mix = require('laravel-mix');
=======
const { mix } = require('laravel-mix');
>>>>>>> master

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

mix.js('resources/assets/js/app.js', 'public/js')
<<<<<<< HEAD
   .sass('resources/assets/sass/app.scss', 'public/css');
=======
   .sass('resources/assets/sass/login.scss', 'public/css')
   .sass('resources/assets/sass/home.scss', 'public/css');
>>>>>>> master
