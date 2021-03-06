const mix = require("laravel-mix");
const path = require("path");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.postCss("resources/css/app.css", "public/css", [
    //
])
    .js("resources/js/app.js", "public/js")
    .vue({ version: 3 });

// New Alias plugin
mix.alias({
    "@": path.resolve("resources/js"),
});


const webpack = require('webpack');

module.exports = {
  plugins: [
    // Define Bundler Build Feature Flags
    new webpack.DefinePlugin({
      // Drop Options API from bundle
      __VUE_OPTIONS_API__: false,
    }),
  ],
};
