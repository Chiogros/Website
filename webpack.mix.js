const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.postCss('resources/css/includes/global.css', 'public/css/includes');
mix.postCss('resources/css/includes/header.css', 'public/css/includes');
mix.postCss('resources/css/includes/footer.css', 'public/css/includes');
mix.postCss('resources/css/project/index.css', 'public/css/project');

