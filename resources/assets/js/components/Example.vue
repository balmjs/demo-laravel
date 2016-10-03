<template>
    <div class="container">
        <p>
            <button @click="addItem()">Add</button>
            <button @click="getItems()">Select (watch your `console`)</button>
        </p>
        <div class="row" v-for="item in items">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" v-if="item.isEdit">
                    <div class="panel-heading"><input type="text" v-model="item.title"></div>
                    <div class="panel-body">
                        <textarea v-model="item.content"></textarea>
                    </div>
                    <hr>
                    <p>
                        <button @click="updateItem($index)">Update</button>
                        <button @click="delItem($index)">Delete</button>
                        <button @click="cancelEdit($index)">Cancel</button>
                    </p>
                </div>
                <div class="panel panel-default" v-else>
                    <div class="panel-heading">{{ item.title }}</div>
                    <div class="panel-body">{{ item.content }}</div>
                    <hr>
                    <p>
                        <button @click="editItem($index)">Edit</button>
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
                <button type="button" class="btn btn-primary" @click="confirmDelItem()">Confirm</button>
              </div>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                id: 0,
                items: [{
                    isEdit: false,
                    title: 'Example Component',
                    content: 'I\'m an example component!'
                }],
                currentIndex: -1,
                showModal: false
            }
        },
        ready() {
            console.log('Component ready.')
        },
        methods: {
            addItem() {
                this.id++;

                // TODO: api
                this.items.push({
                    isEdit: false,
                    title: 'title ' + this.id,
                    content: 'content ' + this.id
                });
            },
            editItem(index) {
                this.currentIndex = index;
                this.items[index].isEdit = true;
            },
            cancelEdit(index) {
                this.currentIndex = -1;
                this.items[index].isEdit = false;
            },
            updateItem(index) {
                // TODO: api
                this.items[index].isEdit = false;
            },
            delItem(index) {
                $('#myModal').modal('show'); // TODO this.showModal = true
            },
            confirmDelItem() {
                // TODO: api
                this.items.splice(this.currentIndex, 1);
                $('#myModal').modal('hide'); // TODO: this.showModal = false
            },
            getItems() {
                // TODO: api
                console.log(this.items);
            }
        }
    }
</script>
