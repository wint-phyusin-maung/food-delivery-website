<template>
   <Layout>
        <h3 class="text-4xl font-bold">Users</h3>
   </Layout>
   <div style="margin-top:600px">
        <h3>The current time is {{ time }}.</h3>
        <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
   </div>
</template>

<script>
    import Layout from '../Shared/Layout.vue';
    import { Link } from '@inertiajs/vue3';

    export default{
        components: {
            Link,Layout
        },
        props : {
            time: String
        }
    }
</script>

