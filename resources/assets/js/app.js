import './bootstrap';

import Vue from 'vue';
import app from './views/layouts/app';
import router from './routes';

Vue.config.productionTip = false;

window.axios.defaults.baseURL = '/api';
Vue.prototype.$http = window.axios;

new Vue({
  el: '#app',
  components: { app },
  template: '<app/>',
  router
});
