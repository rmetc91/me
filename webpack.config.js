var path = require('path');

module.exports = {
  entry: './app/splash/splash.js',
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'app/assets/libraries/webpack')
  }
};
