const mix = require("laravel-mix");

mix
  .js("source/js/home.js", "assets/js/")
  .sass("source/scss/layout.scss", "assets/css/")
  .sass("source/scss/pages/home.scss", "assets/css/")
  .sourceMaps(true, "source-map");
mix.options({
  processCssUrls: false, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
});
mix.disableNotifications();
