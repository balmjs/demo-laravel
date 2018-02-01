let balm = require('balm');

balm.config = {
  static: false, // for PHP framework
  server: {
    proxy: 'your.project.local'
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
      home: './resources/assets/js/home.js',
      about: './resources/assets/js/about.js',
      contact: './resources/assets/js/contact.js',
      app: './resources/assets/js/app.js'
    },
    loaders: [{
      test: /\.vue$/,
      loader: 'vue'
    }],
    alias: {
      'vue$': balm.config.production ? 'vue/dist/vue.min.js' : 'vue/dist/vue.esm.js'
    }
  },
  // assets: {
  //   subDir: 'assets'
  // },
  // cache: true
};

balm.go(function(mix) {
  if (balm.config.production && balm.config.cache) {
    mix.remove('./public/css');
  }
});
