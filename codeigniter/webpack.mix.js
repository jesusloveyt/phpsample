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
// mix.config.fileLoaderDirs.fonts = 'public/fonts';
mix.setResourceRoot('/')
    .js('assets/webpack-mix/js/app.js', 'assets/build/js')
    .sass('assets/webpack-mix/sass/app.scss', 'assets/build/css').sourceMaps();