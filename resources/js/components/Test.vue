<template>
    <div>
        <h1>from a vue component</h1>
        <button @click="handleClick">Click me</button>
    </div>
</template>

<script>
export default {
    data() {
        return {};
    },
    methods: {
        handleClick() {
            console.log('Button clicked.');
        },
        mounted() {
            console.log('Component mounted.');
        }
    },
};
</script>

<style scoped>
h1 {
    color: blue;
}

button {
    background-color: yellow;
    color: black;
    padding: 8px 16px;
    font-size: 16px;
}
</style>
