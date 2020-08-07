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

mix.js('resources/lib/jquery-ui/jquery-ui.js', 'public/js')
    // .js('resources/lib/moment/moment.js', 'public/js')
    // .js('resources/lib/jquery-switchbutton/jquery.switchButton.js', 'public/js')
    // .js('resources/lib/peity/jquery.peity.js', 'public/js')
    //.js('resources/lib/highlightjs/highlight.pack.js')
    //.js('resources/lib/datatables/jquery.dataTables.js', 'public/js')
    //.js('resources/lib/datatables-responsive/dataTables.responsive.js', 'public/js')
    .js('resources/lib/select2/js/select2.min.js', 'public/js')
   // .js('resources/js/bracket.js', 'public/js')
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/bootstrap.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/bracket.scss', 'public/css');

    // mix.stylus([
    // //'resources/lib/font-awesome/css/font-awesome.css',
    // 'resources/lib/Ionicons/css/ionicons.css',
    // 'resources/lib/perfect-scrollbar/css/perfect-scrollbar.css',
    // 'resources/lib/jquery-switchbutton/jquery.switchButton.css',
    // 'resources/lib/highlightjs/github.css',
    // 'resources/lib/datatables/jquery.dataTables.css',
    // 'resources/lib/select2/css/select2.min.css'],'public/css');

