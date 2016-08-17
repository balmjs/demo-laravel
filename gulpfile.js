var balm = require('balm');

balm.config = {
  static: false,
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
      js: 'assets/js',
      img: 'assets/img'
    }
  },
  styles: {
    ext: 'scss'
  },
  scripts: {
    entry: {
      'common': ['jquery'],
      'home/index': './resources/assets/js/home/index.js',
      'about/index': './resources/assets/js/about/index.js'
    },
    vendors: ['common']
  },
  sprites: {
    basePath: '../../',
    image: ['icon']
  },
  // cache: true,
  // assets: {
  //   subDir: 'assets'
  // }
};

balm.go(function(mix) {
  if (balm.config.production) {
    // mix.remove('./public/css');
  }
});
