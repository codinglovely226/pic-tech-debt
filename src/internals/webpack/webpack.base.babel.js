/* eslint-disable */
/**
 * COMMON WEBPACK CONFIGURATION
 */

const path = require('path');
const webpack = require('webpack');
const dotenv = require('dotenv');
//const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
//const TerserPlugin = require('terser-webpack-plugin');

const env = {
  NODE_ENV: JSON.stringify(process.env.NODE_ENV),
  REACT_APP_VERSION: JSON.stringify(process.env.REACT_APP_VERSION),
};
const isDev = env === 'development';
const envConfig = dotenv.config({ path: `./.env.${process.env.NODE_ENV}` }).parsed;
for (const k in envConfig) {
  env[k] = envConfig[k];
}

module.exports = (options) => ({
  entry: options.entry,
  output: Object.assign({ // Compile into js/build.js
    path: path.resolve(process.cwd(), 'build'),
    publicPath: '/',
  }, options.output), // Merge with env dependent settings
  module: {
    rules: [{
      test: /\.js$/, // Transform all .js files required somewhere with Babel
      loader: 'babel-loader',
      include: /(app|internals|server)/,
      query: options.babelQuery,
    }, {
      // Do not transform vendor's CSS with CSS-modules
      // The point is that they remain in global scope.
      // Since we require these CSS files in our JS or CSS files,
      // they will be a part of our compilation either way.
      // So, no need for ExtractTextPlugin here.
      test: /\.css$/,
      include: /node_modules/,
      use: [
        {
          loader: "style-loader"
        },
        {
          loader: "css-loader"
        }
      ],
    }, {
      test: /\.svg(\?v=\d+\.\d+\.\d+)?$/,
      loader: 'url-loader?limit=10000&mimetype=image/svg+xml',
    }, {
      test: /\.(eot|ttf|woff|woff2)$/,
      loader: 'url-loader?limit=100000',
    }, {
      test: /\.(jpg|png|gif)$/,
      loaders: [
        'file-loader',
        {
          loader: 'image-webpack-loader',
          query: {
            progressive: true,
            optimizationLevel: 7,
            interlaced: false,
            pngquant: {
              quality: '65-90',
              speed: 4,
            },
          },
        },
      ],
    }, {
      test: /\.html$/,
      loader: 'html-loader',
    }, {
      test: /\.(mp4|webm)$/,
      loader: 'url-loader',
      query: {
        limit: 10000,
      },
    }],
  },
  plugins: options.plugins.concat([
    new webpack.ProvidePlugin({
      // make fetch available
      fetch: 'exports-loader?self.fetch!whatwg-fetch',
    }),

    // Always expose NODE_ENV to webpack, in order to use `process.env.NODE_ENV`
    // inside your code for any environment checks; UglifyJS will automatically
    // drop any unreachable code.
    // webpack 4
    /*
    new webpack.DefinePlugin({
      'process.env': env,
    })
,    */
    new webpack.IgnorePlugin(/^\.\/lang$/, /moment$/),
  ]),

  resolve: {
    modules: ['app', 'node_modules'],
    extensions: [
      '.js',
      '.jsx',
      '.react.js',
    ],
    mainFields: [
      'browser',
      'jsnext:main',
      'main',
    ],
    alias: {
      moment$: 'moment/moment.js',
    },
  },
  devtool: options.devtool,
  target: 'web', // Make web variables accessible to webpack, e.g. window
  node: {
    fs: 'empty'
  },
  performance: options.performance || {},
});
