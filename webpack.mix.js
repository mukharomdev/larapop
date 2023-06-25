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

mix.js(['resources/js/jquery-3.3.1.slim.min.js',
	'resources/js/popper.min.js',
	'resources/js/bootstrap.bundle.min.js',
	'resources/js/theme-color-mode.js'
	], 
	'public/js/app.js').version().sourceMaps()

mix.styles(['resources/css/bootstrap.min.css','resources/css/cover.css'], 'public/css/app.css').version().sourceMaps()
