const balm = require('balm');

balm.config = {
  inFrontend: false, // for PHP framework
  server: {
    proxy: 'your.project.local',
    extraWatchFiles: ['resources/views/**/*.php']
  },
  roots: {
    source: 'resources',
    target: 'public'
  },
  paths: {
    source: {
      css: 'sass',
      js: 'js'
    }
  },
  styles: {
    extname: 'scss'
  },
  scripts: {
    entry: './resources/js/app.js'
  },
  assets: {
    cache: true
  }
};

balm.go();
