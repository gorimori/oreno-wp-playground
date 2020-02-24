// @ts-check
const path = require('path');
const DependencyExtractionWebpackPlugin = require('@wordpress/dependency-extraction-webpack-plugin');

/** @type {import('webpack').Configuration} */
module.exports = {
  mode: 'production',
  entry: {
    h2: path.resolve('src', 'blocks', 'h2', 'index.tsx')
  },
  output: {
    filename: '[name]/index.js',
    path: path.resolve('public', 'blocks')
  },
  module: {
    rules: [
      {
        test: /\.[tj]sx?$/,
        use: [
          {
            loader: 'babel-loader',
            options: { presets: ['@wordpress/default'] }
          },
          { loader: 'ts-loader' }
        ]
      }
    ]
  },
  plugins: [new DependencyExtractionWebpackPlugin()]
};
