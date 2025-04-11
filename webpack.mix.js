let mix = require("laravel-mix");
let path = require("path");

mix.setResourceRoot("../");
mix.setPublicPath(path.resolve("./"));

mix.webpackConfig({
  watchOptions: {
    ignored: [
      path.posix.resolve(__dirname, "./node_modules"),
      path.posix.resolve(__dirname, "./css"),
      path.posix.resolve(__dirname, "./js"),
    ],
  },
});

// Compile JavaScript
mix.js("resources/js/app.js", "js");

// Compile CSS
mix.css("resources/css/app.css", "css").options({
  processCssUrls: false,
  postCss: [require("autoprefixer")({ cascade: false })],
});

if (mix.inProduction()) {
  mix.version();
} else {
  mix.sourceMaps();
  mix.options({ manifest: false });
}
