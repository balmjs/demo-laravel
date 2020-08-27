const path = require('path');
const VueLoaderPlugin = require('vue-loader/lib/plugin');

// Documentation - https://balm.js.org/docs/config/
// 中文文档 - https://balm.js.org/docs/zh/config/
module.exports = {
  inFrontend: false,
  server: {
    proxy: 'your.project.local', // Target host
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
    entry: {
      app: './resources/js/app.js'
    },
    loaders: [
      {
        test: /\.vue$/,
        loader: 'vue-loader'
      }
    ],
    plugins: [new VueLoaderPlugin()],
    alias: {
      vue$: 'vue/dist/vue.esm.js',
      '@': path.resolve(__dirname, 'resources', 'js')
    }
  },
  assets: {
    cache: true
  }
};
