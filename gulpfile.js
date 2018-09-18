var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass([
        '../../../resources/assets/sass/app.sass'
    ], 'public/dist/css/layout.css');

    mix.version('public/dist/css/layout.css');

    mix.styles([
        '../../../node_modules/bootstrap/dist/css/bootstrap.css'
    ], 'public/dist/bootstrap/9clicks.css')

    mix.scripts([
        '../../../node_modules/popper.js/dist/popper.js'
    ], 'public/dist/bootstrap/popper.js');

    mix.scripts([
        '../../../node_modules/jquery/jquery.js'

    ], 'public/dist/js/jQuery.js');

    mix.scripts([
        '../../../node_modules/bootstrap/dist/js/bootstrap.bundle.js'
    ], 'public/dist/bootstrap/bundle.js');

    mix.scripts([
        '../../../node_modules/bootstrap/dist/js/bootstrap.js'
    ], 'public/dist/bootstrap/9clicks.js');

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
