import Vue from "vue";
import Blog from "./components/Blog.vue";

Vue.component("blog", Blog);

//Costum directives
Vue.directive("rainbow", {
    bind(el, binding, vnode) {
        el.style.color = "#" + Math.random().toString().slice(2, 8);
    },
});
Vue.directive("theme", {
    bind(el, binding, vnode) {
        if (binding.value === "wide") {
            el.style.maxWidth = "1200px";
        } else if (binding.value === "narrow") {
            el.style.maxWidth = "560px";
        }
        if (binding.arg === "column") {
            el.style.background = "#ddd";
            el.style.padding = "20px";
        }
    },
});

//Filters
Vue.filter("to-uppercase", (value) => {
    return value.toUpperCase();
});
Vue.filter("shorten-text", (value) => {
    return value.slice(0, 100) + "...";
});

const blogApp = new Vue({
    el: "#blog-app",
});
