var path = require('path');

module.exports = {
  mode: 'development',
  entry: './lib/main.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'main.bundle.js'
  }
};