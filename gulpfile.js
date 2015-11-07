var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {



  mix.styles([
   "fonts/font-awesome.css",
   "jquery.nouislider.min.css",
   "bootstrap-select.min.css",
   "owl.carousel.css",
   "jquery.nouislider.min.css",
   "style.css"
  ]).stylesIn("public/css");


 mix.scripts([
  "imagesloaded.pkgd.min.js",
  "jquery-migrate-1.2.1.min.js",
  "bootstrap/js/bootstrap.min.js",
  "jquery.color-2.1.2.min.js",
  "jquery.average-color.js",
  "masonry.pkgd.min.js",
  "infobox.js",
  "richmarker-compiled.js",
  "markerclusterer.js",
  "smoothscroll.js",
  "owl.carousel.min.js",
  "bootstrap-select.js",
  "icheck.min.js",
  "jquery.nouislider.all.min.js",
  "jquery.inview.min.js",
  "functions.js",
  "custom.js",
 ]);

});
