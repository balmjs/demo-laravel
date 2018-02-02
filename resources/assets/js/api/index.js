import authApi from './auth';
import userApi from './user';

const API = Object.assign({}, authApi, userApi);

export default API;
