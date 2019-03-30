<template>
<div>{{ test }}}</div>
</template>

<script>
    export default {
        name: "quiz.vue",
        props: {
            test: String,
        },
        mounted() {
            console.log('quiz.vue mounted')
        },
    }
</script>

<style scoped>

</style>
