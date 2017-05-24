<template>
  <div class="container">
    <template v-if="user.token">
      <h3>User List</h3>
      <button type="button" @click="getList">Get List</button>
      <button type="button" @click="logout">Logout</button>
      <div class="row" v-for="(user, index) in users">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default" v-if="user.isEdit">
            <div class="panel-heading"><input type="text" v-model="user.name"></div>
            <div class="panel-body">
              <textarea v-model="user.email"></textarea>
            </div>
          </div>
          <div class="panel panel-default" v-else>
            <div class="panel-heading">{{ user.name }}</div>
            <div class="panel-body">{{ user.email }}</div>
          </div>
        </div>
      </div>
    </template>
    <template v-else>
      <fieldset>
        <legend>Sign in</legend>
        <p>
          <label>Account</label>
          <input type="text" name="account" v-model="user.account">
        </p>
        <p>
          <label>Password</label>
          <input type="password" name="password" v-model="user.password">
        </p>
        <p>
          <button type="button" @click="login">Login</button>
          <button type="button" @click="getList">Get User List</button>
        </p>
      </fieldset>
      <fieldset>
        <legend>Sign up</legend>
        <p>
          <label>Username</label>
          <input type="text" name="name" v-model="user.name">
        </p>
        <p>
          <label>Email</label>
          <input type="text" name="email" v-model="user.email">
        </p>
        <p>
          <label>Password</label>
          <input type="password" name="password" v-model="user.password">
        </p>
        <p>
          <button type="button" @click="register">Register</button>
        </p>
      </fieldset>
    </template>
  </div>
</template>

<script>
const API = {
  register: 'auth/register',
  login: 'auth/login',
  getUserList: 'user/list'
};

export default {
  data() {
    return {
      user: {
        token: false,
        account: '',
        name: '',
        email: '',
        password: ''
      },
      isRegister: false,
      users: []
    }
  },
  methods: {
    resetFormData() {
      this.user = {
        token: false,
        account: '',
        name: '',
        email: '',
        password: ''
      };
    },
    async register() {
      let response = await this.$http.post(API.register, {
        name: this.user.name,
        email: this.user.email,
        password: this.user.password
      });
      let {status, message, data} = response.data;
      if (status) {
        this.resetFormData();
        alert('Please Login');
      } else {
        alert(message);
      }
    },
    async login() {
      let response = await this.$http.post(API.login, this.user);
      let {status, message, data} = response.data;
      if (status) {
        this.user.token = data.token;
        window.axios.defaults.headers.common['Authorization'] = `Bearer ${data.token}`;
        this.users = []; // reset data
      } else {
        alert(message);
      }
    },
    async getList() {
      try {
        let response = await this.$http.get(API.getUserList);
        let {status, message, data} = response.data;
        if (status) {
          this.users = data;
        } else {
          alert(message);
        }
      } catch (e) {
        alert(e);
      }
    },
    async logout() {
      await this.$http.post('/auth/logout');
      this.resetFormData();
    }
  }
};
</script>
