<template>
    <div>
        <add-blog></add-blog>
    </div>
</template>

<script>
import addBlog from "./addBlog.vue";

export default ({
    components: {
       addBlog
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
