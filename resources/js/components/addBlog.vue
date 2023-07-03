<template>

    <div id="add-blog">
        <h2>Add a new Blog Post</h2>

        <form>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" v-model.lazy="blog.title">

            <label for="content">Body</label>
            <textarea name="content" id="content" cols="30" rows="10" v-model.lazy="blog.content"></textarea>

            <input type="submit" value="Submit">
        </form>

        <div id="preview">
            <h3>Preview Blog</h3>
            <p>Blog title: </p>
            <p>{{ blog.title }}</p>
            <p>Blog content:</p>
            <p> {{ blog.content }}</p>
        </div>
    </div>

</template>

<script>
export default {

    data() {
       return {
           blog:{
               title: '',
               content: ''
           }
       }
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

h3 {
    margin-top: 10px;
}
</style>
