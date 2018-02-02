export default {
  token: '', // TODO: save token to cookie/localStorage
  isLogin: false,
  user: {},
  save({ access_token, user }) {
    this.token = access_token;
    window.axios.defaults.headers.common['Authorization'] = `Bearer ${this.token}`;

    this.isLogin = true;
    this.user = user;
  },
  clear() {
    this.token = '';
    window.axios.defaults.headers.common['Authorization'] = '';

    this.isLogin = false;
    this.user = {};
  }
};
