<template>
  <div class="demo-container">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <h1>
            <router-link to="/">BalmJS</router-link>
          </h1>
          <p>BalmJS demo for Laravel</p>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <template v-if="store.isLogin">
              <li><a>Hello, {{ store.user.name }}!</a></li>
              <li><a href="javascript:void(0)" @click="logout">Logout</a></li>
            </template>
            <template v-else>
              <li><router-link to="/login">Login</router-link></li>
              <li><router-link to="/register">Register</router-link></li>
            </template>
          </ul>
        </div>
      </div>
    </nav>
    <div class="content">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import store from '../../store';
import API from '../../api';

export default {
  data() {
    return {
      store
    };
  },
  methods: {
    async logout() {
      await API.logout();
      store.clear();
    }
  }
};
</script>
