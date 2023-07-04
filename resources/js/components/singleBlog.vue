<template>
    <div id="single-blog">
        <h1>{{blog.title}}</h1>
        <article>{{blog.body}}</article>
    </div>
</template>

<script>
import axios from "axios";

export default {

    data() {
        return {
            id: this.$route.params.id,
            blog: {}
        }
    },
    created() {
        axios.get("https://jsonplaceholder.typicode.com/posts/" + this.id).then(data => {
            console.log(data.data)
            this.blog = data.data
        }).catch(error => {
            console.log(error)
        })
    }

}
</script>

<style scoped>

#single-blog {
    max-width: 700px;
    margin: 0 auto;
}

</style>
