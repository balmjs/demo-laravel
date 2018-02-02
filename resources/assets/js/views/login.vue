<template>
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Login</div>

                  <div class="form-horizontal">
                      <div class="panel-body">
                          <div class="form-group">
                              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control" name="email" v-model="formData.email" required autofocus>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="password" class="col-md-4 control-label">Password</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control" name="password" v-model="formData.password" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-8 col-md-offset-4">
                                  <button type="button" class="btn btn-primary" @click="submit">
                                      Login
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>
</template>

<script>
import API from '../api';
import store from '../store';

export default {
  data() {
    return {
      formData: {
        email: '',
        password: ''
      }
    };
  },
  methods: {
    async submit() {
      let { status, data } = await API.login(this.formData);

      if (status) {
        store.save(data);
        this.$router.push('/');
      }
    }
  }
};
</script>
