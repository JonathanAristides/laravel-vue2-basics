<template>
    <div>

        <subheader></subheader>
        <router-view>   </router-view>

        <!--        <show-blogs></show-blogs>-->
        <!--        <list-blogs></list-blogs>-->
        <!--        <add-blog></add-blog>-->
    </div>
</template>

<script>
import addBlog from "./addBlog.vue";
import showBlogs from "./showBlogs.vue";
import listBlogs from "./listBlogs.vue";
import subheader from "./subheader.vue";

export default ({
    components: {
        addBlog,
        showBlogs,
        listBlogs,
        subheader
    },


    data() {
        return {
            componentName: 'BlogComponent',
        }

    }
})
</script>


<style scoped>

* {
    font-family: 'Nunito', sans-serif;
}

</style>
