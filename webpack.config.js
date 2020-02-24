// @ts-check
import * as path from 'path';

/** @type {import('webpack').Configuration} */
module.exports = {
  entry: {
    main: ''
  },
  output: {
    filename: '[name]/index.js',
    path: path.resolve('public', 'blocks')
  },
  module: {
    rules: [
      {
        test: /\.tsx?$/,
        use: [
          {
            loader: 'babel-loader',
            options: { presets: ['@wordpress/default'] }
          },
          {
            loader: 'ts-loader'
          }
        ]
      }
    ]
  }
};
