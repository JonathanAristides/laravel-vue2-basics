import Vue from "vue";
import Blog from "./components/Blog.vue";
// import Test from "./components/Test.vue";


//
// Vue.component("test", Test);
Vue.component("blog", Blog);

// const app = new Vue({
//     el: "#app",
// });

const blogApp = new Vue({
    el: "#blog-app",
});
