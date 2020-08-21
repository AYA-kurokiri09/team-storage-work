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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/service_infile.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/service.scss', 'public/css')
    .sass('resources/sass/service_admin.scss', 'public/css')
    .sass('resources/sass/service_newperson.scss', 'public/css')
    .sass('resources/sass/service_main.scss', 'public/css')
    .sass('resources/sass/service_infile.scss', 'public/css');


