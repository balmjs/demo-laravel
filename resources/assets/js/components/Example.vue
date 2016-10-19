<template>
    <div class="container">
        <p>
            <button @click="addUser()">Add</button>
            <button @click="getUsers()">Select (watch your `console`)</button>
        </p>
        <div class="row" v-for="user in users">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" v-if="user.isEdit">
                    <div class="panel-heading"><input type="text" v-model="user.name"></div>
                    <div class="panel-body">
                        <textarea v-model="user.email"></textarea>
                    </div>
                    <hr>
                    <p>
                        <button @click="updateUser($index)">Update</button>
                        <button @click="deleteUser($index)">Delete</button>
                        <button @click="cancelEdit($index)">Cancel</button>
                    </p>
                </div>
                <div class="panel panel-default" v-else>
                    <div class="panel-heading">{{ user.name }}</div>
                    <div class="panel-body">{{ user.email }}</div>
                    <hr>
                    <p>
                        <button @click="editUser($index)">Edit</button>
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
    </div>
</template>

<script>
import API from '../routes/api';

export default {
    data() {
        return {
            API_TOKEN: API.token, // just for test
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
    ready() {
        this.getUsers();
    },
    methods: {
        async addUser() {
            let nextId = this.users[this.users.length - 1].id;

            let data = {
                name: 'user' + nextId,
                email: 'user' + nextId + '@domain.com'
            };

            try {
                let resp = await this.$resource(API.user, Object.assign({}, data, {
                    password: '123456',
                    api_token: this.API_TOKEN
                })).save();

                if (resp.body.code === 200) {
                    console.info('created', resp.body.data);

                    this.users.push(Object.assign({}, data, {
                        id: resp.body.data.id,
                        isEdit: false
                    }));
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

            try {
                let resp = await this.$resource(API.user + '/' + user.id, {
                    api_token: this.API_TOKEN,
                    name: user.name,
                    email: user.email
                }).update();

                if (resp.body.code === 200) {
                    console.info('updated', resp.body.data);
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

            try {
                let resp = await this.$resource(API.user + '/' + user.id, {
                    api_token: this.API_TOKEN,
                    id: user.id
                }).delete();

                if (resp.body.code === 200) {
                    console.info('deleted');

                    this.users.splice(this.currentIndex, 1);
                }
            } catch (e) {
                console.warn(e);
            }

            $('#myModal').modal('hide'); // TODO: this.showModal = false
        },
        async getUsers() {
            try {
                let resp = await this.$resource(API.user, {
                    'api_token': this.API_TOKEN
                }).query();

                if (resp.body.code === 200) {
                    console.info('getAll');

                    let result = [];
                    resp.body.data.forEach(function(value) {
                        result.push({
                            id: value.id,
                            name: value.name,
                            email: value.email,
                            isEdit: false
                        });
                    });

                    this.users = result;
                }
            } catch (e) {
                console.warn(e);
            }
        }
    }
}
</script>
