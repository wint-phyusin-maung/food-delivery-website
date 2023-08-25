<template>
    <Layout :username="username">
        <h1 class="text-4xl">Home</h1>
    </Layout>
</template>

<script setup>
    import Layout from '../Shared/Layout.vue';

    defineProps({
        'username' : String
    })
</script>
