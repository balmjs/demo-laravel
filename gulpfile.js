var balm = require('balm');

balm.config = {
  // cache: true,
  proxy: 'your.project.local',
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
    },
    // target: {
    //   cache: 'assets' // build cache dir
    // }
  },
  scripts: {
    entry: {
      'common' : ['jquery'],
      'home/index': './resources/assets/js/home/index.js',
      'about/index': './resources/assets/js/about/index.js'
    },
    vendors: ['common']
  },
  sprites: {
    basePath: '../..',
    imgList: ['icon']
  }
};

balm.go();
