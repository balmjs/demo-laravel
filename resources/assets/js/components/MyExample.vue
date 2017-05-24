<template>
  <div class="container">
    <template v-if="user.token">
      <p>
        <button @click="addUser()">Add Random User</button>
        <button @click="getUsers()">Get User List</button>
      </p>
      <div class="row" v-for="(user, index) in users">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default" v-if="user.isEdit">
            <div class="panel-heading"><input type="text" v-model="user.name"></div>
            <div class="panel-body">
              <textarea v-model="user.email"></textarea>
            </div>
            <hr>
            <p>
              <button @click="updateUser(index)">Update</button>
              <button @click="deleteUser(index)">Delete</button>
              <button @click="cancelEdit(index)">Cancel</button>
            </p>
          </div>
          <div class="panel panel-default" v-else>
            <div class="panel-heading">{{ user.name }}</div>
            <div class="panel-body">{{ user.email }}</div>
            <hr>
            <p>
              <button @click="editUser(index)">Edit</button>
            </p>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
              Are you sure?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary" @click="confirmDeleteUser()">Confirm</button>
            </div>
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
import Vue from 'vue';

Vue.http.options.root = '/api';
const API = {
  register: 'auth/register',
  login: 'auth/login',
  user: 'user'
};

export default {
  data() {
    return {
      user: {
        token: '',
        account: '',
        name: '',
        email: '',
        password: ''
      },
      id: 0,
      users: [{
        id: 0,
        name: 'Example Component',
        email: 'I\'m an example component!',
        isEdit: false
      }],
      currentIndex: -1,
      showModal: false
    }
  },
  methods: {
    getToken(token) {
      this.user.token = token;
      Vue.http.headers.common['Authorization'] = `Bearer ${token}`;
    },
    async register() {
      try {
        let response = await this.$http.post(API.register, {
          name: this.user.name,
          email: this.user.email,
          password: this.user.password
        });
        let {code, message, data} = response.data;
        if (code === 200) {
          alert('OK');
          this.getToken(data.api_token);
        } else {
          alert(message);
        }
      } catch (e) {
        alert(e);
      }
    },
    async login() {
      let response = await this.$http.post(API.login, {
        account: this.user.account,
        password: this.user.password
      })
      let {code, message, data} = response.data;
      if (code === 200) {
        alert('OK');
        this.getToken(data.api_token);
      } else {
        alert(message);
      }
    },
    async addUser() {
      let nextId = this.users[this.users.length - 1].id;

      let postData = {
        name: 'user' + nextId,
        email: 'user' + nextId + '@domain.com',
        password: '123456'
      };

      try {
        let response = await this.$resource(API.user).save(postData);

        let {code, message, data} = response.body;

        if (code === 200) {
          console.info('created', data);

          this.users.push(Object.assign({}, data, {
            id: data.id,
            isEdit: false
          }));
        } else {
          console.log(message);
        }
      } catch (e) {
        console.warn(e);
      }
    },
    editUser(index) {
      this.currentIndex = index;
      this.users[index].isEdit = true;
    },
    cancelEdit(index) {
      this.currentIndex = -1;
      this.users[index].isEdit = false;
    },
    async updateUser(index) {
      let user = this.users[this.currentIndex];

      let postData = {
        name: user.name,
        email: user.email
      };

      try {
        let response = await this.$resource(`${API.user}/${user.id}`).update(postData);

        let {code, message, data} = response.body;

        if (code === 200) {
          console.info('updated', data);
        } else {
          console.log(message);
        }
      } catch (e) {
        console.warn(e);
      }

      this.users[index].isEdit = false;
    },
    deleteUser(index) {
      $('#myModal').modal('show'); // TODO this.showModal = true
    },
    async confirmDeleteUser() {
      let user = this.users[this.currentIndex];

      let postData = {
        id: user.id
      };

      try {
        let response = await this.$resource(`${API.user}/${user.id}`).delete(postData);

        let {code, message, data} = response.body;

        if (code === 200) {
          console.info('deleted');

          this.users.splice(this.currentIndex, 1);
        } else {
          console.log(message);
        }
      } catch (e) {
        console.warn(e);
      }

      $('#myModal').modal('hide'); // TODO: this.showModal = false
    },
    async getUsers() {
      try {
        let response = await this.$resource(API.user).get();

        let {code, message, data} = response.body;

        if (code === 200) {
          console.info('getAll');

          let result = [];
          data.forEach(function(value) {
            result.push({
              id: value.id,
              name: value.name,
              email: value.email,
              isEdit: false
            });
          });
          this.users = result;
        } else {
          console.log(message);
        }
      } catch (e) {
        console.warn(e);
      }
    }
  }
};
</script>
