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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

// admin css require
mix.styles([
    'public/assets/admin/css/style.css',
    'node_modules/toastr/build/toastr.min.css',
    'public/assets/common/common.css',
], 'public/admin/css/admin.css');

// admin js require

mix.js([
        'public/assets/common/common.js',
        'node_modules/toastr/build/toastr.min.js',
        'public/assets/admin/js/scripts.js',
        'public/assets/admin/js/admin.js',
        'public/assets/admin/js/ajax-validation.js',
    ], "public/admin/js/admin.js"
);

// frontend css require
mix.styles([
    'public/assets/admin/css/style.css',
    'node_modules/toastr/build/toastr.min.css',
    'public/assets/common/common.css',
], 'public/frontend/css/frontend.css');

// frontend js require

mix.js([
        'public/assets/common/common.js',
        'node_modules/toastr/build/toastr.min.js',
        'public/assets/admin/js/ajax-validation.js',
    ], "public/frontend/js/frontend.js"
);
