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

mix.js(['resources/js/layouts/app.js',
    'resources/js/layouts/header.js',
    'resources/js/layouts/footer.js',
    'resources/js/index.js',
    'resources/js/auth/login.js',
    'resources/js/auth/master.js',
    'resources/js/pages/about/index.js',
    'resources/js/pages/contacts/index.js',
    'resources/js/pages/countries/index.js',
    'resources/js/pages/gallery/index.js',
    'resources/js/pages/services/index.js',
    'resources/js/pages/partners/index.js',
    'resources/js/pages/reviews/index.js',
    'resources/js/pages/worksystem/index.js',], 'public/js/app.js')
    .styles(['resources/css/layouts/app.css',
        'resources/css/layouts/header.css',
        'resources/css/layouts/footer.css',
        'resources/css/index.css',
        'resources/css/auth/login.css',
        'resources/css/auth/master.css',
        'resources/css/pages/about/index.css',
        'resources/css/pages/contacts/index.css',
        'resources/css/pages/countries/index.css',
        'resources/css/pages/gallery/index.css',
        'resources/css/pages/services/index.css',
        'resources/css/pages/partners/index.css',
        'resources/css/pages/reviews/index.css',
        'resources/css/pages/worksystem/index.css',], 'public/css/app.css')
    .version();
