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

mix.js('resources/front/js/app.js', 'public/front/js/js')
	.js('resources/admin/js/app.js', 'public/admin/js/app.js')
    .sass('resources/front/sass/app.scss', 'public/front/css/css')
    .sass('resources/admin/sass/app.scss', 'public/admin/css/app.css');
