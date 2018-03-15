let mix = require('laravel-mix');

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

mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/popper.js/dist/umd/popper.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'node_modules/flip/dist/jquery.flip.js',
    'node_modules/vue/dist/vue.js',
    'node_modules/axios/dist/axios.js',
    'resources/assets/js/initPlugins.js',
    // 'resources/assets/js/app.js',
  ], 'public/js/app.js')
  .sass('resources/assets/sass/app.scss', 'public/css');