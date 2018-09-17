var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass([
        '../../../resources/assets/sass/style.sass',

    ], 'public/dist/css/layout.css');

    mix.version('public/dist/css/layout.css');

    mix.style([
        '../../../node_modules/bootstrap/dist/css/bootstrap.css',
        '../../../node_modules/bootstrap/dist/css/bootstrap-grid.css',
        '../../../node_modules/bootstrap/dist/css/bootstrap-reboot.css'

    ], 'public/dist/css/bootstrap.css');

    mix.version('public/dist/css/bootstrap.css');

    mix.scripts([
        '../../../node_modules/bootstrap/dist/js/bootstrap.bunble.js',
        '../../../node_modules/bootstrap/dist/js/bootstrap.js'

    ], 'public/dist/js/bootstrap.js');

    mix.scripts([
        '../../../node_modules/popper.js/dist/popper.js',
        '../../../node_modules/popper.js/dist/popper-utils.js'

    ], 'public/dist/js/popper.js' );

    mix.scripts([
        '../../../node_modules/jquery/jquery.js'

    ], 'public/dist/js/jQuery.js');

    mix.style([
        '../../../node_modules/lightbox2/dist/css/lightbox.css'

    ], 'public/dist/lightbox/lightbox.css');

    mix.scripts([
        '../../../node_modules/lightbox2/dist/js/lightbox.js'

    ], 'public/dist/lightbox/lightbox.js');
});
