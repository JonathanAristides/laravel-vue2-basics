import showBlogs from "./js/components/showBlogs.vue";
import listBlogs from "./js/components/listBlogs.vue";
import addBlog from "./js/components/addBlog.vue";

export default [
    {
        path: "/",
        component: showBlogs,
    },
    {
        path: "/list",
        component: listBlogs,
    },
    {
        path:"/add",
        component: addBlog,
    }
];
