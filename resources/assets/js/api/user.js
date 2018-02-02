import { $http, callback } from './util';
import URL from './config';

export default {
  async getUserList() {
    let response = await $http.get(URL.user);
    return callback(response.data);
  },
  async createUser(formData = {}) {
    let response = await $http.post(URL.user, formData);
    return callback(response.data);
  },
  async updateUser(formData = {}) {
    let response = await $http.put(`${URL.user}/${formData.id}`, formData);
    return callback(response.data);
  },
  async deleteUser(id) {
    let response = await $http.delete(`${URL.user}/${id}`);
    return callback(response.data);
  }
};
