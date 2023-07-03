<template>

    <div id="add-blog">

        <h2>Add a new Blog Post</h2>

        <form v-if="!blog.submitted">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" v-model.lazy="blog.title">

            <label for="content">Body</label>
            <textarea name="content" id="content" cols="30" rows="10" v-model.lazy="blog.content"></textarea>

            <div id="checkboxes">

                <label for="ninjas">Ninjas</label>
                <input type="checkbox" value="ninjas" v-model="blog.categories"/>

                <label for="test">Test</label>
                <input type="checkbox" value="test" v-model="blog.categories"/>

                <label for="cheese">Cheese</label>
                <input type="checkbox" value="cheese" v-model="blog.categories"/>

            </div>

            <label for="author">Author:</label>

            <select name="author" id="author" v-model="blog.author">
                <option v-for="author in authors">{{ author.name }}</option>
            </select>

            <button v-on:click.prevent="post">Submit</button>

        </form>

        <div v-if="blog.submitted">
            <h3>Your Blogpost has been added</h3>
        </div>

        <div id="preview">
            <h3>Preview Blog</h3>

            <p>Author:</p>
            <p>{{ blog.author }}</p>

            <p>Blog title: </p>
            <p>{{ blog.title }}</p>
            <p>Blog content:</p>
            <p> {{ blog.content }}</p>

            <ul>
                <li v-for="category in blog.categories">
                    {{ category }}
                </li>
            </ul>

        </div>

    </div>

</template>

<script>
import axios from "axios";

export default {

    data() {
        return {
            blog: {
                title: '',
                content: '',
                categories: [],
                author: '',
                submitted: false
            },
            authors: [
                {name: 'Shaun', id: 1},
                {name: 'Crystal', id: 2},
                {name: 'Ryu', id: 3},
            ]
        }
    },
    methods: {
        post() {
            axios.post("https://jsonplaceholder.typicode.com/posts", {
                title: this.blog.title,
                body: this.blog.content,
                userId: this.blog.author.id
            }).then(data => {
                console.log(data)
                this.blog.submitted = true;
            }).catch(error => {
                console.log(error)
            })
        }
    },
    updated() {
        console.log(this.blog.author);
    }


}
</script>

<style scoped>

#add-blog * {
    box-sizing: border-box;
}

#add-blog {
    margin: 20px auto;
    max-width: 500px;
}

label {
    display: block;
    margin: 20px 0 10px;
}

input[type="text"], textarea {
    display: block;
    width: 100%;
    padding: 8px;
}

#preview {
    padding: 10px 20px;
    border: 1px dotted #ccc;
    margin: 30px 0;
}

#preview p:nth-child(even) {
    font-weight: bold;
}

h3 {
    margin-top: 10px;
}

#checkboxes input {
    display: inline-block;
    margin-right: 10px;
}

#checkboxes label {
    display: inline-block;
    margin-right: 10px;
}

</style>
