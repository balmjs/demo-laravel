let balm = require('balm');

balm.config = {
  static: false, // for PHP framework
  server: {
    proxy: 'your.project.dev'
  },
  roots: {
    source: 'resources',
    target: 'public'
  },
  paths: {
    source: {
      base: 'assets',
      html: 'views',
      css: 'assets/sass',
      js: 'assets/js'
    }
  },
  styles: {
    ext: 'scss'
  },
  scripts: {
    entry: {
      app: './resources/assets/js/app.js',
    },
    loaders: [{ // for Vue.js
      test: /\.vue$/,
      loader: 'vue'
    }]
  }
  //, cache: true,
  // assets: {
  //  subDir: 'assets'
  // }
};

balm.go(mix => {
  if (balm.config.production && balm.config.cache) {
    mix.remove('./public/css');
  }
});
