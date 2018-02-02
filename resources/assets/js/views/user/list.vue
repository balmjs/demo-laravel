<template>
  <div class="user-list">
    <router-link v-if="store.isLogin" to="/user/create">Add New User</router-link>
    <template v-if="isLoading">
      <p>Loading...</p>
    </template>
    <div v-else v-for="(user, index) in userList" :key="index" class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            {{ user.id }}:
            <template v-if="store.isLogin">
              <template v-if="isEdit && index === currentIndex">
                <input type="text" v-model="currentUser.name">
                <button type="button" @click="save">Save</button>
                <button type="button" @click="cancel">Cancel</button>
              </template>
              <template v-else>
                {{ user.name }}
                <button type="button" @click="edit(user, index)">Edit</button>
                <button type="button" @click="remove(user.id, index)">Delete</button>
              </template>
            </template>
            <template v-else>
              {{ user.name }}
            </template>
          </div>
          <div class="panel-body">
            <template v-if="isEdit && index === currentIndex">
              <input type="text" v-model="currentUser.email">
            </template>
            <template v-else>
              {{ user.email }}
            </template>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import store from '../../store';
import API from '../../api';

export default {
  data() {
    return {
      store,
      userList: [],
      currentUser: {},
      currentIndex: -1,
      isEdit: false,
      isLoading: false // TODO: global state
    }
  },
  async created() {
    this.isLoading = true;

    let { data } = await API.getUserList();
    this.userList = data;

    this.isLoading = false;
  },
  methods: {
    resetData() {
      this.currentUser = {};
      this.currentIndex = -1;
    },
    edit(user, index) {
      this.currentUser = Object.assign({}, user);
      this.currentIndex = index;
      this.isEdit = true;
    },
    cancel() {
      this.isEdit = false;
      this.resetData();
    },
    async save() {
      this.isLoading = true;

      this.isEdit = false;
      let { status } = await API.updateUser(this.currentUser);

      if (status) {
        this.userList[this.currentIndex] = Object.assign(this.userList[this.currentIndex], this.currentUser);
        this.resetData();
      }

      this.isLoading = false;
    },
    async remove(userId, index) {
      if (confirm('Are you sure?')) {
        this.isLoading = true;

        let { status } = await API.deleteUser(userId);
        if (status) {
          this.userList.splice(index, 1);
        }

        this.isLoading = false;
      }
    }
  }
};
</script>
