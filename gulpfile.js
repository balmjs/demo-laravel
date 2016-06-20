var balm = require('balm');

balm.config = {
  // cache: true,
  server: {
    proxy: 'project.local' // change to yours
  },
  roots: {
    source: 'resources',
    target: 'public'
  },
  paths: {
    source: {
      html: 'views',
      css: 'assets/sass',
      js: 'assets/js',
      img: 'assets/img'
    },
    tmp: {
      base: 'assets', // fix static file path
      css: 'assets/css'
    }
    //, target: {
    //   cache: 'assets' // build cache dir
    // }
  },
  scripts: {
    entry: {
      'home/index': './resources/assets/js/home/index.js',
      'about/index': './resources/assets/js/about/index.js'
    }
  },
  sprites: {
    basePath: '../..'
  }
};

balm.go();
