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

mix.js('resources/assets/js/app.js', 'public/js')

    .js('resources/assets/join_to_it/vendor/jquery/jquery.js', 'public/vendor/jquery')
    .js('resources/assets/join_to_it/vendor/jquery/jquery.slim.js', 'public/vendor/jquery')
    .js('resources/assets/join_to_it/vendor/bootstrap/js/bootstrap.bundle.min.js', 'public/vendor/bootstrap/js')
    .js('resources/assets/join_to_it/vendor/bootstrap/js/bootstrap.js', 'public/vendor/bootstrap/js')
    .js('resources/assets/join_to_it/vendor/jquery-easing/jquery.easing.compatibility.js', 'public/vendor/jquery-easing')
    .js('resources/assets/join_to_it/vendor/jquery-easing/jquery.easing.min.js', 'public/vendor/jquery-easing')
    .js('resources/assets/join_to_it/vendor/chart.js/Chart.bundle.min.js', 'public/vendor/chart_js')
    .js('resources/assets/join_to_it/vendor/chart.js/Chart.min.js', 'public/vendor/chart_js')
    .js('resources/assets/join_to_it/vendor/datatables/jquery.dataTables.js', 'public/vendor/datatables')
    .js('resources/assets/join_to_it/vendor/datatables/dataTables.bootstrap4.js', 'public/vendor/datatables')
    .js('resources/assets/join_to_it/js/sb-admin.min.js', 'public/js')
    .js('resources/assets/join_to_it/js/sb-admin-charts.min.js', 'public/js')
    .js('resources/assets/join_to_it/js/sb-admin-datatables.min.js', 'public/js')


    .sass('resources/assets/sass/app.scss', 'public/css')

    .sass('resources/assets/join_to_it/scss/sb-admin.scss', 'public/css')
    .sass('resources/assets/join_to_it/vendor/bootstrap/css/bootstrap.min.scss', 'public/vendor/bootstrap/css')
    .sass('resources/assets/join_to_it/vendor/font-awesome/scss/font-awesome.scss', 'public/vendor/font-awesome/css')
    .sass('resources/assets/join_to_it/vendor/datatables/dataTables.bootstrap4.scss', 'public/vendor/datatables');

