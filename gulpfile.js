var balm = require('balm');

balm.config = {
  server: {
    proxy: 'project.local'
  },
  roots: {
    app: 'resources',
    dist: 'public'
  },
  paths: {
    app: {
      html: '/views',
      css: '/assets/sass',
      js: '/assets/js',
      img: '/assets/img'
    }
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
