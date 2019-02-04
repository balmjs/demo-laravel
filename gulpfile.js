const balm = require('balm');
const VueLoaderPlugin = require('vue-loader/lib/plugin');

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
      app: './resources/assets/js/app.js'
    },
    loaders: [
      {
        test: /\.vue$/,
        loader: 'vue-loader'
      }
    ],
    plugins: [new VueLoaderPlugin()],
    alias: {
      vue$: 'vue/dist/vue.esm.js'
    }
  }
  // assets: {
  //   subDir: 'assets'
  // },
  // cache: true
};

balm.go(mix => {
  if (balm.config.isProd && balm.config.cache) {
    mix.remove('./public/css');
  }
});
