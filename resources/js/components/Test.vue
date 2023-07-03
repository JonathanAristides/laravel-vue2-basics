<template>
    <div>
        <slot></slot>
        <h1>from a vue component</h1>
        <button @click="handleClick">Click me</button>
        <slot></slot>
    </div>
</template>

<script>
export default {
    data() {
        return {
            componentName: 'TestComponent',
            link:"https://www.google.com"
        }
    },
    methods: {
        handleClick() {
            console.log('Button clicked.');
            console.log(this.componentName)
        },
        mounted() {
            console.log('Component mounted.');
        }
    },
};
</script>

<style scoped>


button {
    background-color: white;
    color: black;
    padding: 8px 16px;
    font-size: 16px;
}
</style>
