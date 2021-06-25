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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);

if (mix.inProduction()) {
    mix.version();
}


mix.styles([
        'resources/css/css/bootstrap.min.css',
        'resources/css/css/style.css',
        'resources/css/css/responsive.css',
        'resources/css/css/jquery.mCustomScrollbar.min.css',
        'resources/css/css/animate.min.css',
        'resources/css/css/jquery-ui.css',
        'resources/css/css/meanmenu.css',
        'resources/css/css/nice-select.css',
        'resources/css/css/normalice.css',
        'resources/css/css/owl.carousel.min.css',
        'resources/css/css/slick.css',
    ], 'public/css/index.css')
    .scripts([
        'resources/js/js/jquery.min.js',
        'resources/js/js/popper.min.js',
        'resources/js/js/bootstrap.bundle.min.js',
        'resources/js/js/jquery-3.0.0.min.js',
        'resources/js/js/plugin.js',
        'resources/js/js/jquery.mCustomScrollbar.concat.min.js',
        'resources/js/js/custom.js',
        'resources/js/js/jquery.validate.js',
    ], 'public/js/index.js');