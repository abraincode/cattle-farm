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

mix.copy('bower_components/parsleyjs/src/parsley.css', 'public/css')
mix.copy('bower_components/select2/dist/css/select2.css','public/css')

mix.copy('bower_components/parsleyjs/dist/parsley.js','public/js')
mix.copy('bower_components/select2/dist/js/select2.js','public/js')

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .styles([
          'public/css/*'
      ],  'public/dist/all.css')
   .scripts([
        'public/js/*'
    ],  'public/dist/all.js');
