import { $http, callback } from './util';
import URL from './config';

export default {
  async register(formData = {}) {
    let response = await $http.post(URL.auth.register, formData);
    return callback(response.data);
  },
  async login(formData = {}) {
    let response = await $http.post(URL.auth.login, formData);
    return callback(response.data);
  },
  async logout() {
    let response = await $http.post(URL.auth.logout);
    return callback(response.data);
  }
};
