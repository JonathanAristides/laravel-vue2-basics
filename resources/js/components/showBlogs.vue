<template>
    <div v-theme:column="'narrow'" id="show-blogs">

        <h1>All Blogposts</h1>
        <input type="text" v-model="searchInput" placeholder="Search...">
        <div class="single-blog" v-for="blog in filteredBlogs">
            <h2 v-rainbow>{{ blog.title | to-uppercase }}</h2>
            <article>{{ blog.body | shorten-text }}</article>
        </div>

    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            blogs: [],
            searchInput: ""
        }
    },
    methods: {},
    created() {
        axios.get("https://jsonplaceholder.typicode.com/posts").then(data => {
            this.blogs = data.data.slice(0, 10)
        }).catch(error => {
            console.log(error)
        })
    },
    computed:{
        filteredBlogs(){
            return this.blogs.filter((blog)=>{
                return blog.title.match(this.searchInput)
            })
        }
    }
}
</script>

<style scoped>

#show-blogs {
    width: 80%;
    margin: 0 auto;
}
#show-blogs input{
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
