<template>
    <h3>Testing 13</h3>
    <h2>We should loop it</h2>
    <ul>
        <li v-for="framework of frameworks" v-text="framework"></li>
    </ul>
</template>

<script>
    export default{
        props: {
            'frameworks' : Array,
        }
    }
</script>