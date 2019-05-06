require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import CustomerIndex from './components/CustomerIndex.vue';
import CustomerCreate from './components/CustomerCreate.vue';
import CustomerEdit from './components/CustomerEdit.vue';

const routes = [
    {
        path: '/',
        components: {
            customerIndex: CustomerIndex
        }
    },
    {path: 'customer/create', component: CustomerCreate, name: 'createCustomer'},
    {path: 'customer/edit/:id', component: CustomerEdit, name: 'editCustomer'},
]

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')
