var elixir = require('laravel-elixir');

elixir.config.production = true;
elixir.config.sourcemaps = false;

elixir(function (mix) {
    mix
        .sass(['app.scss'], 'public/dist/css/app.css')
        .styles([
            'vendor/bower_components/font-awesome/css/font-awesome.min.css',
            'public/dist/css/app.css',
            'vendor/bower_components/dropzone/dist/min/dropzone.min.css'
        ], 'public/dist/css/all.css', './')
        .scripts([
            'vendor/bower_components/jquery/dist/jquery.js',
            'vendor/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
            'vendor/bower_components/sweetalert/dist/sweetalert.min.js',
            'vendor/bower_components/dropzone/dist/min/dropzone.min.js',
            // 'vendor/bower_components/vue/dist/vue.min.js',
            'vendor/bower_components/vue/dist/vue.js'
        ], 'public/dist/js/all.js', './')
        .version(['public/dist/css/all.css', 'public/dist/js/all.js'])
        .copy('vendor/bower_components/font-awesome/fonts/', 'public/fonts/')
        .copy('vendor/bower_components/ionicons/fonts/', 'public/fonts/');
});