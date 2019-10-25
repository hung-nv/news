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

mix.js('resources/js/backend/app.js', 'public/admin/js')
    .sass('resources/sass/backend/admin.sass', 'public/admin/css')
    .sass('resources/sass/app.sass', 'public/css')
    .options({
        processCssUrls: false
    });
