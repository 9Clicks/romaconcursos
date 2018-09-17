var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass([
        '../../../resources/assets/sass/style.sass',

    ], 'public/dist/css/layout.css');

    mix.version('public/dist/css/layout.css');

    mix.style([
        '../../../node_modules/bootstrap/dist/css/bootstrap.css',
        '../../../node_modules/bootstrap/dist/css/bootstrap-grid.css',
        '../../../node_modules/bootstrap/dist/css/bootstrap-reboot.css',

    ], 'public/dist/css/bootstrap.css');

    mix.version('public/dist/css/bootstrap.css');
});
