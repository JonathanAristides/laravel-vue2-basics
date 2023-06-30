const mix = require('laravel-mix');
const { VueLoaderPlugin } = require('vue-loader');


mix.js('resources/js/app.js', 'public/js')
    .css('resources/css/app.css', 'public/css')
    .vue();
