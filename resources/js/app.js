require('./bootstrap');

//import Alpine from 'alpinejs';

//window.Alpine = Alpine;

//Alpine.start();


import Vue from 'vue'
import Test from './components/Test.vue'


window.Vue = require('vue');

//Vue.component('parties', require('./components/Parties.vue'));
Vue.component('test', require('./components/Test.vue'));


const test = new Vue({
    el: '#test',

    components: {
        //'parties': require('./components/Parties.vue'),
        //'test': require('./components/Test.vue'),
        Test
    }
});

