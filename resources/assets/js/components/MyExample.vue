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
    </template>
  </div>
</template>

<script>
export default {
  data() {
    return {
      user: {
        token: false,
        account: '',
        password: ''
      },
      users: []
    }
  },
  methods: {
    async login() {
      let response = await this.$http.post('/auth/login', this.user);
      let {status, message, data} = response.data;
      if (status) {
        this.user.token = data.token;
        window.axios.defaults.headers.common['Authorization'] = `Bearer ${data.token}`;
      } else {
        alert(message);
      }
    },
    async getList() {
      try {
        let response = await this.$http.get('/user/list');
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
      this.user.token = '';
    }
  }
};
</script>
