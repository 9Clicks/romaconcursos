var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass([
        '../../../resources/assets/sass/app.sass'
    ], 'public/dist/css/layout.css');

    mix.version('public/dist/css/layout.css');

    mix.styles([
        '../../../node_modules/bootstrap-jquery-slim/dist/css/bootstrap.css',
        '../../../node_modules/bootstrap-jquery-slim/dist/css/bootstrap-grid.css'

    ], 'public/dist/css/bootstrap-slim.css');

    mix.scripts([
        '../../../node_modules/bootstrap-jquery-slim/dist/js/bootstrap.bundle.js',
        '../../../node_modules/bootstrap-jquery-slim/dist/js/bootstrap.js'

    ], 'public/dist/js/bootstraps.js');

    mix.scripts([
        '../../../node_modules/popper.js/dist/popper.js',
        '../../../node_modules/popper.js/dist/popper-utils.js'

    ], 'public/dist/js/poppers.js');

    mix.scripts([
        '../../../node_modules/jquery/jquery.js'

    ], 'public/dist/js/jQuery.js');

    mix.styles([
        '../../../node_modules/lightbox2/dist/css/lightbox.css'

    ], 'public/dist/lightbox/css/lightbox.css');

    mix.copy('node_modules/lightbox2/dist/images', 'public/dist/lightbox/images');

    mix.scripts([
        '../../../node_modules/lightbox2/dist/js/lightbox.js'

    ], 'public/dist/lightbox/js/lightbox.js');

    mix.styles([
        '../../../resources/assets/icones/style.css'

    ], 'public/dist/icones/app.css');

    mix.copy('resources/assets/icones/fonts', 'public/dist/icones/fonts');
});
