import Vue from 'vue';
import Test from "./components/Test.vue";


Vue.component('test', Test);

const app = new Vue({
    el: '#app',
});
