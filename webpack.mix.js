const mix = require('laravel-mix'); 
mix.setPublicPath('./') 
   .sass('assets/src/scss/style.scss', 'assets/dist/css') 
   .js('assets/src/js/app.js', 'assets/dist/js') 
   .version(); 
