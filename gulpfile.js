var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass([
        '../../../resources/assets/sass/style.sass'
    ], 'public/dist/css/layout.css');
});
