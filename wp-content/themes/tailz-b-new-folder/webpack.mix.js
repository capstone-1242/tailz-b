const mix = require('laravel-mix');
const path = require('path');

mix.setResourceRoot('../');
mix.setPublicPath(path.resolve('./'));

mix.webpackConfig({
    watchOptions: { ignored: [
        path.posix.resolve(__dirname, './node_modules')
    ] }
});

// Process JavaScript files
mix.js('resources/js/app.js', 'js')
   .js('resources/js/mobile-menu.js', 'js')
   .js('resources/js/tabs.js', 'js')
   .js('resources/js/grooming-tabs.js', 'js');

// Process CSS files
mix.postCss('resources/css/app.css', 'css', [
    require('tailwindcss'),
    require('autoprefixer')
]);

mix.postCss('resources/css/editor-style.css', 'css', [
    require('tailwindcss'),
    require('autoprefixer')
]);

// Production configuration
if (mix.inProduction()) {
    mix.version();
} else {
    mix.options({ manifest: false });
}
