const path = require('path');

const MiniCssExtractPlugin = require('mini-css-extract-plugin');


module.exports = {
  entry: ['./src/js/main.js', './src/scss/main.scss'],
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist'),
  },
  module: {
    rules: [{
      test: /\.scss$/,
      use: [
        { loader: MiniCssExtractPlugin.loader, },
        { loader: 'css-loader', options: { sourceMap: true } },
        { loader: 'sass-loader', options: { sourceMap: true } },
      ],
    }],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: '[name].css',
      chunkFilename: '[id].css'
    })
  ]
}
