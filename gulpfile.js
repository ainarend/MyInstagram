var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    // Compile our SASS file to CSS.
    mix.sass('app.scss');

    // Combine the various CSS into one.
    mix.styles([
        'bootstrap.min.css',
        'dropzone.css'
    ]);

    // Combine the various JS into one.
    mix.scripts([
        'jquery-3.1.1.slim.min.js',
        'tether.min.js',
        'bootstrap.min.js',
        'dropzone.js'
    ]);

    // Enable cache busting versions.
    //mix.version(['css/all.css', 'js/all.js']);

});