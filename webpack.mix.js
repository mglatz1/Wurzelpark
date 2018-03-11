const { mix } = require('laravel-mix');

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
    .sass('resources/assets/sass/app.scss', 'public/css')
    .copy('node_modules/jquery/dist/jquery.min.js', 'public/js')
    .copy('node_modules/jquery-ui-dist/jquery-ui.min.js', 'public/js')
    .copy('node_modules/jquery-ui-dist/images/', 'public/css/images')
    .copy('node_modules/jquery-ui-dist/jquery-ui.min.css', 'public/css')
    .copy('node_modules/photoswipe/dist/photoswipe.min.js', 'public/js')
    .copy('node_modules/photoswipe/dist/photoswipe-ui-default.min.js', 'public/js')
    .copy('node_modules/photoswipe/dist/photoswipe.css','public/css')
    .copy('node_modules/photoswipe/dist/default-skin/default-skin.css','public/css');
