const mix = require('laravel-mix');
const path = require('path');

// Set resource paths
mix.setResourceRoot('../');
mix.setPublicPath(path.resolve('./'));

// Webpack configuration
mix.webpackConfig({
    watchOptions: {
        ignored: [
            path.resolve(__dirname, 'node_modules'),
            path.resolve(__dirname, 'css'),
            path.resolve(__dirname, 'js')
        ]
    }
});

// Compile JavaScript
mix.js('resources/js/app.js', 'js');

// Compile CSS with Tailwind
mix.postCss('resources/css/app.css', 'css', [
    require('tailwindcss')
]);

// Environment-specific settings
if (mix.inProduction()) {
    mix.version();
} else {
    mix.sourceMaps();
    mix.webpackConfig({ devtool: 'source-map' });
}
