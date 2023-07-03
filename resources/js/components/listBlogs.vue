<template>
    <div v-theme:column="'narrow'" id="show-blogs">

        <h1>ListBlogs component</h1>
        <input type="text" v-model="searchInput" placeholder="Search...">
        <div class="single-blog" v-for="blog in filteredBlogs">
            <h2 v-rainbow>{{ blog.title | to-uppercase }}</h2>
        </div>

        <button v-on:click="scrollToTop">scroll to top</button>

    </div>
</template>

<script>
import axios from "axios";
import searchMixin from "../../mixins/searchMixin.js";

export default {
    data() {
        return {
            blogs: [],
            searchInput: ""
        }
    },
    methods: {

        scrollToTop() {
            document.querySelector("input").scrollIntoView({
                behavior: "smooth",
                block:"end"
            })
        }

    },
    created() {
        axios.get("https://jsonplaceholder.typicode.com/posts").then(data => {
            this.blogs = data.data.slice(0, 20)
        }).catch(error => {
            console.log(error)
        })
    },
    computed: {},
    filters: {
        toUppercase(value) {
            return value.toUpperCase();
        },
        shortenText(value) {
            return value.slice(0, 100) + "...";
        }
    },
    directives: {
        rainbow(el, binding, vnode) {
            el.style.color = "#" + Math.random().toString().slice(2, 8);
        },
        theme(el, binding, vnode) {
            if (binding.value == "wide") {
                el.style.maxWidth = "1200px";
            } else if (binding.value == "narrow") {
                el.style.maxWidth = "560px";
            }
            if (binding.arg == "column") {
                el.style.background = "#ddd";
                el.style.padding = "20px";
            }
        }
    },
    mixins: [searchMixin]
}
</script>

<style scoped>

#show-blogs {
    width: 80%;
    margin: 0 auto;
}

#show-blogs input {
    margin: 0 auto;
    display: block;
    width: 50%;
}

.single-blog {
    border: 3px solid #ccc;
    margin: 20px 0;
    box-sizing: border-box;
    padding: 20px;
    background: #eee;
}

</style>
