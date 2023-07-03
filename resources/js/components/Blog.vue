<template>
    <div>
        <show-blogs></show-blogs>
        <!--        <add-blog></add-blog>-->
    </div>
</template>

<script>
import addBlog from "./addBlog.vue";
import showBlogs from "./showBlogs.vue";

export default ({
    components: {
        addBlog,
        showBlogs
    },


    data() {
        return {
            componentName: 'BlogComponent',
        }

    }
})
</script>


<style scoped>


</style>
