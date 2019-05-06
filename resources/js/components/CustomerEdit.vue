
<template>
    <div>
        <div class="form-group">
            <router-link to="/" class="btn btn-default">Back</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Edit customer</div>
            <div class="panel-body">
                <form v-on:submit="saveForm()">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Customer name</label>
                            <input type="text" v-model="customer.name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Customer email</label>
                            <input type="text" v-model="customer.email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Customer address</label>
                            <input type="text" v-model="customer.address" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <button class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            app.customerId = id;
            axios.get('/api/customer/' + id)
                .then(function (resp) {
                    app.customer = resp.data;
                })
                .catch(function () {
                    alert("Could not load your customer")
                });
        },
        data: function () {
            return {
                customerId: null,
                customer: {
                    name: '',
                    email: '',
                    address: '',
                }
            }
        },
        methods: {
            saveForm() {
                var app = this;
                var newCustomer = app.customer;
                axios.patch('/api/customer/' + app.customerId, newCustomer)
                    .then(function (resp) {
                        app.$router.replace('/');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not create your customer");
                    });
            }
        }
    }
</script>
